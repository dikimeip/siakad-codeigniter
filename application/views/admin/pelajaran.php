<h1 class="text-center">DATA PELAJARAN</h1>
<br>
<div class="row">
	<div class="col-md-8">
		<button class="btn btn-info" data-toggle="modal" data-target="#myModal">TAMBAH</button>
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
		<th>NAMA</th>
		<th>JAM</th>
		<th>AKSI</th>
	</tr>
	<?php foreach ($pelajaran as $s): ?>
		<tr>
			<td><?php echo $no ++ ?></td>
			<td><?php echo $s['nama_pelajaran'] ?></td>
			<td><?php echo $s['jam_pelajaran'] ?></td>
			<td>
				<a href="" class="btn btn-info btn-sm">EDIT</a>
				<a onclick="return confirm('Hapus data ..?')" href="" class="btn btn-warning btn-sm">HAPUS</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Pelajaran</h4>
      </div>
      <div class="modal-body">
       	<form action="<?php echo base_url('StaffController/do_pelajaran') ?>" method="post">
       		<div class="form-group">
       			<label>Masukan Nama Pelajaran</label>
       			<input type="text" name="nama" class="form-control" required="">
       		</div>
       		<div class="form-group">
       			<label>Masukan Jam Pelajaran</label>
       			<input type="number" name="jam" class="form-control" required="">
       		</div>
       		<input type="submit" value="SIMPAN" class="btn btn-info">
       	</form>
      </div>
    </div>

  </div>
</div>