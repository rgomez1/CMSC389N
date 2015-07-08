<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="stylesheet.css"> 
		<title>Cars</title>
	</head>
	<body>
		<center><h1>Information about Cars</h1></center>
		<?php
		$username = trim($_POST['username']);
		$pass = crypt(trim($_POST['password']), "abc");

		$host = "localhost";
		$user = "dbuser";
		$dbpassword = "goodbyeWorld";
		$database = "cars";
		$table = "login";
		$exist = false;

		$db = connectToDB($host, $user, $dbpassword, $database);
		$sqlQuery = sprintf("select * from %s", $table);
		$result = mysqli_query($db, $sqlQuery);
		if ($result) {
			$numberOfRows = mysqli_num_rows($result);
	 	 	if ($numberOfRows == 0) {
				echo "<h2>No entries exists in the table</h2>";
			} else {
				while ($recordArray = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					$usernamedb = $recordArray['username'];
					$passworddb = $recordArray['password'];
					if ($username === $usernamedb && $passworddb === $pass) {
						$exist = true;
					}
	     		}
			}
			mysqli_free_result($result);
		}  else {
			echo "Retrieving records failed.".mysqli_error($db);
		}
		
		if ($exist) {
			echo "You have successfully in logged! ";
			session_start();
			$_SESSION['username'] = $username;
			echo "<a href=\"main.php\" alt=\"Return\">Return to Main menu</a>";
		} else {
			echo "Username and password do not match, \n";
			echo "<a href=\"login.html\" alt=\"Log In\">click here try again</a>";
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
