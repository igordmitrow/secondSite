
// Function that addEventListener on some obj

function addEvent () {
	
	let links = document.querySelectorAll('aside ul a');

	if (links) {
		links.forEach(link => {
			link.addEventListener('click', function (e) {
				changeArrowPos(e);
				modifyContent(e);
			});
		});
	}

	let articles = document.querySelectorAll('.content .blog .articles');

	if(articles) {
		articles.forEach(article => {
			article.addEventListener('click', function (e) {
				
				let target = e.target;

				file = target.getAttribute('data-link') + '.json';

				if (target.getAttribute('data-delete')) {

					let sure = confirm('Вы уверенны что хотите удалить эту статтю');

					if (sure) {
						let xmlhttp = new XMLHttpRequest();
				    	xmlhttp.onreadystatechange = function() {

				     		if (this.readyState == 4 && this.status == 200) {
				     			getArticles();
				     			setTimeout(function () {
									addEvent();
								}, 1000);
				   			}
				 	   }
					    xmlhttp.open("POST", `/php/removeArticles.php`, true);
					    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					    xmlhttp.send('removeArticles='+file);
					}
				}else if (target.getAttribute('data-change')) {

					file = target.getAttribute('data-link') + '.json';

					let xmlhttp = new XMLHttpRequest();
			    	xmlhttp.onreadystatechange = function() {

		     		if (this.readyState == 4 && this.status == 200) {
		     			data = JSON.parse(this.responseText);

	     				let content = document.querySelector('.content');

						content.innerHTML = '<div class="article"><h1>Change Article</h1><form action="/php/changeArticle.php" method="POST" enctype="multipart/form-data"><input name="title" placeholder="Title of article"><input name="tags" placeholder="Write some tags"><input type="hidden" name="name"></input><input type="hidden" name="oldImage"></input><input type="file" name="fileToUpload" id="fileToUpload" accept="image/jpeg,image/png,image/gif" title = "Choose a image please" placeholder="Enter the main picture"><textarea name="text" maxlength="5000" placeholder="Write Text here"></textarea><input name="submit" type="submit"></form></div>';

						let input = content.querySelectorAll('input');

						input[0].value = data['title'];
						input[1].value = data['tags'];
						input[2].value = data['name'];
						input[3].value = data['img'];

						let textarea = content.querySelector('textarea');

						textarea.value = data['text'];

						content.querySelector('.article').classList.add('reveal');

						setTimeout(function () {
							content.querySelector('.article').classList.remove('reveal');
						}, 600);

			   			}
			 	   }
				    xmlhttp.open("POST", `/php/changeArticle.php`, true);
				    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				    xmlhttp.send('changeArticle='+file);
				
				}
			});
		});
	}
}


// Function that change arrow position on menu 

function changeArrowPos(e) {
	
	let target = e.target;
	let pos = target.offsetTop;
	pos += target.offsetHeight/2;
	let aside = document.querySelector('aside');
	aside.style.setProperty('--arrowPos', pos + 'px');
}

// Edit content for admin panel 


function modifyContent(e) {
 	
 	let target = e.target;
 	let fun = target.getAttribute('data-link');

	switch (fun) {
		case 'add':
			addContent();
		break;

		case 'change':
			changeContent();
		break;

		case 'remove':
			removeContent();
		break;

		default:
			contentError();
		break;
	} 		
} 


// Modifies the content so that the article can be added

function addContent () {
	
	let content = document.querySelector('.content');

	content.innerHTML = '<div class="article"><h1>Add Article</h1><form action="/php/addArticle.php" method="POST" enctype="multipart/form-data"><input name="title" placeholder="Title of article"><input name="tags" placeholder="Write some tags"><input type="file" name="fileToUpload" id="fileToUpload" accept="image/jpeg,image/png,image/gif" title = "Choose a image please" placeholder="Enter the main picture"><textarea name="text" maxlength="5000" placeholder="Write Text here"></textarea><input name="submit" type="submit"></form></div>';
	content.querySelector('.article').classList.add('reveal');

	setTimeout(function () {
		content.querySelector('.article').classList.remove('reveal');
	}, 600);

}

function changeContent () {
	let content = document.querySelector('.content');

	content.innerHTML = '<div class="article"><h1 class="up">Change Article</h1><h2>Choose article that you want to change</h2></div>';
	content.innerHTML += '<div class="blog"></div>';
	getArticles('change');
	document.querySelector('.content').classList.add('reveal');

	setTimeout(function () {
		document.querySelector('.content').classList.remove('reveal');
	}, 600);

	setTimeout(function () {
		addEvent();
	}, 1000);
}

function removeContent () {
	let content = document.querySelector('.content');

	content.innerHTML = '<div class="article"><h1 class="up">Remove Article</h1><h2>Choose article that you want to delete</h2></div>';
	content.innerHTML += '<div class="blog"></div>';
	getArticles('delete');
	document.querySelector('.content').classList.add('reveal');

	setTimeout(function () {
		document.querySelector('.content').classList.remove('reveal');
	}, 600);

	setTimeout(function () {
		addEvent();
	}, 1000);

}

function clearArticles () {
	blog = document.querySelector('div.content div.blog');

	blog.innerHTML = '';
}

function getArticles(type) {

		let folder = 'articles';
	
	  	let xmlhttp = new XMLHttpRequest();
    	xmlhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {

        	let data = JSON.parse(this.responseText);
			let blog = document.querySelector('div.content div.blog');

			if(blog){

				clearArticles();

				for(let i = 0; i < data.length; i++){
					   let div = document.createElement('button');
		                div.classList.add('articles');
		                div.setAttribute('data-link', data[i]['name']);
		                 div.setAttribute('data-'+type, type);
		                blog.appendChild(div);

		                title = document.createElement('h4');
		                title.classList.add('article-title');
		                title.innerHTML = data[i]['title'];
		                div.appendChild(title);

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

				}
			}
        }
    }
    xmlhttp.open("POST", `/php/getArticles.php`, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send('getArticles='+folder);
}

window.onload = function() {
	addEvent();
}
