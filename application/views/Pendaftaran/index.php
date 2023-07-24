<!-- Tampilan pendaftaran admin -->
<?php if ($this->session->userdata('Level') == 'Admin') { ?>
<div class="container">

		<!-- Tabel pendaftaran -->
		<h2 class="text-center pt-5 pb-3"><!--<?= $header;?> --></h2>
		<form class="form-inline" id="myform" action="<?= base_url('index.php/pendaftaran/searchStatus') ?>" method="post" >
			<label for="ktg" class="mb-4 mr-sm-2">Kategori:</label>
			<select name="status" class="custom-select mb-4 mr-sm-2" id="status">
                <!-- option -->
                <option id="option1">-- Pilih Status --</option>
                <option value="Menunggu-Persetujuan">Menunggu Persetujuan</option>
                <option value="Pendaftaran-Diterima">Pendaftaran Diterima</option>
                <option value="Pendaftaran-Ditolak">Pendaftaran Ditolak</option>
				
			</select>
			<button type="submit" class="btn btn-primary mb-4" id="submitButton">Submit</button>
			
		</form>
		<script>
			
			var option1 = document.getElementById("option1");
			var submitButton = document.getElementById("submitButton");

			// Menambahkan event listener pada form saat pengguna mengirimkan form
			document.getElementById("myform").addEventListener("submit", function(event) {
			// Mencegah pengiriman form jika opsi pertama dipilih
			if (option1.selected) {
				event.preventDefault();
				alert("Anda harus memilih opsi selain pertama sebelum mengirimkan form.");
			}
			});
			</script>
			<button class="btn btn-primary mb-4" onclick="window.location.href='<?= base_url('index.php/pendaftaran/')?>';">
			Tampilkan semuanya
			</button>
			
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
                        <th>Status</th>
                        <th colspan="2">Aksi</th>
                    </tr>
				</thead>
				
				<?php $no=1;
				
				foreach($tes as $row => $key):
				?>
				<tbody>
					<tr>
						<td><?= $no++?></td>
						<td><?= $key->npm?></td>
						<td><?= $key->kelas?></td>
						<td><?= $key->nama_mhs?></td>
						<td><?= $key->nama_kursus?></td>
						<td><?= $key->waktu?></td>
						<td><?= $key->krs?></td>
						<td><?= $key->status?></td>
						<td class="text-center">
							<button type="button" class="btn btn-outline-success"><i class="fa-solid fa-check"></i>Terima</button>
						</td>
						<td class="text-center">
							<button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-xmark"></i>Tolak</button>
						</td>
					</tr>
				</tbody>
				<?php endforeach; ?>
			</table>
		</div>
</div>
<?php }?>
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