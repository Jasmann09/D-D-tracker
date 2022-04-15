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
<h3> Here is Our List of Experinced and Certified Doctors :-</h3>
<hr>
<?php
$sql="SELECT * FROM `doc`";
$ress=mysqli_query($con,$sql);

?>
<table border="2">
  <tr>
    <th>Name</th>
    <th>Expertice</th>
    <th>Hospital</th>
    <th>Contact no.</th>
</tr>

  <?php
  while($rm=mysqli_fetch_array($ress)){
    echo"<tr>";
    echo"<td>".$rm['name']."</td>";
    echo"<td>".$rm['expertice']."</td>";
    echo"<td>".$rm['hospital']."</td>";
    echo"<td>".$rm['contact']."</td>";
    echo"</tr>";
  }
  ?>
  </table>
 </body>
</html>