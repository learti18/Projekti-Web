<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accommodation</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="contact-us.css">
</head>

<body>

    <?php include("header.php"); ?>

    <section>
        <div class="all-contact-form">
            <div class="contact">
                <div class="contact-tittle">
                    <h2>Let's talk with us</h2>
                    <p>Questions, comments, or suggestions? Simply fill in the form and we’ll be in touch shortly.</p>
                </div>

                <div class="contact-info">
                    <h3 id="contact-info-text">Contact Info:</h3>
                    <div class="info">
                        <p>Location: 1055 Arthur ave Elk Groot, 67. New Palmas South Carolina.</p>
                        <p>Email: treloo@gmail.com</p>
                        <p>Phone Number: +383 40565656</p>
                    </div>
                </div>
            </div>

            <form method="post">
                <div>
                    <label><p id="label">Full Name</p></label>
                    <input class="box" type="text" placeholder="Input your full name here" name="fullnanme">
                </div>

                <div>
                    <label><p id="label">Email</p></label>
                    <input class="box" type="email" placeholder="Input your email address here" name="email">
                </div>

                <div>
                    <label><p id="label">Message</p></label>
                    <textarea id="box-message" cols="30" rows="10" placeholder="Write your messages here" name="message"></textarea>
                </div>

                <div>
                    <input class="submit-button" type="submit" value="Submit" name="submit">
                </div>
            </form>
        </div>
    </section>

    <?php include "footer.php"; ?>
    <?php 
        if(isset($_POST["submit"])){

            include "./classes/DatabaseConnection.php";
            include "./classes/contactus.class.php";

            $fullname = $_POST["fullnanme"];
            $email = $_POST["email"];
            $message = $_POST["message"];

            $contact = new ContactUs();
            $contact->sendMessage($fullname,$email,$message);
        }
    
    
    ?>
</body>

</html>