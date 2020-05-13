var isAddSpecialDishes = true;
var allowScroll = true;
var isAddChefs = true;


window.onload = function() {

    pageLoad();

    setTimeout(function() {
       // ajaxPhp('getCartValue', 'php');
   		slideBtn();
    }, 100);

    setTimeout(function () {
    	lazyloading();
    	antiAd();
    }, 500);

    setTimeout(function () {
    	lazyloading();
    	slideBtn();
		registerSW();
    }, 1500);

}

function pageLoad() {

    let side = document.querySelectorAll('div section');

    if (side.length) {

	    side[0].classList.toggle('side-active');


	    setTimeout(function() {
	        let activeImg = document.querySelector('.sideOne #slider-png');
	        activeImg.classList.add("img-active");

	        lazyloading();

	        let text = document.getElementById('teast');
	        text.classList.toggle('teast-active');

	        let texts = document.getElementById('from');
	        texts.classList.toggle('from-active');

	        let btn = document.getElementById('expMenu');
	        btn.classList.toggle('expMenu-active');
	    }, 10);
    }

    let checkbox = document.querySelector('#mobile-checkbox');

    if (checkbox) {

	    checkbox.addEventListener('change', function () {
	    	disallowScrollWhenMenuOpen();
	});
	}

}

function disallowScrollWhenMenuOpen () {
	let checkbox = document.querySelector('#mobile-checkbox');

	if(checkbox.checked){
		document.querySelector('body').style.overflow = 'hidden';
	}else {
		document.querySelector('body').style.overflow = 'initial';
	}

}

function lazyloading() {
    let imgs = document.querySelectorAll('img');


    if (imgs) {

	    imgs.forEach(image => {
	        if (image.getAttribute('data-src')) {
	            if (image.src.includes('/img/dummy.gif')) {
	                if (image.parentNode.offsetTop < window.innerHeight + window.pageYOffset + 200) {
	                    setTimeout(function() {
	                        image.src = image.getAttribute('data-src');
	                    }, 0);
	                }
	            }
	        }
	    });
    } 

	let dishes = document.querySelector('.dishes-of-the-day');

	if (dishes) {

	    if (isAddSpecialDishes == false) {
	        if (dishes.parentNode.offsetTop < window.innerHeight + window.pageYOffset + 200) {
	            addSpecialDishes();
	            addMenu();
	            getCR('getCR');
	            isAddSpecialDishes = true;
	        }
	    } 	
	}

	let cooks = document.querySelector('.cooks');

	if (cooks) {
		if (isAddChefs == false) {	
			if (cooks.parentNode.offsetTop < window.innerHeight + window.pageYOffset + 200) {
	            getCR('getChefs');
	            isAddChefs = true;
	    	}
		}
	}
}


function antiAd () {
	let ads = document.querySelectorAll('.cbalink');
	let banner = document.querySelectorAll('a');

	if (ads) {

		ads.forEach(ad => {
			ad.parentNode.removeChild(ad);
		});	
	}

	if (banner) {

		banner.forEach(ban => {
			if(ban.href == 'https://www.zzz.com.ua/'){
				try {
					ban.parentNode.parentNode.removeChild(ban.parentNode);
					
				} catch(e) {
					
				}
			}
		});
	}
}


window.addEventListener('scroll', lazyloading);

window.addEventListener('resize', function () {
	let checkbox = document.querySelector('#mobile-checkbox');

	if (window.innerWidth >= 768) {
		checkbox.checked = false;
		document.querySelector('body').style.overflow = 'initial';
	}

});



async function registerSW() {
  if ('serviceWorker' in navigator) {
    try {
      await navigator.serviceWorker.register('./sw.js');
    } catch (e) {
      console.log(`SW registration failed`);
    }
  }
}