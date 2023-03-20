-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for epes_db
DROP DATABASE IF EXISTS `epes_db`;
CREATE DATABASE IF NOT EXISTS `epes_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `epes_db`;

-- Dumping structure for table epes_db.department_list
DROP TABLE IF EXISTS `department_list`;
CREATE TABLE IF NOT EXISTS `department_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `department` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table epes_db.department_list: ~4 rows (approximately)
INSERT INTO `department_list` (`id`, `department`, `description`) VALUES
	(1, 'Computer Science', 'School of Technology'),
	(2, 'Food Technology', 'School of Technology'),
	(3, 'Hospitality Management Technology', 'School of Technology'),
	(4, 'Quantity Surveying', 'School of Environmental Studies');

-- Dumping structure for table epes_db.designation_list
DROP TABLE IF EXISTS `designation_list`;
CREATE TABLE IF NOT EXISTS `designation_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `designation` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table epes_db.designation_list: ~4 rows (approximately)
INSERT INTO `designation_list` (`id`, `designation`, `description`) VALUES
	(1, 'Senior Staff', 'Non Academic Senior Staff'),
	(2, 'Junior Staff', 'Non Academic Junior Staff'),
	(3, 'Senior Staff Academic ', 'Academic Senior Staff'),
	(4, 'Junior Staff Academic', 'Academic Junior Staff');

-- Dumping structure for table epes_db.employee_biodata
DROP TABLE IF EXISTS `employee_biodata`;
CREATE TABLE IF NOT EXISTS `employee_biodata` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullName` varchar(150) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `staffNo` varchar(70) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dob` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `maritalStatus` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `homeAddress` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phoneNumber` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gender` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `faculty` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `department` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dateOfAppointment` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `appointmentStatus` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `confirmationDate` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `promotionDate` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deploymentDate` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jobDescription` text COLLATE utf8mb4_general_ci,
  `jobChallenges` text COLLATE utf8mb4_general_ci,
  `jobSolution` text COLLATE utf8mb4_general_ci,
  `JobOtherInformation` text COLLATE utf8mb4_general_ci,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5006 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table epes_db.employee_biodata: ~4 rows (approximately)
INSERT INTO `employee_biodata` (`id`, `fullName`, `staffNo`, `dob`, `maritalStatus`, `homeAddress`, `phoneNumber`, `email`, `gender`, `faculty`, `department`, `dateOfAppointment`, `appointmentStatus`, `confirmationDate`, `promotionDate`, `deploymentDate`, `jobDescription`, `jobChallenges`, `jobSolution`, `JobOtherInformation`, `date_created`) VALUES
	(1, 'Ayomide Benjamin Ayansiji', 'AD/R/S.3097', '1993-09-02', 'Single', '66, Mosholashi street Orile Iganmu ', '2348133153750', 'Ayomideayansiji@ymail.com', 'male', 'Technology', 'Computer Science', '2017-06-08', 'Not Confirmed', '', '', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2023-02-15 20:37:42'),
	(2, 'Ayomide Benjamin Ayansiji', 'AD/R/S.3095', '1995-12-24', 'Single', '66, Mosholashi street Orile Iganmu ', '2348133153750', 'Ayomideayansiji@ymail.com', 'male', 'Technology', 'Computer Science', '2019-02-28', 'Confirmed', '2023-02-09', '2023-02-09', '2023-02-09', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2023-02-15 20:37:42'),
	(3, 'Ayomide Benjamin Ayansiji', 'AD/R/S.3096', '2008-02-05', 'Single', '66, Mosholashi street Orile Iganmu ', '2348133153750', 'Ayomideayansiji@ymail.com', 'female', 'Technology', 'Computer Science', '1995-05-05', 'Confirmed', '2020-06-15', '2022-02-04', '2022-06-15', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2023-02-15 20:37:42'),
	(4, 'Ayomide Benjamin Ayansiji', 'AD/R/S.3098', '1993-09-02', '', '66, Mosholashi street Orile Iganmu ', '2348133153750', 'Ayomideayansiji@ymail.com', '', 'Technology', 'Computer Science', '2017-06-08', '', '2023-02-01', '2023-02-09', '2023-02-23', NULL, NULL, NULL, NULL, '2023-02-15 21:38:12');

-- Dumping structure for table epes_db.employee_list
DROP TABLE IF EXISTS `employee_list`;
CREATE TABLE IF NOT EXISTS `employee_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `middlename` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `staffNum` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `password` text COLLATE utf8mb4_general_ci NOT NULL,
  `department_id` int NOT NULL,
  `designation_id` int NOT NULL,
  `evaluator_id` int NOT NULL,
  `avatar` text COLLATE utf8mb4_general_ci,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table epes_db.employee_list: ~6 rows (approximately)
INSERT INTO `employee_list` (`id`, `firstname`, `middlename`, `lastname`, `staffNum`, `email`, `password`, `department_id`, `designation_id`, `evaluator_id`, `avatar`, `date_created`) VALUES
	(1, 'John', '', 'Smith', 'AD/R/S.3097', 'jsmith@sample.com', '1254737c076cf867dc53d60a0364f38e', 1, 2, 2, '1607134500_avatar.jpg', '2020-12-05 10:15:38'),
	(2, 'asdasd disabled ', 'd', 'asdasd', 'AD/R/S.3096', 'mwilliams@sample.com', 'a88df23ac492e6e2782df6586a0c645f', 1, 2, 2, '1676501580_Ishau Sempe Cover E  - Copy.jpg', '2021-03-02 13:52:48'),
	(3, 'Ayomide', '', 'Ayansiji', 'AD/R/S.3095', 'ayomide@test.com', '2974b6b7595a6466c191ae7368b1c419', 1, 1, 2, '1676498820_Adeleye adedamola Logo - Copy.jpg', '2023-01-11 13:32:08'),
	(4, 'Ayomide', 'Benjamin', 'Ayansiji', 'A.D.RS.1065', 'abibat@emma.com', 'ab6af293666e6e9ce9953ba8aaf51317', 2, 1, 0, '1676485020_abayomi.jpeg', '2023-02-15 19:17:46'),
	(5, 'Emmanuel', 'Abiodun', 'Omosekeji', 'A.D.RS.1110', 'Emmanuel@Salvador.com', '25f9e794323b453885f5181f1b624d0b', 2, 3, 0, '1676502000_Adeleye adedamola Logo B - Copy.jpg', '2023-02-16 00:00:48'),
	(6, '  Taiwo', 'Busayo', 'Olowookere', 'AD/R/S.1000', 'taiwo@busayo.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, 1, 3, '1679185800_OliveID Mock-up - Copy.jpg', '2023-03-19 01:30:35');

-- Dumping structure for table epes_db.employee_qualification
DROP TABLE IF EXISTS `employee_qualification`;
CREATE TABLE IF NOT EXISTS `employee_qualification` (
  `id` int NOT NULL AUTO_INCREMENT,
  `staffNo` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `institution` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `duration` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `qualification` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `awardBody` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `grade` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `dateOfAward` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `responsibility` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `unit` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `period` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table epes_db.employee_qualification: ~8 rows (approximately)
INSERT INTO `employee_qualification` (`id`, `staffNo`, `institution`, `duration`, `qualification`, `awardBody`, `grade`, `dateOfAward`, `responsibility`, `unit`, `period`, `date_created`) VALUES
	(1, 'AD/R/S.3095', 'Yabatech', '2 years', 'ND', 'cpis', 'higher', '2023-02-07', 'hod', 'compt sci', '2023-02-14', '2023-02-14 14:31:02'),
	(2, 'AD/R/S.3095', 'Yabatech', '3 years', 'HND', 'cpis', 'higher', '2023-02-13', '', '', '', '2023-02-14 14:31:02'),
	(3, 'AD/R/S.3095', 'Yabatech', '2 years', 'ND', '', '', '', '', '', '', '2023-02-14 14:32:40'),
	(4, 'AD/R/S.3095', '', '', '', 'cpis', 'higher', '2023-02-15', '', '', '', '2023-02-14 14:38:16'),
	(5, 'AD/R/S.3096', 'EVA COLLEGE', '2005-2010', 'SSCE', '', '', '', '', '', '', '2023-02-15 22:05:32'),
	(6, 'AD/R/S.3096', 'Yabatech', '2 years', 'National Diploma', 'CIPM', 'Member', '2023-01-01', 'Head of Department', 'Computer Science', '2020-09-30', '2023-02-15 23:02:27'),
	(7, 'AD/R/S.3096', 'Yabatech', '2 Years', 'Higher National Diploma', 'ICAN', 'ICAN', '2020-10-13', '', '', '', '2023-02-15 23:02:27'),
	(8, 'AD/R/S.3096', 'University of Orio', '1 Years', 'Masters in Software Engineering', '', '', '', '', '', '', '2023-02-15 23:02:27');

-- Dumping structure for table epes_db.evaluator_list
DROP TABLE IF EXISTS `evaluator_list`;
CREATE TABLE IF NOT EXISTS `evaluator_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `firstname` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `middlename` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `password` text COLLATE utf8mb4_general_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_general_ci,
  `department_id` int DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table epes_db.evaluator_list: ~3 rows (approximately)
INSERT INTO `evaluator_list` (`id`, `employee_id`, `firstname`, `middlename`, `lastname`, `email`, `password`, `avatar`, `department_id`, `date_created`) VALUES
	(2, 'AD/R/S.3096', 'Ayomide', '', 'Admin', 'ayomide@admin.com', '25f9e794323b453885f5181f1b624d0b', '1673969580_2020-07-27 (1).png', NULL, '2023-01-17 16:33:25'),
	(3, 'AD/R/S.8764', 'Benita', 'Linda', 'Kadiri', 'benita@admin.com', '827ccb0eea8a706c4c34a16891f84e7b', '1679184960_McBuddy Tech Showcase 2 .jpg', NULL, '2023-03-19 01:16:23'),
	(4, 'AD/R/S.8788', '  Taiwo', 'Festus', 'Ayansiji', 'taiwo.festus@home.com', 'e807f1fcf82d132f9bb018ca6738a19f', '1679187900_STUNNING ANIME STUDIO 8.jpg', 2, '2023-03-19 02:05:48');

-- Dumping structure for table epes_db.ratings
DROP TABLE IF EXISTS `ratings`;
CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `evaluator_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `duties` text COLLATE utf8mb4_general_ci NOT NULL,
  `trainings` text COLLATE utf8mb4_general_ci NOT NULL,
  `suggestions` text COLLATE utf8mb4_general_ci NOT NULL,
  `otherInfo` text COLLATE utf8mb4_general_ci NOT NULL,
  `qualityOfWork` int NOT NULL,
  `cooperation` int NOT NULL,
  `resourceful` int NOT NULL,
  `conduct` int NOT NULL,
  `professional` int NOT NULL,
  `recommendation` int NOT NULL,
  `totalScore` int NOT NULL,
  `status` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table epes_db.ratings: ~2 rows (approximately)
INSERT INTO `ratings` (`id`, `employee_id`, `evaluator_id`, `duties`, `trainings`, `suggestions`, `otherInfo`, `qualityOfWork`, `cooperation`, `resourceful`, `conduct`, `professional`, `recommendation`, `totalScore`, `status`, `date_created`) VALUES
	(3, 'AD/R/S.3095', 'AD/R/S.3096', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. ', 12, 2, 4, 7, 3, 55, 83, 'Completed', '2023-03-19 00:36:05'),
	(4, 'AD/R/S.1000', 'AD/R/S.8764', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. ', 10, 2, 4, 4, 2, 55, 77, 'Completed', '2023-03-19 01:57:50');

-- Dumping structure for table epes_db.system_settings
DROP TABLE IF EXISTS `system_settings`;
CREATE TABLE IF NOT EXISTS `system_settings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `contact` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `address` text COLLATE utf8mb4_general_ci NOT NULL,
  `cover_img` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table epes_db.system_settings: ~0 rows (approximately)
INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `address`, `cover_img`) VALUES
	(1, 'Employee Performance Evaluation System', 'info@sample.comm', '+2348133153750', 'YABA COLLEGE OF TECHNOLOGY', '');

-- Dumping structure for table epes_db.task_list
DROP TABLE IF EXISTS `task_list`;
CREATE TABLE IF NOT EXISTS `task_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `task` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `employee_id` int NOT NULL,
  `due_date` date NOT NULL,
  `completed` date NOT NULL,
  `status` int NOT NULL COMMENT '0=pending, 1=on-progress,3=Completed',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table epes_db.task_list: ~2 rows (approximately)
INSERT INTO `task_list` (`id`, `task`, `description`, `employee_id`, `due_date`, `completed`, `status`, `date_created`) VALUES
	(1, 'Sample Task 1', '																					Sample Only																		', 1, '2020-12-02', '0000-00-00', 2, '2020-12-05 11:06:15'),
	(2, 'Sample Task 2', '														&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px; text-align: justify;&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed gravida, magna eu sagittis venenatis, lorem tellus mollis tellus, viverra facilisis metus odio vel dui. Sed posuere interdum ultrices. Pellentesque blandit enim in condimentum pretium. Suspendisse id tortor sit amet augue rutrum condimentum. Fusce ac mattis purus, eget vehicula sem. Maecenas sit amet orci id lorem tristique tempor. Nullam iaculis quis velit at dapibus. Nullam scelerisque, metus vitae feugiat aliquam, risus turpis pellentesque justo, vitae varius urna leo vitae nisl. Pellentesque viverra ipsum et diam blandit varius. Suspendisse blandit ex vitae hendrerit volutpat. Nulla fermentum dolor at lorem accumsan, nec lacinia mi pellentesque. Mauris ac augue vel elit lobortis maximus.&lt;/span&gt;																									', 1, '2020-12-24', '0000-00-00', 0, '2020-12-05 13:09:05');

-- Dumping structure for table epes_db.task_progress
DROP TABLE IF EXISTS `task_progress`;
CREATE TABLE IF NOT EXISTS `task_progress` (
  `id` int NOT NULL AUTO_INCREMENT,
  `task_id` int NOT NULL,
  `progress` text COLLATE utf8mb4_general_ci NOT NULL,
  `is_complete` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=no,1=Yes',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table epes_db.task_progress: ~5 rows (approximately)
INSERT INTO `task_progress` (`id`, `task_id`, `progress`, `is_complete`, `date_created`) VALUES
	(1, 1, '&lt;p&gt;Sample Progress&lt;/p&gt;', 0, '2020-12-05 11:29:48'),
	(2, 1, '&lt;p&gt;Sample Progress&lt;/p&gt;', 0, '2020-12-05 11:32:15'),
	(3, 1, '&lt;p&gt;Sample 2&lt;/p&gt;', 0, '2020-12-05 11:34:18'),
	(4, 1, 'asdasd', 0, '2020-12-05 11:34:31'),
	(5, 1, '&lt;p&gt;complete&lt;/p&gt;', 1, '2020-12-05 11:54:13');

-- Dumping structure for table epes_db.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `password` text COLLATE utf8mb4_general_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_general_ci,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table epes_db.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `avatar`, `date_created`) VALUES
	(1, 'Administrator', 'Ayomide', 'admin@admin.com', '0192023a7bbd73250516f069df18b500', '1607135820_avatar.jpg', '2020-11-26 10:57:04'),
	(2, 'Claire', 'Blake', 'cblake@sample.com', 'cd74fae0a3adf459f73bbf187607ccea', 'no-image-available.png', '2021-03-02 13:53:17');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
