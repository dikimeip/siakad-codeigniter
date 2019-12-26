<h1 class="text-center">UBAH PENGUMUMAN</h1>
<form action="<?php echo base_url('StaffController/edit_pengumumans') ?>" method="post">
	<div class="form-group">
		<label>Masukan Nama Pengumuman</label>
		<input type="hidden" name="id" value="<?php echo $pengumuman['id_pengumuman'] ?>">
		<input type="text" name="nama" class="form-control" value="<?php echo $pengumuman['nama_pengumuman'] ?>">
	</div>
	<div class="form-group">
		<label>Masukan Desk Pengumuman</label>
		<input type="text" name="desk" class="form-control" value="<?php echo $pengumuman['desk_pengumuman'] ?>">
	</div>
	<div class="form-group">
		<label>Masukan Status Pengumuman</label>
		<select name="status" class="form-control">
			<option><?php echo $pengumuman['status'] ?></option>
			<option>0</option>
			<option>1</option>
		</select>
	</div>
	<div class="form-group">
		<label>Masukan User Pengumuman</label>
		<select name="user" class="form-control">
			<option><?php echo $pengumuman['user'] ?></option>
			<option>SISWA</option>
			<option>GURU</option>
		</select>
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>