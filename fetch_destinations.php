<?php
include_once './repository/repositoryDestinations.php';

if (isset($_POST['category'])) {
    $category = $_POST['category'];

    $repositoryDestinations = new respositoryDestinations();

    if (in_array($category, ['team', 'couple', 'family'])) {
        $destinations = $repositoryDestinations->getDestinationsWithImagesByCategory($category);
    } else {
        // Assuming you have a method like getDestinationsWithImagesByCategory1
        $destinations = $repositoryDestinations->getDestinationsWithImagesByCategory1($category);
    }

    header('Content-Type: application/json');
    echo json_encode($destinations);
}
?>
