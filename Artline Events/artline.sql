-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 12:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artline`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BookingID` int(255) NOT NULL,
  `EventID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `OrganizerID` int(11) NOT NULL,
  `VenueID` int(11) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Payment` varchar(50) NOT NULL,
  `Bookingdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `FullName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`FullName`, `Email`, `Phone`, `Gender`, `Username`, `Password`, `ID`) VALUES
('Muhammad Tayyab', 'Tayyab@gmail.com', '123456789', 'male', 'tub', '12345', 93);

-- --------------------------------------------------------

--
-- Table structure for table `eevent`
--

CREATE TABLE `eevent` (
  `Eventname` varchar(255) NOT NULL,
  `Eventtitle` varchar(255) NOT NULL,
  `Eventdate` date NOT NULL,
  `Eventdescription` text NOT NULL,
  `EventiD` int(255) NOT NULL,
  `CustomeriD` int(11) NOT NULL,
  `VenueID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organizers`
--

CREATE TABLE `organizers` (
  `OrganizersID` int(11) NOT NULL,
  `OrganizersName` varchar(255) NOT NULL,
  `OrganizersEmail` varchar(255) NOT NULL,
  `OrganizersPhone` varchar(20) NOT NULL,
  `OrganizersUsername` varchar(50) NOT NULL,
  `OrganizersPassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organizers`
--

INSERT INTO `organizers` (`OrganizersID`, `OrganizersName`, `OrganizersEmail`, `OrganizersPhone`, `OrganizersUsername`, `OrganizersPassword`) VALUES
(2, 'Admin', 'Artline@gmail.com', '123456789', 'Admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `VenueID` int(255) NOT NULL,
  `VenueName` varchar(255) NOT NULL,
  `VenueCapacity` int(11) NOT NULL,
  `VenueLocation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`VenueID`, `VenueName`, `VenueCapacity`, `VenueLocation`) VALUES
(1, 'Lumina Lounge', 50, 'Sharjah, Nahda'),
(2, 'Serenity Gardens', 100, 'Sharjah, Samnan'),
(3, 'Starlight Pavilion', 150, 'Sharjah, Abu Shagara'),
(4, 'Harmony Hall', 200, 'Sharjah, Dubai, Al Karama'),
(5, 'Riverside Retreat', 300, 'Umm Al Quwain, Al Raudah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BookingID`),
  ADD KEY `text` (`CustomerID`),
  ADD KEY `EventID` (`EventID`),
  ADD KEY `VenueID` (`VenueID`),
  ADD KEY `OrganizerID` (`OrganizerID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `eevent`
--
ALTER TABLE `eevent`
  ADD PRIMARY KEY (`EventiD`),
  ADD KEY `VenueID` (`VenueID`),
  ADD KEY `CustomeriD` (`CustomeriD`);

--
-- Indexes for table `organizers`
--
ALTER TABLE `organizers`
  ADD PRIMARY KEY (`OrganizersID`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`VenueID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BookingID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `eevent`
--
ALTER TABLE `eevent`
  MODIFY `EventiD` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `organizers`
--
ALTER TABLE `organizers`
  MODIFY `OrganizersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `VenueID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
