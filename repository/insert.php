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
                $images=$_FILES["images"];
                $destination_id = $city.rand(100,999);
                $uploadDir = '../uploads/';
                $uploadedImageUrls = [];
        
                foreach ($_FILES['images']['name'] as $key => $imageFilename) {
                    $imageFileError = $_FILES['images']['error'][$key];
                    $imageFileTemp = $_FILES['images']['tmp_name'][$key];
                    $filename_separate = explode('.', $imageFilename);
                    $file_extension = strtolower(end($filename_separate));
                    $allowed_extensions = array('jpeg', 'jpg', 'png');
        
                    if (in_array($file_extension, $allowed_extensions)) {
                        $upload_image = $uploadDir . $imageFilename;
                        move_uploaded_file($imageFileTemp, $upload_image);
                        $uploadedImageUrls[] = $upload_image; 
                    }
                }
        
                if (!empty($uploadedImageUrls)) {
                    $city = $_POST["city"];
                    $country = $_POST["country"];
                    $category = $_POST["category"];
                    $start_date = $_POST["startDate"];
                    $end_date = $_POST["endDate"];
                    $description = $_POST["description"];
                    $price = $_POST["price"];
                    $destination_id = $city . rand(100, 999);
        
                    $imageUrls = implode(',', $uploadedImageUrls);
                    $destinations = new destinations($destination_id, $imageUrls, $city, $country, $category, $start_date, $end_date, $description, $price);
                    $repositoryDestinations = new respositoryDestinations();
        
                    $repositoryDestinations->insertDestinations($destinations);
                }
    }   
}
?> 