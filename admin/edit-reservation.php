<?php 
    require '../includes/db.php';

    $id = $_GET["ID"];
    $sql = "SELECT * FROM reservation_list WHERE id = '$id'";
    $result = mysqli_query($conn, $sql) or die("Query Error");
    $forminput = mysqli_fetch_assoc($result);

    if(isset($_POST["reserveData"])){
        $code = $_POST["code"];
        $roomid = $_POST["roomid"];
        $checkin = $_POST["checkin"];
        $checkout = $_POST["checkout"];
        $fullname = $_POST["fullname"];
        $contact = $_POST["contact"];
        $email = $_POST["email"];
        $status = $_POST["status"];

        $sql = "UPDATE reservation_list SET code = '$code', room_id = '$roomid', check_in = '$checkin', check_out = '$checkout', fullname = '$fullname', contact = '$contact', email = '$email', status = '$status' WHERE id = '$id'";
        $result = mysqli_query($conn, $sql) or die("Query Error!");
        header("Location: ./manage-reservation.php");
    }
?>
<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EDIT RESERVATION</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  
    
   
</head>

    <body>
        <?php include_once('nav.php'); ?>
       
        <section class="home">
        <div class="text">RESORT ONE</div>
            <div class="container">
                <div class="title">Edit Reservation</div>
                <div class="content">
                <form method="post" enctype="multipart/form-data">
                    <div class="user-details">
                    <div class="input-box">
                        <span class="details">Room Id</span>
                        <select name="roomid"  style="width:150px; height:40px;">
                         echo '<option value="<?php echo $forminput["room_id"]; ?>"><?php echo $forminput["room_id"]; ?></option>";
                            <?php
                                $sql = "SELECT name FROM room_list";
                                $result = mysqli_query($conn, $sql) or die("Query Error!");
                                
                                while($selectroom = mysqli_fetch_assoc($result)){
                                    echo '<option value="'.$selectroom['name'].'">'.$selectroom['name'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
        
                    <div class="input-box">
                        <span class="details">Code</span>
                        <input type="text" name="code" value="<?php echo $forminput["code"]; ?>">
                    </div>
                    
                    <div class="input-box">
                        <span class="details">Check In</span>
                        <input type="date" name="checkin" value="<?php echo $forminput["check_in"]; ?>">
                    </div>
                    <div class="input-box">
                        <span class="details">Check Out</span>
                        <input type="date" name="checkout" value="<?php echo $forminput["check_out"]; ?>">
                    </div>
                    <div class="input-box">
                        <span class="details"> Full Name</span>
                        <input type="text" name="fullname" value="<?php echo $forminput["fullname"]; ?>">
                    </div>
                    <div class="input-box">
                        <span class="details">Contact</span>
                        <input type="text" name="contact" value="<?php echo $forminput["contact"]; ?>">
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" name="email" value="<?php echo $forminput["email"]; ?>">
                    </div>
                    <div class="input-box">
                        <span class="details">Status</span>
                        <input type="text" name="status" value="<?php echo $forminput["status"]; ?>">
                    </div>
                    </div>
                   
                    <div class="button">
                    <input type="submit" value="RESERVE" name="reserveData">
                    </div>
                </form>
                </div>
            </div>
  </section>



    </body>
</html>



