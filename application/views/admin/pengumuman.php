<h1 class="text-center">DATA PENGUMUMAN</h1>
<br>
<div class="row">
	<div class="col-md-8">
		<a class="btn btn-info" href="<?php echo base_url('') ?>">TAMBAH</a>
	</div>
	<div class="col-md-4">
		<form method="post" action="<?php echo base_url('') ?>">
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="masukan nama siswa">	
			</div>
		</form>
	</div>
</div>
<?php if ($this->session->flashdata('success')): ?>
	<div class="alert alert-success">
		<p><?php echo $this->session->flashdata('success') ?></p>
	</div>
<?php endif ?>
<table class="table table-hover" id="table_id">
	<tr>
		<th>NO</th>
		<th>NAMA PENGUMUMAN</th>
		<th>DESK PENGUMUMAN</th>
		<th>STATUS</th>
		<th>AKSI</th>
	</tr>
	<?php foreach ($pengumuman as $s): ?>
		<tr>
			<td><?php echo $no ++ ?></td>
			<td><?php echo $s['nama_pengumuman'] ?></td>
			<td><?php echo $s['desk_pengumuman'] ?></td>
			<td><?php echo $s['status'] ?></td>
			<td>
				<a href="" class="btn btn-info btn-sm">EDIT</a>
				<a onclick="return confirm('Hapus data ..?')" href="" class="btn btn-warning btn-sm">HAPUS</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>

