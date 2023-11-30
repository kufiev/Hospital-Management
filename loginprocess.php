<?php
session_start();
include ('connect.php');
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysqli_query($connect, "select * from user where username = '$username' and password = '$password'");

$log=mysqli_num_rows($query);
if($log==TRUE){
    $_SESSION['username']=$username;
    header ("location:list.php");
}
else{
    echo "<script>alert('wrong username or password'); location = 'login.php';</script>";
}
?>