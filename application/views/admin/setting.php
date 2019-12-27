<h1 class="text-center">SETTING AKUN</h1>
<br>
<form enctype="multipart/form-data" action="<?php echo base_url('StaffController/edit_admin') ?>" method="post">
	<div class="form-group">
		<label>Nama Tu</label>
		<input class="form-control" type="text" value="<?php echo $admin['nama_tu'] ?>" name="nama">
	</div>
	<div class="form-group">
		<label>Username</label>
		<input class="form-control" type="text" value="<?php echo $admin['username_tu'] ?>" name="username">
	</div>
	<div class="form-group">
		<label>Foto</label>
		<img style="width: 200px" src="<?php echo base_url() ?>asset/image/<?php echo $admin['foto_tu'] ?>"><br>
		<input class="form-control" type="file" name="foto">
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>