// Send ajax request to get HTML code


// return HTML code
async function ajaxPhp(url, type, params) {
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            if (type == 'html') {
                document.querySelector('.' + params).innerHTML = this.responseText;
              //  lazyloading();
            } else if (type == 'php') {
                if (url == 'getCartValue') {
                    document.querySelector('.cart-count').innerHTML = `<div>${this.responseText}</div>`;
                }else if (url == 'getArticle') {
                    getArticle(this.responseText);
                }else {
                	return this.responseText;
                }
            }

        }
    }
    xmlhttp.open("POST", `/${type}/${url}.php`, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send('fun='+params);
}