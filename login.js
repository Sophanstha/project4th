const sign_in_link = document.querySelector("#sign-in-link");
const sign_up_link = document.querySelector("#sign-up-link");
const container = document.querySelector(".container");

sign_up_link.addEventListener("click", () => {
    container.classList.add("sign-up-mode");
})

sign_in_link.addEventListener("click", () => {
    container.classList.remove("sign-up-mode");
})

// let btn = document.querySelector(".btn")
// let name = document.querySelector(".name");
// let pass = document.querySelector(".pass")
// let email = document.querySelector(".email")
// btn.addEventListener("click",function(){
//     console.log(pass)
// })