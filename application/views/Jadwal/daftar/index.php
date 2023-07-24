<div class="container">
			<form action="" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
				<h2 class="py-5">Formulir Pendaftaran Kursus</h2>
				<div class="form-group">
					<label for="kursus">Nama Kursus</label>
					<input type="text" class="form-control" id="kursus" value="<?= $record->nama_kursus?>" readonly>
				</div>
				<div class="form-group">
					<label for="waktu">Waktu Kursus</label>
					<input type="date" class="form-control" id="waktu" value="<?= $record->waktu?>" name="waktu" readonly>
				</div>
				<div class="form-group">
					<label for="mhs">Nama Mahasiswa</label>
					<input type="text" class="form-control" id="mhs" value="<?= $this->session->userdata('Name')?>" readonly>
				</div>
				<div class="form-group">
					<label for="npm">NPM</label>
					<input type="text" class="form-control" id="npm" value="<?= $this->session->userdata('Npm')?>" readonly>
				</div>
				<div class="form-group">
					<label for="kelas">Kelas</label>
					<input type="text" class="form-control" id="kelas" value="<?= $this->session->userdata('Kelas')?>" readonly>
				</div>
				<div class="form-group">
					<label for="krs">File KRS</label>
					<div class="custom-file mb-3" id="krs">
						<input type="file" class="custom-file-input" id="customFile" name="krs" accept=".pdf" required>
						<label class="custom-file-label" for="customFile">Choose file</label>
					</div>
					<div class="invalid-feedback">Please fill out this field.</div>
				</div>
				<button type="submit" class="btn btn-primary mb-5" name="submit">Submit</button>
				<a href="<?= base_url('index.php/jadwal')?>"><button type="button" class="btn btn-outline-secondary ml-3 mb-5">Batal</button></a>
			</form>
		</div>