-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jan 2022 pada 16.38
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alzarawedding`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `adat`
--

CREATE TABLE `adat` (
  `idAdat` int(11) NOT NULL,
  `penjelasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `adat`
--

INSERT INTO `adat` (`idAdat`, `penjelasan`) VALUES
(1, 'Pernikahan kami menggunakan adat jawa dan sunda yang dipadukan dengan nuansa modern..');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cerita`
--

CREATE TABLE `cerita` (
  `idCerita` int(11) NOT NULL,
  `gambarCerita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cerita`
--

INSERT INTO `cerita` (`idCerita`, `gambarCerita`) VALUES
(1, 'team1.jpg'),
(2, 'team3.jpg'),
(3, 'team8.jpg'),
(4, 'team4.jpg'),
(5, 'team6.jpg'),
(6, 'team10.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen_pernikahan`
--

CREATE TABLE `dokumen_pernikahan` (
  `idpengenalan` int(11) NOT NULL,
  `awalan` text NOT NULL,
  `isi` text NOT NULL,
  `penutupan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokumen_pernikahan`
--

INSERT INTO `dokumen_pernikahan` (`idpengenalan`, `awalan`, `isi`, `penutupan`) VALUES
(2, 'Sebelum membina rumah tangga bersama, tentunya kamu dan pasanganmu harus telah resmi dinyatakan sebagai suami istri secara hukum negara dan hukum agama.', 'Proses pengumpulan dokumen-dokumen ini diperlukan untuk menerbitkan akte nikah sebelum melangsungkan pencatatan sipil.', 'Kamu harus mengumpulkan dokumen pribadi serta surat-surat keterangan yang diperlukan agar proses pencatatan sipil dan upacara pernikahan dapat dilangsungkan dengan lancar dan tanpa gangguan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galery`
--

CREATE TABLE `galery` (
  `idGalery` int(11) NOT NULL,
  `judulPhoto` text NOT NULL,
  `namaFile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galery`
--

INSERT INTO `galery` (`idGalery`, `judulPhoto`, `namaFile`) VALUES
(11, '', '1.jpg'),
(12, '', '2.jpg'),
(13, '', '3.jpg'),
(14, '', '4.jpg'),
(15, '', '5.jpg'),
(16, '', '6.jpg'),
(29, '', '7.jpg'),
(30, '', '8.jpg'),
(31, '', '9.jpg'),
(32, '', '10.jpg'),
(33, '', '11.jpg'),
(34, '', '12.jpg'),
(35, '', '13.jpg'),
(36, '', '14.jpg'),
(37, '', '15.jpg'),
(38, '', '16.jpg'),
(39, '', '17.jpg'),
(40, '', '18.jpg'),
(41, '', '19.jpg'),
(42, '', '20.jpg'),
(43, '', '21.jpg'),
(44, '', '22.jpg'),
(45, '', '23.jpg'),
(46, '', '24.jpg'),
(47, '', '25.jpg'),
(48, '', '26.jpg'),
(49, '', '27.jpg'),
(50, '', '28.jpg'),
(51, '', '29.jpg'),
(52, '', '30.jpg'),
(53, '', '31.jpg'),
(54, '', '32.jpg'),
(55, '', '33.jpg'),
(56, '', '34.jpg'),
(57, '', '35.jpg'),
(58, '', '36.jpg'),
(59, '', '37.jpg'),
(60, '', '38.jpg'),
(61, '', '39.jpg'),
(62, '', '40.jpg'),
(63, '', '41.jpg'),
(64, '', '42.jpg'),
(65, '', '43a.jpg'),
(66, '', '44a.jpg'),
(67, '', '45a.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `judul`
--

CREATE TABLE `judul` (
  `idjudul` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `tglResepsi` date NOT NULL,
  `jamResepsi` time NOT NULL,
  `alamatResepsi` text NOT NULL,
  `namaGedung` text NOT NULL,
  `fileGambar` text NOT NULL,
  `gambarGedung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `judul`
--

INSERT INTO `judul` (`idjudul`, `judul`, `tglResepsi`, `jamResepsi`, `alamatResepsi`, `namaGedung`, `fileGambar`, `gambarGedung`) VALUES
(1, 'A L Z A R A  -  W E D D I N G', '2020-12-02', '08:03:22', 'Jl. Terusan Jend.Sudirman, Cibeber, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40531                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ', 'Gedung Sasana Krida Unjani', '135870902_680142759334260_8784870132133760654_n.jpg', 'gedung.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsep_pernikahan`
--

CREATE TABLE `konsep_pernikahan` (
  `idpengenalan` int(11) NOT NULL,
  `awalan` text NOT NULL,
  `isi` text NOT NULL,
  `penutupan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsep_pernikahan`
--

INSERT INTO `konsep_pernikahan` (`idpengenalan`, `awalan`, `isi`, `penutupan`) VALUES
(1, 'Soal konsep pernikahan mesti diperhatikan ketika kamu ingin menikah.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\r\nDi semua acara, budget adalah hal yang paling utama, tapi konsep juga penting.\r\n\r\nAda dua konsep dasar pernikahan yang umum dipilih para calon pengantin di Indonesia, pertama adalah tradisional dan satu lagi adalah Nasional atau Internasional. Setelah budget maksimal kamu tentukan, maka persiapan pernikahan selanjutnya adalah memilih konsep yang sesuai dengan budget.', 'So, Tradisional atau Internasional nih?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_pernikahan`
--

CREATE TABLE `paket_pernikahan` (
  `idPaket` int(100) NOT NULL,
  `NamaPaket` varchar(100) NOT NULL,
  `HargaPaket` varchar(300) NOT NULL,
  `NamaFile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paket_pernikahan`
--

INSERT INTO `paket_pernikahan` (`idPaket`, `NamaPaket`, `HargaPaket`, `NamaFile`) VALUES
(1, '♥ SIRAMAN PACKAGE', '', '2.png'),
(2, '♥ ENGAGEMENT PACKAGE', '', '3.png'),
(3, '♥ WEDDING SPECIALIST', '', '4.png'),
(4, '♥ AKAD PACKAGE', '', '5.png'),
(5, '♥ WEDDING PACKAGE', '', '6.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sosmed`
--

CREATE TABLE `sosmed` (
  `idSosmed` int(11) NOT NULL,
  `ig` text NOT NULL,
  `email` text NOT NULL,
  `telpon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sosmed`
--

INSERT INTO `sosmed` (`idSosmed`, `ig`, `email`, `telpon`) VALUES
(2, 'https://www.instagram.com/alzaraweddingplanner/', 'mailto:alzarawedding@gmail.com', 'https://api.whatsapp.com/send?phone=628111666664&text=Halo%20Alzara,%20ingin%20tanya%20soal%20wedding..');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `idVideo` int(100) NOT NULL,
  `NamaVideo` varchar(255) NOT NULL,
  `LokasiVideo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`idVideo`, `NamaVideo`, `LokasiVideo`) VALUES
(1, 'hsv.jpg', 'Alzara-Wedding\\Admin\\fileUpload');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wedding_planner`
--

CREATE TABLE `wedding_planner` (
  `idpengenalan` int(11) NOT NULL,
  `awalan` text NOT NULL,
  `isi` text NOT NULL,
  `penutupan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wedding_planner`
--

INSERT INTO `wedding_planner` (`idpengenalan`, `awalan`, `isi`, `penutupan`) VALUES
(3, 'Agar pernikahan berjalan semestinya perlu ada yang mengorganisir, mulai dari persiapan pernikahan sampai ke pesta pernikahan nantinya.', 'Beberapa orang mungkin memilih menunjuk keluarga dan teman-teman terdekat sebagai panitianya, tapi banyak juga yang mempercayakan kepada Wedding Organizer / Wedding Planner.', 'Agar pernikahan impian kamu dan pasanganmu menjadi kenyataan, percayakan pada ALZARA WEDDING. Kami akan membantu untuk mewujudkan hari bahagiamu!');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `adat`
--
ALTER TABLE `adat`
  ADD PRIMARY KEY (`idAdat`);

--
-- Indeks untuk tabel `cerita`
--
ALTER TABLE `cerita`
  ADD PRIMARY KEY (`idCerita`);

--
-- Indeks untuk tabel `dokumen_pernikahan`
--
ALTER TABLE `dokumen_pernikahan`
  ADD PRIMARY KEY (`idpengenalan`);

--
-- Indeks untuk tabel `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`idGalery`);

--
-- Indeks untuk tabel `judul`
--
ALTER TABLE `judul`
  ADD PRIMARY KEY (`idjudul`);

--
-- Indeks untuk tabel `konsep_pernikahan`
--
ALTER TABLE `konsep_pernikahan`
  ADD PRIMARY KEY (`idpengenalan`);

--
-- Indeks untuk tabel `paket_pernikahan`
--
ALTER TABLE `paket_pernikahan`
  ADD PRIMARY KEY (`idPaket`);

--
-- Indeks untuk tabel `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`idSosmed`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`idVideo`);

--
-- Indeks untuk tabel `wedding_planner`
--
ALTER TABLE `wedding_planner`
  ADD PRIMARY KEY (`idpengenalan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `adat`
--
ALTER TABLE `adat`
  MODIFY `idAdat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `cerita`
--
ALTER TABLE `cerita`
  MODIFY `idCerita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `dokumen_pernikahan`
--
ALTER TABLE `dokumen_pernikahan`
  MODIFY `idpengenalan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `galery`
--
ALTER TABLE `galery`
  MODIFY `idGalery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `judul`
--
ALTER TABLE `judul`
  MODIFY `idjudul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `konsep_pernikahan`
--
ALTER TABLE `konsep_pernikahan`
  MODIFY `idpengenalan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `paket_pernikahan`
--
ALTER TABLE `paket_pernikahan`
  MODIFY `idPaket` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `idSosmed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `idVideo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `wedding_planner`
--
ALTER TABLE `wedding_planner`
  MODIFY `idpengenalan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
