<div class="container">
<!-- Form tambah data -->
<?php if ($this->session->userdata('Level') == 'Admin') { ?>
        <form action="<?= base_url('index.php/pengguna/update/'.$record->id_user)?>" method="post" class="needs-validation" novalidate>
			<h2 class="pt-5 pb-4">Edit Materi Kursus</h2>

			<!-- pesan -->
            <?= $this->session->flashdata('pesan')?>
        
			<div class="form-group">
				<label for="name">Nama</label>
				<input type="hidden" class="form-control" id="id" value="<?= $record->id_user?>">
				<input type="text" class="form-control" id="name" placeholder="Masukkan nama " value="<?= $record->nama?>" name="nama" required>
				
			</div>
			<div class="form-group">
				<label for="ket">Username</label>
				<input type="text" class="form-control" id="username" placeholder="Masukkan username" value="<?= $record->username?>" name="username" required>
				
			</div>
			<div class="form-group">
				<label for="lama">No Telepon</label>
				<input type="text" class="form-control" id="telp" name="telp" placeholder="Masukkan no telepon" value="<?= $record->telepon?>" required>
				
			</div>
			<button type="submit" class="btn btn-primary mb-5">Edit</button>
		</form>
        <?php }?>
</div>
