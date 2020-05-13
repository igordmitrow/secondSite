<?php 
	
	if (isset($_POST['submit'])) {

		$img = $_FILES['fileToUpload'];
		
		$arr['title'] = $_POST['title'];
		$arr['tags'] = $_POST['tags'];
		$arr['img'] = basename($_FILES["fileToUpload"]["name"]);
		$arr['text'] = $_POST['text'];
		$arr['name'] = date('Y-m-d').'-'.md5(rand(1,1000));
		$arr['likes'] = 0;
		$arr['view'] = 0;


		if ($arr['title'] == '') {
			$err[] = 'Введите заголовок'; 
		}

		if ($arr['tags'] == '') {
			$arr['tags'] = explode(" ", $arr['tags']);
		}

		if ($arr['img'] == '') {
			$err[] = 'Загрузите картинку'; 
		}

		if ($_FILES["fileToUpload"]["size"] > 512000) {
			$err[] = 'Размер картинки больше 512KB';
		}

		if ($arr['text'] == '') {
			$err[] = 'Введите текст'; 
		}


		if (empty($err)) {
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "../articles/imgs/".basename($_FILES["fileToUpload"]["name"]));


			$file = "../articles/".$arr['name'];

			$handle = fopen($file.".json", 'a+');

			$json = json_encode($arr);

			fwrite($handle, $json);
			fclose($handle);
		} else {
			setcookie('artErr', $err[0] ,time()+100,'/','');
		}

		setcookie('link', 'addContent()' ,time()+100,'/','');
		header('Location: ../admin.php');
	}
 ?>