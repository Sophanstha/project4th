
/*document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".slider");
  const slides = document.querySelectorAll(".slide");
  let counter = 0;

  setInterval(() => {
    slider.style.transition = "transform 0.5s ease-in-out";
    slider.style.transform = `translateX(${-counter * 100}%)`;

    counter++;

    if (counter === slides.length) {
      counter = 0;
      setTimeout(() => {
        slider.style.transition = "none";
        slider.style.transform = "translateX(0)";
      }, 8000);
    }
  }, 3000);
});*/

document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".slider");
  const slides = document.querySelectorAll(".slide");
  let counter = 0;
  let slideInterval;

  function startSlider() {
    slideInterval = setInterval(() => {
      slider.style.transition = "transform 0.5s ease";
      slider.style.transform = `translateX(${-counter * 100}%)`;

      if (counter === slides.length - 1) {
        setTimeout(() => {
          // slider.style.transition = "none";
      slider.style.transition = "transform 0.5s ease";

          slider.style.transform = "translateX(0)";
          counter = 0;
        }, 2000); // Adjust timing here for when to reset
      } else {
        counter++;
      }
    }, 1500);
  }

  function pauseSlider() {
    clearInterval(slideInterval);
  }

  startSlider(); // Start the slider initially

  slider.addEventListener("mouseenter", pauseSlider);
  slider.addEventListener("mouseleave", startSlider);
});

// arrow move
let btn2 = document.querySelector(".btn2");
let arrow = document.querySelector(".btn2 i");
btn2.addEventListener("click", (e) => {
  // alert("hello")
  arrow.style.transform = "translateX(100px)";
});

// review slider
let revslide = document.querySelectorAll(".rediv");
let prev = document.querySelector("#prev");
let next = document.querySelector("#next");

let count = 0;
revslide.forEach((e, index) => {
  e.style.left = `${index * 100}%`;
});

next.addEventListener("click", () => {
  if (count >= 3) {
    count = 0;
  }
  if (count < 3) {
    count++;
    slider();
  }
});
prev.addEventListener("click", () => {
  if (count <= 0) {
    count = 3;
    slider();
  } else {
    count--;
    slider();
  }
});

let slider = function () {
  revslide.forEach((e) => {
    e.style.transform = `translateX(-${count * 100}%)`;
  });
};
// serach
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

// shop
// login
let login = document.querySelector("#log");
// login.addEventListener("click", function () {
//   window.location.href = "login.php";
//   console.log("hello");
// });

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
// shop down
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





