<?php

	/*
			Return different special foods
	*/

	$func = $_POST['fun'];



	if ($func == 'dishesOfTheDay') {
		$possible = [array('name' => 'CAPO STEAK','desc' => 'Add-in a custom short description…',
						   'img' => '/img/Menu/food-4-600x360.webp','price' => '$49.00'),
					 array('name' => 'FISH PAKODA','desc' => 'Add-in a custom short description…',
					 	   'img' => '/img/Menu/food-8-600x360.webp','price' => '$22.00'),
					 array('name' => 'JUMBO CARB SHRIMP','desc' => 'Add-in a custom short description…',
					 	   'img' => '/img/Menu/food-9-600x360.webp','price' => '$50.00'),
					 array('name' => 'ORGANIC FRUIT SALAD','desc' => 'Add-in a custom short description…',
					 	   'img' => '/img/Menu/food-7-600x360.webp','price' => '$45.00'),
					 array('name' => 'PLAIN CHEESEBURGER','desc' => 'Add-in a custom short description…',
					 	   'img' => '/img/Menu/food-5-600x360.webp','price' => '$68.00'),
					 array('name' => 'SURMAI CHILLI','desc' => 'Add-in a custom short description…',
					 	   'img' => '/img/Menu/food-10-600x360.webp','price' => '$39.00'),
					 array('name' => 'PRAWNS BUTTER GARLIC','desc' => 'Add-in a custom short description…',
					 	   'img' => '/img/Menu/food-6-600x360.webp','price' => '$55.00'),
					 array('name' => 'SODE KADAI','desc' => 'Add-in a custom short description…',
					 	   'img' => '/img/Menu/food-3-600x360.webp','price' => '$40.00'),
					 array('name' => 'SKUHAT CHUTNEY','desc' => 'Add-in a custom short description…',
					 	   'img' => '/img/Menu/food-4-600x360.webp','price' => '$49.00'),
					 array('name' => 'TOASTED JAM','desc' => 'Add-in a custom short description…',
					 	   'img' => '/img/Menu/food-7-600x360.webp','price' => '$10.00')];


		$dishes = array_rand($possible, 2);

		$dishes = array($possible[$dishes[0]],$possible[$dishes[1]]);

		echo json_encode($dishes);
	}elseif ($func == 'menu') {
		$dishes = [array('name' => 'CAPO STEAK','desc' => 'Add-in a custom short description…',
						   'img' => '/img/Menu/food-4-200x140.webp','price' => '$49.00'),
					 array('name' => 'FISH PAKODA','desc' => 'Add-in a custom short description…',
					 	   'img' => '/img/Menu/food-8-200x140.webp','price' => '$22.00'),
					 array('name' => 'JUMBO CARB SHRIMP','desc' => 'Add-in a custom short description…',
					 	   'img' => '/img/Menu/food-9-200x140.webp','price' => '$50.00'),
					 array('name' => 'ORGANIC FRUIT SALAD','desc' => 'Add-in a custom short description…',
					 	   'img' => '/img/Menu/food-7-200x140.webp','price' => '$45.00'),
					 array('name' => 'PLAIN CHEESEBURGER','desc' => 'Add-in a custom short description…',
					 	   'img' => '/img/Menu/food-5-200x140.webp','price' => '$68.00'),
					 array('name' => 'SURMAI CHILLI','desc' => 'Add-in a custom short description…',
					 	   'img' => '/img/Menu/food-10-200x140.webp','price' => '$39.00'),
					 array('name' => 'PRAWNS BUTTER GARLIC','desc' => 'Add-in a custom short description…',
					 	   'img' => '/img/Menu/food-6-200x140.webp','price' => '$55.00'),
					 array('name' => 'SODE KADAI','desc' => 'Add-in a custom short description…',
					 	   'img' => '/img/Menu/food-3-200x140.webp','price' => '$40.00'),
					 array('name' => 'SKUHAT CHUTNEY','desc' => 'Add-in a custom short description…',
					 	   'img' => '/img/Menu/food-4-200x140.webp','price' => '$49.00'),
					 array('name' => 'TOASTED JAM','desc' => 'Add-in a custom short description…',
					 	   'img' => '/img/Menu/food-7-200x140.webp','price' => '$10.00')];
		echo json_encode($dishes);
	}





?>