-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2024 at 11:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sherlocked`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `pwd`) VALUES
('admin', '119633b5268106292762b219283af849');

-- --------------------------------------------------------

--
-- Table structure for table `hints`
--

CREATE TABLE `hints` (
  `_id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `hint_number` int(11) NOT NULL,
  `hint_value` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `_id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`_id`, `level`, `answer`) VALUES
(1, 1, '3a87a63c3850d909ede9ffa1f9d2eba5'),
(2, 2, '3565b1130bc27e917e52da75aaf6900b'),
(3, 3, '4e49e2a73396b7c2972ec8a5786ea581'),
(4, 4, '5658a5cff5ce1c598ca5f6ea19e9aed8'),
(5, 5, 'decf582d1f467de6936d1076bb69c10b'),
(6, 6, '3ee41d08ae049e7b77bea71bc83dd491'),
(7, 7, '744762ef63a593b0f1997cb7aef84227'),
(8, 8, 'e6a7130b80d82c439b42321b8d31094f'),
(9, 9, '83b1a588059ff7e208fd752e32c01555'),
(10, 10, '70e16cb8caae41a5209d692b5078e0b0'),
(11, 11, '1d5980866fbd47700a57b8090ed8addc'),
(12, 12, '8130f34fb2e0ba9d2817f604036a3000'),
(13, 13, '7ece6c6844cfc5cb2845b09ca51181b6'),
(14, 14, 'ef2ca1dd8e8c1ecaaa6310afcf2a9478'),
(15, 15, '2323d84d9324cd7b5e265edcba06a8b4'),
(16, 16, 'ce922d89a6c244fb0c5aff66bc46e9be'),
(17, 17, '9f92f765187a62fe13041020cc7c2d5a'),
(18, 18, 'a59912bf1e71741975d372f4de71bbb1'),
(19, 19, '2396972be75d13b0ade09d7fdedbe9ae'),
(20, 20, 'ca2f51859cd21b4eb5859b9209df8451'),
(21, 21, '6253e1406b64bbe6ba7b00ac0bf81257'),
(22, 22, 'dd333821ea8b0fdb9a86c9c8e8749f17'),
(23, 23, '5972793cc1718423517639938aae9100'),
(24, 24, '8c8e86e9b048521fb2f645ef6f79a7cd'),
(25, 25, '482bcddc8fe53ed1e68c77a95aab5f83'),
(26, 26, '421dc56bf505833e8cd51fafaad53388'),
(27, 27, '5675474fbc5ff47c9e1bfc18070b55ee'),
(28, 28, '5c58d4292225bb4bf34f4e6a14946440'),
(29, 29, 'c2cd8564b30088c2d7e166b95281b05f'),
(30, 30, 'e790a1d73db268d31ee9c003cb7b3e73'),
(31, 31, '40613b675aaa60dc6793f1c61f631b8b'),
(32, 32, '711686ffa47d1daa4f4707670741a3e0'),
(33, 33, 'fdcb221478bdc6efd4d2fe3348264b18'),
(34, 34, '49e95ee0eeee9b95bf18e71df639e1f2'),
(35, 35, '6adb40f4159a1f35817275cb35e20bd7'),
(36, 36, 'bb2161e6de3062852e1fb433270f6d8a'),
(37, 37, '7a571e4434f146df6637eac516507175'),
(38, 38, '01a5eaf89fe7c2394ce5ea92783e6f96'),
(39, 39, '726264f3487200fc4a50d834a7bae713'),
(40, 40, '71c7d03e4f1f3e82ec07b92c70b12a74'),
(41, 41, 'cfad39f55e24cf98a4696ff3df26ff18'),
(42, 42, 'c908d3f69f5c3b7e7ed6a71dd4136596'),
(43, 43, 'cac09edc25f965f6d06b01b2eabd6b09'),
(44, 44, '38127aa482441b8300e09690a13590ff'),
(45, 45, 'b14003904486544a78b52f5a7f7fbb23'),
(46, 46, '8d38376baca2ecf4196e5e0529f48e48'),
(47, 47, 'fc71b647f037e22ba8f509f35c1cd2a5'),
(48, 48, 'c0560011e0bf0dfde07a04e44b16f1c9'),
(49, 49, '0120e7917417b90e7430b5a9e3368f4e'),
(50, 50, '0f89c5bd2cb25efd3491283fc6ecfc36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `_id` int(11) NOT NULL,
  `team_code` varchar(100) NOT NULL,
  `team_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(100) NOT NULL,
  `college` varchar(200) NOT NULL,
  `level` tinyint(4) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`_id`, `team_code`, `team_name`, `password`, `hash`, `college`, `level`, `time`) VALUES
(26, 'SHLDTC000', 'ADMIN', 'shld#026_55ca7', '21181c9f70b419855905d151781cf81c', '-', 99, '2024-04-04 08:11:59'),
(1, 'SHLDTC001', 'Bajrang Dal', 'shld#001_11be7', '7f84d083282c5a0b4f5b3a88774e450b', 'MMMUT Gorakhpur', 1, '2024-04-05 20:49:54'),
(2, 'SHLDTC002', 'Chapaak', 'shld#002_a69cb', '19e2a1b95c52374690d8610d117cf271', 'MMMUT Gorakhpur', 99, '2024-04-05 21:55:24'),
(3, 'SHLDTC003', 'Clue Crusaders', 'shld#003_bcf8e', 'daf58df48a98724a32cd4be04489db8f', 'MMMUT Gorakhpur', 1, '2024-04-04 08:11:59'),
(4, 'SHLDTC004', 'Code Hunters', 'shld#004_544b4', 'f619e081204d980342b0c68b91fc2aa5', 'MMMUT Gorakhpur', 1, '2024-04-04 08:11:59'),
(5, 'SHLDTC005', 'Crucial Crew', 'shld#005_720ca', '21b065e37603e102bf810ed0989c8e74', 'MMMUT Gorakhpur', 1, '2024-04-04 08:11:59'),
(6, 'SHLDTC006', 'Dynamic Detectives', 'shld#006_a174a', '357c76bc319c216c0b5cb23d0d5495c9', 'MMMUT Gorakhpur', 1, '2024-04-04 08:11:59'),
(7, 'SHLDTC007', 'Fuhrer', 'shld#007_23b50', 'b8ed325a5a47ee3cb80aef7587e8ae73', 'MMMUT Gorakhpur', 1, '2024-04-04 08:11:59'),
(8, 'SHLDTC008', 'Hurdle\r\n', 'shld#008_49949', '795b13afe6d0f011be164942028fbcd0', 'MMMUT Gorakhpur', 1, '2024-04-04 08:11:59'),
(9, 'SHLDTC009', 'LIQUIDATOR\r\n', 'shld#009_aa42c', '872d55de90415c4a7274159bb11b35f8', 'MMMUT Gorakhpur', 1, '2024-04-04 08:11:59'),
(10, 'SHLDTC010', 'Maqsad', 'shld#010_e47c1', '030b1f326400df4642c7f372637b9fe9', 'MMMUT Gorakhpur', 1, '2024-04-04 08:11:59'),
(11, 'SHLDTC011', 'Moriarty', 'shld#011_29b50', '0a4f860343c750d85caedf3828a7ecff', 'MMMUT Gorakhpur', 1, '2024-04-04 08:11:59'),
(12, 'SHLDTC012', 'Mystery Masters\r\n', 'shld#012_66bf8', '36acb82701f5138eede401f633fb229d', 'MMMUT Gorakhpur', 1, '2024-04-04 08:11:59'),
(13, 'SHLDTC013', 'Narco\s\r\n', 'shld#013_bea10', '7ed902db8c94b21116eefd3049310ab0', 'MMMUT Gorakhpur', 1, '2024-04-04 08:11:59'),
(14, 'SHLDTC014', 'Quantum Raiders\r\n', 'shld#014_9b3e6', '0619312dd77dbcca79361dc76a142b2b', 'MMMUT Gorakhpur', 1, '2024-04-04 08:11:59'),
(15, 'SHLDTC015', 'Quest Masters\r\n', 'shld#015_60059', 'af84a6671d1ee1751775c93ed8e6bae9', 'MMMUT Gorakhpur', 1, '2024-04-04 08:11:59'),
(16, 'SHLDTC016', 'Reverse\r\n', 'shld#016_369fd', '708bd30b6bfc674a263b3e5b6ca66da3', 'MMMUT Gorakhpur', 1, '2024-04-04 08:11:59'),
(17, 'SHLDTC017', 'Riddle Raiders\r\n', 'shld#017_6aaf9', 'cb8943af85edee77c39fb6f55c401c99', 'MMMUT Gorakhpur', 1, '2024-04-04 08:11:59'),
(18, 'SHLDTC018', 'S3k\r\n', 'shld#018_d7d15', 'a619796f8b5618d1b6410d4d9f982051', 'MMMUT Gorakhpur', 1, '2024-04-04 08:11:59'),
(19, 'SHLDTC019', 'SherUnlocked\r\n', 'shld#019_680de', '738e21c329828fe5dbf20a53d459696d', 'MMMUT Gorakhpur', 1, '2024-04-04 08:11:59'),
(20, 'SHLDTC020', 'Team Alpha\r\n', 'shld#020_244f0', '558bb7f3e7ac412b8d9dbc0a4b718b7e', 'MMMUT Gorakhpur', 1, '2024-04-04 08:11:59'),
(21, 'SHLDTC021', 'Team Clueless\r\n', 'shld#021_c0f3e', 'fffee58eed66005e5a49fa72224fb921', 'MMMUT Gorakhpur', 1, '2024-04-04 08:11:59'),
(22, 'SHLDTC022', 'Team_Technical\r\n', 'shld#022_c66e1', '4991269cbeb4a84c56ab6b392580f522', 'MMMUT Gorakhpur', 1, '2024-04-04 08:11:59'),
(23, 'SHLDTC023', 'The Hunters\r\n', 'shld#023_85e94', '4ecb396be55f71b29bf9a0b240318d14', 'MMMUT Gorakhpur', 1, '2024-04-04 08:11:59'),
(24, 'SHLDTC024', 'The scavengers', 'shld#024_a12a4', '21b54cb0a39039a5b667a4d1d6fe236b', 'MMMUT Gorakhpur', 1, '2024-04-04 08:11:59'),
(25, 'SHLDTC025', 'VPN', 'shld#025_8cc40', 'af3916909637bebd34534a70b22aff0e', 'MMMUT Gorakhpur', 1, '2024-04-04 08:11:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `hints`
--
ALTER TABLE `hints`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`team_code`),
  ADD UNIQUE KEY `_id` (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hints`
--
ALTER TABLE `hints`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
