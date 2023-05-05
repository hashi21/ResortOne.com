<?php
    require '../includes/db.php';

    $sql = "SELECT * FROM reservation_list";
    $result = mysqli_query($conn, $sql) or die("Query Error");

    if(isset($_GET["ID"])){
        $id = $_GET["ID"];
        $sql = "DELETE FROM reservation_list WHERE id = '$id'";
        $result = mysqli_query($conn, $sql) or die("Query Error!");
        header("Location: manage-reservation.php");
    }

?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MANAGE RESERVATION</title>
    
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  
    
    <!--<title>Dashboard Sidebar Menu</title>--> 
</head>
<style>
    table{
       
       width:100%;
       border:solid 1px;
       border-collapse:collapse;
       border-spacing :0; 
       text-align :center;
    }
    th{
        background:skyblue;
        text-transform:uppercase;
    }
    th,td{
        padding:2px 2px;
        border:1px solid;
    }
    .table-content{
        height:500px;
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
   
    .update{
        padding:2px;
        background-color:skyblue;
        border-radius:5px;
        }
    .update:hover{
        background-color:#5C5CFF;
    }
    .delete{
        padding:2px;
        background-color:red;
        border-radius:5px;
    }
    .delete:hover{
        background-color:#D10000;
    }
   
</style>
    <body>
        <?php include_once('nav.php'); ?>


        <section class="home">
        <div class="text">RESORT ONE</div>
            <div class="container">
                <div class="title">Manage Reservation</div>
                <div class="table-content">
                <table>
                 
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
                <th colspan="2">Action</th>
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
                <td><a class="update" href="edit-reservation.php?ID=<?php echo $rows["id"]; ?>">UPDATE</a></td>
                <td><a class="delete" href="manage-reservation.php?ID=<?php echo $rows["id"]; ?>">DELETE</a></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>