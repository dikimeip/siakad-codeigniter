<h1 class="text-center">STUDENT CONTROLLER</h1>
<?php if ($this->session->flashdata('success')): ?>
	<div class="alert alert-info">
		<p><?php echo $this->session->flashdata('success') ?></p>
	</div>
<?php endif ?>
<h4>INFORMACTION ACCOUNT</h4>
<p><b>NAMA SISWA : </b><?php echo $user['nama_siswa'] ?></p>
<p><b>NIM SISWA : </b><?php echo $user['nim_siswa'] ?></p>
<p><b>ANGKATAN SISWA : </b><?php echo $user['thn_siswa'] ?></p>
<p><b>ALAMAT SISWA : </b><?php echo $user['alamat_siswa'] ?></p>
<p><b>KELAS SISWA : </b><?php echo $user['nama_kelas'] ?></p>
<p><b>FOTO SISWA : </b></p>
<img style="width: 200px" src="<?php echo base_url() ?>asset/image/<?php echo $user['foto_siswa'] ?>">