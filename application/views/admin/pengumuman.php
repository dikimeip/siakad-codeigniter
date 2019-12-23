<h1 class="text-center">DATA PENGUMUMAN</h1>
<br>
<div class="row">
	<div class="col-md-8">
		<a class="btn btn-info" href="<?php echo base_url('') ?>">TAMBAH</a>
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
