-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2016 at 12:14 AM
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
  `Descripcion` varchar(300) NOT NULL,
  `Fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `afiliaciones`
--

INSERT INTO `afiliaciones` (`Id`, `Nombre`, `Descripcion`, `Fecha`) VALUES
(1, 'EPS', 'Asmed salud', '0000-00-00'),
(2, 'ARL', 'Proteccion', '0000-00-00'),
(3, 'AFP', 'SURA', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `brigada`
--

CREATE TABLE `brigada` (
  `IdBrigada` int(10) NOT NULL,
  `Funcion` varchar(45) NOT NULL,
  `Descripcion_funcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brigada`
--

INSERT INTO `brigada` (`IdBrigada`, `Funcion`, `Descripcion_funcion`) VALUES
(1, 'Evacuacion', 'Procurar sin que esto implique peligro para su integridad personal, condiciones de evacuación\r\napropiadas para que las personas puedan evacuar'),
(2, 'Primeros Auxilios', 'Administrar primeros auxilios básicos, al nivel de una primera respuesta, el Soporte básico de vida,\r\nnecesario para estabilizar una víctima de Accidente o enfermedad súbita, que ocurra dentro de las\r\ninstalaciones');

-- --------------------------------------------------------

--
-- Table structure for table `cronograma`
--

CREATE TABLE `cronograma` (
  `id` int(10) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Fecha` date NOT NULL,
  `estado` int(1) NOT NULL,
  `PersonasProgramadas` int(10) DEFAULT NULL,
  `PersonasAsistieron` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cronograma`
--

INSERT INTO `cronograma` (`id`, `Descripcion`, `Fecha`, `estado`, `PersonasProgramadas`, `PersonasAsistieron`) VALUES
(1, 'Reunión con los inversores', '2016-04-30', 0, 5, NULL),
(2, 'Hacer trabajar a marlejo', '2016-04-12', 0, 1, NULL),
(3, 'Entrega #2 del proyecto', '2016-04-12', 0, 2, NULL),
(4, 'Prueba', '2016-04-08', 0, 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `examenes`
--

CREATE TABLE `examenes` (
  `id` int(3) NOT NULL,
  `Tipo` varchar(45) NOT NULL,
  `Fecha` date NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `Diagnostico` varchar(500) NOT NULL,
  `IdHistoriaClinica` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examenes`
--

INSERT INTO `examenes` (`id`, `Tipo`, `Fecha`, `Descripcion`, `Diagnostico`, `IdHistoriaClinica`) VALUES
(1, 'Examen Ingreso', '2016-01-18', 'Examen medico General', 'El paciente es apto para realizar las actividades requeridas por la empresa', 1),
(2, 'Examen ingreso', '2016-02-01', 'Examen medico general', 'El paciente es apto para realizar la actividades que la empresa requiere', 2),
(3, 'Examen Periodico', '2016-03-24', 'Examen Auditivo periodico', 'El paciente presenta normalidad en el funcionamiento de sus oidos', 3);

-- --------------------------------------------------------

--
-- Table structure for table `historiaclinica`
--

CREATE TABLE `historiaclinica` (
  `Id` int(10) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `Cedula_trabajador` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historiaclinica`
--

INSERT INTO `historiaclinica` (`Id`, `Descripcion`, `Cedula_trabajador`) VALUES
(1, 'Se solicita examen medico general para realizar la contratacion', '1254698'),
(2, 'Se solicita examen medico general para realizar la contratacion', '9773559'),
(3, 'Se solicita examen auditivo', '1094899656');

-- --------------------------------------------------------

--
-- Table structure for table `trabajador`
--

CREATE TABLE `trabajador` (
  `Cedula` varchar(20) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Foto_Link` varchar(255) DEFAULT NULL,
  `Correo` varchar(30) NOT NULL,
  `Titulo_academico` varchar(100) NOT NULL,
  `experiencia` varchar(500) NOT NULL,
  `ausencias` int(10) DEFAULT NULL,
  `IdBrigada` int(10) DEFAULT NULL,
  `IdTrabajo` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trabajador`
--

INSERT INTO `trabajador` (`Cedula`, `Nombre`, `Telefono`, `Foto_Link`, `Correo`, `Titulo_academico`, `experiencia`, `ausencias`, `IdBrigada`, `IdTrabajo`) VALUES
('1094899656', 'Paola Alejandra Arevalo', '7408956', NULL, 'pao0509@hotmail.com', 'universitario', 'ninguna', NULL, 2, 2),
('1254698', 'Santiago Salazar', '7456321', NULL, 'santiago@hotmail.com', 'tecnológico', 'casinos', NULL, 2, 2),
('9773559', 'Mauricio A. Ramirez', '7405678', NULL, 'marlejo@hotmail.com', 'universitario', 'mi industria', NULL, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `trabajador_afiliaciones`
--

CREATE TABLE `trabajador_afiliaciones` (
  `Cedula` varchar(20) NOT NULL,
  `IdAfiliaciones` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trabajo`
--

CREATE TABLE `trabajo` (
  `Id` int(10) NOT NULL,
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
  `evaluacion_riesgo_nivel_probabilidad` int(3) DEFAULT NULL,
  `evaluacion_riesgo_interpretacion_nivel_probabilidad` varchar(9) DEFAULT NULL,
  `evaluacion_riesgo_nivel_consecuencia` int(3) NOT NULL,
  `evaluacion_riesgo_nivel_riesgo_intervencion` int(3) DEFAULT NULL,
  `evaluacion_riesgo_interpretacion_nivel_riesgo` varchar(300) DEFAULT NULL,
  `valoracion_riesgo` varchar(80) NOT NULL,
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

INSERT INTO `trabajo` (`Id`, `proceso`, `zona`, `actividad`, `tarea`, `rutinaria`, `peligro_descripcion`, `peligro_clasificacion`, `peligro__efectosPosibles`, `control_existente_fuente`, `control_existente_medio`, `control_existente_persona`, `evaluacion_riesgo_nivel_deficiencia`, `evaluacion_riesgo_nivel_exposicion`, `evaluacion_riesgo_nivel_probabilidad`, `evaluacion_riesgo_interpretacion_nivel_probabilidad`, `evaluacion_riesgo_nivel_consecuencia`, `evaluacion_riesgo_nivel_riesgo_intervencion`, `evaluacion_riesgo_interpretacion_nivel_riesgo`, `valoracion_riesgo`, `criterio_peor_consecuencia`, `criterio_requisito_legal`, `intervencion_eliminacion`, `intervencion_sustituacion`, `intervencion_control_ingenieria`, `intervencion_control_administrativo`, `intervencion_elementos_proteccion_personal`) VALUES
(2, 'Administrativo', 'Dirección Financiera', 'Facturación', 'Sistermatización de la información', 1, 'Postura prolongada', 'Biomecanicos', 'Lumbosacralgia', NULL, NULL, 'Pausas Activas', 2, 2, 4, 'Bajo', 25, 3, 'Mejorar si es posible, seria conveniente justificar la intervencion y su rentabilidad', 'Mejorable', 'Lumbosacralgia cronica con incapacidad permanete parial', 1, NULL, NULL, NULL, 'Dotar al personal de sillas adecuadas para sus respectivos puestos de trabajo de acuerdo a la exigencia', NULL),
(3, 'Operativo', 'Area Medicamentos', 'Recepcion Medicamentos', 'Verificacion tecnica de medicamentos', 1, 'Postura(PROLONGADA, MANTENIDA, FORZADA, ANTIGRAVITACIONAL)', 'BIOMEDICOS', 'Cervicalgia', NULL, NULL, 'Pausas Activas', 2, 2, NULL, NULL, 25, NULL, NULL, 'MEJORABLE', 'PERDIDA DE LA CAPACIDAD LABORAL', 1, NULL, NULL, NULL, 'Establecer protocolo de seguridad para la recepcion tecnica de medicamentos en el cual se estipule un paso a paso. Capacitar al personal en mecanica corporal', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vencimientos`
--

CREATE TABLE `vencimientos` (
  `id` int(10) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `fecha_Vencimiento` date NOT NULL,
  `Instrucciones` varchar(255) NOT NULL,
  `estado` int(1) NOT NULL,
  `Cedula_Trabajador` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vencimientos`
--

INSERT INTO `vencimientos` (`id`, `Nombre`, `fecha_Vencimiento`, `Instrucciones`, `estado`, `Cedula_Trabajador`) VALUES
(1, 'Extintor', '2018-08-31', '1. Quitar el pasador de seguridad\r\n2. Apretar la maneta\r\n3. Dirigir el chorro a la base de las llamas \r\n', 1, '1094899656'),
(2, 'Gel Desinfectante', '2018-01-31', 'Aplicar abundantemente en la zona a desinfectar', 1, '1094899656');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `afiliaciones`
--
ALTER TABLE `afiliaciones`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `brigada`
--
ALTER TABLE `brigada`
  ADD PRIMARY KEY (`IdBrigada`);

--
-- Indexes for table `cronograma`
--
ALTER TABLE `cronograma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examenes`
--
ALTER TABLE `examenes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IdHistoriaClinica` (`IdHistoriaClinica`);

--
-- Indexes for table `historiaclinica`
--
ALTER TABLE `historiaclinica`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Cedula_trabajador` (`Cedula_trabajador`);

--
-- Indexes for table `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`Cedula`),
  ADD KEY `IdBrigada` (`IdBrigada`),
  ADD KEY `IdTrabajo` (`IdTrabajo`);

--
-- Indexes for table `trabajador_afiliaciones`
--
ALTER TABLE `trabajador_afiliaciones`
  ADD PRIMARY KEY (`Cedula`,`IdAfiliaciones`),
  ADD KEY `Cedula` (`Cedula`),
  ADD KEY `IdAfiliaciones` (`IdAfiliaciones`);

--
-- Indexes for table `trabajo`
--
ALTER TABLE `trabajo`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `vencimientos`
--
ALTER TABLE `vencimientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Cedula_Trabajador` (`Cedula_Trabajador`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `afiliaciones`
--
ALTER TABLE `afiliaciones`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `brigada`
--
ALTER TABLE `brigada`
  MODIFY `IdBrigada` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cronograma`
--
ALTER TABLE `cronograma`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `examenes`
--
ALTER TABLE `examenes`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `historiaclinica`
--
ALTER TABLE `historiaclinica`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `trabajo`
--
ALTER TABLE `trabajo`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vencimientos`
--
ALTER TABLE `vencimientos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `examenes`
--
ALTER TABLE `examenes`
  ADD CONSTRAINT `examenes_ibfk_1` FOREIGN KEY (`IdHistoriaClinica`) REFERENCES `historiaclinica` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `historiaclinica`
--
ALTER TABLE `historiaclinica`
  ADD CONSTRAINT `historiaclinica_ibfk_1` FOREIGN KEY (`Cedula_trabajador`) REFERENCES `trabajador` (`Cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trabajador`
--
ALTER TABLE `trabajador`
  ADD CONSTRAINT `trabajador_ibfk_1` FOREIGN KEY (`IdTrabajo`) REFERENCES `trabajo` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trabajador_ibfk_2` FOREIGN KEY (`IdBrigada`) REFERENCES `brigada` (`IdBrigada`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trabajador_afiliaciones`
--
ALTER TABLE `trabajador_afiliaciones`
  ADD CONSTRAINT `trabajador_afiliaciones_ibfk_1` FOREIGN KEY (`Cedula`) REFERENCES `trabajador` (`Cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trabajador_afiliaciones_ibfk_2` FOREIGN KEY (`IdAfiliaciones`) REFERENCES `afiliaciones` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vencimientos`
--
ALTER TABLE `vencimientos`
  ADD CONSTRAINT `vencimientos_ibfk_1` FOREIGN KEY (`Cedula_Trabajador`) REFERENCES `trabajador` (`Cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
