
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: rgb(229, 242, 250)!important;
        }
        .card {
            margin: 0 auto; /* Added */
            float: none; /* Added */
            margin-bottom: 5%; /* Added */
            border-top:  10px solid rgb(198, 253, 115)!important;
         margin-top: 5%;
         width: 60%;
         min-height: 60vh;
         box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    }

     h3 {
        padding: 30px 30px 30px 30px;;
         margin: 20px 20px 20px 20px; 
         border-bottom: 1px solid lightgray;
        } 

        h4 {
            color: lightslategray;
        padding: 30px 30px 20px 30px;
         margin: 40px 40px 10px 40px; 
         margin-bottom: 20px;
         padding-bottom: 10px;
         
        } 



/* Add some padding inside the card container */
.container {
  padding: 2px 16px;
}

.txtbx input{
   
    background: none;
     border: 0.5px solid lightgray;
     border-radius: 4px;
    /* border-bottom: 1px solid lightgray; */
     margin: 3px 3px 3px 13px; 
    margin-top: 10px;
    width:70%;
    height: 40px;

}

.txtbx{
    margin-left: 70px;
}



::placeholder {
  color: black;
  opacity: 0.3; /* Firefox */
}

.head{
    margin: 30px  0px 20px 20px; 
    /* margin-left: 30px; */
    font-size: 30px;
}

label{
    display:inline-block;
    text-align: left;
    width: 130px;
}

#txt-a{
    margin: 3px;
    margin-left: 17px;
    margin-top: 5px;
    border:1px solid lightgray;
    border-radius: 2px;
}


.txtbx-1{
    display: flex;
    margin-left: 73px;
}
.c-btn{
    margin-left:80%;
    margin-top: 30px;
    background-color:plum;
    border-radius: 6px ;
    border-color: lightslategray;
    color: black;

}

.c-btn:hover{
    background-color:rgb(185, 218, 132);
}

    </style>
<title>c1_survey</title>
</head>
<body>


<?php include 'syde.php'; ?>
<?php include 'linkss.html'; ?>


<!--------------------------- navbar start --------------------->
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #C7F3E3;">
    <span style="font-size:30px;cursor:pointer; float:left;" onclick="openNav()">&#9776; </span>  
  <a class=" navbar-brand " href="#" style="color:rgb(75, 148, 158); margin-left: auto;">FORMA</a>
  </nav>
<!--------------------------- navbar ends --------------------->

<h3>Create survey</h3>
<h4> Step 1 of 2 :</h4>
    <div class="card">
  

  <div class="container">
      <form action="#" method="post"> <!-- form goes to database -->
      <div class="head"> Survey Information</div>
      <div class="txtbx">
          <label >Enter Survey title:</label>
          <input type="text" name="title-s" id="title-s" placeholder=" Survey Title">
      </div>

      <div class="txtbx-1">
    <label> Description:</label>
       <textarea name="txt-a" id="txt-a" cols="59" rows="3"></textarea>
       <!-- <input type="text" name="description" id="desc" placeholder="Describe your survey"> -->
      </div>
      <a href="c_survey.php">
       <input type="button" name="sub" class="c-btn" value="Create"></a>
      </form>

    <!-- the btn was like this  ===> <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Delete Question</button> -->

    
 

</div>




 
</body>
</html>