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
									<li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Profile Settings</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<!-- Profile Sidebar -->
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
												<a href="">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li>
												<a href="change-password.php?patid=<?=$patid;?>">
													<i class="fas fa-lock"></i>
													<span>Change Password</span>
												</a>
											</li>
											<li>
												<a href="pat-logout.php?patid=<?=$patid;?>">
													<i class="fas fa-sign-out-alt"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>

							</div>
						</div>

					

						<!-- /Profile Sidebar -->
						
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body">
									
									<!-- Profile Settings Form -->
									<form action="z-updatedata.php" method="Post" enctype="multipart/form-data">
									<input type="hidden" name='patid' value="<?= $patid ?>">
									<h6 style="color: green;">
											<?php
												if(isset($_SESSION["Dataupdated"])){
													echo $_SESSION["Dataupdated"] ; 
												}?>
											</h6>
										<div class="row form-row">
											<div class="col-12 col-md-12">
												<div class="form-group">
													<div class="change-avatar">
														<div class="profile-img">
															<img src="<?=$image;?>" alt="User Image">
														</div>
														<div class="upload-img">
															<div class="change-photo-btn">
																<span><i class="fa fa-upload"></i> Upload Photo</span>
																<input type="file" class="upload" name="image">
															</div>
															<small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>

														</div>
													</div>
												</div>
											</div>

											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>First Name</label>
													<input type="text" class="form-control" placeholder="Richard" name="fname">
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Last Name</label>
													<input type="text" class="form-control" placeholder="Wilson" name="lname">
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Date of Birth</label>
													<div class="cal-icon">
														<input type="text" class="form-control datetimepicker" placeholder="24-07-1983" name="dob">
													</div>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Blood Group</label>
													<select class="form-control select" name="blood">
														<option>A-</option>
														<option>A+</option>
														<option>B-</option>
														<option>B+</option>
														<option>AB-</option>
														<option>AB+</option>
														<option>O-</option>
														<option>O+</option>
													</select>
												</div>
											</div>
											
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Mobile</label>
													<input type="text" placeholder="+1 202-555-0125" class="form-control" name="phone">
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
												<label>Address</label>
													<input type="text" class="form-control" placeholder="806 Twin Willow Lane" name="address">
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>City</label>
													<input type="text" class="form-control" placeholder="Old Forge" name="city">
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>State</label>
													<input type="text" class="form-control" placeholder="Newyork" name="state">
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Zip Code</label>
													<input type="text" class="form-control" placeholder="13420" name="zipcode">
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Country</label>
													<input type="text" class="form-control" placeholder="United States" name="country">
												</div>
											</div>
										</div>

										<div class="submit-section">
											<button type="submit" class="btn btn-success submit-btn">Save Changes</button>
										</div>
										
									</form>
									<!-- /Profile Settings Form -->
									<a href="profile-settings.php?ediet"></a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>		
			<!-- /Page Content -->
   
			
		   
		</div>
		<!-- /Main Wrapper -->
	  
<?php include("assets/inc/userfooter.php");?>