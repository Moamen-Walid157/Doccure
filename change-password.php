<?php include("assets/inc/userheader.php");
include("assets/inc/conn.php");
session_start();
$patid = $_GET['patid'];
$selectt = "SELECT * FROM `patients` WHERE id = '$patid'";
$dataa = $conn->query($selectt);
$roww = $dataa->fetch_assoc();

$fname = $roww['Fname'];
$lname = $roww['Lname'];
$image = $roww['image'];
$dob = $roww['dob'];
$city = $roww['city'];
$country = $roww['country'];
?>
				<!-- /Header -->
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Change Password</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Change Password</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
					<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
											<img src="<?= $image;?>" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3>Mr.<?=$fname;?> <?=$lname;?> </h3>
											<div class="patient-details">
												<h5><i class="fas fa-birthday-cake"></i><?=$dob;?></h5>
												<h5 class="mb-0"><i class="fas fa-map-marker-alt"></i><?=$city;?><?=$country;?></h5>
											</div>
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li>
												<a href="patient-dashboard.php">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="doctors.php?patid=<?=$patid;?>">
													<i class="fas fa-user-md"></i>
													<span>Doctors</span>
												</a>
											</li>
											<li>
												<a href="profile-settings.php?patid=<?=$patid;?>">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li>
												<a href="">
													<i class="fas fa-lock"></i>
													<span>Change Password</span>
												</a>
											</li>
											<li>
												<a href="pat-logout.php">
													<i class="fas fa-sign-out-alt"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>

							</div>
							<!-- /Profile Sidebar -->
							
						</div>
						
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12 col-lg-6">
										
											<!-- Change Password Form -->
											<form action="z-changepass.php" method="Post">
												<div class="form-group">
													<label>Old Password</label>
													<input type="password" class="form-control" name="oldpass">
												</div>
												<div class="form-group">
													<label>New Password</label>
													<input type="password" class="form-control" name="newpass">
												</div>
												<div class="form-group">
													<label>Confirm Password</label>
													<input type="password" class="form-control" name="confirmpass">
												</div>
												<div class="submit-section">
													<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
													<h6 style="color:red;">
														<?php 
														if(isset($_SESSION["passfalse"])){
															echo $_SESSION["passfalse"];
														}

														?>
														</h6> 
														<?php
														
														?>
												</div>
											</form>
											<!-- /Change Password Form -->
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>		
			<!-- /Page Content -->
   
		
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
        <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>

<!-- doccure/change-password.html  30 Nov 2019 04:12:18 GMT -->
</html>