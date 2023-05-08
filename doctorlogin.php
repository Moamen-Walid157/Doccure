<?php include("assets/inc/header.php");
session_start();
?>
			<!-- /Header -->
			
			<!-- Page Content -->
			<div class="content" >
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">
							
							<!-- Login Tab Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Login">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Login <span>Doccure</span> DOCTORS</h3>
										</div>
										<form action="y-doctorlogin.php" method="Post">
											<div class="form-group form-focus">
												<input type="email" class="form-control floating" name="email">
												<label class="focus-label">Email</label>
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating" name="pass">
												<label class="focus-label">Password</label>
											</div>
											
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
											<h6 style="color:red;">
												<?php 
													if(isset($_SESSION["error"])){
														echo $_SESSION["error"];
													}
													elseif(isset($_SESSION["notfound"])){
														echo $_SESSION["notfound"];
													}
												?>
											</h6>
											
											
											<div class="text-center dont-have">Don’t have an account? <a href="doctor-register.php">Register</a></div>
										</form>
									</div>
								</div>
							</div>
							<!-- /Login Tab Content -->
								
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