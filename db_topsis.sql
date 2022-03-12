-- Adminer 4.8.1 MySQL 5.5.5-10.4.22-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `tb_alternative`;
CREATE TABLE `tb_alternative` (
  `alternative_id` int(11) NOT NULL AUTO_INCREMENT,
  `alternative_nama` varchar(50) DEFAULT NULL,
  `alternative_nip` varchar(50) DEFAULT NULL,
  `alternative_tgl_lahir` date DEFAULT NULL,
  `alternative_alamat` varchar(50) DEFAULT NULL,
  `alternative_agama` varchar(50) DEFAULT NULL,
  `alternative_jenis_kelamin` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`alternative_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_alternative` (`alternative_id`, `alternative_nama`, `alternative_nip`, `alternative_tgl_lahir`, `alternative_alamat`, `alternative_agama`, `alternative_jenis_kelamin`) VALUES
(5,	'Adit',	'15101152610542',	'1996-08-13',	'Padang',	'Islam',	'Laki-Laki'),
(6,	'Nilam',	'1501230123',	'1996-08-13',	'Padang',	'Islam',	'Laki-Laki');

DROP TABLE IF EXISTS `tb_kriteria`;
CREATE TABLE `tb_kriteria` (
  `kriteria_id` int(11) NOT NULL AUTO_INCREMENT,
  `kriteria_nama` varchar(50) DEFAULT NULL,
  `kriteria_sifat` varchar(50) DEFAULT NULL,
  `kriteria_bobot` int(11) DEFAULT NULL,
  PRIMARY KEY (`kriteria_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_kriteria` (`kriteria_id`, `kriteria_nama`, `kriteria_sifat`, `kriteria_bobot`) VALUES
(1,	'Nilai Matematika',	'Benefit',	4),
(2,	'Nilai Ilmu Pengetahuan Alam',	'Benefit',	5),
(3,	'Nilai Ilmu Pengetahuan Sosial',	'Benefit',	5),
(4,	'Nilai Bahasa Indonesia',	'Benefit',	3),
(5,	'Nilai Bahasa Inggris',	'Benefit',	2),
(6,	'Nilai Rata-Rata SKHU',	'Benefit',	4);

DROP TABLE IF EXISTS `tb_nilai`;
CREATE TABLE `tb_nilai` (
  `nilai_id` int(11) NOT NULL AUTO_INCREMENT,
  `alternative_id` int(11) DEFAULT NULL,
  `nilai_c1` int(11) DEFAULT NULL,
  `nilai_c2` int(11) DEFAULT NULL,
  `nilai_c3` int(11) DEFAULT NULL,
  `nilai_c4` int(11) DEFAULT NULL,
  `nilai_c5` int(11) DEFAULT NULL,
  `nilai_c6` int(11) DEFAULT NULL,
  PRIMARY KEY (`nilai_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_nilai` (`nilai_id`, `alternative_id`, `nilai_c1`, `nilai_c2`, `nilai_c3`, `nilai_c4`, `nilai_c5`, `nilai_c6`) VALUES
(13,	5,	2,	4,	3,	4,	5,	2),
(14,	6,	2,	4,	5,	4,	3,	3);

DROP TABLE IF EXISTS `tb_pengguna`;
CREATE TABLE `tb_pengguna` (
  `pengguna_id` int(11) NOT NULL AUTO_INCREMENT,
  `pengguna_username` varchar(255) NOT NULL,
  `pengguna_password` varchar(255) NOT NULL,
  `pengguna_nama` varchar(255) NOT NULL,
  `pengguna_level` tinytext NOT NULL,
  PRIMARY KEY (`pengguna_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_pengguna` (`pengguna_id`, `pengguna_username`, `pengguna_password`, `pengguna_nama`, `pengguna_level`) VALUES
(14,	'Admin',	'admin',	'Administrator',	'1'),
(15,	'Pimpinan',	'Pimpinan',	'Pimpinan',	'2');

-- 2022-03-12 07:49:23