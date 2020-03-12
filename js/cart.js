function addProduct(e) {
    var productId = this.getAttribute("data-product_id");
    var request = new XMLHttpRequest();
    request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           // Typical action to be performed when the document is ready:
           var cart = JSON.parse(request.responseText);
           if (!document.cookie.replace(/(?:(?:^|.*;\s*)guid\s*\=\s*([^;]*).*$)|^.*$/, "$1")) {
                var d = new Date();
                d.setTime(d.getTime() + (7*24*60*60*1000));
               document.cookie = "guid=" + cart.guid + ";expires=" + d.toUTCString();
           }
           
           var countItems = document.getElementById("count_cart");
           countItems.innerText= cart.totalQuantity;
           sessionStorage.setItem("count_cart", cart.lines.length);
           console.log(cart);

        }
    }
    
    request.open("GET", "../gip/cart/cartCheck.php?id=" + productId, true);

    request.send();
}

function delProduct(e) {
    var lineId = this.getAttribute("data-line_id");
    var request = new XMLHttpRequest();
    request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var delLine = document.getElementById("line" + lineId);
            delLine.parentNode.removeChild(delLine);
            var cart = JSON.parse(request.responseText);
            if (!cart.totalQuantity) {
                var subtotal = document.getElementById("subtotal");
                subtotal.remove();
                var button = document.getElementById("checkoutbuttons");
                button.remove();
            }
            
            checkCountCart(document.cookie.replace(/(?:(?:^|.*;\s*)guid\s*\=\s*([^;]*).*$)|^.*$/, "$1"));
        }
    };

    request.open("GET", "../gip/cart/deleteCart.php?lineId=" + lineId, true);

    request.send();
}

function addProductToWishlist(e) {
    var productId = this.getAttribute("data-product_id");
    var request = new XMLHttpRequest();
    request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           // Typical action to be performed when the document is ready:
           var cart = JSON.parse(request.responseText);
           if (!document.cookie.replace(/(?:(?:^|.*;\s*)guid\s*\=\s*([^;]*).*$)|^.*$/, "$1")) {
                var d = new Date();
                d.setTime(d.getTime() + (7*24*60*60*1000));
               document.cookie = "guid=" + cart.guid + ";expires=" + d.toUTCString();
           }
           
           var countItems = document.getElementById("count_cart");
           countItems.innerText= cart.totalQuantity;
           sessionStorage.setItem("count_cart", cart.lines.length);

        }
    }
    
    request.open("GET", "../gip/wishlist/addProduct.php?id=" + productId, true);

    request.send();
}

function changePrices(cart, lineIndex, lineId) {
    
    var totalPrice = cart.totalPrice;
    var linePrice = cart.lines[lineIndex].linePrice;
    
    document.getElementById("totalPrice").innerHTML = "€" + totalPrice.toFixed(2);
    document.getElementById("linePrice" + lineId).innerHTML = "€" + linePrice.toFixed(2);
}

function increaseValue(e) {
    var lineId = e.getAttribute("data-line_id");
    var lineIndex = e.getAttribute("data-line_index");
    var value = parseInt(document.getElementById('number'+ lineId).value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number' + lineId).value = value;
    
    updateQuantity(document.cookie.replace(/(?:(?:^|.*;\s*)guid\s*\=\s*([^;]*).*$)|^.*$/, "$1"), value, lineIndex, lineId);
    checkCountCart(document.cookie.replace(/(?:(?:^|.*;\s*)guid\s*\=\s*([^;]*).*$)|^.*$/, "$1"));
  }
  
  function decreaseValue(e) {
    var lineId = e.getAttribute("data-line_id");
    var lineIndex = e.getAttribute("data-line_index");

    var value = parseInt(document.getElementById('number'+ lineId).value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('number'  + lineId).value = value;

    updateQuantity(document.cookie.replace(/(?:(?:^|.*;\s*)guid\s*\=\s*([^;]*).*$)|^.*$/, "$1"), value, lineIndex, lineId);
    checkCountCart(document.cookie.replace(/(?:(?:^|.*;\s*)guid\s*\=\s*([^;]*).*$)|^.*$/, "$1"));
  }

  function updateQuantity(guid, quantity, lineIndex, lineId) {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            
            var cart = JSON.parse(request.responseText);
            changePrices(cart, lineIndex, lineId);
        }
    };
    
    request.open("GET", "../gip/cart/updateCart.php?guid=" + guid + "&quantity=" + quantity + "&lineId=" + lineId, true);

    request.send();
  }

function getCart(guid, lineIndex, lineId) {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var cart = JSON.parse(request.responseText);
            changePrices(cart, lineIndex, lineId);
            //return cart;     
        }    
    };
    request.open("GET", "../gip/cart/getCart.php?guid=" + guid, true);

    request.send();
    
}

function checkCountCart(guid){
    
    var request = new XMLHttpRequest();
    request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var cart = JSON.parse(request.responseText);
            var countItems = document.getElementById("count_cart");
            console.log(cart);
            countItems.innerText= cart.totalQuantity;
        }
    };
    
    request.open("GET", "../gip/cart/getCart.php?guid=" + guid, true);

    request.send();
}

function initPage() {
    var cartButton = document.getElementsByClassName("itemToCart");
    var cartDel = document.getElementsByClassName("btn delProductCart");
    //var wishlistButton = document.getElementsByClassName("itemToWishList");
    var cartBigButton = document.getElementsByClassName("main_btn addCart");
    var i;
    for (i = 0; i < cartButton.length; i++) {
        cartButton[i].addEventListener("click", addProduct, false);
    }
    
    for (i = 0; i < cartDel.length; i++) {
        cartDel[i].addEventListener("click", delProduct, false);
    }
    /*
    for (i = 0; i < wishlistButton.length; i++) {
        wishlistButton[i].addEventListener("click", addProductToWishlist, false)
    }
    */
    for (i = 0; i < cartBigButton.length; i++) {
        cartBigButton[i].addEventListener("click", addProduct, false);
    } 
    if (document.cookie.replace(/(?:(?:^|.*;\s*)guid\s*\=\s*([^;]*).*$)|^.*$/, "$1")) {
        checkCountCart(document.cookie.replace(/(?:(?:^|.*;\s*)guid\s*\=\s*([^;]*).*$)|^.*$/, "$1"));
    } else {
        var countItems = document.getElementById("count_cart");
        countItems.innerText= 0;
        
    }
}

    
window.onload = initPage;