function addProduct(e) {
    
    var productId = this.getAttribute("data-product_id");
    var guid = getCookie("guid");

    var request = new XMLHttpRequest();
    request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           // Typical action to be performed when the document is ready:
           //var cart = JSON.parse(request.responseText);
           console.log(this.responseText);
           //console.log(cart.guid)

        }
    };
    
   

    request.open("GET", "../GIP/login/cartCheck.php?id=" + productId, true);

    request.send();

}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function initPage() {
    var cartButton = document.getElementsByClassName("ti-shopping-cart");
    var i;
    for (i = 0; i < cartButton.length; i++) {
        cartButton[i].addEventListener("click", addProduct, false);
    }
}

    
window.onload = initPage;