<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');
        body{
            background-color: rgb(229, 242, 250)!important;
            font-style:'Hind Siliguri', sans-serif;
            /* font-family: 'Hind Siliguri', sans-serif;
           font-family: 'Nunito Sans', sans-serif; */
        }

        .card {
            margin: 0 auto; /* Added */
            float: none; /* Added */
            margin-bottom: 5%; /* Added */
            border-top:  10px solid rgb(198, 253, 115)!important;
         margin-top: 5%;
         width: 60%;
         min-height: 120vh;
         box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    }

     h3 {
        padding: 30px 30px 30px 30px;;
         margin: 20px 20px 20px 20px; 
         border-bottom: 1px solid lightgray;
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
    color: rgb(132, 209, 17) ;
}

label{
    display:inline-block;
    text-align: right;
     width: 140px; 
}

.cancelbtn{
    background-color: plum;
    padding: 1px 1px;
 border-radius: 4px;
 margin-left: 70%;
 border-radius: 6px;
    padding: 4px;
    border-width: 2px;
    font-size: 17px;

}

.cancelbtn:hover{
background-color:rgba(164, 110, 207, 0.993);
}

 .inner-form label{
        margin-left: 50px;
}
/*
.inner-form input{
    width: 70%;
    border: 0.5px solid lightgray;
     border-radius: 4px;
} */

#fooBar{
    padding-left: 30%;
    
}

.options{
    margin: 10px 10px 10px 10px;
    padding-left: 30%;
    font-size:20px;
}
.add-Q-btn{
    margin-left: 35px;
    border-radius: 6px;
    border-color: lightgray;
   background-color: paleturquoise;
   padding: 5px;
}

.Save-btn{
    margin-top: 5%;
    margin-left: 70%;
    margin-bottom: 10%;
    border-radius: 6px;
    border-color: lightgray;
    background-color: lightgreen;
    padding: 5px;
}

.cona{
    margin-left: 5%;
}

.add-btn{
    width:40px;
    background-color: plum;
    border-radius: 6px;
    border-color: rgb(195, 199, 204);
    border-width: 2px;
    padding: 2px;
}

.add-btn:hover{
    background-color:  rgba(164, 110, 207, 0.693);
}


#quess
{
    font-size: 30px;
    margin: 20px ;
   color:rgb(34, 177, 182);

}
.opt{
    width:25%; 
    text-align:center; 
    height:25px;
     border-color:lightslategrey;
     border-radius: 4px;
}
</style>
<title>c_survey</title>
</head>
<body>
    
<?php include 'linkss.html'; ?>
<?php include 'syde.php'; ?>

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
      <div  class="head"> Survey Information</div>
      <div class="txtbx">
          <label>Enter Survey title:</label>
          [data from last page]
      </div>

      <div class="txtbx">
       <label>Description:</label>
       [data from last page]
      </div>
       
    <label for="ques" id= "quess">Questions </label> 

    <!-- the btn was like this  ===> <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Delete Question</button> -->

    
    <input type="button" class="cancelbtn" value="Delete question"> 
    <div class="inner-form">
<div class="container">
    <form action="">
        <label for="ques" >Question Text:</label>
        <input type="text" class ="txtx " name="Q-text" id="ques" placeholder="Enter Question"><br>
		<label>Questn type:</label>
		<select name="element" class="opt">
			<option value="checkbox">chbx</option>
			<option value="radio">Radio</option>
		</select>
		<input class="add-btn" type="button" value="add" onclick="add(document.forms[0].element.value)"/>
		
        <div class="options">Options</div>
        <div id="fooBar"> </div>
        
        <input class="add-Q-btn" type="button" value="Add Question">

	</form>

    </div>
    
    </div>

<input class="Save-btn" type="button" value="Save form">
</form>
</div>
</div>
</div>




 <script > 
		function add(type) {

	//Create an input type dynamically.
    var choice = document.createTextNode("Enter choice: ");
	var element = document.createElement("input");
    var br = document.createElement("option");
    var nbsp = document.createTextNode("      ");
    var nbsb = document.createTextNode("           ");
    var txt = document.createElement("input");
    var btn = document.createElement("button");

    btn.innerHTML = "<span style=''> X </span>";

	//Assign different attributes to the element.
	element.setAttribute("type", type);
	element.setAttribute("value", type);
	element.setAttribute("name", type);


	var foo = document.getElementById("fooBar");

	//Append the element in page (in span).
    foo.append(choice);
    foo.appendChild(element);
    foo.append(nbsp);
    foo.append(txt);
    foo.append(nbsb);
    foo.append(btn);
    foo.append(br);
}
		</script>
</body>
</html>