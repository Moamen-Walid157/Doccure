<?php 
include("assets/inc/conn.php");
include("assets/inc/userheader.php");

session_start();
$patid = $_GET['patid'];
$docid = $_GET['docid'];


$q = "UPDATE doctors SET `status` = 'Accepted' WHERE id = '$docid'";
$upone = $conn->query($q);

$q = "UPDATE patients SET `active` = 'yes' WHERE id = '$patid'";
$upone = $conn->query($q);


$select = "SELECT * FROM patients WHERE id = '$patid'";
$uptwo = $conn->query($select);
$data = $uptwo->fetch_assoc();

$fname = $data['Fname'];
$lname = $data['Lname'];
$date = $data['bookdate'];
$time = $data['booktime'];


?>
<div class="card success-card">
	<div class="card-body">
		<div class="success-cont">
			<i class="fas fa-check"></i>
			<h3>Appointment booked Successfully!</h3>
			<p>Appointment booked with <strong> Mr. <?= $fname;?> <?= $lname?> </strong><br> on <strong><?= $date;?> <?= $time;?></strong></p>
			<a href="doctor-dashboard.php" class="btn btn-primary view-inv-btn">Go To Dashboard</a>
		</div>
	</div>
</div>
<?php
include("assets/inc/userfooter.php");

?>