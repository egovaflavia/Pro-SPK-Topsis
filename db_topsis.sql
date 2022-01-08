/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `tb_kriteria`;
CREATE TABLE `tb_kriteria` (
  `kriteria_id` int(11) NOT NULL AUTO_INCREMENT,
  `kriteria_nama` varchar(50) DEFAULT NULL,
  `kriteria_sifat` varchar(50) DEFAULT NULL,
  `kriteria_bobot` int(11) DEFAULT NULL,
  PRIMARY KEY (`kriteria_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `tb_pengguna`;
CREATE TABLE `tb_pengguna` (
  `pengguna_id` int(11) NOT NULL AUTO_INCREMENT,
  `pengguna_username` varchar(255) NOT NULL,
  `pengguna_password` varchar(255) NOT NULL,
  `pengguna_nama` varchar(255) NOT NULL,
  `pengguna_level` tinytext NOT NULL,
  PRIMARY KEY (`pengguna_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO `tb_alternative` (`alternative_id`, `alternative_nama`, `alternative_nip`, `alternative_tgl_lahir`, `alternative_alamat`, `alternative_agama`, `alternative_jenis_kelamin`) VALUES
(5, 'Test', '15101152610542', '1996-08-13', 'Padang', 'Islam', 'Laki-Laki'),
(6, 'Egova Riva', '100000', '1996-08-13', 'Padang', 'Islam', 'Laki-Laki'),
(7, 'Et dolore aut quia c', 'Necessitatibus amet', '2000-10-23', 'Eum asperiores quia ', 'Hindu', 'Perempuan');

INSERT INTO `tb_kriteria` (`kriteria_id`, `kriteria_nama`, `kriteria_sifat`, `kriteria_bobot`) VALUES
(1, 'Profesionalisme', 'Benefit', 5);
INSERT INTO `tb_kriteria` (`kriteria_id`, `kriteria_nama`, `kriteria_sifat`, `kriteria_bobot`) VALUES
(2, 'Kinerja', 'Benefit', 4);
INSERT INTO `tb_kriteria` (`kriteria_id`, `kriteria_nama`, `kriteria_sifat`, `kriteria_bobot`) VALUES
(3, 'Kepribadian', 'Benefit', 4);
INSERT INTO `tb_kriteria` (`kriteria_id`, `kriteria_nama`, `kriteria_sifat`, `kriteria_bobot`) VALUES
(4, 'Sosial', 'Benefit', 3),
(5, 'Kepatuhan', 'Benefit', 4),
(6, 'Usia', 'Cost', 3);

INSERT INTO `tb_nilai` (`nilai_id`, `alternative_id`, `nilai_c1`, `nilai_c2`, `nilai_c3`, `nilai_c4`, `nilai_c5`, `nilai_c6`) VALUES
(8, 5, 5, 3, 2, 4, 2, 4);
INSERT INTO `tb_nilai` (`nilai_id`, `alternative_id`, `nilai_c1`, `nilai_c2`, `nilai_c3`, `nilai_c4`, `nilai_c5`, `nilai_c6`) VALUES
(9, 6, 3, 2, 4, 5, 2, 1);
INSERT INTO `tb_nilai` (`nilai_id`, `alternative_id`, `nilai_c1`, `nilai_c2`, `nilai_c3`, `nilai_c4`, `nilai_c5`, `nilai_c6`) VALUES
(11, 7, 3, 2, 1, 1, 1, 4);

INSERT INTO `tb_pengguna` (`pengguna_id`, `pengguna_username`, `pengguna_password`, `pengguna_nama`, `pengguna_level`) VALUES
(14, 'Admin', 'admin', 'Administrator', '1');
INSERT INTO `tb_pengguna` (`pengguna_id`, `pengguna_username`, `pengguna_password`, `pengguna_nama`, `pengguna_level`) VALUES
(15, 'Pimpinan', 'Pimpinan', 'Pimpinan', '2');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;