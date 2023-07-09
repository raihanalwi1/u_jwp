<!DOCTYPE html>
	<html>

	<head>
		<title>Login | Lembaga Kursus</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
		<script src="https://kit.fontawesome.com/461ced2cb1.js" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

		<style>
			body {
				background-color: #7FFFD4;
			}

			form {
				width: 450px;
				background-color: white;
			}
		</style>
	</head>
<a href="<?= base_url()?>">Back</a>
	<body>
		<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
			<form action="<?= 'prosesLogin'?>" method="post" class="shadow p-4 rounded needs-validation" novalidate>
				<h3 class="text-center">Lembaga Kursus Jewepe</h3>
				<?= $this->session->flashdata('pesan') ?>
				<p style="color: grey; text-align:center;" >Silakan login dengan npm (bagi mahasiswa)</p>
				<div class="form-group">
					<label for="uname">Username</label>
					<input type="text" class="form-control" id="uname" placeholder="Masukkan username" name="username" required>
					<div class="invalid-feedback">Please fill out this field.</div>
				</div>
				<div class="form-group">
					<label for="pwd">Password</label>
					<input type="password" class="form-control" id="pwd" placeholder="Masukkan password" name="password" required>
					<div class="invalid-feedback">Please fill out this field.</div>
				</div>
				<button type="submit" class="btn btn-primary" name="login">Login</button>
			</form>
		</div>