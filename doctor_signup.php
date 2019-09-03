<?php include "header.php" ?>

    <div class="container">

    <form class="well form-horizontal" action="doc_signup_db.php" method="post" role="form"  id="contact_form" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Registration Form</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="First Name" class="form-control"  type="text" required >
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Last Name" class="form-control"  type="text" required>
    </div>
  </div>
</div>


<!-- title/designation -->
  <div class="form-group">
  <label class="col-md-4 control-label">Title/Designation</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-star"></i></span>
  <input  name="designation" placeholder="Title/Designation" class="form-control"  type="text" required>
    </div>
  </div>
</div>

  <!-- gender -->
    <div class="form-group"> 
  <label class="col-md-4 control-label">Gender</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="gender" class="form-control selectpicker" required>
      <option>Gender</option>
      <option value="m">Male</option>
      <option value="f">Female</option>
    </select>
  </div>
</div>
</div>

  <div class="form-group"> 
  <label class="col-md-4 control-label">Your Specialty</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="specialty" class="form-control selectpicker" required>
      <option value="">Specialty</option>
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
  </div>
</div>
</div>
  
  <!-- BMDC registration no. -->
        <div class="form-group">
          <label class="col-md-4 control-label">BMDC Registration No.</label>  
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
              <input name="bmdc_reg_no" placeholder="BMDC Registration No." class="form-control"  type="text" required>
            </div>
          </div>
        </div>



        <!-- hospital name -->
        <div class="form-group">
          <label class="col-md-4 control-label">Hospital Name</label>  
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
              <input name="hospital_name" placeholder="Hospital You work in" class="form-control"  type="text" required>
            </div>
          </div>
        </div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-eye-close"></i></span>
  <input name="password" placeholder="Password" class="form-control"  type="password" required >
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Confirm Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-eye-close"></i></span>
  <input name="password_2" placeholder="Confirm Password" class="form-control"  type="password" required >
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text" required>
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Contact No.</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="mobile_no" placeholder="Mobile/Telephone no." class="form-control" type="text" required>
    </div>
  </div>
</div>


  <div class="form-group">
      <label class="col-md-4 control-label">Description (Professional Statement)</label>  
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
      <textarea class="form-control" rows="5" id="comment" name="professional_statement" required></textarea>
    </div>
    </div>
  </div>

<!-- profile image -->
  <div class="form-group">
    <label class="col-md-4 control-label">Upload Image:</label>
      <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
          <input type="file" class="custom-file-input" id="customFile" name="file" />
        </div>
      </div>
    

  </div>
<!-- Select Basic -->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name="submit" value="submit" class="btn btn-info" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>

  

</fieldset>
</form>
</div>
    
	<?php include "footer.php" ?>
    </div><!-- /.container -->

    <!-- <script type="text/javascript" src="doctor_signup.js"></script> -->