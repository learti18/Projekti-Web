<?php

$destination_id = $_GET['id'];
include_once '../repository/repositoryDestinations.php';



$repositoryDestinations = new respositoryDestinations();

$repositoryDestinations->deleteDestination($destination_id);

header("location: Destinations.php");


?>