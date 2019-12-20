<h1 class="text-center">DETAIL DATA SISWA</h1>
<br><hr>
<p><b>NIM SISWA</b></p>
<p><?php echo $siswa['nim_siswa'] ?></p>
<p><b>NAMA SISWA</b></p>
<p><?php echo $siswa['nama_siswa'] ?></p>
<p><b>KELAS SISWA</b></p>
<p><?php echo $siswa['nama_kelas'] ?></p>
<p><b>TAHUN MASUK SISWA</b></p>
<p><?php echo $siswa['thn_siswa'] ?></p>
<p><b>ALAMAT SISWA</b></p>
<p><?php echo $siswa['alamat_siswa'] ?></p>
<p><b>FOTO SISWA</b></p>
<p><img style="width: 50px" src="<?php echo base_url() ?>asset/image/<?php echo $siswa['foto_siswa'] ?>"></p>