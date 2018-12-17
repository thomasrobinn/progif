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

				
				
				$db = pg_connect('host=ec2-54-235-193-0.compute-1.amazonaws.com port=5432 dbname=d210535v4jki1h user=btrrkcveeaiskz password=c61ed37634390f1e379c94af8a0609403294ae5b6d66612986a557cc7812424a');
				if (!$db){
					echo "Error : Unable to open database \n";
				}

		if ($_POST['NIM'] == NULL) //apabila pada search bar nim tidak diisi apapun
		{
			echo "Please Insert NIM";
		}
		else { //apabila pada search bar nim diisi dengan  nim
		$sql = "SELECT * FROM NIM WHERE nim = ". $_POST['NIM']; //query disimpan kedalam satu variabel untuk kemudahan
		$ret = pg_query($db,$sql);
		$row = pg_fetch_assoc($ret); //mengambil hasil data kemudian dimasukan kedalam variabel row
		$nim = $row['nim']; //set nim dengan NIM
		$nama = $row['nama']; //set nama dengan NAMA
		$email = $row['email']; // set email dengan EMAIL
		$angkatan = $row['angkatan']; // set angkatan dengan ANGKATAN
		$jurusan = $row['jurusan']; // set jurusan dengan JURUSAN

	
		echo '<img height="500" width="300" src="data:image;base64,'.base64_encode($row['gambar']).'">' , "<br>";	//print gambar yang berada dari database dengan base64			
		}
	//pg_close($db); //menutup koneksi
	$sql = NULL; //mereset query menjadi null
	?>
	<br>
	<div align="center">
		<?php if ( $_POST['NIM'] != NULL) : ?>
	<div class="col-md-4">
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
			</table>
			</div>
			<?php endif; ?>
			</div>
			<br>
	<a href="index.php" class="btn btn-primary">Back</a>
	</form>
	</body>
</html>
