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

        <?php include("header.php") ?>

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
                            <span><?php echo $description; ?></span>
                        </div>

                        <div class="description-2">
                            <span><?php echo $country; ?></span>
                        </div>
                        
                    </div>
                    <div class="booking">
                        <div><a class="book" href="product.html">BOOK</a></div>
                        <div class="price">
                            <span id="price2">$<?php echo $price; ?></span>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>



        


         <?php include "footer.php"; ?> 





















<!-- 
        <div class="hotels">
            <img class="img1" src="photos/australia.svg" alt="">


            <div class="all-description">
                <div class="off">
                    <div><span id="tittle"> Marineford Hotel</span></div>
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
                        <span>Live a little and celbrate with champagne</span>
                    </div>
                    <div>
                        <span class="description-2">
                            Reats include a glass of French champagne, parking and <br> a late checkout.
                            Gym included. Flexible cancellation applies.
                        </span>
                    </div>

                </div>
                <div class="booking">
                    <div><a class="book" href="product.html">BOOK</a></div>
                    <div class="price">
                        <span id="price1">$150</span>
                        <span id="price2">$130</span>
                    </div>
                </div>
            </div>

        </div>




        <div class="hotels">
            <img class="img1" src="photos/australia.svg" alt="">

            <div class="all-description">
                <div class="off">
                    <div><span id="tittle">Aghnieim Scepter Hotel</span></div>
                    <div> <span id="receive-off">Book now and receive 15% off</span></div> 
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
                        <span>Live a little and celbrate with champagne</span>
                    </div>
                    <div>
                        <span class="description-2">
                            Reats include a glass of French champagne, parking and <br> a late checkout.
                            Gym included. Flexible cancellation applies.
                        </span>
                    </div>

                </div>
                <div class="booking">
                    <div><a class="book" href="product.html">BOOK</a></div>
                    <div class="price">
                        <span id="price1">$150</span>
                        <span id="price2">$130</span>
                    </div>
                </div>
            </div>

        </div>




        <div class="hotels">

            <img class="img1" src="photos/australia.svg" alt="">


            <div class="all-description">
                <div class="off">
                    <div><span id="tittle">Shanghai Open House</span></div>
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
                        <span>Live a little and celbrate with champagne</span>
                    </div>
                    <div>
                        <span class="description-2">
                            Reats include a glass of French champagne, parking and <br> a late checkout.
                            Gym included. Flexible cancellation applies.
                        </span>
                    </div>

                </div>
                <div class="booking">
                    <a class="book" href="product.html">BOOK</a>
                    <div class="price">
                        <span id="price1">$150</span>
                        <span id="price2">$130</span>
                    </div>
                </div>
            </div>

        </div>




        <div class="hotels">
            <img class="img1" src="photos/australia.svg" alt="">

            <div class="all-description">
                <div class="off">
                    <div><span id="tittle">Ocean Waves Resort</span></div>
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
                        <span>Live a little and celbrate with champagne</span>
                    </div>
                    <div>
                        <span class="description-2">
                            Reats include a glass of French champagne, parking and <br> a late checkout.
                            Gym included. Flexible cancellation applies.
                        </span>
                    </div>

                </div>
                <div class="booking">
                    <div><a class="book" href="product.html">BOOK</a></div>
                    <div class="price">
                        <span id="price1">$150</span>
                        <span id="price2">$130</span>
                    </div>
                </div>
            </div>

        </div>




        <div class="hotels">
            <img class="img1" src="photos/australia.svg" alt="">


            <div class="all-description">
                <div class="off">
                    <div><span id="tittle">Maimi City frontier</span></div>
                    <div> <span></span></div>
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
                        <span>Live a little and celbrate with champagne</span>
                    </div>
                    <div>
                        <span class="description-2">
                            Reats include a glass of French champagne, parking and <br> a late checkout.
                            Gym included. Flexible cancellation applies.
                        </span>
                    </div>

                </div>
                <div class="booking">
                    <div><a class="book" href="product.html">BOOK</a></div>
                    <div class="price">
                        <span id="price1">$150</span>
                        <span id="price2">$130</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>


  

    <script>


function toggleMenu() {
    console.log('dcjk');
    const nav = document.querySelector('nav ul');
    nav.style.display = nav.style.display === 'flex' ? 'none' : 'flex';
  }

document.getElementById('menu-toggle').addEventListener('click', toggleMenu);

    

</script> -->



</body>

</html>