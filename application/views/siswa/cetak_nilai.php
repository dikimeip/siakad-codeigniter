<!DOCTYPE html>
<html>
<head>
	<title>CETAK</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/css/bootstrap.min.css">
</head>
<body onload="window.print()">	
	<div class="container">
		<h1 class="text-center">SMK CINTA DAMAI MOJOKERTO</h1>
		<br>
		<div class="row">
			<div class="col-md-6">
				<p><b>NAMA SISWA :</b> <?php echo $siswa['nama_siswa'] ?> </p>
				<p><b>NIM SISWA :</b> <?php echo $siswa['nim_siswa'] ?> </p>
			</div>
			<div class="col-md-6">
				<p><b>ANGKATAN :</b> <?php echo $siswa['thn_siswa'] ?> </p>
				<p><b>KELAS :</b> <?php echo $siswa['nama_kelas'] ?> </p>
			</div>
		</div>
	</div>
</body>
</html>