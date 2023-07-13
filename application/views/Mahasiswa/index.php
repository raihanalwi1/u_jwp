<div class="container">
    <form action="<?= base_url('index.php/mahasiswa/tambah')?>" method="post" class="need-validation" novalidate>
        <h2 class="pt-5 pb-4">Tambah Data Mahasiswa</h2>
        <!-- pesan -->
        <?= $this->session->flashdata('pesan'); ?>
        <div class="form-group">
				<label for="npm">NPM</label>
				<input type="text" class="form-control" id="npm" placeholder="Masukkan npm" name="npm" maxlength="8" required>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
				<label for="kelas">Kelas</label>
				<input type="text" class="form-control" id="kelas" placeholder="Masukkan kelas" name="kelas" maxlength="5" required>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama" maxlength="64" required>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<button type="submit" class="btn btn-primary mb-5" name="tambah-mahasiswa">Tambah </button>
    </form>
    <hr>
    <!-- Tabel daftar mahasiswa -->
    <h2 class="text-center pt-5 pb-3">Daftar Mahasiswa</h2>
    <div class="table-responsive mb-5">
        <table class="table table-bordered">
            <thead class="thead-light text-center">
                <tr>
                    <th>No</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                    <th>Nama</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <?php $no=1;
            foreach($mahasiswa as $row): ?>
            <tbody>
                <tr> 
                    <td><?= $no++?></td>    
                    <td><?= $row->npm?></td>    
                    <td><?= $row->kelas?></td>    
                    <td><?= $row->nama_mhs?></td>
                    <td class="text-center">
                        <a href="<?= base_url('index.php/mahasiswa/edit/'.$row->npm)?>"><button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-pen"></i>Edit</button></a>
                    </td>
                    <td class="text-center">
                        <a href="<?= base_url('index.php/mahasiswa/hapus/'.$row->npm)?>">
                        <button type="button" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i>Hapus</button></a>
                    </td>      
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </div>  
</div>