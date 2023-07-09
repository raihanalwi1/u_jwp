<!-- Tampilan pendaftaran admin -->
<div class="container">
		<style>
		body {
				background-color: #C6DEFF;
			}
		</style>
		<!-- Tabel pendaftaran -->
		<h2 class="text-center pt-5 pb-3">Pendaftaran Mahasiswa</h2>
		<form class="form-inline" action="" method="post">
			<label for="ktg" class="mb-4 mr-sm-2">Kategori:</label>
			<select name="status" class="custom-select mb-4 mr-sm-2" id="ktg">
                <!-- option -->
                <option value="1">Menunggu Persetujuan</option>
            </select>
			<button type="submit" class="btn btn-primary mb-4">Submit</button>
		</form>
		<div class="table-responsive mb-5">
			<table class="table table-bordered">
				<thead class="thead-light text-center">
					<tr>
						<th>No</th>
						<th>NPM</th>
						<th>Kelas</th>
						<th>Nama Mahasiswa</th>
						<th>Nama Kursus</th>
						<th>Waktu Kursus</th>
						<th>KRS</th>
                        <!-- status -->
                        <th>Status</th>
                        <th colspan="2">Aksi</th>
                    </tr>
				</thead>
			<tbody>
            </tbody>
        </table>
    </div>
</div>
<!-- Tampilan pendaftaran peserta -->
<div class="container">
		<h2 class="text-center pt-5 pb-3">Informasi Pendaftaran</h2>
        <!-- pesan -->

        <div class="table-responsive mb-5">
			<table class="table table-bordered">
				<thead class="thead-light text-center">
					<tr>
						<th>No</th>
						<th>Nama Kursus</th>
						<th>Waktu Kursus</th>
						<th>KRS</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
                </tbody>
			</table>
		</div>
	</div>