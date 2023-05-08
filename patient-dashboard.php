<?php include("assets/inc/userheader.php");
include("assets/inc/conn.php");
session_start();

if(isset($_SESSION['patid'])){
	$patid = $_SESSION['patid'];
}
elseif($_SERVER["REQUEST_METHOD"] == "GET"){
	$patid = $_GET['patid']; // check it MOOAMEN <-----
}



// $fname = $row['fname'];
// $lname = $row['lname'];
// $amount = $row['amount'];




// $selected = "SELECT * FROM `doctors` WHERE fname='$fname' and lname='$lname' and price = '$amount'";
// $dataa = $conn->query($selected);
// $rows = $dataa->fetch_assoc();
// $docid = $rows['id'];

$selectt = "SELECT * FROM `patients` WHERE id = $patid";
$dataa = $conn->query($selectt);
$roww = $dataa->fetch_assoc();

$fname = $roww['Fname'];
$lname = $roww['Lname'];
$image = $roww['image'];
$dob = $roww['dob'];
$city = $roww['city'];
$country = $roww['country'];



?>

			
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
						<!-- / Profile Sidebar -->
						
			<div class="col-md-7 col-lg-8 col-xl-9">
				<div class="card">
					<div class="card-body pt-0">
								
									<!-- Tab Menu -->
					<nav class="user-tabs mb-4">
						<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
							<li class="nav-item">
								<a class="nav-link active" href="#pat_appointments" data-toggle="tab">Appointments</a>
							</li>
											
						</ul>
					</nav>
									<!-- /Tab Menu -->
									
									<!-- Tab Content -->
						<div class="tab-content pt-0">
										
										<!-- Appointment Tab -->
			<div id="pat_appointments" class="tab-pane fade show active">
				<div class="card card-table mb-0">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover table-center mb-0">
								<thead>
									<tr>
										<th>Doctor</th>
										<th>Appt Date</th>
										<th>Booking Date</th>
										<th>Amount</th>
										<th>Status</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$select = "SELECT * FROM `doctors` WHERE bookdate != '' and booktime != '' and patid = '$patid' ";
									$data = $conn->query($select);
									$row = $data->fetch_assoc();
									foreach($data as $d){ ?>

										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="doctor-profile.php?docid=<?=$d['id'];?>&patid=<?=$patid;?>" class="avatar avatar-sm mr-2">
														<img class="avatar-img rounded-circle" src="<?= $d['image'];?>" alt="User Image">
													</a>
													<a href="doctor-profile.php?docid=<?=$d['id'];?>&patid=<?=$patid;?>">Dr. <?= $d['fname'];?> <?= $d['lname'];?> <span>Dental</span></a>
												</h2>
											</td>
											<td><?= $d['bookdate'];?><span class="d-block text-info"><?= $d['booktime'];?></span></td>
											<td><?= $d['date'];?></td>
											<td><?= $d['price'];?></td>
																		
											<td><span class="badge badge-pill bg-success-light"><?= $d['status'];?></span></td>
											<td class="text-right">
												<div class="table-action">
													<a href="z-cancel.php?docid=<?= $d['id'];?>&patid=<?=$patid;?>" class="btn btn-sm bg-danger-light">
														<i class="far fa-trash-alt"></i> Cancel
													</a>
												</div>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
										<!-- /Appointment Tab -->
										
										
						</div>
									<!-- Tab Content -->
									
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