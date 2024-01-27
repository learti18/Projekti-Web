<?php 
        if(isset($_GET["id"])){
            
            include "../classes/DatabaseConnection.php";
            include "../classes/UserValidator.php";
            include "../classes/UserManager.php";
            
            $id = $_GET["id"];

            $userManager = new UserManager();
            $userManager->deleteUser($id);
            echo "<script>document.location='users.php';alert('user deleted successfully');</script>";       
        }
    ?>