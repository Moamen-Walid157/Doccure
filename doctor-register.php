<?php include("assets/inc/header.php");
session_start();?>
						<!-- /Header -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8 offset-md-2">
						
							<!-- Account Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/login-banner.png" class="img-fluid" alt="Login Banner">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Doctor Register <a href="register.php">Not a Doctor?</a></h3>
										</div>
										
										<!-- Register Form -->
										<form action="y-docrecivereg.php" method="Post">
											<div class="form-group form-focus">
												<input type="text" class="form-control floating">
												<label class="focus-label">Name</label>
											</div>
											<div class="form-group form-focus">
												<input type="email" class="form-control floating" name="email">
												<label class="focus-label">Email Address</label>
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating" name="pass">
												<label class="focus-label">Create Password</label>
											</div>
											<div class="text-right">
												<a class="forgot-link" href="doctorlogin.php">Already have an account?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
											<h6 style="color:red;">
												<?php 
												if(isset($_SESSION["regerror"])){
													echo $_SESSION["regerror"];
												}
												?>
											</h6>
											
										</form>
										<!-- /Register Form -->
										
									</div>
								</div>
							</div>
							<!-- /Account Content -->
								
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   
			
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
<?php session_destroy();
include("assets/inc/footer.php");?>