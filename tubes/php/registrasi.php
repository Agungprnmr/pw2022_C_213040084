<?php 
require 'functions.php';

if(isset($_POST["registrasi"]) ) {

    if(registrasi($_POST) > 0 ) {
        echo "<script>
                alert('user baru berhasil ditambahkan!');
                document.location.href = 'login1.php';
                </script>";
    } else {
        echo mysqli_error($conn);
    }
}



?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Registrasi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../css/login.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Registrasi</h2>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Daftar</h3>
						<form action="" method="POST" class="register-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control rounded-left" placeholder="Username" name="username" id="username" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" placeholder="Password" name="password" id="password" required>
	            </div>
                <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" placeholder="Konfirmasi Password" name="password2" id="password2" required>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3" name="registrasi">Daftar</button>
	            </div>
	            <div class="form-group d-md-flex">
				    <a href="login1.php">Anda sudah punya akun? </a>
				</div>
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
</html