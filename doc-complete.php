<?php include("assets/inc/userheader.php");
include("assets/inc/conn.php");
session_start();
$docid = $_SESSION["docid"];
?>
			<!-- /Header -->
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">

							<h2 class="breadcrumb-title" style="text-align:center;">Complete Profile</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
					

						<!-- /Profile Sidebar -->
						
						<div class="col-md-7 col-lg-8 col-xl-9" style="margin:auto;">
							<div class="card">
								<div class="card-body">
									
									<!-- Profile Settings Form -->
									<form action="y-doc-insert.php" method="Post" enctype="multipart/form-data">
									<input type="hidden" name='docid' value="<?= $docid ?>">
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
									<!-- /Profile Settings Form -->
									
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