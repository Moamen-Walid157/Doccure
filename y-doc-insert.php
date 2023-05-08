<?php 
include("assets/inc/conn.php");
session_start();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$about = $_POST['about'];
$price = $_POST['price'];

$docid = $_POST['docid'];






$updateimagename = $_FILES['image']['name'];
$updateimageloc = $_FILES['image']['tmp_name'];

    // image rename 
$t = time();
$r = rand();
$newname = "$t$r$updateimagename";
$newpath = "assets/img/doctors/$newname";

move_uploaded_file($updateimageloc , $newpath);


if($fname && $lname && $phone && $country && $about && $price != ""){
    $updatequery = "UPDATE doctors SET `fname`='$fname', `lname`='$lname' , `phone`='$phone' , `country`='$country' , `about`='$about' , `price`='$price' , `image`='$newpath', `login` = 'completed' WHERE `id` = $docid";
    
    $updated = $conn->query($updatequery);

    // $_SESSION["docimage"] = $newpath;
    // $_SESSION["docfname"] = $fname;
    // $_SESSION["doclname"] = $lname;

    header("Location: doctor-dashboard.php");
}
else{
    echo "Noooooo";
    // Create session
}




?>