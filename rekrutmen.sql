-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 10:50 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekrutmen`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `angkatan` year(4) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `goldar` varchar(10) NOT NULL,
  `anak_ke` varchar(10) NOT NULL,
  `ayah` varchar(50) NOT NULL,
  `ibu` varchar(50) NOT NULL,
  `kerja_ayah` varchar(50) NOT NULL,
  `kerja_ibu` varchar(50) NOT NULL,
  `status_tinggal` varchar(50) NOT NULL,
  `status_kelas` varchar(50) NOT NULL,
  `liqo` varchar(50) NOT NULL,
  `organisasi` varchar(100) NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status_pendidikan` varchar(50) NOT NULL,
  `alasan_gabung` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nim`, `nama`, `jk`, `jurusan`, `prodi`, `kelas`, `angkatan`, `tempat_lahir`, `tanggal_lahir`, `goldar`, `anak_ke`, `ayah`, `ibu`, `kerja_ayah`, `kerja_ibu`, `status_tinggal`, `status_kelas`, `liqo`, `organisasi`, `hobi`, `email`, `status_pendidikan`, `alasan_gabung`) VALUES
(1, '061830311271', 'M Rizwa', 'Laki-Laki', 'Teknik Komputer', 'Teknologi Informatika dan Multimedia Digital', '1 TIA', 2021, 'Air Itam', '2019-10-16', 'O+', '6', 'Mahari', 'Asia', 'Petani', 'Petani', 'Kosan', 'Maba', 'KSM', 'OSIS', 'Membaca', 'dia@gmail.com', 'Mahasiswa', 'ingin meningkatkan pemahaman agama'),
(2, '061830311274', 'Affan Hanif', 'Laki-Laki', 'Teknik Komputer', 'Teknologi Informatika dan Multimedia Digital', '1 TIA', 2021, 'Air Itam', '2019-10-16', 'O+', '6', 'Mahari', 'Asia', 'Petani', 'Petani', 'Kosan', 'Maba', 'KSM', 'OSIS', 'Membaca', 'dia@gmail.com', 'Mahasiswa', 'ingin meningkatkan pemahaman agama');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `wa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nim`, `password`, `wa`) VALUES
(10, '061830311274', 'athtarech', '082269599529'),
(11, '061830311271', 'athtarech', '08226959952');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nim` (`nim`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `biodata`
--
ALTER TABLE `biodata`
  ADD CONSTRAINT `biodata_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `user` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
