<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    
    <div class="container">
        <h1 class="logo"><a href="travelingWeb.php">Treloo</a></h1>
        <form method="post" action="login.php" onsubmit="validate()">
            <h1>Login</h1>
            <div class="input-box">
                <label>Username</label>
                <input class="input" type="text" required id="email" name="username">
                <p id="invalid-email" class="invalid-input"></p>
            </div>
            <div class="input-box">
                <label>Password</label>
                <input class="input" type="password" id="pass" required name="password">
                <p id="invalid-pass" class="invalid-input"></p>
            </div>
            <div class="forgot">
                <div>
                <input type="checkbox" class="check">
                <label>Keep me signed in</label>
                </div>
                <a href="#">Forgot password?</a>
            </div>
            <div class="btn">
                <button type="submit" id="submit-btn" name="login">Login</button>
            </div>
            <div class="register">
                <label>Don't have an account? <a href="register.php">Register</a></label>
            </div>
        </form>
    </div>
    <script src="login.js"></script>
    <?php
        include "./classes/DatabaseConnection.php";
        include "./classes/Login.classes.php";
        include "./classes/LoginController.php";

        if(isset($_POST["login"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            
            $login = new LoginContr($username,$password);
            $login->loginUser();

            session_start();
            header("location: travelingWeb.php?error=none");
        }
    ?>
</body>
</html>