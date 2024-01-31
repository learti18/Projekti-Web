<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="destinations.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Responsive Dashboard</title>
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <?php include "sidebar.php"; ?>


        <main class="main-content">
            <table>
                <thead>
                    <tr class="table">
                        <th>Id</th>
                        <th>Image</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Category</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Actions</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
            
                <?php
                    include_once '../repository/repositoryDestinations.php';

                        $repositoryDestinations = new respositoryDestinations();

                        $destinations = $repositoryDestinations->getAllDestinations();

                        foreach ($destinations as $destination) {
                            echo "
                                <tr>
                                    <td>{$destination['destination_id']}</td>
                                    <td>";
                                        $image_destination = $repositoryDestinations->getImage($destination['destination_id']);
                                        if (!empty($image_destination)) {
                                        echo "<img src='../photos/{$image_destination['image_url']}' alt='{$destination['city']}' style='width: 100px; height: 100px; margin-right: 10px;' />";
                                }

                            echo "</td>

                                    <td>{$destination['city']}</td>
                                    <td>{$destination['country']}</td>
                                    <td>{$destination['category']}</td>
                                    <td>{$destination['start_date']}</td>
                                    <td>{$destination['end_date']}</td>
                                    <td>{$destination['description']}</td>
                                    <td>{$destination['price']}</td>
                                    
                                    <td><a class='edit-btn' href='edit.php?id={$destination['destination_id']}'>Edit</a></td>
                                    <td><a class='delete-btn' href='delete.php?id={$destination['destination_id']}'>Delete</a></td>


                                 </tr>";
                        }
                        ?>
                    
                    <a href="addDestination.php" class="add-product-btn">Add New Product</a>
        </main>
    </div>

</body>

</html>
<!-- // // Fetch and display images for the current destination
                        // $images = $repositoryDestinations->getImagesForDestination($destination['destination_id']);

                        // echo "<td>";
                        // foreach ($images as $image) {
                        //     $imageUrl = $image['image_url'];
                        //     echo "<img src='/photos/" . urlencode($imageUrl) . "' alt='Destination Image'>";
                        // }
                        // echo "</td>"; -->




                        <!-- <img src='../photos/destination1.jpg' alt='destination1.jpg'> -->
                    <!-- <tr>
                        <td><img src="https://via.placeholder.com/300x200" alt="Product Image"></td>
                        <td>Product Name 1</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                        <td>Category A</td>
                        <td>$99.99</td>
                        <td class="action-buttons">
                          <a href="edit.php">  <button class="edit-btn">Edit</button></a>
                            <button class="delete-btn">Delete</button>
                        </td>
                    </tr> -->
                    <!-- <tr>
                        <td><img src="https://via.placeholder.com/300x200" alt="Product Image"></td>
                        <td>Product Name 2</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                        <td>Category B</td>
                        <td>$149.99</td>
                        <td class="action-buttons">
                           <a href="edit.php"><button class="edit-btn">Edit</button></a> 
                            <button class="delete-btn">Delete</button>
                        </td>
                    </tr>
                    <tr> -->
                    <!-- <td><img src="https://via.placeholder.com/300x200" alt="Product Image"></td>
                        <td>Product Name 1</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                        <td>Category A</td>
                        <td>$99.99</td>
                        <td class="action-buttons">
                           <a href="edit.php"> <button class="edit-btn">Edit</button></a>
                            <button class="delete-btn">Delete</button>
                        </td> -->