<?php
	require_once "config.php";//membutuhkan oauth google yang berisi client id , client secret id dan uri yang berada pada google
	unset($_SESSION['access_token']); //token dinon aktifkan
	$gClient->revokeToken(); //menghancurkan token
	session_destroy();
	header('Location: login.php'); //menuju login.php
	exit();
?>
