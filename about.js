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


let login = document.querySelector("#log");
login.addEventListener("click", function () {
  window.location.href = "login.html";
  console.log("hello");
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

// shop
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