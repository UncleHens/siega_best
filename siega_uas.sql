-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2025 at 09:46 AM
-- Server version: 8.0.30
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siega_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id` int NOT NULL,
  `nama` varchar(150) NOT NULL,
  `nidn` varchar(50) DEFAULT NULL,
  `bidang_keahlian` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `no_wa` varchar(30) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `biografi` text,
  `riwayat_pendidikan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id`, `nama`, `nidn`, `bidang_keahlian`, `email`, `no_wa`, `foto`, `biografi`, `riwayat_pendidikan`) VALUES
(1, 'Prof. Dr. Ridwan Sanjaya S.E., S.Kom., MS.IEC', '5812002255', 'Sistem Informasi', 'ridwan@unika.ac.id', '0818298462', 'dosen1.jpg', 'Profesor di bidang Sistem Informasi, penulis lebih dari 100 buku teknologi informasi.', 'S1 Ekonomi, S1 Sistem Informasi, MS & PhD Graduate School of IT, Assumption University'),
(2, 'Dr. Bernadinus Harnadi S.T., M.T', '5811994158', 'Teknik Elektro & Sistem Informasi', 'bharnadi@unika.ac.id', '0895392011919', 'dosen2.jpg', 'Dekan Fakultas Ilmu Komputer dengan pengalaman riset teknologi digital.', 'S1 Teknik Elektro UNDIP, S2 Teknik Elektro UGM, PhD IT Assumption University'),
(3, 'Dr. Albertus Dwiyoga Widiantoro S.Kom., M.Kom', '5812015296', 'Sistem Informasi', 'yoga@unika.ac.id', '081325723410', 'dosen3.jpg', 'Dosen Sistem Informasi yang fokus pada database, mail server, dan teknologi informasi.', 'S1 SI Unika, S2 SI, Doktor Sistem Informasi UNDIP'),
(4, 'Andre Kurniawan Pamudji S.Kom., M.Ling', '5812021403', 'Sistem Informasi', 'andre.kurniawan@unika.ac.id', '089627473395', 'dosen4.jpg', 'Sekretaris Program Studi SI, berpengalaman dalam AR/VR dan pengembangan aplikasi.', 'S1 SI Unika, S2 Lingkungan dan Perkotaan Unika'),
(5, 'Stephani Inggrit Swastini S.Kom, MBA', '5812023424', 'Sistem Informasi', 'stephaniinggrit@unika.ac.id', '081578418558', 'dosen5.jpg', 'Koordinator Magang Prodi SI, berpengalaman di industri dan penelitian internasional.', 'S1 SI Unika, MBA Providence University, Taiwan'),
(6, 'Erdhi Widyarto Nugroho S.T., M.T.', '5812002254', 'Dosen Sistem Informasi', 'erdhi@unika.ac.id \r\n', '08122686327', 'Dosen7.jpg', NULL, 'S1 Teknik Elektro UGM (1994)\r\nS2 Teknik Elektro UGM (2004)\r\nSedang studi Doktor Sistem Informasi di Universitas Diponegoro\r\nSekretaris Program Studi Sistem Informasi (2013-2016)\r\nDekan Fakultas Ilmu Komputer (2016-2019)\r\nBiro Bebras Gerakan Google Pandai (sejak 2018)\r\nFokus Penelitian: Game Technology dan IOT\r\n'),
(7, 'Dr. T. Brenda Ch S.T., M.T.', '5811995177', 'Dosen Sistem Informasi', 'brenda@unika.ac.id ', ' 081805190868', 'Dosen8.jpg', NULL, 'Doktor, Universitas Indonesia (2021)\r\nKetua Program Studi Sistem Informasi (2013-2017)\r\nSekretaris Program Profesi Insinyur (sejak 2021)\r\nJuara III Kaprodi Berprestasi Kopertis Wilayah VI Jawa Tengah (2016)'),
(8, 'Agus Cahyo Nugroho S.Kom., M.T.', NULL, 'Dosen Sistem Informasi', 'agus.nugroho@unika.ac.id', '082225636799', 'Dosen6.jpg', NULL, 'Sarjana Komputer, Universitas Kristen Duta Wacana, Yogyakarta (2008)\r\nMagister Teknologi Informasi, Universitas Atmajaya, Yogyakarta (2016).\r\nProfessional IT NIIT Academy, UAJY Yogyakarta (2003-2005)\r\nSekretaris Program Studi Sistem Informasi (2019-2021)\r\nKetua Program Studi Sistem Informasi (sejak 2021)\r\nmata kulian yang diampu antara lain Dasar pembuatan Aplikasi Bergerak, Kecerdasan Bisnis, Pengembangan Web dan Basis Data.\r\nFocus penelitian dii bidang Web and Mobile development, Business Intelligence and Expert System'),
(9, 'Fx. Hendra Prasetya S.T., M.T.', NULL, 'Dosen Sistem Informasi', 'hendra@unika.ac.id \r\n', '0852-9049-9718', 'Dosen9.jpg', NULL, 'Sarjana Teknik Elektro, UNDIP (1991-1996)\r\nMagister Teknik Telekomunikasi, Universitas Indonesia (2001-2003)\r\nEditor in Chief of Journal SISFORMA (2013-2021 )\r\nKoordinator Pengabdian Masyarakat Prodi Sistem Informasi (2019-sekarang)\r\nAnggota APTIKOM (Asosiasi Perguruan Tinggi Informatika dan Komputer), sejak 2020\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id` int NOT NULL,
  `nama_pengirim` varchar(150) NOT NULL,
  `no_wa` varchar(30) DEFAULT NULL,
  `pesan` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
