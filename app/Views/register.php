<!doctype html>
<html lang="en">
  <head>
  	<title>APM Sagarahiang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/scd.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">From Registrasi Aplikasi Pengaduan Masyarakat Desa Sagarahiang</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<form action="/masyarakat/daftar" method="POST" class="signup-form">
				  <?php if(session()->getFlashdata('msg')):?>
				  <div class="alert alert-success" ><?= session()->getFlashdata('msg') ?></div>
				  <?php endif;?> 
				  <?php if (session()->getFlashdata('list_errors')) : ?>
					<?= session()->getFlashdata('list_errors') ?>
					<?php endif ?>
                  <div class="form-group">
		      			<input name="txtNik" type="text" class="form-control" placeholder="NIK" required>
                    </div>
				<div class="form-group">
		      			<input name="txtName" type="text" class="form-control" placeholder="Nama Lengkap" required>
                    </div>
                      <div class="form-group">
		      			<input name="txtUsername" type="text" class="form-control" placeholder="Username" required>
		      		</div>
					  <div class="form-group">
	              <input name="txtPassword" id="password-field" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
				  <div class="form-group">
		      			<input name="txtTelp" type="text" class="form-control" placeholder="Nomor Telepon" required>
                    </div>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>
