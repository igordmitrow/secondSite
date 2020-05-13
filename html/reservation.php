<?php


	//HTML code for Reservation Page
	
if ($_POST['fun'] == 'main') {
		

	$reservation = '<section class="main-title maxWidth margin-center">
				<picture class=\'reservation-bg maxWidth\'>
					<img src=\'/img/dummy.gif\' class=\'maxWidth\' id=\'reservation\' data-src=\'/img/About/page-title-min.jpg\' alt=\'Reservation\'>
				</picture>
				<div class="title">
					<img src=\'/img/dummy.gif\' id=\'page-title-left\' data-src=\'/img/About/page-title-icon-left-min.png\' alt=\'\'>
					<h1 class="reservation-title">Reservation</h1>
					<img src=\'/img/dummy.gif\' id=\'page-title-right\' data-src=\'/img/About/page-title-icon-right-min.png\' alt=\'\'>
				</div>
			  </section>
			  <section class="book">
				<h1>Book a Table</h1>
				<h2 class="margin-center">Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </h2>
				<form class="margin-center" action="">
					<input title="Your Name" type="text" required placeholder="Name">
					<input title="Your Email" type="email" required placeholder="Email">
					<input title="Your Phone" type="tel" required placeholder="Phone">
					<input title="Date" class="changable" type="text" required placeholder="Date">
					<input title="Time" class="changable" type="text" required placeholder="Time">
					<input title="Special Requirements" type="text" required placeholder="Guests">
					<textarea name="msg" id="msg" cols="30" rows="10" required placeholder="Special Requirements"></textarea>
					<button class=\'send margin-center\' id=\'send\'><div>Make reservation</div></button>
				</form>
			  </section>
			  <section class="special-reservation maxWidth">
			  	<picture class=\'special-bg maxWidth\'>
					<img src=\'/img/dummy.gif\' id=\'special\' data-src=\'/img/About/grey-bg-min.png\' alt=\'Background\'>
				</picture>

				<h1>Special Reservations</h1>

					<div class="wrapper">
						<div class="advantages">
							<picture class=\'advantages-img\'>
								<img src=\'/img/dummy.gif\' id=\'advantages-1\' data-src=\'/img/Reservation/image-1.jpg\' alt=\'Background\'>
							</picture>
							<h2>Group Dining</h2>
							<h3>Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took</h3>
						</div>
						<div class="advantages">
							<picture class=\'advantages-img\'>
								<img src=\'/img/dummy.gif\' id=\'advantages-2\' data-src=\'/img/Reservation/image-2.jpg\' alt=\'Background\'>
							</picture>
							<address>
								<img src="/img/dummy.gif" data-src="/img/Reservation/call.svg" class="call margin-center" alt="Call">
								<h4 class="margin-center">1-007 000 005</h4>
								<h5 class="margin-center">Call us for a Special reservation</h5>

									<img src="/img/dummy.gif" data-src="/img/Reservation/call.svg" class="call margin-center" alt="Call">
								<h4 class="margin-center">info@luxury.com</h4>
								<h5 class="margin-center">Mail us for a Special reservation</h5>
							</address>
						</div>
						<div class="advantages">
							<picture class=\'advantages-img\'>
								<img src=\'/img/dummy.gif\' id=\'advantages-3\' data-src=\'/img/Reservation/image-3.jpg\' alt=\'Background\'>
							</picture>
							<h2>Private Dining</h2>
							<h3>Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took</h3>
						</div>
					</div>
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


	echo $reservation;
	
}

?>
