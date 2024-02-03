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
        <form method="post" action ="register.php" onsubmit="return validate()" id="registerform">
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
                <button type="submit" id="submit-btn" name="submit">Register</button>
            </div>
            <div class="register">
                <label>Already have an account? <a href="login.php">Login</a></label>
            </div>
        </form>
    </div>
    <?php
    //  PHP code for user registration 
        if(isset($_POST["submit"])){
            
            // Get user inputs from the form
            $email = $_POST["email"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $confirmPass = $_POST["confirmpass"];
            $role = $_POST["role"];

            // Set default role if not provided
            if($role == null){
                $role = "user";
            }
             // Include necessary PHP classes
            include "./classes/DatabaseConnection.php";
            include "./classes/User.php";
            include "./classes/UserValidator.php";
            include "./classes/UserManager.php";

            // Create a User object with form inputs
            $user = new User($email,$username,$password,$confirmPass,$role);
            $userManager = new UserManager();

            // Signup the user using the UserManager
            $userManager->signupUser($user);
            header("location: login.php?error=none");
        }
    ?>
        <script src="register.js"></script>
</body>
</html>