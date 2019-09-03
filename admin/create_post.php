
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
         Post Creation
        <small>Dashboard</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <i class="fa fa-dashboard"></i>  <a href="dashboard.php"> Post</a>
        </li>
        <li class="active">
            <i class="fa fa-file"></i> Admin Panel
        </li>
    </ol>

    <!-- Include your text and Page Here -->
    	

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
            <label >Select </label>
              <!-- <select class="form-control" name="restaurant_name">
                <option value="dominos" name="">Dominos</option>
                <option value="pizzaburg" name="">Pizza Burg</option>
                <option value="hotdoggy" name="">Hotdoggy</option>
                <option value="cake bean" name="">Cake Bean</option>
                <option value="pasta state" name="">Pasta State</option>
                <option value="doi fuchka" name="">Doi Fuchka</option> -->
              </select>
            
          </div>

	<div class="form-group">
		<label for="title">Doctor Name</label>
		<input type="text" class="form-control" name="food_name">
	</div>

<!-- 	<div class="form-group">
		<label for="post_category">Food Category</label>
		<input type="text" class="form-control" name="post_cat_id">
	</div> -->

	<div class="form-group">
		<label for="title">Fees</label>
		<input type="text" class="form-control" name="food_price">
	</div>

	<div class="form-group">
		<label for="title">Doctor Image</label>
		<input type="file" name="food_image">
	</div>


	<div class="form-group">
		<label for="post_content">Speciaty</label>
		<textarea class="form-control" name="food_offer" id="" cols="30" rows="2"></textarea>
	</div>

	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="submit" value="submit">
	</div>
	


</form>



    </div>
    <!-- /#wrapper -->





<!-- Database -->



 <?php include "admin_footer.php" ?>