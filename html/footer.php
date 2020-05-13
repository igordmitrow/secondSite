<?php


	//HTML code for Footer
	

if ($_POST['fun'] == 'footer') {
	$footer = 
	   '<div class=\'footer-nav\'>
			<div class=\'title\'>Navigation</div>
			<a onclick="getMainPage();" class=\'home\'>Home</a>
			<a onclick="getAboutPage();"  class=\'about\'>About us</a>
			<a onclick="getMenuPage();" class=\'menu\'>Menu</a>
			<a onclick="getReservationPage();" class=\'reservation\'>Reservation</a>
			<a onclick="getBlogPage();" class=\'blog\'>Blog</a>
			<a onclick="getContactPage();" class=\'contact\'>Contact us</a> 
	   </div>
	   <div class=\'footer-news\'>
	   		<div class=\'title\'>News letter</div>
	   		<div class=\'subtitle\'>Enter your email address and subscribe daily newsletter</div>
	   		<div class=\'form\'>
	   			<input type="text" placeholder="Email Address">
				<button>SUBSCRIBE</button>
	   		</div>
	   </div>
	   <div class=\'footer-social\'>
	   		<button class=\'facebook\'><img src="/img/facebook.svg" alt="Facebook"></button>
	   		<button class=\'twitter\'><img src="/img/twitter.svg" alt="Twitter"></button>
	   		<button class=\'google-plus\'><img src="/img/google-plus.svg" alt="Google+"></button>
	   </div>
	   <div class=\'footer-apps\'>
	   		<div class=\'title\'>Our app available</div>
	   		<button class=\'ios\'>
	   			<div class=\'logo\'></div>
	   			<div class=\'txt-sm\'>Available on the</div>
	   			<div class=\'txt-xs\'>App Store</div>
	   		</button>
	   		<button class=\'android\'>
	   			<div class=\'logo\'></div>
	   			<div class=\'txt-sm\'>Get it on</div>
	   			<div class=\'txt-xs\'>Google Play</div>
	   		</button>
	   </div>
	   <div class=\'footer-copyright\'>
	   		<span class=\'line-left\'></span>
	   		<span class=\'copyright\'>2019 ©  <span>Luxury Restaurant</span>, All rights reserved</span>
	   		<span class=\'line-right\'></span>
	   </div>';



	echo $footer;
}
	
?>
