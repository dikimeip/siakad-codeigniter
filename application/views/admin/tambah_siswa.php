<h1 class="text-center">TAMBAH SISWA</h1>
<?php if (validation_errors()): ?>
	<div class="alert alert-warning">
		<p><?php echo validation_errors() ?></p>
	</div>
<?php endif ?>
<form action="<?php echo base_url('StaffController/do_siswa') ?>" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Masukan Nim</label>
		<input type="text" name="nim" class="form-control" value="<?php echo set_value('nim') ?>">
	</div>
	<div class="form-group">
		<label>Masukan Nama</label>
		<input type="text" name="nama" class="form-control" value="<?php echo set_value('nama') ?>">
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
		<input type="text" name="tahun" class="form-control" value="<?php echo set_value('tahun') ?>">
	</div>
	<div class="form-group">
		<label>Masukan Alamat</label>
		<input type="text" name="alamat" class="form-control" value="<?php echo set_value('alamat') ?>">
	</div>
	<div class="form-group">
		<label>Masukan Foto</label>
		<input type="file" name="foto" class="form-control">
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>