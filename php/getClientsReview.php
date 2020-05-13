<?php

	if ($_POST['fun'] == 'getCR') {
		
		$reviews = array(
					array('name' => 'Dr. Jackson Bart',
						  'review' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum laboriosam aspernatur, corporis sequi maiores maxime eligendi vel asperiores beatae commodi iure quia facere laborum minima. Ab qui placeat aperiam facilis?',
						  'img' => './img/Review/quoteimage-min.png',
						  'rate' => '★★★★★'),
					array('name' => 'Dr. Prabakaran John',
						  'review' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores iusto tempore voluptatum blanditiis impedit alias magni ullam facilis perspiciatis magnam cum dignissimos doloremque, repudiandae obcaecati dolor, quae voluptatem. Quia, similique.',
						  'img' => './img/Review/quoteimage-min.png',
						  'rate' => '★★★'),
					array('name' => 'Dr. Robenson Mike',
						  'review' => 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose. ',
						  'img' => './img/Review/quoteimage-min.png',
						  'rate' => '★'),

				);

		echo json_encode($reviews);
	}

?>