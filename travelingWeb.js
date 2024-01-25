const buttons = document.querySelectorAll(".toggle-button");

setActiveBtn(document.getElementById("team-btn"))

for(let button of buttons){
    button.addEventListener("click",function(){
        for(let button of buttons){
            setBtnDefault(button)
        }

        setActiveBtn(button)
    })
}

function setActiveBtn(btn) {
    btn.classList.add("active");
    btn.style.backgroundColor = "var(--Blue-primary, #3E86F5)";
    btn.style.color = "#fff";
}

function setBtnDefault(btn) {
    btn.classList.remove("active");
    btn.style.backgroundColor = "#FFFFFF";
    btn.style.color = "#000000";
}
const menuBtn = document.querySelector(".menu-btn")
const barsLogo = document.querySelector(".bx-menu")
const xLogo = document.querySelector(".bx-x")
const sideBar = document.querySelector(".sidebar")
const nav = document.querySelector("nav")
const logo =document.querySelector(".logo a")

let isSidebarActive = false;

menuBtn.addEventListener("click",function(){
    isSidebarActive = !isSidebarActive
    isSidebarActive ? sideBar.style = "display:flex" : sideBar.style = "display:none"
    isSidebarActive ? nav.style = "background: #fff" : nav.style = "background: none";
    isSidebarActive ? logo.style = "color:#3E86F5;" : logo.style = "color:#fff"
    isSidebarActive ? barsLogo.style = "display:none" : barsLogo.style = "display: flex"
    isSidebarActive ? xLogo.style = "display:flex" : xLogo.style = "display: none"
})
