-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2016 at 11:25 PM
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
  `Descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `afiliaciones`
--

INSERT INTO `afiliaciones` (`Id`, `Nombre`, `Descripcion`) VALUES
(1, 'EPS', 'Asmed salud');

-- --------------------------------------------------------

--
-- Table structure for table `cronograma`
--

CREATE TABLE `cronograma` (
  `id` int(10) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `examenes`
--

CREATE TABLE `examenes` (
  `id` int(3) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `Fecha` date NOT NULL,
  `Diagnostico` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `historiaclinica`
--

CREATE TABLE `historiaclinica` (
  `Id` int(10) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `Examenes` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historiaclinica`
--

INSERT INTO `historiaclinica` (`Id`, `Descripcion`, `Examenes`) VALUES
(1, 'No hay un historial presente', NULL);

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
  `Trabajador_HistoriaClinica` int(10) DEFAULT NULL,
  `trabajador_trabajo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trabajador`
--

INSERT INTO `trabajador` (`Cedula`, `Nombre`, `Telefono`, `Correo`, `Trabajador_Afiliaciones`, `Trabajador_HistoriaClinica`, `trabajador_trabajo`) VALUES
('1094899656', 'Paola Alejandra Arevalo', '7408956', 'pao0509@hotmail.com', NULL, NULL, NULL),
('1254698', 'Santiago Salazar', '7456321', 'santiago@hotmail.com', 1, 1, NULL),
('9773559', 'Mauricio A. Ramirez', '7405678', 'marlejo@hotmail.com', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trabajo`
--

CREATE TABLE `trabajo` (
  `Id` int(11) NOT NULL,
  `proceso` varchar(60) NOT NULL,
  `zona` varchar(50) NOT NULL,
  `actividad` varchar(50) NOT NULL,
  `tarea` varchar(50) NOT NULL,
  `rutinaria` tinyint(1) NOT NULL,
  `peligro_descripcion` varchar(200) NOT NULL,
  `peligro_clasificacion` varchar(20) NOT NULL,
  `peligro__efectosPosibles` varchar(20) NOT NULL,
  `control_existente_fuente` varchar(20) DEFAULT NULL,
  `control_existente_medio` varchar(20) DEFAULT NULL,
  `control_existente_persona` varchar(80) DEFAULT NULL,
  `evaluacion_riesgo_nivel_deficiencia` int(3) NOT NULL,
  `evaluacion_riesgo_nivel_exposicion` int(3) NOT NULL,
  `evaluacion_riesgo_nivel_probabilidad` int(3) NOT NULL,
  `evaluacion_riesgo_interpretacion_nivel_probabilidad` varchar(9) NOT NULL,
  `evaluacion_riesgo_nivel_consecuencia` int(3) NOT NULL,
  `evaluacion_riesgo_nivel_riesgo_intervencion` int(3) NOT NULL,
  `evaluacion_riesgo_interpretacion_nivel_riesgo` varchar(300) NOT NULL,
  `valoracion_riesgo` varchar(80) NOT NULL,
  `criterio_numero_expuestos` int(3) NOT NULL,
  `criterio_peor_consecuencia` varchar(250) NOT NULL,
  `criterio_requisito_legal` tinyint(1) NOT NULL,
  `intervencion_eliminacion` varchar(20) DEFAULT NULL,
  `intervencion_sustituacion` varchar(20) DEFAULT NULL,
  `intervencion_control_ingenieria` varchar(20) DEFAULT NULL,
  `intervencion_control_administrativo` varchar(300) DEFAULT NULL,
  `intervencion_elementos_proteccion_personal` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trabajo`
--

INSERT INTO `trabajo` (`Id`, `proceso`, `zona`, `actividad`, `tarea`, `rutinaria`, `peligro_descripcion`, `peligro_clasificacion`, `peligro__efectosPosibles`, `control_existente_fuente`, `control_existente_medio`, `control_existente_persona`, `evaluacion_riesgo_nivel_deficiencia`, `evaluacion_riesgo_nivel_exposicion`, `evaluacion_riesgo_nivel_probabilidad`, `evaluacion_riesgo_interpretacion_nivel_probabilidad`, `evaluacion_riesgo_nivel_consecuencia`, `evaluacion_riesgo_nivel_riesgo_intervencion`, `evaluacion_riesgo_interpretacion_nivel_riesgo`, `valoracion_riesgo`, `criterio_numero_expuestos`, `criterio_peor_consecuencia`, `criterio_requisito_legal`, `intervencion_eliminacion`, `intervencion_sustituacion`, `intervencion_control_ingenieria`, `intervencion_control_administrativo`, `intervencion_elementos_proteccion_personal`) VALUES
(2, 'Administrativo', 'Dirección Financiera', 'Facturación', 'Sistermatización de la información', 1, 'Postura prolongada', 'Biomecanicos', 'Lumbosacralgia', NULL, NULL, 'Pausas Activas', 2, 2, 4, 'Bajo', 25, 3, 'Mejorar si es posible, seria conveniente justificar la intervencion y su rentabilidad', 'Mejorable', 1, 'Lumbosacralgia cronica con incapacidad permanete parial', 1, NULL, NULL, NULL, 'Dotar al personal de sillas adecuadas para sus respectivos puestos de trabajo de acuerdo a la exigencia', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vencimientos`
--

CREATE TABLE `vencimientos` (
  `id` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `Insumo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `afiliaciones`
--
ALTER TABLE `afiliaciones`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cronograma`
--
ALTER TABLE `cronograma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examenes`
--
ALTER TABLE `examenes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historiaclinica`
--
ALTER TABLE `historiaclinica`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Examenes` (`Examenes`);

--
-- Indexes for table `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`Cedula`),
  ADD KEY `Trabajador_Afiliaciones` (`Trabajador_Afiliaciones`),
  ADD KEY `Trabajador_HistoriaClinica` (`Trabajador_HistoriaClinica`),
  ADD KEY `trabajador_trabajo` (`trabajador_trabajo`);

--
-- Indexes for table `trabajo`
--
ALTER TABLE `trabajo`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `vencimientos`
--
ALTER TABLE `vencimientos`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `examenes`
--
ALTER TABLE `examenes`
  ADD CONSTRAINT `examenes_ibfk_1` FOREIGN KEY (`id`) REFERENCES `historiaclinica` (`Examenes`) ON UPDATE CASCADE;

--
-- Constraints for table `trabajador`
--
ALTER TABLE `trabajador`
  ADD CONSTRAINT `trabajador_Afiliaciones` FOREIGN KEY (`Trabajador_Afiliaciones`) REFERENCES `afiliaciones` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `trabajador_HistoriaClinica` FOREIGN KEY (`Trabajador_HistoriaClinica`) REFERENCES `historiaclinica` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `trabajador_ibfk_1` FOREIGN KEY (`trabajador_trabajo`) REFERENCES `trabajo` (`Id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
