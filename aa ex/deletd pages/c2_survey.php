<?php


 

 // -------------------------------------------session starts part 2
 session_start();
 if(isset($_SESSION['survey_name'])){
   echo "right".$_SESSION['survey_name'];
   $sname = $_SESSION['survey_name'];
//    echo $sname;
 }
 else{
   header('location: ../index.php');
 }





$servername = "localhost:3308";
$username = "root";
$password = "";
$database = "formaa";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful<br>";
}

if (isset($_POST['submit'])) {
    $qtxt = $_POST['Q-text'];
      $Next= "INSERT INTO `question`(`question`) VALUES ('$qtxt') ";

      $Next1= mysqli_query($conn , $Next);

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">



    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');

        body {
            background-color: rgb(229, 242, 250) !important;
            font-style: 'Hind Siliguri', sans-serif;
            /* font-family: 'Hind Siliguri', sans-serif;
           font-family: 'Nunito Sans', sans-serif; */
        }

        .card {
            margin: 0 auto;
            /* Added */
            float: none;
            /* Added */
            margin-bottom: 5%;
            /* Added */
            border-top: 10px solid rgb(198, 253, 115) !important;
            margin-top: 5%;
            width: 60%;
            min-height: 120vh;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        h3 {
            padding: 30px 30px 30px 30px;
            ;
            margin: 20px 20px 20px 20px;
            border-bottom: 1px solid lightgray;
        }



        /* Add some padding inside the card container */
        .container {
            padding: 2px 16px;
        }

        .txtbx input {

            background: none;
            border: 0.5px solid lightgray;
            border-radius: 4px;
            /* border-bottom: 1px solid lightgray; */
            margin: 3px 3px 3px 13px;
            margin-top: 10px;
            width: 70%;
            height: 40px;

        }

        .txtbx {
            margin-left: 70px;
        }



        ::placeholder {
            color: black;
            opacity: 0.3;
            /* Firefox */
        }

        .head {
            margin: 30px 0px 20px 20px;
            /* margin-left: 30px; */
            font-size: 30px;
            color: rgb(132, 209, 17);
        }

        label {
            display: inline-block;
            text-align: right;
            width: 140px;
        }

        .cancelbtn {
            background-color: plum;
            padding: 1px 1px;
            border-radius: 4px;
            margin-left: 70%;
            border-radius: 6px;
            padding: 4px;
            border-width: 2px;
            font-size: 17px;

        }

        .cancelbtn:hover {
            background-color: rgba(164, 110, 207, 0.993);
        }

        .inner-form label {
            margin-left: 50px;
        }

        /*
.inner-form input{
    width: 70%;
    border: 0.5px solid lightgray;
     border-radius: 4px;
} */

        #fooBar {
            padding-left: 30%;

        }

        .options {
            margin: 10px 10px 10px 10px;
            padding-left: 30%;
            font-size: 20px;
        }

        .add-Q-btn {
            margin-left: 35px;
            border-radius: 6px;
            border-color: lightgray;
            background-color: paleturquoise;
            padding: 5px;
        }

        .Save-btn {
            margin-top: 5%;
            margin-left: 70%;
            margin-bottom: 10%;
            border-radius: 6px;
            border-color: lightgray;
            background-color: lightgreen;
            padding: 5px;
        }

        .cona {
            margin-left: 5%;
        }

        .add-btn {
            width: 40px;
            background-color: plum;
            border-radius: 6px;
            border-color: rgb(195, 199, 204);
            border-width: 2px;
            padding: 2px;
        }

        .add-btn:hover {
            background-color: rgba(164, 110, 207, 0.693);
        }


        #quess {
            font-size: 30px;
            margin: 20px;
            color: rgb(34, 177, 182);

        }

        .opt {
            width: 25%;
            text-align: center;
            height: 25px;
            border-color: lightslategrey;
            border-radius: 4px;
        }


        table,
        th,
        td {
            border: 1px solid black;
        }

        .inputbox {
            margin: 20px;
        }


        /*  td style="height:10px; width:10px;" */
    </style>
    <title>c2_survey</title>


</head>

<body>



    <!--------------------------- navbar start --------------------->
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #C7F3E3;">
        <span style="font-size:30px;cursor:pointer; float:left;" onclick="openNav()">&#9776; </span>
        <a class=" navbar-brand " href="#" style="color:rgb(75, 148, 158); margin-left: auto;">FORMA</a>
    </nav>
    <!--------------------------- navbar ends --------------------->

    <h3>Create survey</h3>

    <div class="card">

        <div class="cona">
            <div class="container">
                <form action="#" method="post">
                    <div class="head"> Survey Information</div>
                    <div class="txtbx">
                        <label>Enter Survey title:</label>
                        [data from last page]
                    </div>

                    <div class="txtbx">
                        <label>Description:</label>
                        [data from last page]
                    </div>

                    <label for="ques" id="quess">Questions </label>

                    <!-- the btn was like this  ===> <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Delete Question</button> -->


                    
                    <div class="inner-form">
                        <div class="container">
                            <form action="">
                                <label for="ques">Question Text:</label>
                                <input type="text" class="txtx " name="Q-text" id="ques" placeholder="Enter Question"><br>
                            </form>

                        </div>

                    </div>

                    <input class="Save-btn" type="button" value="Save form">
                </form>
            </div>
        </div>
    </div>

</body>

</html>