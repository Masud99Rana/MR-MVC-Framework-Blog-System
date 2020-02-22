-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 10:03 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `title`) VALUES
(1, 'Coding', 'Coding'),
(2, 'Education', ''),
(3, 'Health', ''),
(4, 'mairala', 'hey mairala');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `cat`) VALUES
(1, 'All about Coding Secret', '<p>FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content.  </p>\r\n<p>FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content.  </p>', 1),
(2, 'Education', '<p>FIrst post content. RanA FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content.  </p>\r\n<p>FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content.  </p>', 2),
(3, 'Health', '<p>FIrst post content. ssc FIrst post masud content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content.  </p>\r\n<p>FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content.  </p>', 3),
(4, 'mairala', '<p>FIrst post content. FIrst post content. FIrst post content. SSC FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content.  </p>\r\n<p>FIrst post content. ssc  FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content.  </p>', 4),
(5, 'mairala 5th', '<p>FIrst post content. FIrst post content. FIrst post content. rana FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content.  </p>\r\n<p>FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content.  </p>', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
