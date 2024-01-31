<?php
include_once '../repository/repositoryDestinations.php';
include_once '../models/destinations.php';

if(isset($_POST['insertbtn'])){
   
    if(empty($_POST['city']) || empty($_POST['country']) || empty($_POST['category']) ||
    empty($_POST['startDate']) || empty($_POST['endDate'])  || empty($_POST['description']) || empty($_POST['price'])){
        
    } else {
                $city = $_POST["city"];
                $country = $_POST["country"];
                $category = $_POST["category"];
                $start_date = $_POST["startDate"];
                $end_date = $_POST["endDate"];
                $description = $_POST["description"];
                $price= $_POST["price"];
                $image=$_FILES["image"];

                $destination_id = $city.rand(100,999);

                $imageFilename=$image['name'];
                $imageFileError=$image['error'];
                $imageFileTemp=$image['tmp_name'];
                $filename_seperate =explode('.', $imageFilename);
                $file_extension = strtolower(end($filename_seperate ));
                $extension = array('jpeg','jpg','png');


                if (in_array($file_extension, $extension)) {

                    $upload_image='../photos/'. $imageFilename;
                    move_uploaded_file($imageFileTemp, $upload_image);
                    
                    $destinations  = new destinations($destination_id, $imageFilename, $city, $country, $category, $start_date, $end_date, $description, $price);
                    $repositoryDestinations = new respositoryDestinations();

                    $repositoryDestinations->insertDestinations($destinations);
                    
                }
    }   
}
?> 