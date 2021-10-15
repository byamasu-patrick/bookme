<?php
$dbhost="localhost";
$dbuser="root";
$dbPassword="";
$dbName="bookmedb";
$pdo= null;
try {
  //code...
  $dns= "mysql:host=".$dbhost.";dbname=" .$dbName;
  $pdo= new PDO($dns,$dbuser,$dbPassword);
} catch (PDOException $th) {
  //coode for the error
  echo "DB Connection Failed:" .$th->getMessage();
}


/*$con=mysqli_connect("localhost","root","","bookmedb");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
error_reporting(E_ALL ^ E_NOTICE); */
?>