<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/cs"s href="stylesheet.css"> 
		<title>Cars</title>
	</head>
	<body>
		<p class = "right"><a class="right" href="login.html" alt="wow">Click Here to Log In </a></p>
		<center><h1>Information about Cars</h1></center>
		<?php
			$name = trim($_POST['name']);
			$email = trim($_POST['email']);
			$pass = crypt(trim($_POST['password']), "abc");
			$verify = crypt(trim($_POST['verify']), "abc");

			if ($pass !== $verify) {
				header("Location: invalid.html");
			} else {
				$host = "localhost";
				$user = "dbuser";
				$dbpassword = "goodbyeWorld";
				$database = "cars";
				$table = "login";

				$db = connectToDB($host, $user, $dbpassword, $database);
				$sqlQuery = sprintf("insert into $table (username, email, password) values ('%s', '%s', '%s')", $name, $email, $pass);
				$result = mysqli_query($db, $sqlQuery);
				if (!$result) {
					echo "Inserting records failed.".mysqli_error($db);
					echo "You have succesfully signed up!";
				}
			}

			mysqli_close($db);

			function connectToDB($host, $user, $password, $database) {
				$db = mysqli_connect($host, $user, $password, $database);
				if (mysqli_connect_errno()) {
					echo "Connect failed.\n".mysqli_connect_error();
					exit();
				}
				return $db;
			}
		?>		
	</body>
</html>