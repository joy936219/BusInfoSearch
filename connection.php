<?php
	$server = "localhost";
   $username = "root";
   $password = "";
   $database ="scpa";

   $conn = mysqli_connect($server,$username,$password,$database);

   if($conn->connect_error){
   	  die("Connection failed:". $conn->connect_error);
   }
?>