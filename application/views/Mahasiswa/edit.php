
<div class="container">
			<form action="<?= base_url('index.php/mahasiswa/update/'.$record->npm)?>" method="post" class="needs-validation" novalidate>
				<h2 class="py-5">Ubah Data Mahasiswa</h2>
				<div class="form-group">
					<label for="npm">NPM</label>
					<input type="text" class="form-control" id="npm" name="npm" value="<?= $record->npm ?>" readonly>
				</div>
				<div class="form-group">
					<label for="kelas">Kelas</label>
					<input type="text" class="form-control" id="kelas" value="<?= $record->kelas ?>" name="kelas" maxlength="5" required>
					<div class="invalid-feedback">Please fill out this field.</div>
				</div>
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" id="nama" value="<?= $record->nama ?>" name="nama" maxlength="64" required>
					<div class="invalid-feedback">Please fill out this field.</div>
				</div>
				<button type="submit" class="btn btn-primary mb-5" name="submit">Ubah</button>
				<a href="index.php"><button type="button" class="btn btn-outline-secondary ml-3 mb-5">Batal</button></a>
			</form>
		</div>
