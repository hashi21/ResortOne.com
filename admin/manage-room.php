<?php
    require '../includes/db.php';

    $sql = "SELECT * FROM room_list";
    $result = mysqli_query($conn, $sql) or die("Query Error");

    if(isset($_GET["ID"])){
        $id = $_GET["ID"];
        $sql = "DELETE FROM room_list WHERE id = '$id'";
        $result = mysqli_query($conn, $sql) or die("Query Error!");
        header("Location: manage-room.php");
    }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MANAGE ROOM</title>
    <!-- Bootstrap CSS -->
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
                <div class="title">Manage Room</div>
                <div class="table-content">
                <table>
                 
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Price</th>
                        <th>Date Created</th>
                        <th colspan="2">Action</th>
                    </tr>
                    <?php
                while($rows = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $rows["name"]; ?></td>
                        <td><?php echo $rows["type"]; ?></td>
                        <td><?php echo $rows["description"]; ?></td>
                        <td><?php echo $rows["status"]; ?></td>
                        <td><?php echo $rows["price"]; ?></td>
                        <td><?php echo $rows["datecreated"]; ?></td>
                        <td><a class="update" href="edit-room.php?ID=<?php echo $rows["id"]; ?>">UPDATE</a>  <td><a class="delete" href="manage-room.php?ID=<?php echo $rows["id"]; ?>">DELETE</a></td>
                    </td>
                    </tr>
                    <?php
                        }
                    ?>
                   
                </table>
                </div>
            </div>
        </section>
        
        
    </body>
</html>




