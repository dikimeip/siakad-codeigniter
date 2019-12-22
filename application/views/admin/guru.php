<h1 class="text-center">DATA GURU</h1>
<div class="row">
	<div class="col-md-8">
		<a class="btn btn-info" href="<?php echo base_url('StaffController/tambah_guru') ?>">TAMBAH</a>
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
		<th>NAMA GURU</th>
		<th>NIDN</th>
		<th>PELAJARAN</th>
		<th>AKSI</th>
	</tr>
	<?php foreach ($siswa as $s): ?>
		<tr>
			<td><?php echo $no ++ ?></td>
			<td><?php echo $s['nama_guru'] ?></td>
			<td><?php echo $s['nidn_guru'] ?></td>
			<td><?php echo $s['nama_pelajaran'] ?></td>
			<td>
				<a href="<?php echo base_url() ?>StaffController/edit_guru/<?php echo $s['id_guru'] ?>" class="btn btn-info btn-sm">EDIT</a>
				<a href="" class="btn btn-success btn-sm">DETAIL</a>
				<a onclick="return confirm('Hapus data ..?')" href="" class="btn btn-warning btn-sm">HAPUS</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>

