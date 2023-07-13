<!DOCTYPE html>
<html lang="en">
<head>
<title><?= $title;?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= base_url('/assets/css/boostrap.min.css')?>">
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
	<script src="<?= base_url('/assets/js/461ced2cb1.js')?>" crossorigin="anonymous"></script>
	<!-- <script src="https://kit.fontawesome.com/461ced2cb1.js" crossorigin="anonymous"></script> -->
	<script src="<?= base_url('/assets/js/jquery.slim.min.js')?>"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script> -->
	<script src="<?= base_url('/assets/js/popper.min.js')?>"></script>
	<script src="<?= base_url('/assets/js/bootstrap.bundle.min.js')?>"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->

	<style>
		nav {
			/* warna navigasi bar */
			background-color: #00BFFF;
		}
	</style>
</head>
<body>
    <!-- ini buat navbar -->
    <nav class="navbar navbar-expand-md sticky-top navbar-dark">
		<a href="#" class="navbar-brand">Lembaga Kursus</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="navbar-collapse collapse justify-content-stretch" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="<?= base_url()?>" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item">
			        <a class="nav-link" href="<?= base_url('index.php/kursus')?>">Materi Kursus</a>
		        </li>
                <?php if ($this->session->userdata('Level') == 'Admin') { ?>
                <li class="nav-item">
				<a class="nav-link" href="<?= base_url('index.php/jadwal')?>">Jadwal Kursus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('index.php/pendaftaran')?>">Pendaftaran</a>
                </li>
                <li class="nav-item">
				<a class="nav-link" href="<?= base_url('index.php/mahasiswa')?>">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('index.php/pengguna')?>">Pengguna</a>
                </li>
                <?php }elseif ($this->session->userdata('Level') == 'Mahasiswa') { ?>
                    <li class="nav-item">
				    <a class="nav-link" href="<?= base_url('index.php/jadwal')?>">Jadwal Kursus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('index.php/pendaftaran')?>">Pendaftaran</a>
                </li>
                <?php }?>
            </ul>
            
            <ul class="navbar-nav ml-auto">
            <?php if($this->session->userdata('Status') == 'sudahLogin') { ?>
                <span class="navbar-text text-white">
                    <?= $this->session->userdata('Level')?> : <?= $this->session->userdata('Name')?>
                </span>
                <li class="nav-item ml-3">
                    <a class="btn btn-primary" href="<?=base_url('index.php/auth/logout')?>" role="button">Logout</a>
                </li>
               <?php }else if($this->session->userdata('Status') != 'sudahLogin' ) {?>
               <li class="nav-item ml-3">
                    <a class="btn btn-primary" href="<?=base_url('index.php/auth/')?>" role="button">Login</a>
                </li>
                <?php }?>
            </ul>
        </div>
    </nav>
    <!-- ini buat content -->
