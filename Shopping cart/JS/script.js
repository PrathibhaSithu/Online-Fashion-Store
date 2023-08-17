const daysE1 = document.getElementById('Days');
const hoursE1 = document.getElementById('Hours');
const minutesE1 = document.getElementById('Minutes');
const secondsE1 = document.getElementById('Seconds');
const newYears = "1 june 2022";
function countdown() {
    const newYearDate = new Date(newYears);
    const currentDate = new Date();
    const totalSeconds = (newYearDate - currentDate) / 1000;

    const days = Math.floor(totalSeconds / 3600 / 24);
    const hours = Math.floor(totalSeconds / 3600)%24;
    const mins = Math.floor(totalSeconds / 60) % 60;
    const secs = Math.floor(totalSeconds) % 60;
    daysE1.innerHTML = days;
    hoursE1.innerHTML = formatTime(hours);
    minutesE1.innerHTML= formatTime(mins);
    secondsE1.innerHTML= formatTime(secs);
}
function formatTime(time) {
    return time < 10 ? `0${time}`: time;
}
setInterval(countdown, 1000);
countdown();

if (document.readyState == "loading"){
    document.addEventListener("DOMContentLoaded" , ready);
}
else{
    ready();
}

function ready(){
    // Remove Item from cart
    var removeCartButton = document.getElementsByClassName('cart-remove');
    console.log(removeCartButton);

    for(var i=0; i < removeCartButton.length; i++){
        var button = removeCartButton[i];
        button.addEventListener("click" ,removeCartItem);
    }
    var quantityInputs = document.getElementsByClassName('cart-quantity');
    for (var i=0; i < quantityInputs.length; i++){
        var input = quantityInputs[i];
        input.addEventListener("change" , quantityChange);
    }
}
//checkout button work
document.getElementsByClassName('btn-primary')[0].addEventListener('click' , checkout); 
function checkout(){
    alert('Succesfull');
    var cartContent = document.getElementsByClassName('product-card')[0];
    while(cartContent.hasChildNodes()){
        cartContent.removeChild(cartContent.firstChild);
    }
    updatetotal();
}
function quantityChange(event){
    var input = event.target;
    if(isNaN(input.value) || input.value <= 0){
        input.value = 1;
    }
    updatetotal();
    
}
function removeCartItem(event){
    var e = event.target;
    e.parentElement.parentElement.remove();
    updatetotal();
}
function updatetotal(){
    var cartContent = document.getElementsByClassName('product-card')[0];
    var cartBoxes = cartContent.getElementsByClassName('card');
    var total =0;
    var n = 0 ;
    for(var i=0; i< cartBoxes.length;i++){
        var cartBoxe = cartBoxes[i];
        var priceElement = cartBoxe.getElementsByClassName('price')[0];
        var quantityElement = cartBoxe.getElementsByClassName('cart-quantity')[0];
        var price = parseFloat(priceElement.innerText.replace("$", ""));
        var quantity = quantityElement.value;
        total = total + (price * quantity);
        var n = total.toFixed(2);
    }    
        total = Math.round(total * 100) / 100.00;
        document.getElementById("total").innerText = n; 
        document.getElementById('subtotal').innerText = n;
        document.getElementById('payAmount').innerText = n;
}
var addCart = document.getElementsByClassName('add-cart');
for ( var i=0 ; i < addCart.length; i++){
    var button = addCart[i];
    button.addEventListener("click" , addItem);
}
var n = total;
function addItem(event){
   var button = event.target;
   var shopProduct = button.parentElement;
   var title = shopProduct.getElementsByClassName("title")[0].innerText;
   var price = shopProduct.getElementsByClassName("cart-price")[0].innerText;
   var productImg = shopProduct.getElementsByClassName("product-img")[0].src;
   addProducttoCart(title,price,productImg);
   updatetotal();
}

function addProducttoCart(title,price,productImg){
    var cartShopBox = document.createElement('div');
    cartShopBox.classList.add('card');
    var cartItem = document.getElementsByClassName("product-card")[0];
    var cartItemName = cartItem.getElementsByClassName("product-name");
    for ( var i=0 ; i < cartItemName.length; i++){
        if(cartItemName[i].innerText == title){
            alert("you have already add this item to cart");
            return;
        } 
    
}
var cartBoxContent = `
                      
                      <div class="img-box">
                      <img src="${productImg}" alt="shirt" width="80px" class="product-img">
                      </div>
                      <div class="detail">
                        <h4 class="product-name">${title}</h4>
                        <div class="wrapper">
                            <div class="product-qty">
                            <input type="number" value="1" class="cart-quantity">
                            </div>
                            <div class="price">
                                ${price} 
                            </div>
                        </div>
                    </div>
                    <button class="product-close-btn">
                        <ion-icon name="close-outline" class="cart-remove"></ion-icon>
                      </button>`;
cartShopBox.innerHTML = cartBoxContent;
cartItem.append(cartShopBox);
cartShopBox.getElementsByClassName('cart-remove')[0].addEventListener('click', removeCartItem);
cartShopBox.getElementsByClassName('cart-quantity')[0].addEventListener('change', quantityChange);
}
function get(){
    var subtotal = document.getElementById('total').innerText = n;
}
