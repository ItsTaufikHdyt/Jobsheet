-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 Okt 2017 pada 03.55
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `persediaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblbarang`
--

CREATE TABLE `tblbarang` (
  `IDBarang` char(9) NOT NULL,
  `IDSupplier` char(6) NOT NULL,
  `NamaBarang` varchar(55) NOT NULL,
  `Jenis:` varchar(50) NOT NULL,
  `Harga` int(11) NOT NULL,
  `PhotoBrg` varchar(200) NOT NULL,
  `Jml_min` int(11) NOT NULL,
  `Jml_max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblsupplier`
--

CREATE TABLE `tblsupplier` (
  `IDSupplier` char(6) NOT NULL,
  `NamaSupplier` varchar(35) NOT NULL,
  `AlamatSupplier` varchar(100) NOT NULL,
  `Telepon` varchar(13) NOT NULL,
  `Web` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbltransaksi`
--

CREATE TABLE `tbltransaksi` (
  `IDTransaksi` int(11) NOT NULL,
  `IDBarang` char(9) NOT NULL,
  `TglTansaksi` date NOT NULL,
  `Keterangan` varchar(50) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Status` enum('M','K') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbluser`
--

CREATE TABLE `tbluser` (
  `IDUser` varchar(15) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `NamaUser` varchar(35) NOT NULL,
  `Level` enum('beli','sales','manajer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbarang`
--
ALTER TABLE `tblbarang`
  ADD PRIMARY KEY (`IDBarang`),
  ADD KEY `IDSupplier` (`IDSupplier`);

--
-- Indexes for table `tblsupplier`
--
ALTER TABLE `tblsupplier`
  ADD PRIMARY KEY (`IDSupplier`);

--
-- Indexes for table `tbltransaksi`
--
ALTER TABLE `tbltransaksi`
  ADD PRIMARY KEY (`IDTransaksi`),
  ADD KEY `IDBarang` (`IDBarang`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`IDUser`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tblbarang`
--
ALTER TABLE `tblbarang`
  ADD CONSTRAINT `tblbarang_ibfk_1` FOREIGN KEY (`IDSupplier`) REFERENCES `tblsupplier` (`IDSupplier`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbltransaksi`
--
ALTER TABLE `tbltransaksi`
  ADD CONSTRAINT `tbltransaksi_ibfk_1` FOREIGN KEY (`IDBarang`) REFERENCES `tblbarang` (`IDBarang`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
