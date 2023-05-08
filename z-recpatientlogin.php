<?php 
include("assets/inc/conn.php");
session_start();
// Login page for client

// recive login data

$emailpatlogin = $_POST['emailpatlogin'];
$passpatlogin = $_POST['passpatlogin'];

$encPass = md5($passpatlogin);

$querypatlog = "SELECT * FROM  patients WHERE email = '$emailpatlogin' and password = '$encPass'";
$logpatdata = $conn->query($querypatlog);
$checkdata = $logpatdata->fetch_assoc();
$numofrows = $logpatdata->num_rows;
if($emailpatlogin && $passpatlogin != ""){
    if($numofrows == 1){
        
        $_SESSION['patid'] = $checkdata['id'];
    
        $status = $checkdata['status'];
    
        if($status == "completed"){
            header("Location: patient-dashboard.php");
    
        }
        else{
            header("Location: completeprofile.php");
    
        }
    
    
    }
    else{
        $_SESSION["Not Found"] = "Account is not found";
        header("Location: login.php");
    }
}
else{
    $_SESSION["regerror"] = "You missed somthing !";
    header("Location: login.php");

}






?>