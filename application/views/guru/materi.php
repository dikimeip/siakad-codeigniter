<h1 class="text-center">DATA MATERI</h1>
<br>
<div class="row">
	<div class="col-md-8">
		<button class="btn btn-info" data-toggle="modal" data-target="#tambah">TAMBAH</button>
	</div>
	<div class="col-md-4">
		<form action="<?php echo base_url('GuruController/cari_materi') ?>" method="post">
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
		<th>FILE</th>
		<th>AKSI</th>
	</tr>
	<?php foreach ($materi as $m): ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $m['nama_materi'] ?></td>
			<td><?php echo $m['desk_materi'] ?></td>
			<td><a href="<?php echo base_url('asset/file/') ?><?php echo $m['file'] ?>">DOWNLOAD</a></td>
			<td>
				<a href="<?php echo base_url() ?>GuruController/hapus_materi/<?php echo $m['id_materi'] ?>" class="btn btn-warning" onclick="return confirm('Yakin Hapus Data..?')" >HAPUS</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>
<div class="modal fade" id="tambah">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<b>TAMBAH MATERI</b>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url('GuruController/post_materi') ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Masukan Nama Materi</label>
						<input type="text" name="nama" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Masukan Deskripsi Materi</label>
						<textarea class="form-control" name="desk" required=""></textarea>
					</div>
					<div class="form-group">
						<label>Masukan File</label>
						<input type="file" name="file" class="form-control" required="">
					</div>
					<input type="submit" value="SIMPAN" class="btn btn-success">
				</form>
				<br>
				<p>*Type file yang di dukung hanya word,ppt,excel</p>
			</div>
		</div>
	</div>
</div>