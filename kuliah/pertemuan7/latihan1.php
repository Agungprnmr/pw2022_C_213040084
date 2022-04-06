<?php 
// $_GET
$mahasiswa =[
    ["nama" => "Agung Purnama Rahmat",
    "npm" => "213040084",
    "email" => "agungmamez@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "killua.jpg "],

    ["nama" => "Viane Pindhi Wardiyane", 
    "npm" => "213040103", 
    "email" => "viane.213040103@mail.unpas.ac.id", 
    "jurusan" => "Teknik Informatika",
    "gambar" => "girl.jpeg"],

    ["nama" => "Yudha Prasetya", 
    "npm" => "213040077", 
    "email" => "yudha.kelling@gmail.com", 
    "jurusan" => "Teknik Informatika",
    "gambar" => "gon.jpg"]
  ];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>

</body>
</html>