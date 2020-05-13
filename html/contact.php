<?php


	//HTML code for Contact Page
	
if ($_POST['fun'] == 'main') {
		

	$contact = '<section class="main-title maxWidth margin-center">
				<picture class=\'contact-bg maxWidth\'>
					<img src=\'/img/dummy.gif\' class=\'maxWidth\' id=\'contact\' data-src=\'/img/About/page-title-min.jpg\' alt=\'contact\'>
				</picture>
				<div class="title">
					<img src=\'/img/dummy.gif\' id=\'page-title-left\' data-src=\'/img/About/page-title-icon-left-min.png\' alt=\'\'>
					<h1 class="contact-title">Contact Us</h1>
					<img src=\'/img/dummy.gif\' id=\'page-title-right\' data-src=\'/img/About/page-title-icon-right-min.png\' alt=\'\'>
				</div>
			  </section>
			  <section class="map">
				<div class="google-map maxWidth">
					<iframe src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=1775%2017th%20St%2C%20San%20Francisco%2C%20CA+(%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
					</iframe>
				</div>

				<div class="info margin-center">
					<div class="address">
						<h1>Our Address</h1>

						<h3>address</h3>
						<h2>Luxury Restaurent <br> California Second Street <br> 2nd floor</h2>

						<h3>phone</h3>
						<h2>+91 8559 5585 6559</h2>

						<h3>email</h3>
						<h2>info@luxuryrestaurent.com</h2>

						<h3>follow us</h3>
						<div class="social">
							<button class=\'facebook\'><img src="/img/facebook.svg" alt="Facebook"></button>
					   		<button class=\'twitter\'><img src="/img/twitter.svg" alt="Twitter"></button>
					   		<button class=\'google-plus\'><img src="/img/google-plus.svg" alt="Google+"></button>
						</div>
					</div>
					<form action="">
						<h1>Get In Touch</h1>
						<input type="text" required placeholder="Name">
						<input type="email" required placeholder="Email">
						<textarea name="msg" id="msg" cols="30" rows="10" required placeholder="Message"></textarea>
						<button class=\'send\' id=\'send\'><div>Send Now</div></button>
						<div class="dummy"><div>
					</form>
					
				</div>
			  </section>';


	echo $contact;
	
}

?>
