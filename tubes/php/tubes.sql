-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2022 pada 16.37
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `entertainment`
--

CREATE TABLE `entertainment` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `rating` varchar(7) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `entertainment`
--

INSERT INTO `entertainment` (`id`, `nama`, `genre`, `deskripsi`, `rating`, `gambar`) VALUES
(22, 'Memory', 'Laga/Cerita seru', 'Film Memory berfokus pada Alex Lewis (Liam Neeson), pembunuh bayaran profesional yang ternyata mengidap alzheimer, penyakit pada otak yang menyebabkan menurunnya daya ingat. Tugas Alex makin rumit ketika ia menyadari bahwa kontrak yang telah dia sepakati mengharuskannya membunuh anak di bawah umur.', '⭐5.6/1', 'memory.jpeg'),
(23, 'Uncharted', 'Petualangan/Laga ', 'Film Uncharted menceritakan tentang aksi perburuan harta karun terbesar yang tidak pernah ditemukan. Nathan Drake merupakan seorang bartender yang pintar. Nathan mengaku bahwa dirinya adalah keturunan dari penjelajah kenamaan asal Inggris bernama Sir Francis Drake', '⭐6.4/10', 'uncharted1.jpeg'),
(24, 'The Lost City', 'Laga/Petualangan', 'The Lost City mengisahkan tentang seorang penulis novel yang hobi menyendiri bernama Loretta Sage. Ia baru saja menyelesaikan novel romantis terbarunya yang bercerita tentang kota yang hilang. Saat tengah melakukan promosi untuk novel terbarunya, Loretta Sage diculik oleh lelaki bernama Abigail Fairfax.', '⭐6.2/10', 'the lost city.jpeg'),
(25, 'Sonic the Hedgehog 2', 'Petualangan/Komedi', 'Sonic the Hedgehog 2 merupakan sekuel dari film pertamanya yang tayang di tahun 2020. Lewat produksi Paramount Pictures Indonesia, Sonic 2 menceritakan petualang si landak biru selepas melawan Dr. Robotnik. Sonic (Ben Schwartz) menjalani hidup setelah berhasil mengusir Dr. Robotnik (Jim Carrey) ke planet jamur.', '⭐6.6/10', 'sonic.jpg'),
(26, 'Doctor Strange in the Multiverse of Madness', 'Laga/Petualangan/Film Pahlawan Super', 'Doctor Strange in the Multiverse of Madness adalah film superhero Amerika tahun 2022 berdasarkan karakter Doctor Strange ciptaan Marvel Comics. Diproduksi oleh Marvel Studios dan didistribusikan oleh Walt Disney Studios Motion Pictures, film ini merupakan sekuel dari Doctor Strange (2016) dan film ke-28 dari Marvel Cinematic Universe (MCU). Film ini disutradarai oleh Sam Raimi, ditulis oleh Michael Waldron, dan dibintangi oleh Benedict Cumberbatch sebagai Stephen Strange, bersama Elizabeth Olsen, Chiwetel Ejiofor, Benedict Wong, Xochitl Gomez, Michael Stuhlbarg, dan Rachel McAdams. Dalam film ini, Strange melindungi America Chavez (Gomez), seorang remaja yang mampu menjelajahi multisemesta, dari Wanda Maximoff (Olsen) yang menjadi kacau.', '⭐7.4/10', 'doctor1.jpg'),
(27, 'Spider-Man: No Way Home', 'Laga/Petualangan/Film Pahlawan Super', 'Spiderman No Way Home mengisahkan tentang kegelisahan Peter Parker yang diperankan Tom Holland karena difitnah. Mysterio, yang diperankan oleh Jake Gyllenhaal adalah orang yang memfitnah Parker dan akhirnya mati terlebih dahulu sebelum masalah bisa diselesaikan, kemudian Identitas rahasia Peter Parker terungkap ke seluruh dunia. Putus asa akan bantuan, Peter beralih ke Doctor Strange untuk membuat dunia lupa bahwa dia adalah Spider-Man. Mantranya menjadi sangat salah dan menghancurkan multiverse, membawa penjahat mengerikan yang bisa menghancurkan dunia.', '⭐8.3/10', 'spiderman.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(25, 'admin', '$2y$10$uVuuSzwArv2kmdXnp1gbYeU5SEYzwLZxjKUEkUfB6gySC6rFWtejW', 'admin'),
(26, 'user', '$2y$10$s6zHZJn22B9o3OwvOv7Yr.n/pF4IbKrDX6ZiFjDfBKqNWfHMsyjIS', 'user'),
(27, 'agung', '$2y$10$cHDPLhv1JVzmfDIdgG.grO4UmLJYN3FctjiyziXiC8Wpd3rdbB3we', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `entertainment`
--
ALTER TABLE `entertainment`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `entertainment`
--
ALTER TABLE `entertainment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
