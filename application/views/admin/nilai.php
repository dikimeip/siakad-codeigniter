<h1 class="text-center">DATA NILAI</h1>
<div class="row">
	<div class="col-md-8"></div>
	<div class="col-md-4">
		<form>
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="Masukan Nama Mahasiswa">
			</div>
		</form>
	</div>
</div>
<table class="table table-hover">
	<tr>
		<th>NO</th>
		<th>NIM</th>
		<th>NAMA</th>
		<th>GURU</th>
		<th>PELAJARAN</th>
		<th>AKSI</th>
	</tr>
	<?php foreach ($nilai as $n ): ?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $n['nim_siswa'] ?></td>
		<td><?php echo $n['nama_siswa'] ?></td>
		<td><?php echo $n['nama_guru'] ?></td>
		<td><?php echo $n['nama_pelajaran'] ?></td>
		<td>
			<a href="<?php echo base_url() ?>StaffController/detail_nilai/<?php echo $n['id_nilai'] ?>" class="btn btn-info">DETAIL</a>
		</td>
	</tr>
	<?php endforeach ?>
</table>
