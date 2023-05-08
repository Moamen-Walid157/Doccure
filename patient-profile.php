<?php 
include("assets/inc/userheader.php");
include("assets/inc/conn.php");

$patid = $_GET['patid'];
if(isset($patid)){
    $sel = "SELECT * FROM patients WHERE id = '$patid'";
    $data = $conn->query($sel);
    $row = $data->Fetch_assoc();

    $fname = $row['Fname'];
    $lname = $row['Lname'];
    $dob = $row['dob'];
    $blood = $row['blood'];
    $city = $row['city'];
    $country = $row['country'];
    $address = $row['address'];
    $phone = $row['mobile'];
    $zip = $row['zip'];
    $image = $row['image'];

}   
?>
            <div class="col-md-7 col-lg-8 col-xl-9" style="margin:auto;">
                    <div class="card">
						<div class="card-body">
							<div class="doctor-widget">
								<div class="doc-info-left">
									<div class="doctor-img">
										<img src="<?= $image;?>" class="img-fluid" alt="User Image" style="width:100%;">
									</div>
									<div class="doc-info-cont">
										<h4 class="doc-name">Mr. <?= $fname;?>  <?= $lname;?></h4>
										<p class="doc-speciality" style="color:#09E5AB;">New Patient</p>
										
										<div class="clinic-details">
											<h5>Date Of Birth : <?= $dob;?></h5> 
										</div>
                                        <div class="clinic-details">
											<h5>Blood : <?= $blood;?></h5> 
										</div>
                                        <div class="clinic-details">
											<h5>Phone : <?= $phone;?></h5> 
										</div>
                                        <div class="clinic-details">
                                            <h5>Address : <?= $address;?></h5> 
                                        </div>
                                        <div class="clinic-details">
                                            <h5>City : <?= $city;?></h5> 
										</div>
                                        <div class="clinic-details">
                                            <h5>Country : <?= $country;?></h5> 
										</div>
                                        <div class="clinic-details">
                                            <h5>Zip Code : <?= $zip;?></h5> 
										</div>
										
									</div>
								</div>
								<div class="doc-info-right">
									
									<div class="clinic-booking">
										<a class="apt-btn" href="doctor-dashboard.php">Go To Dashboard</a>
									</div>
								</div>
									
							</div>
						</div>
					</div>

						</div>

		<?php include("assets/inc/userfooter.php"); ?>
