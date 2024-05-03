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

// login
let login = document.querySelector("#log");
login.addEventListener("click", function () {
  window.location.href = "login.html";
  console.log("hello");
});
// link
document.querySelector("#Send").addEventListener('click',()=>{
  window.location.href = "contact.html";
})
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