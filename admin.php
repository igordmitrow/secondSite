<?php


	if(isset($_COOKIE['success'])){
		$suc = $_COOKIE['success'];
		//setcookie('success', null, time()+1, '/'); 

		if (isset($_COOKIE['artErr'])) {
			$err = $_COOKIE['artErr'];
	   		setcookie('artErr', null, time()+1, '/'); 
	   		setcookie('link', null, time()+1, '/'); 
		}

		elseif(isset($_COOKIE['link'])) {
			$link = $_COOKIE['link'];
	   		setcookie('link', null, time()+1, '/'); 
		}
	?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0,   user-scalable=0" name="viewport">

		<link rel="stylesheet" href="/css/admin.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:500&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap" rel="stylesheet">

		<title>Admin Panel</title>
	</head>
<body>
	<header>
		<div class="header-logo">
			<picture class='logo-bg\'>
			<img src='/img/logo-min.png' id='logo-bg' alt='Logo'>
			</picture>
		</div>
	</header>
	<main>
		<aside class="menu">
			<ul>
				<li><a data-link='add'>Add article</a></li>
				<li><a data-link='change'>Change article</a></li>
				<li><a data-link='remove'>Remove article</a></li>
			</ul>
		</aside>
		<div class="content">

			<div class="welcome">
				<h1>Welcome to the admin panel!</h1>
				<h2>Here you can add, edit, delete blog articles.</h2>
				<?php
				 	if ($err) {
				 		echo '<h2 class=\'artErr\'>'.$err.'</h2>';
				 	}
				 ?>
			</div>
		</div>
	</main>

	<script src="/js/admin.js"></script>

	<?php 
		if($link) {
			echo '<script>'.$link.'</script>';
		}
	 ?>
</body>
</html>

<?php

	}else {

	if(isset($_COOKIE['errors'])){
		$err = $_COOKIE['errors'];
   		setcookie('errors', null, time()+1, '/'); 
		echo '<div class=\'error\'>'.$err.'</div>';
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0,   user-scalable=0" name="viewport">
	<link rel="stylesheet" href="/css/admin.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:500&display=swap" rel="stylesheet">
	<title>Admin Panel</title>
</head>
<body>
	<header>
		<div class="header-logo">
					<picture class='logo-bg\'>
					<img src='/img/logo-min.png' id='logo-bg' alt='Logo'>
					</picture>
				</div>
	</header>
	<section class="login-form">
		<form action="/php/admin-login.php" method="POST">
			<input name='login' type="text" placeholder="Login">
			<input name='pass' type="password" placeholder="Password">
			<input name='submit' type="submit">
		</form>
	</section>
</body>
</html>

<?php 
	}
?>