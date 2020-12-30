<?php
	$best = filter_var(trim($_POST['best']),
	FILTER_SANITIZE_STRING);
	
	$mysql = new mysqli('localhost','root','','clowns');
	
	
	$name = $_COOKIE['user'];
	
	
	$mysql->query("UPDATE `users` SET `best` = '$best' WHERE `name`='$name'");



	$lk = $best;
	
	setcookie('lk', $lk , time() + 3600, "/");
	
	$mysql->close();
	
	header('Location: /lk.php');
?>