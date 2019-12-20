<h1 class="text-center">TAMBAH SISWA</h1>
<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Masukan Nim</label>
		<input type="text" name="nim" class="form-control">
	</div>
	<div class="form-group">
		<label>Masukan Nama</label>
		<input type="text" name="nama" class="form-control">
	</div>
	<div class="form-group">
		<label>Masukan Kelas</label>
		<select class="form-control" name="kelas">
			<?php foreach ($kelas as $k): ?>
				<option value="<?php echo $k['id_kelas'] ?>"><?php echo $k['nama_kelas'] ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label>Masukan Tahun Masuk</label>
		<input type="text" name="tahun" class="form-control">
	</div>
	<div class="form-group">
		<label>Masukan Alamat</label>
		<input type="text" name="alamat" class="form-control">
	</div>
	<div class="form-group">
		<label>Masukan Foto</label>
		<input type="file" name="foto" class="form-control">
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>