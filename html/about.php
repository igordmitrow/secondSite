<?php


	//HTML code for About Page
	
if ($_POST['fun'] == 'main') {
		

	$about = '<section class="main-title maxWidth margin-center">
				<picture class=\'about-us-bg maxWidth\'>
					<img src=\'/img/dummy.gif\' class=\'maxWidth\' id=\'about-us\' data-src=\'/img/About/page-title-min.jpg\' alt=\'About us\'>
				</picture>
				<div class="title">
					<img src=\'/img/dummy.gif\' id=\'page-title-left\' data-src=\'/img/About/page-title-icon-left-min.png\' alt=\'\'>
					<h1>About Us</h1>
					<img src=\'/img/dummy.gif\' id=\'page-title-right\' data-src=\'/img/About/page-title-icon-right-min.png\' alt=\'\'>
				</div>
			  </section>
			  <section class="history maxWidth margin-center">
			  	<h1 class=\'margin-center\'>Our History</h1>

				<h2 class=\'margin-center\'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
				</h2>

				<picture class=\'movie-about maxWidth margin-center\'>
					<img src=\'/img/dummy.gif\' id=\'movie\' data-src=\'/img/About/video-image-min.jpg\' alt=\'Movie\'>
				</picture>

				<h3 class=\'margin-center\'>our hotel video</h3>
				<hr>
			  </section>
			  <section class="cooks maxWidth margin-center">
			  	<picture class=\'cooks-bg maxWidth\'>
					<img src=\'/img/dummy.gif\' id=\'cooks\' data-src=\'/img/About/grey-bg-min.png\' alt=\'Background\'>
				</picture>

				<h1 class="translate-center">Our Cooks</h1>

				<div class="chefs maxWidth"></div>
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


	echo $about;
	
}

?>
