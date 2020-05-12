-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 01:50 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mentalq`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `namaAdmin` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `namaAdmin`, `email`, `password`) VALUES
(1, 'Faiza Aulia Rahmaputra', 'adminfaiz@mail.com', 'adminfaiz'),
(2, 'Heri Setyo Nugroho', 'adminheri@mail.com', 'adminheri'),
(3, 'Masruri Farid Alviyanto', 'adminruri@mail.com', 'adminruri'),
(4, 'Muhammad Hariz', 'adminhariz@mail.com', 'adminhariz'),
(5, 'Ihsan Ahsanu Amala', 'adminihsan@mail.com', 'adminihsan');

-- --------------------------------------------------------

--
-- Table structure for table `consultants`
--

CREATE TABLE `consultants` (
  `noSTR` int(11) NOT NULL,
  `namaConsultant` varchar(50) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `jenisPsikologi` varchar(30) NOT NULL,
  `tempatPraktik` varchar(50) NOT NULL,
  `lamaPsikologi` varchar(25) NOT NULL,
  `alumni` varchar(30) NOT NULL,
  `schedule` date NOT NULL,
  `jamKerja` varchar(5) NOT NULL,
  `noHP` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultants`
--

INSERT INTO `consultants` (`noSTR`, `namaConsultant`, `gender`, `email`, `password`, `photo`, `jenisPsikologi`, `tempatPraktik`, `lamaPsikologi`, `alumni`, `schedule`, `jamKerja`, `noHP`) VALUES
(1001, 'dr. Anissa Hana', 'Female', 'anissahana@mail.com', 'anissahana', 'doc5.png', 'Social Psychology', 'RS. MERDEKA KEMUDIAN', '5 year', 'Universitas Harvard', '2020-05-15', '13.00', '081345321243'),
(1002, 'dr. Ricardo Milos', 'Male', 'ricardomilos@mail.com', 'ricardomilos', 'doc2.jpg', 'Couples Psychology', 'RS. PRIA JANTAN', '4 year', 'Universitas Agam', '2020-05-13', '14.00', '082328930823'),
(1003, 'dr. Ahsanu Amaludin', 'Male', 'ahsanu@mail.com', 'ahsanu', 'doc4.jpg', 'Granny Psychology', 'RS. LANSIA MUDA', '9 year', 'Universitas Jompo', '2020-05-10', '15.00', '08232893089'),
(1004, 'dr. Hinata Mahmuda', 'Female', 'hinata@mail.com', 'hinata', 'doc3.jpg', 'Kids Psychology', 'RS. BUNDA HARAPAN', '6 year', 'Universitas Manchester', '2020-05-09', '12.00', '084328530823'),
(1005, 'dr. Ruru Riri', 'Female', 'ruru@mail.com', 'ruru', 'doc1.jpg', 'Mental Psychology', 'RS. MENTAL ILLNESS', '3 year', 'Universitas Al-Azhar', '2020-05-10', '10.00', '082328930981');

-- --------------------------------------------------------

--
-- Table structure for table `consults`
--

CREATE TABLE `consults` (
  `idConsult` int(11) NOT NULL,
  `idPasien` int(11) NOT NULL,
  `noSTR` int(11) NOT NULL,
  `keluhan` varchar(250) NOT NULL,
  `solusi` varchar(250) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consults`
--

INSERT INTO `consults` (`idConsult`, `idPasien`, `noSTR`, `keluhan`, `solusi`, `status`) VALUES
(1, 1, 1003, 'Saya ingin periksa kesehatan mental saya', '-', 'Belum Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `idPasien` int(11) NOT NULL,
  `namaPasien` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `noHP` varchar(12) NOT NULL,
  `umur` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`idPasien`, `namaPasien`, `email`, `password`, `gender`, `alamat`, `photo`, `noHP`, `umur`) VALUES
(1, 'Heri Setyo Nugroho', 'heri@mail.com', 'heri', 'Male', 'Jl. Simatupang', 'daac7c6b52e4515d536a65cca1ac66f2.jpg', '082328930189', 17),
(2, 'Masruri Farid Alviyanto', 'masruri@mail.com', 'masruri', 'Male', 'Jl. Bekasi', NULL, '08211111111', 19),
(3, 'Ihsan Ahsanu Amala', 'ihsan@mail.com', 'ihsan', 'Male', 'Jl. Agam', NULL, '082328123666', 43),
(4, 'Muhammad Hariz', 'hariz@mail.com', 'hariz', 'Male', 'Jl. Indramayu', NULL, '081345321222', 30),
(5, 'Faiza Aulia Rahmaputra', 'faiz@mail.com', 'faiz', 'Male', 'Jl. Malang', NULL, '082328934444', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `consultants`
--
ALTER TABLE `consultants`
  ADD PRIMARY KEY (`noSTR`);

--
-- Indexes for table `consults`
--
ALTER TABLE `consults`
  ADD PRIMARY KEY (`idConsult`),
  ADD UNIQUE KEY `consults_idx` (`idPasien`,`noSTR`),
  ADD KEY `noSTR` (`noSTR`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`idPasien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `consults`
--
ALTER TABLE `consults`
  MODIFY `idConsult` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `idPasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `consults`
--
ALTER TABLE `consults`
  ADD CONSTRAINT `consultant_ibfk_1` FOREIGN KEY (`noSTR`) REFERENCES `consultants` (`noSTR`),
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`idPasien`) REFERENCES `patients` (`idPasien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
