if(document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded',ready);
}else{
    ready();
}
let count =0;
// define the ready function
function ready(){
    let trask = document.getElementsByClassName("cart-r");
    for (var i = 0; i < trask.length; i++) {
    console.log(trask[i]);
    trask[i].addEventListener('click',removecarticon)
    }
    // QUANTITY CHANGE
    let quantitychange = document.getElementsByClassName("cart-quantity");
    for (var i = 0; i < quantitychange.length; i++) {
        // console.log(quantitychange[i]);
    quantitychange[i].addEventListener('change',cahngequanlty)
    }
    // addtocart
    let addtocart = document.getElementsByClassName("addto-cart")
    for (var i = 0; i < addtocart.length; i++) {
      let button = addtocart[i];
      button.addEventListener('click',addcartfun);
    }
}
function removecarticon(e) {
    let buttonclick = e.target;
    let cartItem = buttonclick.parentElement;

    // Get the title and price of the product being removed
    let productName = cartItem.querySelector('.product-cart-title').innerText;
    let productPrice = cartItem.querySelector('.cart-price').innerText;

    // Remove the corresponding product from the products array
    removeProduct(productName, productPrice);

    // Remove the cart item from the DOM
    cartItem.remove();

    // Update total and cart count
    updatetotal();
    decreasecart();

    // Remove corresponding input fields from the form
    removeFormInputs(productName, productPrice);
}

// changequanty function
function cahngequanlty(event){
    var input = event.target;
    if(isNaN(input.value) || input.value <=0){
        input.value = 1;
    }
    updatetotal();
}

// define the addcartfun function
function addcartfun(event){

let btn = event.target;
let productparent = btn.parentElement;
let title = productparent.getElementsByClassName('title')[0].innerText;
let pdtprice = productparent.getElementsByClassName('price')[0].innerText;
let pdtimg = productparent.getElementsByClassName('pdt-img')[0].src;

addToProdunt(title,pdtprice,pdtimg);
addfrom(title,pdtprice,);
updatetotal();
}

// define the addToProdunt function
function addToProdunt(title,pdtprice,pdtimg){
    // console.log("hello");
var creatediv = document.createElement("div");
creatediv.classList.add("cart-box");
var cartitem = document.getElementsByClassName("cart-content")[0];
var cartitemname = cartitem.getElementsByClassName("product-cart-title")
for (var i = 0; i < cartitemname.length; i++) {
if(cartitemname[i].innerText == title){
    alert("cart is already added");
    return;
}
}
increasecart();

var cartboxcontent= `
    <img src="${pdtimg}" class="cart-img">
    <div class="detail-box">
        <div class="product-cart-title" name="pdttitle">${title}</div>
        <div class="cart-price"  name="pdtprice">${pdtprice}</div>
        <input type="number" value="1" class="cart-quantity" name ="pdtqanty">
    </div>
    <i class="fa-solid fa-trash cart-r" id="cart-remove"></i>
`;
creatediv.innerHTML = cartboxcontent;
cartitem.append(creatediv);
creatediv.getElementsByClassName("cart-r")[0].addEventListener('click',removecarticon);
creatediv.getElementsByClassName("cart-quantity")[0].addEventListener('change',cahngequanlty)
}

// define the addfrom function
let products = []; // Array to store product information

function addfrom(title, pdtprice) {
    // Add product to the products array
    products.push({ title: title, pdtprice: pdtprice });

    let from = document.querySelector(".fromdiv");
    let existingForm = from.querySelector("form");

    // If form already exists, update its values
    if (existingForm) {
        updateForm(existingForm);
    } else {
        // If form doesn't exist, create and append it
        createForm();
    }
}

function updateForm(form) {
    let productInputs = '';
    products.forEach(product => {
        productInputs += `
            <input type="hidden" value="${product.title}" name="product_title[]">
            <input type="hidden" value="${product.pdtprice}" name="proce[]">
        `;
    });
    
    form.innerHTML = productInputs + '<button class="buybtn" name="button" type="submit">Buy</button>';
}

function createForm() {
    let from = document.querySelector(".fromdiv");
    let fromdiv = document.createElement("div");
    var info = `
        <form id="myForm" method="post" action="store_cart_item.php">
            <div class="product_inputs"></div>
            <button class="buybtn" name="button" type="submit">Buy</button>
        </form>
    `;
    fromdiv.innerHTML = info;
    from.appendChild(fromdiv);
    updateForm(fromdiv.querySelector("form"));
}

// upadte function
// function updatetotal(){
//     let cartcontent = document.getElementsByClassName("cart-content")[0]
//     let cartboxes = cartcontent.getElementsByClassName("cart-box");
//     let total = 0;
//     for (var i = 0; i < cartboxes.length; i++) {
//         let cartbox = cartboxes[0];
//         let priceelement = cartbox.getElementsByClassName("cart-price")[0];
//         let quantityelement = cartbox.getElementsByClassName("cart-quantity")[0];
//         let price = parseFloat(priceelement.innerText.replace("Nrs",""));
//         let quantity =quantityelement.value ;
//         total = total + (price * quantity);

//         document.getElementsByClassName("total-price")[0].innerHTML = "NRP " + total;
//     }
// }
function updatetotal() {
    let cartcontent = document.getElementsByClassName("cart-content")[0];
    let cartboxes = cartcontent.getElementsByClassName("cart-box");
    let total = 0;
    for (var i = 0; i < cartboxes.length; i++) {
        let cartbox = cartboxes[i]; // Use cartboxes[i] to reference each cart box
        let priceelement = cartbox.getElementsByClassName("cart-price")[0];
        let quantityelement = cartbox.getElementsByClassName("cart-quantity")[0];
        let price = parseFloat(priceelement.innerText.replace("Nrs", ""));
        let quantity = parseInt(quantityelement.value); 
        total += price * quantity; 
    }
    document.getElementsByClassName("total-price")[0].innerHTML = "NRP " + total.toFixed(2);
// increasecart()
}

// cart increase
function increasecart(){
    let myno = document.getElementsByClassName("cartno")[0]
    count++;
    myno.innerHTML = count;
}
function decreasecart() {
    let myno = document.getElementsByClassName("cartno")[0];
    if (count > 0) {
        count--;
        myno.innerHTML = count;
    }
    if(count == 0){
        myno.innerHTML = "";

    }
}
// remove product function 
function removeProduct(productName, productPrice) {
    // Find the index of the product in the products array
    const index = products.findIndex(product => product.title === productName && product.pdtprice === productPrice);

    // If the product is found, remove it from the array
    if (index !== -1) {
        products.splice(index, 1);
    }

    // Update the form
    let form = document.querySelector('#myForm');
    updateForm(form);
}

function removeFormInputs(productName, productPrice) {
    let form = document.querySelector('#myForm');
    let productTitleInputs = form.querySelectorAll(`input[name="product_title[]"][value="${productName}"]`);
    let productPriceInputs = form.querySelectorAll(`input[name="proce[]"][value="${productPrice}"]`);

    // Remove product title inputs
    productTitleInputs.forEach(input => {
        input.remove();
    });

    // Remove product price inputs
    productPriceInputs.forEach(input => {
        input.remove();
    });

    // Update the form
    // updateForm(form);
}