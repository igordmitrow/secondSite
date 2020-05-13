<?php 

	if (isset($_POST['changeArticle'])) {
		
		$file = $_POST['changeArticle'];

		$path = '../articles/';

		$handle = fopen($path.$file, 'r');
		$text = fread($handle, filesize($path.$file));

		echo $text;

		fclose($handle);


	}elseif (isset($_POST['submit'])) {

		if (basename($_FILES["fileToUpload"]["name"] != '')) {
			
			$arr['img'] = basename($_FILES["fileToUpload"]["name"]);

			if ($_FILES["fileToUpload"]["size"] > 512000) {
				$err[] = 'Размер картинки больше 512KB';
			}

			if (empty($arr)) {
				move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "../articles/imgs/".basename($_FILES["fileToUpload"]["name"]));
			}
		}else {
			$arr['img'] = $_POST['oldImage'];

		}


			$arr['title'] = $_POST['title'];
			$arr['tags'] = $_POST['tags'];
			$arr['text'] = $_POST['text'];
			$arr['name'] = $_POST['name'];



		if ($arr['title'] == '') {
			$err[] = 'Введите заголовок'; 
		}

		if ($arr['tags'] == '') {
			$arr['tags'] = explode(" ", $arr['tags']);
		}

		if ($arr['text'] == '') {
			$err[] = 'Введите текст'; 
		}


		if (empty($err)) {
		
			$file = "../articles/".$arr['name'];

			$time = filemtime($file.'.json');
			$handle = fopen($file.'.json',"r");
			$json =  json_decode(fread($handle, filesize($file.'.json')),true);
			$arr['view'] = $json['view'];
			$arr['likes'] = $json['likes'];
			$handle = fopen($file.".json", 'w');

			$json = json_encode($arr);

			fwrite($handle, $json);
			fclose($handle);


			touch($file.'.json', $time);

		} else {
			setcookie('artErr', $err[0] ,time()+100,'/','');
		}

		setcookie('link', 'changeContent()' ,time()+100,'/','');
		header('Location: ../admin.php');
		
	}


 ?>