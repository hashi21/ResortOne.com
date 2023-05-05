<?php
    require 'db.php';
    if(isset($_POST["loginData"])){
      $username = $_POST["username"];
      $password = $_POST["password"];

      $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
      $result = mysqli_query($conn, $sql) or die("Query Error!");
      $rows = mysqli_num_rows($result);
      $ErrorMessage = "";

      if($rows > 1){ 
          //Error Handling DB  
      }
      else if($rows == 0) {
          $ErrorMessage = "Invalid Username or Password";
      }
      else{
          header("Location: admin/dashboard.php");
      }
  }
?>

      
      
      <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  </head>
  <body>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">LogIn</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form method="POST">
      <?php
                if(isset($_POST["loginData"])){
                    if(!empty($ErrorMessage)){ echo "".$ErrorMessage; }
                }
            ?>
        <div class="modal-body">
          
          <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="loginData" class="btn btn-secondary">Log In</button>
          <button type="button" class="btn btn" data-bs-dismiss="modal">Close</button>
          
        </div>  
      </form>
    </div>
  </div>
</div>

  <header>
      <a class="brand">RESORT ONE</a>
      <div class="menu">
        <div class="btn">
          <i class="fas fa-times close-btn"></i>
        </div>
        <a  href="index.php">HOME</a>
        <a href="room-list.php">ROOM LIST</a>
        <a href="reserve-room.php">RESERVE ROOM</a>
        <a href="about.php">ABOUT</a>
        <a href="contact.php">CONTACT US</a>
        <a href=""data-bs-toggle="modal" data-bs-target="#exampleModal">LOGIN</a>
        

      </div>
      <div class="btn">
        <i class="fas fa-bars menu-btn"></i>
      </div>
    </header>  
    

    <script>
      //Javascript for Navigation effect on scroll
      window.addEventListener("scroll", function(){
        var header = document.querySelector("header");
        header.classList.toggle('sticky', window.scrollY > 0);
      });

      //Javascript for responsive navigation sidebar Nav
      var menu = document.querySelector('.menu');
      var menuBtn = document.querySelector('.menu-btn');
      var closeBtn = document.querySelector('.close-btn');

      menuBtn.addEventListener("click", () => {
        menu.classList.add('active');
      });

      closeBtn.addEventListener("click", () => {
        menu.classList.remove('active');
      });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>



