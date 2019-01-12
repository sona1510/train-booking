-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2019 at 08:30 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `irctc`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `tno` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `cost` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `from` varchar(50) NOT NULL,
  `to` varchar(50) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pnr` int(11) NOT NULL auto_increment,
  `seats` int(11) NOT NULL,
  PRIMARY KEY  (`pnr`)
) TYPE=InnoDB  AUTO_INCREMENT=14 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`tno`, `date`, `cost`, `name`, `from`, `to`, `tname`, `email`, `pnr`, `seats`) VALUES
('12333', '2018-12-11', 28, 'komal', 'mumbai ', 'gaya', 'kolkata mail', 'komal@1232', 3, 0),
('12333', '2018-12-11', 1220, 'komal', 'mumbai ', 'gaya', 'kolkata mail', 'komal@1232', 5, 0),
('13009', '2018-12-11', 3150, 'komal', 'gaya', 'lucknow ', 'doon exp', 'komal@1232', 8, 0),
('12951', '', 8975, 'komal', 'mumbai ', 'new delhi', 'mumbai rajdhani', 'komal@1232', 9, 0),
('12951', '', 8975, 'komal', 'mumbai ', 'new delhi', 'mumbai rajdhani', 'komal@1232', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `trans`
--

CREATE TABLE `trans` (
  `from` varchar(50) NOT NULL,
  `to` varchar(50) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `tno` varchar(50) NOT NULL,
  `timea` varchar(50) NOT NULL,
  `timed` varchar(50) NOT NULL,
  `cost` int(50) NOT NULL,
  `seats` int(50) NOT NULL
) TYPE=InnoDB;

--
-- Dumping data for table `trans`
--

INSERT INTO `trans` (`from`, `to`, `tname`, `tno`, `timea`, `timed`, `cost`, `seats`) VALUES
('saharanpur', 'mumbai', 'goldn temple ml', '12904', '3:40', '5:05', 640, 200),
('mumbai', 'saharanpur', 'dehradun', '19019', '00:05', '12:10', 610, 200),
('mumbai ', 'gaya', 'kolkata mail', '12333', '21:30', '2:20', 610, 12343),
('gaya', 'mumbai ', 'hwh mumbai mail', '12321', '5:24', '11:25', 675, 200),
('lucknow ', 'saharanpur', 'amritsar mail', '13005', '16:00', '1:35', 305, 200),
('saharanpur', 'lucknow', 'nauchandi exp', '14512', '14512', '16:50', 5, 200),
('gaya', 'lucknow ', 'doon exp', '13009', '5:20', '18:00', 315, 200),
('lucknow', 'gaya', 'kolkata exp', '13152', '17:20', '6:05', 480, 200),
('saharanpur', 'gaya', 'kolkata', '13152', '6:05', '6:05', 480, 200),
('gaya', 'saharanpur', 'ganga sutlij exp', '13307', '00:55', '2:42', 480, 200),
('new delhi', 'mumbai', 'punjab mail', '12138', '5:15', '7:35', 1670, 200),
('new delhi ', 'lucknow', 'gomti express', '12420', '5:15', '7:35', 705, 200),
('lucknow', 'new delhi ', 'bihar skranti', '12565', '21:15', '5:30', 870, 200),
('new delhi ', 'saharanpur ', 'dehradun shibdi', '12017', '6:45', '9:50', 510, 200),
('saharanpur ', 'new delhi ', 'dehradun shibdi ', '12018', '19:55', '22:50', 550, 200),
('new delhi ', 'gaya', 'mahabodi exp', '12398', '12:10', '3:20', 490, 200),
('gaya', 'new delhi ', 'purushottam exp', '12801', '14:02', '4:20', 490, 200),
('mumbai ', 'new delhi', 'mumbai rajdhani', '12951', '17:00', '8:35', 1795, 200),
('mumbai', 'lucknow ', 'pushpak express', '12534', '8:25', '8:40', 600, 200),
('lucknow', 'mumbai', 'pushpak exp', '12533', '19:45', '20:15', 600, 200);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) TYPE=InnoDB;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `password`, `phone`, `city`, `email`) VALUES
('komal', 'rwgvrwg', '54486456', '', 'komal@1232'),
('komal', 'komal', '44656', 'dwkhda', 'komal@1232'),
('ashok', 'ashok', '498453489', 'vasai', 'komal@gmail.com'),
('mumbai', '', '1564653168', '', 'gaya');
