<?php include("assets/inc/userheader.php");
include("assets/inc/conn.php");
session_start();
$docid = $_GET['docid'];
$patid = $_GET['patid'];


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
			<div class="content">
				<div class="container">
				
					<div class="row">
						<div class="col-12">
						
						<?php
					if(isset($docid)){

$_SESSION["id"] = $docid;
$select = "SELECT * FROM doctors WHERE id = '$docid'";
$view = $conn->query($select);
$row = $view->fetch_assoc();

$fname = $row['fname'];
$lname = $row['lname'];
$country = $row['country'];
$price = $row['price'];
$image = $row['image'];

?>
<div class="card">
	<div class="card-body">
		<div class="booking-doc-info">
			<a href="doctor-profile.php" class="booking-doc-img">
				<img src="<?=$image;?>" alt="User Image">
			</a>
			<div class="booking-info">
				<h4><a href="doctor-profile.php?docid=<?=$docid;?>&patid=<?=$patid;?>">Dr. <?=$fname;?> <?=$lname;?></a></h4>
			
				<p class="text-muted mb-3"><i class="fas fa-map-marker-alt"></i> <?=$country;?></p>
				<p class="doc-location">
					<i class="far fa-money-bill-alt"></i> <?=$price;?> - $1000 
				</p>
			</div>
		</div>
	</div>
</div>

<?php } ?>



							<form  action="booking-success.php" method="Post">
							<input type="hidden" name='docid' value="<?= $docid ?>">
							<input type="hidden" name='patid' value="<?= $patid ?>">

								<div class="row">
									<div class="col-md-6">
										<div class="card">
										<div class="card-body">
											<h3>Choose your Appointment Date</h3>
											<input type="date" class="form-control" required name="date">
										</div>
									</div>
									</div>
									<div class="col-md-6">
										<div class="card">
										<div class="card-body">
											<h3>Choose your Appointment Time</h3>
											<input type="time" class="form-control" required name="time">
										</div>
									</div>
									</div>
								</div>
							
							
							<!-- Schedule Widget -->
							
							<!-- /Schedule Widget -->
							
							<!-- Submit Section -->
							<div class="submit-section proceed-btn text-right">
								<button type="submit" class="btn btn-primary submit-btn">Make Appointment</button>
							</div>
							<!-- /Submit Section -->
						</form>
						</div>
					</div>
				</div>

			</div>		
			<!-- /Page Content -->
   
			
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<?php include("assets/inc/userfooter.php");?>