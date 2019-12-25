<h1 class="text-center">DATA MATERI</h1>
<br>
<div class="row">
	<div class="col-md-8"></div>
	<div class="col-md-4">
		<form action="<?php echo base_url('') ?>" method="post">
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="Masukan Nama Materi">
			</div>
		</form>
	</div>
</div>
<?php if ($this->session->flashdata('success')): ?>
	<div class="alert alert-info">
		<p><?php echo $this->session->flashdata('success') ?></p>
	</div>
<?php endif ?>
<table class="table table-hover">
	<tr>
		<th>NO</th>
		<th>NAMA FILE</th>
		<th>DESKRIPSI</th>
		<th>STATUS</th>
		<th>FILE</th>
		<th>AKSI</th>
	</tr>
	<?php foreach ($materi as $m): ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $m['nama_materi'] ?></td>
			<td><?php echo $m['desk_materi'] ?></td>
			<td><?php echo $m['status'] ?></td>
			<td><a href="<?php echo base_url('asset/file/') ?><?php echo $m['file'] ?>">DOWNLOAD</a></td>
			<td>
				<a href="<?php echo base_url() ?>StaffController/edit_materi/<?php echo $m['id_materi'] ?>" class="btn btn-success btn-sm" >EDIT</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>