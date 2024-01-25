<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="destinations.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Responsive Dashboard</title>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <?php include "sidebar.php"; ?>

        
        <main class="main-content">
            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="https://via.placeholder.com/300x200" alt="Product Image"></td>
                        <td>Product Name 1</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                        <td>Category A</td>
                        <td>$99.99</td>
                        <td class="action-buttons">
                            <button class="edit-btn">Edit</button>
                            <button class="delete-btn">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="https://via.placeholder.com/300x200" alt="Product Image"></td>
                        <td>Product Name 2</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                        <td>Category B</td>
                        <td>$149.99</td>
                        <td class="action-buttons">
                            <button class="edit-btn">Edit</button>
                            <button class="delete-btn">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="https://via.placeholder.com/300x200" alt="Product Image"></td>
                        <td>Product Name 1</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                        <td>Category A</td>
                        <td>$99.99</td>
                        <td class="action-buttons">
                            <button class="edit-btn">Edit</button>
                            <button class="delete-btn">Delete</button>
                        </td>
                    </tr>
        
                </tbody>
            </table>

             <a href="addDestination.html" class="add-product-btn">Add New Product</a>
        </main>
    </div>

</body>
</html>
