<h1 class="text-center">UBAH PASSWORD</h1>
<?php if ($this->session->flashdata('success')): ?>
	<div class="alert alert-info">
		<p><?php echo $this->session->flashdata('success') ?></p>
	</div>
<?php endif ?>
<br>
<form action="<?php echo base_url('SiswaController/edit_password') ?>" method="post">
	<div class="form-group">
		<label>Masukan Password</label>
		<input class="form-control" type="password" name="pas1">
	</div>
	<div class="form-group">
		<label>Ulangi Password</label>
		<input class="form-control" type="password" name="pas2">
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>