<?php  
include "./classes/DatabaseConnection.php";
include "./classes/reviews.class.php";

$contact = new ContactUs();
$contacts = $contact->getMessages();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Traveling Wbsite</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="header">
        <?php include("header.php") ?>
        <!-- ------text---------- -->
        <div class="text">
            <h1>Discover Your Life, Travel <br>
                Where You Want </h1>
            <p>Wold you explore nature paradise in the world, let's find the best <br>
                destination in world with us</p>
        </div>
    </header>
     
<!-- ----Offers-section----- -->
        <section class="offers-section">
            <h2>Special Upcoming Offers</h2>
                            
            <div class="offer-selector">
                <button class="toggle-button activebtn" data-category="team">Team</button>
                <button class="toggle-button" data-category="couple">Couple</button>
                <button class="toggle-button" data-category="family">Family</button>
            </div>

            <div class="cards">
                <!-- Display destinations dynamically using JavaScript -->
            </div>
        </section>

<!-- ----contact-section----- -->
        <section class="contact-section">
            <div class="Contact-info">
               
                <div class="DESTINATIONS">
                    <span id="span5" >300+</span> <span id="span6">DESTINATIONS</span>
                </div> 


            <div class="HOTEL">
                <span id="span3">150+</span> <span id="span4">HOTELS</span>
            </div>


            <div class="TURISTS">
                <span id="span1">5000+</span> <span id="span2">TURISTS</span>
            </div>

                <img class="contact-img" src="photos/unsplash_tQpypKA92k8.svg" alt="">
            </div>
            <div class="contact-text">
                <h2 class="T">Travel Any Corner of <br>The World With Us </h2>
                <p class="F">Would you explore nature paradise in the world, let’s find the best destination in world with us,
                    Would you explore nature paradise in the world,
                    let’s find the best destination in world with us. Would you explore nature paradise in the world, 
                    let’s find the best destination in world with us. 
                    <br>Would you explore nature paradise in the world, let’s find the best destination in world with us.
                </p>
                <a href="reviews.php" class="Contact-button">Contact US</a> 
            </div>
        </section>
 <!-- ------Recommended Destinations----- -->
            <section class="destination-section">
            <div class="destination-title">
                <h2>Recommended Destination</h2>
            </div>
            <div class="destination" id="categoryButtons">
                <button class="recommended-toggle rec-active" data-category="popular">Popular</button>
                <button class="recommended-toggle" data-category="beach">Beach</button>
                <button class="recommended-toggle" data-category="adventure">Adventure</button>
            </div>

            <div class="destination-cards" id="destinationCards">
                <!-- Display destinations dynamically using JavaScript -->
            </div>
        </section>

<!-------Review section------>     
        <section class="review-section">
            <div class="review-cards">
                <?php foreach($contacts as $contact){ ?>
                    <div class="review-card">
                        <div class="message-details">
                            <p><?php echo $contact["message"]; ?></p>
                            <p class="author">-<?php echo $contact["fullname"]; ?></p>
                            <p class="happy">Happy Treloo</p>
                        </div>
                    </div>
                <?php } ?>
            </div>   
            <div class="arrow-slider">
                <button class="slider-button" id="left-arrow">&lt;</button>
                <button class="slider-button" id="right-arrow">&gt;</button>
            </div>
        </section>

<!------ DISCOUNT SECTION ------->
        <section class="discount-section">
            <?php
                if(!isset($_SESSION["userid"])){
            ?>
                <div class="discount">
                    <h2>Don’t Miss The 50% Discount if You register Today</h2>
                    <a class="register-button" href="register.php">Register Today</a>
                </div>
            <?php
                }else{

            ?>
                <div class="discount">
                    <h2>Don’t Miss The 50% Discount travel today!</h2>
                    <a class="register-button" href="accommodation.php">Destinations</a>
                </div>
            <?php
                }
            ?>
        </section>      
        
<!-------footer section------> 
        <?php include "footer.php"; ?>
    
        <script src="category.js">
            
        </script>
</body>

</html>