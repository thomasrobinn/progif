<?php
	require_once "config.php"; //membutuhkan oauth google yang berisi client id , client secret id dan uri yang berada pada google

	if (isset($_SESSION['access_token']))
		$gClient->setAccessToken($_SESSION['access_token']); //jika access token sudah tersedia
	else if (isset($_GET['code'])) { //jika mendapat authorization code
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']); //mengirim auth code untuk menerima access token
		$_SESSION['access_token'] = $token; //pengesetan access token
	} else {
		header('Location: login.php'); //memberikan http header kepada login.php
		exit();
	}

	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get(); //mengambil informasi pribadi dari user

	$_SESSION['id'] = $userData['id']; // mengambil informasi id user
	$_SESSION['email'] = $userData['email']; //mengambil informasi email user
	$_SESSION['gender'] = $userData['gender']; //mengambil informasi email user
	$_SESSION['picture'] = $userData['picture']; //mengambil informasi foto dari email yang user gunakan
	$_SESSION['familyName'] = $userData['familyName']; // mengambil nama belakang user
	$_SESSION['givenName'] = $userData['givenName']; // mengambil nama depan user

	header('Location: index.php'); //memberikan http header kepada index.php
	exit();
?>


