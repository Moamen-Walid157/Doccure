<?php 
include("assets/inc/conn.php");
include("assets/inc/userheader.php");

$docid = $_GET['docid'];
if(isset($docid)){ ?>
<?php
$select = "SELECT * FROM doctors WHERE id = '$docid'";
$view = $conn->query($select);
$row = $view->fetch_assoc();

$fname = $row['fname'];
$lname = $row['lname'];
$about = $row['about'];
$country = $row['country'];
$price = $row['price'];
$image = $row['image'];







?>


    <div class="card">
						<div class="card-body">
							<div class="doctor-widget">
								<div class="doc-info-left">
									<div class="doctor-img">
										<img src="<?= $image;?>" class="img-fluid" alt="User Image">
									</div>
									<div class="doc-info-cont">
										<h4 class="doc-name">Dr. <?= $fname;?> <?= $lname;?></h4>
										<p class="doc-speciality">BDS, MDS - Oral & Maxillofacial Surgery</p>
										
										<div class="clinic-details">
											<p class="doc-location"><i class="fas fa-map-marker-alt"></i> <?= $country;?></p>
											<p class="doc-location">
												<i class="far fa-money-bill-alt"></i> <?= $price;?> - $1000 
											</p>
										</div>
										
									</div>
								</div>
								<div class="doc-info-right">
									
									<div class="clinic-booking">
										<a class="apt-btn" href="booking.html">Book Appointment</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Doctor Widget -->
					
					<!-- Doctor Details Tab -->
					<div class="card">
						<div class="card-body pt-0">
						
							<!-- Tab Menu -->
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link active" href="#doc_overview" data-toggle="tab">Overview</a>
									</li>
								
								</ul>
							</nav>
							<!-- /Tab Menu -->
							
							<!-- Tab Content -->
							<div class="tab-content pt-0">
							
								<!-- Overview Content -->
								<div role="tabpanel" id="doc_overview" class="tab-pane fade show active">
									<div class="row">
										<div class="col-md-12 col-lg-9">
										
											<!-- About Details -->
											<div class="widget about-widget">
												<h4 class="widget-title">About Me</h4>
												<p><?= $about;?></p>
											</div>
											<!-- /About Details -->
										
											

										</div>
									</div>
								</div>
								<!-- /Overview Content -->
								
							
							</div>
						</div>
					</div>
<?php } ?>
<?php   
include("assets/inc/userfooter.php");

?>