<h1 class="text-center">EDIT SISWA</h1>
<br>
<form action="<?php echo base_url('SiswaController/edit_siswa') ?>" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Siswa</label>
		<input required="" type="text" name="nama" class="form-control" value="<?php echo $user['nama_siswa'] ?>" >
	</div>
	<div class="form-group">
		<label>Alamat Siswa</label>
		<input required=""  type="text" name="alamat" class="form-control" value="<?php echo $user['alamat_siswa'] ?>" >
	</div>
	<div class="form-group">
		<label>Foto Guru</label>
		<img style="width: 100px" src="<?php echo base_url() ?>asset/image/<?php echo $user['foto_siswa'] ?>"><br>
		<input type="file" name="foto" class="form-control">
	</div>
	<input type="submit" name="foto" class="btn btn-info">
</form>