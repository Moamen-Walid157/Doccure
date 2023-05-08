<?php 
include("assets/inc/conn.php");
session_start();
// Login page for client

// recive login data

$email = $_POST['email'];
$pass = $_POST['pass'];
if($email && $pass != ""){

    $query = "SELECT * FROM `doctors` WHERE `email` = '$email' and `password` = '$pass'";
    $check = $conn->query($query);
    $checkdata = $check->fetch_assoc();
    $numofrows = $check->num_rows;
    
    $docid = $checkdata['id'];
    $_SESSION["docid"] = $docid;
        
    $login = $checkdata['login'];
        if($numofrows == 1){
            header("Location: doc-complete.php");
            if($login == "completed"){
                header("Location: doctor-dashboard.php");
        
            }
            else{
                header("Location: doc-complete.php");
        
            }
        }
        else{
            echo"noooooo";
            header("Location: doctorlogin.php");
            $_SESSION["notfound"] = " Account is not found";
        }
    }
else{
    $_SESSION["error"] = "You missed something";
    header("Location: doctorlogin.php");
}

