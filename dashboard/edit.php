<?php
ob_start(); 
// Get destination ID from the URL
$destination_id = isset($_GET['id']) ? $_GET['id'] : null;

    if ($destination_id === null) {
           
            echo "Error: Destination ID is not set.";
            exit; 
        }
            // Include destinations repository and get destination by ID
            include_once '../repository/repositoryDestinations.php';
            $repositoryDestinations = new respositoryDestinations();
            $destination = $repositoryDestinations->getDestinationsById($destination_id);

   
    if ($destination === false) {
           
            echo "Error: Destination not found for ID: $destination_id";
            exit; 
    }
// Check if form is submitted for editing
    if (isset($_POST['editBtn'])) {
         require_once("../classes/DatabaseConnection.php");

            // Get data from the form
            $destination_id = $_POST["id"];
            $city = $_POST["city"];
            $country = $_POST["country"];
            $category = $_POST["category"];
            $startDate = $_POST["startDate"];
            $endDate = $_POST["endDate"];
            $description = $_POST["description"];
            $price = $_POST["price"];
            $image = $_FILES["image"];  

     // Check if a new image is uploaded
    if ($image['error'] == 0) {
            $imageFilename = $image['name'];
            $imageFileTemp = $image['tmp_name'];
            $uploadPath = '../photos/' . $imageFilename;
        
            // Move the uploaded file to the destination folder
            move_uploaded_file($imageFileTemp, $uploadPath);

            // Update the image URL in the database
            $repositoryDestinations->updateDestinationImage($destination_id, $imageFilename);
        }
            $repositoryDestinations->updateDestinations($destination_id, $city, $country, $category, $startDate, $endDate, $description, $price, $image);

            // Clear the output buffer
            ob_end_clean();

    header("location: dashboard.php");
    exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Create Destination</title>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <?php include "sidebar.php"; ?>

        <!-- Main Content -->
        <main class="main-content">
            <h1>Update destination</h1>
            <form action="edit.php?id=<?= $destination['destination_id'] ?>" method="post" enctype="multipart/form-data">


            <input type="number" name="id"  value="<?=$destination['destination_id']?>" readonly >

                <label for="city">City:</label>
                <input type="text" id="city" name="city" value="<?=$destination['city']?>" >
        
                <label for="country">Country:</label>
                <input type="text" id="country" name="country" value="<?=$destination['country']?>" >
        
                <label for="category">Category of Travel:</label>
                <select id="category" name="category" value="<?=$destination['category']?>" >
                    <option value="team">Team</option>
                    <option value="couple">Couple</option>
                    <option value="family">Family</option>
                    <option value="popular">Popular</option>
                    <option value="adventure">Adventure</option>
                    <option value="beach">Beach</option>
                </select>
        
                <label for="startDate">Start Date:</label>
                <input type="date" id="startDate" name="startDate" value="<?=$destination['start_date']?>">
        
                <label for="endDate">End Date:</label>
                <input type="date" id="endDate" name="endDate" value="<?=$destination['end_date']?>" >

                <label for="price">Price:</label>
                <input type="number" id="number" name="price" value="<?=$destination['price']?>" >
        
        
                <label for="images">Images:</label>
                <input type="file" name="image" value="">
                <input type="hidden" name="currentImage" value="<?= $destination['image_url'] ?>">
        
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" ><?=$destination['description']?></textarea>

                <button type="submit" name="editBtn" value="save">Save Changes</button>
            </form>
        </main>

    </div>

    <?php

?>


    <script src="desintaion.js"></script>
</body>
</html>
