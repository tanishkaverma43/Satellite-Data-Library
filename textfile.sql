-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 07:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `textfile`
--

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `name` varchar(16) NOT NULL,
  `file_name` varchar(16) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`name`, `file_name`, `time`) VALUES
('Tanishka Verma', '23456789.zip', '2024-05-06 10:50:21');

-- --------------------------------------------------------

--
-- Table structure for table `facultylogins`
--

CREATE TABLE `facultylogins` (
  `id` int(70) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facultylogins`
--

INSERT INTO `facultylogins` (`id`, `name`, `password`) VALUES
(1, 'Tanishka Verma', '$2y$10$Fc1T5PGVVpJCO');

-- --------------------------------------------------------

--
-- Table structure for table `facultyy`
--

CREATE TABLE `facultyy` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facultyy`
--

INSERT INTO `facultyy` (`id`, `name`, `department`, `email`, `password`) VALUES
(1, 'Tanishka Verma', '', 'tanishkaverma43@gmail.com', '@Tanuu123');

-- --------------------------------------------------------

--
-- Table structure for table `fdownload`
--

CREATE TABLE `fdownload` (
  `name` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form_data`
--

CREATE TABLE `form_data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_data`
--

INSERT INTO `form_data` (`id`, `name`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Table structure for table `product_dataa`
--

CREATE TABLE `product_dataa` (
  `ProductID` int(11) NOT NULL,
  `SatID` varchar(20) NOT NULL,
  `Sensor` varchar(10) NOT NULL,
  `SubScene` char(1) DEFAULT NULL,
  `GenAgency` varchar(20) DEFAULT NULL,
  `Path` int(11) DEFAULT NULL,
  `Row` int(11) DEFAULT NULL,
  `SessionNumber` int(11) DEFAULT NULL,
  `DateOfPass` date DEFAULT NULL,
  `NoOfBands` int(11) DEFAULT NULL,
  `BandNumbers` varchar(10) DEFAULT NULL,
  `PassType` varchar(10) DEFAULT NULL,
  `DateOfDump` date DEFAULT NULL,
  `DumpingOrbitNo` int(11) DEFAULT NULL,
  `ImagingOrbitNo` int(11) DEFAULT NULL,
  `BytesPerPixel` int(11) DEFAULT NULL,
  `BitsPerPixel` int(11) DEFAULT NULL,
  `GenerationDateTime` datetime DEFAULT NULL,
  `ProdCode` varchar(20) DEFAULT NULL,
  `ProdType` varchar(20) DEFAULT NULL,
  `InputResolutionAlong` decimal(5,2) DEFAULT NULL,
  `InputResolutionAcross` decimal(5,2) DEFAULT NULL,
  `OutputResolutionAlong` decimal(5,2) DEFAULT NULL,
  `OutputResolutionAcross` decimal(5,2) DEFAULT NULL,
  `Season` varchar(3) DEFAULT NULL,
  `ImageFormat` varchar(20) DEFAULT NULL,
  `ProcessingLevel` varchar(10) DEFAULT NULL,
  `ResampCode` varchar(10) DEFAULT NULL,
  `NoScans` int(11) DEFAULT NULL,
  `NoPixels` int(11) DEFAULT NULL,
  `StartPixel` int(11) DEFAULT NULL,
  `MapProjection` varchar(20) DEFAULT NULL,
  `Ellipsoid` varchar(10) DEFAULT NULL,
  `Datum` varchar(10) DEFAULT NULL,
  `ProdULLat` decimal(10,6) DEFAULT NULL,
  `ProdULLon` decimal(10,6) DEFAULT NULL,
  `ProdURLat` decimal(10,6) DEFAULT NULL,
  `ProdURLon` decimal(10,6) DEFAULT NULL,
  `ProdLRLat` decimal(10,6) DEFAULT NULL,
  `ProdLRLon` decimal(10,6) DEFAULT NULL,
  `ProdLLLat` decimal(10,6) DEFAULT NULL,
  `ProdLLLon` decimal(10,6) DEFAULT NULL,
  `ImageULLat` decimal(10,6) DEFAULT NULL,
  `ImageULLon` decimal(10,6) DEFAULT NULL,
  `ImageURLat` decimal(10,6) DEFAULT NULL,
  `ImageURLon` decimal(10,6) DEFAULT NULL,
  `ImageLRLat` decimal(10,6) DEFAULT NULL,
  `ImageLRLon` decimal(10,6) DEFAULT NULL,
  `ImageLLLat` decimal(10,6) DEFAULT NULL,
  `ImageLLLon` decimal(10,6) DEFAULT NULL,
  `SceneCenterLat` decimal(10,6) DEFAULT NULL,
  `SceneCenterLon` decimal(10,6) DEFAULT NULL,
  `SceneCenterTime` datetime DEFAULT NULL,
  `SceneCenterRoll` decimal(10,6) DEFAULT NULL,
  `SceneCenterPitch` decimal(10,6) DEFAULT NULL,
  `SceneCenterYaw` decimal(10,6) DEFAULT NULL,
  `SunAziumthAtCenter` decimal(10,6) DEFAULT NULL,
  `SunElevationAtCenter` decimal(10,6) DEFAULT NULL,
  `ImageHeadingAngle` decimal(10,6) DEFAULT NULL,
  `IncidenceAngle` decimal(10,6) DEFAULT NULL,
  `SatelliteAltitude` decimal(15,6) DEFAULT NULL,
  `Tiltangle` decimal(10,6) DEFAULT NULL,
  `DEMCorrection` char(2) DEFAULT NULL,
  `SourceOfOrbit` int(11) DEFAULT NULL,
  `SourceOfAttitude` int(11) DEFAULT NULL,
  `ImagingDirection` char(1) DEFAULT NULL,
  `B2Temp` decimal(5,2) DEFAULT NULL,
  `B3Temp` decimal(5,2) DEFAULT NULL,
  `B4Temp` decimal(5,2) DEFAULT NULL,
  `B2_Lmin` decimal(5,2) DEFAULT NULL,
  `B3_Lmin` decimal(5,2) DEFAULT NULL,
  `B4_Lmin` decimal(5,2) DEFAULT NULL,
  `B2_Lmax` decimal(5,2) DEFAULT NULL,
  `B3_Lmax` decimal(5,2) DEFAULT NULL,
  `B4_Lmax` decimal(5,2) DEFAULT NULL,
  `B2SaturationRadiance` decimal(10,4) DEFAULT NULL,
  `B3SaturationRadiance` decimal(10,4) DEFAULT NULL,
  `B4SaturationRadiance` decimal(10,4) DEFAULT NULL,
  `ShiftPercent` int(11) DEFAULT NULL,
  `SatelliteHeadingAngle` decimal(10,6) DEFAULT NULL,
  `SceneStartTime` datetime DEFAULT NULL,
  `SceneEndTime` datetime DEFAULT NULL,
  `ProductSceneStartTime` datetime DEFAULT NULL,
  `ProductSceneEndTime` datetime DEFAULT NULL,
  `GhostCorrection` char(5) DEFAULT NULL,
  `JpegNoColumns` int(11) DEFAULT NULL,
  `JpegNoRows` int(11) DEFAULT NULL,
  `image_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studentss`
--

CREATE TABLE `studentss` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentss`
--

INSERT INTO `studentss` (`id`, `name`, `email`, `password`) VALUES
(1, 'Tanishka Verma', 'tanishkaverma43@gmail.com', '@Tanu123'),
(2, 'soniya', 'soniya@gmail.com', '@Soniya123');

-- --------------------------------------------------------

--
-- Table structure for table `userss`
--

CREATE TABLE `userss` (
  `id` int(16) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date_column` blob NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userss`
--

INSERT INTO `userss` (`id`, `name`, `password`, `date_column`) VALUES
(1, 'Tanishka Verma', '$2y$10$huD8v47hjgfR5', 0x323032342d30352d30362031303a35303a3035);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facultylogins`
--
ALTER TABLE `facultylogins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facultyy`
--
ALTER TABLE `facultyy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `form_data`
--
ALTER TABLE `form_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentss`
--
ALTER TABLE `studentss`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `userss`
--
ALTER TABLE `userss`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facultylogins`
--
ALTER TABLE `facultylogins`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facultyy`
--
ALTER TABLE `facultyy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form_data`
--
ALTER TABLE `form_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studentss`
--
ALTER TABLE `studentss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userss`
--
ALTER TABLE `userss`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
