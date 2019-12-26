<h1 class="text-center">PENGUMUMAN</h1>
<br>
<div class="row">
	<div class="col-md-8"></div>
	<div class="col-md-4">
		<form>
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="masukan nama pengumuman">
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