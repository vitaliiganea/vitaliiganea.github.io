<?php 

$con = mysqli_connect("localhost","root","mysql","register");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$conn = new PDO('mysql:host=localhost; dbname=register','root', 'mysql'); 
?>