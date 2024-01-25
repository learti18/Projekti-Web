const buttons = document.querySelectorAll(".toggle-button");

setActiveBtn(document.getElementById("team-btn"))
// Set the initial active button
for(let button of buttons){
    button.addEventListener("click",function(){
        for(let button of buttons){
            setBtnDefault(button)
        }
        setActiveBtn(button)
    })
}
// Set styles for the active button
function setActiveBtn(btn) {
    btn.classList.add("active");
    btn.style.backgroundColor = "var(--Blue-primary, #3E86F5)";
    btn.style.color = "#fff";
}
// Reset styles for non-active buttons
function setBtnDefault(btn) {
    btn.classList.remove("active");
    btn.style.backgroundColor = "#FFFFFF";
    btn.style.color = "#000000";
}
// JavaScript code for handling sidebar toggling
const menuBtn = document.querySelector(".menu-btn")
const barsLogo = document.querySelector(".bx-menu")
const xLogo = document.querySelector(".bx-x")
const sideBar = document.querySelector(".sidebar")
const nav = document.querySelector("nav")
const logo =document.querySelector(".logo a")

let isSidebarActive = false;

menuBtn.addEventListener("click",function(){
// Toggle sidebar visibility
    isSidebarActive = !isSidebarActive
    isSidebarActive ? sideBar.style = "display:flex" : sideBar.style = "display:none"
// Toggle background color and logo color based on sidebar state
    isSidebarActive ? nav.style = "background: #fff" : nav.style = "background: none";
    isSidebarActive ? logo.style = "color:#3E86F5;" : logo.style = "color:#fff"
// Toggle menu icons
    isSidebarActive ? barsLogo.style = "display:none" : barsLogo.style = "display: flex"
    isSidebarActive ? xLogo.style = "display:flex" : xLogo.style = "display: none"
})
