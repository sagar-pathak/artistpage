-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2016 at 02:10 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artistdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE IF NOT EXISTS `tbl_about` (
  `uid` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `backgroundimageurl` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`uid`, `firstname`, `middlename`, `lastname`, `email`, `address`, `backgroundimageurl`, `description`) VALUES
(1, 'Firstname', '', 'Lastname', 'testing@gmail.com', 'Anamnagar, Kathmandu', 'http://localhost/WebProjects/artist/assets/images/about-sidebar.png', 'TGFtYm9yZ2hpbmkgTWVyY3ksIFlvdXIgY2hpY2sgc2hlIHNvIHRoaXJzdHksIEknbSBpbiB0aGF0IHR3byBzZWF0IExhbWJvLg==');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_latestvideos`
--

CREATE TABLE IF NOT EXISTS `tbl_latestvideos` (
  `vid` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `url` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_latestvideos`
--

INSERT INTO `tbl_latestvideos` (`vid`, `title`, `url`) VALUES
(1, 'Selena GÃ³mez -Love You Like A Love Song', 'https://www.youtube.com/watch?v=tnurLu_DbMM'),
(2, 'FROZEN - Let It Go Sing-along', 'https://www.youtube.com/watch?v=L0MK7qz13bU'),
(3, 'Monkey Temple - Socheko', 'https://www.youtube.com/watch?v=rV1glW9cSAs');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `u_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `sessionid` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`u_id`, `username`, `password`, `sessionid`) VALUES
(1, 'admin', 'testing', '57e8e2341ea00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE IF NOT EXISTS `tbl_news` (
  `newsid` int(11) NOT NULL,
  `title_en` varchar(1000) NOT NULL,
  `title_ne` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`newsid`, `title_en`, `title_ne`, `url`) VALUES
(1, 'ZXN0', 'dGVzdA==', 'c3Q='),
(2, '', '', ''),
(3, '', '', ''),
(4, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_socialnetwork`
--

CREATE TABLE IF NOT EXISTS `tbl_socialnetwork` (
  `sid` int(11) NOT NULL,
  `twitter` varchar(500) NOT NULL,
  `facebook` varchar(500) NOT NULL,
  `youtube` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_socialnetwork`
--

INSERT INTO `tbl_socialnetwork` (`sid`, `twitter`, `facebook`, `youtube`) VALUES
(1, 'twitter', 'facebook', 'youtube');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_videos`
--

CREATE TABLE IF NOT EXISTS `tbl_videos` (
  `vid` int(11) NOT NULL,
  `url` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_videos`
--

INSERT INTO `tbl_videos` (`vid`, `url`, `title`, `description`) VALUES
(11, 'K4nbSXh95OI', 'TEFNQSBMQSB8IE5ldyBOZXBhbGkgTW92aWUgT2ZmaWNpYWwgVHJhaWxlcg==', 'QXZlbnVlcyBQaWN0dXJlcy9BbmFuYXlhIENpbmVtYWtlcnMgJiBQQ0ZJKFVTQSkgUHJlc2VudGEgdGhlIE5ldyBVcGNvbWluZyBOZXBhbGkgTW92aWUgIkxBTUEgTEEiIE9mZmljaWFsIFRyYWlsZXIgb25seSBvbiBNdXNpYyBOZXBhbCBvZmZpY2lhbCBZb3VUdWJlIGNoYW5uZWwu'),
(12, '251JbJ660Bk', 'T25lIFdheSBNb3ZpZSBUcmFpbGVy', 'cGxlYXNlIG1ha2VyICB0aGlzIHR5cGVzIG9mIG1vdmllcyBuZWVkIG1vcmUgcHJvbW90aW9uIGxpa2Uga2FsbyBwb3RoaSB0aGV5IGFyZSB2ZXJ5IGNsZXZlciAgLiBJIGhvcGUgeW91IGd1eXMgd2lsbCBkbyBpdC4gYWxyZWFkeSBmYWxsIGluIGxvdmUgd2l0aCB0cmFpbGVyIC4u77u/');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_videoslider`
--

CREATE TABLE IF NOT EXISTS `tbl_videoslider` (
  `video_slider_id` int(11) NOT NULL,
  `video_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_videoslider`
--

INSERT INTO `tbl_videoslider` (`video_slider_id`, `video_url`) VALUES
(1, 'j1q4-tzMI28'),
(2, 'WqoV-xzNtqM'),
(3, 'euymzHMTsbc'),
(4, 'VGfI8Cs83SI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_videos`
--
ALTER TABLE `tbl_videos`
  ADD PRIMARY KEY (`vid`);

--
-- Indexes for table `tbl_videoslider`
--
ALTER TABLE `tbl_videoslider`
  ADD PRIMARY KEY (`video_slider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_videos`
--
ALTER TABLE `tbl_videos`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
