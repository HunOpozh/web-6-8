<?php
	setcookie('user', $user ['name'], time() - 3600, "/");
	setcookie('lk', $lk , time() - 3600, "/");
	header('Location: /index.php');
?>