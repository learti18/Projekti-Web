<?php 
include_once __DIR__ . '/../classes/DatabaseConnection.php';


class respositoryDestinations{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->connect();
    }


    function insertDestinations($destination){

        $conn = $this->connection;

        $destination_id = $destination->getdestination_id();
        $images = $destination->getImages();
        $city= $destination->getCity();
        $country = $destination->getCountry();
        $category = $destination->getCategory();
        $start_date = $destination->getStart_date();
        $end_date = $destination->getEnd_date();
        $description = $destination->getDescription();
        $price = $destination->getPrice();
       
        $sql = "INSERT INTO destinations (destination_id,city,country,category,start_date,end_date,description,price)
                VALUES (?,?,?,?,?,?,?,?)
                ";

        $statement = $conn->prepare($sql);

        $statement->execute([null, $city, $country, $category, $start_date , $end_date, $description , $price]);
        $lastInsertedDestinationId = $conn->lastInsertId();
            // Get the last inserted destination ID

    
        // Insert multiple images for the destination
        foreach ($images as $image) {
            $sql2 = "INSERT INTO destination_images (image_id, destination_id, image_url) VALUES (null, ?, ?)";
            $statement2 = $conn->prepare($sql2);
            $statement2->execute([$lastInsertedDestinationId, $image]);
        }
        echo "<script> alert('Destination has been inserted successfully!');document.location='addDestinations.php'; </script>";
    }

    function getAllDestinations(){
        $conn = $this->connection;
        
        $sql = "SELECT * FROM destinations";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getDestinationsById($destination_id){
        $conn = $this->connection;

        $sql = "SELECT *, (SELECT image_url FROM destination_images WHERE destination_id = '$destination_id') as image_url FROM destinations WHERE destination_id='$destination_id'";

        $statement = $conn->query($sql);
        $destinations = $statement->fetch();

        return $destinations;
    }

    
    function updateDestinations($destination_id, $city, $country, $category, $start_date, $end_date, $description, $price)
    {
        $conn = $this->connection;
    
        try {
            // Check if a new image is provided
            $image_url = isset($image['name']) ? $image['name'] : $_POST['currentImage'];
            $sql = "UPDATE destinations SET city=?, country=?, category=?, start_date=?, end_date=?, description=?, price=? WHERE destination_id=?";
            $statement = $conn->prepare($sql);
            $success = $statement->execute([$city, $country, $category, $start_date, $end_date, $description, $price, $destination_id]);
    
            if ($success) {
                echo "<script>alert('Update was successful.'); </script>";
            } else {
                echo "<script>alert('Update failed.'); </script>";
            }
    
            return $success;
        } catch (PDOException $e) {
            // Log or handle the database error appropriately
            echo "Database Error: " . $e->getMessage();
            return false; // Indicate failure
        }
    }


    function deleteDestination($destination_id){
        $conn = $this->connection;

        $sql = "DELETE FROM destinations WHERE destination_id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$destination_id]);

        echo "<script>alert('delete was successful'); </script>";
   }

    function getLastInsertedDestinationId() {
        return $this->connection->lastInsertId();
    }

    function getImage($destination_id){
        $conn = $this->connection;

        $sql = "SELECT image_url FROM destination_images WHERE destination_id = '$destination_id'";

        $statement = $conn->query($sql);
        $destinations = $statement->fetch();
        return $destinations;
    }
    function updateDestinationImage($destination_id, $imageFilename) {
        $conn = $this->connection;
    
        $sql = "UPDATE destination_images SET image_url = ? WHERE destination_id = ?";
        $statement = $conn->prepare($sql);
    
        $statement->execute([$imageFilename, $destination_id]);
    }
    // function getDestinationsByCategory($category)
    // {
    //     $conn = $this->connection;

    //     $sql = "SELECT * FROM destinations WHERE category = ?";

    //     $statement = $conn->prepare($sql);
    //     $statement->execute([$category]);

    //     $destinations = $statement->fetchAll();

    //     return $destinations;
    // }
    // // Get all distinct categories from the destinations table
    public function getAllCategories() {
        $sql = "SELECT DISTINCT category FROM destinations"; // Replace 'destinations' with your actual table name
        $result = $this->connection->query($sql);

        $categories = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $categories[] = $row['category'];
        }

        return $categories;
    }
    public function getDestinationsWithImagesByCategory($category) {
        $allowedCategories = ['team', 'couple', 'family'];
    
        // Check if the provided category is allowed
        if (!in_array($category, $allowedCategories)) {
            return [];
        }
    
        $allowedCategoriesStr = implode("','", $allowedCategories);
    
        $sql = "SELECT destinations.*, destination_images.image_url 
                FROM destinations
                LEFT JOIN destination_images ON destinations.destination_id = destination_images.destination_id
                WHERE destinations.category = '$category'
                AND destinations.category IN ('$allowedCategoriesStr')";
    
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
    
        $destinations = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $destinations;
    }
    
    
    }
    


    

?>