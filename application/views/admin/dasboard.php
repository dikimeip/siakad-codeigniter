<h1 class="text-center">ADMIN DASBOARD</h1>
<br>
<hr>
<?php if ($this->session->flashdata('success')): ?>
	<div class="alert alert-info">
		<p><?php echo $this->session->flashdata('success') ?></p>
	</div>
<?php endif ?>
<h4>INFORMASI AKUN</h4>
<p><b>NAMA ADMIN :</b><?php echo $admin['nama_tu'] ?></p>
<p><b>USERNAME ADMIN :</b><?php echo $admin['username_tu'] ?></p>
<p><b>FOTO ADMIN :</b></p>
<img style="width: 200px" src="<?php echo base_url() ?>asset/image/<?php echo $admin['foto_tu'] ?>">