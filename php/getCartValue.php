<?php

	if(isset($_COOKIE['items'])){
		echo $_COOKIE['items'];
	}else {
		echo '0';
	}


?>