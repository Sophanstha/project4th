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
// shop doown
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

// review information handling
let subbtn=document.querySelector(".Btn");
let name=document.querySelector("#cname");
let email=document.querySelector("#email");
let number=document.querySelector("#cmumber");
let subject=document.querySelector("#csubject");
let review = document.querySelector("#textarea");

subbtn.addEventListener('click',()=>{
  if(name.value === "" || email.value ==="" || number.value==="" || subject.value ==="" || review.value=== ""){
      alert("please fill all the fields")
  }
  else if(isNaN(number.value)){
    alert("please enter the correct number")
  }
  else{
    alert("thank you for your review")
  }
})








