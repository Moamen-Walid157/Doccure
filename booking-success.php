<?php include("assets/inc/userheader.php");
 include("assets/inc/conn.php");
session_start();
$date = $_POST['date'];
$time = $_POST['time'];
$docid = $_POST['docid'];
$patid = $_POST['patid'];
$_SESSION["patid"] = $patid;


$update = "UPDATE `doctors` SET `bookdate` = '$date' , `booktime` = '$time' , `status` = 'pending' , `patid` = '$patid' WHERE id = '$docid'";
$check = $conn->query($update);


$updata =  "UPDATE `patients` SET `bookdate` = '$date' , `booktime` = '$time' , active = 'pending' , docid = '$docid' WHERE id = '$patid'";
$check = $conn->query($updata);
 ?>
		<!-- /Header -->
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Booking</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Booking</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content success-page-cont">
				<div class="container-fluid">
				
					<div class="row justify-content-center">
						<div class="col-lg-6">
						
							<!-- Success Card -->
							<?php if(isset($docid)){ 

								$select = "SELECT * FROM doctors WHERE id = '$docid'";
								$view = $conn->query($select);
								$row = $view->fetch_assoc();

								$fname = $row['fname'];
								$lname = $row['lname'];
								$image = $row['image'];
								$price = $row['price'];
								?>

								<div class="card success-card">
									<div class="card-body">
										<div class="success-cont">
											<i class="fas fa-check"></i>
											<h3>Appointment booked Successfully!</h3>
											<p>Appointment booked with <strong> Dr. <?= $fname;?> <?= $lname?> </strong><br> on <strong><?= $date;?> <?= $time;?></strong></p>
											<a href="patient-dashboard.php?patid=<?=$patid;?>" class="btn btn-primary view-inv-btn">Go To Dashboard</a>
										</div>
									</div>
								</div>
							<?php } ?>
							<!-- /Success Card -->
							
						</div>
					</div>
					
				</div>
			</div>		
			<!-- /Page Content -->
   
			
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<?php include("assets/inc/userfooter.php");?>

<?php 


?>





















