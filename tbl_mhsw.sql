-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2021 at 03:54 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbl_mhsw`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(10) NOT NULL,
  `nama_dosen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_dosen`) VALUES
(1, 'Hudori, M.Kom'),
(2, 'Farhan Zayid, M.Kom'),
(3, 'Hardi Jamhhur'),
(4, 'Iin Mulyani, M.Si');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(2) NOT NULL,
  `npm_mhsw` int(10) DEFAULT NULL,
  `nama_mhsw` varchar(255) DEFAULT NULL,
  `prodi` varchar(255) DEFAULT NULL,
  `kelas` varchar(2) DEFAULT NULL,
  `tahun_ajaran` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `npm_mhsw`, `nama_mhsw`, `prodi`, `kelas`, `tahun_ajaran`) VALUES
(1, 14197025, 'Muhamad Sahrul Rizal', 'Sistem Informasi', 'C', 2019),
(2, 14197050, 'Muhamad Basri', 'Teknik Informatika', 'C', 2019),
(3, 14197058, 'Reza Julianti', 'Sistem Informasi', 'C', 2019),
(4, 14197060, 'Sylva Aliffina Putri', 'Sistem Informasi', 'C', 2019),
(5, 14197024, 'Muhamad Ridwan Nurfauzan', 'Sistem Informasi', 'C', 2019),
(6, 14197025, 'Muhamad Sahrul Rizal', 'Sistem Informasi', 'C', 2019),
(7, 14197056, 'Muhammad Fadillah', 'Sistem Informasi', 'C', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id_matkul` int(11) NOT NULL,
  `kode_matkul` varchar(255) DEFAULT NULL,
  `matkul` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id_matkul`, `kode_matkul`, `matkul`) VALUES
(1, 'SD', 'Simulasi Digital'),
(2, 'Pemdas', 'Pemograman Dasar'),
(3, 'OTKP', 'Otomatisasi Perkantorn');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `npm_mhsw` varchar(255) DEFAULT NULL,
  `nama_mhsw` varchar(255) DEFAULT NULL,
  `kode_matkul` varchar(255) DEFAULT NULL,
  `uts` varchar(255) DEFAULT NULL,
  `uas` varchar(255) DEFAULT NULL,
  `quiz` varchar(255) DEFAULT NULL,
  `tugas` varchar(255) DEFAULT NULL,
  `kehadiran` varchar(255) DEFAULT NULL,
  `pertemuan` varchar(255) DEFAULT NULL,
  `absensi` varchar(255) DEFAULT NULL,
  `nilai` varchar(255) DEFAULT NULL,
  `predikat` varchar(255) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `npm_mhsw`, `nama_mhsw`, `kode_matkul`, `uts`, `uas`, `quiz`, `tugas`, `kehadiran`, `pertemuan`, `absensi`, `nilai`, `predikat`) VALUES
(1, '14197025', 'Muhamad Sahrul Rizal', 'HCI', '90', '78', '68', '44', '16', '16', NULL, NULL, NULL),
(2, '14197057', 'Indra Supriadi ', 'Bahasa Inggris', '85', '70', '80', '58', '16', '16', NULL, NULL, ''),
(3, '14197058', 'Reza Julianti', 'Topologi', '80', '80', '80', '80', '10', '16', NULL, NULL, ''),
(4, '14197060', 'Sylva Aliffina Putri', 'Hukum', '80', '80', '80', '80', '13', '16', NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
