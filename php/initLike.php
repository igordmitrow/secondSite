<?php

	function changeLikes($title,$type) {
		$path = '../articles/';
		$handle = fopen($path.$title, 'r');
		$text = fread($handle, filesize($path.$file));
		$time = filemtime($path.$title);
		fclose($handle);
		$arr = json_decode($text,true);
		if(!isset($arr["likes"])){
			$arr["likes"] = 0;
		}
		$arr["likes"] += $type;
		$json = json_encode($arr);
		$handle = fopen($path.$title, 'w');
		fwrite($handle, $json);
		fclose($handle);

		touch($path.$title, $time);
	}

	$arr = explode("|", $_POST["fun"]); 

	if($arr[0] == "getLike"){
		if(isset($_COOKIE['liked'])){
			$likes = json_decode($_COOKIE['liked'],true);
			if($likes[$arr[1]] == 1){
				echo "1";
			}else {
				echo "0";
			}
		}else {
			echo '0';
		}
	}elseif ($arr[0] == "setLike") {
		if(isset($_COOKIE['liked'])){
			$likes = json_decode($_COOKIE['liked'],true);
			if($likes[$arr[1]] == 0){
				$likes[$arr[1]] = 1;
				setcookie('liked', json_encode($likes) ,time()+9999999999,'/','');
				changeLikes($arr[1].".json",1);
				echo "set";
			}
			else {
				unset($likes[$arr[1]]);
				setcookie('liked', json_encode($likes) ,time()+9999999999,'/','');
				changeLikes($arr[1].".json",-1);
				echo "del";
			}
		}else {
			$likes[$arr[1]] = 1;
			setcookie('liked', json_encode($likes) ,time()+9999999999,'/','');
			changeLikes($arr[1].".json",1);
			echo "set";
		}
	}


?>