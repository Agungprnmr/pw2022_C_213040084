<?php
// pertemuan 5 - Array
// array adalah variable yang bisa menampung/menyimpan banyak nilai sekaligus

$hari1 = "Senin";
$hari2 = "Selasa";

$bulan1 = "Januari";
$bulan2 = "Februari";

$mahasiswa1 = "Agung";

// Membuat ARRAY

$hari = ["Senin", "Selasa", "Rabu","Kamis",]; // Cara baru

$bulan = array ("Januari", "Februari", "Maret"); // Cara lama

$myArr = [10, "Agung", true];

// Mencetak ARRAY
// Mencetak 1 elemen di dalam array, menggunakan index (didalam array ada index)
// indexnya dimulai dari 0
echo $hari [0];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $myArr[0];

// mencetak menggunakan var_dump() atau print_r ()
// khusus untuk debugging
// bukan untuk user
echo "<hr>";
var_dump($hari);
echo "<hr>";
print_r($bulan);
echo "<hr>";

// versi count
for ($i = 0; $i < count($hari); $i++) {
    echo $hari [$i];
    echo "<br>";
}
echo "<hr>";

// versi manual
for ($i = 0; $i < 4; $i++) {
    echo $hari [$i];
    echo "<br>";
}
echo "<hr>";

for ($i = 0; $i < count($bulan); $i++) {
    echo $bulan [$i];
    echo "<br>";
}
echo "<hr>";

// foreach
// spesial untuk array
foreach($bulan as $b) {
    echo $b;
    echo "<br>";
}
echo "<hr>";

foreach ($bulan as $key => $value) {
    echo "key: $key - Value: $value";
    echo "<br>";
} 
echo "<hr>";


// Memanipulasi ARRAY
// Menambah elemen baru di akhir array

$hari[] = "Jum'at";
$hari[] = "Sabtu";
print_r($hari);
echo "<hr>"
?>