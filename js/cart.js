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
    }
    
    request.open("GET", "../GIP/cart/cartCheck.php?id=" + productId, true);

    request.send();
}

function delProduct(e) {
    var lineId = this.getAttribute("data-line_id");
    var request = new XMLHttpRequest();
    request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            console.log(lineId);
            var delLine = document.getElementById("line" + lineId);
            delLine.parentNode.removeChild(delLine);

            checkCountCart(document.cookie.replace(/(?:(?:^|.*;\s*)guid\s*\=\s*([^;]*).*$)|^.*$/, "$1"));
        }
    };

    request.open("GET", "../GIP/cart/deleteCart.php?lineId=" + lineId, true);

    request.send();
}

function changePrices(cart, lineIndex, lineId) {
    
    var totalPrice = cart.totalPrice;
    
    var linePrice = cart.lines[lineIndex].linePrice;
    console.log(cart);
    document.getElementById("totalPrice").innerHTML = totalPrice;
    document.getElementById("linePrice" + lineId).innerHTML = linePrice;
}

function increaseValue(e) {
    var lineId = e.getAttribute("data-line_id");
    var lineIndex = e.getAttribute("data-line_index");
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number').value = value;
    
    updateQuantity(document.cookie.replace(/(?:(?:^|.*;\s*)guid\s*\=\s*([^;]*).*$)|^.*$/, "$1"), value, lineIndex, lineId);
    
  }
  
  function decreaseValue(e) {
    var lineId = e.getAttribute("data-line_id");
    var lineIndex = e.getAttribute("data-line_index");

    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('number').value = value;

    updateQuantity(document.cookie.replace(/(?:(?:^|.*;\s*)guid\s*\=\s*([^;]*).*$)|^.*$/, "$1"), value, lineIndex, lineId);
  }

  function updateQuantity(guid, quantity, lineIndex, lineId) {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var cart = JSON.parse(request.responseText);
            changePrices(cart, lineIndex, lineId);
        }
    };
    
    request.open("GET", "../GIP/cart/getCart.php?guid=" + guid + "&quantity=" + quantity + "&LineId=" + lineId, true);

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
    request.open("GET", "../GIP/cart/getCart.php?guid=" + guid, true);

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
    
    request.open("GET", "../GIP/cart/getCart.php?guid=" + guid, true);

    request.send();
}

function initPage() {
    var cartButton = document.getElementsByClassName("ti-shopping-cart");
    var cartDel = document.getElementsByClassName("fa fa-trash");
    var i;
    for (i = 0; i < cartButton.length; i++) {
        cartButton[i].addEventListener("click", addProduct, false);
    }
    
    for (i = 0; i < cartDel.length; i++) {
        cartDel[i].addEventListener("click", delProduct, false);
    }
    
    if (document.cookie.replace(/(?:(?:^|.*;\s*)guid\s*\=\s*([^;]*).*$)|^.*$/, "$1")) {
        checkCountCart(document.cookie.replace(/(?:(?:^|.*;\s*)guid\s*\=\s*([^;]*).*$)|^.*$/, "$1"));
    } else {
        var countItems = document.getElementById("count_cart");
        countItems.innerText= 0;
        
    }
}

    
window.onload = initPage;