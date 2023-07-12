<div class="container">
    <form action="#" method="post" class="needs-validation" novalidate>
        <h2 class="py-5">Ubah Jadwal Kursus</h2>
        <div class="form-group">
            <label for="name">Nama Kursus</label>
            <input type="text" class="form-control" id="name" value="<?= $record->nama ?>" readonly>
        </div>
        <div class="form-group">
            <label for="waktu">Waktu Kursus</label>
            <input type="date" class="form-control" id="waktu" value="<?= $record->waktu ?>" name="waktu" required>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <button type="submit" class="btn btn-primary mb-5" name="submit">Ubah</button>
        <a href="<?= base_url('index.php/jadwal') ?>"><button type="button" class="btn btn-outline-secondary ml-3 mb-5">Batal</button></a>
    </form>
</div>