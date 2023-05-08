<?php 
include("assets/inc/conn.php");
session_start();
// recive data as text & Num
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$blood = $_POST['blood'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$country = $_POST['country'];
$patid = $_POST['patid'];
$_SESSION["patid"] = $patid;



// recive image 

$imagename = $_FILES['image']['name'];
$imageloc = $_FILES['image']['tmp_name'];

    // image rename 
$t = time();
$r = rand();
$newname = "$t$r$imagename";
$newpath = "assets/img/patients/$newname";

move_uploaded_file($imageloc , $newpath);

// Inserting



    $que = "UPDATE patients SET Fname='$fname',Lname='$lname',dob='$dob',blood='$blood',mobile='$phone',address='$address',city='$city',state='$state',country='$country',zip='$zipcode',image='$newpath' , status = 'completed' WHERE id = $patid ";

    $insert = $conn->query($que);

    header("Location: patient-dashboard.php");



