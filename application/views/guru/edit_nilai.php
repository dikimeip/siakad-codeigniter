<h1 class="text-center">EDIT NILAI</h1>
<br>
<form action="<?php echo base_url('GuruController/do_ubah_nilai') ?>" method="post">
	<div class="form-group">
		<label>Nim Siswa</label>
		<input type="text" class="form-control" name="nama" disabled="" value="<?php echo $siswa['nim_siswa'] ?>" >
		<input type="hidden" class="form-control" name="id"  value="<?php echo $siswa['id_nilai'] ?>" >

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
		<input type="number" class="form-control" name="nilai" value="<?php echo $siswa['nilai'] ?>" >
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>