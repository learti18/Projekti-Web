 <?php
    include_once './repository/repositoryDestinations.php';

    if (isset($_GET['id'])) {
        $destination_id = $_GET['id'];

        $repositoryDestinations = new respositoryDestinations();
        $destinationDetails = $repositoryDestinations->getDestinationsById($destination_id);
    }
    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Traveling Wbsite</title>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="product.css">
 </head>

 <body>
 <?php include("header.php") ?>

     <section>
         <div class="popup">
             <div class="img">
                 <img alt="destination img" class="large-image">

                 <button class="arrow btn-right"><svg xmlns="http://www.w3.org/2000/svg" height="54" viewBox="0 -960 960 960" width="54">
                         <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
                     </svg>
                 </button>
                 <button class="arrow btn-left"><svg xmlns="http://www.w3.org/2000/svg" height="54" viewBox="0 -960 960 960" width="54">
                         <path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z" />
                     </svg>
                 </button>
             </div>
             <button id="close-btn"><svg xmlns="http://www.w3.org/2000/svg" height="35  " viewBox="0 -960 960 960" width="35">
                     <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                 </svg>
             </button>
         </div>
         <div class="main">
             <div class="product-description">
                 <h1><?php echo $destinationDetails['city']; ?></h1>
                 <div class="rating">
                     <img src="photos/star-s-fill 1.svg" alt="">
                     <img src="photos/star-s-fill 1.svg" alt="">
                     <img src="photos/star-s-fill 1.svg" alt="">
                     <img src="photos/star-s-fill 1.svg" alt="">
                     <img src="photos/star-s-fill 5.svg" alt="">
                     <span>4.5 (1200 Reviews)</span>
                 </div>

                 <span class="large-image">
                     <img  src="./photos/<?php echo $destinationDetails['image_url']; ?>" />
                 </span>

                 <div class="overview-section">
                     <div class="overview-text">
                         <h2>Overview</h2>
                         <p><?php echo $destinationDetails['description']; ?></p>
                     </div>
                    <div class="a">
                     <div class="facilities">
                         <h2>Top facilities</h2>
                         <div class="packages">
                             <div class="packages-child">
                                 <p><img src="photos/home-wifi 1.svg" alt=""> Free wifi</p>
                                 <p><img src="photos/wind 1.svg" alt=""> Air conditioning</p>
                                 <p><img src="photos/car 1.svg" alt=""> Parking available</p>
                             </div>
                             <div class="packages-child">
                                 <p><img src="photos/bag-tick-2 1.svg" alt=""> Business Services</p>
                                 <p><img src="photos/lifebuoy 1.svg" alt=""> Swimming pool</p>
                                 <p><img src="photos/like-1 1.svg" alt=""> Top rated in the area</p>
                             </div>
                         </div>
                       
                
                        </div>
                        <div class="location-section">
                 <img src="photos/map.svg" alt="">
                        </div>
                    
                 </div>
                 </div>
                 

             </div>
             
         </div>
     </section>





     <?php include "footer.php";  ?>
     <script>
        
         const images = document.querySelectorAll(".smallImage"); // Ensure you have elements with this class
         const largeImage = document.querySelector(".large-image");
         const popup = document.querySelector(".popup");
         const rightArrow = document.querySelector(".btn-right");
         const leftArrow = document.querySelector(".btn-left");
         const closeBtn = document.getElementById("close-btn");

         let index = 0;

         function updateImage(i) {
             let path = `photos/destination${i + 1}.jpg`;
             largeImage.src = path;
         }

         // Ensure images exist before attaching event listeners
         for (let i = 0; i < images.length; i++) {
             images[i].addEventListener("click", function() {
                 popup.style.display = "flex";
                 updateImage(i);
             });
         }


         const menuBtn = document.querySelector(".menu-btn")
         const barsLogo = document.querySelector(".bx-menu")
         const xLogo = document.querySelector(".bx-x")
         const sideBar = document.querySelector(".sidebar")
         const nav = document.querySelector("nav")
         const logo = document.querySelector(".logo a")

         let isSidebarActive = false;

         menuBtn.addEventListener("click", function() {
             isSidebarActive = !isSidebarActive
             isSidebarActive ? sideBar.style = "display:flex" : sideBar.style = "display:none"
             isSidebarActive ? nav.style = "background: #fff" : nav.style = "background: linear-gradient(180deg,  #3E86F5 0%, #6ea4ef 100%)";
             isSidebarActive ? logo.style = "color:#3E86F5;" : logo.style = "color:#fff"
             isSidebarActive ? barsLogo.style = "display:none" : barsLogo.style = "display: flex"
             isSidebarActive ? xLogo.style = "display:flex" : xLogo.style = "display: none"
         })
     </script>
 </body>

 </html>