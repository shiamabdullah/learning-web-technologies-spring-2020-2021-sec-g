<?php
$conn	= mysqli_connect('localhost', 'root', '', 'users');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}	if(!isset($_SESSION['flag'])){
		header('location: login.html');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
</head>
<body>