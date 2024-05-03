// 
function logout() {
  var result = confirm("Are you sure you want to log out?");
  if (result) {
      // User clicked OK, redirect to logout.php
      window.location.href = "logout.php";
  } else {
      // User clicked Cancel, do nothing
  }
}

// search
let icondiv = document.querySelector(".icon");
let searchicon = document.querySelector(".serch-btn")
let searchclose = document.querySelector(".search-close")
let serchbox = document.querySelector(".search");

searchicon.addEventListener('click',function(){
if(!icondiv.classList.contains("active")){
  icondiv.classList.add("active");
  serchbox.focus();    
}
// else{
//   icondiv.classList.add("active");
//   serchbox.focus();  
// }
})
searchclose.addEventListener('click',()=>{
serchbox.value ='';
  icondiv.classList.remove("active");
})

// cart
let icart = document.getElementById("sc")
let cart = document.querySelector("#cart");
let carticon = document.querySelector("#cart i")
console.log(carticon)
icart.addEventListener('click',function(){
  cart.style.display="block";
    cart.style.transform = "none";
})
carticon.addEventListener('click',function(){
  cart.style.display="none";
  cart.style.transform = "translateX(100%)";
})
//
let down = document.querySelector("#down");
let myitem = document.querySelector(".shopitem")
let shop = document.querySelector("#shop");
down.addEventListener('click',()=>{
  if(myitem.style.display === "none"){
    myitem.style.display = "block";
  
     }
  else{
   myitem.style.display = "none";
  }
})
myitem.addEventListener('mouseleave',()=>{
  myitem.style.display = "none";
})
// handling male and female
let male = document.querySelectorAll(".male");
let female = document.querySelectorAll(".female");
let malecon = document.getElementsByClassName("malecontain")[0]; // accessing the first element in the collection
let femalecon = document.getElementsByClassName("femalecontain")[0]; // accessing the first element in the collection


male.forEach((i)=>{
  i.addEventListener('click',()=>{
    if(malecon.classList.contains("activeshop")){
      malecon.classList.remove("activeshop");
      femalecon.classList.add("activeshop");
    }
  })

})
female.forEach((i)=>{
  i.addEventListener('click',()=>{
    if(femalecon.classList.contains("activeshop")){
      femalecon.classList.remove("activeshop");
      malecon.classList.add("activeshop");
    }
  })
})

// it is better to use for each loop;
// 

// Adding event listener to each male element
// for (let i = 0; i < male.length; i++) {
//     male[i].addEventListener('click', () => {
//         if (malecon.classList.contains("activeshop")) {
//             malecon.classList.remove("activeshop");
//             femalecon.classList.add("activeshop");
//         }
//     });
// }
// Adding event listener to each female element

// for (let i = 0; i < female.length; i++) {
//     female[i].addEventListener('click', () => {
//         if (femalecon.classList.contains("activeshop")) {
//             femalecon.classList.remove("activeshop");
//             malecon.classList.add("activeshop");
//         }
//     });
// }





