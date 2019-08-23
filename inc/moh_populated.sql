-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2019 at 09:11 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `moh`
--

-- --------------------------------------------------------

--
-- Table structure for table `health_professional`
--

CREATE TABLE `health_professional` (
  `id` int(11) NOT NULL,
  `user` int(11) DEFAULT NULL,
  `request_letter` varchar(45) NOT NULL,
  `cv` varchar(45) NOT NULL,
  `degree` varchar(45) NOT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `update_by` varchar(45) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `voided_by` varchar(45) DEFAULT NULL,
  `voided_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='To store all request about health professional (e.g. Medical Doctors, Nurse, Pharmacists, ...)';

--
-- Dumping data for table `health_professional`
--

INSERT INTO `health_professional` (`id`, `user`, `request_letter`, `cv`, `degree`, `created_by`, `created_date`, `update_by`, `updated_date`, `voided_by`, `voided_date`) VALUES
(1, NULL, 'BulletinAuditForm_Josue AUCA.pdf', 'GDG_Organizer_Terms_and_Conditions_-_mutabazi', 'GDG_Organizer_Terms_and_Conditions_-_mutabazi', 'Ishimwe', '2019-08-22 12:23:44', NULL, NULL, NULL, NULL),
(2, NULL, '1563807643178_WSWC Presentation South Africa.', 'DHIS2 Online Academy DHIS2_101 Certificate _ ', 'GDG_Organizer_Terms_and_Conditions_-_mutabazi', 'Josue Mutabazi', '2019-08-22 15:26:25', NULL, NULL, NULL, NULL),
(6, NULL, '1563807643178_WSWC Presentation South Africa.', 'BulletinAuditForm_Josue AUCA.pdf', 'GDG_Organizer_Terms_and_Conditions_-_mutabazi', 'Remy Muhire', '2019-08-22 17:31:42', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `health_professional_qualification`
--

CREATE TABLE `health_professional_qualification` (
  `health_professional` int(11) NOT NULL,
  `qualification` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `opening_posting`
--

CREATE TABLE `opening_posting` (
  `id` int(11) NOT NULL,
  `user` int(11) DEFAULT NULL,
  `tor` varchar(45) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `update_by` varchar(45) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `voided_by` varchar(45) DEFAULT NULL,
  `voided_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `opening_posting_qualification`
--

CREATE TABLE `opening_posting_qualification` (
  `opening_posting` int(11) NOT NULL,
  `qualification` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `names` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  `NID` varchar(16) DEFAULT NULL,
  `u_password` varchar(45) DEFAULT NULL,
  `user_type` varchar(20) DEFAULT NULL COMMENT 'This is to differentiate between applicants and staff!'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `names`, `email`, `telephone`, `NID`, `u_password`, `user_type`) VALUES
(1, 'Gilbert', 'gilbertino@gmail.com', '0478546123', '119921474836475', NULL, 'Applicant'),
(2, 'Josue Mutabazi', 'mutabazijosue1@gmail.com', '0786055919', '2147483647', NULL, 'Applicant'),
(3, 'Emmanuel T.', 'mutabazijosue1@gmail.com', '0786055919', '2147483647', NULL, 'Applicant'),
(5, 'HF Kacyiru', 'gashorahf@gmail.com', '456456', NULL, 'Demo123', 'Staff'),
(7, 'Samuel T.', 'sam.tuyi2019@gmail.com', '078605121', '2147483647', NULL, 'Applicant'),
(8, 'HF Gashora', 'gashora.info@gmail.com', '07854612312', NULL, 'Demo1234', 'Staff'),
(12, 'HF Kacyiru II', 'kacyiru2hf@gmail.com', '07846521315', NULL, '12313', 'Staff'),
(19, 'HF Gikondo', 'gikondohf@gmail.com', '0789456212', NULL, '12313132', 'Staff'),
(20, 'Jimmy', 'jimmyniyio2019@gmail.com', '0785116231', '1198465121161315', NULL, 'Applicant'),
(23, 'Josue Mutabazi', 'mutabazijosue1@gmail.com', '0786055919', '1199984645213145', NULL, 'Applicant'),
(25, 'Remy Muhire', 'remy2019@gmail.com', '078456132165', '1187974564564126', NULL, 'Applicant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `health_professional`
--
ALTER TABLE `health_professional`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_health_professional_user_idx` (`user`);

--
-- Indexes for table `health_professional_qualification`
--
ALTER TABLE `health_professional_qualification`
  ADD PRIMARY KEY (`health_professional`,`qualification`),
  ADD KEY `fk_qualification_idx` (`qualification`);

--
-- Indexes for table `opening_posting`
--
ALTER TABLE `opening_posting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_opening_posting_user_idx` (`user`);

--
-- Indexes for table `opening_posting_qualification`
--
ALTER TABLE `opening_posting_qualification`
  ADD PRIMARY KEY (`opening_posting`,`qualification`),
  ADD KEY `fk_opq_qualification_idx` (`qualification`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `health_professional`
--
ALTER TABLE `health_professional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `health_professional`
--
ALTER TABLE `health_professional`
  ADD CONSTRAINT `fk_health_professional_user` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

--
-- Constraints for table `health_professional_qualification`
--
ALTER TABLE `health_professional_qualification`
  ADD CONSTRAINT `fk_health_professional` FOREIGN KEY (`health_professional`) REFERENCES `health_professional` (`id`),
  ADD CONSTRAINT `fk_qualification` FOREIGN KEY (`qualification`) REFERENCES `qualification` (`id`);

--
-- Constraints for table `opening_posting`
--
ALTER TABLE `opening_posting`
  ADD CONSTRAINT `fk_opening_posting_user` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

--
-- Constraints for table `opening_posting_qualification`
--
ALTER TABLE `opening_posting_qualification`
  ADD CONSTRAINT `fk_opq_opening_posting` FOREIGN KEY (`opening_posting`) REFERENCES `opening_posting` (`id`),
  ADD CONSTRAINT `fk_opq_qualification` FOREIGN KEY (`qualification`) REFERENCES `qualification` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
