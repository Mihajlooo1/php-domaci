-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 08:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iteh`
--

-- --------------------------------------------------------

--
-- Table structure for table `aksesoari`
--

CREATE TABLE `aksesoari` (
  `ID` int(11) NOT NULL,
  `korisnicko_ime` varchar(100) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  `ocena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aksesoari`
--

INSERT INTO `aksesoari` (`ID`, `korisnicko_ime`, `komentar`, `ocena`) VALUES
(20, 'Nemanja', 'Lepse stvari ni u jednoj radnji nisam video.', 5),
(21, 'Marija', 'Rancevi su super, a roze znojnice su me odusevile!', 5),
(22, 'Dimitrije', 'Bolje pare u reku da sam bacio, nego sto sam ovde kapu kupio.', 1),
(23, 'Stefan', 'Kad se pogleda odnos cene i kvaliteta, ima dosta boljih radnji.', 2),
(24, 'Marko', 'Sasvim solidan asortiman.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `ID` int(11) NOT NULL,
  `ime` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`ID`, `ime`, `email`) VALUES
(28, 'Marko', 'markomarkovic99@gmail.com'),
(29, 'Nemanja', 'nemanja.janketic@yahoo.com'),
(30, 'Stefan', 'stef321@gmail.com'),
(31, 'Sava', 'sava555v@gmail.com'),
(32, 'Slavica', 'slav224bugarski@gmail.com'),
(33, 'Marija', 'maki.ciric@hotmail.com'),
(34, 'Dimitrije', 'dimi.banjac55@gmail.com'),
(35, 'Djordje', 'papadubi.zorz@gmail.com'),
(36, 'Dragan', 'dragan.jove.torbica@gmail.com'),
(37, 'Dejan', 'dejanboskic224@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `obuca`
--

CREATE TABLE `obuca` (
  `ID` int(11) NOT NULL,
  `korisnicko_ime` varchar(100) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  `ocena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obuca`
--

INSERT INTO `obuca` (`ID`, `korisnicko_ime`, `komentar`, `ocena`) VALUES
(33, 'Djordje', 'Papuce su vam nesto!', 5),
(34, 'Slavica', 'Kupila sam pumine papuce pre dve godine, i dalje me super sluze. Sve pohvale', 5),
(35, 'Stefan', 'Sasvim korektan izbor.', 3),
(36, 'Dragan', 'Moze to i bolje', 2),
(37, 'Sava', 'Kopacke nisu nesto lepe ali su jako udobne, sto je i najbitnije.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `odeca`
--

CREATE TABLE `odeca` (
  `ID` int(11) NOT NULL,
  `korisnicko_ime` varchar(100) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  `ocena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `odeca`
--

INSERT INTO `odeca` (`ID`, `korisnicko_ime`, `komentar`, `ocena`) VALUES
(81, 'Marko', 'Duksevi su super!', 5),
(82, 'Nemanja', 'Majice su loseg kvaliteta. Pocepala se nakon mesec dana', 1),
(83, 'Stefan', 'Sve u svemu, solidno.', 3),
(84, 'Sava', 'Stvari su veoma lepe.', 4),
(85, 'Dimitrije', 'Nema dresa Vojvodine. Velika sramota!', 1),
(86, 'Marko', 'Zvezdina majica puca!', 5),
(87, 'Dragan', 'Ima i lepsih sorceva.', 2),
(88, 'Dejan', 'Stvari su lepe ali su i cene lepe.', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aksesoari`
--
ALTER TABLE `aksesoari`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `obuca`
--
ALTER TABLE `obuca`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `odeca`
--
ALTER TABLE `odeca`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aksesoari`
--
ALTER TABLE `aksesoari`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `obuca`
--
ALTER TABLE `obuca`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `odeca`
--
ALTER TABLE `odeca`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
