<h1 class="text-center">DATA NILAI</h1>
<div class="row">
	<div class="col-md-8">	</div>
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
			<a href="<?php echo base_url() ?>GuruController/input_nilai/<?php echo $k['id_siswa'] ?>" class="btn btn-info" class="btn btn-info">INPUT NILAI</a>
		</td>
	</tr>
	<?php endforeach ?>
</table>