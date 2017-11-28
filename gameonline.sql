-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 04:51 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `game_list`
--

CREATE TABLE `game_list` (
  `appid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game_list`
--

INSERT INTO `game_list` (`appid`, `name`, `img`, `price`) VALUES
(730, 'Counter-Strike: Global Offensive', 'http://cdn.akamai.steamstatic.com/steam/apps/730/header.jpg?t=1510682572', 7771900),
(124923, 'The Witcher 3: Wild Hunt - Game of the Year Edition', 'http://cdn.akamai.steamstatic.com/steam/subs/124923/header_ratio.jpg?t=1472603344', 17960000),
(252950, 'Rocket LeagueÂ®', 'http://cdn.akamai.steamstatic.com/steam/apps/252950/header.jpg?t=1507673535', 6799900),
(271590, 'Grand Theft Auto V', 'http://cdn.akamai.steamstatic.com/steam/apps/271590/header.jpg?t=1508529528', 27300000),
(346110, 'ARK: Survival Evolved', 'http://cdn.akamai.steamstatic.com/steam/apps/346110/header.jpg?t=1508277167', 19499900),
(359550, 'Tom Clancy\'s Rainbow SixÂ® Siege', 'http://cdn.akamai.steamstatic.com/steam/apps/359550/header.jpg?t=1511374661', 6500000),
(493340, 'Planet Coaster', 'http://cdn.akamai.steamstatic.com/steam/apps/493340/header.jpg?t=1511430289', 26194300),
(524220, 'NieR:Automataâ„¢', 'http://cdn.akamai.steamstatic.com/steam/apps/524220/header.jpg?t=1511792873', 47940000),
(578080, 'PLAYERUNKNOWN\'S BATTLEGROUNDS', 'http://cdn.akamai.steamstatic.com/steam/apps/578080/header.jpg?t=1506546810', 19999900),
(582160, 'Assassin\'s CreedÂ® Origins', 'http://cdn.akamai.steamstatic.com/steam/apps/582160/header.jpg?t=1511188980', 57187000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trans` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `appid` int(11) NOT NULL,
  `nim` int(10) NOT NULL,
  `jurusan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_trans`, `id`, `appid`, `nim`, `jurusan`) VALUES
(1, 2, 271590, 0, ''),
(2, 2, 271590, 1202140231, 'Sistem Informasi'),
(3, 2, 271590, 1202140231, 'Sistem Informasi'),
(4, 2, 271590, 1202140231, 'Sistem Informasi'),
(5, 2, 271590, 1202140231, 'Sistem Informasi'),
(6, 2, 578080, 1202140231, 'Sistem Informasi'),
(7, 2, 524220, 1202140231, 'Sistem Informasi'),
(8, 2, 578080, 1202140231, 'Sistem Informasi'),
(9, 2, 578080, 1202140231, 'Sistem Informasi'),
(10, 2, 730, 1202140231, 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` enum('','facebook','google','twitter') COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `locale`, `picture`, `link`, `created`, `modified`) VALUES
(1, 'facebook', '1832227446805507', 'Mindha', 'Ningrum', '', 'female', 'id_ID', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/18199496_1685326371495616_1649935463236303426_n.jpg?oh=31501d7b063a9f9dc4fa05a75695b7e5&oe=5A8DC3CE', 'https://www.facebook.com/app_scoped_user_id/1832227446805507/', '2017-09-06 05:53:57', '2017-11-16 06:23:40'),
(2, 'facebook', '1758382854173041', 'Raja', 'Gusri', 'rajagusri@yahoo.co.id', 'male', 'en_GB', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/18835765_1565326333478695_5983375808478842401_n.jpg?oh=d6e7ef3099cd8a82213151b122c19ee4&oe=5AA4D49A', 'https://www.facebook.com/app_scoped_user_id/1758382854173041/', '2017-11-21 17:10:46', '2017-11-28 16:51:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game_list`
--
ALTER TABLE `game_list`
  ADD PRIMARY KEY (`appid`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_trans`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_trans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
