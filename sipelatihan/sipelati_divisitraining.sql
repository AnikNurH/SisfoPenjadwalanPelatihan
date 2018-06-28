-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Sep 2016 pada 21.08
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipelati_divisitraining`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tl`
--

CREATE TABLE `tb_tl` (
  `id_tl` int(3) NOT NULL,
  `id_workshop` int(3) NOT NULL,
  `id_user` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tl`
--

INSERT INTO `tb_tl` (`id_tl`, `id_workshop`, `id_user`) VALUES
(1, 10, 3),
(2, 10, 4),
(3, 10, 5),
(4, 10, 6),
(5, 11, 4),
(6, 11, 6),
(7, 11, 7),
(8, 11, 8),
(9, 12, 7),
(10, 12, 8),
(11, 12, 9),
(12, 12, 10),
(13, 13, 10),
(14, 13, 11),
(15, 13, 12),
(16, 13, 13),
(17, 14, 5),
(18, 14, 14),
(19, 14, 15),
(20, 14, 16),
(21, 15, 10),
(22, 15, 13),
(23, 15, 14),
(24, 15, 15),
(25, 16, 3),
(26, 16, 7),
(27, 16, 8),
(28, 16, 9),
(29, 17, 8),
(30, 17, 9),
(31, 17, 11),
(32, 17, 16),
(33, 18, 5),
(34, 18, 8),
(35, 18, 13),
(36, 18, 14),
(37, 19, 4),
(38, 19, 10),
(39, 19, 11),
(40, 19, 14),
(41, 20, 6),
(42, 20, 13),
(43, 20, 14),
(44, 20, 15),
(45, 21, 8),
(46, 21, 11),
(47, 21, 13),
(48, 21, 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(3) NOT NULL,
  `nip` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `divisi` varchar(20) NOT NULL,
  `level` enum('manajer','staff') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nip`, `username`, `password`, `nama`, `email`, `phone`, `divisi`, `level`) VALUES
(1, 11112345, 'admin', 'admin', 'admin', 'admin@seamolec.org', '08998273888', 'Training', 'manajer'),
(3, 1111120001, 'faizal', 'faizal', 'Faizal Ari Prabowo', 'faizalari@gmail.com', '089982937771', 'training', 'staff'),
(4, 1111120002, 'bima', 'bima', 'Bima Laksana Putra', 'werkudara17@gmail.com', '081221388900', 'itcontent', 'staff'),
(5, 1111120003, 'iqna', 'iqna', 'Iqna Aulia', 'auliaiqna@gmail.com', '085677829873', 'administration', 'staff'),
(6, 1111120004, 'singgih', 'singgih', 'Singgih Mitro S', 'singgih.mitro44@gmail.com', '081321222998', 'itnetwork', 'staff'),
(7, 1111120004, 'nila', 'nila', 'Nila Triana Agustin, M.Kom', 'nila@seamolec.org', '085222444110', 'researchdevelopment', 'staff'),
(8, 1111120005, 'danang', 'danang', 'Danang Purnomo', 'danang.purnomo@gmail.com', '089977829117', 'pr', 'staff'),
(9, 1111120008, 'nia', 'nia', 'Nia Kurnia Asih', 'niakurniaasih@gmail.com', '089988293848', 'training', 'staff'),
(10, 1111120009, 'eet', 'eet', 'Eet Nurhaeti', 'eet@seamolec.org', '081211231132', 'administration', 'staff'),
(11, 1111120002, 'victor', 'victor', 'Victor Manurung', 'victor@seamolec.org', '085678881999', 'training', 'staff'),
(12, 2147483647, 'timbul', 'timbul', 'Timbul Pardede', 'timbul@seamolec.org', '081222889912', 'itnetwork', 'staff'),
(13, 2147483647, 'andri', 'adnri', 'Andri Muharram', 'andri@seamolec.org', '087722311123', 'itnetwork', 'staff'),
(14, 1111120013, 'fajar', 'fajar', 'Fajar Purnomo', 'fajar@seamolec.org', '087889001223', 'itnetwork', 'staff'),
(15, 1111120021, 'syarif', 'syarif', 'Syarif Hidayatullah', 'syarif@seamolec.org', '085882113929', 'pr', 'staff'),
(16, 1111120030, 'anik', 'anik', 'Anik Citra Rahayu', 'anik@seamolec.org', '081223114489', 'researchdevelopment', 'staff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `workshop`
--

CREATE TABLE `workshop` (
  `id_workshop` int(3) NOT NULL,
  `namakegiatan` varchar(30) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `kota` varchar(20) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `institusi` varchar(30) NOT NULL,
  `status` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `workshop`
--

INSERT INTO `workshop` (`id_workshop`, `namakegiatan`, `tgl_awal`, `tgl_akhir`, `kota`, `provinsi`, `institusi`, `status`) VALUES
(10, 'Workshop Digital Class', '2016-09-15', '2016-09-11', 'Sumedang', 'Jawa Barat', 'SMKN 1 Sumedang', '1'),
(11, 'Workshop Digital Class', '2016-09-05', '2016-09-16', 'Purbalingga', 'Jawa Tengah', 'SMKN 1 Purbalingga', '3'),
(12, 'Workshop Digital Class', '2016-09-06', '2016-09-17', 'Sleman', 'Yogyakarta', 'MTs 1 Sleman', '3'),
(13, 'Workshop Digital Class', '2016-09-02', '2016-09-24', 'Probolinggo', 'Jawa Tengah', 'SMKN 1 Probolinggo', '1'),
(14, 'Workshop Digital Class', '2016-09-04', '2016-09-07', 'Cirebon', 'Jawa Barat', 'SMAN 1 Cirebon', '2'),
(15, 'Workshop Digital Class', '2016-09-04', '2016-09-07', 'Bandung', 'Jawa Barat', 'SMAN 1 Bandung', '2'),
(16, 'Workshop Digital Class', '2016-09-04', '2016-09-07', 'Bandung', 'Jawa Barat', 'SMKN 1 Bandung', '3'),
(17, 'Workshop Digital Class', '2016-09-04', '2016-09-07', 'Bandung', 'Jawa Barat', 'SMAN 11 Bandung', '3'),
(18, 'Workshop Digital Class', '2016-09-04', '2016-09-07', 'Palembang', 'Sumatera Selatan', 'SMAN 1 Palembang', '3'),
(19, 'Workshop Digital Class', '2016-09-04', '2016-09-07', 'Malang', 'Jawa Timur', 'SMKN 13 Malang', '2'),
(20, 'Workshop Digital Class', '2016-09-04', '2016-09-07', 'Solo', 'Jawa Tengah', 'SMAN 1 Solo', '3'),
(21, 'Workshop Digital Class', '2016-09-04', '2016-09-07', 'Tegal', 'Jawa Tengah', 'SMKN 2 Tegal', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_tl`
--
ALTER TABLE `tb_tl`
  ADD PRIMARY KEY (`id_tl`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_workshop` (`id_workshop`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id_workshop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_tl`
--
ALTER TABLE `tb_tl`
  MODIFY `id_tl` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id_workshop` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_tl`
--
ALTER TABLE `tb_tl`
  ADD CONSTRAINT `tb_tl_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_tl_ibfk_2` FOREIGN KEY (`id_workshop`) REFERENCES `workshop` (`id_workshop`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
