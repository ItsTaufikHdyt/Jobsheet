-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10 Jan 2018 pada 05.55
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poliklinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `kd_dokter` varchar(15) NOT NULL,
  `kd_poli` varchar(15) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `kd_user` varchar(15) NOT NULL,
  `nm_dokter` varchar(20) NOT NULL,
  `sip` int(11) NOT NULL,
  `tmpat_lahir` date NOT NULL,
  `no_tlp` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kunjungan`
--

CREATE TABLE `kunjungan` (
  `tgl_kunjungan` date NOT NULL,
  `no_pasien` int(15) NOT NULL,
  `kd_poli` varchar(15) NOT NULL,
  `jam_kunjungan` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laboratorium`
--

CREATE TABLE `laboratorium` (
  `kd_lab` varchar(15) NOT NULL,
  `no_rm` int(11) NOT NULL,
  `hasil_lab` varchar(50) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `kd_user` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`kd_user`, `username`, `password`) VALUES
('0', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `kd_obat` varchar(11) NOT NULL,
  `nm_obat` varchar(15) NOT NULL,
  `jml_obat` int(11) NOT NULL,
  `ukuran` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `no_pasien` int(5) NOT NULL,
  `nm_pasien` varchar(60) NOT NULL,
  `j_kel` enum('Laki-Laki','Perempuan') NOT NULL,
  `agama` enum('Islam','Kristen','Hindu','Budha','Konghucu') NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `usia` int(3) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `nm_kk` int(16) NOT NULL,
  `hub_kel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `poliklinik`
--

CREATE TABLE `poliklinik` (
  `kd_poli` int(11) NOT NULL,
  `nm_poli` int(11) NOT NULL,
  `lantai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekam medis`
--

CREATE TABLE `rekam medis` (
  `no_rm` int(11) NOT NULL,
  `kd_tindakan` varchar(11) NOT NULL,
  `kd_obat` varchar(11) NOT NULL,
  `kd_user` varchar(11) NOT NULL,
  `no_pasien` int(11) NOT NULL,
  `diagnosa` varchar(20) NOT NULL,
  `resep` varchar(20) NOT NULL,
  `keluhan` varchar(20) NOT NULL,
  `tgl_pemeriksaan` date NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tindakan`
--

CREATE TABLE `tindakan` (
  `kd_tindakan` varchar(11) NOT NULL,
  `nm_tindakan` int(11) NOT NULL,
  `ket` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`kd_user`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`no_pasien`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
