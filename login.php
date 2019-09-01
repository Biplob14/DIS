<?php include "header.php" ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;" charset="utf-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
	<div class="signin">
		<form action="login_db.php" method="post" accept-charset="utf-8" role="form">
			<h2>Log in</h2>

			<input type="text" name="email" placeholder="Email" class="uname">
			<input type="password" name="password" placeholder="Password" class="pass">
			<button type="submit" value="Log In">Submit</button>

			<br><br>
			<div id="container">
				<a href="#" style="text-decoration: none;">Forgot Password</a>
			</div>
				<div class="no_account">Don't have account?</div>
				&nbsp;
				<a href="signup.php" class="signup">Sign Up</a>
		</form>

	</div>

</body>
<?php include "footer.php" ?>
</html>

