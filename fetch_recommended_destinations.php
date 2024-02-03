<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
include_once './repository/repositoryDestinations.php';

if (isset($_POST['category'])) {
    $category = $_POST['category'];

    $repositoryDestinations = new respositoryDestinations();

   
    $recommendedDestinations = $repositoryDestinations->getRecommendedDestinations($category,4);

   
    error_log("Category: " . $category);
    error_log("Recommended Destinations: " . json_encode($recommendedDestinations));

    header('Content-Type: application/json');
    echo json_encode(['data' => $recommendedDestinations, 'debug' => 'Debug information here']);
}
?>
