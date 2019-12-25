<h1 class="text-center">EDIT MATERI</h1>
<br>
<form action="<?php echo base_url('StaffController/do_edit_materi') ?>" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Materi</label>
		<input type="hidden" name="id" value="<?php echo $materi['id_materi'] ?>">
		<input type="text" name="nama" class="form-control" disabled="" value="<?php echo $materi['nama_materi'] ?>">
	</div>
	<div class="form-group">
		<label>Deskripsi Materi</label>
		<textarea class="form-control" name="desk" disabled=""><?php echo $materi['desk_materi'] ?></textarea>
	</div>
	<div class="form-group">
		<label>Masukan Keterangan</label>
		<select name="status" class="form-control">
			<option><?php echo $materi['status'] ?></option>
			<option>aktif</option>
			<option>diasble</option>
		</select>
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-success">
</form>