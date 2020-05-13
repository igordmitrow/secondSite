<?php

	function changeLikes($title) {
		$path = '../articles/';
		$handle = fopen($path.$title, 'r');
		$text = fread($handle, filesize($path.$file));
		$time = filemtime($path.$title);
		fclose($handle);
		$arr = json_decode($text,true);
		if(!isset($arr["view"])){
			$arr["view"] = 0;
		}
		$arr["view"] += 1;
		$json = json_encode($arr);
		$handle = fopen($path.$title, 'w');
		fwrite($handle, $json);
		fclose($handle);

		touch($path.$title, $time);
	}

	$arr = explode("|", $_POST["fun"]); 

	if ($arr[0] == "initView") {
		if(isset($_COOKIE['view'])){
			$likes = json_decode($_COOKIE['view'],true);
			if($likes[$arr[1]] == 0){
				$likes[$arr[1]] = 1;
				setcookie('view', json_encode($likes) ,time()+9999999999,'/','');
				changeLikes($arr[1].".json");
				echo "set";
			}
		}else {
			$likes[$arr[1]] = 1;
			setcookie('view', json_encode($likes) ,time()+9999999999,'/','');
			changeLikes($arr[1].".json");
			echo "set";
		}
	}


?>