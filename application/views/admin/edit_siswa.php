<h1>EDIT SISWA</h1>
<br>
<form action="<?php echo base_url('StaffController/do_edit_siswa') ?>" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Masukan Nim</label>
		<input type="number" name="nim" class="form-control" value="<?php echo $siswa['nim_siswa'] ?>">
		<input type="hidden" name="id" class="form-control" value="<?php echo $siswa['id_siswa'] ?>">
	</div>
	<div class="form-group">
		<label>Masukan Nama</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $siswa['nama_siswa'] ?>">
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
		<input type="number" name="tahun" class="form-control" value="<?php echo $siswa['thn_siswa'] ?>">
	</div>
	<div class="form-group">
		<label>Masukan Alamat</label>
		<input type="text" name="alamat" class="form-control" value="<?php echo $siswa['alamat_siswa'] ?>">
	</div>
	<div class="form-group">
		<label>Masukan Foto</label>
		<input type="file" name="foto" class="form-control">
	</div>
	<img style="width: 50px" src="<?php echo base_url() ?>asset/image/<?php echo $siswa['foto_siswa'] ?>"><br><hr>
	<input type="submit" value="UBAH" class="btn btn-info">
</form>