<?php 
// Array
// Variable yang dapat memiliki banyak hal
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
//key-nya adalah index, yang mulai dari 0

//$nama = "Agung";

//$hari1 = "Senin";
//$hari2 = "Selasa";

//membuat array
// cara lama
$hari = array ("Senin", "Selasa", "Rabu");

//cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

//menampilkan Array
// varr_dump () / Print_r ()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";
// menampilkan 1 elemen pada array
// echo $arr1 [0];
// echo "<br>";
// echo $bulan [1]


// menambahkan elemen baru pada array
var_dump($hari);
$hari [] = "Kamis";
$hari [] = "Jum'at";
echo '<br>';
var_dump($hari);


?>