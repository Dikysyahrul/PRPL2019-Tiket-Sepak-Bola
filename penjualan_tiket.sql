-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Bulan Mei 2019 pada 15.07
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan_tiket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_password`) VALUES
(1111, 'diki1'),
(1112, 'yunus1'),
(1113, 'iqbal1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `cus_nama` varchar(30) NOT NULL,
  `cus_alamat` text NOT NULL,
  `cus_notlp` varchar(15) NOT NULL,
  `cus_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_nama`, `cus_alamat`, `cus_notlp`, `cus_password`) VALUES
(1, 'fajri', 'Bantul, Yogyakarta', '087838916161', '123'),
(2, 'kurnia', 'Bantul, Yogtakarta', '08783871231', '123'),
(4536, 'dik', 'Jogja, Yogyakarta', '085734258900', '888'),
(9897, 'daud', 'Yogyakarta', '085436787761', '777'),
(9989, 'madi', 'Yogyakarta', '08334433212', '222');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_reservasi`
--

CREATE TABLE `detail_reservasi` (
  `no_reservasi` int(11) NOT NULL,
  `kode_pertandingan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_reservasi`
--

INSERT INTO `detail_reservasi` (`no_reservasi`, `kode_pertandingan`, `jumlah`) VALUES
(1112, 209, 10),
(1128, 203, 15),
(1211, 105, 8),
(1240, 109, 20),
(2321, 106, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertandingan`
--

CREATE TABLE `pertandingan` (
  `kode_pertandingan` int(11) NOT NULL,
  `partai_pertandingan` varchar(100) NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `stok_tiket` int(11) NOT NULL,
  `waktu pertandingan` varchar(30) NOT NULL,
  `stadion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pertandingan`
--

INSERT INTO `pertandingan` (`kode_pertandingan`, `partai_pertandingan`, `harga_tiket`, `stok_tiket`, `waktu pertandingan`, `stadion`) VALUES
(100, 'PERSEBAYA FC VS PSIS SEMARANG', 70000, 10000, 'Sabtu, 8-12-2018, 15:30 WIB', 'Gelora Bung Tomo, Surabaya'),
(101, 'BHAYANGKARA FC VS BALI UNITED FC', 60000, 9000, 'Sabtu, 8-12-2018, 18:30 WIB', 'PTIK, Jakarta Selatan'),
(102, 'MADURA UNITED VS PERSELA LAMONGAN', 70000, 10000, 'Sabtu, 8-12-2018, 18:30 WIB', 'Ratu Pamelingan, Pamekasan'),
(103, 'PERSIB BANDUNG VS PS BARITO PUTERA', 80000, 12000, 'Sabtu, 8-12-2018, 18:30 WIB', 'Kapten I Wayan Dipta, Gianyar'),
(104, 'PSM MAKASSAR VS PSMS', 65000, 10000, 'Minggu, 9-12-2018, 15:30 WIB', 'Andi Mattalatta, Makassar'),
(105, 'BORNEO FC VS PS.TIRA', 65000, 9000, 'Minggu, 9-12-2018, 15:30 WIB', 'Segiri, Samarinda'),
(106, 'PERSIPURA JAYAPURA VS PERSERU', 80000, 12000, 'Minggu, 9-12-2018, 15:30 WIB', 'Mandala, Jayapura'),
(107, 'AREMA FC VS SRIWIJAYA FC', 70000, 12000, 'Minggu, 9-12-2018, 15:30 WIB', 'Kanjuruhan, Kab. Malang'),
(108, 'PERSIJA JAKARTA VS MITRA KUKAR FC', 80000, 12000, 'Minggu, 9-12-2018, 15:30 WIB', 'Gelora Bung Karno, Jakarta'),
(109, 'PSM MAKASSAR VS PERSIJA JAKARTA', 80000, 13000, 'Jumat, 16-11-2018, 15:30 WIB', 'Andi Mattalatta, Makassar'),
(200, 'PERSIS VS SEMEN PADANG', 50000, 9000, '23-04-2018', 'Gelora Haji Agus Salim, Padang'),
(201, 'BLITAR UNITED VS PSBS', 50000, 10000, '24-04-2018', 'S Soepriadi, Blitar'),
(202, 'PSPS VS PSIR', 50000, 10000, '24-04-2018', 'Krida, Rembang'),
(203, 'PERSIBAT VS ACEH UNITED', 50000, 10000, '24-04-2018', 'Sarengat'),
(204, 'PERSIRAJA VS PERSIK KENDAL', 50000, 10000, '24-04-2018', 'Dimurthala'),
(205, 'KALTENG PUTRA VS PERSIBA BALIKPAPAN', 50000, 10000, '25-04-2018', 'Batakan'),
(206, 'PERSIKA VS CILEGON UNITED', 50000, 10000, '25-04-2018', 'Singa Perbangsa'),
(207, 'MARTAPURA VS PERSIWA', 50000, 10000, '25-04-2018', 'Demang Lehman'),
(208, 'PERSERANG VS PERSITA', 50000, 10000, '25-04-2018', 'Dasana Indah, Tangerang'),
(209, 'MADURA FC VS PSIM', 50000, 10000, '26-04-2018', 'Sultan Agung, Bantul, Yogyakarta'),
(300, 'PERSIB BANDUNG VS PS TNI', 70000, 11000, '02-03-2019', 'Si Jalak Harupat'),
(301, 'PERSERU SERUI VS PERSEBAYA', 70000, 11000, '02-03-2019', 'Si Jalak Harupat'),
(302, 'BHAYANGKARA FC VS SEMEN PADANG', 70000, 11000, '03-03-2019', 'Patriot'),
(303, 'BALI UNITED VS MITRA KUTAI KARTANEGARA', 70000, 11000, '03-03-2019', 'Patriot'),
(304, 'AREMA FC VS BARITO PUTERA', 70000, 11000, '04-03-2019', 'Kanjuruhan'),
(305, 'PERSITA VS PERSELA LAMONGAN', 70000, 11000, '04-03-2019', 'Kanjuruhan'),
(306, 'PSS VS MADURA UNITED', 70000, 11000, '05-03-2019', 'Maguwoharjo'),
(307, 'PERSIJA JAKARTA VS BORNEO FC', 70000, 11000, '05-03-2019', 'Maguwoharjo'),
(308, 'PSM MAKASSAR VS KALTENG PUTRA', 70000, 11000, '06-03-2019', 'Madya Magelang'),
(309, 'PSIS VS PERSIPURA JAYAPURA', 70000, 11000, '06-03-2019', 'Madya Magelang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
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
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`no_reservasi`, `admin_id`, `cus_id`, `tgl_reservasi`, `tgl_bayar`, `tgl_kirim`, `status_kirim`, `status_bayar`) VALUES
(1112, 1111, 9897, '2018-10-08', '2018-10-10', '2018-10-11', 'Terkirim', 'Terbayar'),
(1128, 1111, 1, '2018-10-21', '2018-10-22', '2018-10-23', 'Terkirim', 'Terbayar'),
(1211, 1113, 4536, '2018-11-01', '2018-11-02', '2018-11-03', 'Terkirim', 'Terbayar'),
(1240, 1113, 2, '2018-11-26', '2018-11-26', '2018-11-27', 'Terkirim', 'Terbayar'),
(2321, 1112, 9989, '2018-12-01', '2018-12-05', '2018-12-06', 'Terkirim', 'Terbayar');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indeks untuk tabel `detail_reservasi`
--
ALTER TABLE `detail_reservasi`
  ADD KEY `no_reservasi` (`no_reservasi`,`kode_pertandingan`),
  ADD KEY `kode_pertandingan` (`kode_pertandingan`);

--
-- Indeks untuk tabel `pertandingan`
--
ALTER TABLE `pertandingan`
  ADD PRIMARY KEY (`kode_pertandingan`);

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`no_reservasi`),
  ADD KEY `admin_id` (`admin_id`,`cus_id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_reservasi`
--
ALTER TABLE `detail_reservasi`
  ADD CONSTRAINT `detail_reservasi_ibfk_1` FOREIGN KEY (`kode_pertandingan`) REFERENCES `pertandingan` (`kode_pertandingan`),
  ADD CONSTRAINT `detail_reservasi_ibfk_2` FOREIGN KEY (`no_reservasi`) REFERENCES `reservasi` (`no_reservasi`);

--
-- Ketidakleluasaan untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `reservasi_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `reservasi_ibfk_2` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
