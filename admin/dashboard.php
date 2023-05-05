<?php
     require '../includes/db.php';
    
     
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DASHBOARD</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  
    
</head>
<style>
    .cards{
        margin:10px;
        display:flex;

    }

.profile-card {
    margin:20px;
  display: flex;
  flex-direction: column;
  align-items: center;
  max-width:50%;
  width: 100%;
  background: #fff;
  border-radius: 24px;
  padding: 25px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  position: relative;
  }
  @media only screen and (max-width: 300px){
    .cards{
        margin:10px;
        

    }

    .profile-card{
        
        
        align-items: center;
        max-width:50%;
        width: 100%;
        background: #fff;
        border-radius: 24px;
        padding: 25px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        position: relative;
    }

  }
  table{
       
       width:100%;
       border:solid 1px;
       border-collapse:collapse;
       border-spacing :0; 
       text-align :center;
    }
    th{
        position:relative;
        background:skyblue;
        text-transform:uppercase;
    }
    th,td{
        padding:2px 2px;
        border:1px solid;
    }
    .table-content{
        height:300px;
        padding:10px;
        overflow:hidden;
        overflow-y:scroll;
        overflow-x:scroll;
      
    }
    td a {
        margin:3px;
        text-align:center;
        text-decoration:none;
        color:black;

    }
</style>

<body>
        <?php include_once('nav.php'); ?>


        <section class="home">
        <div class="text">RESORT ONE</div>
            <div class="container">
                <div class="title">Dashboard</div>
                <div class="cards">
                    <div class="profile-card">
                        <h1>TOTAL ROOM</h1>
                            <?php
                            $totalRooms = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) as total FROM room_list"))['total'];
                            ?>
                        <h2><?php echo $totalRooms; ?></h2>
                    </div>

                    <div class="profile-card">
                        <h1>TOTAL RESERVATION</h1>
                            <?php
                            $totalReservations = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) as total FROM reservation_list"))['total'];
                            ?>
                        <h2><?php echo $totalReservations; ?></h2>
                    </div>`
                </div>
                <div class="list">
                    <div class="title">Reserved List</div>
                    <div class="table-content">
                    <table><?php $sql = "SELECT * FROM reservation_list";
                        $result = mysqli_query($conn, $sql) or die("Query Error");

                        if(isset($_GET["ID"])){
                            $id = $_GET["ID"];
                            $sql = "DELETE FROM reservation_list WHERE id = '$id'";
                            $result = mysqli_query($conn, $sql) or die("Query Error!");
                            header("Location: manage-reservation.php");
                        }
                        ?>
                 
                    <tr>
                        <th>Code</th>
                        <th>Room ID</th>
                        <th>Check IN</th>
                        <th>Check OUT</th>
                        <th>Full Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Date Created</th>
                    </tr>
                    <?php
                        while($rows = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $rows["code"]; ?></td>
                        <td><?php echo $rows["room_id"]; ?></td>
                        <td><?php echo $rows["check_in"]; ?></td>
                        <td><?php echo $rows["check_out"]; ?></td>
                        <td><?php echo $rows["fullname"]; ?></td>
                        <td><?php echo $rows["contact"]; ?></td>
                        <td><?php echo $rows["email"]; ?></td>
                        <td><?php echo $rows["status"]; ?></td>
                        <td><?php echo $rows["datecreated"]; ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>`
                </div>
                </div>
            </div>
        </section>

            
</body>
</html>