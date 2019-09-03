<?php include "header.php" ?>

<div class="container">
        <form action="appointment_db.php" method="post">
          <div class="form-row">
            <div class="form-group">
              <label for="inputEmail4">Name</label>
              <input name="patient_name" type="text" class="form-control" id="inputEmail4" placeholder="Patient Name">
            </div>
            <div class="form-group">
              <label for="inputPassword4">Contact No.</label>
              <input  name="contact_no" type="text" class="form-control" id="inputPassword4" placeholder="Contact Number">
            </div>
          </div>

          <div class="form-group">
            <label for="inputAddress">Address</label>
            <input name="patient_address" type="text" class="form-control" id="inputAddress" placeholder="Provide your address">
          </div>

            <div class="form-group">
              <label for="inputPassword4">Age</label>
              <input name="patient_age" type="number" class="form-control" id="inputPassword4" placeholder="Patient's age">
            </div>
            
            <div class="form-group">

            				<label>Gender :&nbsp &nbsp &nbsp  </label>                    <label class="radio-inline">
                                <input type="radio" name="patient_gender" value="M" id=male required/>                        Male
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="patient_gender" value="F" id=female />                        Female
                            </label>
                            	<br>
            </div>
            
            <div class="form-group">
              <label for="inputPassword4">Appointment Date: &nbsp &nbsp </label>
              <input type="date" name="appointment_date">
            </div>


                            <br><br><br>
          <button type="submit" name="submit" value="submit" class="btn btn-lg btn-primary btn-block signup-btn">Request Appointment</button> <br><br><br><br><br><br><br> 
        </form>













</div>

<?php include "footer.php" ?>