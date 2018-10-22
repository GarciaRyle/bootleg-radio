-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2018 at 09:36 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bootleg_radio`
--

-- --------------------------------------------------------

--
-- Table structure for table `bands`
--

CREATE TABLE `bands` (
  `band_id` int(255) UNSIGNED NOT NULL,
  `band_name` varchar(50) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` binary(1) DEFAULT NULL,
  `band_image` varchar(255) DEFAULT NULL,
  `band_details` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bands`
--

INSERT INTO `bands` (`band_id`, `band_name`, `date_created`, `date_updated`, `status`, `band_image`, `band_details`) VALUES
(1, 'NoZvWN9EIl', '2018-09-12 19:59:56', '2018-09-12 19:59:56', 0x31, 'fitkLhgdqQkeI61Ii7yV', 'qSflHU6eCqDKqGyH8yxIp7rXhVPJsI'),
(2, '83jHD6z4Va', '2018-09-12 21:56:08', '2018-09-12 21:56:08', 0x31, 'MPYmhgdEkprAtIJ3u2lI', 'vkSJ9EBdWKa0ptzgxbM1UTEwbhR5Os'),
(3, '376VlV5LnG', '2018-09-12 21:57:04', '2018-09-12 21:57:04', 0x31, 'nBAf5QrmPNcZpUwO7E8h', 'hSKFQnhNRlO7wifFg8LpnTEgEhUy8z'),
(4, '8IsdmBsmo4', '2018-09-12 22:11:33', '2018-09-12 22:11:33', 0x31, 'oEunMWL6mm6tjy4AJFdJ', 'eo9ZXww8i173x1iksHlKtGu9i7Vxhk'),
(5, '5e8kTQ5mEw', '2018-09-12 23:06:20', '2018-09-12 23:06:20', 0x31, 'mrthFQ9OPBvAgprvDTuS', 'NZw4welrgRdEt9GeVG5zTytJMydIPH'),
(6, '8Z1T2y36R0', '2018-09-12 23:07:32', '2018-09-12 23:07:32', 0x31, 'QDBQFykJiJOgLllzFSCh', 'vVVpJf11OvNCvoM1Y1gK3FNCLp9H4C'),
(7, 'oAQXcAocQ4', '2018-09-12 23:09:41', '2018-09-12 23:09:41', 0x31, 'x3bdhi55GPCtGYK3iXzT', 'xvU2HUyRudC927u1Xl942MyfQVxjL2');

-- --------------------------------------------------------

--
-- Table structure for table `gigs`
--

CREATE TABLE `gigs` (
  `gig_id` int(255) NOT NULL,
  `gig_detail_id` int(255) DEFAULT NULL,
  `band_id` int(255) DEFAULT NULL,
  `date_and_time` datetime DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gigs`
--

INSERT INTO `gigs` (`gig_id`, `gig_detail_id`, `band_id`, `date_and_time`, `date_created`, `date_updated`) VALUES
(1, 225, 64, '2009-12-29 15:23:34', '2018-09-12 22:11:34', '2018-09-12 22:11:34'),
(2, 42, 17, '2010-01-01 02:00:18', '2018-09-12 23:06:21', '2018-09-12 23:06:21'),
(3, 84, 65, '2009-12-29 22:56:17', '2018-09-12 23:07:33', '2018-09-12 23:07:33'),
(4, 87, 65, '2009-12-29 19:25:36', '2018-09-12 23:09:41', '2018-09-12 23:09:41');

-- --------------------------------------------------------

--
-- Table structure for table `gigs_details`
--

CREATE TABLE `gigs_details` (
  `gig_detail_id` int(255) UNSIGNED NOT NULL,
  `gig_name` varchar(50) DEFAULT NULL,
  `gig_type` varchar(10) DEFAULT NULL,
  `venue` varchar(200) DEFAULT NULL,
  `gig_info` varchar(255) DEFAULT NULL,
  `date_and_time` datetime DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `gig_sponsors` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gigs_details`
--

INSERT INTO `gigs_details` (`gig_detail_id`, `gig_name`, `gig_type`, `venue`, `gig_info`, `date_and_time`, `date_created`, `date_updated`, `gig_sponsors`) VALUES
(1, 'ELJY0iaYWl', 'Mii0g7C4VC', 'fg5MNQPNXJqGQaUPJHd1', 'btmwJZgUlQp0zVApkkuB', '2010-01-02 03:18:37', '2018-09-12 23:06:21', '2018-09-12 23:06:21', 'JtOoU7mJdw'),
(2, 'BANQ8aA8ng', 'chGZeF6uQF', 'GkTCGHHA9FHknRXCCiK8', 'WM7CSC3lRdkNxSA6j1bZ', '2010-01-03 18:17:03', '2018-09-12 23:07:33', '2018-09-12 23:07:33', 'z773P2BMnn'),
(3, 'ORBQYC7g69', '4wQPmcMlt6', 'nrfiIW9n1GUEGhVvsZT1', 'LJ5qd0EtjXrSOiypwcz0', '2010-01-02 12:29:01', '2018-09-12 23:09:42', '2018-09-12 23:09:42', 'ttGsQyW680');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(255) UNSIGNED NOT NULL,
  `member_name` varchar(50) DEFAULT NULL,
  `band_id` int(255) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` binary(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `member_name`, `band_id`, `date_created`, `date_updated`, `status`) VALUES
(1, '5qbItD7lS1', 19, '2018-09-12 21:57:04', '2018-09-12 21:57:04', 0x31),
(2, 'L1uoqYI6We', 67, '2018-09-12 22:11:33', '2018-09-12 22:11:33', 0x31),
(3, 'ZDaaus1O2N', 83, '2018-09-12 23:06:21', '2018-09-12 23:06:21', 0x30),
(4, 'ZEe2sPCIkC', 76, '2018-09-12 23:07:33', '2018-09-12 23:07:33', 0x31),
(5, 'LCY8tN37Bd', 77, '2018-09-12 23:09:41', '2018-09-12 23:09:41', 0x30);

-- --------------------------------------------------------

--
-- Table structure for table `member_details`
--

CREATE TABLE `member_details` (
  `member_detail_id` int(255) UNSIGNED NOT NULL,
  `member_id` int(255) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `middle_name` varchar(20) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `member_image` varchar(255) DEFAULT NULL,
  `member_bio` varchar(255) DEFAULT NULL,
  `deathdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `record_id` int(255) UNSIGNED NOT NULL,
  `record_name` varchar(50) DEFAULT NULL,
  `band_id` int(255) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `record_type` varchar(10) DEFAULT NULL,
  `record_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`record_id`, `record_name`, `band_id`, `date_created`, `date_updated`, `record_type`, `record_image`) VALUES
(1, '32', 37, '2018-09-12 23:06:21', '2018-09-12 23:06:21', '0n07g', '7coLTbXTENvh9BavkPnh'),
(2, '106', 55, '2018-09-12 23:07:33', '2018-09-12 23:07:33', 'Y80Jl', '3KqbjVdHvAabv5QCM9ps'),
(3, '46', 24, '2018-09-12 23:09:42', '2018-09-12 23:09:42', 'Ebd7Z', 'SzwTTzxKLJJxkFyY5pkY');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `song_id` int(255) NOT NULL,
  `song_name` varchar(50) DEFAULT NULL,
  `record_id` int(255) DEFAULT NULL,
  `lyrics` varchar(512) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `upload` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`song_id`, `song_name`, `record_id`, `lyrics`, `date_created`, `upload`) VALUES
(1, 'yT7T1f3c3s', 76, 'HDCv7P5oQCAoxlCvlwsJgnuUvclF6Ne6W4TUhA4bDfqAMNcZ5Ek9o6fKlded9BesopQ9FOklQq4ZBhIKzeUbOzELwxEKtBb9aYCY', '2018-09-12 23:09:42', '2009-09-10 07:32:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bands`
--
ALTER TABLE `bands`
  ADD PRIMARY KEY (`band_id`);

--
-- Indexes for table `gigs`
--
ALTER TABLE `gigs`
  ADD PRIMARY KEY (`gig_id`);

--
-- Indexes for table `gigs_details`
--
ALTER TABLE `gigs_details`
  ADD PRIMARY KEY (`gig_detail_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `member_details`
--
ALTER TABLE `member_details`
  ADD PRIMARY KEY (`member_detail_id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`song_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bands`
--
ALTER TABLE `bands`
  MODIFY `band_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gigs`
--
ALTER TABLE `gigs`
  MODIFY `gig_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gigs_details`
--
ALTER TABLE `gigs_details`
  MODIFY `gig_detail_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member_details`
--
ALTER TABLE `member_details`
  MODIFY `member_detail_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `record_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `song_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
