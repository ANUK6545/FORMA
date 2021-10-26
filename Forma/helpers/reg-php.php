<?php

 
$server= 'localhost:3308';
$username = 'root';
$password = '';
$db=    'hue';

$conn = mysqli_connect($server,$username,$password,$db);




// mysqli_select_db($conn,'hue');  
$username = $_POST['username'];
 $email = $_POST['email'];
 $cpassword = $_POST['cpassword'];
$password = $_POST['password'];
$usertype = $_POST['usertype'];

$query =   " INSERT INTO uhue(`username`, `password`, `cpassword`, `usertype` , 'email' ) VALUES ($username, $password, $cpassword, $usertype , $email)";
mysqli_query($conn,$query);


?>
