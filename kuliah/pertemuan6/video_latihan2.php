<?php 
$mahasiswa = [
    ["Agung Purnama Rahmat", "213040084", "Teknik Informatika", "agungmamez@gmail.com"],
    ["fasya", "213040090", "Teknik Informatika", "fasya@gmail.com"]
];

// array associative
// definisinya sama seperti array numerik kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Agung purnama rahmat",
        "nrp" => "213040084",
        "email" => "agungmamez@gmail.com",
        "jurusan"=> "teknik informatika",
        "gambar" => "gon.jpg"
    ],
    [
        "nama" => "kirito",
        "nrp" => "213040084",
        "email" => "agungprnmr@gmail.com",
        "jurusan"=> "teknik informatika",
        "gambar" => "killua.jpg"
    ]
];
echo $mahasiswa [1]["jurusan"][1];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

<?php foreach ( $mahasiswa as $mhs ) : ?>
<ul>
    <li>
        <img src="img/<?= $mhs ["gambar"];?>">
    </li>
    <li>Nama :<?= $mhs ["nama"]; ?></li>
    <li>NRP :<?= $mhs ["nrp"]; ?></li>
    <li>Jurusan :<?= $mhs ["email"]; ?></li>
    <li>Email :<?= $mhs ["jurusan"]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>