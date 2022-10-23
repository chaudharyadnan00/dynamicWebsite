-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2022 at 06:45 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dynamicwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `serial` int(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`serial`, `id`, `type`, `value`, `others`) VALUES
(4, 'B5ViFjqEyT', 'slideshowImage', 'pexels-steve-johnson-1266808.jpg', ''),
(5, 'GVQmMNYOn9', 'slideshowImage', 'pexels-vlad-alexandru-popa-1402787.jpg', ''),
(6, 'mZ5rdPbQgB', 'slideshowImage', 'pexels-pixabay-38537.jpg', ''),
(7, 'sO6kzJ5QCq', 'slideshowImage', 'pexels-pixabay-45911.jpg', ''),
(8, '87DDeSyLaa', 'slideshowImage', 'pexels-irina-iriser-1379636.jpg', ''),
(9, 'Z8UFeP1XT2', 'slideshowImage', 'pexels-pixabay-459203.jpg', ''),
(11, 'fRa3yBP0OO', 'slideshowImage', 'pexels-julius-silver-753626.jpg', ''),
(12, 'CeLVyQMM9b', 'slideshowImage', '203-2031629_fifa-wallpaper-full-hd.jpg', ''),
(13, 'DqzSWEKcLp', 'slideshowImage', 'pexels-mike-b-145685.jpg', ''),
(15, 'PyFvX8D1C2', 'slideshowImage', 'wallpaperflare.com_wallpaper.jpg', ''),
(17, 'Gd6qYKV5bt', 'slideshowImage', 'pexels-eberhard-grossgasteiger-443446.jpg', ''),
(18, 'Bh8l6249ov', 'slideshowImage', 'pexels-pixabay-207088.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `serial` int(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`serial`, `id`, `name`, `about`, `image`, `others`) VALUES
(2, 'aVpgCjbOVw', 'Kundan Yadav', 'Consult not your fears but your hopes and your dreams. Think not about your frustrations, but about your unfulfilled potential. Concern yourself not with what you tried and failed in, but with what it is still possible for you to do.', 'pexels-pixabay-220453.jpg', 'aboutUsMembers'),
(3, 'ztCUWnKdtC', 'Adnan Chaudhary', 'SoftwareDeveloper', 'pexels-stefan-stefancik-91227.jpg', 'aboutUsMembers');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`serial`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`serial`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `serial` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `serial` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
