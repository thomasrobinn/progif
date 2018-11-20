<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php"; //menggunakan google api
	$gClient = new Google_Client();
	$gClient->setClientId("371924572190-cv4lltnuvpk9js4k1p012mpc5vrc7inn.apps.googleusercontent.com"); //set client id dari credentials di console.developers.google
	$gClient->setClientSecret("mfaUx4Tp6MA5izTgRcWcSwEg"); //set client secret dari credentials di console.developers.google
	$gClient->setApplicationName("NIM FINDER"); //set nama untuk redireksi saat login menggunakan google
	$gClient->setRedirectUri("http://localhost/Progif/g-callback.php"); //set lokasi file yang dituju setelah login berhasil
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile"); //mengambil informasi dari google berupada data pribadi user

?>
