<?php include("assets/inc/userheader.php");
include("assets/inc/conn.php");



$patid = $_GET['patid'];

$selectt = "SELECT * FROM `patients` WHERE id='$patid'";
$dataa = $conn->query($selectt);
$roww = $dataa->fetch_assoc();
$fname = $roww['Fname'];
$lname = $roww['Lname'];
$dob = $roww['dob'];
$city = $roww['city'];
$country = $roww['country'];
$image = $roww['image'];
session_start();?>
				<!-- /Header -->
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Doctors</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Doctors</h2>
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
												<a href="">
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
												<a href="change-password.php?patid=<?=$patid;?>">
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
					

							</div>				
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="row row-grid">

									<?php
									$select = "SELECT * FROM doctors";
									$data = $conn->query($select); 
									foreach($data as $d){ ?>
									<div class="col-md-6 col-lg-4 col-xl-3">
										<div class="profile-widget">
											<div class="doc-img">
												<a href="doctor-profile.php">
													<img class="img-fluid" alt="User Image" src="<?= $d['image'];?>" style="height:300px;">
												</a>
												<a href="javascript:void(0)" class="fav-btn">
													<i class="far fa-bookmark"></i>
												</a>
											</div>
											<div class="pro-content">
												<h3 class="title">
													<a href="doctor-profile.php"><?= $d['fname'];?> <?= $d['lname'];?></a> 
													<i class="fas fa-check-circle verified"></i>
												</h3>
												<p class="speciality">MDS - Periodontology and Oral Implantology, BDS</p>
												
												<ul class="available-info">
													<li>
														<i class="fas fa-map-marker-alt"></i> Florida, USA
													</li>
													
													<li>
														<i class="far fa-money-bill-alt"></i> <?= $d['price'];?> - $1000 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
													</li>
												</ul>
												<div class="row row-sm">
													<div class="col-6">
														<a href="doctor-profile.php?docid=<?= $d['id'];?>&patid=<?=$patid;?>" class="btn view-btn">View Profile</a>
													</div>
													<div class="col-6">
														<a href="booking.php?docid=<?= $d['id'];?>&patid=<?=$patid;?>" class="btn book-btn">Book Now</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>


				</div>

			</div>		
			<!-- /Page Content -->
   
			
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
<?php include("assets/inc/userfooter.php");?>