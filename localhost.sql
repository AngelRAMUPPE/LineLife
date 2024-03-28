-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 26, 2023 at 05:40 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20956155_linelife`
--
CREATE DATABASE IF NOT EXISTS `id20956155_linelife` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id20956155_linelife`;

-- --------------------------------------------------------

--
-- Table structure for table `datos`
--

CREATE TABLE `datos` (
  `ID` int(12) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Edad` int(12) NOT NULL,
  `Telefono1` int(12) NOT NULL,
  `Telefono2` int(12) NOT NULL,
  `TipoSangre` varchar(45) NOT NULL,
  `Peso` int(12) NOT NULL,
  `FechaNac` varchar(45) NOT NULL,
  `Correo` varchar(45) NOT NULL,
  `Contraseña` varchar(45) NOT NULL,
  `Genero` varchar(45) NOT NULL,
  `Municipio` varchar(45) NOT NULL,
  `CodigoPostal` int(12) NOT NULL,
  `Medicamentos` varchar(45) NOT NULL,
  `Alergias` varchar(45) NOT NULL,
  `Notas` varchar(45) NOT NULL,
  `Padecimientos` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datos`
--

INSERT INTO `datos` (`ID`, `Nombre`, `Edad`, `Telefono1`, `Telefono2`, `TipoSangre`, `Peso`, `FechaNac`, `Correo`, `Contraseña`, `Genero`, `Municipio`, `CodigoPostal`, `Medicamentos`, `Alergias`, `Notas`, `Padecimientos`) VALUES
(1, 'a', 1, 2, 2, 'A+', 2, '2023-06-15', 'aa1', 'aa1', 'on', 'ss', 22, 'dsd', 'ada', 'asa', ''),
(2, 'Fernando Paramo López', 18, 2147483647, 2147483647, 'B-', 70, '2023-04-23', 'fernandoparamo369@gmail.com', 'aa1', 'Masculino', 'Abasolo', 36976, 'Paracetamol', 'Polvo', 'Ninguna en especial', 'Asma'),
(3, 'daniel', 19, 23456, 2345678, 'A+', 56, '2023-06-26', 'fernandoparamo369@gmail.com', 'aa1t65y5', 'Masculino', 'Abasolo', 23456, 'Ninguno', 'Polvo', 'Ningina en especial', 'Asma'),
(4, 'daniel', 19, 23456, 2345678, 'A+', 56, '2023-06-26', 'fernandoparamo369@gmail.com', 'aa1t65y5', 'Masculino', 'Abasolo', 36970, 'Omeprazol', 'Polvo', 'Ningina en especial', 'Hipertensión'),
(5, 'Emmanuel Rodriguez Meza', 21, 2147483647, 2147483647, 'B+', 75, '2023-06-23', 'Emma@correo.com', '12345678', 'Masculino', 'Huanimaro', 36990, 'Paracetamol', 'Polvo', 'Ninguna', 'Diabetes'),
(6, 'f', 12, 2324, 235465, 'A+', 23, '2023-06-02', 'fernandoparamo369@gmail.com', 'aa1786756', 'on', 'ertgyh', 4567, 'dsfgh', 'gfhjfy', 'dfhgjhjfhdgjhjhfgfhgjhkg', 'Hipertensión');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datos`
--
ALTER TABLE `datos`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
