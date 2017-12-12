-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2017 at 04:58 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_film` varchar(10) NOT NULL,
  `baris` int(11) NOT NULL,
  `kolom` int(11) NOT NULL,
  `tgl_booking` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `id`, `id_film`, `baris`, `kolom`, `tgl_booking`) VALUES
(1, 1112, '0A01', 0, 4, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `credit_card` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `nama`, `email`, `credit_card`, `password`) VALUES
(1, 'Baby Cattleya', 'bcattleya@gmail.com', 'Master Card', 'tes'),
(3, 'cek', 'haha@gmail.com', 'kaka', '12'),
(1111, 'Asepnur', 'asepnur.isk@gmail.com', '345678099', 'akugantek'),
(1112, 'Adam Levine', 'adam@gmail.com', '140810160048', 'password'),
(1113, 'Nama', 'emai@email.com', '9876543234', '1a1dc91c907325c69271ddf0c944bc72');

-- --------------------------------------------------------

--
-- Table structure for table `list_film`
--

CREATE TABLE `list_film` (
  `id_film` varchar(10) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `tgl_main` date NOT NULL,
  `jam` time NOT NULL,
  `gambar` varchar(1000) NOT NULL,
  `trailer` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_film`
--

INSERT INTO `list_film` (`id_film`, `judul`, `deskripsi`, `tgl_main`, `jam`, `gambar`, `trailer`) VALUES
('0A01', 'Kingsman 2', 'When their headquarters are destroyed and the world is held hostage, the Kingsman\'s journey leads them to the discovery of an allied spy organization in the US. These two elite secret organizations must band together to defeat a common enemy.', '2017-11-10', '12:20:00', 'https://www.cgv.id/uploads/movie/compressed/MOV3260.jpg', 'https://www.youtube.com/embed/4PggfbzJcvA'),
('0A02', 'Justice League', 'ueled by his restored faith in humanity and inspired by Superman\'s selfless act, Bruce Wayne enlists the help of his newfound ally, Diana Prince, to face an even greater enemy. Together, Batman and Wonder Woman work quickly to find and recruit a team of metahumans to stand against this newly awakened threat. But despite the formation of this unprecedented league of heroes-Batman, Wonder Woman, Aquaman, Cyborg and The Flash-it may already be too late to save the planet from an assault of catastrophic proportions.', '2017-12-01', '14:00:00', 'https://www.cgv.id/uploads/movie/compressed/MOV3355.jpg', 'https://www.youtube.com/embed/r9-DM9uBtVI'),
('0B01', 'Pitch Perfect 3', 'Following their win at the world championship, the now separated Bellas reunite for one last singing competition at an overseas USO tour, but face a group who uses both instruments and voices.', '2017-12-22', '15:30:00', 'https://movies.universalpictures.com/media/pp3-teaser-onesheet-594da88174a10-1.png', 'https://www.youtube.com/embed/aVsOXRgjeeU'),
('0C01', 'Coco', 'Aspiring musician Miguel, confronted with his family\'s ancestral ban on music, enters the Land of the Dead to find his great-great-grandfather, a legendary singer.', '2017-12-07', '21:00:00', 'https://www.cgv.id/uploads/movie/compressed/MOV3403.jpg', 'https://www.youtube.com/embed/Ga6RYejo6Hk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `booking_ibfk_2` (`id_film`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `list_film`
--
ALTER TABLE `list_film`
  ADD PRIMARY KEY (`id_film`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1114;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_film`) REFERENCES `list_film` (`id_film`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`id`) REFERENCES `customer` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
