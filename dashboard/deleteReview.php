<?php 
        if(isset($_GET["id"])){
            include "../classes/DatabaseConnection.php";
            include "../classes/reviews.class.php";        
            
            $id = $_GET["id"];

            $contact = new ContactUs();
            $contact->deleteMessage($id);

            echo "<script>document.location='reviewsDashboard.php';alert('message deleted successfully');</script>";       
        }
    ?>