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

    <span class="background-color">
        <?php include("header.php") ?>
    </span>


    <!-- <nav>
        
    

        <h1><a href="travelingWeb.html" class="logo">Treloo</a></h1>
        <ul>
            <li><a href="travelingWeb.html">HOME</a></li>
            <li><a href="Accommodation.html">DESTINATIONS</a></li>
            <li><a href="login.html">SIGN IN</a></li>
            <li><a href="register.html">REGISTER</a></li>
        </ul>

       
        <label id="menu-toggle" for="menu-toggle" class="menu-icon">&#9776;</label>
         

    </nav>  -->

    <!-- <div class="Accommodation">
    <div class="B"> 
        <div >
            <div class="Filter">
            <p>Filter by</p>
        </div>
        <div class="budget-section">
            <div class="Your-budget">
                <p>Your budget per day</p>
            </div>
            <div class="radio-section">     
                 <div class="radio">
                <div> <input class="check-box" type="radio" name="p">
                $ 0 - $ 200</div>
                <div>200</div>
                 </div>
                 <div class="radio">
              <div>  <input class="check-box" type="radio" name="p">
                $ 0 - $ 200</div>
                <div>200</div>

                 </div>
                 <div class="radio">
               <div> <input class="check-box" type="radio" name="p">
                $ 0 - $ 200</div>
                <div>200</div>

            </div>
            <div class="radio">
             <div><input class="check-box" type="radio" name="p">
                $ 0 - $ 200 </div>
                <div>200</div>

            </div>
            <div class="radio">
             <div><input class="check-box" type="radio" name="p">
                $ 0 - $ 200</div>
                <div>200</div>
            </div>
        </div>
        </div>
        </div>
    
        
        <div class="ratings" >
            <div id="rating">Rating</div>
            <div class="section">
            <div><span>Show only ratings more than</span></div>
            <div class="raiting-section" >
               <div id="A"> <button>1 <img src="photos/Star.svg" alt=""></button> </div>
               <div id="A"> <button>1 <img src="photos/Star.svg" alt=""></button> </div>
               <div id="A"> <button>1 <img src="photos/Star.svg" alt=""></button> </div>
               <div id="A"> <button>1 <img src="photos/Star.svg" alt=""></button> </div>
               <div id="A"> <button>1 <img src="photos/Star.svg" alt=""></button> </div> 
            </div>
            </div> 
        </div>
    

    </div> -->




    <div class="all">

        <div class="hotels">
            <!-- <img class="img1" src="photos/australia.svg" alt="">

            <div class="all-description" >
                     <div class="off">
                        <div><span id="tittle">Lakeside Motel Warefront</span></div>
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

                        </div> -->

            <!-- </div> 
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
                                <div>
                                    <span id="price1">$150</span>
                                </div>
                                <div>
                                    <span id="price2">$130</span>
                                </div>
                            </div>
                     </div>
            </div> -->
            <?php
                    include_once './repository/repositoryDestinations.php';

                        $repositoryDestinations = new respositoryDestinations();

                        $destinations = $repositoryDestinations->getAllDestinations();

                        foreach ($destinations as $destination) {
                            echo '<div class="hotels">';
                            // Fetch image URL from the database
                            $image_destination = $repositoryDestinations->getImage($destination['destination_id']);
                            $imageUrl = !empty($image_destination) ? './photos/' . $image_destination['image_url'] : './photos.australia4.jepeg';
                    

                            echo '<img class="img1" src="' . $imageUrl . '" alt="' . $destination['city'] . '">';
                            echo '<div class="all-description">';
                            echo '<div class="off">';
                            echo '<div><span id="tittle">' . $destination['city'] . '</span></div>';
                            echo '</div>';
                            echo '<div class="Review-section">';
                            // Add your star rating and review count here
                            echo '</div>';
                            echo '<div class="description">';
                            // Add your description here
                            echo '</div>';
                            echo '<div class="booking">';
                            echo '<a class="book" href="product.html">BOOK</a>';
                            echo '<div class="price">';
                            echo '<span id="price1">$' . $destination['price'] . '</span>';
                            // Add other price details if needed
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        






                            // echo "
                            //     <tr>
                            //         <td>{$destination['destination_id']}</td>
                            //         <td>";
                            //             $image_destination = $repositoryDestinations->getImage($destination['destination_id']);
                            //             if (!empty($image_destination)) {
                            //             echo "<img src='./photos/{$image_destination['image_url']}' alt='{$destination['city']}' style='width: 100px; height: 100px; margin-right: 10px;' />";
                            //     }

                            // echo "</td>

                            //         <td>{$destination['city']}</td>
                            //         <td>{$destination['country']}</td>
                            //         <td>{$destination['category']}</td>
                            //         <td>{$destination['start_date']}</td>
                            //         <td>{$destination['end_date']}</td>
                            //         <td>{$destination['description']}</td>
                            //         <td>{$destination['price']}</td>
                                    
                                   


                            //      </tr>";
                        }

                ?>
            <!-- <div class="booking">
                <div><a class="book" href="product.html">BOOK</a></div>
                <div class="price">
                    <div>
                         <span id="price1">$150</span> 
                    </div>
                    <div>
                        <span id="price2">$130</span> 
                    </div>
                </div>
            </div> -->




        </div>


    




             













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
                    <!-- <div> <span id="receive-off">Book now and receive 15% off</span></div> -->
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


    <?php include "footer.php"; ?>

    <!-- <script>


function toggleMenu() {
    console.log('dcjk');
    const nav = document.querySelector('nav ul');
    nav.style.display = nav.style.display === 'flex' ? 'none' : 'flex';
  }

document.getElementById('menu-toggle').addEventListener('click', toggleMenu);

    

</script> -->



</body>

</html>