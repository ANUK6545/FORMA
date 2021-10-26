<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>response</title>

  <style>

body{
  margin: 0%;
  padding: 0%;
}
    .row{
      display:flex;
    }
    #card-info  {
      /* Add shadows to create the "card" effect */
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      padding: 20px 20px 20px 20px;
      margin: 20px 20px 20px 20px;
      height: 60vh;
      width: 60vh;
    }

    #card-resp  {
      /* Add shadows to create the "card" effect */
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      padding: 20px 20px 20px 20px;
      margin: 20px 20px 20px 20px;
      min-height: 120vh;
      width: 100vh;
      float: right;
      
    }

    /* On mouse-over, add a deeper shadow */
    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    /* Add some padding inside the card container */
    .container {
      padding: 2px 16px;
    }
  </style>
  <title>response</title>
</head>

<body>

  <?php include '_navbar.php'; ?>

<div class="container">
  <div class="row">

    <div class="card" id="card-info">
      <img src="img_avatar.png" alt="Avatar" style="width:100%">
      <div class="container">
        <h4><b>John Doe</b></h4>
        <p>Architect & Engineer</p>
      </div>
    </div>

  </div>


  

<div class="card" id="card-resp">
  <img src="img_avatar.png" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>John Doe</b></h4>
    <p>Architect & Engineer</p>
  </div>
</div>

</div>
</div>
</div>

</body>

</html>