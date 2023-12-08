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
    
    <h1 class="logo"><a href="travelingWeb.html">Treloo</a></h1>
    <div class="container">
        <form action="">
            <h1>Sign in</h1>
            <div class="input-box">
                <label>Email address</label>
                <input class="input" type="text" required id="email">
                <p id="invalid-email" class="invalid-input"></p>
            </div>
            <div class="input-box">
                <label>Password</label>
                <input class="input" type="password" required id="pass">
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
                <button type="submit" id="submit-btn">Continue with email</button>
            </div>
            <div class="options"><span>or use one of these options</span></div>
            <div class="btns">
            <div class="btn google">
                <button type="button"><img src="photos/googleLogo.svg" alt=""> Continue with Google</button>
            </div>
            <div class="btn facebook">
                <button type="button"><img src="photos/facebook 1.svg" alt=""> Continue with Facebook</button>
            </div>
            </div>
            <div class="register">
                <label>Don't have an account? <a href="register.html">Register</a></label>
            </div>
        </form>
    </div>
    <script src="login.js">

    </script>
</body>
</html>