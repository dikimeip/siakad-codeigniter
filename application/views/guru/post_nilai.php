<h1 class="text-center">TAMBAH NILAI</h1>
<br>
<form action="<?php echo base_url('GuruController/post_nilai') ?>" method="post">
	<div class="form-group">
		<label>NIM SISWA</label>
		<input type="text" name="nama" class="form-control" disabled="" value="<?php echo $siswa['nim_siswa'] ?>">
		<input type="hidden" name="id" class="form-control" value="<?php echo $siswa['id_siswa'] ?>">
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
		<input type="number" name="nilai" class="form-control" required="">
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>