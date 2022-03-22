<?php
// Array Numerik
// Array yang index nya berasosiasi / berpasangan dengan angka


$mahasiswa = [

    ["Agung Purnama Rahmat", "213040084", "agungmamez@gmail.com", "Teknik Informatika"],
    ["Syahran Akbar", "213040099", "syahranakbar293@gmail.com", "Teknik Informatika"]


];

//var_dump($mahasiswa [1][3]);
?>

<?php foreach($mahasiswa as $mhs) { ?>

<ul>
    <li>Nama : <?php echo $mhs [0]; ?></li>
    <li>NPM : <?php echo $mhs [1]; ?></li>
    <li>Email : <?php echo $mhs [2]; ?></li>
    <li>Jurusan : <?php echo $mhs [3]; ?></li>
</ul>

<?php } ?>