<?php 

include "../classes/DatabaseConnection.php";
include "../classes/UserValidator.php";
include_once "../classes/UserManager.php";

$userManager = new UserManager();
$users = $userManager->getAllUsers();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="users.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Create Destination</title>
</head>
<body>
        <!-- Sidebar -->
        <?php include "sidebar.php"; ?>

        <!-- Main Content -->
        <main class="main-content">
            <h2>User Admin Panel</h2>

            <table class="user-table">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user){ ?>
                        <tr>
                            <td><?php echo $user['id'];?></td>
                            <td><?php echo $user['username'];?></td>
                            <td><?php echo $user['email'];?></td>
                            <td class="hidden-password"><?php echo $user['password'];?></td>
                            <td><?php echo $user['role'];?></td>
                            <td class="actions">
                                <a class="edit-btn" href="editUsers.php?id=<?php echo $user["id"] ?>" >Edit</a>
                                <a class="delete-btn" names="delete" href="delete.php?id=<?php echo $user["id"] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>    
                </tbody>
            </table>
            
            <a class="adduser-btn" href="addNewUser.php">Add new user</a>
        </main>

    <script src="desintaion.js"></script>
        
    <?php 
        if(isset($_POST["delete"])){
            
            include "../classes/DatabaseConnection.php";
            include "../classes/UserValidator.php";
            include "../classes/UserManager.php";
            
            $id = $_GET["id"];

            $userManager = new UserManager();
            $userManager->deleteUser($id);
            header("location: users.php?userdeleted");
        }
    ?>
</body>
</html>
