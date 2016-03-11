-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2016 at 09:23 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgsst`
--

-- --------------------------------------------------------

--
-- Table structure for table `afiliaciones`
--

CREATE TABLE `afiliaciones` (
  `Id` int(10) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `historiaclinica`
--

CREATE TABLE `historiaclinica` (
  `Id` int(10) NOT NULL,
  `Descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trabajador`
--

CREATE TABLE `trabajador` (
  `Cedula` varchar(20) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Trabajador_Afiliaciones` int(10) DEFAULT NULL,
  `Trabajador_HistoriaClinica` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trabajador`
--

INSERT INTO `trabajador` (`Cedula`, `Nombre`, `Telefono`, `Correo`, `Trabajador_Afiliaciones`, `Trabajador_HistoriaClinica`) VALUES
('9773559', 'Mauricio A. Ramirez', '7405678', 'marlejo@hotmail.com', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `afiliaciones`
--
ALTER TABLE `afiliaciones`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `historiaclinica`
--
ALTER TABLE `historiaclinica`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`Cedula`),
  ADD KEY `Trabajador_Afiliaciones` (`Trabajador_Afiliaciones`),
  ADD KEY `Trabajador_HistoriaClinica` (`Trabajador_HistoriaClinica`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trabajador`
--
ALTER TABLE `trabajador`
  ADD CONSTRAINT `trabajador_Afiliaciones` FOREIGN KEY (`Trabajador_Afiliaciones`) REFERENCES `afiliaciones` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `trabajador_HistoriaClinica` FOREIGN KEY (`Trabajador_HistoriaClinica`) REFERENCES `historiaclinica` (`Id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
