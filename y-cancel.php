<?php 
include("assets/inc/conn.php");
include("assets/inc/userheader.php");
$docid = $_GET['docid'];
$patid = $_GET['patid'];

$dreq = "UPDATE doctors SET bookdate = NULL , booktime = NULL , `status` = 'Canceled' WHERE id = '$docid'";
$delete = $conn->query($dreq);

$dreqq = "UPDATE patients SET bookdate = null , booktime = null , `active` = 'Canceled' WHERE id = '$patid'";
$deletee = $conn->query($dreqq);
?>
<div class="card success-card">
	<div class="card-body">
		<div class="success-cont">
			<i class="fas fa-check"></i>
			<h3>Appointment canceled Successfully!</h3>
			<a href="doctor-dashboard.php" class="btn btn-primary view-inv-btn">Go To Dashboard</a>
		</div>
	</div>
</div>
<?php



include("assets/inc/userfooter.php");
?>