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
                <!-- Table to display destination information -->
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
              <!-- Table body for destination data -->
                <?php
                    include_once '../repository/repositoryDestinations.php';
                // Create an instance of the destinations repository and get all the destrinations
                        $repositoryDestinations = new respositoryDestinations();

                        $destinations = $repositoryDestinations->getAllDestinations();
                // Loop through each destination and display its information
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
