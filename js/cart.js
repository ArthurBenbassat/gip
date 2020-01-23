function addProduct(e) {
    var productId = this.getAttribute("data-product_id");
    

    var request = new XMLHttpRequest();
    request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           // Typical action to be performed when the document is ready:
           var cart = JSON.parse(request.responseText);
           console.log(this.responseText);
           console.log(cart.lines.length);
           document.cookie = "guid=" + cart.guid;
           var countItems = document.getElementById("count_cart");
           countItems.innerText= cart.lines.length;
           sessionStorage.setItem("count_cart", cart.lines.length);

        }
    };
    
    request.open("GET", "../GIP/login/cartCheck.php?id=" + productId, true);

    request.send();
}
function checkCountCart(guid){
    
    var request = new XMLHttpRequest();
    request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var cart = JSON.parse(request.responseText);
           var countItems = document.getElementById("count_cart");
           countItems.innerText= cart.lines.length;
           

        }
    };
    
    request.open("GET", "../GIP/cart/countCart.php?guid=" + guid, true);

    request.send();
}

function initPage() {
    var cartButton = document.getElementsByClassName("ti-shopping-cart");
    var i;
    for (i = 0; i < cartButton.length; i++) {
        cartButton[i].addEventListener("click", addProduct, false);
    }
    
    if (document.cookie.replace(/(?:(?:^|.*;\s*)guid\s*\=\s*([^;]*).*$)|^.*$/, "$1")) {
        checkCountCart(document.cookie.replace(/(?:(?:^|.*;\s*)guid\s*\=\s*([^;]*).*$)|^.*$/, "$1"));
    } else {
        var countItems = document.getElementById("count_cart");
        countItems.innerText= 0;
        
    }
}

    
window.onload = initPage;