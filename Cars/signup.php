<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="stylesheet.css"> 
		<title>Cars</title>
	</head>
	<body>
		<p class = "right"><a class="right" href="login.html" alt="Log in">Click Here to Log In </a></p>
		<center><h1>Information about Cars</h1></center>
		<?php
			$username = trim($_POST['username']);
			$email = trim($_POST['email']);
			$pass = crypt(trim($_POST['password']), "abc");
			$verify = crypt(trim($_POST['verify']), "abc");

			if ($pass !== $verify) {
				echo "Passwords do not match, ";
				echo "<a href=\"signup.html\" alt=\"Sign Up\">click here try again</a>";
			} else {
				$host = "localhost";
				$user = "dbuser";
				$dbpassword = "goodbyeWorld";
				$database = "cars";
				$table = "login";

				$db = connectToDB($host, $user, $dbpassword, $database);
				if (checkUsernameExist($db, $table, $username)) {
					echo "Username already exists in the database, ";
					echo "<a href=\"signup.html\" alt=\"Sign Up\">click here try again</a>";
				} else {
					$sqlQuery = sprintf("insert into $table (username, email, password) values ('%s', '%s', '%s')", $username, $email, $pass);
					$result = mysqli_query($db, $sqlQuery);
					if (!$result) {
						echo "Inserting records failed.".mysqli_error($db);
					} else {
						echo "You have successfully signed up!";
					}

					mysqli_close($db);
				}
			}

			function checkUsernameExist($db, $table, $username) {
				$sqlQuery = sprintf("select * from %s where username=\"%s\"", $table, $username);
				$result = mysqli_query($db, $sqlQuery);

				if ($result) {
					$numberOfRows = mysqli_num_rows($result);
			 	 	if ($numberOfRows == 0) {
						return false;
					} else {
						return true;
					}
				}  else {
					echo "Retrieving records failed.".mysqli_error($db);
				}
				return true;				//Doesn't try to put into database.
			}

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