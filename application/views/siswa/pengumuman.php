<h1 class="text-center">PENGUMUMAN</h1>
<div class="row">
	<div class="col-md-8"></div>
	<div class="col-md-4">
		<form action="<?php echo base_url('SiswaController/cari_pengumuman') ?>" method="post">
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="Masukan Judul Pengumuman">
			</div>
		</form>
	</div>
</div>
<table class="table table-hover">
	<tr>
		<th>NO</th>
		<th>NAMA</th>
		<th>ISI</th>
	</tr>
	<?php foreach ($pengumuman as $p): ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $p['nama_pengumuman'] ?></td>
			<td><?php echo $p['desk_pengumuman'] ?></td>
		</tr>
	<?php endforeach ?>
</table>