-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 07:34 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `algo`
--

CREATE TABLE `algo` (
  `id` int(5) NOT NULL,
  `algo_name` varchar(100) NOT NULL,
  `abbrivation` varchar(100) NOT NULL,
  `inventor` varchar(100) NOT NULL,
  `university` varchar(100) NOT NULL,
  `j_name` varchar(100) NOT NULL,
  `i_factor` varchar(100) NOT NULL,
  `c_inspired` varchar(100) NOT NULL,
  `base` varchar(100) NOT NULL,
  `exp_operator` varchar(100) NOT NULL,
  `exploitation` varchar(100) NOT NULL,
  `search` varchar(100) NOT NULL,
  `a_type` varchar(100) NOT NULL,
  `nop` varchar(100) NOT NULL,
  `nors` varchar(100) NOT NULL,
  `population_selection` varchar(100) NOT NULL,
  `niching_tech` varchar(100) NOT NULL,
  `testproblem` varchar(100) NOT NULL,
  `app_function` varchar(100) NOT NULL,
  `std_problem` varchar(100) NOT NULL,
  `source` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `code_exp` varchar(100) NOT NULL,
  `flow_available` varchar(100) NOT NULL,
  `performance` varchar(100) NOT NULL,
  `application` varchar(100) NOT NULL,
  `scope` varchar(100) NOT NULL,
  `performance_ea` varchar(100) NOT NULL,
  `comparison` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `algo`
--

INSERT INTO `algo` (`id`, `algo_name`, `abbrivation`, `inventor`, `university`, `j_name`, `i_factor`, `c_inspired`, `base`, `exp_operator`, `exploitation`, `search`, `a_type`, `nop`, `nors`, `population_selection`, `niching_tech`, `testproblem`, `app_function`, `std_problem`, `source`, `language`, `code_exp`, `flow_available`, `performance`, `application`, `scope`, `performance_ea`, `comparison`) VALUES
(2, 'zxc', 'zcx', 'czx', 'adda', 'zcx', '', '', 'czx', 'zx', 'zcx', 'zcx', 'c', '', 'zcx', '', 'zcx', 'zcx', 'c', 'zxcc', 'c', '', '', '', 'zx', '', '', 'zc', ''),
(5, 'Ads', '', 'sfa', 'asf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `algo`
--
ALTER TABLE `algo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `algo`
--
ALTER TABLE `algo`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
