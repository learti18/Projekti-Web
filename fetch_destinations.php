<?php
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    include_once './repository/repositoryDestinations.php';

    if (isset($_POST['category'])) {
        $category = $_POST['category'];

        $repositoryDestinations = new respositoryDestinations();

        
        $destinations = $repositoryDestinations->getDestinationsWithImagesByCategory($category,3);
    
        header('Content-Type: application/json');
        echo json_encode(['data' => $destinations, 'debug' => 'Debug information here']);
    }
?>

