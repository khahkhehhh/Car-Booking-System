-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2023 at 10:35 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_booking`
--

CREATE TABLE `tb_booking` (
  `b_id` int(11) NOT NULL,
  `b_customer` varchar(15) NOT NULL,
  `b_vehicle` varchar(10) NOT NULL,
  `b_pdate` date NOT NULL,
  `b_rdate` date NOT NULL,
  `b_total` float NOT NULL,
  `b_status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_booking`
--

INSERT INTO `tb_booking` (`b_id`, `b_customer`, `b_vehicle`, `b_pdate`, `b_rdate`, `b_total`, `b_status`) VALUES
(23, 'aaaaa', 'MCC3333', '2023-02-15', '2023-02-19', 1600, 1),
(24, '009900990099', 'QZZ6666', '2023-02-03', '2023-02-05', 440, 1),
(25, '009900990099', 'MCC3333', '2023-02-24', '2023-02-26', 800, 3),
(26, '1122334455', 'JVM1111', '2023-02-28', '2023-03-03', 990, 3),
(27, '1234', 'JVM1111', '2023-02-27', '2023-03-03', 1320, 1),
(35, 'aaaaa', 'WMR8899', '2023-02-03', '2023-02-04', 550, 1),
(36, 'aaaaa', 'JKK1112', '2023-02-03', '2023-02-04', 450, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `s_id` int(5) NOT NULL,
  `s_desc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`s_id`, `s_desc`) VALUES
(1, 'Received'),
(2, 'Approved'),
(3, 'Rejected'),
(4, 'Cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `u_id` varchar(15) NOT NULL,
  `u_pwd` varchar(50) NOT NULL,
  `u_name` varchar(200) NOT NULL,
  `u_address` varchar(200) DEFAULT NULL,
  `u_phone` varchar(20) NOT NULL,
  `u_lno` varchar(20) NOT NULL,
  `u_type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`u_id`, `u_pwd`, `u_name`, `u_address`, `u_phone`, `u_lno`, `u_type`) VALUES
('009900990099', 'wow', 'Lee Tim', 'kluang, johor', '0190909090', 'ABC', '2'),
('020521040123', 'admin123', 'Fong Khah Kheh', 'Pulai, Johor Bahru', '0186947683', 'L008', '1'),
('020527', '$2y$10$pV6lB4CwRW8GCVX7CH5f7uEiyFZrFCm3GI6zjTF8SmE', 'Jenn', 'Kuala Lumpur', '019457463', 'A0037', '2'),
('0777123445', 'nct127', 'Kiki', 'Setiawan, Perak', '0125678931', 'A23', '2'),
('084455667788', '666666', 'wanyinyin', 'Penang', '01755667788', 'A22', '2'),
('0909', '999', 'Kiki', 'kluang', '0187751111', '7890', '2'),
('1122334455', 'nctdream', 'JooJoo', 'Sungai Petani, Kedah', '018683265', 'A11', '2'),
('1234', '12213', 'tutakamon', '', '11111', '11111', '1'),
('700707077700', '123456', 'Mocha Lim', 'Seoul, Korea', '0187788778', 'L006', '2'),
('800808080088', '123456', 'Mark Lee', 'Puchong, Selangor', '0110011001', 'L002', '2'),
('900909099090', '123456', 'Ali Ahmad', 'Johor Bahru, Johor', '0199999999', 'L001', '1'),
('aaaaa', 'aaa', 'aaaa', 'jakarta', 'aaaa', 'aaaa', '2'),
('kk', 'kk', 'Jelly', 'kluang', '0187759060', '99999', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_usertype`
--

CREATE TABLE `tb_usertype` (
  `ut_id` varchar(5) NOT NULL,
  `ut_desc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_usertype`
--

INSERT INTO `tb_usertype` (`ut_id`, `ut_desc`) VALUES
('1', 'Admin'),
('2', 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `tb_vehicle`
--

CREATE TABLE `tb_vehicle` (
  `v_reg` varchar(10) NOT NULL,
  `v_type` varchar(20) NOT NULL,
  `v_model` varchar(20) NOT NULL,
  `v_year` varchar(10) DEFAULT NULL,
  `v_price` float NOT NULL,
  `v_pic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_vehicle`
--

INSERT INTO `tb_vehicle` (`v_reg`, `v_type`, `v_model`, `v_year`, `v_price`, `v_pic`) VALUES
('JKK1112', 'SUV', 'Jaguar', '2020', 450, 'jaguar.png'),
('JVM1111', 'SUV', 'Proton X70 MC2', '2022', 330, 'protonx70.jpg'),
('JVM9977', 'Sport Car', 'Porsche', '2023', 850, 'porsche.png'),
('MCC3333', 'MPV', 'Toyota Vellfire', '2020', 400, 'toyotavellfire.webp'),
('QZZ6666', 'MPV', 'Perodua Alza', '2019', 220, 'peroduaalza.webp'),
('WMR8899', 'SUV', 'Tesla Model X', '2020', 550, 'teslamodelx.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `b_customer` (`b_customer`,`b_vehicle`),
  ADD KEY `b_status` (`b_status`),
  ADD KEY `b_vehicle` (`b_vehicle`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `u_type` (`u_type`);

--
-- Indexes for table `tb_usertype`
--
ALTER TABLE `tb_usertype`
  ADD PRIMARY KEY (`ut_id`);

--
-- Indexes for table `tb_vehicle`
--
ALTER TABLE `tb_vehicle`
  ADD PRIMARY KEY (`v_reg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_booking`
--
ALTER TABLE `tb_booking`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD CONSTRAINT `tb_booking_ibfk_1` FOREIGN KEY (`b_customer`) REFERENCES `tb_user` (`u_id`),
  ADD CONSTRAINT `tb_booking_ibfk_3` FOREIGN KEY (`b_status`) REFERENCES `tb_status` (`s_id`),
  ADD CONSTRAINT `tb_booking_ibfk_4` FOREIGN KEY (`b_vehicle`) REFERENCES `tb_vehicle` (`v_reg`);

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`u_type`) REFERENCES `tb_usertype` (`ut_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
