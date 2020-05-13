<?php


	//HTML code for Menu Page
	
if ($_POST['fun'] == 'main') {
		

	$menu = '<section class="main-title maxWidth margin-center">
				<picture class=\'menu-bg maxWidth\'>
					<img src=\'/img/dummy.gif\' class=\'maxWidth\' id=\'menu\' data-src=\'/img/About/page-title-min.jpg\' alt=\'Menu\'>
				</picture>
				<div class="title">
					<img src=\'/img/dummy.gif\' id=\'page-title-left\' data-src=\'/img/About/page-title-icon-left-min.png\' alt=\'\'>
					<h1>Menu</h1>
					<img src=\'/img/dummy.gif\' id=\'page-title-right\' data-src=\'/img/About/page-title-icon-right-min.png\' alt=\'\'>
				</div>
			  </section>
			  <section class=\'Menu margin-center\'>
				<div class="menu"></div>
			  </section>
			  <section class="speciality maxWidth margin-center">
			  	<picture class=\'speciality-bg\'>
					<img src=\'/img/dummy.gif\' id=\'speciality\' data-src=\'/img/About/about-us-image-min.jpg\' alt=\'Background\'>
				</picture>

				<div class="text">
					<h1>Speciality</h1>

					<h2>EXCELLENT SERVICE</h2>
					<h3>Survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</h3>

					<h2>FREE HOME DELIVERY</h2>
					<h3>Survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</h3>

					<h2>FRIENDLY ATMOSPHERE</h2>
					<h3>Survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</h3>
				</div>
				
				<hr class=\'translate-center\'>
			  </section>
			  <section class=\'openingHours\'>
				<div class=\'title\'>Opening Hours</div>

				<div class=\'weekdays\'>
					<div class=\'days\'><i>Monday to Friday</i></div>
					<div class=\'hours\'>10am - 10pm</div>
				</div>

				<div class=\'weekends\'>
					<div class=\'days\'><i>Saturday to Sunday</i></div>
					<div class=\'hours\'>9am - 11pm</div>
				</div>

				<picture class=\'pepers\'>
					<img src=\'/img/dummy.gif\' id=\'pepers-bg\' data-src=\'/img/Main/pepers-image.png\' alt=\'Pepers\'>
				</picture>
			  </section>';


	echo $menu;
	
}

?>
