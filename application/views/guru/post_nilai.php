<h1 class="text-center">TAMBAH NILAI</h1>
<br>
<form>
	<div class="form-group">
		<label>NIM SISWA</label>
		<input type="text" name="nama" class="form-control" disabled="" value="<?php echo $siswa['nim_siswa'] ?>">
	</div>
	<div class="form-group">
		<label>NAMA SISWA</label>
		<input type="text" name="nama" class="form-control" disabled="" value="<?php echo $siswa['nama_siswa'] ?>">
	</div>
	<div class="form-group">
		<label>KELAS SISWA</label>
		<input type="text" name="nama" class="form-control" disabled="" value="<?php echo $siswa['nama_kelas'] ?>">
	</div>
	<div class="form-group">
		<label>PELAJARAN SISWA</label>
		<input type="text" name="nama" class="form-control" disabled="" value="<?php echo $matkul['nama_pelajaran'] ?>">
	</div>
	<div class="form-group">
		<label>NILAI SISWA</label>
		<input type="number" name="nilai" class="form-control">
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>