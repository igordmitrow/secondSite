<?php 

	include_once '../libs/rb.php';

	R::setup( 'mysql:host=localhost;dbname=luxury', 'root', '' );

	$data = $_POST;
	$err = array();

	if (isset($data['submit'])) {
		if (trim($data['login'] == '')) {
			$err[] = 'Введите логин'; 
		}

		if (trim($data['pass'] == '')) {
			$err[] = 'Введите пароль'; 
		}

		if (empty($err)) {
			// $admin = R::dispense('admin');
			// $admin->login = $data['login'];
			// $admin->pass = password_hash($data['pass'], PASSWORD_DEFAULT);
			// R::store($admin);

			$admin = R::findOne('admin', 'login = ?', array($data['login']));
			if ($admin) {
				if (password_verify($data['pass'], $admin->pass)) {
					setcookie('success', 'login' ,time()+99999,'/','');
					header('Location: ../admin.php');
				}else {
					$err[] = 'Неверный пароль';
					setcookie('errors', $err[0] ,time()+100,'/','');
					header('Location: ../admin.php');
				}
			} else {
				$err[] = 'Пользователь не найден';
				setcookie('errors', $err[0] ,time()+100,'/','');
				header('Location: ../admin.php');
			}
		}else {
			setcookie('errors', $err[0] ,time()+100,'/','');
			header('Location: ../admin.php');
		}
	}else header('Location: ../admin.php');
 ?>
