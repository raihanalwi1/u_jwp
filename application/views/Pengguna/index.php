<!-- Tampilan role admin -->
<div class="container">
		<!-- Form tambah data -->
		<form action="<?= base_url('index.php/pengguna/tambah')?>" method="post" class="needs-validation" novalidate>
			<h2 class="pt-5 pb-4">Tambah Pengguna</h2>

			<!-- pesan -->

			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama" maxlength="32" required>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
				<label for="telp">Nomor Telepon</label>
				<input type="text" class="form-control" id="telp" placeholder="Masukkan nomor telepon" name="telp" maxlength="13" required>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
				<label for="uname">Username</label>
				<input type="text" class="form-control" id="uname" placeholder="Masukkan username" name="username" maxlength="16" required>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
				<label for="pwd">Password</label>
				<input type="password" class="form-control" id="pwd" placeholder="Masukkan password" name="password" maxlength="16" required>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
				<label for="rpwd">Ulang Password</label>
				<input type="password" class="form-control" id="rpwd" placeholder="Masukkan password kembali" name="re_password" maxlength="16" required>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<button type="submit" class="btn btn-primary mb-5" name="tambah_pengguna">Tambah</button>
		</form>
		<hr>

		<!-- Tabel daftar pengguna -->
		<h2 class="text-center pt-5 pb-3">Daftar Pengguna</h2>
		<div class="table-responsive mb-5">
			<table class="table table-bordered">
				<thead class="thead-light text-center">
					<tr>
						<th>#</th>
						<th>Username</th>
						<th>Nama</th>
						<th>Nomor Telepon</th>
						<th colspan="2">Aksi</th>
					</tr>
				</thead>
				<?php $no =1;
				foreach ($pengguna as $row): ?>
				<tbody>
					<tr>
						<td> <?= $no++?></td>
						<td> <?= $row->username?></td>
						<td> <?= $row->nama?></td>
						<td> <?= $row->telepon?></td>
						<td class="text-center">
							<a href="<?= base_url('index.php/pengguna/edit/'.$row->id_user)?>">
								<button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-pen"></i>Edit</button>
							</a>
						</td>
						<td class="text-center">
							<a href="<?= base_url('index.php/pengguna/hapus/'.$row->id_user)?>">
								<button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i> Hapus</button>
							</a>
						</td>
					</tr>
                </tbody>
				<?php endforeach;?>

			</table>
		</div>
	</div>