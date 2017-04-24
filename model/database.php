<?php

	$dsn = 'mysql:host=sql.njit.edu;dbname=js829';
	$username = 'js829';
	$password = 'NhOG2kr3';

	try {
		$db = new PDO($dsn, $username, $password);
	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		include('../errors/database_error.php');
		exit();
	}
?>
