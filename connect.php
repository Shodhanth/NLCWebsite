<?php
	error_reporting(E_ALL);
	$user = 'root';
	$pwd = '';
	$host = 'localhost';
	$db_name = 'nlc';
	$conn = new mysqli($host, $user, $pwd, $db_name);
	echo "Connected";
?>