<div class="container">
		<!-- Form tambah data -->
		<?php if ($this->session->userdata('Level') == 'Admin') { ?>
        <form action="<?= base_url('index.php/kursus/tambah')?>" method="post" class="needs-validation" novalidate>
			<h2 class="pt-5 pb-4">Tambah Materi Kursus</h2>

			<!-- pesan -->
            <?= $this->session->flashdata('pesan')?>
        
			<div class="form-group">
				<label for="name">Nama Kursus</label>
				<input type="text" class="form-control" id="name" placeholder="Masukkan nama kursus" name="nama" required>
				
			</div>
			<div class="form-group">
				<label for="ket">Keterangan Kursus</label>
				<input type="text" class="form-control" id="ket" placeholder="Masukkan keterangan kursus" name="ket" required>
				
			</div>
			<div class="form-group">
				<label for="lama">Lama Kursus</label>
				<input type="text" class="form-control" id="lama" name="lama" placeholder="Masukkan lama kursus" required>
				
			</div>
			<button type="submit" class="btn btn-primary mb-5">Tambah</button>
		</form>
        <?php }?>
        <hr>

        <!-- tabel daftar kursus -->
        <h2 class="text-center pt-5 pb-3">Daftar Kursus</h2>
        <div class="table-responsive mb-5">
            <table class="table table-bordered">
                <thead class="thead-light text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama Kursus</th>
                        <th>Keterangan</th>
                        <th>Lama Kursus</th>
                        <?php if ($this->session->userdata('Level') == 'Admin')  {?>
                        <th colspan="2">Aksi</th>
                        <?php } ?>
                    </tr>
                </thead>
                <!-- dbnya -->
                <?php $no = 1; 
                foreach ($kursus as $row): ?>
                <tbody>
                    <tr>
                        <td><?= $no++?></td>
                        <td><?= $row->nama?></td>
                        <td><?= $row->keterangan?></td>
                        <td><?= $row->lama?></td>
                        <?php if ($this->session->userdata('Level') == 'Admin')  {?>
                        <td class="text-center">
                            <a href="<?= base_url('index.php/kursus/edit/'.$row->id_kursus)?>">
                                <button class="btn btn-outline-primary">
                                    <i class="fa-solid da-pen"></i>Edit
                                </button>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="<?= base_url('index.php/kursus/hapus/'.$row->id_kursus)?>">
                                <button class="btn btn-outline-danger">
                                    <i class="fa-solid fa-trash-can"></i>Hapus
                                </button>
                            </a>
                        </td>
                        <?php }?>
                    </tr>
                </tbody>
                <?php endforeach;?>
            </table>
        </div>
        