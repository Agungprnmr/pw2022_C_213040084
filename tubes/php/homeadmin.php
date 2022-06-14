<?php require 'functions.php';
$entertainment = query("SELECT * FROM entertainment");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width", "initial-scales=1">
		<title>Mintira Movies</title>
        <link rel="stylesheet" href="../css/index.css">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	</head>

	<body>
		<input type="checkbox" id="check">

		<header>
			<div class="container">
				<h1><a href="">~Mintira Movies~</a></h1>
				<ul>
					<li><a href="#Home">Beranda</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>

				<label for="check" class="mobile-menu"><i class="fas fa-bars"></i></label>
			</div>
		</header>


		<section class="banner" id="Home">
			<div class="container">
				<div class="banner-left">
					<img src="../img/logo.png">
					<h2 class="home">Hai Admin Ganteng . . .</br>
            <h2>Ada yang harus di perbaiki ga bang ganteng?</h2>
            <h1>Jangan Lupa Senyum Bang Ganteng :)</h1>
			</div>
		</section>


<section class="dishes" id="dishes">

<h3 class="sub-heading"> Rekomendasi Movies</h3>
    <div class="box-container">
        <?php foreach ($entertainment as $ent) :?>

            <div class="box">
            <img src="../img/<?= $ent['gambar'] ?>">
            <h3><?= $ent['nama'] ?></h3>

            <div class="starts">
            </div> 
            <a href="admin.php" class="btn"> Perbaiki </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>

		
		<a href="#" class="scrollup" id="scroll-up">
			<i class="fas fa-hand-point-up scrollup-icon"></i>
		</a>


		<footer>
			<div class="container">
				<small>~ Made By Agung Purnama Rahmat ~</small>
			</div>
		</footer>
		<style>
			html {
			  scroll-behavior: smooth;
			}
		</style>
			
		<script src="../php/script.js"></script>
	</body>
</html>