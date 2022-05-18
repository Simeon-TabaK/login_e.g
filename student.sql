-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 09:24 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tuto`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id_student` int(11) NOT NULL,
  `nom` varchar(33) DEFAULT NULL,
  `postnom` varchar(33) DEFAULT NULL,
  `prenom` varchar(33) DEFAULT NULL,
  `sexe` varchar(11) DEFAULT NULL,
  `lieu_naiss` varchar(11) DEFAULT NULL,
  `date_naiss` date DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `password_` varchar(33) NOT NULL,
  `nationalite` varchar(33) NOT NULL,
  `adresse` varchar(55) NOT NULL,
  `faculte` varchar(33) NOT NULL,
  `cycle` varchar(33) NOT NULL,
  `promotion` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id_student`, `nom`, `postnom`, `prenom`, `sexe`, `lieu_naiss`, `date_naiss`, `email`, `password_`, `nationalite`, `adresse`, `faculte`, `cycle`, `promotion`) VALUES
(1, 'Simeon', 'Katembo', 'Tabasimwa', 'M', 'Goma', '2022-05-18', 'test@exo.com', '123456', 'RD', 'Goma', 'FSTA', 'Licence', 'BAC3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_student`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
