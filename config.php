<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("371924572190-cv4lltnuvpk9js4k1p012mpc5vrc7inn.apps.googleusercontent.com");
	$gClient->setClientSecret("mfaUx4Tp6MA5izTgRcWcSwEg");
	$gClient->setApplicationName("NIM FINDER");
	$gClient->setRedirectUri("http://localhost/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
