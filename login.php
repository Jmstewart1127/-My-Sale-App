<?php


require 'master.php';
require 'userConn.php';


if(isset($_POST['username'])){

$username = mysqli_real_escape_string($conn,$_POST['username']);

$pass = mysqli_real_escape_string($conn,$_POST['password']);

$sel_user = "select * from login where username='$username' AND password='$pass'";


$run_user = mysqli_query($conn, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){

$_SESSION['username']=$username;

}

else {

echo "<script>alert('Email or password is not correct, try again!')</script>";

}

}



echo $navbarLogged;

	
?>