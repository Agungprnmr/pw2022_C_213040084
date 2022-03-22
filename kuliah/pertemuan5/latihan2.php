<?php

// ARRAY Multidimensi
// ARRAY didalam array

$mahasiswa = [
    ["Agung Purnama Rahmat", "213040084", "agungmamez@gmail.com", "Teknik Informatika"], 
    ["Muhammad Fauzan", "213040104", [1,2,3], "mfauzanabdurrach84@gmail.com", "Teknik Informatika"]
];

echo $mahasiswa [1][2][1]; //2

?>