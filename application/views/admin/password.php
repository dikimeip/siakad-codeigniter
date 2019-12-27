<h1 class="text-center">GANTI PASSWORD</h1>
<br>
<?php if (validation_errors()): ?>
	<div class="alert alert-info">
		<p><?php echo alidation_error() ?></p>
	</div>
<?php endif ?>
<form enctype="multipart/form-data" action="<?php echo base_url('StaffController/') ?>" method="post">
	<div class="form-group">
		<label>Masukan Password</label>
		<input class="form-control" type="text" name="pswd1">
	</div>
	<div class="form-group">
		<label>Ulangi Password</label>
		<input class="form-control" type="text" name="pswd2">
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>