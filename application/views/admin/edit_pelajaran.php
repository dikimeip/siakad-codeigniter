<h1 class="text-center">UBAH PELAJARAN</h1>
<form action="<?php echo base_url('StaffController/edit_pelajaran') ?>" method="post">
	<div class="form-group">
		<label>Masukan Nama Pelajaran</label>
		<input type="hidden" name="id" value="<?php echo $pelajaran['id_pelajaran'] ?>">
		<input type="text" name="nama" class="form-control" value="<?php echo $pelajaran['nama_pelajaran'] ?>">
	</div>
	<div class="form-group">
		<label>Masukan Jam Pelajaran</label>
		<input type="number" name="jam" class="form-control" value="<?php echo $pelajaran['jam_pelajaran'] ?>">
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>