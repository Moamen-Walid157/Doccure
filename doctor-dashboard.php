<?php include("assets/inc/userheader.php");
include("assets/inc/conn.php");
session_start();
$docid = $_SESSION["docid"];
$q = "SELECT * FROM doctors WHERE id = '$docid'";
$check = $conn->query($q);
$result = $check->fetch_assoc();

$fname = $result['fname'];
$lname = $result['lname'];
$image = $result['image'];


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
									<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Dashboard</h2>
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
										<img src="<?=$image;?>" alt="User Image">
										</a>
										<div class="profile-det-info">
										<h3>Dr. <?=$fname;?> <?=$lname;?></h3>
											
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
												<a href="doctor-dashboard.php">
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
												<a href="doctor-profile-settings.php?docid=<?=$docid?>">
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

							<div class="row">
								<div class="col-md-12">
									<div class="card dash-card">
										<div class="card-body">
											<div class="row">
												<div class="col-md-12 col-lg-6">
													<div class="dash-widget dct-border-rht">
														<div class="circle-bar circle-bar1">
															<div class="circle-graph1" data-percent="75">
																<img src="assets/img/icon-01.png" class="img-fluid" alt="patient">
															</div>
														</div>
														<div class="dash-widget-info">
															<h6>Total Patient</h6>
															<h3>1500</h3>
															<p class="text-muted">Till Today</p>
														</div>
													</div>
												</div>
												
												
												
												<div class="col-md-12 col-lg-6">
													<div class="dash-widget">
														<div class="circle-bar circle-bar3">
															<div class="circle-graph3" data-percent="50">
																<img src="assets/img/icon-03.png" class="img-fluid" alt="Patient">
															</div>
														</div>
														<div class="dash-widget-info">
															<h6>Appoinments</h6>
															<h3>85</h3>
															<p class="text-muted">06, Apr 2019</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12">
									<h4 class="mb-4">Patient Appoinment</h4>
									<div class="appointments">
							
										<!-- Appointment List -->
										<?php
										$select = "SELECT * FROM patients WHERE bookdate != '' and booktime != '' and active = 'pending' and docid = $docid";
										$data = $conn->query($select);
										foreach($data as $d){ ?>
											<div class="appointment-list">
												<div class="profile-info-widget">
													<a href="patient-profile.php?patid=<?= $d['id'];?>" class="booking-doc-img">
														<img src="<?= $d['image'];?>" alt="User Image">
													</a>
													<div class="profile-det-info">
														<h3><a href="patient-profile.php?patid=<?= $d['id'];?>"><?= $d['Fname'];?> <?= $d['Lname'];?></a></h3>
														<div class="patient-details">
															<h5><i class="far fa-clock"></i> <?= $d['bookdate'];?>, <?= $d['booktime'];?></h5>
															<h5><i class="fas fa-map-marker-alt"></i> <?= $d['city'];?>, <?= $d['country'];?></h5>
															<h5><i class="fas fa-envelope"></i> <?= $d['email'];?></h5>
															<h5 class="mb-0"><i class="fas fa-phone"></i> <?= $d['mobile'];?></h5>
														</div>
													</div>
												</div>
												<div class="appointment-action">
													
													<a href="y-accept.php?patid=<?= $d['id'];?>&docid=<?=$docid;?>" class="btn btn-sm bg-success-light" >
														<i class="fas fa-check"></i> Accept
													</a>
													<a href="y-cancel.php?patid=<?= $d['id'];?>&docid=<?=$docid;?>" class="btn btn-sm bg-danger-light">
														<i class="fas fa-times"></i> Cancel
													</a>

												</div>
											</div>

										<?php } ?>
										<!-- /Appointment List -->
									
										
										<!-- /Appointment List -->
										
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
		<?php include("assets/inc/userfooter.php");?>
