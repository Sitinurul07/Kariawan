-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2018 at 03:35 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_depan` varchar(15) NOT NULL,
  `nama_belakang` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_depan`, `nama_belakang`, `username`, `password`, `foto_admin`) VALUES
(1, 'Siti', 'Nurul', 'sitinurul', 'persib', 'nurul.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `nik` varchar(9) NOT NULL DEFAULT '',
  `nama` varchar(30) NOT NULL,
  `namafoto` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `jab` varchar(10) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `tmp_lhr` varchar(15) NOT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status` varchar(2) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_karyawan`
--

INSERT INTO `data_karyawan` (`nik`, `nama`, `namafoto`, `jk`, `jab`, `dept`, `tmp_lhr`, `tgl_lhr`, `gol_darah`, `agama`, `status`, `telp`, `email`) VALUES
('12153840', 'Siti Nurul Khasanah', 'nurul.jpg', 'p', 'CEO', 'CEO', 'Kediri', '1986-07-24', 'A', 'Islam', 'K1', '082127577424', 'nurullezmana@gmail.com'),
('12154397', 'Indah Atina', 'Indah.jpg', 'P', 'Kepala', 'Produksi', 'Ternate', '1996-12-28', 'A', 'Islam', 'K1', '08765432908', 'indahcantik@gmail.com'),
('12156666', 'Zaki Azzam', 'zaki.jpg', 'L', 'Staff', 'Keuangan', 'Semarang', '1997-04-18', 'AB', 'Islam', 'K4', '098765432123', 'zakki@gmail.com'),
('123456783', 'Irma Sulistiani', 'irma.jpg', 'P', 'Staff', 'Keuangan', 'Bandung', '1992-05-30', 'O', 'Islam', 'K1', '089777666115', 'irma@gmail.com'),
('123456784', 'Ranti Mulyani', 'ranti.jpg', 'P', 'Staff', 'Support', 'Bandung', '1990-06-28', 'A', 'Islam', 'K1', '089777666114', 'ranti@gmail.com'),
('123456785', 'Syukron', 'syukron.jpg', 'L', 'Staff', 'IT', 'Medan', '1989-03-21', 'O', 'Islam', 'K1', '089777666113', 'syukron@gmail.com'),
('123456786', 'Rendi Irawan', 'rendi.jpg', 'L', 'Staff', 'Gudang', 'Pati', '1997-02-01', 'O', 'Islam', 'K1', '089777666112', 'rendi@gmail.com'),
('123456787', 'Ihsan Susanto', 'ihsan.jpg', 'L', 'Staff', 'Keuangan', 'Malang', '1993-09-19', 'B', 'Islam', 'K1', '089777666111', 'ihsan@gmail.com'),
('123456788', 'Santi Susanti', 'santi.jpg', 'P', 'Staff', 'Produksi', 'Surabaya', '1983-12-13', 'B', 'Islam', 'K1', '098765432123', 'santi@gmail.com'),
('123456789', 'Tsubasa Ozora', 'tsubasa.jpg', 'L', 'Pengawas', 'Pengawas', 'Jakarta', '1990-05-09', 'A', 'Islam', 'K1', '098765432123', 'tsubasa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama_divisi`, `keterangan`) VALUES
(1, 'Keuangan', 'Mengurus tentang kegiatan keuangan perusahaan'),
(2, 'Produksi', 'Mengurus tentang kegiatan produksi perusahaan'),
(3, 'Support', 'Mengurus tentang kegiatan support perusahaan'),
(4, 'Teknologi Informasi (IT)', 'Mengurus tentang kegiatan IT perusahaan'),
(5, 'Marketing', 'Mengurus tentang kegiatan pemasaran perusahaan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
