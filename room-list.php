
<?php
     require 'includes/db.php';
     
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ROOM LIST</title>
    <link rel="stylesheet" href="includes/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  </head>
  <style>
.section-main{
  position: relative;
  width: 100%;
  min-height: 500px;
  background: url("background/bg2.jpg") no-repeat;
  background-size: cover;
  background-position: center;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px 100px;
}

</style>
    <body>
  
        <?php include_once('includes/nav.php'); ?>
        <section class="section-main">
      <div class="slogan">
        <h1>accommodations</h1><br>
      
        
      </div>
    </section>


    <?php
        if(isset($_POST["reserveData"])){
          $code = $_POST["code"];
          $roomid = $_POST["roomid"];
          $checkin = $_POST["checkin"];
          $checkout = $_POST["checkout"];
          $fullname = $_POST["fullname"];
          $contact = $_POST["contact"];
          $email = $_POST["email"];
          $status = $_POST["status"];

          $sql = "INSERT INTO reservation_list(code, room_id, check_in, check_out, fullname, contact, email, status) VALUES('$code', '$roomid', '$checkin', '$checkout', '$fullname', '$contact', '$email', '$status')";
          $result = mysqli_query($conn, $sql) or die("Query Error!");
          header("Location: reserve-room.php");
      }
    
    ?>
    <form class="form-search form-search-position accomodation" method="post">
    <div class="container">
    

      <div class="row">
        <div class="col-lg-4 gutters-19">
          <div class="form-group">
            <label for="">NAME</label>
            <input class="form-control" type="text" name="fullname" placeholder="NAME" required>
          </div>
        </div>
        <div class="col-lg-4 gutters-19">
          <div class="form-group">
          <label for="">EMAIL</label>
            <input class="form-control" type="email" name="email" placeholder="EMAIL" required>
          </div>
        </div>
        <div class="col-lg-4 gutters-19">
          <div class="form-group">
          <label for="">CONTACT NUMBER</label>
            <input class="form-control" type="text" name="contact" placeholder="CONTACT NUMBER" required>
          </div>
        </div> 
      </div>
      <div class="row">
      <div class="col-sm gutters-19">
          <div class="form-group">
            <label for="">CODE</label>
          <input class="form-control" type="text" name="code" placeholder="CODE" required>
          </div>
        </div>
        <div class="col-sm gutters-19">
          <div class="form-group">
            <div class="form-select-custom">
              <label for="">ROOM ID</label>
              <select name="roomid" id="roomid">
                <option value="" disabled selected>ROOM ID</option>
                <?php
                    $sql = "SELECT name FROM room_list";
                    $result = mysqli_query($conn, $sql) or die("Query Error!");
                    
                    while($selectroom = mysqli_fetch_assoc($result)){
                        echo '<option value="'.$selectroom['name'].'">'.$selectroom['name'].'</option>';
                    }
                ?>
              </select>
            </div>
          </div>
        </div>
      <div class="col-sm gutters-19">
          <div class="form-group">
            <label for="">Check In</label>
          <input class="form-control" type="date" name="checkin" placeholder="CHECK IN" required>
          </div>
        </div>
        <div class="col-sm gutters-19">
          <div class="form-group">
            <label for="">Check Out</label>
          <input class="form-control" type="date" name="checkout" placeholder="CHECK IN" required>
          </div>
        </div>
        <div class="col-sm-4 gutters-19">
          <div class="form-group">
            <label for="">STATUS</label>
          <input class="form-control" type="text" name="status"  placeholder="STATUS" required>
          </div>
        </div>
        <div class="col-lg-4 gutters-19">
          <div class="form-group">
            <button class="button button-form" type="submit" name="reserveData">BOOK</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  


      <div class="container">
      <div class="section-intro text-center pb-10px">
          <div class="section-intro__style">
          <h3><i class="bi bi-house"></i></h3>
          </div>
          <h2>Our Beautiful Rooms</h2>
        </div>

        <div class="row md-3">
        <?php
          $sql = "SELECT * FROM room_list";
          $result = mysqli_query($conn, $sql);
             while($rows = mysqli_fetch_assoc($result)){
                ?>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" style="margin-top: 10px;">
            <div class="card card-explore ">
              <div class="card-explore__img">
                <img class="card-img" src="images/<?php echo $rows["image"]; ?>" alt="">
              </div>
              <div class="card-body">
                <h3 class="card-explore__price"><?php echo $rows["price"]; ?><sub>/ Per Night</sub></h3>
                <h3 class="card-explore__title"> <b><?php echo $rows["name"]; ?></b></h3>
                <p><?php echo $rows["description"]; ?></p>
                <h6 class="card-explore__price">Status:<?php echo $rows["status"]; ?></h6>
                <a class="card-explore__link" href="#">Book Now <i class="ti-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <?php
            }
            ?>
      </div>
            
    </div>

            <?php include_once('includes/footer.php'); ?>
    </body>
</html>