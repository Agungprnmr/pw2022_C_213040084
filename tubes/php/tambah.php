<?php
session_start();
if( !isset($_SESSION["tambah"]) ) {
}

require 'functions.php';
if( isset($_POST["submit"]) ) {


    
        // Cek data apakah berhasil ditambahkan atau tidak
        if( tambah($_POST) > 0 ) {
            echo "
                <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'admin.php';
                </script>
                ";
        } else {
            echo "
                <script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'admin.php';
                </script>
                ";
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

    <title>Tambah Data</title>
  </head>
  <body>

  <div class="container">
      <h1>Tambah Data </h1>


    <a href="admin.php" class="btn btn-primary">Kembali ke Data</a>  
  <div class="row mt-3">
    <div class="col-8">

        <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama :</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label">Genre :</label>
            <input type="text" class="form-control" id="genre" name="genre" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi :</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Rating :</label>
            <input type="text" class="form-control" id="rating" name="rating">
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar :</label>
            <img src="" class="img-thumbnail" id="img-preview" width="120" style="display: none;">
            <input type="file" class="form-control" id="gambar" name="gambar" onchange="previewImage()">
        </div>


            <button type="submit" class="btn btn-primary" name="submit">Tambahkan !</button>
        </form>
    </div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->
  
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="preview.js"></script>
  </body>
</html>