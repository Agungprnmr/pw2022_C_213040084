<?php
// date
// untuk menampilkan tanggal, bulan, tahun dengan format tertentu

echo date("l, d-M-Y");


// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januaru 1970 sampai sekarang

echo time ();
echo date ("l M Y", time ()-60*60*24*100);

//mktime
// membuat detik sendiri
// mktime (0,0,0,0,0,0) 6 angka
// jam , menit, detik, bulan, tanggal, tahun
echo date ("l", mktime( 0,0,0,04,07,2001));

//strtotime
echo date ("l", strtotime("07 apr 2001"));

//catatan pribadi :
// maaf sebelumnya pak ditulis disini agar tidak lupa dan hilang.
// beberapa function yang sering dipake seperti :
//string :
// strlen () : untuk menghitung panjang sebuah string length dari sebuah string
// strcmp () : untuk membandingkan 2 buah string
// explode () : untuk memecah string menjadi array
// htmlspecialchars () : functions khusus untuk menjaga kita dari hacker

//utility :
// var_dump () : sebuah fungsi untuk mencetak isi dari sebuah variable dll.
// isset () : sering digunakan untuk mengecek sebuah variable apakah sudah dibikin atau belum, dan menghasilkan boolean (true or false)
// empty () : untuk mengecek variable yg ada itu kosong atau ada isinya
// die () : untuk memberhentikan program
// sleep () : untuk memberhentikan program sementara (contoh: berhenti beberapa detik)

?>