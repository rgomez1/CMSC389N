<?php
	$host = "localhost";
	$user = "dbuser";
	$password = "goodbyeWorld";
	$database = "cars";
	$table = "specifications";
	

	function connectToDB($host, $user, $password, $database) {
		$db_connection = new mysqli($host, $user, $password, $database);
		if ($db_connection->connect_error) {
			die($db_connection->connect_error);
		}
		return $db_connection;
	}

	function sanitize_string($db_connection, $string) {
		if (get_magic_quotes_gpc()) {
			$string = stripslashes($string);
		}
		return htmlentities($db_connection->real_escape_string($string));
	}

	function disconnectFromDB($db_connection) {
		$db_connection->close();
	}
?>