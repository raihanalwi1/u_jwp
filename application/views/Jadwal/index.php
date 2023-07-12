<div class="container">
		<!-- Form tambah data -->
		<form action="<?= base_url('index.php/jadwal/tambah')?>" method="post" class="needs-validation" novalidate>
			<h2 class="pt-5 pb-4">Tambah Jadwal Kursus</h2>
            <!-- pesan -->

            <?= $this->session->flashdata('pesan')?>
            <div class="form-group">
				<label for="name">Nama Kursus</label>
				<select name="kursus" class="custom-select form-control" id="name" required>
					<option selected>Pilih Kursus</option>
					<?php foreach($kursus as $row): ?>
					<option value="<?= $row->id_kursus?>"><?= $row->nama?></option>
                    <!-- pilihan nama kursus -->
					<?php endforeach;?>

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
				<?php $no=1;
				foreach($jadwal as $row): ?>
				<tbody>
					<tr>
						<td><?= $no++?></td>
						<td><?= $row->nama?></td>
						<td><?= $row->waktu?></td>
						<td class="text-center"><a href="<?= base_url('index.php/jadwal/edit/'.$row->id_jadwal)?>">
							<button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-pen"></i>
								Edit
							</button></a>
						</td>
						<td class="text-center"><a href="<?= base_url('index.php/jadwal/hapus/'.$row->id_jadwal)?>">
							<button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i>
								Hapus
							</button></a>
						</td>
					</tr>
                    
                </tbody>
				<?php endforeach; ?>
            </table>
        </div>
    </div>
    