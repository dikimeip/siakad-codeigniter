<h1 class="text-center">EDIT NILAI</h1>
<br>
<form>
	<div class="form-group">
		<label>Nim Siswa</label>
		<input type="text" class="form-control" name="nama" disabled="" value="<?php echo $siswa['nim_siswa'] ?>" >
	</div>
	<div class="form-group">
		<label>Nama Siswa</label>
		<input type="text" class="form-control" name="nama" disabled="" value="<?php echo $siswa['nama_siswa'] ?>" >
	</div>
	<div class="form-group">
		<label>Pelajaran Siswa</label>
		<input type="text" class="form-control" name="nama" disabled="" value="<?php echo $siswa['nama_pelajaran'] ?>" >
	</div>
	<div class="form-group">
		<label>Nilai Siswa</label>
		<input type="number" class="form-control" name="nama" value="<?php echo $siswa['nilai'] ?>" >
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>