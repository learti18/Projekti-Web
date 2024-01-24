<?php
    session_start();
?>
<link rel="stylesheet" href="header.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <nav>
        <div class="logo"><a href="travelingWeb.php">Treloo</a></div>
        <label for="" class="menu-btn">
            <i class='bx bx-menu'></i>
            <i class='bx bx-x'></i>
        </label>
        <ul class="sidebar">
            <li><a href="travelingWeb.php">HOME</a></li>
            <li><a href="Accommodation.html">DESTINATIONS</a></li>
            <?php
                if(isset($_SESSION["userid"]) && $_SESSION["role"] == "admin"){
            ?>
                <li><a href="dashboard.php">DASHBOARD</a></li>
            <?php 
                }
            ?>
            <?php
                if(isset($_SESSION["userid"])){
            ?>
                <li><a href="#"><?php echo $_SESSION["useruid"] ?></a></li>    
                <li><a href="logout.php" class="active">LOGOUT</a></li>
            <?php 
                }
                else{
            ?>       
                <li><a href="login.php">LOGIN</a></li>    
                <li><a href="register.php" class="active">REGISTER</a></li>
            <?php 
                }
            ?>
        </ul>
    </nav>

    <script>
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
    </script>

