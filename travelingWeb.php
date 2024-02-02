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
         <!-- -------search-bar------  -->
   
                    

            <section class="offers-section">
               <h2>Special Upcoming Offers</h2>
                            
                    <div class="offer-selector">
                                <!-- Add category buttons dynamically using PHP -->
                        <?php
                                    include_once './repository/repositoryDestinations.php';
                                    $repositoryDestinations = new respositoryDestinations();
                                    $categories = $repositoryDestinations->getAllCategories();
                                    $categoryValues = array_values($categories);

                                    foreach ($categoryValues as $category) {
                                        echo '<button class="toggle-button" type="button" data-category="' . $category . '">' . ucfirst($category) . '</button>';
                                    }
                                ?>
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
                    <span id="span1" >5000+</span> <span id="span2">TURISTS</span>
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
                <a href="contact-us.php" class="Contact-button">Contact US</a> 
            </div>
        </section>
 

        <!-- Recommended destinations -->

            <section class="destination-section">
            <div class="destination-title">
                <h2>Recommended Destination</h2>
            </div>
            <div class="destination">
                <!-- Add category buttons dynamically using PHP -->
                <?php
                    include_once './repository/repositoryDestinations.php';
                    $repositoryDestinations = new respositoryDestinations();
                    $categories2 = $repositoryDestinations->getAllCategories1();
                    $categoryValues2 = array_values($categories2);
                        foreach ($categoryValues2 as $category) {
                                        echo '<button class="toggle-button2 destination-buttons" type="button" data-category="' . $category . '">' . ucfirst($category) . '</button>';
                                    }
                                ?>
            </div>

            <div class="destination" id="categoryButtons">
                <!-- Category buttons will be dynamically added here using JavaScript -->
            </div>

            <div class="destination-cards" id="destinationCards">
                <!-- Display destinations dynamically using JavaScript -->
            </div>
        </section>
 



<!-------Review section------>     
        <section class="review-section">
            <div class="review-cards">
                <div class="review-card">
                    <p>Our trip to Morocco was truly a once in a lifetime experience and 
                        we are so grateful to everyone that made it happen seamlessly. 
                        Our travel planner, Jaouad, was increadible.</p>
                    <p class="author">-Vand D</p>
                    <p class="happy">Happy Treloo</p>
                    <!-- <div class="reviewer-image">
                        <img class="reviewer-image-img" src="photos/reviewer1.svg" alt="reviewer pic">
                        
                        <div class="rating">
                            <p><img src="photos/Star.svg" alt="star">4.5</p>
                        </div>
                        
                    </div> -->
                </div>
                <div class="review-card review-card2">
                    <p>Our trip to Morocco was truly a once in a lifetime experience and 
                        we are so grateful to everyone that made it happen seamlessly.
                        Our travel planner, Jaouad, was increadible.</p>
                    <p class="author">-Tru Vio</p>
                    <p class="happy">Happy Treloo</p>
                    <!-- <div class="reviewer-image">
                        <img class="reviewer-image-img" src="photos/reviewer2.svg" alt="reviewer pic">
                        <div class="rating">
                            <p><img src="photos/Star.svg" alt="star">4.9</p>
                        </div>
                    </div>     -->
                </div>
            </div>
            <div class="arrow-slider">
                <button class="slider-button"><img src="photos/left-arrow.png" alt=""></button>
                <button class="slider-button"><img src="photos/right-arrow.png" alt=""></button>
            </div>
        </section>

        <!-- DISCOUNT SECTION -->
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
                    <a class="register-button" href="accommodation.html">Destinations</a>
                </div>
            <?php
                }
            ?>
        </section>      
        
        <!-------footer section------> 
        <?php include "footer.php"; ?>
    
    <script src="travelingWeb.js"></script>
    <script src="category.js"></script>

</body>
</html>