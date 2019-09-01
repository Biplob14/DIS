<?php include "header.php" ?>

<div class="container">
<form >
  <div class="form-row">
    <div class="form-group">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Patient Name">
    </div>
    <div class="form-group">
      <label for="inputPassword4">Contact No.</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Contact Number">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Provide your address">

    <div class="form-group">
      <label for="inputPassword4">Age</label>
      <input type="number" class="form-control" id="inputPassword4" placeholder="Patient's age">
    </div>
    <div class="form-group">

    				<label>Gender : </label>                    <label class="radio-inline">
                        <input type="radio" name="gender" value="M" id=male required/>                        Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="F" id=female />                        Female
                    </label>
                    	<br>
    </div>
    <div class="form-group">

                    <label>Have you previously attended our facility?</label>                    <label class="radio-inline">
                        <input type="radio" name="gender" value="M" id=male required/>                        Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="pre_attend" value="y" id="n"/>                        No
                    </label>
    </div>
                    <br><br><br>
  <button type="submit" class="btn btn-lg btn-primary btn-block signup-btn">Request Appointment</button>
</form>













</div>

<?php include "footer.php" ?>