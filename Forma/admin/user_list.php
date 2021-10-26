<?php

// -------------------------------------------session starts part 2
session_start();
if(isset($_SESSION['username'])){
  // echo "right".$_SESSION['username'];
}
else{
  header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user_list</title>

<style>
    
        body{
            background-color: rgb(229, 242, 250)!important;
        }

        h2{
            margin: 5% 5% 5% 5%;
            padding: 30px 30px 30px 30px;
            text-align: center;
            border-bottom: 1px solid lightgray;
        }

        .card{
            margin: 0 auto; /* Added */
            float: none; /* Added */
            margin-bottom: 5%; /* Added */
            border-top:  10px solid rgb(198, 253, 115)!important;
         margin-top: 5%;
         width: 90%;
         min-height: 120vh;
         box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }

       tr{
         text-align: center;
       }
        
</style>

</head>
<body>

<?php include 'admin_sidebar.php'; ?>
  <?php include 'linkss.html'; ?>
  <?php include 'dbconn.php'; ?>
  
  <!--------------------------- navbar start --------------------->
  <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #C7F3E3;">
      <span style="font-size:30px;cursor:pointer; float:left;" onclick="openNav()">&#9776; </span>  
    <a class=" navbar-brand " href="#" style="color:rgb(75, 148, 158); margin-left: auto;">FORMA</a>
    </nav>
  <!--------------------------- navbar ends --------------------->
    
<div class="conatiner">
    <h2>User list</h2>
    <div class="card">
    <table class="table table-hover table-striped    ">
     
    <tr class="bg-" style="background-color: rgb(238, 131, 234); " >
           
          <th>User id</th>
          <th> Username</th>
          <th>Email ID</th>
          <th>Usertype</th>            
         
        </tr>
       
        <?php
         $select = "SELECT * FROM `user` ";

         $result = mysqli_query($conn,$select);

         $num = mysqli_num_rows($result);

         while($row = mysqli_fetch_array($result)){

        ?>
        
        <tr>
            <td><?php echo $row['user_id']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['usertype']; ?></td>

        </tr>
        
        <?php
         }
         ?>


    </table>
    </div>
</div>


</body>
</html>
