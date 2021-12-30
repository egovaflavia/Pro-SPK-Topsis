-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 30, 2021 at 09:40 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_topsis_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_alternative`
--

CREATE TABLE `tb_alternative` (
  `alternative_id` int(11) NOT NULL,
  `alternative_nama` varchar(50) DEFAULT NULL,
  `alternative_nip` varchar(50) DEFAULT NULL,
  `alternative_tgl_lahir` date DEFAULT NULL,
  `alternative_alamat` varchar(50) DEFAULT NULL,
  `alternative_agama` varchar(50) DEFAULT NULL,
  `alternative_jenis_kelamin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alternative`
--

INSERT INTO `tb_alternative` (`alternative_id`, `alternative_nama`, `alternative_nip`, `alternative_tgl_lahir`, `alternative_alamat`, `alternative_agama`, `alternative_jenis_kelamin`) VALUES
(5, 'Test', '15101152610542', '1996-08-13', 'Padang', 'Islam', 'Laki-Laki'),
(6, 'Egova Riva', '100000', '1996-08-13', 'Padang', 'Islam', 'Laki-Laki'),
(7, 'Et dolore aut quia c', 'Necessitatibus amet', '2000-10-23', 'Eum asperiores quia ', 'Hindu', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `kriteria_id` int(11) NOT NULL,
  `kriteria_nama` varchar(50) DEFAULT NULL,
  `kriteria_sifat` varchar(50) DEFAULT NULL,
  `kriteria_bobot` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`kriteria_id`, `kriteria_nama`, `kriteria_sifat`, `kriteria_bobot`) VALUES
(1, 'Profesionalisme', 'Benefit', 5),
(2, 'Kinerja', 'Benefit', 4),
(3, 'Kepribadian', 'Benefit', 4),
(4, 'Sosial', 'Benefit', 3),
(5, 'Kepatuhan', 'Benefit', 4),
(6, 'Usia', 'Cost', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `nilai_id` int(11) NOT NULL,
  `alternative_id` int(11) DEFAULT NULL,
  `nilai_c1` int(11) DEFAULT NULL,
  `nilai_c2` int(11) DEFAULT NULL,
  `nilai_c3` int(11) DEFAULT NULL,
  `nilai_c4` int(11) DEFAULT NULL,
  `nilai_c5` int(11) DEFAULT NULL,
  `nilai_c6` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`nilai_id`, `alternative_id`, `nilai_c1`, `nilai_c2`, `nilai_c3`, `nilai_c4`, `nilai_c5`, `nilai_c6`) VALUES
(8, 5, 5, 3, 2, 4, 2, 4),
(9, 6, 3, 2, 4, 5, 2, 1),
(11, 7, 3, 2, 1, 1, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_username` varchar(255) NOT NULL,
  `pengguna_password` varchar(255) NOT NULL,
  `pengguna_nama` varchar(255) NOT NULL,
  `pengguna_level` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`pengguna_id`, `pengguna_username`, `pengguna_password`, `pengguna_nama`, `pengguna_level`) VALUES
(14, 'Admin', 'admin', 'Administrator', '1'),
(15, 'Pimpinan', 'Pimpinan', 'Pimpinan', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alternative`
--
ALTER TABLE `tb_alternative`
  ADD PRIMARY KEY (`alternative_id`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`kriteria_id`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`nilai_id`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alternative`
--
ALTER TABLE `tb_alternative`
  MODIFY `alternative_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `kriteria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `nilai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
