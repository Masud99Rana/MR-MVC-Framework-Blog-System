-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2018 at 05:04 PM
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
(2, 'education', 'edu'),
(3, 'heal', 'heal'),
(6, 'mmm aa', 'mmm aa');

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
(5, 'mairala 5th', '<p>FIrst post content. FIrst post content. FIrst post content. rana FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content.  </p>\r\n<p>FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content.  </p>', 4),
(6, 'All about Coding Secret', '<p>FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content.  </p>\r\n<p>FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content.  </p>', 1),
(7, 'Education', '<p>FIrst post content. RanA FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content.  </p>\r\n<p>FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content.  </p>', 2),
(8, 'Health', '<p>FIrst post content. ssc FIrst post masud content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content.  </p>\r\n<p>FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content.  </p>', 3),
(9, 'mairala', '<p>FIrst post content. FIrst post content. FIrst post content. SSC FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content.  </p>\r\n<p>FIrst post content. ssc  FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content.  </p>', 4),
(10, 'All about Coding Secret', '<p>FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content.  </p>\r\n<p>FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content.  </p>', 1),
(11, 'Education', '<p>FIrst post content. RanA FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content.  </p>\r\n<p>FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content. FIrst post content.  </p>', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ui`
--

CREATE TABLE `tbl_ui` (
  `id` int(11) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ui`
--

INSERT INTO `tbl_ui` (`id`, `color`) VALUES
(1, '#ffff80');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` varchar(30) DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1'),
(2, 'masud', '266742ad7c319c03dac609047486ddcc', '1'),
(3, 'author', '02bd92faa38aaa6cc0ea75e59937a1ef', '2');

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
-- Indexes for table `tbl_ui`
--
ALTER TABLE `tbl_ui`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_ui`
--
ALTER TABLE `tbl_ui`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
