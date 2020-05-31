-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 30, 2020 at 04:30 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(2, 'Programming'),
(3, 'Music'),
(4, 'Dance'),
(6, 'Painting'),
(7, 'People'),
(8, 'Social Media'),
(9, 'Technology');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_desc` text NOT NULL,
  `long_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `title`, `short_desc`, `long_desc`) VALUES
(1, 'swx', '<p>swq</p>\r\n', '<p>xqx</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(6) NOT NULL,
  `cat_id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `contents` text NOT NULL,
  `date_posted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `cat_id`, `title`, `contents`, `date_posted`) VALUES
(6, 2, 'What is programming today?', 'â€œProgramming today is a race between software engineers striving to build bigger and better idiot-proof programs, and the Universe trying to produce bigger and better idiots. So far, the Universe is winning.â€ \r\nâ€• Rick Cook, The Wizardry Compiled', '2017-10-06 15:50:31'),
(8, 3, 'Music <3', 'â€œMusic has always been a matter of Energy to me, a question of Fuel. Sentimental people call it Inspiration, but what they really mean is Fuel. I have always needed Fuel. I am a serious consumer. On some nights I still believe that a car with the gas needle on empty can run about fifty more miles if you have the right music very loud on the radio.â€ \r\nâ€• Hunter S. Thompson', '2017-10-06 15:53:36'),
(9, 4, 'Just Dance!', 'Work like you don\'t need the money. Love like you\'ve never been hurt. Dance like nobody\'s watching. Satchel Paige', '2017-10-06 15:55:17'),
(10, 6, 'Art of Patience', 'I have seen many storms in my life. Most storms have caught me by surprise, so I had to learn very quickly to look further and understand that I am not capable of controlling the weather, to exercise the art of patience and to respect the fury of nature. -Paulo Coelho', '2017-10-06 15:56:16'),
(11, 7, 'Yeah! People!', 'People don`t change, but they can learn to behave differently.     \r\n\r\nCharlaine Harris', '2017-10-06 15:57:18'),
(12, 8, 'Social Media vs. Technology', 'â€œSocial media is about sociology and psychology more than technology.â€ â€“ Brian Solis', '2017-10-06 15:58:33'),
(13, 9, 'Technology!', 'All of the biggest technological inventions created by man - the airplane, the automobile, the computer - says little about his intelligence, but speaks volumes about his laziness. - Mark Kennedy', '2017-10-06 15:59:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `contactno` varchar(11) NOT NULL,
  `posting_date` date NOT NULL
   
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `contactno`, `posting_date`) VALUES
(9, 'Anuj', 'Kumar', 'demouser@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2015-11-12', '2015-11-12'),
(10, 'Amit', 'tomar', 'dfhfd@gm.com', 'f925916e2754e5e03f75dd58a5733251', '82888888888', '2017-12-16'),
(15, 'ssd', 'aaa', 'aaa@gmail.com', '7815696ecbf1c96e6894b779456d330e', '8985479954', '2020-03-19'),
(19, 'shraddha', 'devkar', 'shraddhadevkarssd@gmail.com', 'd4576b3b305e1df6f8ef4517ec2f9615', '9175712673', '2020-03-19'),
(20, 'ab', 'cd', 'pqr@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', '6789089999', '2020-03-19'),
(21, 'q', 'w', 'a@gmail.com', '0cc175b9c0f1b6a831c399e269772661', '6789089999', '2020-03-19'),
(22, 'abab', 'ab', 'ab@gmail.com', '187ef4436122d1cc2f40dc2b92f0eba0', '7896789890', '2020-03-22'),
(23, 'shraddha', 'ssd', 'shraddhadevkarssd@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '8990987899', '2020-04-26'),
(24, 'abc', 'ab', 'abc@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '9890789877', '2020-05-25'),
(25, 'asdf', 'asdf', 'ab@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9890789877', '2020-05-26'),
(26, 'as', 'as', 'aaa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '9175712673', '2020-05-26'),
(33, 'a', 'ssd', 'sxhjj12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '8990987899', '2020-05-27'),
(34, 's', 'gy', 'sdff@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '8890909090', '2020-05-27'),
(35, 'fgg', 'jhh', 'fgh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '8990987899', '2020-05-28'),
(36, 'ghg', 'hjjhj', 'vfgygu@gmail.com', 'afe7704e0a10aec068b18be9a1b103c5', '8985479954', '2020-05-28'),
(37, 's', 'd', 'aaaa@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9890789877', '2020-05-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
