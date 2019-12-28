<h1 class="text-center">MATERI</h1>
<div class="row">
	<div class="col-md-8"></div>
	<div class="col-md-4">
		<form action="<?php echo base_url('SiswaController/cari_materi') ?>" method="post">
			<div class="form-group">
				<input type="text" name="cari" placeholder="Masukan Nama Materi" class="form-control">
			</div>
		</form>
	</div>
</div>
<table class="table table-hover">
	<tr>
		<th>NO</th>
		<th>NAMA FILE</th>
		<th>DESKRIPSI</th>
		<th>STATUS</th>
		<th>FILE</th>
	</tr>
	<?php foreach ($materi as $m): ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $m['nama_materi'] ?></td>
			<td><?php echo $m['desk_materi'] ?></td>
			<td><?php echo $m['status'] ?></td>
			<td><a class="btn btn-info btn-sm" target="_blank" href="<?php echo base_url('asset/file/') ?><?php echo $m['file'] ?>">DOWNLOAD</a></td>
		</tr>
	<?php endforeach ?>
</table>