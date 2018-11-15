<?php
    require_once "config.php"; //membutuhkan oauth google yang berisi client id , client secret id dan uri yang berada pada google

	if (isset($_SESSION['access_token'])) { // jika access token tersedia
		header('Location: index.php'); //pindah ke index.php
		exit();
	}

	$loginURL = $gClient->createAuthUrl(); //menghasilkan auth url
?>

<html>
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport"
     content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In With Google</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 10px">
        <div class="row justify-content-center">
            <div class="col-md-6 col-offset-3" align="center">
                <img src="images/20181113170904.jpg" height="300" width="400" ><br><br>
				<a><font size="10">NIM FINDER</font></a><br>
				<a><font size="6">Easier With Google Login !!</font></a>
                <form>	
						<img src="images/a.jpg" height="50" width="50" >
						<input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In With Google" class="btn btn-danger">
                </form>

            </div>
        </div>
        <a><font size="2" >II3160 Integrative Programming</font></a><br>
        <a><font size="2" >Thomas Robin (18216032)</font></a><br>
    </div>

</body>
</html>
