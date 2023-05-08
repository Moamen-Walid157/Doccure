<?php
$docimage = $_SESSION["docimage"];
$docfname = $_SESSION["docfname"];
$doclname = $_SESSION["doclname"];

$selectt = "SELECT * FROM `doctors` WHERE fname='$docfname' and lname='$doclname' and image='$docimage'";
$dataa = $conn->query($selectt);
$roww = $dataa->fetch_assoc();
$docid = $roww['id'];

if(isset($_SESSION["docfname"])){ ?>
						

                            <!-- Profile Sidebar -->

							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
										<img src="<?=$_SESSION["docimage"];?>" alt="User Image">
										</a>
										<div class="profile-det-info">
										<h3>Dr. <?=$_SESSION["docfname"];?> <?=$_SESSION["doclname"];?></h3>
											
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
												<a href="doc-logout.php">
													<i class="fas fa-sign-out-alt"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
							<?php } ?>
							<!-- /Profile Sidebar -->
							