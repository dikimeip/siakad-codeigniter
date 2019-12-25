<h1 class="text-center">DATA MATERI</h1>
<br>
<div class="row">
	<div class="col-md-8">
		<button class="btn btn-info" data-toggle="modal" data-target="#tambah">TAMBAH</button>
	</div>
	<div class="col-md-4">
		<form>
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="Masukan Nama Materi">
			</div>
		</form>
	</div>
</div>
<div class="modal fade" id="tambah">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<b>TAMBAH MATERI</b>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label>Masukan Nama Materi</label>
						<input type="text" name="nama" class="form-control">
					</div>
					<div class="form-group">
						<label>Masukan Deskripsi Materi</label>
						<textarea class="form-control" name="desk"></textarea>
					</div>
					<div class="form-group">
						<label>Masukan File</label>
						<input type="file" name="file" class="form-control">
					</div>
					<input type="submit" value="SIMPAN" class="btn btn-success">
				</form>
			</div>
		</div>
	</div>
</div>