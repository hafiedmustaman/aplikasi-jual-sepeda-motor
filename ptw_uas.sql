-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2019 at 01:11 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptw_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(5) NOT NULL,
  `model` enum('honda','yamaha','suzuki') NOT NULL,
  `tipe` enum('sport','matic','bebek') NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `stok` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `model`, `tipe`, `harga`, `stok`) VALUES
('b0001', 'honda', 'sport', '35555000', '10'),
('b0002', 'honda', 'matic', '21625000', '15'),
('b0003', 'honda', 'bebek', '15030000', '20'),
('b0004', 'yamaha', 'sport', '23610000', '8'),
('b0005', 'yamaha', 'matic', '15790000', '12'),
('b0006', 'yamaha', 'bebek', '11980000', '18'),
('b0007', 'suzuki', 'sport', '25400000', '13'),
('b0008', 'suzuki', 'matic', '16025000', '17'),
('b0009', 'suzuki', 'bebek', '23600000', '24');

-- --------------------------------------------------------

--
-- Table structure for table `kredit`
--

CREATE TABLE `kredit` (
  `id_kredit` varchar(5) NOT NULL,
  `nama_agen` enum('adira','fif') NOT NULL,
  `id_barang` varchar(5) NOT NULL,
  `uang_muka` decimal(10,0) NOT NULL,
  `angsuran` enum('11x','17x','23x') NOT NULL,
  `cicilan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kredit`
--

INSERT INTO `kredit` (`id_kredit`, `nama_agen`, `id_barang`, `uang_muka`, `angsuran`, `cicilan`) VALUES
('k0001', 'adira', 'b0001', '4000000', '11x', '4000000'),
('k0002', 'adira', 'b0001', '4000000', '17x', '3566000'),
('k0003', 'adira', 'b0001', '4000000', '23x', '2513000'),
('k0004', 'adira', 'b0002', '2200000', '11x', '2207000'),
('k0005', 'adira', 'b0002', '2200000', '17x', '1549000'),
('k0006', 'adira', 'b0002', '2200000', '23x', '1228000'),
('k0007', 'adira', 'b0003', '1700000', '11x', '1557000'),
('k0008', 'adira', 'b0003', '1700000', '17x', '1097000'),
('k0009', 'adira', 'b0003', '1700000', '23x', '873000'),
('k0010', 'adira', 'b0004', '4000000', '11x', '2215000'),
('k0011', 'adira', 'b0004', '4000000', '17x', '1726000'),
('k0012', 'adira', 'b0004', '4000000', '23x', '1353000'),
('k0013', 'adira', 'b0005', '1750000', '11x', '1591000'),
('k0014', 'adira', 'b0005', '1750000', '17x', '1197000'),
('k0015', 'adira', 'b0005', '1750000', '23x', '925000'),
('k0016', 'adira', 'b0006', '1500000', '11x', '1186000'),
('k0017', 'adira', 'b0006', '1500000', '17x', '889000'),
('k0018', 'adira', 'b0006', '1500000', '23x', '687000'),
('k0019', 'adira', 'b0007', '2700000', '11x', '2663000'),
('k0020', 'adira', 'b0007', '2700000', '17x', '1861000'),
('k0021', 'adira', 'b0007', '2700000', '23x', '1468000'),
('k0022', 'adira', 'b0008', '1700000', '11x', '1718000'),
('k0023', 'adira', 'b0008', '1700000', '17x', '1203000'),
('k0024', 'adira', 'b0008', '1700000', '23x', '949000'),
('k0025', 'adira', 'b0009', '2400000', '11x', '2494000'),
('k0026', 'adira', 'b0009', '2400000', '17x', '1743000'),
('k0027', 'adira', 'b0009', '2400000', '23x', '1375000'),
('k0028', 'fif', 'b0001', '5000000', '11x', '3459000'),
('k0029', 'fif', 'b0001', '5000000', '17x', '2439000'),
('k0030', 'fif', 'b0001', '5000000', '23x', '1941000'),
('k0031', 'fif', 'b0002', '2700000', '11x', '2154000'),
('k0032', 'fif', 'b0002', '2700000', '17x', '1512000'),
('k0033', 'fif', 'b0002', '2700000', '23x', '1199000'),
('k0034', 'fif', 'b0003', '1800000', '11x', '1546000'),
('k0035', 'fif', 'b0003', '1800000', '17x', '1090000'),
('k0036', 'fif', 'b0003', '1800000', '23x', '867000'),
('k0037', 'fif', 'b0004', '4500000', '11x', '2121000'),
('k0038', 'fif', 'b0004', '4500000', '17x', '1644000'),
('k0039', 'fif', 'b0004', '4500000', '23x', '1278000'),
('k0040', 'fif', 'b0005', '2000000', '11x', '1565000'),
('k0041', 'fif', 'b0005', '2000000', '17x', '1177000'),
('k0042', 'fif', 'b0005', '2000000', '23x', '910000'),
('k0043', 'fif', 'b0006', '1750000', '11x', '1159000'),
('k0044', 'fif', 'b0006', '1750000', '17x', '869000'),
('k0045', 'fif', 'b0006', '1750000', '23x', '672000'),
('k0046', 'fif', 'b0007', '5200000', '11x', '2520000'),
('k0047', 'fif', 'b0007', '5200000', '17x', '1762000'),
('k0048', 'fif', 'b0007', '5200000', '23x', '1390000'),
('k0049', 'fif', 'b0008', '2500000', '11x', '1629000'),
('k0050', 'fif', 'b0008', '2500000', '17x', '1142000'),
('k0051', 'fif', 'b0008', '2500000', '23x', '901000'),
('k0052', 'fif', 'b0009', '3600000', '11x', '2361000'),
('k0053', 'fif', 'b0009', '3600000', '17x', '1651000'),
('k0054', 'fif', 'b0009', '3600000', '23x', '1303000');

-- --------------------------------------------------------

--
-- Table structure for table `trans_kredit`
--

CREATE TABLE `trans_kredit` (
  `id_transaksi` varchar(5) NOT NULL,
  `id_kredit` varchar(5) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `alamat_pembeli` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_kredit`
--

INSERT INTO `trans_kredit` (`id_transaksi`, `id_kredit`, `tgl_transaksi`, `nama_pembeli`, `alamat_pembeli`, `no_telp`) VALUES
('t0003', 'k0029', '2019-06-20', 'paino', 'solo', '08456789123');

-- --------------------------------------------------------

--
-- Table structure for table `trans_tunai`
--

CREATE TABLE `trans_tunai` (
  `id_transaksi` varchar(5) NOT NULL,
  `id_barang` varchar(5) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `tipe_pembayaran` varchar(255) NOT NULL,
  `pilihan_pembayaran` varchar(255) NOT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `alamat_pembeli` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `bukti_pembayaran` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_tunai`
--

INSERT INTO `trans_tunai` (`id_transaksi`, `id_barang`, `tgl_transaksi`, `tipe_pembayaran`, `pilihan_pembayaran`, `nama_pembeli`, `alamat_pembeli`, `no_telp`, `bukti_pembayaran`) VALUES
('t0001', 'b0001', '2019-06-20', 'tunai', 'cod', 'paijo', 'surabaya', '0123456789', ''),
('t0002', 'b0001', '2019-06-20', 'tunai', 'langsung', 'paimen', 'jakarta', '0123789456', ''),
('t0004', 'b0001', '2019-06-20', 'tunai', 'transfer', 'paklek', 'bali', '0123789456', 0x4368727973616e7468656d756d2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('administrator','customer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
('u0001', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `kredit`
--
ALTER TABLE `kredit`
  ADD PRIMARY KEY (`id_kredit`),
  ADD KEY `fk_kredit_barang` (`id_barang`);

--
-- Indexes for table `trans_tunai`
--
ALTER TABLE `trans_tunai`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kredit`
--
ALTER TABLE `kredit`
  ADD CONSTRAINT `fk_kredit_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
