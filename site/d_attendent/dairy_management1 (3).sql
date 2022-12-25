-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2022 at 06:04 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dairy_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `animal_id` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `animal_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`animal_id`, `user_id`, `animal_type`) VALUES
('10', 10, 'cow'),
('11', 10, 'buffalo'),
('12', 10, 'cow'),
('123', 3, 'Cow'),
('13', 11, 'buffalo'),
('14', 11, 'cow'),
('15', 11, 'buffalo'),
('16', 13, 'cow'),
('17', 13, 'buffalo'),
('18', 13, 'cow'),
('19', 14, 'buffalo'),
('20', 15, 'cow'),
('21', 15, 'buffalo'),
('22', 16, 'cow'),
('23', 16, 'buffalo'),
('24', 16, 'cow'),
('25', 18, 'buffalo'),
('26', 18, 'cow'),
('27', 18, 'buffalo'),
('28', 18, 'cow'),
('29', 19, 'buffalo'),
('3', 7, 'buffalo'),
('30', 19, 'buffalo'),
('31', 21, 'buffalo'),
('32', 21, 'buffalo'),
('33', 19, 'cow'),
('34', 19, 'cow'),
('35', 22, 'cow'),
('36', 22, 'cow'),
('37', 22, 'buffalo'),
('38', 23, 'buffalo'),
('39', 24, 'buffalo'),
('4', 7, 'cow'),
('40', 25, 'buffalo'),
('41', 24, 'cow'),
('42', 25, 'cow'),
('43', 23, 'cow'),
('44', 25, 'cow'),
('45', 27, 'buffalo'),
('46', 28, 'buffalo'),
('47', 29, 'buffalo'),
('48', 31, 'buffalo'),
('49', 27, 'cow'),
('5', 7, 'buffalo'),
('50', 28, 'cow'),
('51', 29, 'cow'),
('52', 31, 'cow'),
('53', 33, 'buffalo'),
('54', 34, 'buffalo'),
('55', 35, 'buffalo'),
('56', 36, 'buffalo'),
('57', 33, 'cow'),
('58', 34, 'cow'),
('59', 35, 'cow'),
('6', 7, 'cow'),
('60', 36, 'cow'),
('61', 36, 'buffalo'),
('62', 37, 'buffalo'),
('63', 39, 'buffalo'),
('64', 40, 'buffalo'),
('65', 37, 'cow'),
('66', 39, 'cow'),
('67', 40, 'cow'),
('68', 41, 'cow'),
('69', 41, 'buffalo'),
('7', 9, 'buffalo'),
('70', 43, 'buffalo'),
('71', 44, 'buffalo'),
('72', 46, 'buffalo'),
('73', 43, 'cow'),
('74', 44, 'cow'),
('75', 46, 'cow'),
('76', 47, 'cow'),
('77', 47, 'buffalo'),
('78', 48, 'buffalo'),
('79', 49, 'buffalo'),
('8', 9, 'cow'),
('80', 50, 'buffalo'),
('81', 48, 'cow'),
('82', 49, 'cow'),
('83', 50, 'cow'),
('84', 52, 'cow'),
('85', 52, 'buffalo'),
('86', 53, 'buffalo'),
('87', 54, 'buffalo'),
('88', 55, 'buffalo'),
('89', 52, 'cow'),
('9', 10, 'buffalo'),
('90', 53, 'cow'),
('91', 54, 'cow'),
('92', 55, 'cow');

-- --------------------------------------------------------

--
-- Table structure for table `dairy_owner`
--

CREATE TABLE `dairy_owner` (
  `dairy_id` varchar(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `dairy_name` varchar(20) NOT NULL,
  `dairy_type` varchar(20) NOT NULL,
  `gst_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dairy_owner`
--

INSERT INTO `dairy_owner` (`dairy_id`, `user_id`, `dairy_name`, `dairy_type`, `gst_no`) VALUES
('1', 2, 'Patel', 'Co-Operative', '123456'),
('11', 6, 'tje', 'Private', '123456789'),
('12', 5, 'kp', 'Co-Operative', '123456'),
('15', 30, 'bnehlso', 'Co-Operative', '65165696996'),
('18', 12, 'tspowa', 'Private', '5475656655'),
('21', 26, 'nthouma', 'Private', '81585656'),
('22', 20, 'dk', 'Private', '51696515967'),
('38', 38, 'colivetiw', 'Co-Operative', '525986969'),
('40', 45, 'dpottle13', 'Private', '57760666'),
('42', 42, 'sbrien', 'Private', '5696776070'),
('50', 51, 'hfechnie19', 'Co-Operative', '196707167'),
('8', 8, 'dclemmens', 'Co-Operative', '7659869569'),
('80', 17, 'idomeni', 'Co-Operative', '2549565'),
('9', 32, 'jcooni', 'Private', '567676');

-- --------------------------------------------------------

--
-- Table structure for table `dairy_user`
--

CREATE TABLE `dairy_user` (
  `user_id` int(11) NOT NULL,
  `dairy_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dairy_user`
--

INSERT INTO `dairy_user` (`user_id`, `dairy_id`) VALUES
(3, 1),
(7, 11),
(8, 8),
(13, 18),
(14, 18),
(15, 18),
(16, 18),
(18, 80),
(19, 80),
(20, 22),
(21, 22),
(22, 22),
(23, 22),
(24, 22),
(25, 22),
(27, 21),
(28, 21),
(29, 21),
(30, 15),
(31, 15),
(33, 9),
(34, 9),
(35, 9),
(36, 9),
(37, 9),
(39, 38),
(40, 38),
(41, 38),
(43, 42),
(44, 42),
(46, 40),
(47, 40),
(48, 40),
(49, 40),
(50, 40),
(52, 50),
(53, 50),
(54, 11),
(55, 8);

-- --------------------------------------------------------

--
-- Table structure for table `milk_collection`
--

CREATE TABLE `milk_collection` (
  `milk_id` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `dairy_id` varchar(20) DEFAULT NULL,
  `total_animal` int(10) DEFAULT NULL,
  `liter` int(10) NOT NULL,
  `fat` int(20) NOT NULL,
  `snf` int(11) NOT NULL,
  `protin` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `year` year(4) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `milk_collection`
--

INSERT INTO `milk_collection` (`milk_id`, `user_id`, `dairy_id`, `total_animal`, `liter`, `fat`, `snf`, `protin`, `date`, `year`) VALUES
(1, '5', '1', 5, 10, 9, 7, 7, '2022-07-28', 2022),
(2, '5', '12', 5, 11, 7, 7, 7, '2022-07-28', 2022),
(3, '6', '1', 5, 10, 9, 7, 7, '2022-07-26', 2022),
(4, '5', '1', 5, 15, 9, 7, 7, '2022-06-28', 2022),
(5, '6', '1', 5, 10, 9, 7, 7, '2022-06-26', 2022),
(6, '5', '1', 5, 20, 9, 7, 7, '2022-05-28', 2022),
(7, '6', '1', 5, 10, 9, 7, 7, '2022-05-20', 2022),
(8, '5', '1', 5, 5, 9, 7, 7, '2022-04-28', 2022),
(9, '6', '1', 5, 15, 9, 7, 7, '2022-04-08', 2022),
(10, '5', '1', 5, 9, 9, 7, 7, '2022-03-28', 2022),
(11, '6', '1', 5, 13, 9, 7, 7, '2022-03-02', 2022),
(12, '5', '1', 5, 10, 9, 7, 7, '2022-02-25', 2022);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(20) NOT NULL,
  `role` enum('Admin','dairy attendent','user') NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile_no` bigint(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `village` varchar(20) NOT NULL,
  `taluka` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `role`, `user_name`, `password`, `mobile_no`, `email`, `village`, `taluka`, `district`, `state`) VALUES
(1, 'Admin', 'kashyap', 'k123', 9874563211, 'k123@gmail.com', 'junagadh', 'junagadh ', 'junagadh ', 'Gujarat '),
(2, 'dairy attendent', 'k. patel', 'kd123', 7871123456, 'kd123@gmail.com', 'junagadh', 'Junagadh ', 'Rajkot', 'Gujarat '),
(3, 'user', 'kp', 'kp123', 7871123457, 'kp123@gmail.com', 'junagadh ', 'junagadh ', 'junagadh ', 'Gujarat '),
(4, 'dairy attendent', 'abcd', 'abcd', 123, 'abcd@gmail.com', 'junagadh ', 'junagadh ', 'junagadh ', 'Gujarat '),
(6, 'dairy attendent', 'john', 'john', 6376365836, 'john@gmail.com', 'puni', 'navsari', 'Navsari', 'Gujarat'),
(7, 'user', 'ejonah1', 'WkEExyF', 8907487618, 'asealey1@simplemachi', 'Puni', 'Navsari', 'Navsari', 'Gujarat'),
(8, 'dairy attendent', 'dclemmensen2', 'PBH4pLIXwl', 4837694438, 'jdagless2@google.es', 'Amari', 'Navsari', 'Navsari', 'Gujarat'),
(9, 'user', 'bwhitticks3', 'WKc1B5rkbL', 9480797038, 'shaseldine3@canalblo', 'Amari', 'Navsari', 'Navsari', 'Gujarat'),
(10, 'user', 'rgirardi4', 'lgWu9k11', 274149206, 'tfreda4@t.co', 'Dantej', 'Navsari', 'Navsari', 'Gujarat'),
(11, 'user', 'cdzeniskevich5', 't0VPZYTN', 8581222315, 'rgilhooley5@sphinn.c', 'Dantej', 'Navsari', 'Navsari', 'Gujarat'),
(12, 'dairy attendent', 'tspowage6', 'gyTFcPuwy', 1085133664, 'rmatelaitis6@w3.org', 'Bamroli', 'Bardoli', 'Surat', 'Gujarat'),
(13, 'user', 'jcurrington7', 'SI4Q8lr', 8238369894, 'dganter7@ustream.tv', 'Bamroli', 'Bardoli', 'Surat', 'Gujarat'),
(14, 'user', 'mscheffel8', '5hrlWx5', 6834402004, 'mhousin8@free.fr', 'Chikhli', 'Kamraj', 'Surat', 'Gujarat'),
(15, 'user', 'eleprovest9', 'KI9Lfxr', 4199560246, 'pmelliard9@dion.ne.j', 'Chikhli', 'Kamraj', 'Surat', 'Gujarat'),
(16, 'user', 'fgounarda', 'qMWJYik', 4227022096, 'bcowopea@mac.com', 'Chikhli', 'Kamraj', 'Surat', 'Gujarat'),
(17, 'dairy attendent', 'idomeniconeb', 'IpGz125Qo', 5966880530, 'awarnerb@twitter.com', 'Govat', 'Umarpada', 'Surat', 'Gujarat'),
(18, 'user', 'rbrunac', 'roeHqzB5hgJO', 1910240176, 'wfitzroyc@boston.com', 'Govat', 'Umarpada', 'Surat', 'Gujarat'),
(19, 'user', 'chidderleyd', 'N2Vtn9DSIw5', 8879762214, 'sskedd@dropbox.com', 'Govat', 'Umarpada', 'Surat', 'Gujarat'),
(20, 'dairy attendent', 'dkeatese', 'hrZwZv1LkU', 7403618432, 'nmcguirke@nifty.com', 'Avdha', 'Dharampur', 'Valsad', 'Gujarat'),
(21, 'user', 'spenrethf', 'AsKaHEm4p', 7597765339, 'cloudwellf@about.me', 'Avdha', 'Dharampur', 'Valsad', 'Gujarat'),
(22, 'user', 'dmccarrickg', '7p24Y3BNbptA', 7651016300, 'selcottg@wordpress.c', 'Avdha', 'Dharampur', 'Valsad', 'Gujarat'),
(23, 'user', 'mpriddish', 'mHGW2e17s2hf', 8737482459, 'ftitmussh@amazon.co.', 'Paria', 'Pardi', 'Valsad', 'Gujarat'),
(24, 'user', 'pivanini', 'X6IvxIRby', 4271614351, 'gsoffei@theatlantic.', 'Paria', 'Pardi', 'Valsad', 'Gujarat'),
(25, 'user', 'tdrillingcourtj', 'NTDzzEPeKO2', 5357609314, 'arayltonj@webnode.co', 'Paria', 'Pardi', 'Valsad', 'Gujarat'),
(26, 'dairy attendent', 'nthoumassonk', 'KMHvtlTJ', 310096200, 'aandresenk@technorat', 'Bujrel', 'Beawar tahsil', 'Ajmer', 'Rajasthan'),
(27, 'user', 'njagglil', 'fAkanz', 8869835979, 'dsmitherl@google.com', 'Bujrel', 'Beawar tahsil', 'Ajmer', 'Rajasthan'),
(28, 'user', 'jorrym', 'DTKPzY', 5627028327, 'eyeom@chron.com', 'Bujrel', 'Beawar tahsil', 'Ajmer', 'Rajasthan'),
(29, 'user', 'xpepin', 'dcm1o9', 8537357308, 'btorrisin@vimeo.com', 'Dewas', 'Masuda tahsil', 'Ajmer', 'Rajasthan'),
(30, 'dairy attendent', 'bnehlso', 'y0I6Qdh', 3947123175, 'llandricko@plala.or.', 'Dewas', 'Masuda tahsil', 'Ajmer', 'Rajasthan'),
(31, 'user', 'lzamudiop', 'no42HEgbz', 759534101, 'rgrgicp@cdbaby.com', 'Dewas', 'Masuda tahsil', 'Ajmer', 'Rajasthan'),
(32, 'dairy attendent', 'jcoonihanq', '8EUNgFZH', 8009330507, 'bheephyq@1und1.de', 'Gumel', 'Jaipur', 'Jaipur', 'Rajasthan'),
(33, 'user', 'dbrabbsr', 'Im9zG7YypE', 239734017, 'lgothardr@seesaa.net', 'Gumel', 'Jaipur', 'Jaipur', 'Rajasthan'),
(34, 'user', 'fpinnigers', '5jYR5mYuKQOP', 2695514212, 'rfranceys@marketwatc', 'Gumel', 'Jaipur', 'Jaipur', 'Rajasthan'),
(35, 'user', 'jodreaint', 'C6KQZ3fXdFON', 8499975429, 'sfortht@bloglines.co', 'Dhaloi', 'Sahpur', 'Jaipur', 'Rajasthan'),
(36, 'user', 'blittu', 'FZpU6i9UeV', 4761514132, 'dbillsonu@sitemeter.', 'Dhaloi', 'Sahpur', 'Jaipur', 'Rajasthan'),
(37, 'user', 'tcrosskellv', 'DmTsWAI5', 267115733, 'arichelv@google.de', 'Dhaloi', 'Sahpur', 'Jaipur', 'Rajasthan'),
(38, 'dairy attendent', 'colivetiw', '8g993uWv', 9493242056, 'mgrishkovw@t-online.', 'Agra', 'Hatod', 'Indore', 'MadhyaPradesh'),
(39, 'user', 'cshipwayx', 'Yuqyqziv47g', 95350470, 'epirdyx@ow.ly', 'Agra', 'Hatod', 'Indore', 'MadhyaPradesh'),
(40, 'user', 'twarrillowy', 'jZL2GMs282', 2407043529, 'pbramally@un.org', 'Agra', 'Hatod', 'Indore', 'MadhyaPradesh'),
(41, 'user', 'rlewintonz', '4bXUgO', 6622566259, 'cpeerz@salon.com', 'Agra', 'Hatod', 'Indore', 'MadhyaPradesh'),
(42, 'dairy attendent', 'sbrient10', '3j4oLTfgrx44', 7201748939, 'abarstowk10@redcross', 'Rajoda', 'Sawer', 'Indore', 'MadhyaPradesh'),
(43, 'user', 'chedau11', 'S72PmBQTvYs', 3236403950, 'cbales11@drupal.org', 'Rajoda', 'Sawer', 'Indore', 'MadhyaPradesh'),
(44, 'user', 'mamori12', 'tEm0UqxYWy', 9660512953, 'ehenderson12@china.c', 'Rajoda', 'Sawer', 'Indore', 'MadhyaPradesh'),
(45, 'dairy attendent', 'dpottle13', 'MrAKWYne28hS', 7210101179, 'kverson13@list-manag', 'Mahu', 'Nagda', 'Ujjain', 'MadhyaPradesh'),
(46, 'user', 'jpendrich14', 'bC2HFIF', 9061687128, 'ljeffrey14@ask.com', 'Mahu', 'Nagda', 'Ujjain', 'MadhyaPradesh'),
(47, 'user', 'ubagnall15', 'drhg3j', 1845777972, 'colivia15@tumblr.com', 'Mahu', 'Nagda', 'Ujjain', 'MadhyaPradesh'),
(48, 'user', 'ctorrese16', '4ho42RZNF', 3307160087, 'ctooher16@google.es', 'Rajia', 'Nagda', 'Ujjain', 'MadhyaPradesh'),
(49, 'user', 'mhlavecek17', 'jbPeahnzak', 6112950332, 'rwayvill17@go.com', 'Rajia', 'Nagda', 'Ujjain', 'MadhyaPradesh'),
(50, 'user', 'anewey18', 'PBV4PZEQHGP', 1271017687, 'kcosans18@dailymail.', 'Rajia', 'Nagda', 'Ujjain', 'MadhyaPradesh'),
(51, 'dairy attendent', 'hfechnie19', '2pmN0E8vwS', 5780614857, 'hmcenery19@zimbio.co', 'Jandia', 'Badnagar', 'Ujjain', 'MadhyaPradesh'),
(52, 'user', 'kwhyman1a', '4t42dC6UEFYk', 6731131040, 'twagge1a@answers.com', 'Jandia', 'Badnagar', 'Ujjain', 'MadhyaPradesh'),
(53, 'user', 'vmoorhead1b', 'MJCuMlpKnVNV', 638084148, 'sleighfield1b@blogge', 'Jandia', 'Badnagar', 'Ujjain', 'MadhyaPradesh'),
(54, 'user', 'elothlorien1c', 'WmPwlcKZIJHJ', 1935397311, 'mdannehl1c@csmonitor', 'Puni', 'Navsari', 'Navsari', 'Gujarat'),
(55, 'user', 'mbaldree1d', '4l6UuyI8', 6184219294, 'ladger1d@mozilla.com', 'Amari', 'Navsari', 'Navsari', 'Gujarat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`animal_id`);

--
-- Indexes for table `dairy_owner`
--
ALTER TABLE `dairy_owner`
  ADD PRIMARY KEY (`dairy_id`);

--
-- Indexes for table `dairy_user`
--
ALTER TABLE `dairy_user`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `milk_collection`
--
ALTER TABLE `milk_collection`
  ADD PRIMARY KEY (`milk_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `milk_collection`
--
ALTER TABLE `milk_collection`
  MODIFY `milk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dairy_user`
--
ALTER TABLE `dairy_user`
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
