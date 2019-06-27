-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2019 at 07:45 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_password`) VALUES
(1111, 'diki1'),
(1112, 'yunus1'),
(1113, 'iqbal1');

-- --------------------------------------------------------

--
-- Table structure for table `detail_reservasi`
--

CREATE TABLE `detail_reservasi` (
  `no_reservasi` int(11) NOT NULL,
  `kode_pertandingan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_reservasi`
--

INSERT INTO `detail_reservasi` (`no_reservasi`, `kode_pertandingan`, `jumlah`) VALUES
(1112, 209, 10),
(1128, 203, 15),
(1211, 105, 8),
(1240, 109, 20),
(2321, 106, 15);

-- --------------------------------------------------------

--
-- Table structure for table `pertandingan`
--

CREATE TABLE `pertandingan` (
  `kode_pertandingan` int(11) NOT NULL,
  `partai_pertandingan` varchar(100) NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `stok_tiket` int(11) NOT NULL,
  `waktu_pertandingan` datetime NOT NULL,
  `stadion` varchar(40) NOT NULL,
  `liga` enum('liga1','liga2','pialapresiden','') NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertandingan`
--

INSERT INTO `pertandingan` (`kode_pertandingan`, `partai_pertandingan`, `harga_tiket`, `stok_tiket`, `waktu_pertandingan`, `stadion`, `liga`, `gambar`) VALUES
(100, 'PERSEBAYA FC VS PSIS SEMARANG', 70000, 10000, '2019-02-01 15:30:00', 'Gelora Bung Tomo, Surabaya', 'liga1', 'L1 5.JPG'),
(101, 'BHAYANGKARA FC VS BALI UNITED FC', 60000, 9000, '2019-02-01 18:30:00', 'PTIK, Jakarta Selatan', 'liga1', 'L1 1.JPG'),
(102, 'MADURA UNITED VS PERSELA LAMONGAN', 70000, 10000, '2019-02-02 15:30:00', 'Ratu Pamelingan, Pamekasan', 'liga1', 'L1 2.JPG'),
(103, 'PERSIB BANDUNG VS PS BARITO PUTERA', 80000, 12000, '2019-02-02 18:30:00', 'Kapten I Wayan Dipta, Gianyar', 'liga1', 'L1 3.JPG'),
(104, 'PSM MAKASSAR VS PSMS', 65000, 10000, '2019-02-03 15:30:00', 'Andi Mattalatta, Makassar', 'liga1', 'L1 6.JPG'),
(105, 'BORNEO FC VS PS.TIRA', 65000, 9000, '2019-02-03 18:30:00', 'Segiri, Samarinda', 'liga1', 'L1 7.JPG'),
(106, 'PERSIPURA JAYAPURA VS PERSERU', 80000, 12000, '2019-02-04 15:30:00', 'Mandala, Jayapura', 'liga1', 'L1 9.JPG'),
(107, 'AREMA FC VS SRIWIJAYA FC', 70000, 12000, '2019-02-04 18:30:00', 'Kanjuruhan, Kab. Malang', 'liga1', 'L1 8.JPG'),
(108, 'PERSIJA JAKARTA VS MITRA KUKAR FC', 80000, 12000, '2019-02-05 15:30:00', 'Gelora Bung Karno, Jakarta', 'liga1', 'L1 10.JPG'),
(109, 'PSM MAKASSAR VS PERSIJA JAKARTA', 80000, 13000, '2019-02-05 18:30:00', 'Andi Mattalatta, Makassar', 'liga1', 'L1 11.JPG'),
(200, 'PERSIS VS SEMEN PADANG', 50000, 9000, '2019-03-10 15:30:00', 'Gelora Haji Agus Salim, Padang', 'liga2', 'L2 0.JPG'),
(201, 'BLITAR UNITED VS PSBS', 50000, 10000, '2019-03-10 18:30:00', 'S Soepriadi, Blitar', 'liga2', 'L2 1.JPG'),
(202, 'PSPS VS PSIR', 50000, 10000, '2019-03-11 15:30:00', 'Krida, Rembang', 'liga2', 'L2 2.JPG'),
(203, 'PERSIBAT VS ACEH UNITED', 50000, 10000, '2019-03-11 18:30:00', 'Sarengat', 'liga2', 'L2 3.JPG'),
(204, 'PERSIRAJA VS PERSIK KENDAL', 50000, 10000, '2019-03-12 15:30:00', 'Dimurthala', 'liga2', 'L2 4.JPG'),
(205, 'KALTENG PUTRA VS PERSIBA BALIKPAPAN', 50000, 10000, '2019-03-12 18:30:00', 'Batakan', 'liga2', 'L2 5.JPG'),
(206, 'PERSIKA VS CILEGON UNITED', 50000, 10000, '2019-03-13 15:30:00', 'Singa Perbangsa', 'liga2', 'L2 6.JPG'),
(207, 'MARTAPURA VS PERSIWA', 50000, 10000, '2019-03-13 18:30:00', 'Demang Lehman', 'liga2', 'L2 7.JPG'),
(208, 'PERSERANG VS PERSITA', 50000, 10000, '2019-03-14 15:30:00', 'Dasana Indah, Tangerang', 'liga2', 'L2 8.JPG'),
(209, 'MADURA FC VS PSIM', 50000, 10000, '2019-03-14 18:30:00', 'Sultan Agung, Bantul, Yogyakarta', 'liga2', 'L2 9.JPG'),
(300, 'PERSIB BANDUNG VS PS TNI', 70000, 11000, '2019-04-22 15:30:00', 'Si Jalak Harupat', 'pialapresiden', 'ppres 0.JPG'),
(301, 'PERSERU SERUI VS PERSEBAYA', 70000, 11000, '2019-04-22 18:30:00', 'Si Jalak Harupat', 'pialapresiden', 'p pres 1.JPG'),
(302, 'BHAYANGKARA FC VS SEMEN PADANG', 70000, 11000, '2019-04-23 15:30:00', 'Patriot', 'pialapresiden', 'p pres 2.JPG'),
(303, 'BALI UNITED VS MITRA KUTAI KARTANEGARA', 70000, 11000, '2019-04-23 18:30:00', 'Patriot', 'pialapresiden', 'p pres 3.JPG'),
(304, 'AREMA FC VS BARITO PUTERA', 70000, 11000, '2019-04-24 15:30:00', 'Kanjuruhan', 'pialapresiden', 'p pres 4.JPG'),
(305, 'PERSITA VS PERSELA LAMONGAN', 70000, 11000, '2019-04-24 18:30:00', 'Kanjuruhan', 'pialapresiden', 'p pres 5.JPG'),
(306, 'PSS VS MADURA UNITED', 70000, 11000, '2019-04-25 15:30:00', 'Maguwoharjo', 'pialapresiden', 'p pres 6.JPG'),
(307, 'PERSIJA JAKARTA VS BORNEO FC', 70000, 11000, '2019-04-25 18:30:00', 'Maguwoharjo', 'pialapresiden', 'p pres 7.JPG'),
(308, 'PSM MAKASSAR VS KALTENG PUTRA', 70000, 11000, '2019-04-26 15:30:00', 'Madya Magelang', 'pialapresiden', 'p pres 8.JPG'),
(309, 'PSIS VS PERSIPURA JAYAPURA', 70000, 11000, '2019-04-26 18:30:00', 'Madya Magelang', 'pialapresiden', 'p pres 9.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `no_reservasi` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `tgl_reservasi` date NOT NULL,
  `tgl_bayar` date NOT NULL,
  `tgl_kirim` date NOT NULL,
  `status_kirim` varchar(20) NOT NULL,
  `status_bayar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`no_reservasi`, `admin_id`, `cus_id`, `tgl_reservasi`, `tgl_bayar`, `tgl_kirim`, `status_kirim`, `status_bayar`) VALUES
(1112, 1111, 9897, '2018-10-08', '2018-10-10', '2018-10-11', 'Terkirim', 'Terbayar'),
(1128, 1111, 1, '2018-10-21', '2018-10-22', '2018-10-23', 'Terkirim', 'Terbayar'),
(1211, 1113, 4536, '2018-11-01', '2018-11-02', '2018-11-03', 'Terkirim', 'Terbayar'),
(1240, 1113, 2, '2018-11-26', '2018-11-26', '2018-11-27', 'Terkirim', 'Terbayar'),
(2321, 1112, 9989, '2018-12-01', '2018-12-05', '2018-12-06', 'Terkirim', 'Terbayar');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `alamat`, `email`, `no_hp`, `password`) VALUES
('Musa', 'kotagede', 'musafitriyadi@gmail.', '123123123', '123123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `detail_reservasi`
--
ALTER TABLE `detail_reservasi`
  ADD KEY `no_reservasi` (`no_reservasi`,`kode_pertandingan`),
  ADD KEY `kode_pertandingan` (`kode_pertandingan`);

--
-- Indexes for table `pertandingan`
--
ALTER TABLE `pertandingan`
  ADD PRIMARY KEY (`kode_pertandingan`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`no_reservasi`),
  ADD KEY `admin_id` (`admin_id`,`cus_id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_reservasi`
--
ALTER TABLE `detail_reservasi`
  ADD CONSTRAINT `detail_reservasi_ibfk_1` FOREIGN KEY (`kode_pertandingan`) REFERENCES `pertandingan` (`kode_pertandingan`),
  ADD CONSTRAINT `detail_reservasi_ibfk_2` FOREIGN KEY (`no_reservasi`) REFERENCES `reservasi` (`no_reservasi`);

--
-- Constraints for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `reservasi_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `reservasi_ibfk_2` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
