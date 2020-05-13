<?php


	//HTML code for Main content
	

if ($_POST['fun'] == 'main') {
	$main = 
		'<section class=\'slider\' tabindex=\'0\'>
			<picture class=\'slider-bg\'>
				<img src=\'/img/dummy.gif\' class=\'maxWidth\' id=\'slider-bg\' data-src=\'/img/Main/slide-bg.jpg\' alt=\'Slider bg\'>
			</picture>

			<div class=\'dish\'>


				<section class=\'sideOne side\' data-side=\'1\'>
					<img src=\'/img/dummy.gif\' data-side=\'1\' id=\'slider-png\' data-src=\'/img/Main/transparent-food-min.webp\' alt=\'Dish\'>

					<div class=\'teast\' data-side=\'1\' id=\'teast\'>Teast your fav dish</div>
					<div class=\'from\' id=\'from\'>from <span class=\'sub\'>luxury restaurent.</span></div>

					<button class=\'expMenu\' id=\'expMenu\'><div>Explore Menu</div></button>
				</section>

				<section class=\'sideTwo side\' data-side=\'2\'>
					<img src=\'/img/dummy.gif\' data-side=\'2\' id=\'slider-png\' data-src=\'/img/Main/slider-bg-min.webp\' alt=\'Dish\'>

					<div class=\'teast\' data-side=\'2\' id=\'teast\'>Made from locally</div>
					<div class=\'from\' id=\'from\'>sourced <span class=\'sub\'>ingredients.</span></div>

					<button class=\'expMenu\' id=\'expMenu\'><div>Explore Menu</div></button>
				</section>

				<img class=\'left-arrow\' onclick=\'slide();
												 nextSlide();\' src=\'/img/left-arrow.svg\' alt=\'left-arrow\'>
				<img class=\'right-arrow\' onclick=\'slide();
										   		  nextSlide();\' src=\'/img/left-arrow.svg\' alt=\'right-arrow\'>

				<div class=\'slide-circle\'>
					<div class=\'circle circle-active\' data-number=\'1\'></div>
					<div class=\'circle\' data-number=\'2\'></div>
				</div>
			</div>
		</section>
		<section class=\'callUs maxWidth\'>
			<a href=\'#reviews\' class=\'reviews\'>
				<img src=\'/img/dummy.gif\' id=\'reviews\' data-src=\'/img/Main/read-reviews-min.png\' alt=\'review\'>
			</a>
			<a href=\'#callUs\' class=\'callUs\'>
				<img src=\'/img/dummy.gif\' id=\'call-us\' data-src=\'/img/Main/call-us-min.png\' alt=\'call us\'>
			</a>
		</section>
		<section class=\'aboutUs maxWidth\'>
			<div class=\'aboutUs-title\'>About Restaurent</div>
			<div class=\'aboutUs-subtitle\'>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged... 
			</div>

			<button onclick="getAboutPage();"  class=\'readMore\' id=\'readMore\'>Read More</button>

		
			<picture class=\'aboutUs-img\'>
					<img src=\'/img/dummy.gif\' id=\'aboutUs-img\' data-src=\'/img/Main/image-main-min.jpg\' alt=\'aboutUs\'>
			</picture>

		
		</section>
		<section class=\'specialFoods\'>
			<picture class=\'picture-pizza\'>
				<img src=\'/img/dummy.gif\' class=\'maxWidth\' id=\'pizza-bg\' data-src=\'/img/Main/pizza-bg-min.jpg\' alt=\'pizza bg\'>
			</picture>

			<div class=\'dishes-of-the-day\'>

				<span class=\'title\'>Today\'s Special</span>

				<div class=\'first-dishes\'>

				

					<picture class=\'picture-first\'>
						<img src=\'/img/dummy.gif\' id=\'first-dishes-img\' data-src=\'\' alt=\'First dishes image\'>
					</picture>

					<h2 class=\'first-dishes-name\'></h2>

					<div class=\'first-dishes-desc\'></div>

					<hr>

					<div class=\'first-dishes-price\'></div>
				</div>

				<div class=\'second-dishes\'>

					

					<picture class=\'picture-second\'>
						<img src=\'/img/dummy.gif\' id=\'second-dishes-img\' data-src=\'\' alt=\'Second dishes image\'>
					</picture>

					<h2 class=\'second-dishes-name\'></h2>

					<div class=\'second-dishes-desc\'></div>

					<hr>

					<div class=\'second-dishes-price\'></div>
				</div>


			</div>
		</section>
		<section class=\'foodMenu margin-center\'>
			<div class=\'title margin-center\'>Food Menu</div>
			<hr/>
			<div class=\'menu\'>
			
			</div>
			<button class=\'expMenu margin-center\'>Explore Full Menu</button>
		</section>
		<section class=\'review\'>
			<picture class=\'review-bg maxWidth\'>
				<img src=\'/img/dummy.gif\' id=\'review-bg\' data-src=\'/img/Main/review-bg-min.png\' alt=\'Review bg\'>
			</picture>

			<div class=\'title\'>Happy Clients</div>
			
			<div class=\'slider\'></div>

			<img class=\'left-arrow\' src=\'/img/left-arrow.svg\' alt=\'left-arrow\'>
			<img class=\'right-arrow\' src=\'/img/left-arrow.svg\' alt=\'right-arrow\'>

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
				<img src=\'/img/dummy.gif\' id=\'pepers-bg\' data-src=\'/img/Main/pepers-image.webp\' alt=\'Pepers\'>
			</picture>
		</section>';

	echo $main;
	
	}
	
?>
