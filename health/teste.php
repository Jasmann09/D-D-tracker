<?php
$server ="localhost";
$username ="root";
$password ="";
$dbname="health";
$con = mysqli_connect($server,$username,$password,$dbname);

$sql="SELECT * FROM die";
$result=mysqli_query($con,$sql);
$queryresult=mysqli_num_rows($result);
echo " hi";
?>