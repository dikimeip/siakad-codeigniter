<h1 class="text-center">DATA NILAI</h1>
<br>
<div class="row">
	<div class="col-md-8">	
		<button class="btn btn-info" data-toggle = "modal" data-target="#modal">INPUT NILAI</button>
	</div>
	<div class="col-md-4">
		<form>
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="Masukan Nama Mahasiswa">
			</div>
		</form>
	</div>
</div>
<?php if ($this->session->flashdata('success')): ?>
	<div class="alert alert-success">
		<p><?php echo $this->session->flashdata('success') ?></p>
	</div>
<?php endif ?>
<table class="table table-striped ">
	<tr>
		<th>NO</th>
		<th>NIM</th>
		<th>NAMA</th>
		<th>KELAS</th>
		<th>NILAI</th>
		<th>AKSI</th>
	</tr>
	<?php foreach ($nilai as $k): ?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $k['nim_siswa'] ?></td>
		<td><?php echo $k['nama_siswa'] ?></td>
		<td><?php echo $kelas['nama_kelas'] ?></td>
		<td><?php echo $k['nilai'] ?></td>
		<td>
			<a href="<?php echo base_url() ?>GuruController/edit_nilai/<?php echo $k['id_siswa'] ?>" class="btn btn-info btn-sm">EDIT</a>
			<a href="<?php  ?>" onclick="return confirm('Hapus data ..?')" class="btn btn-warning btn-sm">HAPUS</a>
		</td>
	</tr>
	<?php endforeach ?>
</table>
<div id="modal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<b>INPUT NILAI</b>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url('GuruController/post_nilai') ?>" method="post">
					<div class="form-group">
						<label>Pilih Nama Siswa</label>
						<select name="siswa" class="form-control">
							<?php foreach ($siswa as $s): ?>
								<option value="<?php echo $s['id_siswa'] ?>"><?php echo $s['nama_siswa'] ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="form-group">
						<label>Masukan Nilai</label>
						<input type="text" name="nilai" class="form-control">
					</div>
					<input type="submit" value="SIMPAN" class="btn btn-info">
				</form>
			</div>
		</div>
	</div>
</div>