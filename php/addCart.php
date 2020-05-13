<?php

	if(isset($_COOKIE['items'])){
		$i = $_COOKIE['items'];
	}else {
		$i = 0;
	}

	$i++;

	setcookie('items', $i ,time()+10,'/','');
?>