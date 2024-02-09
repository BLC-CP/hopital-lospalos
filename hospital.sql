-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 06:26 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nrn_admin` varchar(100) NOT NULL,
  `no_tlp` int(11) NOT NULL,
  `foto` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nrn_admin`, `no_tlp`, `foto`, `email`, `password`, `level`) VALUES
(70202301, 'Anazita Nini A. Quintas', 7598717, '647d7c2f8e7a7jpg', 'anazitanini1105@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(70202302, 'Josefina Ribeiro', 76758438, '647b79f95965cpng', 'josefinaribeiro@gmail.com', 'c3284d0f94606de1fd2af172aba15bf3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_doutor`
--

CREATE TABLE `tb_doutor` (
  `id_doutor` int(11) NOT NULL,
  `nrn_doutor` char(50) NOT NULL,
  `sexo_doutor` enum('mane','feto') NOT NULL,
  `h_fatin` char(50) NOT NULL,
  `no_tlp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_doutor`
--

INSERT INTO `tb_doutor` (`id_doutor`, `nrn_doutor`, `sexo_doutor`, `h_fatin`, `no_tlp`) VALUES
(1, 'Josefina Ribeiro', 'feto', 'Bemoris', 76775488),
(30202302, 'Alcario E. Liberio', 'mane', 'Nakroma', 75884949),
(30202303, 'brito connceicao', 'mane', 'puno', 77483393);

-- --------------------------------------------------------

--
-- Table structure for table `tb_klasifikasaun`
--

CREATE TABLE `tb_klasifikasaun` (
  `id_klasifikasaun` int(11) NOT NULL,
  `nrn_klasifikasaun` char(50) NOT NULL,
  `obs_klasifikasaun` char(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_klasifikasaun`
--

INSERT INTO `tb_klasifikasaun` (`id_klasifikasaun`, `nrn_klasifikasaun`, `obs_klasifikasaun`) VALUES
(1, 'Pulmaun', 'Moras Pulmaun'),
(10202302, 'Ekstra Pulmaun', 'Moras Tuberkolosa'),
(10202303, 'Pulmauns', 'diak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_moras`
--

CREATE TABLE `tb_moras` (
  `id_moras` int(11) NOT NULL,
  `id_klasifikasaun` int(11) NOT NULL,
  `moras` char(50) NOT NULL,
  `obs_moras` char(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_moras`
--

INSERT INTO `tb_moras` (`id_moras`, `id_klasifikasaun`, `moras`, `obs_moras`) VALUES
(40202301, 1, 'Tuberkulose', 'grave');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasiente`
--

CREATE TABLE `tb_pasiente` (
  `id_pasiente` int(11) NOT NULL,
  `nrn_pasiente` char(100) NOT NULL,
  `sexo_pasiente` enum('mane','feto') NOT NULL,
  `fatin_moris` char(100) NOT NULL,
  `data_moris` date NOT NULL,
  `idade` int(11) NOT NULL,
  `h_fatin_pasiente` char(100) NOT NULL,
  `no_tlp_pasiente` int(11) NOT NULL,
  `obs_pasiente` char(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pasiente`
--

INSERT INTO `tb_pasiente` (`id_pasiente`, `nrn_pasiente`, `sexo_pasiente`, `fatin_moris`, `data_moris`, `idade`, `h_fatin_pasiente`, `no_tlp_pasiente`, `obs_pasiente`) VALUES
(1, 'Leonardo dos Santos', 'mane', 'Lospalos', '2022-01-11', 1, 'Home', 75759089, 'Pasinte Moras Isin Manas'),
(50202302, 'Estefania Amaral', 'feto', 'Titilari', '2021-10-06', 2, 'Titilari', 76758433, 'Observasun Pasiente'),
(50202303, 'Anazita Nini A. Quintas', 'feto', 'Lautem', '1999-11-05', 24, 'baduro', 75987177, 'diak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_registu_pasiente`
--

CREATE TABLE `tb_registu_pasiente` (
  `id_registu` int(11) NOT NULL,
  `id_doutor` int(11) NOT NULL,
  `id_tipu_pasiente` int(11) NOT NULL,
  `id_pasiente` int(11) NOT NULL,
  `id_moras` int(11) NOT NULL,
  `altura` int(11) NOT NULL,
  `tensaun` int(11) NOT NULL,
  `d_registu` text NOT NULL,
  `temperatura` int(11) NOT NULL,
  `obs_registu` char(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_registu_pasiente`
--

INSERT INTO `tb_registu_pasiente` (`id_registu`, `id_doutor`, `id_tipu_pasiente`, `id_pasiente`, `id_moras`, `altura`, `tensaun`, `d_registu`, `temperatura`, `obs_registu`) VALUES
(60202301, 1, 1, 50202302, 40202301, 67, 96, '2023-08-11', 34, 'normal');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tipu_pasiente`
--

CREATE TABLE `tb_tipu_pasiente` (
  `id_tipu_pasiente` int(11) NOT NULL,
  `moras_tipu_pasiente` char(50) NOT NULL,
  `tipu_pasiente` char(50) NOT NULL,
  `obs_tipu_pasiente` char(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tipu_pasiente`
--

INSERT INTO `tb_tipu_pasiente` (`id_tipu_pasiente`, `moras_tipu_pasiente`, `tipu_pasiente`, `obs_tipu_pasiente`) VALUES
(1, 'Foun', 'Moras Foun', 'Moras Foun'),
(20202302, 'Tuan', 'Moras', 'ok'),
(20202303, 'nella pereira', 'foun', 'diak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_doutor`
--
ALTER TABLE `tb_doutor`
  ADD PRIMARY KEY (`id_doutor`);

--
-- Indexes for table `tb_klasifikasaun`
--
ALTER TABLE `tb_klasifikasaun`
  ADD PRIMARY KEY (`id_klasifikasaun`);

--
-- Indexes for table `tb_moras`
--
ALTER TABLE `tb_moras`
  ADD PRIMARY KEY (`id_moras`),
  ADD KEY `id_klasifikasaun` (`id_klasifikasaun`);

--
-- Indexes for table `tb_pasiente`
--
ALTER TABLE `tb_pasiente`
  ADD PRIMARY KEY (`id_pasiente`);

--
-- Indexes for table `tb_registu_pasiente`
--
ALTER TABLE `tb_registu_pasiente`
  ADD PRIMARY KEY (`id_registu`),
  ADD KEY `id_doutor` (`id_doutor`),
  ADD KEY `id_tipu_pasiente` (`id_tipu_pasiente`),
  ADD KEY `id_pasiente` (`id_pasiente`),
  ADD KEY `id_moras` (`id_moras`);

--
-- Indexes for table `tb_tipu_pasiente`
--
ALTER TABLE `tb_tipu_pasiente`
  ADD PRIMARY KEY (`id_tipu_pasiente`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_moras`
--
ALTER TABLE `tb_moras`
  ADD CONSTRAINT `tb_moras_ibfk_1` FOREIGN KEY (`id_klasifikasaun`) REFERENCES `tb_klasifikasaun` (`id_klasifikasaun`) ON DELETE CASCADE;

--
-- Constraints for table `tb_registu_pasiente`
--
ALTER TABLE `tb_registu_pasiente`
  ADD CONSTRAINT `tb_registu_pasiente_ibfk_1` FOREIGN KEY (`id_doutor`) REFERENCES `tb_doutor` (`id_doutor`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_registu_pasiente_ibfk_2` FOREIGN KEY (`id_tipu_pasiente`) REFERENCES `tb_tipu_pasiente` (`id_tipu_pasiente`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_registu_pasiente_ibfk_3` FOREIGN KEY (`id_moras`) REFERENCES `tb_moras` (`id_moras`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_registu_pasiente_ibfk_4` FOREIGN KEY (`id_pasiente`) REFERENCES `tb_pasiente` (`id_pasiente`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
