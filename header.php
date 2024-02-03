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
            <li><a href="Accommodation.php">DESTINATIONS</a></li> 
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
                  
                <li><a href="login.php" class="active">LOGIN</a></li>
            <?php 
                }
            ?>
        </ul>
    </nav>

