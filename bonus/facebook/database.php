<?php
	$hostname="localhost";
	$port="3306";
	$databaseName="facebook";
	$databaseUsername="root";
	$databasePassword="";
	$connect=mysqli_connect(
		$hostname,
		$databaseUsername,
		$databasePassword,
		$databaseName
	);
	mysqli_set_charset($connect, 'UTF8');
?>