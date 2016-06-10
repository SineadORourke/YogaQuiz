-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2016 at 01:33 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yogaquiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `yogacards`
--

CREATE TABLE `yogacards` (
  `cardno` bigint(20) UNSIGNED NOT NULL,
  `cardref` text NOT NULL,
  `sanscript` text NOT NULL,
  `english` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yogacards`
--

INSERT INTO `yogacards` (`cardno`, `cardref`, `sanscript`, `english`) VALUES
(1, 'yogacard1.jpg', 'Astangasana', 'Eight Limb Pose'),
(2, 'yogacard2.jpg', 'Astavakrasana', 'Ancient sage cursed with Crooked limbs'),
(3, 'yogacard3.jpg', 'Navasana', 'Boat Pose'),
(4, 'yogacard4.jpg', 'Dhanurasana', 'Bow Pose'),
(5, 'yogacard5.jpg', 'Ustrasana', 'Camel Pose'),
(6, 'yogacard6.jpg', 'Utkatasana', 'Chair Pose'),
(7, 'yogacard7.jpg', 'Balasana', 'Child Pose'),
(8, 'yogacard8.jpg', 'Bhujangasana', 'Cobra (Variation)'),
(9, 'yogacard9.jpg', 'Sirasana', 'Headstand'),
(10, 'yogacard10.jpg', 'Vrksasana', 'Tree Pose'),
(11, 'yogacard11.jpg', 'Vrisikasana', 'Scorpion'),
(12, 'yogacard12.jpg', 'Supta Virasana', 'Reclining Hero Pose'),
(13, 'yogacard13.jpg', 'Uttanasana', 'Standing Forward Bend'),
(14, 'yogacard14.jpg', 'Urdhva Dhanurasana', 'Upward Bow'),
(15, 'yogacard15.jpg', 'Upavistha Konasana', 'Seated Angle Pose'),
(16, 'yogacard16.jpg', 'Trikonasana', 'Triangle Pose'),
(17, 'yogacard17.jpg', 'Tadasana', 'Mountain'),
(18, 'yogacard18.jpg', 'Supta Paschimottasana', 'Lying Down Westward Pose'),
(19, 'yogacard19.jpg', 'Supta Konasana', 'Reclining Angle Pose'),
(20, 'yogacard20.jpg', 'Halasana', 'The Plough Pose');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `yogacards`
--
ALTER TABLE `yogacards`
  ADD PRIMARY KEY (`cardno`),
  ADD UNIQUE KEY `cardno` (`cardno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `yogacards`
--
ALTER TABLE `yogacards`
  MODIFY `cardno` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
