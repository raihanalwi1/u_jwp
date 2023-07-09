<div class="container">
		<!-- Form tambah data -->
		<form action="#" method="post" class="needs-validation" novalidate>
			<h2 class="pt-5 pb-4">Tambah Jadwal Kursus</h2>
            <!-- pesan -->

            <?= $this->session->flashdata('pesan')?>
            <div class="form-group">
				<label for="name">Nama Kursus</label>
				<select name="kursus" class="custom-select form-control" id="name" required>
					<option selected>Pilih Kursus</option>
                    <!-- pilihan nama kursus -->

                </select>
            </div>
            <div class="form-group">
				<label for="waktu">Waktu Kursus</label>
				<input type="date" class="form-control" id="waktu" name="waktu" required>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<button type="submit" class="btn btn-primary mb-5" name="tambah_jadwal">Tambah</button>
		</form>
        <hr>

        <!-- Tabel daftar jadwal kursus -->
		<h2 class="text-center pt-5 pb-3">Daftar Jadwal Kursus</h2>
		<div class="table-responsive mb-5">
			<table class="table table-bordered">
				<thead class="thead-light text-center">
					<tr>
						<th>No</th>
						<th>Nama Kursus</th>
						<th>Waktu Kursus</th>
						<th colspan="2">Aksi</th>
					</tr>
				</thead>
				<tbody>
                    <!-- isi nya -->
                </tbody>
            </table>
        </div>
    </div>
    <!-- Tampilan jadwal kursus peserta -->
	
	<div class="container">
		<h2 class="text-center pt-5 pb-3">Jadwal Kursus</h2>
			<!-- Notifikasi  -->
			

		<div class="table-responsive mb-5">
			<table class="table table-bordered">
				<thead class="thead-light text-center">
					<tr>
						<th>No</th>
						<th>Nama Kursus</th>
						<th>Waktu Kursus</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
                </tbody>
			</table>
		</div>
	</div>