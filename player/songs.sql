-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2019 at 10:21 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spotify`
--

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `artist` int(11) NOT NULL,
  `album` int(11) NOT NULL,
  `genre` int(11) NOT NULL,
  `duration` varchar(8) NOT NULL,
  `path` varchar(500) NOT NULL,
  `albumOrder` int(11) NOT NULL,
  `plays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `title`, `artist`, `album`, `genre`, `duration`, `path`, `albumOrder`, `plays`) VALUES
(12, 'Hello', 10, 11, 4, '4:55', 'assets/music/h.mp3', 1, 4),
(13, 'Sleeping Without you', 11, 12, 6, '3:07', 'assets/music/01.mp3', 0, 3),
(14, 'close Enough ', 11, 12, 6, '3:07', 'assets/music/02.mp3', 0, 2),
(15, 'Send My Love', 10, 11, 4, '3:43', 'assets/music/03.mp3', 0, 4),
(16, 'Lucky You', 12, 13, 1, '04:04', 'assets/music/04.mp3', 1, 2),
(17, 'In Case You Didn\'t Know', 11, 12, 6, '3:46', 'assets/music/05.mp3', 1, 3),
(18, 'When We Were Young', 10, 11, 4, '4:50', 'assets/music/06.mp3', 1, 3),
(19, 'Fall', 12, 13, 1, '3:36', 'assets/music/07.mp3', 1, 1),
(20, 'Beautiful Believer', 11, 12, 6, '3:34', 'assets/music/08.mp3', 1, 1),
(21, 'Mercy', 11, 12, 6, '3:34', 'assets/music/09.mp3', 1, 1),
(22, 'Venom', 12, 13, 1, '4:29', 'assets/music/10.mp3', 1, 1),
(23, '18', 9, 10, 4, '3:08', 'assets/music/11.mp3', 1, 2),
(24, 'Amnesia', 9, 10, 4, '3:57', 'assets/music/12.mp3', 1, 3),
(25, 'Heartbreak Girl', 9, 10, 4, '3:18', 'assets/music/13.mp3', 1, 2),
(26, 'Supermarket Flowers', 21, 21, 4, '3:41', 'assets/music/14.mp3', 1, 2),
(32, 'Black panther', 19, 19, 2, '2:10', 'assets/music/black/b1.mp3', 1, 2),
(33, 'All The Stars', 19, 19, 2, '3:52', 'assets/music/black/b2.mp3', 1, 2),
(34, 'King\'s Dead', 19, 19, 2, '3:45', 'assets/music/black/b3.mp3', 1, 2),
(35, 'Pary For Me', 19, 19, 2, '3:31', 'assets/music/black/b4.mp3', 1, 2),
(36, 'Dive', 21, 21, 4, '3:58', 'assets/music/ed/e1.mp3', 1, 1),
(37, 'Galway Girl', 21, 21, 4, '2:50', 'assets/music/ed/e3.mp3', 1, 1),
(38, 'Happier', 21, 21, 4, '3:27', 'assets/music/ed/e4.mp3', 1, 1),
(39, 'How Would You Feel (Paean)', 21, 21, 4, '4:40', 'assets/music/ed/e5.mp3', 1, 1),
(40, 'Mask Off', 14, 15, 2, '4:07', 'assets/music/fu/f1.mp3', 1, 2),
(44, 'Maybe It\'s Time', 16, 16, 4, '2:39', 'assets/music/lady/l2.mp3', 1, 1),
(45, 'La Vie en Rose', 16, 16, 4, '2:59', 'assets/music/lady/l1.mp3', 1, 1),
(46, 'Shallow', 16, 16, 4, '3:35', 'assets/music/lady/l3.mp3', 1, 2),
(47, 'Always Remember Us This Way', 16, 16, 4, '3:30', 'assets/music/lady/l4.mp3', 1, 1),
(48, '33. I\'ll Never Love Again (Film Version)', 16, 16, 4, '4:41', 'assets/music/lady/l5.mp3', 1, 1),
(49, 'Treat You Better', 20, 20, 4, '3:08', 'assets/music/shawn/s1.mp3', 1, 1),
(50, 'Lost In Japan', 20, 20, 4, '3:16', 'assets/music/shawn/s2.mp3', 1, 2),
(51, 'Mercy(Acoustic)', 20, 20, 4, '3:39', 'assets/music/shawn/s3.mp3', 1, 2),
(52, 'Mercy', 20, 20, 4, '3:28', 'assets/music/shawn/s4.mp3', 1, 2),
(53, 'No Promises', 20, 20, 4, '2:46', 'assets/music/shawn/s5.mp3', 1, 2),
(54, 'So Good', 18, 18, 4, '2:46', 'assets/music/ty/ty.mp3', 1, 2),
(55, 'Granddaddy\'s Cahir', 15, 22, 6, '3:48', 'assets/music/ka/k1.mp3', 1, 2),
(56, 'Heaven', 15, 22, 6, '2:57', 'assets/music/ka/k2.mp3', 1, 1),
(57, 'What Ifs', 15, 22, 6, '3:08', 'assets/music/ka/k2.mp3', 1, 1),
(58, 'Better Place', 15, 22, 6, '3:44', 'assets/music/ka/k4.mp3', 1, 1),
(59, 'Him & I', 13, 14, 4, '4:28', 'assets/music/eg/g1.mp3', 1, 4),
(60, 'Mama Always Told me', 13, 14, 1, '3:11', 'assets/music/eg/g2.mp3', 1, 6),
(61, 'Deja Vu feat. Justin Bieber', 17, 17, 2, '3:54', 'assets/music/po/p1.mp3', 1, 1),
(62, 'Congratulations feat. Quavo', 17, 17, 2, '3:40', 'assets/music/po/p2.mp3', 1, 1),
(63, 'Go Flex', 17, 17, 2, '2:59', 'assets/music/po/p3.mp3', 1, 2),
(64, 'I Fall Apart', 17, 17, 2, '3:43', 'assets/music/po/p4.mp3', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `album` (`album`),
  ADD KEY `genre` (`genre`),
  ADD KEY `artist` (`artist`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_ibfk_1` FOREIGN KEY (`album`) REFERENCES `albums` (`id`),
  ADD CONSTRAINT `songs_ibfk_2` FOREIGN KEY (`genre`) REFERENCES `genres` (`id`),
  ADD CONSTRAINT `songs_ibfk_3` FOREIGN KEY (`artist`) REFERENCES `artists` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
