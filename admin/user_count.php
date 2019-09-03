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
        Admin
        <small>Dashboard</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="active">
            <i class="fa fa-file"></i> Admin Panel
        </li>
    </ol>

    <!-- Include your text and Page Here -->

<h1 style="text-align: center;">Here will be User Count charts</h1>



<?php include_once "../db_connection.php";  ?>


<h3>Total User Count Table</h3>
    <div>
            <table class="table table-hover table-striped">

                        <thead>

                        <th>Users</th>



                        </thead>

                        <tbody>
                            <?php 


                            // User Count

                            $sql="SELECT count(id) AS total FROM signup";
                            $result=mysqli_query($db,$sql);
                            $values=mysqli_fetch_assoc($result);
                            $user_count=$values['total'];







                                echo "<tr>";
                                echo "<td>{$user_count}</td>";

                                echo "</tr>";



                            ?>

                        </tbody>
           
                    </table>
    </div>




    </div>
    <!-- /#wrapper -->


<?php include "admin_footer.php" ?>