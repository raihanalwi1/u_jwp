<div class="container">
<!-- Form tambah data -->
<?php if ($this->session->userdata('Level') == 'Admin') { ?>
        <form action="<?= base_url('index.php/kursus/update/'.$record->id_kursus)?>" method="post" class="needs-validation" novalidate>
			<h2 class="pt-5 pb-4">Tambah Materi Kursus</h2>

			<!-- pesan -->
            <?= $this->session->flashdata('pesan')?>
        
			<div class="form-group">
				<label for="name">Nama Kursus</label>
				<input type="hidden" class="form-control" id="id" value="<?= $record->id_kursus?>">
				<input type="text" class="form-control" id="name" placeholder="Masukkan nama kursus" value="<?= $record->nama_kursus?>" name="nama" required>
				
			</div>
			<div class="form-group">
				<label for="ket">Keterangan Kursus</label>
				<input type="text" class="form-control" id="ket" placeholder="Masukkan keterangan kursus" value="<?= $record->keterangan?>" name="ket" required>
				
			</div>
			<div class="form-group">
				<label for="lama">Lama Kursus</label>
				<input type="text" class="form-control" id="lama" name="lama" placeholder="Masukkan lama kursus" value="<?= $record->lama?>" required>
				
			</div>
			<button type="submit" class="btn btn-primary mb-5">Tambah</button>
		</form>
        <?php }?>
</div>
