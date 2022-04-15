<?php 
$con = new mysqli("localhost","root","","health");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>health</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./main.css">
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">D&D Tracker</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doc.php">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="die.php">Diseases</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="def.php">Deficiency</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="auto.php">Auto Tracker</a>
            </li>
            
           
            
          </ul>
         
        </div>
      </nav>

</header>
<body>
  <div class="i">

<img src="https://media.istockphoto.com/photos/hand-putting-coins-on-stack-stair-as-step-growing-growth-and-wooden-picture-id1157947296?b=1&k=20&m=1157947296&s=170667a&w=0&h=3MiRHbied6vmXFZI561XA-XhzzBWkxloeazgvQVn_h4=" alt="" srcset="">
    
  </div>

   <div class="back">
         <hr>
         <div class="card"  action="die.php" method="post" style="width: 100%";>
            <div class="card-body">
              <h5 class="card-title">Diseases Info :-</h5>
              <p class="card-text">Enter disease name and yoy will get Cure and medicinal details</p>
              <a href="die.php" class="btn btn-primary">Search</a>
            </div></div>
            <div class="card" style="width: 100%";>
              <div class="t">
                  <div class="card-body">
                  <h5 class="card-title">Deficiency Info :-</h5>
                  <p class="card-text">Enter Deficiencyand get cure and Diseases caused by it</p>
                  <a href="def.php" class="btn btn-primary">Search</a>
                </div></div></div>
                <div class="card" style="width: 100%";>
                    <div class="card-body">
                      <h5 class="card-title">Auto Tracker :-</h5>
                      <p class="card-text">Enter symptoms and get Deficiency or caused by it</p>
                      <a href="auto.php" class="btn btn-primary">Search</a>
                    </div></div>
                    <div class="card" style="width: 100%";>
                    <div class="card-body">
                      <h5 class="card-title">Doctor's Info :-</h5>
                      <p class="card-text">List of our Highly Qulified and Certified Medical experts :-</p>
                      <a href="#" class="btn btn-primary">Search</a>
                    </div></div></div>
                    <div class="front">
                    <div class="card" style="width: 100%";>
                    <div class="card-body">
                      <h5 class="card-title">Explore :-</h5>
                      <p class="card-text">Explore different types of Diseases and Deficiencywith their symptoms :-</p>
                      <a href="#" class="btn btn-primary">Search</a>
                    </div></div>
                    <div class="card" style="width: 100%";>
                    <div class="card-body">
                      <h5 class="card-title">Contact Us :-</h5>
                      <p class="card-text">Click to connect or contact us for any query :-</p>
                      <a href="#" class="btn btn-primary">Search</a>
                    </div></div>
                  

         </div>

      
    
</body>
<footer>
    <hr>
    <div class="card" style="width: 100%";>
        <div class="card-body">
          <h5 class="card-title">Feedback pls :-</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div></div>
</footer>
<script src="index.js"></script>
</html>
