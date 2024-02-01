<?php
    include_once './repository/repositoryDestinations.php';

    if (isset($_POST['category'])) {
        $category = $_POST['category'];

        $repositoryDestinations = new respositoryDestinations();
        $destinations = $repositoryDestinations->getDestinationsWithImagesByCategory($category);

        header('Content-Type: application/json');
        echo json_encode($destinations);
    }
?>

