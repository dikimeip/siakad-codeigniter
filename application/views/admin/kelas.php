<h1 class="text-center">DATA KELAS</h1>
<div class="row">
	<div class="col-md-8">
		<button class="btn btn-info" data-toggle="modal" data-target="#tambah">TAMBAH</button>
	</div>
	<div class="col-md-4">
		<form method="post" action="<?php echo base_url('StaffController/cari_kelas') ?>">
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="masukan nama kelas">	
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
		<th>NAMA KELAS</th>
		<th>AKSI</th>
	</tr>
	<?php foreach ($kelas as $s): ?>
		<tr>
			<td><?php echo $no ++ ?></td>
			<td><?php echo $s['nama_kelas'] ?></td>
			<td>
				<a onclick="return confirm('Hapus data ..?')" href="<?php echo base_url() ?>StaffController/delete_kelas/<?php echo $s['id_kelas'] ?>" class="btn btn-warning btn-sm">HAPUS</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>
<div id="tambah" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-footer">
				<b>TAMBAH KELAS</b>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url('StaffController/post_kelas') ?>" method="post">
					<div class="form-group">
						<label>MASUKAN NAMA KELAS</label>
						<input type="text" name="nama" class="form-control" required="">
					</div>
					<input type="submit" value="SIMPAN" class="btn btn-info">
				</form>
			</div>
		</div>
	</div>
</div>