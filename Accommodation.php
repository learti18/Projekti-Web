<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accommodation</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Accommodation.css">
</head>

<body>

 
<?php include("header.php"); ?>

    <div class="all">

        <?php
        include_once './repository/repositoryDestinations.php';

        $repositoryDestinations = new respositoryDestinations();

        $destinations = $repositoryDestinations->getAllDestinations();

        foreach ($destinations as $destination) {
            $image_destination = $repositoryDestinations->getImage($destination['destination_id']);
            // Replace static values with dynamic values from the database
            $imageUrl = !empty($image_destination) ? './photos/' . $image_destination['image_url'] : './photos/default_image.jpg';
            $city = $destination['city'];
            $country=$destination['country'];
            $description = $destination['description'];
            $price = $destination['price'];
            $id = $destination['destination_id'];
        ?>

            <div class="hotels">
                <img class="img1" src="<?php echo $imageUrl; ?>" alt="">
                <div class="all-description">
                    <div class="off">
                        <div><span id="tittle"><?php echo $city; ?></span></div>
                    </div>
                    <div class="Review-section">
                    <div class="stars">
                        <div><img src="photos/star-s-fill 1.svg"></div>
                        <div><img src="photos/star-s-fill 1.svg"></div>
                        <div><img src="photos/star-s-fill 1.svg"></div>
                        <div><img src="photos/star-s-fill 1.svg"></div>
                        <div><img src="photos/star-s-fill 5.svg"></div>
                    </div>
                    <div>
                        <span>4.5 (1200 Reviews)</span>
                    </div>
                </div>
                    <div class="description">
                        <div class="description-1">
                            <span><?php echo $country; ?></span>
                        </div>

                        <div class="description-2">
                            <span><?php echo $description; ?></span>
                        </div>
                        
                    </div>
                    <div class="booking">
                        <div><a class="book" href="product.php?id=<?php echo $id ?>">BOOK</a></div>
                        <div class="price">
                            <span id="price2">$<?php echo $price; ?></span>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>


         <?php include "footer.php"; ?> 












    

   



</body>

</html>