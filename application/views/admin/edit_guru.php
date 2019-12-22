<h1 class="text-center">EDIT GURU</h1>
<br>
<form enctype="multipart/form-data" action="<?php echo base_url('StaffController/edits_guru') ?>" method="post">
	<div class="form-group">
		<label>Masukan nama guru</label>
		<input type="hidden" name="id" value="<?php echo $guru['id_guru'] ?>">
		<input type="text" name="nama" class="form-control" value="<?php echo $guru['nama_guru'] ?>">
	</div>
	<div class="form-group">
		<label>Masukan Kelas guru</label>
		<select name="kelas" class="form-control">
			<option value="<?php echo $guru['id_kelas'] ?>"><?php echo $guru['nama_kelas'] ?></option>
			<?php foreach ($kelas as $k): ?>
				<option value="<?php echo $k['id_kelas'] ?>"><?php echo $k['nama_kelas'] ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label>Masukan Pelajaran guru</label>
		<select name="pelajaran" class="form-control">
			<option value="<?php echo $guru['id_pelajaran'] ?>"><?php echo $guru['nama_pelajaran'] ?></option>
			<?php foreach ($pelajaran as $p): ?>
				<option value="<?php echo $p['id_pelajaran'] ?>"><?php echo $p['nama_pelajaran'] ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label>Masukan Nidn guru</label>
		<input type="number" name="nidn" class="form-control" value="<?php echo $guru['nidn_guru'] ?>" >
	</div>
	<div class="form-group">
		<label>Masukan Tahun Masuk guru</label>
		<input type="number" name="tahun" class="form-control" value="<?php echo $guru['thn_guru'] ?>" >
	</div>
	<div class="form-group">
		<label>Masukan Alamat guru</label>
		<input type="text" name="alamat" class="form-control" value="<?php echo $guru['alamat_guru'] ?>" >
	</div>
	<div class="form-group">
		<img style="width: 200px" src="<?php echo base_url() ?>asset/image/<?php echo $guru['foto_guru'] ?>"><br>
		<label>Masukan Foto guru</label>
		<input type="file" name="foto" class="form-control">
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>