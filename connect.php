<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "hospitalweb";
$connect = mysqli_connect($host,$user,$pass) or die ("Failed to connect to database");
mysqli_select_db($connect,$name) or die ("Database not exist");
?>