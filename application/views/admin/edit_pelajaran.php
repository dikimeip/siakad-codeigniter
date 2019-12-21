<h1 class="text-center">UBAH PELAJARAN</h1>
<form action="<?php echo base_url('StaffController/do_pelajaran') ?>" method="post">
	<div class="form-group">
		<label>Masukan Nama Pelajaran</label>
		<input type="text" name="nama" class="form-control" required="">
	</div>
	<div class="form-group">
		<label>Masukan Jam Pelajaran</label>
		<input type="number" name="jam" class="form-control" required="">
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>