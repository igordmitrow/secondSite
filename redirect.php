<?php

	$url = $_SERVER['REQUEST_URI'];
	$url[0] = '';
	$url = explode('/', $url);
	$year = $url[0];
	preg_match_all('!\d+!', $_SERVER['REQUEST_URI'], $matches);
	if (strpos($url[0], 'about') !== false) {

		defaultPage();
	
		echo '<script type="text/javascript">',
     		 'ajaxPhp("about","html","main");',
     		 ' ajaxPhp("getCartValue", "php");',
     		 'document.title = "About us";',
     		 "</script>";

	}else if (strpos($url[0], 'menu') !== false){

		defaultPage();
	
		echo '<script type="text/javascript">',
     		 'ajaxPhp("menu","html","main");',
     		 ' ajaxPhp("getCartValue", "php");',
     		 'document.title = "Menu";',
     		 'addMenu();',
     		 "</script>";

	}else if (strpos($url[0], 'contact') !== false){

		defaultPage();
	
		echo '<script type="text/javascript">',
     		 'ajaxPhp("contact","html","main");',
     		 ' ajaxPhp("getCartValue", "php");',
     		 'document.title = "Contact us";',
     		 "</script>";

	}else if (strpos($url[0], 'reservation') !== false){

		defaultPage();
	
		echo '<script type="text/javascript">',
     		 'ajaxPhp("reservation","html","main");',
     		 ' ajaxPhp("getCartValue", "php");',
     		 'document.title = "Book a Table";',
     		 'setTimeout(function () {
     		 	changeInputType();
     		 }, 1000);',
     		 "</script>";

	}else if (strpos($url[0], 'blog') !== false){

		defaultPage();
	
		echo '<script type="text/javascript">',
     		 'ajaxPhp("blog","html","main");',
     		 ' ajaxPhp("getCartValue", "php");',
     		 'document.title = "Blog";',
     		 'setTimeout(function () {
     		 	getArticles();
     		 },1000);',
     		 "</script>";

	}else if (strpos($url[0], 'admin') !== false){

		header('Location: ../admin.php');
	}else if ($matches[0][0] >= 2019) {
		if($matches[0][1] <= 12){
			if($matches[0][2] <= 31){
				$title = str_replace('-', ' ', $url[3]);
				$files = $matches[0][0].'-'.$matches[0][1].'-'.$matches[0][2].'-';
				$matches = glob("articles/".$files."*");
				$find = false;
				foreach ($matches as $file) {
					$handle = fopen($file, 'r');
					$json =  json_decode(fread($handle, filesize($file)),true);
					if(strpos($json['title'], $title) !== false){
						$name = explode('/', $file);
						$name = explode('.', $name[1]);
						defaultPage();
						echo '<script type="text/javascript">',
				     		 'ajaxPhp("blog","html","main");',
				     		 ' ajaxPhp("getCartValue", "php");',
				     		 'document.title = "Blog";',
				     		 'setTimeout(function () {
				     		 	ajaxPhp(\'initView\',\'php\',\'initView|'.$name[0].'\');
					     		history.replaceState({ foo: \'bar\' }, \'page 2\', \'/\');
				     		 	ajaxPhp("getArticle","php",\'getArticle|'.$name[0].'\');
				     		 },100);',
				     		 "</script>";
                           $find = true;
					}

					fclose($handle);
				}

				if($find == false){
					header('Location: /404.html');
				}
			}
		}

	}else {
		header('Location: ../404.html');
	}



	function defaultPage() {

		echo '<meta charset="utf-8">
			  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0,   user-scalable=0" name="viewport">';
		echo '<link rel="manifest" href="manifest.webmanifest">';
		echo '<link rel="stylesheet" href="/css/styles.css">';
		echo '<link href="https://fonts.googleapis.com/css?family=Sintony" rel="stylesheet">
			  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap" rel="stylesheet">
		      <link href="https://fonts.googleapis.com/css?family=Roboto:500&display=swap" rel="stylesheet">';
		echo '<script src="/js/spa.js"></script>';
		echo '<header class="header margin-center" id="header"></header>',
		     '<main class="main maxWidth margin-center" id="main"></main>',
		     '<footer class="footer maxWidth margin-center" id="footer"></footer>';
		echo '<script src="/js/script.js"></script>';
		echo '<script src="/js/lazyload.js"></script>';
		echo '<script type="text/javascript">',
     		 'ajaxPhp("header","html","header");',
     		 "</script>";
 		echo '<script type="text/javascript">',
 		 'ajaxPhp("footer","html","footer");',
 		 "</script>";
	}

?>