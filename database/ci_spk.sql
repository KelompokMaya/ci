-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2017 at 05:53 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama_alternatif` varchar(11) NOT NULL,
  `nilai_kriteria1` int(11) NOT NULL,
  `nilai_kriteria2` float NOT NULL,
  `nilai_kriteria3` int(11) NOT NULL,
  `nilai_kriteria4` int(11) NOT NULL,
  `nilai_kriteria5` int(11) NOT NULL,
  `nilai_kriteria6` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif`, `nilai_kriteria1`, `nilai_kriteria2`, `nilai_kriteria3`, `nilai_kriteria4`, `nilai_kriteria5`, `nilai_kriteria6`) VALUES
(27, 'Calon 1', 1, 0, 5, 70, 76, 88),
(28, 'Calon 2', 2, 3, 5, 78, 79, 80),
(29, 'Calon 3', 3, 3, 4, 70, 85, 88),
(30, 'Calon 4', 2, 3.2, 4, 86, 67, 76),
(31, 'Calon 5', 1, 0, 5, 67, 86, 78),
(32, 'Calon 6', 2, 2.7, 4, 66, 77, 88),
(33, 'Calon 7', 1, 3.3, 3, 78, 88, 89),
(34, 'Calon 8', 2, 3.5, 5, 67, 81, 69),
(35, 'Calon 9', 1, 0, 3, 59, 60, 88),
(36, 'Calon 10', 3, 3.1, 2, 80, 77, 59);

-- --------------------------------------------------------

--
-- Table structure for table `bobotkriteria`
--

CREATE TABLE `bobotkriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(20) NOT NULL,
  `perbandingan_ket1` double NOT NULL,
  `perbandingan_ket2` double NOT NULL,
  `perbandingan_ket3` double NOT NULL,
  `perbandingan_ket4` double NOT NULL,
  `perbandingan_ket5` double NOT NULL,
  `perbandingan_ket6` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobotkriteria`
--

INSERT INTO `bobotkriteria` (`id_kriteria`, `nama_kriteria`, `perbandingan_ket1`, `perbandingan_ket2`, `perbandingan_ket3`, `perbandingan_ket4`, `perbandingan_ket5`, `perbandingan_ket6`) VALUES
(1, 'Pendidikan Terakhir', 1, 3, 1, 0.2, 0.2, 0.2),
(2, 'Nilai IPK', 0.33333333333333, 1, 0.3333333333333333, 0.2, 0.2, 0.2),
(3, 'Usia', 1, 3, 1, 0.3333333333333333, 0.3333333333333333, 0.3333333333333333),
(4, 'Wawancara', 5, 5, 3, 1, 1, 1),
(5, 'Tes Mengajar', 5, 5, 3, 1, 1, 1),
(6, 'Tes Tulis', 5, 5, 3, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `normalisasi_kriteria`
--

CREATE TABLE `normalisasi_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(20) NOT NULL,
  `n_perbandingan_ket1` double NOT NULL,
  `n_perbandingan_ket2` double NOT NULL,
  `n_perbandingan_ket3` double NOT NULL,
  `n_perbandingan_ket4` double NOT NULL,
  `n_perbandingan_ket5` double NOT NULL,
  `n_perbandingan_ket6` double NOT NULL,
  `bobot` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `normalisasi_kriteria`
--

INSERT INTO `normalisasi_kriteria` (`id_kriteria`, `nama_kriteria`, `n_perbandingan_ket1`, `n_perbandingan_ket2`, `n_perbandingan_ket3`, `n_perbandingan_ket4`, `n_perbandingan_ket5`, `n_perbandingan_ket6`, `bobot`) VALUES
(1, 'Pendidikan Terakhir', 0.057692307692308, 0.13636363636364, 0.088235294117647, 0.053571428571429, 0.053571428571429, 0.053571428571429, 0.073834253981313),
(2, 'Nilai IPK', 0.019230769230769, 0.045454545454545, 0.029411764705882, 0.053571428571429, 0.053571428571429, 0.053571428571429, 0.042468560850914),
(3, 'Usia', 0.057692307692308, 0.13636363636364, 0.088235294117647, 0.089285714285714, 0.089285714285714, 0.089285714285714, 0.091691396838456),
(4, 'Wawancara', 0.28846153846154, 0.22727272727273, 0.26470588235294, 0.26785714285714, 0.26785714285714, 0.26785714285714, 0.26400192944311),
(5, 'Tes Mengajar', 0.28846153846154, 0.22727272727273, 0.26470588235294, 0.26785714285714, 0.26785714285714, 0.26785714285714, 0.26400192944311),
(6, 'Tes Tulis', 0.28846153846154, 0.22727272727273, 0.26470588235294, 0.26785714285714, 0.26785714285714, 0.26785714285714, 0.26400192944311);

-- --------------------------------------------------------

--
-- Table structure for table `ranking`
--

CREATE TABLE `ranking` (
  `id_ranking` int(11) NOT NULL,
  `nama_alternatif` varchar(20) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ranking`
--

INSERT INTO `ranking` (`id_ranking`, `nama_alternatif`, `nilai`) VALUES
(652, 'Calon 1', 0.095982160253814),
(653, 'Calon 2', 0.10724811674319),
(654, 'Calon 3', 0.11079985674325),
(655, 'Calon 4', 0.10287715579704),
(656, 'Calon 5', 0.094998069343242),
(657, 'Calon 6', 0.10192721147292),
(658, 'Calon 7', 0.10516687742118),
(659, 'Calon 8', 0.10125835017327),
(660, 'Calon 9', 0.081926482972728),
(661, 'Calon 10', 0.097815719079392);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `level` int(11) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `level`, `password`) VALUES
(1, 'manager', 1, '1d0258c2440a8d19e716292b231e3190'),
(2, 'staff', 2, '1253208465b1efa876f982d8a9e73eef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `bobotkriteria`
--
ALTER TABLE `bobotkriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `normalisasi_kriteria`
--
ALTER TABLE `normalisasi_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id_ranking`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `bobotkriteria`
--
ALTER TABLE `bobotkriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `normalisasi_kriteria`
--
ALTER TABLE `normalisasi_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ranking`
--
ALTER TABLE `ranking`
  MODIFY `id_ranking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=662;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
