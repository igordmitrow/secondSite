<?php 

	if (isset($_POST['removeArticles'])) {
		
		$file = $_POST['removeArticles'];
		unlink('../articles/'.$file);
		echo "string";

	}


 ?>