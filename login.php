<?php include "header.php" ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;" charset="utf-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
	<div class="container">
	<div class="signin">
		<form action="login_db.php" method="post" accept-charset="utf-8" role="form">
			<h2>Log in</h2>

			<input type="text" name="email" placeholder="Email" class="uname">
			<input type="password" name="password" placeholder="Password" class="pass">
			<br><br>
			<div class="rdo">

					<label class="radio-inline">
					      <label>User &nbsp&nbsp&nbsp</label><input type="radio" name="log_type" value="user">
					    </label><br>

					    <label class="radio-inline">
					      <label>Doctor</label><input type="radio" name="log_type" value="doc">
					    </label>

            </div>








			<button type="submit" value="login" name="submit">Submit</button>

			<br><br>
			<div id="container">
				<a href="#" style="text-decoration: none;">Forgot Password?</a>
			</div>
				<div class="no_account">Don't have account?</div>
				&nbsp;
				<a href="signup.php" class="signup">Sign Up</a>
		</form>

	</div>
	</div>

</body>



<style type="text/css">
	.signin{
		margin-bottom:  50px;
	}
</style>



<?php include "footer.php" ?>
</html>

