<?php


	//HTML code for Header
	
if ($_POST['fun'] == 'header') {
		

	$header = ' <div class="header-logo">
					<picture class=\'logo-bg\'>
					<img src=\'/img/dummy.gif\' id=\'logo-bg\' data-src=\'/img/logo-min.png\' alt=\'Logo\'>
					</picture>
				</div>	

					<div class="header-mobile">
				    		<input type="checkbox" id="mobile-checkbox">
							<label for="mobile-checkbox">
								<a class="burger-menu">
									<span></span>
								</a>
							</label>


							<div class=\'menu-container\'>
								<div class="header-menu">
									<a onclick="getMainPage();" class="home">home</a>
									<a onclick="getMenuPage();" class="menu">menu</a>
									<a onclick="getBlogPage();" class="blog">blog</a>
									<a onclick="getAboutPage();" class="about">About us</a>
									<a onclick="getContactPage();" class="contact">contact</a>

							    </div>
							    <button class="header-btn" onclick="getReservationPage();">
							    	<div>
										<img src="/img/icon-plate-min.png" alt="Plate">
										<span>Book your table</span>
							   		</div>
							    </button>
							</div>
			    	</div>';

 								// <div class="header-cart">
									// <div class="cart-count"><script>	ajaxPhp("getCartValue","php");</script></div>
									// <div class="cart-drop"></div>
							  //   </div>


	echo $header;
	
}

?>
