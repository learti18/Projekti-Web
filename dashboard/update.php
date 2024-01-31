<?php
include_once '../repository/repositoryDestinations.php';

if(isset($_POST['update-submit'])) {

    
    $city = $_POST["city"];
    $country = $_POST["country"];
    $category = $_POST["category"];
    $startDate = $_POST["startDate"];
    $endDate = $_POST["endDate"];
    $description = $_POST["description"];
    $price= $_POST["price"];
    $image=$_FILES["image"];
   
    $repositoryDestinations = new respositoryDestinations();

    $destination = $repositoryDestinations->getDestinationsById($destination_id);
    $image_destination = $repositoryDestinations->getImage($destination['destination_id']);
    

    $result = mysqli_query($conn, $query);
    mysqli_close($conn);

    header("Location: ../dashboard.php?updatesuccesful");
    exit();
}

?>