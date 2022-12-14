<?php

session_start();
$db_name = "shopping";
$connection = mysqli_connect("localhost","root","",$db_name);
echo '<script>alert("Shoppping DB connected sucessfully")</script>';

   
?>

