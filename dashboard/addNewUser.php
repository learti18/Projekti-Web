<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addNewUser.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Create Destination</title>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <?php include "sidebar.php"; ?>

        <!-- Main Content -->
        <main class="main-content">
            <h1>Add user</h1>
            <form method="post">
                <label for="username">Username:</label>
                <input type="text" name="username" required>
        
                <label for="email">Email:</label>
                <input type="email" name="email" required>
        
                <label for="role">User role:</label>
                <select name="role" required>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
        
                <label for="password">Password:</label>
                <input type="password" name="password" required>
        
                <label for="confirmpass">Confrim password:</label>
                <input type="password" name="confirmpass" required>
        
                <button type="submit" name="submit">Add User</button>
            </form>
        </main>

    </div>
    <?php
    // Check if the form is submitted
        if(isset($_POST["submit"])){
            $email = $_POST["email"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $confirmPass = $_POST["confirmpass"];
            $role = $_POST["role"];

            // Set default role if not provided
            if($role == null){
                $role = "user";
            }
            include "../classes/DatabaseConnection.php";
            include "../classes/User.php";
            include "../classes/UserValidator.php";
            include "../classes/UserManager.php";
            
            // Create User object and UserManager instance
            $user = new User($email,$username,$password,$confirmPass,$role);
            $userManager = new UserManager();

             // Sign up the user and redirect with an error message
             $userManager->signupUser($user);
            header("location: users.php?error=none");
        }
    ?>
    <script src="desintaion.js"></script>
</body>
</html>
