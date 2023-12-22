-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 07:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fistula`
--

-- --------------------------------------------------------

--
-- Table structure for table `fitula_patient_visit`
--

CREATE TABLE `fitula_patient_visit` (
  `id` int(11) NOT NULL,
  `visit date` date NOT NULL,
  `MRN` int(11) NOT NULL,
  `bp` varchar(30) DEFAULT NULL,
  `weight` varchar(60) NOT NULL,
  `RR` varchar(60) NOT NULL,
  `blood group` varchar(30) NOT NULL,
  `chief_compliant` longtext NOT NULL,
  `history` longtext NOT NULL,
  `diagnosis` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fitula_patient_visit`
--

INSERT INTO `fitula_patient_visit` (`id`, `visit date`, `MRN`, `bp`, `weight`, `RR`, `blood group`, `chief_compliant`, `history`, `diagnosis`) VALUES
(1, '2023-09-03', 237555, '23', '44', '55', 'A+', 'dd', 'tt', 'ee'),
(2, '2023-09-04', 237555, '55', '89', '55', 'A+', 'head ace', 'fistula', 'll'),
(4, '2023-09-03', 237555, '', '', '', 'A+', '', 'dhiufjnbcifcfiuv ihfirfrnv v iuhvjf vifvnb irhfrf veiuvevjniruvfv', ''),
(5, '2023-09-12', 237555, '', '', '', 'A+', '', 'dhiufjnbcifcfiuv ihfirfrnv v iuhvjf  ygyuuguhuihijbn iuhihjnuihjn uihihijkniuhihn uhhinjkhinjiuhihvifvnb irhfrf veiuvevjniruvfv', ''),
(6, '2023-09-05', 237555, '', '', '', 'A+', '', '', ''),
(7, '2023-09-03', 237555, '', '', '', 'A+', '', '', ''),
(8, '2023-09-13', 237555, '', '', '', 'A+', '', '', ''),
(9, '2023-09-04', 1, '120', '80', '60', 'AB+', 'head ache , fever , nausia', 'she is blood pressure and arthrites possitive', 'no concern');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `MRN` int(15) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `age` int(20) NOT NULL,
  `region` varchar(45) NOT NULL,
  `woreda` varchar(45) NOT NULL,
  `kebele` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`MRN`, `fname`, `lname`, `gender`, `age`, `region`, `woreda`, `kebele`) VALUES
(1, 'ADDIS', 'DEMEKE', 'female', 45, 'oromia', '', 0),
(888, 'dawit', 'tirfesa', 'male', 23, 'amhara', '', 0),
(10112, 'Dagim', 'Hailegebrel', 'male', 22, 'Amhara', 'Gondar', 0),
(237555, 'DAGIM', 'LAKEW', 'male', 33, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(2) NOT NULL,
  `username` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `Role` enum('admin','data clerk','clinician') NOT NULL,
  `Gender` enum('male','female') NOT NULL,
  `PHONE _NUMBER` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `Email`, `password`, `Role`, `Gender`, `PHONE _NUMBER`) VALUES
(18, 'kiya', 'admin@campcodes.com', 'dogcat', 'admin', 'male', 0),
(19, 'kiya', 'admin@campcodes.com', 'dogcat', 'data clerk', 'male', 0),
(24, 'kiya', 'dagimm@gja.com', 'dogcat', 'clinician', 'male', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fitula_patient_visit`
--
ALTER TABLE `fitula_patient_visit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test` (`MRN`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`MRN`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fitula_patient_visit`
--
ALTER TABLE `fitula_patient_visit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fitula_patient_visit`
--
ALTER TABLE `fitula_patient_visit`
  ADD CONSTRAINT `test` FOREIGN KEY (`MRN`) REFERENCES `patient` (`MRN`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
