-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2017 at 06:18 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(36, 1114, '0C01', 2, 3, '0000-00-00'),
(37, 1114, '0C01', 4, 5, '0000-00-00'),
(38, 1114, '0C01', 4, 9, '0000-00-00'),
(39, 1114, '0C01', 8, 9, '0000-00-00'),
(40, 1114, '0C01', 6, 5, '0000-00-00'),
(41, 1114, '0C01', 10, 9, '0000-00-00'),
(42, 1114, '0C01', 10, 10, '0000-00-00'),
(43, 1114, '0A01', 1, 1, '0000-00-00'),
(46, 1114, '0B01', 1, 1, '0000-00-00');

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
(1113, 'Nama', 'emai@email.com', '9876543234', '1a1dc91c907325c69271ddf0c944bc72'),
(1114, 'Erlangga Riyyan Nugraha', 'erlangga.nugraha9@gmail.com', '140810160018', '818f9c45cfa30eeff277ef38bcbe9910');

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
('0A01', 'Insidious: Chapter 4', 'Insidious: Chapter 4 adalah film Amerika Serikat produksi tahun 2017 bergenre horor supernatural yang disutradarai oleh Adam Robitel, berdasarkan skenario yang ditulis oleh Leigh Whannell.', '2017-11-10', '12:20:00', 'http://t1.gstatic.com/images?q=tbn:ANd9GcTE0r-ZiGH8aV-Nz4j9KHtrv_UdL-rioSlcb8PGkUHjxaoUxolc', 'https://www.youtube.com/embed/-jLAucYnYdg'),
('0A02', 'Justice League', 'ueled by his restored faith in humanity and inspired by Superman\'s selfless act, Bruce Wayne enlists the help of his newfound ally, Diana Prince, to face an even greater enemy. Together, Batman and Wonder Woman work quickly to find and recruit a team of metahumans to stand against this newly awakened threat. But despite the formation of this unprecedented league of heroes-Batman, Wonder Woman, Aquaman, Cyborg and The Flash-it may already be too late to save the planet from an assault of catastrophic proportions.', '2017-12-01', '14:00:00', 'https://www.cgv.id/uploads/movie/compressed/MOV3355.jpg', 'https://www.youtube.com/embed/r9-DM9uBtVI'),
('0A99', 'Avengers: Infinity War', 'The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.', '2017-12-07', '21:00:00', 'http://www.gstatic.com/tv/thumb/movieposters/12863030/p12863030_p_v8_aa.jpg', 'https://www.youtube.com/embed/6ZfuNTqbHE8'),
('0B01', 'DEADPOOL', 'Deadpool adalah sebuah film pahlawan super Amerika yang berdasarkan pada karakter Marvel Comics dengan nama yang sama. Film tersebut merupakan instalmen kedelapan dalam serial film X-Men.', '2017-12-22', '15:30:00', 'http://t2.gstatic.com/images?q=tbn:ANd9GcTvrIHJfasS6poy34esN1O5hZonXaiqfEZb4WbnbAa9qJCIL8_9', 'https://www.youtube.com/embed/FyKWUTwSYAs'),
('0C01', 'Coco', 'Aspiring musician Miguel, confronted with his family\'s ancestral ban on music, enters the Land of the Dead to find his great-great-grandfather, a legendary singer.', '2017-12-07', '21:00:00', 'https://www.cgv.id/uploads/movie/compressed/MOV3403.jpg', 'https://www.youtube.com/embed/Ga6RYejo6Hk'),
('0S01', 'Star Wars: The Last Jedi', 'Rey (Daisy Ridley) akhirnya berhasil menemukan ksatria legendaris Jedi, Luke Skywalker (Mark Hamill) di sebuah pulau dengan aura magis. Para pahlawan dari The Force Awakens diantaranya Leia, Finn dan Poe bergabung dengan sang legenda dalam sebuah petualangan epik, yang membuka misteri kuno The Force dimasa lalu yang mengejutkan.', '2017-12-07', '21:00:00', 'http://t2.gstatic.com/images?q=tbn:ANd9GcRgcIU4MKHZkZNeDt_tAewyfwX7PAmSdj_7wdg_FInkZw8Um9F_', 'https://www.youtube.com/embed/Q0CbN8sfihY');

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
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1115;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_film`) REFERENCES `list_film` (`id_film`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`id`) REFERENCES `customer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
