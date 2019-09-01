
<?php include "admin_header.php" ?>


    <div id="wrapper">

        <!-- Navigation -->
<?php include "admin_navigation.php" ?>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<?php include "admin_sidebar.php" ?>

<!-- Page Heading -->
<div class="row">
<div class="col-lg-12">
    <h1 class="page-header">
        All Doctors
        <small>Doctor Lists</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Doctors</a>
        </li>
        <li class="active">
            <i class="fa fa-file"></i> Admin
        </li>
    </ol>









<?php include_once "../db_connection.php"; ?>



                  <div>
                    <table class="table table-hover table-striped">

                    	<thead>

                        <th>Index</th>
                        <th>Doctor ID</th>  
                        <th>Doctor Name</th>
                        <th>Designation</th>
                        <th>Gender</th>
                        <th>Specialty</th>
                        <th>BMDC Regi No.</th>
                        <th>Contact</th>
                        

                        </thead>

                        <tbody>
 							<?php 
                        	        $query = "SELECT * FROM doc_signup";
        							$select_posts=mysqli_query($db,$query);

        							$r_index=1;


                      
                        	while ($row=mysqli_fetch_assoc($select_posts)) {
						        // $r_index = $row['id'];
						        $r_id = $row['id'];

						        $first_name = $row['first_name'];
						        $last_name = $row['last_name'];
                                $name = $first_name . ' '. $last_name;
						        $designation = $row['designation'];
						        $gender = $row['gender'];
						        $specialty= $row['specialty'];
                                $bmdc_reg_no= $row['bmdc_reg_no'];
                                $email= $row['email'];
                                $mobile_no= $row['mobile_no'];
                               

						        echo "<tr>";

						        echo "<td>{$r_index}</td>";
						        echo "<td>{$r_id}</td>";
						        echo "<td>{$name}</td>";

						        echo "<td>{$designation}</td>";
                                echo "<td>{$gender}</td>";
                                echo "<td>{$specialty}</td>";
                                echo "<td>{$bmdc_reg_no}</>";
						        echo "<td>{$mobile_no}</br>{$email}</td>";
						        // echo "<td>{$email}</td>";
						        // echo "<td>{$rating}*</td>";
						        echo "</tr>";

						        $r_index++;

						        }




  							?>

                        </tbody>
           
                    </table>
                </div>


<?php include "admin_footer.php" ?>
