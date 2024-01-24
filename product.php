
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="product.css">
</head>
<body>
        <?php include("header.php") ?>
        <section>
            <div class="product-section">
                <div class="product-images">
                    <div class="dest-pic1">
                        <img class="smallImage" src="photos/destination1.jpg" alt="destination pic">
                    </div>
                    <div class="dest-pic  dest-pic2">
                        <img class="smallImage" src="photos/destination2.jpg" alt="destination pic">
                    </div>
                    <div class="dest-pic dest-pic3">
                        <img class="smallImage" src="photos/destination3.jpg" alt="destination pic">
                    </div>
                </div>
            </div>
            <div class="popup">
                <div class="img">
                    <img  alt="destination img" class="large-image">
                    
                    <button class="arrow btn-right"><svg xmlns="http://www.w3.org/2000/svg" height="54" viewBox="0 -960 960 960" width="54">
                        <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/></svg>
                    </button>
                    <button class="arrow btn-left"><svg xmlns="http://www.w3.org/2000/svg" height="54" viewBox="0 -960 960 960" width="54">
                        <path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z"/></svg>
                    </button>
                </div>
                <button id="close-btn"><svg xmlns="http://www.w3.org/2000/svg" height="35  " viewBox="0 -960 960 960" width="35">
                    <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                </button>
            </div>
            <div class="main">
                <div class="product-description">
                    <h1>Lakeside Motel Waterfront</h1>
                    <div class="rating">
                        <img src="photos/star-s-fill 1.svg" alt="">
                        <img src="photos/star-s-fill 1.svg" alt="">
                        <img src="photos/star-s-fill 1.svg" alt="">
                        <img src="photos/star-s-fill 1.svg" alt="">
                        <img src="photos/star-s-fill 5.svg" alt="">
                        <span>4.5 (1200 Reviews)</span>
                    </div>
                    <span class="location-name"><img src="photos/location 1.png" alt="">Lorem ipsum road, Tantruim-2322, Melbourne, Australia</span>
                    <div class="overview-section">
                        <div class="overview-text">
                            <h2>Overview</h2>
                            <p>Featuring free WiFi throughout the property, Lakeside Motel Waterfront offers accommodations in Lakes Entrance, 
                                19 mi from Bairnsdale. 
                                Free private parking is available on site.
                            </p>
                            <p>
                                Each room at this motel is air conditioned and comes with a flat-screen TV. You will find a kettle, 
                                toaster and a microwave in the room. Each room is fitted with a private bathroom. 
                                Guests have access to barbecue facilities and a lovely large lawn area.
                                Metung is 6.8 mi from Lakeside Motel Waterfront, while Paynesville is 14 mi from the property.
                            </p>
                            <p>
                                Couples in particular like the location – they rated it 9.2 for a two-person trip.
                            </p>
                        </div>
                        
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
                                    <p><img src="photos/like-1 1.svg" alt=""> Top rated in area</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="location-section">
                    <img src="photos/map.svg" alt="">
            </div>
            </div>
        </section>
        <div class="footer-links">
            <p>© 2022 Treloo LLC - All right reserved.</p>
            <ul>
                <li><a href="">Review</a></li>
                <li><a href="">Tips</a></li>
                <li><a href="Accommodation.html">Accommodation</a></li>
                <li><a href="">Blog</a></li>
            </ul>
        </div>
        <script>
            const images = document.querySelectorAll(".smallImage")
            const largeImage = document.querySelector(".large-image")
            const popup = document.querySelector(".popup")
            const rightArrow = document.querySelector(".btn-right")
            const leftArrow = document.querySelector(".btn-left")
            const closeBtn = document.getElementById("close-btn")

            
            let index = 0;


            function updateImage(i){
                let path = `photos/destination${i+1}.jpg`
                largeImage.src = path
            
            }
            for(let i=0; i<images.length; i++){
                images[i].addEventListener("click",function(){
                    popup.style.display = "flex"
                    updateImage(i)
                })
            }
            closeBtn.addEventListener("click",function(){
                popup.style.display = "none"
            })

            rightArrow.addEventListener("click",function(){
                if(index<images.length-1){
                    index+=1
                    updateImage(index)
                }
            })
            leftArrow.addEventListener("click",function(){
                if(index>0){
                    index-=1
                    updateImage(index)
                }
            })


        </script>
</body>
</html>