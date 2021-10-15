-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 09:28 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookmedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ID` int(11) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `organisation` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `passwords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `profile`, `username`, `organisation`, `email`, `description`, `passwords`) VALUES
(1, 'uploads/IMG-20190508-152826.jpg', 'Amani Tresor', 'takenoLAB', 'Emai@gmail.com', 'Welcome at the most powefull event         ', '123456'),
(2, 'uploads/IMG-20190508-152826.jpg', 'Amani Yao', 'takenoLAB', 'Email@gmail.com', 'Welcome at the most powefull event         ', '1234567'),
(3, 'uploads/amani.png', 'John Kalula', 'Float Music Academy', 'johnkalula@gmail.com', 'hello john how are you doing today?                    ', '123456789'),
(4, 'uploads/IMG-20190508-152826.jpg', 'Byamasu Patrick', 'takenoLAB', 'patrick@gmail.com', 'Planning is very important for successful life. Once you plan you reduce unnecessary disturbance and un expected results of people that you book. One will remember ', 'patrick');

-- --------------------------------------------------------

--
-- Stand-in structure for view `appointmen`
-- (See below for the actual view)
--
CREATE TABLE `appointmen` (
`User_Id` int(11)
,`Agenda` varchar(255)
,`Venue` varchar(255)
,`Description` varchar(255)
,`DateProposed` varchar(255)
,`TimeProposed` varchar(255)
,`Username` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `appointment`
-- (See below for the actual view)
--
CREATE TABLE `appointment` (
`Username` varchar(255)
,`User_Id` int(11)
,`Book_Id` int(11)
,`Agenda` varchar(255)
,`Venue` varchar(255)
,`TimeProposed` varchar(255)
,`Description` varchar(255)
,`User_To_Book` int(11)
,`DateProposed` varchar(255)
,`Status` varchar(255)
,`TimePosted` varchar(255)
,`UpdatedTime` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `book_now`
--

CREATE TABLE `book_now` (
  `Id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `User_To_Book` int(11) NOT NULL,
  `Agenda` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Venue` varchar(255) NOT NULL,
  `DateProposed` varchar(255) NOT NULL,
  `TimeProposed` varchar(255) NOT NULL,
  `Timestamp` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'Waiting',
  `Updated_Time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_now`
--

INSERT INTO `book_now` (`Id`, `User_Id`, `User_To_Book`, `Agenda`, `Description`, `Venue`, `DateProposed`, `TimeProposed`, `Timestamp`, `Status`, `Updated_Time`) VALUES
(1, 3, 1, 'Jesus is comming soon', 'Music for everyoneThis site can’t be reachedwww.google.com took too long to respond.\r\nTry:\r\n\r\nChecking the connection', 'Float Music Academya', '23/02/2020', '14h 30', '0', 'Waiting', ''),
(2, 2, 3, 'Music', 'Music for everyoneThis site can’t be reachedwww.google.com took too long to respond.\r\nTry:\r\n\r\nChecking the connection', 'Float Music Academya', '23/02/2020', '14h 30', '0', 'Rejected', '2020-01-21 20:29:14'),
(3, 2, 3, 'Coding ground', 'Coding for life This site can’t be reachedwww.google.com took too long to respond.\r\nTry:\r\n\r\nChecking the connection', 'Float Music', '23/02/2020', '14h 30', '0', 'Done', '2020-01-21 20:40:12'),
(4, 4, 1, 'Machine Learning data', 'planning is very important for successful life. Once you plan you reduce unnecessary disturbance and un expected results of people that you book.\r\n', 'Dzaleka Camp / Dowa', '12/04/2019', '14h30', '0', 'Waiting', ''),
(5, 3, 4, 'Natural Language Processing Hackathon', 'I want to discuss about DL with you, i wanna know more about it and and update my skils', 'mHUB Lilongwe', '20/04/2019', '18h30', '0', 'Done', '2020-01-21 21:06:58');

-- --------------------------------------------------------

--
-- Stand-in structure for view `confirmed`
-- (See below for the actual view)
--
CREATE TABLE `confirmed` (
`Username` varchar(255)
,`User_Id` int(11)
,`Book_Id` int(11)
,`Agenda` varchar(255)
,`Venue` varchar(255)
,`TimeProposed` varchar(255)
,`Description` varchar(255)
,`User_To_Book` int(11)
,`DateProposed` varchar(255)
,`Status` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `done`
-- (See below for the actual view)
--
CREATE TABLE `done` (
`Username` varchar(255)
,`User_Id` int(11)
,`Book_Id` int(11)
,`Agenda` varchar(255)
,`Venue` varchar(255)
,`TimeProposed` varchar(255)
,`Description` varchar(255)
,`DateProposed` varchar(255)
,`Status` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `rejected`
-- (See below for the actual view)
--
CREATE TABLE `rejected` (
`Username` varchar(255)
,`User_Id` int(11)
,`Book_Id` int(11)
,`Agenda` varchar(255)
,`Venue` varchar(255)
,`TimeProposed` varchar(255)
,`Description` varchar(255)
,`User_To_Book` int(11)
,`DateProposed` varchar(255)
,`Status` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `requested`
-- (See below for the actual view)
--
CREATE TABLE `requested` (
`Username` varchar(255)
,`User_Id` int(11)
,`Book_Id` int(11)
,`Agenda` varchar(255)
,`Venue` varchar(255)
,`TimeProposed` varchar(255)
,`Description` varchar(255)
,`DateProposed` varchar(255)
,`Status` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `requested_table`
--

CREATE TABLE `requested_table` (
  `Id` int(11) NOT NULL,
  `Book_Id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Timestamp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requested_table`
--

INSERT INTO `requested_table` (`Id`, `Book_Id`, `User_Id`, `Status`, `Timestamp`) VALUES
(1, 2, 3, 'Done', '2020-01-21 10:12:13'),
(2, 2, 3, 'Rejected', '2020-01-21 10:13:32'),
(3, 3, 2, 'Accepted', '2020-01-21 19:38:14'),
(4, 3, 2, 'Accepted', '2020-01-21 19:40:37');

-- --------------------------------------------------------

--
-- Structure for view `appointmen`
--
DROP TABLE IF EXISTS `appointmen`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `appointmen`  AS  select `book_now`.`User_Id` AS `User_Id`,`book_now`.`Agenda` AS `Agenda`,`book_now`.`Venue` AS `Venue`,`book_now`.`Description` AS `Description`,`book_now`.`DateProposed` AS `DateProposed`,`book_now`.`TimeProposed` AS `TimeProposed`,`account`.`username` AS `Username` from (`book_now` join `account`) where (`account`.`ID` = `book_now`.`User_Id`) ;

-- --------------------------------------------------------

--
-- Structure for view `appointment`
--
DROP TABLE IF EXISTS `appointment`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `appointment`  AS  select `account`.`username` AS `Username`,`account`.`ID` AS `User_Id`,`book_now`.`Id` AS `Book_Id`,`book_now`.`Agenda` AS `Agenda`,`book_now`.`Venue` AS `Venue`,`book_now`.`TimeProposed` AS `TimeProposed`,`book_now`.`Description` AS `Description`,`book_now`.`User_To_Book` AS `User_To_Book`,`book_now`.`DateProposed` AS `DateProposed`,`book_now`.`Status` AS `Status`,`book_now`.`Timestamp` AS `TimePosted`,`book_now`.`Updated_Time` AS `UpdatedTime` from (`account` join `book_now`) where ((`account`.`ID` = `book_now`.`User_Id`) and (`book_now`.`Status` = 'Waiting')) ;

-- --------------------------------------------------------

--
-- Structure for view `confirmed`
--
DROP TABLE IF EXISTS `confirmed`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `confirmed`  AS  select `account`.`username` AS `Username`,`account`.`ID` AS `User_Id`,`book_now`.`Id` AS `Book_Id`,`book_now`.`Agenda` AS `Agenda`,`book_now`.`Venue` AS `Venue`,`book_now`.`TimeProposed` AS `TimeProposed`,`book_now`.`Description` AS `Description`,`book_now`.`User_To_Book` AS `User_To_Book`,`book_now`.`DateProposed` AS `DateProposed`,`book_now`.`Status` AS `Status` from (`account` join `book_now`) where ((`account`.`ID` = `book_now`.`User_Id`) and (`book_now`.`Status` = 'Accepted')) ;

-- --------------------------------------------------------

--
-- Structure for view `done`
--
DROP TABLE IF EXISTS `done`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `done`  AS  select `account`.`username` AS `Username`,`account`.`ID` AS `User_Id`,`book_now`.`Id` AS `Book_Id`,`book_now`.`Agenda` AS `Agenda`,`book_now`.`Venue` AS `Venue`,`book_now`.`TimeProposed` AS `TimeProposed`,`book_now`.`Description` AS `Description`,`book_now`.`DateProposed` AS `DateProposed`,`book_now`.`Status` AS `Status` from (`account` join `book_now`) where ((`account`.`ID` = `book_now`.`User_Id`) and (`book_now`.`Status` = 'Done')) ;

-- --------------------------------------------------------

--
-- Structure for view `rejected`
--
DROP TABLE IF EXISTS `rejected`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rejected`  AS  select `account`.`username` AS `Username`,`account`.`ID` AS `User_Id`,`book_now`.`Id` AS `Book_Id`,`book_now`.`Agenda` AS `Agenda`,`book_now`.`Venue` AS `Venue`,`book_now`.`TimeProposed` AS `TimeProposed`,`book_now`.`Description` AS `Description`,`book_now`.`User_To_Book` AS `User_To_Book`,`book_now`.`DateProposed` AS `DateProposed`,`book_now`.`Status` AS `Status` from (`account` join `book_now`) where ((`account`.`ID` = `book_now`.`User_Id`) and (`book_now`.`Status` = 'Rejected')) ;

-- --------------------------------------------------------

--
-- Structure for view `requested`
--
DROP TABLE IF EXISTS `requested`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `requested`  AS  select `account`.`username` AS `Username`,`account`.`ID` AS `User_Id`,`book_now`.`Id` AS `Book_Id`,`book_now`.`Agenda` AS `Agenda`,`book_now`.`Venue` AS `Venue`,`book_now`.`TimeProposed` AS `TimeProposed`,`book_now`.`Description` AS `Description`,`book_now`.`DateProposed` AS `DateProposed`,`book_now`.`Status` AS `Status` from (`account` join `book_now`) where (`account`.`ID` = `book_now`.`User_Id`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `book_now`
--
ALTER TABLE `book_now`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `requested_table`
--
ALTER TABLE `requested_table`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `book_now`
--
ALTER TABLE `book_now`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `requested_table`
--
ALTER TABLE `requested_table`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
