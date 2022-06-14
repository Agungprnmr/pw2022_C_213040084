<?php 
session_start();
require 'functions.php';

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$conn = koneksi();
	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	//cek username
	if(mysqli_num_rows($result) === 1 ) {
		
		//cek password
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row["password"])) {
			
			//cek role admin
			if ($row['role']=="admin") {
				$_SESSION['id_admin'] = $row['id'];
				$_SESSION['role'] = "admin";
              	header("location:homeadmin.php");
			} else if ($row['role']=="user") {
				$_SESSION['id_user'] = $row['id'];
				$_SESSION['role'] = "user";
              	header("location:homeuser.php");
			}
		}
	}

	$error = true;
}
?>


<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../css/login.css?v=<?php echo time(); ?>">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>

<?php if( isset($error) ) : ?>
<div class="garpit">
<p style="color: white; font-style: italic;" class = "btn btn-danger">username / password salah</p>
</div>
<?php endif; ?>

			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Masuk</h3>
						<form action="" method="POST" class="login-form">

		      		<div class="form-group">
		      			<input type="text" class="form-control rounded-left" placeholder="Username" name="username" id="username" required>
		      		</div>

	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" placeholder="Password" name="password" id="password" required>
	            </div>
				
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3" name="login">Login</button>
	            </div>
	            <div class="form-group d-md-flex">
								<div class="ren-button">
								<a href="registrasi.php">Belum Punya Akun ? </a>
								<br>
								<br>

								<a href="index.php" class="btn btn-primary">Home</a>
								</div>
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
</html>