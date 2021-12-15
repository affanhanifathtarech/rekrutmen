-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 08:33 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(10, 'affan', 'affan'),
(11, 'rizwa', 'rizwa');

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `wa` varchar(20) NOT NULL,
  `jk` tinyint(1) NOT NULL COMMENT '1 = laki-laki\r\n0 = Perempuan',
  `jurusan` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `kelas` varchar(7) NOT NULL,
  `angkatan` year(4) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `goldar` varchar(10) NOT NULL,
  `alamat` varchar(400) NOT NULL,
  `anak_ke` varchar(10) NOT NULL,
  `ayah` varchar(50) NOT NULL,
  `ibu` varchar(50) NOT NULL,
  `kerja_ayah` varchar(50) NOT NULL,
  `kerja_ibu` varchar(50) NOT NULL,
  `status_tinggal` tinyint(1) NOT NULL COMMENT '1 = Merantau\r\n0 = Tidak Merantau',
  `status_kelas` int(1) NOT NULL COMMENT '0 = pagi\r\n1 = siang\r\n2 = malam',
  `rohis` tinyint(1) NOT NULL,
  `liqo` tinyint(1) NOT NULL,
  `organisasi` varchar(200) NOT NULL,
  `hobi` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status_pendidikan` int(1) NOT NULL COMMENT '0 = Lainnya\r\n1 = Bidik Misi\r\n2 = Beasiswa KIP',
  `alasan_gabung` varchar(200) NOT NULL,
  `minat_bakat` varchar(400) NOT NULL,
  `div1` varchar(100) NOT NULL,
  `alasan_div1` varchar(400) NOT NULL,
  `div2` varchar(100) NOT NULL,
  `alasan_div2` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nim`, `nama`, `wa`, `jk`, `jurusan`, `prodi`, `kelas`, `angkatan`, `tempat_lahir`, `tanggal_lahir`, `goldar`, `alamat`, `anak_ke`, `ayah`, `ibu`, `kerja_ayah`, `kerja_ibu`, `status_tinggal`, `status_kelas`, `rohis`, `liqo`, `organisasi`, `hobi`, `email`, `status_pendidikan`, `alasan_gabung`, `minat_bakat`, `div1`, `alasan_div1`, `div2`, `alasan_div2`) VALUES
(1, '061830311271', 'M Rizwa', '', 1, 'Teknik Komputer', 'Teknik Informatika Multimedia Digital (D4)', '1 TIA', 2021, 'Air Itam', '2019-10-16', 'O+', '', '6', 'Mahari', 'Asia', 'Petani', 'Petani', 0, 1, 1, 1, 'OSIS', 'Membaca', 'dia@gmail.com', 0, 'ingin meningkatkan pemahaman agama', '', '', '', '', ''),
(2, '061830311274', 'Affan Hanif Ath Tarech', '082269599529', 1, 'Teknik Elektro', 'Teknik Listrik (D3)', '6LF', 2019, 'Prabumulih', '2000-10-11', 'A', 'rahasia', '1', 'Isdrin', 'Nomilyan Despa Olepi', 'PNS', 'Ibu Rumah Tangga', 0, 0, 1, 1, 'OSIS', 'Bernyanyi', 'dia@gmail.com', 0, 'ingin meningkatkan pemahaman addgamaaas', 'sqsq', 'Pengembangan Sumber Daya Manusia', 'qssq', 'Learning Center', 'sqsq'),
(5, '061830311279', 'Mohan Abdurahman', '0819191', 0, '', '', '', 0000, '', '0000-00-00', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', 0, '', '', '', '', '', ''),
(7, '0618', '', '082268', 0, '', '', '', 0000, '', '0000-00-00', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', 0, '', '', '', '', '', ''),
(8, '0812', 'Affan Hanif Ath Tarech', '099', 0, '', '', '', 0000, '', '0000-00-00', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', 0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nim`, `password`) VALUES
(10, '061830311274', 'athtarech'),
(11, '061830311271', 'athtarech'),
(33, '061830311279', 'mohan'),
(35, '0618', '0618'),
(36, '0812', '0812');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`username`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nim` (`nim`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
