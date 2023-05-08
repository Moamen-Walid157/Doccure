<?php 
include("assets/inc/conn.php");
session_start();

    $email = $_POST['email'];
    $pass = $_POST['pass'];

if($email && $pass != ""){
    $query = "INSERT INTO `doctors` (`email` , `password` , `date`) VALUES ('$email' , '$pass' , NOW())";
    $insert = $conn->query($query);
    header("Location: doctorlogin.php");
}
else{
    $_SESSION["regerror"] = "You missed something";
    header("Location: doctor-register.php");
    
}




?>