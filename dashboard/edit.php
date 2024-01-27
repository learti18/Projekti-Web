<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Create Destination</title>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <?php include "sidebar.php"; ?>

        <!-- Main Content -->
        <main class="main-content">
            <h1>Update destination</h1>
            <form>
                <label for="city">City:</label>
                <input type="text" id="city" name="city" required>
        
                <label for="country">Country:</label>
                <input type="text" id="country" name="country" required>
        
                <label for="category">Category of Travel:</label>
                <select id="category" name="category" required>
                    <option value="team">Team</option>
                    <option value="couple">Couple</option>
                    <option value="family">Family</option>
                    <option value="popular">Popular</option>
                    <option value="adventure">Adventure</option>
                    <option value="beach">Beach</option>
                </select>
        
                <label for="startDate">Start Date:</label>
                <input type="date" id="startDate" name="startDate" required>
        
                <label for="endDate">End Date:</label>
                <input type="date" id="endDate" name="endDate" required>
        
                <label for="images">Images:</label>
                <input type="file" id="images" name="images" accept="image/*" multiple required>
        
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" required></textarea>
        
                <button type="submit">Add Destination</button>
            </form>
        </main>

    </div>
    <script src="desintaion.js"></script>
</body>
</html>
