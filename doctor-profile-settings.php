<?php include("assets/inc/userheader.php");
include("assets/inc/conn.php");

$docid =$_GET['docid'];
$selectt = "SELECT * FROM `doctors` WHERE id='$docid'";
$dataa = $conn->query($selectt);
$roww = $dataa->fetch_assoc();
$docfname = $roww['fname'];
$doclname = $roww['lname'];
$docimage = $roww['image'];
?>
		<!-- /Header -->
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php?docid=<?=$docid;?>">Home</a></li>
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
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
						
							<!-- Profile Sidebar -->
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
											<img src="<?=$docimage;?>" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3>Dr. <?=$docfname;?> <?=$doclname;?></h3>
											
											<div class="patient-details">
												<h5 class="mb-0">BDS, MDS - Oral & Maxillofacial Surgery</h5>
											</div>
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li>
												<a href="doctor-dashboard.php?docid=<?=$docid;?>">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="appointments.php?docid=<?=$docid;?>">
													<i class="fas fa-calendar-check"></i>
													<span>Appointments</span>
												</a>
											</li>
											
										
											<li>
												<a href="">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											
											<li>
												<a href="doc-logout.php?docid=<?=$docid;?>">
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
							<form action="y-doc-update.php" method="Post" enctype="multipart/form-data">						
							<input type="hidden" name='docid' value="<?= $docid ?>">
								<!-- Basic Information -->
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Basic Information</h4>
										<div class="row form-row">
											<div class="col-md-12">
												<div class="form-group">
													<div class="change-avatar">
														<div class="profile-img">
															<img src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
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
											<div class="col-md-6">
												<div class="form-group">
													<label>Username <span class="text-danger">*</span></label>
													<input type="text" class="form-control" readonly>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Email <span class="text-danger">*</span></label>
													<input type="email" class="form-control" readonly>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>First Name <span class="text-danger">*</span></label>
													<input type="text" class="form-control" name="fname">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Last Name <span class="text-danger">*</span></label>
													<input type="text" class="form-control" name="lname">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Phone Number</label>
													<input type="text" class="form-control" name="phone">
												</div>
											</div>
											
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">Country</label>
													<input type="text" class="form-control" name="country">
												</div>
											</div>
											
										</div>
									</div>
								</div>
								<!-- /Basic Information -->
								
								<!-- About Me -->
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">About Me</h4>
										<div class="form-group mb-0">
											<label>Biography</label>
											<textarea class="form-control" rows="5" name="about"></textarea>
										</div>
									</div>
								</div>
								<!-- /About Me -->
								
								

								
								
								<!-- Pricing -->
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Pricing</h4>
										
										<div class="form-group mb-0">
											<div id="pricing_select">
												<input type="text" class="form-control" id="custom_rating_input" name="price" value="" placeholder="20">
											</div>

										</div>
										
										
										
									</div>
								</div>
								<!-- /Pricing -->
								
								
							
								
								
								<div class="submit-section submit-btn-bottom">
									<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
								</div>
							</form>	
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   
			
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<?php include("assets/inc/footer.php");?>
