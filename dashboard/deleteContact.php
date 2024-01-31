<?php 
        if(isset($_GET["id"])){
            include "../classes/DatabaseConnection.php";
            include "../classes/contactus.class.php";        
            
            $id = $_GET["id"];

            $contact = new ContactUs();
            $contact->deleteMessage($id);

            echo "<script>document.location='contactUs.php';alert('message deleted successfully');</script>";       
        }
    ?>