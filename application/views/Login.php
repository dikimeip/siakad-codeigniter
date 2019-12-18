<!DOCTYPE html>
<html>
<head>
	<title>LOGIN SIAKAD</title>
	 <link href="<?php echo base_url() ?>asset/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="col-md-4"></div>
<div class="col-md-4">
	<h2 class="text-center">LOGIN AKUN</h2>
	<br>
	<div class="panel panel-default">
		<div class="panel-heading">
			<form action=" <?php echo base_url('LoginController/DoLogin') ?> " method="post">
				<div class="form-group">
					<label>MASUKAN NIM ATAU NIDN</label>
					<input type="text" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label>MASUKAN PASSWORD</label>
					<input type="password" name="password" class="form-control">
				</div>
				<div class="form-group">
					<select class="form-control" name="level">
						<option value="0">STUDENT</option>
						<option value="1">TEACHER</option>
						<option value="2">STAF</option>
					</select>
				</div>
				<input type="submit" name="simpan" value="LOGIN" class="btn btn-info" >
			</form>
			<br>
			<?php if ($this->session->flashdata('gagal')): ?>
				<div class="alert alert-danger">
					<p><?php echo $this->session->flashdata('gagal') ?></p>
				</div>
			<?php endif ?>
			<br>
		</div>
	</div>
</div>


</body>
</html>