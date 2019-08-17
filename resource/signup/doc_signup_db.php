<!-- doctor signup database -->

<?php include "db_connection.php" ?>


<?php 

if (isset($_POST['submit'])) {
	
//insert Data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$designation = $_POST['designation'];
$specialty = $_POST['specialty'];
$bmdc_reg_no = $_POST['bmdc_reg_no'];
$mobile_no = $_POST['mobile_no'];
$password = $_POST['password'];
$password_2 = $_POST['password_2'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$professional_statement = $_POST['professional_statement'];
$insert = "";
//email check
if($password == $password_2){
$sql_e = "SELECT * FROM doc_signup WHERE email='$email'";
$res_e = mysqli_query($db, $sql_e);
if(mysqli_num_rows($res_e) > 0){
  	  echo "Sorry... email already taken"; 	
  	}else{
  			$password = md5($password);
           $insert = "INSERT INTO doc_signup (first_name, last_name, designation, specialty, bmdc_reg_no, mobile_no,email, password, gender, professional_statement ) VALUES ('$first_name','$last_name','$designation', '$specialty', '$bmdc_reg_no', '$mobile_no','$email', '$password','$gender', '$professional_statement')";
           $results = mysqli_query($db, $insert);
           var_dump($insert);
           if ($results) {
             echo 'Saved!';
           }else{
            echo mysqli_error($db);
            echo "Not saved!";
           }
           
           exit();
       }
}else{
	echo "Error: your password didn't match";
}





if (mysqli_multi_query($db, $insert)) {

	echo "record created";
	
}else{

	echo "error: ". $insert. mysqli_error($db);
}


}

mysqli_close($db);


 ?>