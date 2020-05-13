<?php


	//HTML code for Blog Page
	
if ($_POST['fun'] == 'main') {
		

	$blog = '<section class="main-title maxWidth margin-center">
				<picture class=\'blog-bg maxWidth\'>
					<img src=\'/img/dummy.gif\' class=\'maxWidth\' id=\'blog\' data-src=\'/img/About/page-title-min.jpg\' alt=\'Blog\'>
				</picture>
				<div class="title">
					<img src=\'/img/dummy.gif\' id=\'page-title-left\' data-src=\'/img/About/page-title-icon-left-min.png\' alt=\'\'>
					<h1>Blog</h1>
					<img src=\'/img/dummy.gif\' id=\'page-title-right\' data-src=\'/img/About/page-title-icon-right-min.png\' alt=\'\'>
				</div>
			  </section>
			  <article class=\'blog\'></article>';


	echo $blog;
	
}

?>
