<?php
require '../includes/db.php';

if (isset($_POST['addRoom'])) {
    // Get data from the form
    $name = $_POST['name'];
    $type = $_POST['type'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $price = $_POST['price'];
    $image = $_FILES['images']['name'];

    // Check if the file format is valid
    $allowed_extensions = array('.jpg', '.jpeg', '.png', '.gif');
    $extension = strtolower(substr($image, strrpos($image, '.')));
    if (!in_array($extension, $allowed_extensions)) {
        echo '<script>alert("Logo has invalid format. Only jpg / jpeg / png / gif format allowed");</script>';
    } else {
        // Generate a unique filename and move the file to the images folder
        $image_name = md5($image) . time() . $extension;
        $target_file = '../images/' . $image_name;
        if (move_uploaded_file($_FILES['images']['tmp_name'], $target_file)) {
            // Insert data into the database
            $sql = "INSERT INTO room_list(name, type, description, status, price, image) VALUES ('$name', '$type', '$description', '$status', '$price', '$image_name')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo '<script>alert("Room added successfully");</script>';
            } else {
                echo '<script>alert("Error: Could not add room");</script>';
            }
        } else {
            echo '<script>alert("Error: Could not upload image");</script>';
        }
    }
}
?>

<html lang="en">
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADD ROOM</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  
    
    <!--<title>Dashboard Sidebar Menu</title>--> 
</head>
<style>


</style>
<body>
    <?php include_once('nav.php'); ?>
    <section class="home">
        <div class="text">RESORT ONE</div>
            <div class="container">
                <div class="title">Add Room</div>
                <div class="content">
                <form method="post" enctype="multipart/form-data">
                    <div class="user-details">
                    <div class="input-box">
                        <span class="details">Name</span>
                        <input type="text"  name="name" placeholder="Enter name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Room Type</span>
                        <input type="text" name="type" placeholder="Room Type" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Description</span>
                        <textarea  name="description" cols="78" rows="2"></textarea>
                    </div>
                    <div class="input-box">
                        <span class="details">Price</span>
                        <input type="text" name="price" placeholder="Price" required>
                    </div>
                    <div class="input-box">
                        <span class="details"> Room Image</span>
                        <input type="file" name="images" required='true'>
                    </div>
                    <div class="input-box">
                        <span class="details"> Status</span>
                        <select name="status" style="width:150px; height:40px;">
                            <option value="1">1</option>
                            <option value="0">0</option>
                        </select>
                        
                    </div>
                    </div>
                   
                    <div class="button">
                    <input type="submit" value="Add Room" name="addRoom">
                    </div>
                </form>
                </div>
            </div>
  </section>
    
   
</body>
</html>








            <label>Name:</label>
            <input type="text" name="name"><br>
            <label>Type:</label>
            <input type="text" name="type"><br>
            <label>Description:</label>
            <input type="text" name="description"><br>
            <label>Status:</label>
            <select name="status">
                <option value="1">1</option>
                <option value="0">0</option>
            </select><br>
            <label>Price:</label>
            <input type="text" name="price"><br>
            <label>Image:</label>
            <input type="file" name="images" required='true'><br>
            <input type="submit" value="Add Room" name="addRoom">
         </form>-->