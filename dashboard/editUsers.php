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
            <h1>Update user</h1>
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
        
                <button type="submit" name="submit">Update User</button>
            </form>
        </main>

    </div>
    <?php 
        if(isset($_POST["submit"])){
            include "../classes/DatabaseConnection.php";
            include "../classes/UserValidator.php";
            include "../classes/UserManager.php";

            $id = $_GET["id"];
            $email = $_POST["email"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $role = $_POST["role"];

            $userManager = new UserManager();
            $userManager->updateUser($id,$email,$username,$password,$role);

            header("location: users.php?=errorsnone");
        }
    ?>
    <script src="desintaion.js"></script>
</body>
</html>
