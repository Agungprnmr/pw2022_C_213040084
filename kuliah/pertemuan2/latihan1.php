<?php 
// 
// VARIABEL
// tempat penyimpanan nilai
// nilai : Angka (interger), tulisan (string), boolean (true/false)
// nama bebas, tidak boleh ada spasi
// boleh ada angka tapi tidak diawal

$nama1 = "Agung Purnama Rahmat 1 ";
echo $nama1;
echo "<hr>";


// OPERATOR
// Aritmatika
// +, -, *, /, %
echo 10 * 10;
echo "<br>";
echo 20 - 10;
echo "<br>" ;
echo 1 + 2 * 3 - 4; // kabataku
echo "<br>" ;
echo 10 % 5;
echo "<hr>";

//perbandingan
// <, >, <=, >=, ==, !=

echo 1 < 2; //true / 1
echo "<br>";
echo 10 < 5; //false / null (hilang/tidak bernilai/tidak tampil)
echo "<br>";
echo 10 == "10"; //true

//identitas
// ===, !==
// mengecek nilai beserta tipe data nya
echo 10 === "10";
echo "<hr>";

// incerement / decrement
// penambahan / pengurangan 1
//==, --
$x = 10;
echo $x++; 
echo "<br>";
echo ++$x;

// concat, penggabung string
// . 
$nama_depan = "Agung";
$nama_belakang = "Purnama";
echo $nama_depan . " " . $nama_belakang;

?>