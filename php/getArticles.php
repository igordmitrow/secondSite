<?php 

	if (isset($_POST['getArticles'])) {
		
		$folder = $_POST['getArticles'];

		$path = '../'.$folder.'/';

		$files = scandir($path);
		$i = 0;

		foreach ($files as $file) {

			$type =  strtolower(pathinfo($path.$file,PATHINFO_EXTENSION));

			if ($type == 'json') {
				
				$arr[$file] = filemtime($path . '/' . $file);

			}
		}

		arsort($arr);
		$arr = array_keys($arr);

		foreach ($arr as $key => $value) {
			
				$handle = fopen($path.$value, 'r');
				$text = fread($handle, filesize($path.$value));
				$articles[$i] = json_decode($text);

				$i++;

				fclose($handle);

		}

		echo json_encode($articles);

	}


 ?>