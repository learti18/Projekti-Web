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
   <!-- <div class="All">
<div class="all2">
        <div class="header-search">
            <div class="A"><img class="img1" src="photos/Airplane Mode On.svg" ><button class="flight"> Flight</button></div>
            <div class="B"><img class="img2" src="photos/Hotel Star.svg" ><button class="hotel">Hotel</button></div>
        </div>
        <div class="search-bar">
            <div class="search">
                <div class="leaving-from">
                    <div >
                        <p class="Where">Leaving From </p>
                        <p class="City">Dubai</p>
                    </div>
                    <div class="img3"> 
                        <img src="photos/Airplane Mode On.svg" alt=""> 
                    </div>

                    <div >
                        <p class="Where">Going To</p>
                        <p class="City">New York</p>
                    </div>
                </div>
                
            <div class="leaving-from">    
                <div>
                    <p class="Where">Leave </p>
                    <p class="City">23 Jan,Sat</p>
                </div>
                <div class="img4"> 
                    <img src="photos/Hotel Star.svg" alt="">
                </div>
                <div>
                    <p class="Where">Return </p>
                    <p class="City">New York</p>
                </div>
            </div>

                <div class="search-icon">
                    <button class="C"><img src="photos/Group 14.svg" alt=""></button>
                </div>
</div>
            </div>
        </div>
    </div>
    </section> -->
    <!-- offers-section -->
        <section class="offers-section">
                <h2>Special Upcoming Offers</h2>
                <div class="offer-selector">
                    <button class="toggle-button" type="button" id="team-btn">Team</button>
                    <button class="toggle-button" type="button" id="couple-btn">Couple</button>
                    <button class="toggle-button" type="button" id="family-btn">Family</button>
                </div>
                <div class="cards">
                    <div class="card">
                        <div class="card-pic">
                            <img src="photos/logasea.svg" alt="pic of the sea">
                            <p>14 FEB 2022</p>
                        </div>
                        <p class="residence-time"><span>Relax</span> 3 Days, 3 Nights</p>
                        <h3 class="destination-title1">Loga Sea</h3>
                        <div class="book-section">
                            <p><span class="price">700$</span>/Person</p>
                            <a href="product.php" class="buttons">Book Now</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-pic">
                            <img src="photos/ansgar.svg" alt="pic of ansgar">
                            <p>18 JUN 2022</p>
                        </div>
                        <p class="residence-time"><span>Adventure</span> 4 Days, 3 Nights</p>
                        <h3 class="destination-title1">Ansgar Scheffold</h3>
                        <div class="book-section">
                            <p><span class="price">400$</span>/Person</p>
                            <a href="product.php" class="buttons">Book Now</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-pic">
                            <img src="photos/lona.svg" alt="pic of lona">
                            <p>22 DEC 2022</p>
                        </div>
                        <p class="residence-time"><span>Relax</span> 7 Days, 6 Nights</p>
                        <h3 class="destination-title1">Lona X</h3>
                        <div class="book-section">
                            <p><span class="price">340$</span>/Person</p>
                            <a href="product.php" class="buttons">Book Now</a>
                        </div>
                    </div>
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
                <a href="contact-us.php"><button class="Contact-button">Contact US</button></a> 
            </div>
        </section>
 <!-- ------Recommended Destination----- -->
        <section class="destination-section">
            <div class="destination-title">
            <h2>Recommended Destination</h2>
            </div>

            <div class="destination">
                <button class="Popular-button">Popular</button>
                <button class="destination-buttons">Adventure</button>
                <button class="destination-buttons">Beath</button>
            </div>

            <div class="destination-cards">
            <a class="card-destination" href="product.php">
                <span class="photos-destination"><img src="photos/destination1.svg" >Kina Mountain</span>
                <span class="photos-destination2"> <img src="photos/Location.svg" >Combodia</span>
            </a>
            <a class="card-destination" href="product.php">
                <span class="photos-destination"><img src="photos/destination2.svg" >Kina Mountain</span>
                <span class="photos-destination2"><img src="photos/Location.svg" >Combodia</span>
            </a>
            <a class="card-destination" href="product.php">
                <span class="photos-destination"><img src="photos/destination3.svg" >Kina Mountain </span>
                <span class="photos-destination2"><img src="photos/Location.svg" >Combodia</span>
            </a>
            <a class="card-destination" href="product.php">
                <span class="photos-destination"><img src="photos/destination4.svg" >Kina Mountain </span>
                <span class="photos-destination2"><img src="photos/Location.svg" >Combodia</span>
            </a>
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
    
    <script src="travelingWeb.js">

    </script>
</body>
</html>