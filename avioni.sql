-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 11:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avioni`
--

-- --------------------------------------------------------

--
-- Table structure for table `avion`
--

CREATE TABLE `avion` (
  `id` int(11) UNSIGNED NOT NULL,
  `model` varchar(255) DEFAULT NULL,
  `opis` text DEFAULT NULL,
  `proizvodjacID` int(11) DEFAULT NULL,
  `tipID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `avion`
--

INSERT INTO `avion` (`id`, `model`, `opis`, `proizvodjacID`, `tipID`) VALUES
(1, 'A380', 'Airbus A380 je dvopalubni, širokotrupni, četveromotorni putnički avion sa kapacitetom od 525 do 853 putnika i maksimalnom težinom od 590 tona, on nosi laskavu titulu najvećeg putničkog aviona na svetu. Prvi put se u visine vinuo 27. aprila 2005. u Toulouseu u Francuskoj.', 2, 1),
(2, '747', 'Često nazivan i Jumbo Jet, Boing 747 verovatno je najprepoznatljiviji putnički avion današnjice. Ono po čemu je ipak najprepoznatljiviji, Boeing 747 nema ravnomerno valjkasto telo već ima „grbu“ u prednjem delu. „Grba“ gornje palube započinje pilotskom kabinom koja izlazi iznad glavne palube ...	', 1, 1),
(3, 'A320', 'Airbus A320 je familija aviona za kratke i srednje linije koju čini četiri osnovna modela: A318, A319, A320 i A321. To je prva familija aviona na svijetu koja koristi takozvanu „letenje preko žice“ (fly-by-wire) tehnologiju kojom se sve komande pilota prenose elektronski umesto mehanički i hidraulički.', 2, 2),
(4, '797', 'Na ovom modelu su razvijene i primenjene moderne tehnologije, u cilju postizanja jednostavnijeg aviona. On je izuzetno funkcionalan, efikasan i komforan. Kompanija Boeing tvrdi da je ovo njihov najekonomičniji avion. Na prekookeanskim letovima, Air France saobraća ovim avionom. Broj raspoloživih mesta je 276, u zavisnosti od destinacije.', 1, 2),
(5, '717', 'Boeing 717 je mlazni avion sa dvostukim motorom. Avion je prvobitno dizajnirao i prodavao McDonnell Douglas sa nazivom MD-95. Kada ga je Boeing otkupio, dao mu je nov naziv kao i niz inovacija. Elektronski sistem instrumenata, dvostruki sistem za upravljanje letom, globalni sistem pozicioniranja, savremena avionska navigacija su karakteristike ovog aviona.', 1, 3),
(6, 'A220-100', 'Airbus A220-100 avion koji nudi odlično iskustvo letenja sa prednostima za putnike kao što su: veća sedišta, veći prozori, više prostora za ručni prtljag u kabini itd. Takođe, u odnosu na svoje prethodnike mnogo je tiši. Letelica sa četiri puta manjim šumom i znatno manjom emisijom ugljen-dioksida i štetnih gasova.', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `proizvodjac`
--

CREATE TABLE `proizvodjac` (
  `proizvodjacID` int(11) UNSIGNED NOT NULL,
  `proizvodjac` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proizvodjac`
--

INSERT INTO `proizvodjac` (`proizvodjacID`, `proizvodjac`) VALUES
(1, 'Boeing'),
(2, 'Airbus Americas');

-- --------------------------------------------------------

--
-- Table structure for table `tip`
--

CREATE TABLE `tip` (
  `tipID` int(11) UNSIGNED NOT NULL,
  `nazivTipa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tip`
--

INSERT INTO `tip` (`tipID`, `nazivTipa`) VALUES
(1, 'Jumbo'),
(2, 'Mid-size'),
(3, 'Light');

-- --------------------------------------------------------

--
-- Table structure for table `zaposleni`
--

CREATE TABLE `zaposleni` (
  `zaposleniID` int(11) NOT NULL,
  `korisnickoIme` varchar(50) NOT NULL,
  `lozinka` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zaposleni`
--

INSERT INTO `zaposleni` (`zaposleniID`, `korisnickoIme`, `lozinka`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avion`
--
ALTER TABLE `avion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proizvodjac`
--
ALTER TABLE `proizvodjac`
  ADD PRIMARY KEY (`proizvodjacID`);

--
-- Indexes for table `tip`
--
ALTER TABLE `tip`
  ADD PRIMARY KEY (`tipID`);

--
-- Indexes for table `zaposleni`
--
ALTER TABLE `zaposleni`
  ADD PRIMARY KEY (`zaposleniID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avion`
--
ALTER TABLE `avion`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `proizvodjac`
--
ALTER TABLE `proizvodjac`
  MODIFY `proizvodjacID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tip`
--
ALTER TABLE `tip`
  MODIFY `tipID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `zaposleni`
--
ALTER TABLE `zaposleni`
  MODIFY `zaposleniID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
