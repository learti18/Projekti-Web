<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <h1 class="logo"><a href="travelingWeb.php">Treloo</a></h1>
        <form method="post" action ="register.php">
            <h1>Register</h1>
            <div class="input-box">
                <label>Email address</label>
                <input class="input" type="text" id="email" name="email" required>
                <p id="invalid-email" class="invalid-input"></p>
            </div>
            <div class="input-box">
                <label>Username</label>
                <input class="input" type="text" id="username" name="username" required>
                <p id="invalid-username" class="invalid-input"></p>
            </div>
            <div class="input-box">
                <label>Password</label>
                <input class="input" type="password" id="pass" name="password" required>
                <p id="invalid-pass" class="invalid-input"></p>
            </div>
            <div class="input-box">
                <label>Confirm password</label>
                <input class="input" type="password" id="confirmpass" name="confirmpass" required>
                <p id="invalid-confirm" class="invalid-input"></p>
            </div>
            <div class="btn">
                <button type="submit" id="submit-btn" name="register">Register</button>
            </div>
            <div class="register">
                <label>Already have an account? <a href="login.php">Login</a></label>
            </div>
        </form>
    </div>
    <!-- <script src="register.js"></script> -->
    <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        if(isset($_POST["register"])){
            $email = $_POST["email"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $confirmPass = $_POST["confirmpass"];
            
            include "./classes/DatabaseConnection.php";
            include "./classes/SignUp.php";
            include "./classes/SignupController.php";
        
            $signup = new SignupController($email,$username,$password,$confirmPass);
            $signup->signupUser();

            header("location: login.php?error=none");
        }
    ?>
</body>
</html>