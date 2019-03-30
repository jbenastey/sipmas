-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2019 at 09:33 PM
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
-- Table structure for table `sipmas_detail`
--

CREATE TABLE `sipmas_detail` (
  `detail_id` varchar(12) NOT NULL,
  `detail_permintaan_id` varchar(10) DEFAULT NULL,
  `detail_spt_id` varchar(10) DEFAULT NULL,
  `detail_nama` varchar(255) DEFAULT NULL,
  `detail_perkara` varchar(255) DEFAULT NULL,
  `detail_hukuman` varchar(255) DEFAULT NULL,
  `detail_ket` text,
  `detail_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipmas_detail`
--

INSERT INTO `sipmas_detail` (`detail_id`, `detail_permintaan_id`, `detail_spt_id`, `detail_nama`, `detail_perkara`, `detail_hukuman`, `detail_ket`, `detail_date_created`) VALUES
('SPD-336830', 'SP-33683', NULL, 'ujang', 'maling', '3tahun', 'asdas', '2019-03-23 16:34:43'),
('SPD-336831', 'SP-33683', NULL, 'jihad', 'hack nasa', '99 tahun', 'asdas', '2019-03-23 16:34:43'),
('SPD-336832', 'SP-33683', NULL, 'ryan', 'hack template', 'seumur hidup', 'asddas', '2019-03-23 16:34:43'),
('SPD-351110', 'SP-35111', NULL, 'joko', 'makan nasi', '1 bulan', 'assdas', '2019-03-24 20:45:11'),
('SPD-351111', 'SP-35111', NULL, 'ujang', 'tidur', '3 hari', 'asdsad', '2019-03-24 20:45:11'),
('SPD-620410', 'SP-62041', NULL, 'asdsda', 'asdas', 'asdsd', 'asdsad', '2019-03-24 00:27:21'),
('SPD-621010', 'SP-62101', NULL, 'asddsa', 'asds', 'asd', 'asdsad', '2019-03-24 00:28:21'),
('SPD-750040', 'SP-75004', NULL, 'jihad', 'jihad', 'jihad', 'jihad', '2019-03-23 00:16:44'),
('SPD-750041', 'SP-75004', NULL, 'ben', 'ben', 'ben', 'ben', '2019-03-23 00:16:44'),
('SPD-954140', 'SP-95414', 'SPT-35254', 'jihad', 'maling', '2 tahun', 'ok', '2019-03-25 13:30:14'),
('SPD-954141', 'SP-95414', 'SPT-35254', 'adi', 'maling', '2 tahun', 'ok', '2019-03-25 13:30:14');

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
('SP-75004', 'sadsa', '2019-03-04', 'tunggu', 'aktif', '2019-03-23 00:16:44'),
('SP-95414', '132132', '2019-03-12', 'setuju', 'aktif', '2019-03-25 13:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `sipmas_spt`
--

CREATE TABLE `sipmas_spt` (
  `spt_id` varchar(10) NOT NULL,
  `spt_no_surat` varchar(255) DEFAULT NULL,
  `spt_nama` varchar(255) DEFAULT NULL,
  `spt_nip` varchar(255) DEFAULT NULL,
  `spt_jabatan` varchar(255) DEFAULT NULL,
  `spt_berlaku` date NOT NULL,
  `spt_tanggal` date DEFAULT NULL,
  `spt_status_surat` enum('tunggu','setuju','tolak') NOT NULL,
  `spt_status` enum('aktif','nonaktif') NOT NULL,
  `spt_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipmas_spt`
--

INSERT INTO `sipmas_spt` (`spt_id`, `spt_no_surat`, `spt_nama`, `spt_nip`, `spt_jabatan`, `spt_berlaku`, `spt_tanggal`, `spt_status_surat`, `spt_status`, `spt_date_created`) VALUES
('SPT-35254', 'asdasd', 'asdasd', 'asdas', 'asdasd', '2019-03-22', '2019-03-16', 'tunggu', 'aktif', '2019-03-29 11:54:14');

-- --------------------------------------------------------

--
-- Table structure for table `sipmas_user`
--

CREATE TABLE `sipmas_user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(255) DEFAULT NULL,
  `user_nomor_hp` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_username` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_hak_akses` enum('umum','kepala','kasubsibka','kasubsibkd','pk') NOT NULL,
  `user_foto` text,
  `user_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipmas_user`
--

INSERT INTO `sipmas_user` (`user_id`, `user_nama`, `user_nomor_hp`, `user_email`, `user_username`, `user_password`, `user_hak_akses`, `user_foto`, `user_date_created`) VALUES
(1, 'nafsha', NULL, NULL, 'umum', 'c5940fe6a83fe80809b095a1824b9a75', 'umum', NULL, '2019-02-26 21:43:37'),
(2, 'ujang', NULL, NULL, 'kepala', '5fa4b8d4ef397a7b993104c484593363', 'kepala', NULL, '2019-03-12 10:25:40'),
(3, 'udin', '085355825959', 'udin@gmail.com', 'kasubsibka', 'a78bd7fca9172237a845b5a3fd4089f3', 'kasubsibka', NULL, '2019-03-12 10:25:40'),
(4, 'joko', NULL, NULL, 'kasubsibkd', '2d0d59a868e780654196320797ceb09a', 'kasubsibkd', NULL, '2019-03-12 10:28:01'),
(5, 'afdhal', NULL, NULL, 'pembimbing', '2becb4da99ccf44dd3264925e52a313c', 'pk', NULL, '2019-03-12 10:28:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sipmas_detail`
--
ALTER TABLE `sipmas_detail`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `permintaan_id` (`detail_permintaan_id`),
  ADD KEY `spt_id` (`detail_spt_id`);

--
-- Indexes for table `sipmas_permintaan`
--
ALTER TABLE `sipmas_permintaan`
  ADD PRIMARY KEY (`permintaan_id`);

--
-- Indexes for table `sipmas_spt`
--
ALTER TABLE `sipmas_spt`
  ADD PRIMARY KEY (`spt_id`);

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
-- Constraints for table `sipmas_detail`
--
ALTER TABLE `sipmas_detail`
  ADD CONSTRAINT `permintaan_id` FOREIGN KEY (`detail_permintaan_id`) REFERENCES `sipmas_permintaan` (`permintaan_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `spt_id` FOREIGN KEY (`detail_spt_id`) REFERENCES `sipmas_spt` (`spt_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
