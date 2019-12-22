<h1 class="text-center">SHOW GURU</h1>
<br><hr>
<p><b>NAMA GURU</b></p>
<p><?php echo $guru['nama_guru'] ?></p>
<p><b>MATA PELAJARAN</b></p>
<p><?php echo $guru['nama_pelajaran'] ?></p>
<p><b>TAHUN MASUK GURU</b></p>
<p><?php echo $guru['thn_guru'] ?></p>
<p><b>NIDN GURU</b></p>
<p><?php echo $guru['nidn_guru'] ?></p>
<p><b>ALAMAT GURU</b></p>
<p><?php echo $guru['alamat_guru'] ?></p>
<p><b>KELAS AJAR</b></p>
<p><?php echo $guru['nama_kelas'] ?></p>
<p><b>FOTO GURU</b></p>
<img style="width: 400px" src="<?php echo base_url() ?>asset/image/<?php echo $guru['foto_guru'] ?>">