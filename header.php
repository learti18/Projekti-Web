<?php
    session_start();
?>
<link rel="stylesheet" href="header.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

 <!-- Navigation section -->
    <nav>
        <div class="logo"><a href="travelingWeb.php">Treloo</a></div>
        <label for="" class="menu-btn">
            <i class='bx bx-menu'></i>
            <i class='bx bx-x'></i>
        </label>
<!-- Sidebar navigation links -->        
        <ul class="sidebar">
            <li><a href="about-us.php">ABOUT</a></li>
            <li><a href="reviews.php">REVIEW</a></li>
            <?php
                if(isset($_SESSION["userid"]) && $_SESSION["role"] == "admin"){
            ?>
                <li><a href="./dashboard/dashboard.php">DASHBOARD</a></li>
            <?php 
                }
            ?>
            <?php
// Display user-specific links if the user is logged in            
                if(isset($_SESSION["userid"])){
            ?>
                <li><a href="logout.php" class="active">LOGOUT</a></li>
            <?php 
                }
// Display login and registration links if the user is not logged in                
                else{
            ?>       
                <li><a href="Accommodation.php">DESTINATIONS</a></li>   
                <li><a href="login.php" class="active">LOGIN</a></li>
            <?php 
                }
            ?>
        </ul>
    </nav>

    <script> 
    //navbar 
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

</script>

