

<?php 

$patid = $_SESSION['patid'];
$selectt = "SELECT * FROM `patients` WHERE id = $patid";
$dataa = $conn->query($selectt);
$roww = $dataa->fetch_assoc();




 ?>
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
											<img src="<?= $roww['image']?>" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3>Mr.<?=$roww["Fname"];?> <?=$roww["Lname"];?> </h3>
											<div class="patient-details">
												<h5><i class="fas fa-birthday-cake"></i><?=$roww["dob"];?></h5>
												<h5 class="mb-0"><i class="fas fa-map-marker-alt"></i><?=$roww["city"];?><?=$roww["country"];?></h5>
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
												<a href="doctors.php">
													<i class="fas fa-user-md"></i>
													<span>Doctors</span>
												</a>
											</li>
											<li>
												<a href="completeprofile.php">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li>
												<a href="change-password.php">
													<i class="fas fa-lock"></i>
													<span>Change Password</span>
												</a>
											</li>
											<li>
												<a href="pat-logout.php=">
													<i class="fas fa-sign-out-alt"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>

							</div>
						</div>

