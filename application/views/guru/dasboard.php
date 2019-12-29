<h1 class="text-center" >GURU DASBOARD</h1>
<?php if ($this->session->flashdata('success')): ?>
	<div class="alert alert-info">
		<p><?php echo $this->session->flashdata('success') ?></p>
	</div>
<?php endif ?>

<h4>INFORMACTION ACCOUNT</h4>
<p><b>NAMA SISWA : </b><?php echo $guru['nama_guru'] ?></p>
<p><b>NIM SISWA : </b><?php echo $guru['nidn_guru'] ?></p>
<p><b>ANGKATAN SISWA : </b><?php echo $guru['thn_guru'] ?></p>
<p><b>ALAMAT SISWA : </b><?php echo $guru['alamat_guru'] ?></p>
<p><b>KELAS SISWA : </b><?php echo $guru['nama_kelas'] ?></p>
<p><b>PELAJARAN :</b><?php echo $guru['nama_pelajaran'] ?></p>
<p><b>FOTO SISWA : </b></p>
<img style="width: 200px" src="<?php echo base_url() ?>asset/image/<?php echo $guru['foto_guru'] ?>">