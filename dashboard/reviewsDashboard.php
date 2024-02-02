<?php 
    include "../classes/DatabaseConnection.php";
    include "../classes/reviews.class.php";

    $contact = new ContactUs();
    $contacts = $contact->getMessages();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reviewsDashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Create Destination</title>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <?php include "sidebar.php"; ?>


        <!-- Main Content -->
        <main class="main-content">
        <h2>User Reviews</h2>

        <div class="contact-us-card-container">
            <!-- Message Cards  -->
            <?php foreach($contacts as $contact){ ?>
                <div class="contact-us-card">
                    <a class="remove-button" name="delete" href="deleteReview.php?id=<?php echo $contact["id"] ?>">Delete</a>
                    <div class="message-details">
                        <div class="full-name"><?php echo $contact["fullname"]; ?></div>
                        <div class="email"><?php echo $contact["email"]; ?></div>
                        <div class="message"><?php echo $contact["message"]; ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</body>
</html>
