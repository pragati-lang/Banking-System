<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spark";

$conn = mysqli_connect($servername, $username, $password, $dbname);

   if($conn){
       echo"Successfully connected to database <br>";
   }
   else{
       echo"Failed to connect to the database";
   }
?>