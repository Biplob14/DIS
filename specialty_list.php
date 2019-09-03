<?php include"header.php" ?>

<div>
<table class="table table-hover table-striped">

    <thead>

    <th>Index</th>
    <th>User ID</th>  
    <th>Name</th>
    <th>Contact</th>
    <th>Gender</th>

    </thead>

    <tbody>
        <?php 

        	$doc_specialty=$_POST['doc_specialty'];


                $query = "SELECT * FROM doc_signup WHERE specialty= '$doc_specialty'";
				$select_posts = mysqli_query($db,$query);

					while ($row = mysqli_fetch_assoc($select_posts)){
						$first_name = $row['first_name'];
						$last_name = $row['last_name'];
						$designation = $row['designation'];
						$specialty = $row['specialty'];
						$professional_statement = $row['professional_statement'];

						$img=$row['profile_img']

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




        ?>

    </tbody>

</table>
</div>





<?php include "footer.php" ?>