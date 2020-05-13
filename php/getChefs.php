<?php

	if ($_POST['fun'] == 'getChefs') {
		
		$chefs = array(
					array('name' => 'John Cliff',
						  'img' => './img/About/chef-1-min.jpg',
						  'position' => 'Head Chef'),
					array('name' => 'Mariya Thomas',
						  'img' => './img/About/chef-2-min.jpg',
						  'position' => 'Sous Chef'),
					array('name' => 'Peter Vasko',
						  'img' => './img/About/chef-3-min.jpg',
						  'position' => 'Line Cook'),
					array('name' => 'James Dico',
						  'img' => './img/About/chef-4-min.jpg',
						  'position' => 'Line Cook'),
				);

		echo json_encode($chefs);
	}

?>