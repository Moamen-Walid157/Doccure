<?php 
include("assets/inc/conn.php");
session_start();
// Small Reg
$fname = $_POST['fname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
// check email 

$encPass = md5($pass);
if($fname && $email && $pass != ""){
    $querypatreg = "INSERT INTO patients (username , email , password , date) VALUES ('$fname','$email','$encPass',Now())";
    $insertpatreg = $conn->query($querypatreg);
    if($insertpatreg){
        header("Location: login.php");
    }
}
else{
    $_SESSION["regerror"] = "You missed somthing !";
    header("Location: register.php");
}




// if($fname || $email || $pass == ""){ 

//     $_SESSION["regerror"] = "You missed somthing!!";
//     header("Location: register.php");
//     }
// if($insertpatreg == true && $fname && $email && $pass != "")
//         header("Location: login.php");
// }
?>


