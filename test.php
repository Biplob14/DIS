
<?php session_start(); ?>

<?php 
echo $_SESSION['name'];


if (isset($_SESSION['email'])) {
	echo "logged in";

}
else
{
	echo "we are fucked";
}


 ?>