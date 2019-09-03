<?php include "db_connection.php" ?>


<?php 
if (isset($_POST['submit'])) {
	
//insert Data
$patient_name = $_POST['patient_name'];
$contact_no = $_POST['contact_no'];
$patient_address = $_POST['patient_address'];
$patient_age = $_POST['patient_age'];
$patient_gender = $_POST['patient_gender'];
$appointment_date = $_POST['appointment_date'];


$insert = "";
//email check


 $insert = "INSERT INTO appointment (patient_name, contact_no, patient_address,patient_age, patient_gender, appointment_date ) VALUES ('sabbir','$contact_no','$patient_address','$patient_age', '$patient_gender','$appointment_date')";
 $results = mysqli_query($db, $insert);
 var_dump($insert);
           if ($results) {
             // echo 'Saved!';
             header("Location:appointment_saved.php");
           }else{
            echo mysqli_error($db);
            echo "appointment save Error!";
           }

//get value from database
// $sql = "SELECT * FROM signup";

// $result = mysqli_query($db, $sql);

// if(mysqli_num_rows($result) > 0){
// 	while($row = mysqli_fetch_assoc($result)) {
// 		echo "First Name: " .$row["first_name"] ."</br>";
// 	}
// }
}
mysqli_close($db);









 



 ?>