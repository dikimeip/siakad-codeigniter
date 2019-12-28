<h1 class="text-center">GANTI PASSWORD</h1>
<br>
<?php if ($this->session->flashdata('success')): ?>
	<div class="alert alert-info">
		<p><?php echo $this->session->flashdata('success') ?></p>
	</div>
<?php endif ?>
<form enctype="multipart/form-data" action="<?php echo base_url('StaffController/edit_password') ?>" method="post">
	<div class="form-group">
		<label>Masukan Password</label>
		<input class="form-control" type="password" name="pswd1">
	</div>
	<div class="form-group">
		<label>Ulangi Password</label>
		<input class="form-control" type="password" name="pswd2">
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>