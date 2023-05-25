-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2016 at 02:41 
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `Nip` int(11) NOT NULL,
  `Nama_Dsn` varchar(30) NOT NULL,
  `Tgl_Lahir` date NOT NULL,
  `Jenis_Kelamin` enum('Pria','Wanita') NOT NULL,
  `Agama` enum('Islam','Katolik','Protestan','Hindu','Buddha','Konghucu') NOT NULL,
  `Alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`Nip`, `Nama_Dsn`, `Tgl_Lahir`, `Jenis_Kelamin`, `Agama`, `Alamat`) VALUES
(100100002, 'Lia Rusmaya', '1970-09-09', 'Wanita', 'Islam', 'Pondok Serut 2 Blok B2 No.20, Tangerang Selatan'),
(101100001, 'Yoko Prayitno', '1960-09-04', 'Pria', 'Islam', 'Jl. Mangga Besar 1 No.20, Jakarta Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `Nim` int(11) NOT NULL,
  `Nama_Mhs` varchar(30) NOT NULL,
  `Tgl_Lahir` date NOT NULL,
  `Jenis_Kelamin` enum('Pria','Wanita') NOT NULL,
  `Agama` enum('Islam','Katolik','Protestaan','Hindu','Buddha','Konghucu') NOT NULL,
  `Alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`Nim`, `Nama_Mhs`, `Tgl_Lahir`, `Jenis_Kelamin`, `Agama`, `Alamat`) VALUES
(415151001, 'Indra Lesmana', '1992-08-11', 'Pria', 'Islam', 'Jl.Kemuning 1 No.20, Tangerang Selatan'),
(415151002, 'Julia Rizki', '1990-11-14', 'Wanita', 'Katolik', 'Jl.Perkutut No.19, Jakarta Selatan'),
(415151003, 'Lia Agustina', '1991-01-02', 'Wanita', 'Islam', 'JL.Manggis Blok B2 No.20, Jakarta Timur');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mata_kuliah`
--

CREATE TABLE `tbl_mata_kuliah` (
  `No_Mk` int(11) NOT NULL,
  `Nama_Mk` varchar(30) NOT NULL,
  `Sks` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mata_kuliah`
--

INSERT INTO `tbl_mata_kuliah` (`No_Mk`, `Nama_Mk`, `Sks`) VALUES
(1234001, 'Sistem Jaringan', 3),
(1234002, 'Sistem Basis Data', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `Nim` int(11) NOT NULL,
  `Nip` int(11) NOT NULL,
  `No_Mk` int(11) NOT NULL,
  `Tgl_Ujian` datetime NOT NULL,
  `Jenis_Ujian` enum('UTS','UAS') NOT NULL,
  `Ruangan` varchar(11) NOT NULL,
  `Nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`Nim`, `Nip`, `No_Mk`, `Tgl_Ujian`, `Jenis_Ujian`, `Ruangan`, `Nilai`) VALUES
(415151001, 101100001, 1234001, '2016-11-11 07:00:00', 'UTS', 'A-104', 70),
(415151001, 100100002, 1234002, '2016-11-11 13:00:00', 'UTS', 'B-207', 90),
(415151002, 101100001, 1234001, '2016-11-11 07:00:00', 'UTS', 'A-104', 90),
(415151002, 100100002, 1234002, '2016-11-11 13:00:00', 'UTS', 'B-207', 90),
(415151003, 101100001, 1234001, '2016-11-11 07:00:00', 'UTS', 'A-104', 80),
(415151003, 100100002, 1234002, '2016-11-11 13:00:00', 'UTS', 'B-207', 92);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`Nip`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`Nim`);

--
-- Indexes for table `tbl_mata_kuliah`
--
ALTER TABLE `tbl_mata_kuliah`
  ADD PRIMARY KEY (`No_Mk`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD KEY `Nim` (`Nim`),
  ADD KEY `Nip` (`Nip`),
  ADD KEY `No_Mk` (`No_Mk`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD CONSTRAINT `tbl_nilai_ibfk_1` FOREIGN KEY (`Nim`) REFERENCES `tbl_mahasiswa` (`Nim`),
  ADD CONSTRAINT `tbl_nilai_ibfk_2` FOREIGN KEY (`Nip`) REFERENCES `tbl_dosen` (`Nip`),
  ADD CONSTRAINT `tbl_nilai_ibfk_3` FOREIGN KEY (`No_Mk`) REFERENCES `tbl_mata_kuliah` (`No_Mk`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
