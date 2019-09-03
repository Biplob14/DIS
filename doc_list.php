
<?php include_once "header.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor Info</title>
</head>
	<body>
		<h1>Doctor Information</h1>

		<div class="container">

					<div class="menu">



                            <a>
                            <form action="#" method="post">
                            <select name="doc_specialty" >
                              <option value="" style="">Specialists</option>
                              <option value="cardiology">Cardiology</option>
                              <option value="dermatology">Dermatology</option>
                              <option value="endocrinology">Endocrinology</option>
                              <option value="ent">ENT</option>
                              <option value="general_physician">General Physician</option>
                              <option value="urology">Urology</option>
                              <option value="psychiatry">Psychiatry</option>
                              <option value="pediatrics">Pediatrics</option>
                              <option value="oncology">Oncology</option>
                            </select>

                            <button type="submit" name="submit" value="submit"> Search </button>


                            </form>
                          </a>

                        
			
					</div>




<div class="content">
				<?php 
					



//specialty 

				if (isset($_POST['submit'])) {


					        		$doc_specialty=$_POST['doc_specialty'];


					                $query = "SELECT * FROM doc_signup WHERE specialty= '$doc_specialty'";
									$select_posts = mysqli_query($db,$query);

										while ($row = mysqli_fetch_assoc($select_posts)){
											$first_name = $row['first_name'];
											$last_name = $row['last_name'];
											$designation = $row['designation'];
											$specialty = $row['specialty'];
											$professional_statement = $row['professional_statement'];
											$img=$row['profile_img'];


										echo "
											<div class='inner_content'>
												<div><img src='$img' class='imgs'></div>
												<div>{$first_name}  {$last_name}
													<br> {$designation}
													<br>{$specialty}
													<br>{$professional_statement}
													<br><br>
													<button type='button' class='btn btn-light'><a href='doc_appointment.php'><b>Request Appointment</b></a></button>
												</div>
											</div>
										";
										}

									}

									else{

											$query = "SELECT * FROM doc_signup";
										$select_posts = mysqli_query($db,$query);

										while ($row = mysqli_fetch_assoc($select_posts)){
											$first_name = $row['first_name'];
											$last_name = $row['last_name'];
											$designation = $row['designation'];
											$specialty = $row['specialty'];
											$professional_statement = $row['professional_statement'];
											$img=$row['profile_img'];

										echo "
											<div class='inner_content'>
												<div><img src='$img' class='imgs'></div>
												<div>{$first_name}  {$last_name}
													<br> {$designation}
													<br>{$specialty}
													<br>{$professional_statement}
													<br><br>
													<button type='button' class='btn btn-light'><a href='doc_appointment.php'><b>Request Appointment</b></a></button>
												</div>
											</div>
										";
									}



									}




        ?>


			</div>

				
</div>
			


			<br><br><br>
	</body>



</html>
<link rel="stylesheet" type="text/css" href="doc_list.css">






<?php include "footer.php" ?>