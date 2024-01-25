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
            <li><a href="Accommodation.php">DESTINATIONS</a></li>
            <?php
                if(isset($_SESSION["userid"]) &&  $_SESSION["role"]){
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
                <li><a href="about-us.php">ABOUT</a></li>    
                <li><a href="register.php" class="active">REGISTER</a></li>
            <?php 
                }
            ?>
        </ul>
    </nav>


