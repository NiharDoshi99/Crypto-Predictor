-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2020 at 11:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crypto`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `btc` int(3) DEFAULT NULL,
  `eth` int(3) DEFAULT 0,
  `email` varchar(50) DEFAULT NULL,
  `btcp` float NOT NULL,
  `ethp` float NOT NULL,
  `btcpbool` int(3) DEFAULT NULL,
  `ethpbool` int(3) DEFAULT NULL,
  `qty` double DEFAULT 0,
  `qtyeth` double DEFAULT 0,
  `xrp` double DEFAULT 0,
  `usdt` double DEFAULT 0,
  `bch` double DEFAULT 0,
  `ltc` double DEFAULT 0,
  `bnb` double DEFAULT 0,
  `xtz` double DEFAULT 0,
  `eos` double DEFAULT 0,
  `bsv` double DEFAULT 0,
  `xrpp` double DEFAULT 0,
  `ltcp` double DEFAULT 0,
  `bchp` double DEFAULT 0,
  `bsvp` double DEFAULT 0,
  `eosp` double DEFAULT 0,
  `xtzp` double DEFAULT 0,
  `bnbp` double DEFAULT 0,
  `usdtp` double DEFAULT 0,
  `xrpq` double DEFAULT 0,
  `ltcq` double DEFAULT 0,
  `bchq` double DEFAULT 0,
  `bsvq` double DEFAULT 0,
  `eosq` double DEFAULT 0,
  `xtzq` double DEFAULT 0,
  `bnbq` double DEFAULT 0,
  `usdtq` double DEFAULT 0,
  `xrpbool` int(3) DEFAULT 0,
  `bsvbool` int(3) DEFAULT 0,
  `bchbool` int(3) DEFAULT 0,
  `xtzbool` int(3) DEFAULT 0,
  `bnbbool` int(3) DEFAULT 0,
  `eosbool` int(3) DEFAULT 0,
  `usdtbool` int(3) DEFAULT 0,
  `ltcbool` int(3) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `firstname`, `lastname`, `btc`, `eth`, `email`, `btcp`, `ethp`, `btcpbool`, `ethpbool`, `qty`, `qtyeth`, `xrp`, `usdt`, `bch`, `ltc`, `bnb`, `xtz`, `eos`, `bsv`, `xrpp`, `ltcp`, `bchp`, `bsvp`, `eosp`, `xtzp`, `bnbp`, `usdtp`, `xrpq`, `ltcq`, `bchq`, `bsvq`, `eosq`, `xtzq`, `bnbq`, `usdtq`, `xrpbool`, `bsvbool`, `bchbool`, `xtzbool`, `bnbbool`, `eosbool`, `usdtbool`, `ltcbool`) VALUES
(1, 'harshsshah', '$2y$10$jb/xnxVM0/1dsvwATm736.IFe.7wUpZfF.mgOdl8htp5n.WxSfD7u', '2020-11-06 10:13:36', 'Harsh', 'Shah', 0, 0, 'harshsshah999@gmail.com', 14238.2, 51.23, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'hshah1', '$2y$10$h1Iq799GMxH9.V0f7dWyeuv2e3Vzz.9FTKlTQI0BlI4K3DjQWWtPK', '2020-11-06 15:56:55', 'Harsh', 'Shah', 0, 1, 'harshsshah1999@gmail.com', 10, 40, 1, 1, 3, 2, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 'hshah2', '$2y$10$pckQwXdwnusHaPRZEXDOY.YV.yFd.CG/7wwgVeMlMGSi9nlJgNVAK', '2020-11-12 12:40:58', 'Harsh', 'Shah', 1, 1, 'harshsshah1999@gmail.com', 10000, 400, 1, 1, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 0.2, 42, 300, 150, 33, 1, 12, 72, 2, 45, 3, 33, 1, 3, 1234, 12, 1, 1, 1, 1, 1, 1, 1, 1),
(16, 'hshah99', '$2y$10$11mBCf97BGz5xq55pNsBh.6kU004vDKCDg/ZhkJaph6XkJzoP7R0C', '2020-11-13 05:08:57', 'Harsh', 'Shah', 0, 1, 'harshsshah1999@gmail.com', 122, 0, 1, 0, 3, 0, 1, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 72, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
