<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
	     content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<title>NIM SEARCH RESULT</title>
	</head>
	
	<body>
		<form align="center" style="margin-top: 100px">
	<?php
	// pengesetan atribut mysql kedalam variabel
	$servername = "localhost"; 
	$username = "thomasrobin";
	$password = "thomasr12";
	$dbname = "NIM";

		// membuat koneksi dengan mysql
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		// mengecek koneksi dengan mysql
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		
		if ($_POST['NIM'] == NULL) //apabila pada search bar nim tidak diisi apapun
		{
			echo "Please Insert NIM";
		}
		else { //apabila pada search bar nim diisi dengan  nim
		$sql = "SELECT * FROM NIM WHERE NIM = ". $_POST['NIM']; //query disimpan kedalam satu variabel untuk kemudahan
		$result = $conn->query($sql); //query data dari database
		$row = $result->fetch_assoc(); //mengambil hasil data kemudian dimasukan kedalam variabel row
		$nim = $row['NIM']; //set nim dengan NIM
		$nama = $row['NAMA']; //set nama dengan NAMA
		$email = $row['EMAIL']; // set email dengan EMAIL
		$angkatan = $row['ANGKATAN']; // set angkatan dengan ANGKATAN
		$jurusan = $row['JURUSAN']; // set jurusan dengan JURUSAN
		
		echo '<img height="500" width="300" src="data:image;base64,'.base64_encode($row['GAMBAR']).'">' , "<br>";	//print gambar yang berada dari database dengan base64			
		}
	$conn->close(); //menutup koneksi
	$sql = NULL; //mereset query menjadi null
	?>
	<br>
	<div class="col-md-3" style="margin-left: 700px">
	<table class="table table-hover table-bordered">
				<tbody>
					<tr>
						<td>NIM</td>
						<td><?php echo $nim ?></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td><?php echo $nama ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $email ?></td>
					</tr>
					<tr>
						<td>Angkatan</td>
						<td><?php echo $angkatan ?></td>
					</tr>
					<tr>
						<td>Jurusan</td>
						<td><?php echo $jurusan ?></td>
					</tr>
				</tbody>
			</table></div><br>
	<a href="index.php" class="btn btn-primary">Back</a>
	</form>
	</body>
</html>
