function slideBtn() {
    isFocus = false;
    isEnter = false;
    let slideActive = document.querySelectorAll('.circle');

    keyOne = slideActive[0];
    keyTwo = slideActive[1];

    if (keyOne) {

        keyOne.addEventListener('click', function(e) {
            if (!keyOne.classList.contains('circle-active')) {
                keyOne.classList.toggle('circle-active');
                keyTwo.classList.toggle('circle-active');
                slide();
            }
        });
    }

    if (keyTwo) {

        keyTwo.addEventListener('click', function(e) {
            if (!keyTwo.classList.contains('circle-active')) {
                keyTwo.classList.toggle('circle-active');
                keyOne.classList.toggle('circle-active');
                slide();
            }
        });
    }

    slider = document.querySelector('.slider');



    // Add event for slide slider by arrow

    if (slider) {
        slider.addEventListener('focus', function() {
            isFocus = true;
        }, true);

        slider.addEventListener('blur', function() {
            isFocus = false;
        }, true);


        slider.addEventListener('mouseenter', function() {
            isEnter = true;
        }, true);

        slider.addEventListener('mouseout', function() {
            isEnter = false;
        }, true);
        let left = document.querySelector('.review .left-arrow');
                    let right = document.querySelector('.review .right-arrow');

                    left.addEventListener('click', function (e) {
                        prevReview(e);
                    });

                    right.addEventListener('click', function (e) {
                        nextReview(e);
                    });
    }


    document.addEventListener('keydown', function(e) {
        if (isFocus || isEnter) {
            if (e.keyCode == 39 || e.keyCode == 37) {
                nextSlide();
                slide();

            }
        }
    });
}

function slide() {


    let side = document.querySelectorAll('div section');

    side[1].classList.toggle('side-active');
    side[0].classList.toggle('side-active');

    setTimeout(function() {

        let imgs = document.querySelectorAll('#slider-png');

        imgs[0].classList.toggle('img-active');
        imgs[1].classList.toggle('img-active');


        let texts = document.querySelectorAll('#teast');

        texts[1].classList.toggle('teast-active');
        texts[0].classList.toggle('teast-active');


        let text = document.querySelectorAll('#from');

        text[1].classList.toggle('from-active');
        text[0].classList.toggle('from-active');


        let btns = document.querySelectorAll('#expMenu');

        btns[1].classList.toggle('expMenu-active');
        btns[0].classList.toggle('expMenu-active');

        if (side[0].classList.contains('side-active') && side[1].classList.contains('side-active')) {
            imgs[1].classList.remove('img-active');
            texts[1].classList.remove('teast-active');
            text[1].classList.remove('from-active');
            btns[1].classList.remove('expMenu-active');
            side[1].classList.remove('side-active');
        }
    }, 10);

}

function nextSlide() {
    keyOne.classList.toggle('circle-active');
    keyTwo.classList.toggle('circle-active');
}

function addCart() {
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            setTimeout(function() {
                ajaxPhp('getCartValue', 'php');
            }, 100);
        }
    }
    xmlhttp.open("POST", `/php/addCart.php`, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();

}

// Change special foods on the page every day 

function addSpecialDishes() {
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            let first = document.querySelector('.first-dishes');
            let second = document.querySelector('.second-dishes');

            let data = JSON.parse(this.responseText);

            first.querySelector('#first-dishes-img').src = data[0]['img'];
            first.querySelector('.first-dishes-name').innerHTML = data[0]['name'];
            first.querySelector('.first-dishes-desc').innerHTML = data[0]['desc'];
            first.querySelector('.first-dishes-price').innerHTML = data[0]['price'];

            second.querySelector('#second-dishes-img').src = data[1]['img'];
            second.querySelector('.second-dishes-name').innerHTML = data[1]['name'];
            second.querySelector('.second-dishes-desc').innerHTML = data[1]['desc'];
            second.querySelector('.second-dishes-price').innerHTML = data[1]['price'];

        }
    }
    xmlhttp.open("POST", `/php/getSpecialFoods.php`, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send('fun=dishesOfTheDay');

}

function addMenu() {
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            let menu = document.querySelector('div.menu');

            let data = JSON.parse(this.responseText);

            data.forEach(item => {
            	let div = document.createElement('div');
            	div.classList.add('menu-item');
            	menu.appendChild(div);


            	let img = document.createElement('img');
            	img.classList.add('menu-img');
            	img.src = item['img'];
            	div.appendChild(img);

            	let title = document.createElement('div');
            	title.classList.add('menu-title');
            	title.innerHTML = item['name'];
            	div.appendChild(title);

            	let desc = document.createElement('div');
            	desc.classList.add('menu-desc');
            	desc.innerHTML = item['desc'];
            	div.appendChild(desc);


            	let price = document.createElement('div');
            	price.classList.add('menu-price');
            	price.innerHTML = item['price'];
            	div.appendChild(price);
            });
        }
    }
    xmlhttp.open("POST", `/php/getSpecialFoods.php`, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send('fun=menu');

}

function getCR (params) {
	    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            if (params == 'getCR') {
                let slider = document.querySelector('.review .slider');

                let data = JSON.parse(this.responseText);

                let i = 1;

                data.forEach(item => {
                    let div = document.createElement('div');
                    div.classList.add('review-item');
                    div.setAttribute('data-item', i);
                    if (i == 1) {
                        div.classList.add('review-active');
                    }
                    i++;
                    slider.appendChild(div);

                    let quote = document.createElement('div');
                    quote.classList.add('review-quote');
                    quote.innerHTML = item['review'];
                    div.appendChild(quote);

                    let img = document.createElement('img');
                    img.classList.add('review-img');
                    img.src = item['img'];
                    div.appendChild(img);

                    let name = document.createElement('div');
                    name.classList.add('review-name');
                    name.innerHTML = item['name'];
                    div.appendChild(name);


                    let rate = document.createElement('div');
                    rate.classList.add('review-rate');
                    rate.innerHTML = item['rate'];
                    div.appendChild(rate);


                });

                

            }else if (params == 'getChefs') {
                let slider = document.querySelector('.cooks .chefs');

                let data = JSON.parse(this.responseText);

                data.forEach(item => {
                    let div = document.createElement('div');
                    div.classList.add('chef');
                    slider.appendChild(div);

                    front = document.createElement('div');
                    front.classList.add('chef-front');
                    div.appendChild(front);

                    let img = document.createElement('img');
                    img.classList.add('chef-img');
                    img.src = item['img'];
                    front.appendChild(img);

                    let name = document.createElement('h2');
                    name.classList.add('chef-name');
                    name.innerHTML = item['name'];
                    front.appendChild(name);

                    let position = document.createElement('h3');
                    position.classList.add('chef-position');
                    position.innerHTML = item['position'];
                    front.appendChild(position);

                    back = document.createElement('div');
                    back.classList.add('chef-back');
                    div.appendChild(back);

                    backTitle = document.createElement('h4');
                    backTitle.classList.add('chef-back-title');
                    backTitle.innerHTML = 'Social Media';
                    back.appendChild(backTitle);

                    social = document.createElement('div');
                    social.classList.add('social');
                    social.classList.add('margin-center');
                    back.appendChild(social);

                    block = document.createElement('button');
                    social.appendChild(block);

                    facebook = document.createElement('img');
                    facebook.classList.add('facebook');
                    facebook.src = '/img/facebook.svg';
                    block.appendChild(facebook);

                    block = document.createElement('button');
                    social.appendChild(block);

                    twitter = document.createElement('img');
                    twitter.classList.add('twitter');
                    twitter.src = '/img/twitter.svg';
                    block.appendChild(twitter);

                    block = document.createElement('button');
                    social.appendChild(block);

                    google = document.createElement('img');
                    google.classList.add('google');
                    google.src = '/img/google-plus.svg';
                    block.appendChild(google);


                });


            }
        }
    }
    if (params == 'getCR') {
        xmlhttp.open("POST", `/php/getClientsReview.php`, true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send('fun=getCR');
    }else if (params == 'getChefs') {
        xmlhttp.open("POST", `/php/getChefs.php`, true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send('fun=getChefs');
    }
  
}

function nextReview (e) {
	
	let active = document.querySelector('.review-active');
	let a = document.querySelectorAll('.review-item');

	all = [].concat(...Object.values(a)).map(e => [e]);


	let i = active.getAttribute('data-item');

	i++;
	n = 0;

	all.forEach(item => {

		
		let attr = all[n][0].getAttribute('data-item');
		
		if (n == i-1) {
			all[n-1][0].classList.remove('review-active');
            all[n-1][0].classList.add('review-animate-right');
			all[n][0].classList.add('review-active');
            all[n][0].classList.add('review-active-right');

            let m = n;

            setTimeout(function () {
                  all[m-1][0].classList.remove('review-animate-right');
                  all[m][0].classList.remove('review-active-right');
            }, 500);
		}
		n++;
	});

	if (n == i-1) {
		active.classList.remove('review-active');
        active.classList.add('review-animate-right');
		all[0][0].classList.add('review-active');
        all[0][0].classList.add('review-active-right');

        setTimeout(function () {
            active.classList.remove('review-animate-right');
            all[0][0].classList.remove('review-active-right');
        }, 500);
	}

}

function prevReview (e) {
	
	let active = document.querySelector('.review-active');
	let a = document.querySelectorAll('.review-item');

	all = [].concat(...Object.values(a)).map(e => [e]);


	let i = active.getAttribute('data-item');

	i--;
	n = 0;

	all.forEach(item => {

		
		let attr = all[n][0].getAttribute('data-item');
		
		if (n == i-1 && i != 0) {
			all[n+1][0].classList.remove('review-active');
            all[n+1][0].classList.add('review-animate-left');
			all[n][0].classList.add('review-active');
            all[n][0].classList.add('review-active-left');

            let m = n;

            setTimeout(function () {
                all[m+1][0].classList.remove('review-animate-left');
                all[m][0].classList.remove('review-active-left');
            }, 500);
		}
		n++;
	});

	if (i == 0) {
		active.classList.remove('review-active');
        active.classList.add('review-animate-left');
		all[n-1][0].classList.add('review-active');
        all[n-1][0].classList.add('review-active-left');

        let m = n-1;

        setTimeout(function () {
            active.classList.remove('review-animate-left');
            all[m][0].classList.remove('review-active-left');
        }, 500);
	}
}

function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
    }

function changeInputType () {
    
    let input = document.querySelectorAll('.changable');

    if(input) {
        setTimeout(function () {
            input[0].addEventListener('focus', function() {
                input[0].type = 'date';
            }, true);

            input[0].addEventListener('blur', function() {
                 input[0].type = 'text';
            }, true);

            input[1].addEventListener('focus', function() {
                input[1].type = 'time';
            }, true);

            input[1].addEventListener('blur', function() {
                 input[1].type = 'text';
            }, true);  
        }, 500);
    }
}

function getArticles () {
    folder = 'articles';
    
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {

            data = JSON.parse(this.responseText);
            blog = document.querySelector('article.blog');

            if(blog){

                for(let i = 0; i < data.length; i++){

                        let _date = data[i]['name'].split('-');

                        let months = ['Error','Jan','Feb',"Mar","Apr","May","June","July","Aug","Sep","Oct",'Nov',"Dec"];

                        _date[1] = months[parseInt(_date[1])];

                        let div = document.createElement('section');
                        div.classList.add('articles');
                        div.setAttribute('data-link', data[i]['name']);
                        blog.appendChild(div);

                        let wrapper = document.createElement('div');
                        wrapper.classList.add('wrapper');
                        div.appendChild(wrapper);

                        let dummy = document.createElement('div');
                        dummy.classList.add('dummy');
                        wrapper.appendChild(dummy);

                        let img = document.createElement('img');
                        img.classList.add('article-img');
                        img.src = '/articles/imgs/' + data[i]['img'];
                        wrapper.appendChild(img);

                        let dateBox = document.createElement('div');
                        dateBox.classList.add('date-box');
                        div.appendChild(dateBox);

                        let date = document.createElement('div');
                        date.classList.add('date');
                        dateBox.appendChild(date);

                        let day = document.createElement('h3');
                        day.classList.add('day');
                        day.innerHTML = _date[2];
                        date.appendChild(day);

                        let month = document.createElement('h4');
                        month.classList.add('month');
                        month.innerHTML = _date[1];
                        date.appendChild(month);

                        let year = document.createElement('h4');
                        year.classList.add('year');
                        year.innerHTML = _date[0];
                        date.appendChild(year);


                        let title = document.createElement('h2');
                        title.classList.add('article-title');
                        title.innerHTML = data[i]['title'];
                        div.appendChild(title);

                        let text = document.createElement('h5');
                        text.classList.add('article-text');
                        data[i]['text'].split(' ', 44).forEach(word => {
                            text.innerHTML += word + ' ';
                        });
                        div.appendChild(text);

                        let hr1 = document.createElement('hr');
                        div.appendChild(hr1);

                        let btn_wrapper = document.createElement("div");
                        btn_wrapper.classList.add('btn_wrapper');
                        div.appendChild(btn_wrapper);

                        let btn = document.createElement('button');
                        btn.classList.add('readMore');
                        btn.innerHTML = "Read More";
                        btn_wrapper.appendChild(btn);

                        let viewers = document.createElement('div');
                        viewers.classList.add('viewers');
                        viewers.innerHTML = "Views: " + data[i]["view"];
                        btn_wrapper.appendChild(viewers);

                        title = data[i]['name'];
                        btn.addEventListener('click', function(e){
                            ajaxPhp('initView','php','initView|'+ title);
                            ajaxPhp("getArticle","php",'getArticle|'+title);
                        })

                        let label = document.createElement('label');
                        btn_wrapper.appendChild(label);

                        let like = document.createElement('input');
                        like.type = 'checkbox';
                        like.classList.add('like');
                        ajaxPhp("initLike","php","getLike|"+data[i]['name']);
                        label.appendChild(like);
                        turn = JSON.stringify(decodeURI(getCookie('liked'))).split('\\\"');
                        if(turn.includes(data[i]["name"])){
                            like.checked = 1;
                        }

                        let likes = document.createElement('div');
                        likes.classList.add("like-count");
                        likes.innerHTML = data[i]["likes"];
                        btn_wrapper.appendChild(likes);

                        
                        let span = document.createElement('span');
                        span.classList.add('checkmark');
                        span.setAttribute('data-title', data[i]['name']);
                        span.addEventListener('click', function () {
                            ajaxPhp("initLike","php","setLike|"+data[i]['name']);
                            if(like.checked){
                                likes.innerHTML = parseInt(likes.innerHTML) - 1;
                            }else {
                                likes.innerHTML = parseInt(likes.innerHTML) + 1;
                            }
                        });
                        label.appendChild(span);

                        let hr2 = document.createElement('hr');
                        div.appendChild(hr2);


                }
            }
        }
    }
    xmlhttp.open("POST", `/php/getArticles.php`, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send('getArticles='+folder);
}



function getMainPage () {
    window.location.href = 'index.html';
    // ajaxPhp('main','html','main');
    // history.pushState({ foo: 'bar' }, 'page 2','/');
    // document.title = 'Full';
    // let checkbox = document.querySelector('#mobile-checkbox');
    // isAddSpecialDishes = false;
    // setTimeout(function () {
    //     pageLoad();
    //     slideBtn();
    //     lazyloading();
    //     checkbox.checked = false;
    //     scroll(0,0);
    // },600);
    // document.querySelector('body').style.overflow = 'initial';
}

function getAboutPage () {
    window.location.href = 'about.html';
    // ajaxPhp('about','html','main');
    // history.pushState({ foo: 'bar' }, 'page 2', '/about');
    // document.title = 'About us';
    // isAddChefs = false;
    // let checkbox = document.querySelector('#mobile-checkbox');
    // setTimeout(function () {
    // checkbox.checked = false;
    // lazyloading();
    // scroll(0,0);
    // }, 500);
    // document.querySelector('body').style.overflow = 'initial';
}

function getMenuPage () {
    window.location.href = 'menu.html';
    // ajaxPhp('menu','html','main');
    // history.pushState({ foo: 'bar' }, 'page 2', '/menu');
    // document.title = 'Menu';
    // isAddChefs = false;
    // let checkbox = document.querySelector('#mobile-checkbox');
    // setTimeout(function () {
    // checkbox.checked = false;
    // lazyloading();
    // scroll(0,0);    
    // }, 500);
    // document.querySelector('body').style.overflow = 'initial';
    // setTimeout(function () {
    //     addMenu();
    // }, 1000);
}

function getContactPage () {
    window.location.href = 'contact.html';
    // ajaxPhp('contact','html','main');
    // history.pushState({ foo: 'bar' }, 'page 2', '/contact');
    // document.title = 'Contact us';
    // let checkbox = document.querySelector('#mobile-checkbox');
    // setTimeout(function () {
    // checkbox.checked = false;
    // lazyloading();
    // scroll(0,0);    
    // }, 500);
    // document.querySelector('body').style.overflow = 'initial';
}

function getReservationPage () {
    window.location.href = 'reservation.html';
    // ajaxPhp('reservation','html','main');
    // history.pushState({ foo: 'bar' }, 'page 2', '/reservation');
    // document.title = 'Book a Table';
    // let checkbox = document.querySelector('#mobile-checkbox');
    // setTimeout(function () {
    // checkbox.checked = false;
    // lazyloading();
    // scroll(0,0);    
    // changeInputType();
    // }, 500);
    // document.querySelector('body').style.overflow = 'initial';
}

function getBlogPage () {
    window.location.href = 'blog.html';
    // ajaxPhp('blog','html','main');
    // history.replaceState({ foo: 'bar' }, 'page 2', '/blog');
    // document.title = 'Blog';
    // let checkbox = document.querySelector('#mobile-checkbox');
    // setTimeout(function () {
    // checkbox.checked = false;
    // lazyloading();
    // scroll(0,0);    
    // getArticles();
    // }, 500);
    // document.querySelector('body').style.overflow = 'initial';
}

function getArticle(data) {
    data = JSON.parse(data);
    let title = document.querySelector('.main-title h1');
    title.innerHTML = data['title'];
    let article = document.querySelector('article.blog');
    article.innerHTML = "";
    let _datea = data['name'].split('-');
    let month = _datea[1];
    let monthsa = ['Error','Jan','Feb',"Mar","Apr","May","June","July","Aug","Sep","Oct",'Nov',"Dec"];

    _datea[1] = monthsa[parseInt(_datea[1])];
    let diva = document.createElement('section');
                        diva.classList.add('articles');
                        diva.setAttribute('data-link', data['name']);
                        article.appendChild(diva);

                        let wrappera = document.createElement('div');
                        wrappera.classList.add('wrapper');
                        diva.appendChild(wrappera);

                        let dummya = document.createElement('div');
                        dummya.classList.add('dummy');
                        wrappera.appendChild(dummya);

                        let imga = document.createElement('img');
                        imga.classList.add('article-img');
                        imga.src = '/articles/imgs/' + data['img'];
                        wrappera.appendChild(imga);

                        let dateBoxa = document.createElement('div');
                        dateBoxa.classList.add('date-box');
                        diva.appendChild(dateBoxa);

                        let datea = document.createElement('div');
                        datea.classList.add('date');
                        dateBoxa.appendChild(datea);

                        let daya = document.createElement('h3');
                        daya.classList.add('day');
                        daya.innerHTML = _datea[2];
                        datea.appendChild(daya);

                        let montha = document.createElement('h4');
                        montha.classList.add('month');
                        montha.innerHTML = _datea[1];
                        datea.appendChild(montha);

                        let yeara = document.createElement('h4');
                        yeara.classList.add('year');
                        yeara.innerHTML = _datea[0];
                        datea.appendChild(yeara);

                        let texta = document.createElement('h5');
                        texta.classList.add('article-texts');
                        texta.innerHTML = data['text'];
                        diva.appendChild(texta);

                        let hr1a = document.createElement('hr');
                        diva.appendChild(hr1a);

                        let btn_wrappera = document.createElement("div");
                        btn_wrappera.classList.add('btn_wrapper');
                        diva.appendChild(btn_wrappera);

                        btn_wrappera.innerHTML += '<div class=\'article-social\'><button class=\'facebook\'><img src="/img/facebook.svg" alt="Facebook"></button><button class=\'twitter\'><img src="/img/twitter.svg" alt="Twitter"></button><button class=\'google-plus\'><img src="/img/google-plus.svg" alt="Google+"></button></div>'
                        
                        let btna = document.createElement('button');
                        btna.classList.add('prev');
                        btna.innerHTML = "< Prev";
                        console.log(btna);
                        btna.addEventListener('click', function(){
                            article.innerHTML = '';
                            history.replaceState({ foo: 'bar' }, 'page 2', '/blog');
                            document.title = 'Blog';
                            title.innerHTML = 'Blog';
                            let checkboxa = document.querySelector('#mobile-checkbox');
                            setTimeout(function () {
                            checkboxa.checked = false;
                            lazyloading();
                            scroll(0,0);    
                            getArticles();
                            console.log(3241945);
                            }, 100);
                            document.querySelector('body').style.overflow = 'initial';
                        },true);
                        btn_wrappera.appendChild(btna);

                        let viewersa = document.createElement('div');
                        viewersa.classList.add('viewers');
                        viewersa.innerHTML = "Views: " + data["view"];
                        btn_wrappera.appendChild(viewersa);


                        let labela = document.createElement('label');
                        btn_wrappera.appendChild(labela);

                        let likea = document.createElement('input');
                        likea.type = 'checkbox';
                        likea.classList.add('like');
                        ajaxPhp("initLike","php","getLike|"+data['name']);
                        labela.appendChild(likea);
                        turn = JSON.stringify(decodeURI(getCookie('liked'))).split('\\\"');
                        if(turn.includes(data["name"])){
                            likea.checked = 1;
                        }

                        let likesa = document.createElement('div');
                        likesa.classList.add("like-count");
                        likesa.innerHTML = data["likes"];
                        btn_wrappera.appendChild(likesa);

                        
                        let spana = document.createElement('span');
                        spana.classList.add('checkmark');
                        spana.setAttribute('data-title', data['name']);
                        spana.addEventListener('click', function () {
                            ajaxPhp("initLike","php","setLike|"+data['name']);
                            if(likea.checked){
                                likesa.innerHTML = parseInt(likesa.innerHTML) - 1;
                            }else {
                                likesa.innerHTML = parseInt(likesa.innerHTML) + 1;
                            }
                        });
                        labela.appendChild(spana);

                        let hr2a = document.createElement('hr');
                        diva.appendChild(hr2a);
        history.replaceState({ foo: 'bar' }, 'page 2', _datea[0]+'/'+month+'/'+_datea[2]+'/'+data['title'].replace(/ /g, '-'));
        document.title = data['title'];
        let checkboxa = document.querySelector('#mobile-checkbox');
        setTimeout(function () {
        checkboxa.checked = false;
        lazyloading();
        scroll(0,0);    
        }, 100);
        document.querySelector('body').style.overflow = 'initial';
}