-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 Nov 2017 pada 17.36
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `game_list`
--

CREATE TABLE `game_list` (
  `appid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `game_list`
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
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trans` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `appid` int(11) NOT NULL,
  `nim` int(10) NOT NULL,
  `jurusan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_trans`, `id`, `appid`, `nim`, `jurusan`) VALUES
(1, 2, 524220, 1202144099, 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `locale`, `picture`, `link`, `created`, `modified`) VALUES
(2, 'facebook', '1832227446805507', 'Mindha', 'Ningrum', '', 'female', 'id_ID', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/18199496_1685326371495616_1649935463236303426_n.jpg?oh=31501d7b063a9f9dc4fa05a75695b7e5&oe=5A8DC3CE', 'https://www.facebook.com/app_scoped_user_id/1832227446805507/', '2017-11-21 07:19:51', '2017-11-28 17:28:39'),
(3, 'facebook', '1893657647315773', 'Prasetyo', 'Rizki Nugroho', 'prnprn02@gmail.com', 'male', 'en_GB', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/21270886_1815643608450511_7491636751478574400_n.jpg?oh=a01788705c1ff7ddc5972a1e97e3f2f2&oe=5A979994', 'https://www.facebook.com/app_scoped_user_id/1893657647315773/', '2017-11-21 07:20:36', '2017-11-21 07:20:37'),
(4, 'facebook', '1758382854173041', 'Raja', 'Gusri', 'rajagusri@yahoo.co.id', 'male', 'en_GB', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/18835765_1565326333478695_5983375808478842401_n.jpg?oh=d6e7ef3099cd8a82213151b122c19ee4&oe=5AA4D49A', 'https://www.facebook.com/app_scoped_user_id/1758382854173041/', '2017-11-21 07:27:59', '2017-11-21 08:26:05'),
(5, 'facebook', '1871959792833022', 'Fadhil', 'Pratama', 'pfadhil46@yahoo.com', 'male', 'id_ID', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/22281729_1824674174228251_1663386625628013881_n.jpg?oh=16318e4f8bcedb48fbf47e72afb5835c&oe=5A929B63', 'https://www.facebook.com/app_scoped_user_id/1871959792833022/', '2017-11-21 08:54:01', '2017-11-22 02:37:12');

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
  ADD PRIMARY KEY (`id_trans`),
  ADD KEY `id` (`id`),
  ADD KEY `appid` (`appid`);

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
  MODIFY `id_trans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`appid`) REFERENCES `game_list` (`appid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
