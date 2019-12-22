<h1 class="text-center">Tambah Guru</h1>
<?php if (validation_errors()): ?>
	<div class="alert alert-danger">
		<p><?php echo validation_errors() ?></p>
	</div>
<?php endif ?>
<br>
<form enctype="multipart/form-data" action="<?php echo base_url('StaffController/post_guru') ?>" method="post">
	<div class="form-group">
		<label>Masukan nama guru</label>
		<input type="text" name="nama" class="form-control" value="<?php echo set_value('nama') ?>">
	</div>
	<div class="form-group">
		<label>Masukan Kelas guru</label>
		<select name="kelas" class="form-control">
			<?php foreach ($kelas as $k): ?>
				<option value="<?php echo $k['id_kelas'] ?>"><?php echo $k['nama_kelas'] ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label>Masukan Pelajaran guru</label>
		<select name="pelajaran" class="form-control">
			<?php foreach ($pelajaran as $p): ?>
				<option value="<?php echo $p['id_pelajaran'] ?>"><?php echo $p['nama_pelajaran'] ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label>Masukan Nidn guru</label>
		<input type="number" name="nidn" class="form-control" value="<?php echo set_value('nidn') ?>" >
	</div>
	<div class="form-group">
		<label>Masukan Tahun Masuk guru</label>
		<input type="number" name="tahun" class="form-control" value="<?php echo set_value('tahun') ?>" >
	</div>
	<div class="form-group">
		<label>Masukan Alamat guru</label>
		<input type="text" name="alamat" class="form-control" value="<?php echo set_value('alamat') ?>" >
	</div>
	<div class="form-group">
		<label>Masukan Foto guru</label>
		<input type="file" name="foto" class="form-control">
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>