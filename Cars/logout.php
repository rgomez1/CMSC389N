<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="stylesheet.css"> 
		<title>Cars</title>
	</head>
	<body>
		<p class = "right"><a class="right" href="signup.html" alt="Sign Up">Sign Up</a>
		<a class="right" href="login.html" alt="Log In">Log In</a></p>
		<center><h1>Information about Cars</h1></center>
		<?php
			session_start();
			$_SESSION['username'] = "";
		?>
		<p>You have successfully logged out! </p>
		<a href="main.php" alt="Return">Return to main menu.</a>
	</body>
</html>