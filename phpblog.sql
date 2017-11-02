-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2017 at 11:28 PM
-- Server version: 5.7.11
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
(1, 'rahmat@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'PHP & MySql'),
(2, 'HTML & CSS'),
(4, 'Java & SQLite'),
(5, 'MySQLi and .NET'),
(6, 'JAVA and C#');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `tags` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category`, `title`, `content`, `author`, `tags`, `date`) VALUES
(2, 1, 'How to use PHP in HTML?', 'This blog post shows a few different types of content that\'s supported and styled with Bootstrap. Basic typography, images, and code are all supported.This blog post shows a few different types of content that\'s supported and styled with Bootstrap. Basic typography, images, and code are all supported.This blog post shows a few different types of content that\'s supported and styled with Bootstrap. Basic typography, images, and code are all supported.This blog post shows a few different types of content that\'s supported and styled with Bootstrap. Basic typography, images, and code are all supported.', 'Babu', 'PHP, HTML, Tutorials', '2017-11-02 12:24:23'),
(3, 6, 'Java Tutorial in Bangla?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Rahamatullah', 'Java', '2017-11-02 13:56:44'),
(4, 3, 'Ajax & jQuery Title Post...', 'Code explanation:\r\n\r\nFirst, check if the input field is empty (str.length == 0). If it is, clear the content of the txtHint placeholder and exit the function.\r\n\r\nHowever, if the input field is not empty, do the following:\r\n\r\nCreate an XMLHttpRequest object\r\nCreate the function to be executed when the server response is ready\r\nSend the request off to a PHP file (gethint.php) on the server\r\nNotice that q parameter is added gethint.php?q="+str\r\nThe str variable holds the content of the input field', 'Shamim', 'Ajax, jQuery', '2017-11-02 16:29:49'),
(5, 2, 'MySQLi and .NET', 'Learning HTML and CSS from Sratch Learning HTML and CSS from Sratch Learning HTML and CSS from Sratch Learning HTML and CSS from Sratch Learning HTML and CSS from Sratch Learning HTML and CSS from Sratch Learning HTML and CSS from Sratch Learning HTML and CSS from Sratch Learning HTML and CSS from Sratch Learning HTML and CSS from Sratch Learning HTML and CSS from Sratch Learning HTML and CSS from Sratch Learning HTML and CSS from Sratch Learning HTML and CSS from Sratch Learning HTML and CSS from Sratch Learning HTML and CSS from Sratch Learning HTML and CSS from Sratch Learning HTML and CSS from Sratch Learning HTML and CSS from Sratch Learning HTML and CSS from Sratch Learning HTML and CSS from Sratch Learning HTML and CSS from Sratch Learning HTML and CSS from Sratch ', 'Rahamatullah', 'HTML, CSS, Web Design', '2017-11-02 19:16:16'),
(6, 4, 'How To make money', 'senceHow To make money google adsenceHow To make money google adsenceHow To make money google adsenceHow To make money google adsenceHow To make money google adsenceHow To make money google adsenceHow To make money google adsenceHow To make money google adsenceHow To make money google adsence', 'dasd', 'asdasdasd', '2017-11-02 19:33:53');

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
