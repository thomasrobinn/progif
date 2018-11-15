<?php
	session_start(); //start

	if (!isset($_SESSION['access_token'])) { //jika tidak memiliki access token
		header('Location: login.php'); //kembali ke login.php
		exit();
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<title>NIM FINDER</title>

</head>
<body>
<div class="container" style="margin-top: 100px">
	<div class="row">
		<div class="col-md-3">
			<img style="width: 90%;" src="<?php echo $_SESSION['picture'] ?>"><br><br>
		</div>

		<div class="col-md-9">
			<table class="table table-hover table-bordered">
				<tbody>
					<tr>
						<td>ID</td>
						<td><?php echo $_SESSION['id'] ?></td>
					</tr>
					<tr>
						<td>First Name</td>
						<td><?php echo $_SESSION['givenName'] ?></td>
					</tr>
					<tr>
						<td>Last Name</td>
						<td><?php echo $_SESSION['familyName'] ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $_SESSION['email'] ?></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td><?php echo $_SESSION['gender'] ?></td>
					</tr>
				</tbody>
			</table><br>
				<form action="retrieve.php" method="post">
					<a>Find Somebody Information based on NIM !</a><br>
					<div class="row" >
							<input type="form" width="100" length="100" placeholder=" Insert NIM Here !" class="form-inline" name="NIM">
							<input type="submit" value="Search NIM" style="margin-left: 10px">
					</div>
				</form>
		</div>
		<div class="row" style="margin-left: 10px">
			<a href="logout.php" class="btn btn-danger">Log-out</a>
		</div>
		
	</div>
</div>
</body>
</html>
