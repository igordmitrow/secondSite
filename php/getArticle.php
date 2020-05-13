<?php 

	$arr = explode("|", $_POST["fun"]); 
	if($arr[0] == 'getArticle'){
		$file = $arr[1];
		$path = '../articles/'.$file.".json";
		$handle = fopen($path,"r");
		$json = json_decode(fread($handle, filesize($path)));
		echo json_encode($json);
	}

 ?>