<?php include "db_connection.php" ?>
<?php include "header.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor Info</title>
</head>
	<body>
		<h1>Doctor Information</h1>
		<div class="menu">
			
		</div>
		<div class="container">
			<div class="content">
				<div class="inner_content">
					<div><img src="resource/dr_raihan.jpg" class="img1"></div> <!-- image-1 -->
					<div class="info">Prof. Dr. Raihan Hussain 
						<br>Professor,
						<br>Department of Nuclear Medicine and Ultrasound
						<br>National Institute of Nuclear Medicine and Allied Sciences, BAEC,
						<br>BSMMU campus, Dhaka
						<br><br>
						<button type="button" class="btn btn-light"><a href="doc_appointment.php">Request Appointment</a></button>
					</div>
				</div>
				<div class="inner_content">
					<div><img src="resource/prof m_ali.jpg" class="img2"></div> <!-- image-2 -->
					<div>Prof. Mohammad Ali
						<br>Professor,
						<br>Department of Hepatobiliary and Pancreatic Surgery & Liver Transplant
						<br>BIRDEM General Hospital & Ibrahim Medical College, Dhaka
						<br><br>
						<button type="button" class="btn btn-light"><a href="doc_appointment.php">Request Appointment</a></button>
					</div>
				</div>
				<div class="inner_content">
					<div><img src="resource/doctor_kibria.jpg" class="img3"></div>
					<div>Dr. S. M. G kibria
						<br>Senior Consultant, General & Laparoscopic Surgery, 
						<br>Labaid Specialized Hospital
						<br>General Surgery (Incision, Operation)
						<br>Labaid Specialized Hospital, Main Br. 
						<br><br>
						<button type="button" class="btn btn-light"><a href="doc_appointment.php">Request Appointment</a></button>
					</div>
				</div>
				<div class="inner_content">
					<div><img src="resource/Dr_Shahiduzzaman.jpg" class="img4"></div>
					<div>Dr. GKM. Shahiduzzaman
						<br>Associate Professor,
						<br>Department of Medicine
						<br>Shaheed Suhrawardy Medical College Hospital, Dhaka
						<br><br>
						<button type="button" class="btn btn-light"><a href="doc_appointment.php">Request Appointment</a></button>
					</div>
				</div>
				<div class="inner_content">
					<div><img src="resource/Dr_Chanchal_Kumar_Ghosh.jpg" class="img5"></div>
					<div> Dr. Chanchal Kumar Ghosh
						<br> MBBS,FCPS(Medicine),MD(Gastroenterology) Gastroenterology,
						<br> Hepatology & Medicine specialist Interventional Gastroenterologist
						<br><br>
						<button type="button" class="btn btn-light"><a href="doc_appointment.php">Request Appointment</a></button>
					</div>
				</div>
				<?php 
					$query = "SELECT * FROM doc_signup";
					$select_posts = mysqli_query($db,$query);

					while ($row = mysqli_fetch_assoc($select_posts)){
						$first_name = $row['first_name'];
						$last_name = $row['last_name'];
						$designation = $row['designation'];
						$specialty = $row['specialty'];
						$professional_statement = ['professional_statement'];

					echo "
						<div class='inner_content'>
							<div><img src='resource/Dr_Chanchal_Kumar_Ghosh.jpg' class='img5'></div>
							<div>{$first_name}  {$last_name}
								<br> {$designation}
								<br>{$specialty}
								<br>{$professional_statement}
								<br><br>
								<button type='button' class='btn btn-light'><a href='doc_appointment.php'>Request Appointment</a></button>
							</div>
						</div>
					";
}
				?>
			</div>
				
			</div>
			
		</div>



	</body>



</html>
<link rel="stylesheet" type="text/css" href="doc_list.css">






<?php include "footer.php" ?>