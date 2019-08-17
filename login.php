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
		<form>
			<h2>Log in</h2>
			<input type="text" name="username" placeholder="Username" class="uname">
			<input type="password" name="pass" placeholder="Password" class="pass">
			<a href="" class="login"><input type="button" value="Log In"></a>
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