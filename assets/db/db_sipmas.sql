-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2019 at 01:20 PM
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
-- Database: `db_sipmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `sipmas_permintaan`
--

CREATE TABLE `sipmas_permintaan` (
  `permintaan_id` varchar(10) NOT NULL,
  `permintaan_nomor` varchar(255) DEFAULT NULL,
  `permintaan_tanggal` date DEFAULT NULL,
  `permintaan_status_surat` enum('tunggu','setuju','tolak') NOT NULL DEFAULT 'tunggu',
  `permintaan_status` enum('aktif','nonaktif') NOT NULL DEFAULT 'aktif',
  `permintaan_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipmas_permintaan`
--

INSERT INTO `sipmas_permintaan` (`permintaan_id`, `permintaan_nomor`, `permintaan_tanggal`, `permintaan_status_surat`, `permintaan_status`, `permintaan_date_created`) VALUES
('SP-33683', '1321312312', '2019-03-20', 'setuju', 'aktif', '2019-03-23 16:34:43'),
('SP-35111', 'sadsax ', '2019-03-24', 'tunggu', 'aktif', '2019-03-24 20:45:11'),
('SP-62041', '1323', '2019-02-27', 'tolak', 'aktif', '2019-03-24 00:27:21'),
('SP-62101', 'asdas', '2019-03-04', 'tunggu', 'nonaktif', '2019-03-24 00:28:21'),
('SP-75004', 'sadsa', '2019-03-04', 'tunggu', 'aktif', '2019-03-23 00:16:44');

-- --------------------------------------------------------

--
-- Table structure for table `sipmas_permintaan_detail`
--

CREATE TABLE `sipmas_permintaan_detail` (
  `detail_id` varchar(12) NOT NULL,
  `detail_permintaan_id` varchar(10) DEFAULT NULL,
  `detail_nama` varchar(255) DEFAULT NULL,
  `detail_perkara` varchar(255) DEFAULT NULL,
  `detail_hukuman` varchar(255) DEFAULT NULL,
  `detail_ket` text,
  `detail_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipmas_permintaan_detail`
--

INSERT INTO `sipmas_permintaan_detail` (`detail_id`, `detail_permintaan_id`, `detail_nama`, `detail_perkara`, `detail_hukuman`, `detail_ket`, `detail_date_created`) VALUES
('SPD-336830', 'SP-33683', 'ujang', 'maling', '3tahun', 'asdas', '2019-03-23 16:34:43'),
('SPD-336831', 'SP-33683', 'jihad', 'hack nasa', '99 tahun', 'asdas', '2019-03-23 16:34:43'),
('SPD-336832', 'SP-33683', 'ryan', 'hack template', 'seumur hidup', 'asddas', '2019-03-23 16:34:43'),
('SPD-351110', 'SP-35111', 'joko', 'makan nasi', '1 bulan', 'assdas', '2019-03-24 20:45:11'),
('SPD-351111', 'SP-35111', 'ujang', 'tidur', '3 hari', 'asdsad', '2019-03-24 20:45:11'),
('SPD-620410', 'SP-62041', 'asdsda', 'asdas', 'asdsd', 'asdsad', '2019-03-24 00:27:21'),
('SPD-621010', 'SP-62101', 'asddsa', 'asds', 'asd', 'asdsad', '2019-03-24 00:28:21'),
('SPD-750040', 'SP-75004', 'jihad', 'jihad', 'jihad', 'jihad', '2019-03-23 00:16:44'),
('SPD-750041', 'SP-75004', 'ben', 'ben', 'ben', 'ben', '2019-03-23 00:16:44');

-- --------------------------------------------------------

--
-- Table structure for table `sipmas_user`
--

CREATE TABLE `sipmas_user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(255) DEFAULT NULL,
  `user_username` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_hak_akses` enum('umum','kepala','kasubsibka','kasubsibkd','pk') NOT NULL,
  `user_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipmas_user`
--

INSERT INTO `sipmas_user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_hak_akses`, `user_date_created`) VALUES
(1, 'nafsha', 'umum', 'c5940fe6a83fe80809b095a1824b9a75', 'umum', '2019-02-26 21:43:37'),
(2, 'ujang', 'kepala', '5fa4b8d4ef397a7b993104c484593363', 'kepala', '2019-03-12 10:25:40'),
(3, 'udin', 'kasubsibka', 'a78bd7fca9172237a845b5a3fd4089f3', 'kasubsibka', '2019-03-12 10:25:40'),
(4, 'joko', 'kasubsibkd', '2d0d59a868e780654196320797ceb09a', 'kasubsibkd', '2019-03-12 10:28:01'),
(5, 'afdhal', 'pembimbing', '2becb4da99ccf44dd3264925e52a313c', 'pk', '2019-03-12 10:28:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sipmas_permintaan`
--
ALTER TABLE `sipmas_permintaan`
  ADD PRIMARY KEY (`permintaan_id`);

--
-- Indexes for table `sipmas_permintaan_detail`
--
ALTER TABLE `sipmas_permintaan_detail`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `permintaan_id` (`detail_permintaan_id`);

--
-- Indexes for table `sipmas_user`
--
ALTER TABLE `sipmas_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sipmas_user`
--
ALTER TABLE `sipmas_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sipmas_permintaan_detail`
--
ALTER TABLE `sipmas_permintaan_detail`
  ADD CONSTRAINT `permintaan_id` FOREIGN KEY (`detail_permintaan_id`) REFERENCES `sipmas_permintaan` (`permintaan_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
