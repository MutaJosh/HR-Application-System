-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2019 at 03:05 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `children_donations`
--

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `id` int(11) NOT NULL,
  `child_name` varchar(40) NOT NULL,
  `child_issue` varchar(300) NOT NULL,
  `child_image` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`id`, `child_name`, `child_issue`, `child_image`, `status`) VALUES
(1, 'Eric Rukundo', 'This child has no home, no food!\r\nAny help, please!', 'favicon_web.jpg', 'No sponsor'),
(2, 'Yvonne Moilla', 'She is looking for adoption!\r\nShe has no home no food no care-givers, ....\r\nHelp please!', 'Calm Darya.jpg', 'Not sponsered!');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `donation_id` int(11) NOT NULL,
  `fName` varchar(30) NOT NULL,
  `lName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `donation_type` varchar(150) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`donation_id`, `fName`, `lName`, `email`, `phone`, `donation_type`, `amount`) VALUES
(1, 'Josue', 'Mutabazi', 'mutabazijosue1@gmail.com', '0786055919', 'Once-off-donation', 10000),
(2, 'Remy', 'Ishimwe', 'mutajo91@gmail.com', '25078956123', 'Once-off-donation', 10000),
(3, 'Jimmy', 'Mutabazi', 'mutabazijosue1@gmail.com', '786055919', 'Once-Off-Gift', 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `sender_name` varchar(30) NOT NULL,
  `sender_email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message_subject` varchar(50) NOT NULL,
  `message` varchar(300) NOT NULL,
  `send_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `sender_name`, `sender_email`, `phone`, `message_subject`, `message`, `send_time`) VALUES
(2, 'Josue', 'mutabazijosue1@gmail.com', '0786055919', 'Trial Message', 'I am really amazed by how you worked on this!\r\n\r\nHow is it today?', '2019-05-26 19:45:27'),
(3, 'Josue', 'mutabazijosue1@gmail.com', '786055919', 'Trial', 'fadskjfa\r\nsdfjaksdjf\r\nasdf\r\njads\r\nfj\r\nsadf\r\nadsjfdsafdsjkljfa', '2019-05-26 19:45:27'),
(4, 'Josue', 'mutabazijosue1@gmail.com', '0786055919', 'Trial Message', 'I am really amazed by how you worked on this!\r\n\r\nHow is it today?', '2019-05-25 22:00:00'),
(5, 'Josue', 'mutajoshua99@gmail.com', '786055919', 'Checking if it works very fine!', 'This is to check if the system works fine!', '2019-05-26 22:15:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user` varchar(40) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user`, `pass`, `email`, `photo`) VALUES
(1, 'Josue', 'Demo123', 'mutabazijosue1@gmail.com', ''),
(2, 'Yvonne', 'Secret', 'yvonnemoilla@gmail.com', ''),
(4, 'Emmanuel', '@Emmanuel2019@', 'mujoe99@gmail.com', ''),
(5, 'Jimmy', 'jimmy29018', 'ndahimanajimm@gmail.com', ''),
(6, 'Remy', 'asdf123', 'new@gmail.com', 'fullPicOfMe.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`donation_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
