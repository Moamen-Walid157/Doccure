<?php include("assets/inc/conn.php");
session_start();


    $oldpass = $_POST['oldpass'];
    $newpass = $_POST['newpass'];
    $confirmpass = $_POST['confirmpass'];



$checkk = "SELECT * FROM patients WHERE password = '$oldpass'";
$show = $conn->query($checkk);
$checkdata = $show->fetch_assoc();
$numofrows = $show->num_rows;

if($numofrows = 1){
        $updatepass = "UPDATE patients SET `password`='$newpass' WHERE password = '$oldpass'";
        $updata = $conn->query($updatepass);
        header("Location:patient-dashboard.php");
    }
else{
    $_SESSION["passfalse"] = "something wrong";
    header("Location: change-password.php");

}














// $check = "SELECT * FROM patientslogin";
// $data = $conn->query($check);

// $row = $data->fetch_assoc();

// $currentpass = $row['pass'];


// if($currentpass != $oldpass){
//     $_SESSION["wrongoldpass"] = "Old password is not match";
//     // header("Location: change-password.php");
//     echo "wrong old";

// }

// elseif($newpass == $confirmpass){
//         $updatepass = "UPDATE patientslogin SET `pass`='$newpass'";
//         $updata = $conn->query($updatepass);
//         echo "update is done";
//     }
//     else{
//         $_SESSION["wrongconfirm"] = "The new password is not match with confirm";
//         // header("Location: cahnge-password.php");
//         echo "wrong confirm";

// }






?>