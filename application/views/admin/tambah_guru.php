<h1 class="text-center">Tambah Guru</h1>
<br>
<form>
	<div class="form-group">
		<label>Masukan nama guru</label>
		<input type="text" name="nama" class="form-control">
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
		<input type="number" name="nidn" class="form-control">
	</div>
	<div class="form-group">
		<label>Masukan Tahun Masuk guru</label>
		<input type="number" name="tahun" class="form-control">
	</div>
	<div class="form-group">
		<label>Masukan Alamat guru</label>
		<input type="text" name="alamat" class="form-control">
	</div>
	<div class="form-group">
		<label>Masukan Foto guru</label>
		<input type="file" name="foto" class="form-control">
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>