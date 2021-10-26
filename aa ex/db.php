<?php


// Connecting to the Database
$servername = "localhost:3308";
$username = "root";
$password = "";
$database = "yah";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

// Variables to be inserted into the table
$name = "Vikrant";
$destination = "Russia";

// Sql query to be executed
$sql = "INSERT INTO `yo`(`usernm`, `goodnm`) VALUES ('po','po')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo "The record has been inserted successfully successfully!<br>";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}







?>