
<?php
    require '../includes/db.php';
    
    $id = $_GET["ID"];
    $sql = "SELECT * FROM room_list WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $forminput = mysqli_fetch_assoc($result);

    if(isset($_POST["addRoom"])){
        $name = $_POST["name"];
        $type = $_POST["type"];
        $description = $_POST["description"];
        $status = $_POST["status"];
        $price = $_POST["price"];
        $image = $_FILES['image']['name'];
        $image_name = md5($image) . time() . strtolower(substr($image, strrpos($image, '.')));
        move_uploaded_file($_FILES['images']['tmp_name'], '../images/' . $image_name);
        $sql = "UPDATE room_list SET name = '$name', type = '$type', description = '$description', status = '$status', price = '$price', image = '$image_name' WHERE id = $id";
         $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: add-room.php?success=true");
            exit();
        } else {
            die("Error: Could not add room");
        }
    }
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                <div class="title">Edit Room</div>
                <div class="content">
                <form method="post" enctype="multipart/form-data">
                    <div class="user-details">
                    <div class="input-box">
                        <span class="details">Name</span>
                        <input type="text"  name="name" value="<?php echo $forminput["name"]; ?>">
                    </div>
                    <div class="input-box">
                        <span class="details">Room Type</span>
                        <input type="text" name="type"  value="<?php echo $forminput["type"]; ?>">
                    </div>
                    <div class="input-box">
                        <span class="details">Description</span>
                        <input type="text"  name="description" value="<?php echo $forminput["description"]; ?>">
                    </div>
                    <div class="input-box">
                        <span class="details">Price</span>
                        <input type="text" name="price"  value="<?php echo $forminput["price"]; ?>">
                    </div>
                    <div class="input-box">
                        <span class="details"> Room Image</span>
                        <input type="file" name="images" placeholder="<?php echo $forminput["image"]; ?>">
                    </div>
                    <div class="input-box">
                        <span class="details"> Status</span>
                        <select name="status" value="<?php echo $forminput["status"]; ?>" style="width:150px; height:40px;">
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


