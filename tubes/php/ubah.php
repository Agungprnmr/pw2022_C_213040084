<?php
require 'functions.php';

// Query mahasiswa berdasarkan id

$id = $_GET["id"];
$ent = query("SELECT * FROM entertainment WHERE id = $id")[0];

// cek ketika tombol ubah di-klik
if(isset($_POST['ubah'])) {

    if(ubah($_POST) > 0 ) {
        echo "<script>
                alert('data berhasil diubah!');
                document.location.href = 'admin.php';
                </script>";
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Ubah Data</title>
  </head>
  <body>

  <div class="container">
      <h1>Ubah Data</h1>


    <a href="admin.php" class="btn btn-primary">Kembali ke Data</a>  
    
  <div class="row mt-3">
    <div class="col-8">

        <form action="" method="post" autocomplete="off">
            <input type="hidden" name="id" value="<?= $ent ['id']; ?>">

        <div class="mb-3">
            <label for="nama" class="form-label">Nama :</label>
            <input type="text" class="form-control" id="nama" name="nama" required value="<?php echo $ent["nama"]; ?>">
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label">Genre :</label>
            <input type="text" class="form-control" id="genre" name="genre" required value="<?php echo $ent["genre"]; ?>">
        </div>

        <div class="mb-3">
            <label for="deksripsi" class="form-label">Deskripsi :</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" required value="<?php echo $ent["deskripsi"]; ?>">
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Rating :</label>
            <input type="text" class="form-control" id="rating" name="rating" required value="<?php echo $ent["rating"]; ?>">
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar :</label>
            <input type="file" class="form-control" id="gambar" name="gambar" value="<?php echo $ent["gambar"]; ?>">
        </div>


            <button type="submit" class="btn btn-primary" name="ubah">Ubah Data !</button>
        </form>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>