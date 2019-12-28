<h1>GURU DASBOARD <?php echo $sess[0]['nama_guru'] ?></h1>
<?php if ($this->session->flashdata('success')): ?>
	<div class="alert alert-info">
		<p><?php echo $this->session->flashdata('success') ?></p>
	</div>
<?php endif ?>