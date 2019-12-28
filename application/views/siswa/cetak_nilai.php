<!DOCTYPE html>
<html>
<head>
	<title>CETAK</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/css/bootstrap.min.css">
</head>
<body onload="window.print()">	
	<div class="container">
		<h1 class="text-center">SMK CINTA DAMAI MOJOKERTO</h1>
		<hr>
		<div class="row">
			<div class="col-md-4">
				<p><b>NAMA SISWA :</b> <?php echo $siswa['nama_siswa'] ?> </p>
				<p><b>NIM SISWA :</b> <?php echo $siswa['nim_siswa'] ?> </p>
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<p><b>ANGKATAN :</b> <?php echo $siswa['thn_siswa'] ?> </p>
				<p><b>KELAS :</b> <?php echo $siswa['nama_kelas'] ?> </p>
			</div>
		</div>
		<br>
		<table class="table table-hover">
			<tr>
				<th>NO</th>
				<th>NAMA PELAJARAN</th>
				<th>NAMA DOSEN</th>
				<th>JUMLAH PELAJARAN</th>
				<th>NILAI</th>
			</tr>
			<?php foreach ($nilai as $n): ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $n['nama_pelajaran'] ?></td>
					<td><?php echo $n['jam_pelajaran'] ?></td>
					<td><?php echo $n['nama_guru'] ?></td>
					<td><?php echo $n['nilai'] ?></td>
				</tr>
			<?php endforeach ?>
		</table>
		<?php echo date('Y-m-d') ?>
	</div>
</body>
</html>