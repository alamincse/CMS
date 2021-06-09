-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 22, 2014 at 03:53 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_post`
--

CREATE TABLE IF NOT EXISTS `admin_post` (
  `post_id` int(5) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_content` text NOT NULL,
  `post_view_count` int(50) NOT NULL,
  `post_cat` varchar(50) CHARACTER SET latin1 NOT NULL,
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `total_rating` int(50) NOT NULL,
  `rating_count` int(50) NOT NULL,
  `rating` double NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `admin_post`
--

INSERT INTO `admin_post` (`post_id`, `admin_id`, `admin_username`, `post_title`, `post_content`, `post_view_count`, `post_cat`, `post_date`, `total_rating`, `rating_count`, `rating`) VALUES
(6, 0, '0', 'Test post', 'This is a test post in my cms site...', 4, '', '2013-04-09 21:27:09', 0, 0, 0),
(7, 0, '0', 'Test post', 'This is a test post in my cms site...', 2, '', '2013-04-09 21:27:03', 0, 0, 0),
(8, 0, '0', 'Test post edit', 'This is a test post in my cms site...so nice .', 4, '', '2013-04-09 21:20:43', 0, 0, 0),
(10, 0, '0', 'Lorem ipsum dolor sit amet.', 'This is a test post in my cms site.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!', 35, '', '2013-05-01 08:19:32', 0, 0, 0),
(11, 0, '0', 'Lorem ipsum dolor sit amet.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro', 1, '', '2013-04-12 23:42:17', 0, 0, 0),
(17, 3, 'cse', 'Other post', 'This is a other post', 2, '', '2013-04-10 04:53:46', 0, 0, 0),
(18, 1, 'alamin', 'Test post', 'This is a test post', 2, '', '2013-04-10 05:05:56', 0, 0, 0),
(19, 2, 'alhadi', 'Lorem ipsum dolor sit amet.0000', 'Test post', 5, '', '2013-05-23 22:48:53', 10, 2, 5),
(20, 1, 'alamin', 'Another test post', 'This is an another test post in this site.......so nice post', 58, '', '2013-04-10 05:56:17', 18, 5, 3.6),
(21, 1, 'alamin', 'This is a test post in this site', 'Test post in this site..............', 1, '', '2013-04-11 20:03:30', 0, 0, 0),
(22, 6, 'gopal', 'New test post in this site', '&lt;p&gt;This is a new post in this site. ru like it ?&lt;/p&gt;', 76, 'css', '2014-08-23 08:00:30', 9, 2, 4.5),
(23, 1, 'alamin', 'Test post', '&lt;p&gt;This is a test post in my cms site.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!&lt;/p&gt;', 87, 'php', '2014-08-23 08:00:16', 197, 50, 3.94),
(24, 10, 'admin', 'Post', 'This is a test post in my cms site.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!', 17, 'css', '2014-08-23 07:59:48', 8, 2, 4),
(26, 10, 'admin', 'Test post publish on my blog', 'This is a test post in my cms site.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias of', 171, 'html', '2014-08-23 07:59:37', 29, 6, 4.833333333),
(37, 10, 'admin', 'Nice post in this site', '&lt;a href=&quot;#&quot;&gt;Nice post &lt;/a&gt;This is a test post in my cms site.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias of', 244, 'php', '2014-08-23 07:59:13', 120, 33, 3.636363636);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(3) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `time`) VALUES
(1, 'php', '0000-00-00 00:00:00'),
(4, 'html', '2014-08-23 01:06:02'),
(5, 'css', '2014-08-23 01:06:12'),
(6, 'jQuery', '2014-08-24 16:57:29');

-- --------------------------------------------------------

--
-- Table structure for table `cms_admin`
--

CREATE TABLE IF NOT EXISTS `cms_admin` (
  `admin_id` int(3) NOT NULL AUTO_INCREMENT,
  `admin_fullname` varchar(30) CHARACTER SET utf16 NOT NULL,
  `admin_username` varchar(50) CHARACTER SET ucs2 NOT NULL,
  `admin_email` varchar(255) CHARACTER SET utf16 NOT NULL,
  `admin_password` varchar(150) CHARACTER SET utf16 NOT NULL,
  `date_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `cms_admin`
--

INSERT INTO `cms_admin` (`admin_id`, `admin_fullname`, `admin_username`, `admin_email`, `admin_password`, `date_time`) VALUES
(2, 'alhadi', 'alhadicse', 'alhadicse@gmail.com', 'cse09', '2013-04-04 12:38:23'),
(3, 'alamin cse ru', 'csealamin', 'cseal.amin.09@gmail.com', 'cse09', '2013-04-08 07:29:11'),
(5, 'johnDoe', 'john', 'jondoe@gmail.com', 'cseru', '2013-04-11 19:48:35'),
(6, 'Gopal cse', 'Gopal', 'gopal@gmail.com', 'cseru09', '2013-04-11 08:46:18'),
(8, 'alamin cse', 'alamin', 'cseal.amin.09@gmail.com', 'cse', '2013-04-30 17:15:20'),
(9, 'alhadi cse', 'cse09', 'cseal.amin.09@gmail.com', 'cse', '2013-05-10 06:49:12'),
(11, 'test', 's', 'cseal.amin.09@gmail.com', 'c', '2014-07-27 22:58:13'),
(12, 'test', 'alamin', 'cseal.amin.09@gmail.com', 'cse', '2014-07-27 23:10:27');

-- --------------------------------------------------------

--
-- Table structure for table `download_manager`
--

CREATE TABLE IF NOT EXISTS `download_manager` (
  `id` int(10) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `downloads` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download_manager`
--

INSERT INTO `download_manager` (`id`, `filename`, `downloads`) VALUES
(0, 'mySQL SERVER.rar', 20);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(3) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(255) NOT NULL,
  `menu_content` text NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_title`, `menu_content`) VALUES
(1, 'Homes', '<p>This is a home page</p>'),
(2, 'About Us', 'This is a about us page'),
(3, 'Contact', 'This is a contact page');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `msg_id` int(10) NOT NULL AUTO_INCREMENT,
  `msg_read` tinyint(11) NOT NULL DEFAULT '0',
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `token` varchar(100) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `msg_read`, `Name`, `email`, `location`, `subject`, `message`, `time`, `token`) VALUES
(1, 1, 'alamin', 'cseal.amin.09@gmail.com', 'Mymensingh', 'test', 'test message', '2014-08-07 18:01:30', ''),
(10, 1, 'Shakil', 'shakil@gmail.com', 'Dhaka', 'I have a php problem', 'this is a test message this is a test messagethis is a test messagethis is a test messagethis is a test messagethis is a test message this is a test message this is a test message this is a test message this is a test message this is a test message this is a test messagethis is a test messagethis is a test messagethis is a test messagethis is a test message this is a test message this is a test message this is a test message this is a test message this is a test message this is a test messagethis is a test messagethis is a test messagethis is a test messagethis is a test message this is a test message this is a test message this is a test message this is a test message', '2014-08-07 17:58:59', ''),
(11, 1, 'AL-HADI', 'alhadi@gmail.com', 'Dhaka', 'I have a problem', 'test msg', '2014-08-07 17:58:35', ''),
(12, 1, 'profile_image', 'profile_image@g.com', 'Mymensingh', 'test message', 'test message', '2014-08-07 18:02:24', ''),
(13, 1, 'Sabik', 'sabik@gmail.com', 'Dhaka', 'I have a php problem', 'test message in this site. ', '2014-08-07 18:11:35', ''),
(14, 1, 'AL-AMIN', 'cseal.amin.09@gmail.com', 'Rajshahi University', 'I have a problem, this problem is php function', 'this is a test message....', '2014-08-07 18:26:57', ''),
(15, 1, 'AL-AMIN', 'cseal.amin.09@gmail.com', 'Rajshahi University', 'I have a problem, this problem is php function', 'This is a test message....', '2014-08-07 21:10:44', ''),
(16, 1, 'Test', 'test@gmail.com', 'test', 'Test', 'Test message', '2014-08-08 05:52:35', ''),
(17, 1, 'Test', 'test@gmail.com', 'test', 'Test', 'Test message', '2014-08-08 06:05:19', ''),
(18, -1, 'Test', 'test@gmail.com', 'test', 'Test', 'Test message', '2014-08-08 08:34:57', ''),
(19, -1, 'Test', 'test@gmail.com', 'test', 'Test', 'Test message', '2014-08-08 08:34:57', ''),
(20, -1, 'Test', 'test@gmail.com', 'test', 'Test', 'Test message', '2014-08-08 08:34:57', ''),
(21, -1, 'Test', 'test@gmail.com', 'test', 'Test', 'Test message', '2014-08-08 08:35:23', ''),
(22, -1, 'Test', 'test@gmail.com', 'test', 'Test', 'Test message', '2014-08-08 09:02:15', ''),
(23, -1, 'Test', 'test@gmail.com', 'test', 'Test', 'Test message', '2014-08-08 09:02:48', ''),
(24, -1, 'Test', 'test@gmail.com', 'test', 'Test', 'Test message', '2014-08-08 09:13:49', ''),
(25, 1, 'Test', 'test@gmail.com', 'test', 'Test', 'Test message', '2014-08-08 09:39:39', ''),
(26, 1, 'Test', 'test@gmail.com', 'test', 'Test', 'Test message', '2014-08-08 09:54:54', ''),
(27, 1, 'Test', 'test@gmail.com', 'test', 'Test', 'Test message', '2014-08-08 09:52:33', ''),
(28, 1, 'Test', 'test@gmail.com', 'test', 'Test', 'Test message', '2014-08-08 09:39:30', ''),
(29, 1, 'Test', 'test@gmail.com', 'test', 'Test', 'Test message', '2014-08-08 09:39:13', ''),
(30, 1, 'Test', 'test@gmail.com', 'test', 'Test', 'Test message', '2014-08-08 09:50:34', ''),
(31, -1, 'Test', 'test@gmail.com', 'test', 'Test', 'Test message', '2014-08-08 09:48:03', ''),
(32, 1, 'Test', 'test@gmail.com', 'test', 'Test', 'Test message', '2014-08-08 09:48:11', ''),
(33, 1, 'AL-AMIN', 'cseal.amin.09@gmail.com', 'Rajshahi University', 'I have a problem, this problem is php function', 'I have a problem, this problem is php function', '2014-08-08 10:33:20', ''),
(34, -1, 'AL-AMIN', 'cseal.amin.09@gmail.com', 'Rajshahi University', 'I have a problem, this problem is php function', 'I have a problem, this problem is php function', '2014-08-08 10:33:12', ''),
(35, 1, 'AL-AMIN', 'cseal.amin.09@gmail.com', 'Rajshahi University', 'I have a problem, this problem is php function', 'I have a problem, this problem is php function', '2014-08-09 11:11:01', ''),
(36, -1, 'Alamin', 'sabik@gmail.com', 'Dhaka', 'I have a problem', 'I have a problem', '2014-08-09 06:43:29', ''),
(37, -1, 'Alamin', 'cseal.amin.09@gmail.com', 'Rajshahi University', 'I have a php problem', 'This is a test message.....', '2014-08-09 11:10:54', ''),
(38, 1, 'Alamin', 'cseal.amin.09@gmail.com', 'Rajshahi University', 'Test message', 'Test message', '2014-08-10 20:23:10', ''),
(39, 1, 'AL-HADI', 'alhadi@gmail.com', 'Dhaka', 'I have a problem', 'This is a test message', '2014-08-10 20:38:09', ''),
(40, 1, 'AL-HADI', 'alhadi@gmail.com', 'Dhaka', 'I have a problem', 'This is a test message', '2014-08-10 20:23:24', ''),
(41, 1, 'AL-HADI', 'alhadi@gmail.com', 'Dhaka', 'I have a problem', 'This is a test message', '2014-08-10 20:38:20', ''),
(42, 1, 'Profile_image', 'profile_image@g.com', 'Mymensingh', 'I have a php problem', 'Test', '2014-08-10 20:58:28', 'xTeTxdQklRfuZjLX7rvkbfO8lUBjoBICT5Bcx2pZzNf0myix59'),
(43, 1, 'Sabik', 'sabik@gmail.com', 'Rajshahi University', 'Test message', 'Test message', '2014-08-11 09:40:57', 'HvFxzu3yRQON7ZU3xw6GScNvaD6MopQP639QtvQEC8zCUg60hE'),
(44, 1, 'Alamin', 'sabik@gmail.com', 'Mymensingh', 'I have a php problem', 'I have a php problem', '2014-08-13 12:59:20', 'YdD97pp8GED2FgMTmXhY5cFrqIRUKOF3DGAZkl9ieCdY8Scgsq'),
(45, -1, 'Alamin', 'sabik@gmail.com', 'Mymensingh', 'I have a php problem', 'I have a php problem', '2014-08-13 12:59:11', 'TRGb7JlFs9dPduUnj6Qc1e1dn3L2xF3XpiAMFSKEZtdNc3fUlJ'),
(46, 1, 'Alamin', 'sabik@gmail.com', 'Mymensingh', 'I have a php problem', 'I have a php problem', '2014-08-13 13:12:41', '46zcbeUTZqtkK8JegTKv1L3l9i3uP4QYfKmRG1Cm34HIKw8Bze'),
(47, -1, 'AL-AMIN', 'cseal.amin.09@gmail.com', 'Mymensingh', 'Test message', 'Test message', '2014-08-16 12:23:28', '8179sjRgiSPrdnjz5oevz8q2toZ6jUVUyDu6acTB3lRfJGVqqD'),
(48, 1, 'AL-AMIN', 'sabik@gmail.com', 'Rajshahi University', 'Test msg', 'Test msg', '2014-08-16 12:23:39', 'LMDKUIgiA4tUCdSMwUTZEbWoQQhKMvapNaJWKNR9Xk6tshoVfe'),
(49, -1, 'Alamin', 'sabik@gmail.com', 'Mymensingh', 'I have a problem', 'I have a problem', '2014-08-21 11:39:21', 'Ef06uyKAvpkGzasVJ6hTdffF9AmRZxS09qiwYCzw4rGiM01Nfw'),
(50, 1, 'Alamin', 'sabik@gmail.com', 'Dhaka', 'Test message', 'Test', '2014-08-31 13:07:08', '6SeUmW7Gq8YyswK6zDIZlfmuIUc4AQBTUhH9q1IWLa3aY9roau'),
(51, 1, 'Test', 'test@gmail.com', 'Dhaka', 'Test message', 'Test message', '2014-09-16 16:54:27', 'cO4QAxYH90xYtRNTFmOjZe7ah27iyMUNEdqGpJGabML7tFBzYx'),
(52, -1, 'Test', 'test@gmail.com', 'Dhaka', 'Test message', 'Test message', '2014-09-16 16:53:13', '6cEfFqQ7XTXpPcneqquwJH7XmU6mia6V5Ao5LJUJUbqZyA6hmZ');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `q_id` int(50) NOT NULL AUTO_INCREMENT,
  `qes_id` int(20) NOT NULL,
  `q_question` text CHARACTER SET utf8 NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q_id`, `qes_id`, `q_question`, `time`) VALUES
(1, 20, 'what is php ?', '0000-00-00 00:00:00'),
(2, 21, 'what is css ?', '0000-00-00 00:00:00'),
(3, 20, 'what is html ?', '0000-00-00 00:00:00'),
(4, 20, 'what is html ?', '0000-00-00 00:00:00'),
(5, 20, '<html><body>Hi!</body></html>', '0000-00-00 00:00:00'),
(6, 19, 'what is asp.net ?', '0000-00-00 00:00:00'),
(7, 19, 'what is asp.net ?', '0000-00-00 00:00:00'),
(8, 20, 'test', '0000-00-00 00:00:00'),
(11, 21, 'what is css ?', '0000-00-00 00:00:00'),
(12, 20, 'name', '0000-00-00 00:00:00'),
(22, 22, 'test', '2014-08-29 05:14:55'),
(23, 22, 'test', '2014-08-29 06:13:11'),
(24, 22, 'what are you doing now ?', '2014-08-29 06:32:27'),
(25, 20, 'test question', '2014-08-29 08:10:57'),
(30, 19, 'Do you know how to create a cms by php ?', '2014-08-30 15:06:43'),
(31, 21, 'AL-AMIN', '2014-09-10 01:57:56'),
(32, 21, 'à¦†à¦®à¦¿ à¦­à¦¾à¦¤ à¦–à¦¾à¦‡ à¥¤', '2014-09-18 19:25:25'),
(33, 20, 'à¦ªà¦¿à¦à¦‡à¦šà¦ªà¦¿ à¦¶à¦¿à¦–à¦¤à§‡ à¦¹à¦²à§‡  à¦•à¦¿ à¦•à¦°à¦¤à§‡ à¦¹à¦¬à§‡ ?', '2014-09-18 19:27:14');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE IF NOT EXISTS `subscribers` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `Full_name` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` text NOT NULL,
  `profile_img` varchar(255) NOT NULL,
  `date` bigint(20) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`userId`, `Full_name`, `userName`, `password`, `email`, `location`, `profile_img`, `date`) VALUES
(19, 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', 'test@g.com', 'mymensingh/bangladesh', 'Binodpur,Rajshahi,Bangladesh.jpg', 1409006262),
(20, 'AL-AMIN', 'AL-AMIN', 'dd22018d0fb5799e6623143a7a674577', 'cseal.amin.09@gmail.com', 'rajshahi/bangladesh', 'alamin.jpg', 1409007912),
(21, 'AL-HADI', 'alhadi', 'dd22018d0fb5799e6623143a7a674577', 'alhadicse@gmail.com', 'sylhet/bangladesh', 'Image1964.jpg', 1409035418),
(22, 'Sabik', 'sabik', 'dd22018d0fb5799e6623143a7a674577', 'sabik@gmail.com', 'antarctica/others', 'Image1939.jpg', 1409194903);

-- --------------------------------------------------------

--
-- Table structure for table `user_ans`
--

CREATE TABLE IF NOT EXISTS `user_ans` (
  `ans_id` int(50) NOT NULL AUTO_INCREMENT,
  `qs_id` int(50) NOT NULL,
  `userId` int(50) NOT NULL,
  `user_ans` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ans_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `user_ans`
--

INSERT INTO `user_ans` (`ans_id`, `qs_id`, `userId`, `user_ans`, `time`) VALUES
(14, 11, 0, 'test ans', '0000-00-00 00:00:00'),
(15, 11, 20, 'test ans', '2014-09-27 18:33:00'),
(16, 11, 19, 'yes.', '2014-09-28 01:02:00'),
(17, 11, 22, 'nice ans', '2014-09-28 02:21:00'),
(18, 11, 20, 'this is a nice question in this section', '2014-09-28 12:56:00'),
(19, 12, 20, 'yes.', '2014-09-28 13:50:00'),
(20, 1, 20, 'nice question', '0000-00-00 00:00:00'),
(21, 12, 22, 'what is this ?', '0000-00-00 00:00:00'),
(22, 22, 21, 'no ans', '0000-00-00 00:00:00'),
(24, 22, 22, 'no ans', '2014-08-29 05:31:27'),
(25, 11, 22, 'what is this ?', '2014-08-29 06:16:36'),
(26, 24, 20, 'what is this ? sabik...', '2014-08-29 06:37:59'),
(27, 25, 20, 'no reply', '2014-08-29 08:11:10'),
(28, 25, 21, 'why ?', '2014-08-29 08:11:23'),
(30, 24, 22, 'this is a problem name.', '2014-08-29 08:12:25'),
(31, 25, 22, 'what a question ?', '2014-08-29 10:50:34'),
(33, 12, 20, 'this is a question.', '2014-08-30 02:10:30'),
(34, 7, 20, 'test', '2014-08-30 02:10:55'),
(35, 30, 20, 'Yes. I know how to do.', '2014-08-30 15:07:09'),
(36, 31, 20, 'this is..', '2014-08-31 13:01:30'),
(37, 32, 21, 'à¦¤à¦¾à¦‡ à¦¨à¦¾à¦•à¦¿ ?', '2014-09-18 19:25:35'),
(38, 33, 21, 'http://w3schools.com à¦ à¦—à¦¿à§Ÿà§‡ à¦ªà¦¿à¦à¦‡à¦šà¦ªà¦¿ à¦à¦° à¦Ÿà¦¿à¦‰à¦Ÿà§‹à¦°à¦¿à§Ÿà¦¾à¦² à¦—à§à¦²à§‹ à¦¦à§‡à¦–à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¦¨ à¥¤', '2014-09-18 19:29:16');

-- --------------------------------------------------------

--
-- Table structure for table `user_comments`
--

CREATE TABLE IF NOT EXISTS `user_comments` (
  `comments_id` int(5) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `post_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `comments_count` int(11) NOT NULL,
  `comments_date` datetime NOT NULL,
  `comments_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `comments_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comments_content` text COLLATE utf8_unicode_ci NOT NULL,
  `profile_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`comments_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=74 ;

--
-- Dumping data for table `user_comments`
--

INSERT INTO `user_comments` (`comments_id`, `post_id`, `userId`, `post_title`, `comments_count`, `comments_date`, `comments_name`, `comments_email`, `comments_content`, `profile_img`) VALUES
(1, 1, 0, '', 1, '2013-04-06 11:17:43', 'alamin', 'cse@gmail.com', 'Test comments, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, maiores eveniet nisi nostrum architecto animi quisquam placeat vero nulla mollitia. Iusto, nemo nostrum inventore maiores maxime tenetur quaerat amet. Beatae.', ''),
(2, 1, 0, '', 1, '0000-00-00 00:00:00', 'alamin', 'cse@gmail.com', 'Test comments quisquam placeat vero nulla mollitia. Iusto, nemo nostrum inventore maiores maxime tenetur quaerat amet. Beatae.', ''),
(3, 1, 0, '', 1, '0000-00-00 00:00:00', 'alamin', 'cse@gmail.com', 'quisquam placeat vero nulla mollitia. Iusto, nemo nostrum inventore maiores maxime tenetur quaerat amet. Beatae.', ''),
(4, 1, 0, '', 0, '0000-00-00 00:00:00', 'alamin', 'cse@gmail.com', 'Test comments, quisquam placeat vero nulla mollitia. Iusto, nemo nostrum inventore maiores.', ''),
(5, 1, 0, '', 0, '0000-00-00 00:00:00', 'AL-AMIN', 'cseal.amin.09@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, maiores eveniet nisi nostrum architecto animi quisquam placeat vero nulla mollitia. Iusto, nemo nostrum inventore maiores maxime tenetur quaerat amet. Beatae.', ''),
(6, 1, 0, '', 0, '0000-00-00 00:00:00', 'alamin', 'cse@gmail.com', 'new comment', ''),
(7, 1, 0, '', 0, '0000-00-00 00:00:00', 'alamin', 'cse@gamil.com', 'Another test comment.', ''),
(8, 1, 0, '', 0, '0000-00-00 00:00:00', 'alamin', 'cse@gmail.com', 'other comment', ''),
(9, 7, 0, '', 0, '0000-00-00 00:00:00', 'alamin', 'cse@gmail.com', 'cse comment', ''),
(10, 1, 0, '', 0, '0000-00-00 00:00:00', 'alamin', 'cseal.amin.09@gmail.com', 'test comment', ''),
(11, 10, 0, '', 1, '0000-00-00 00:00:00', 'alamin', 'cse09@gmail.com', 'test comment', ''),
(12, 10, 0, '', 0, '0000-00-00 00:00:00', 'alamin', 'cse09@gmail.com', 'test comment', ''),
(13, 4, 0, '', 1, '0000-00-00 00:00:00', 'cse', 'cse@gmail.com', 'cse alamin', ''),
(14, 4, 0, '', 1, '0000-00-00 00:00:00', 'alamin', 'cseal.amin.09@gmail.com', 'test comment', ''),
(15, 1, 0, '', 1, '0000-00-00 00:00:00', 'alamin', 'cse@gmail.com', 'new test comment in this post', ''),
(16, 10, 0, '', 1, '0000-00-00 00:00:00', 'alamin', 'cse@gmail.com', 'other test comment', ''),
(17, 1, 0, '', 1, '0000-00-00 00:00:00', 'alamin', 'cse09@gmail.com', 'test comment', ''),
(18, 1, 0, '', 1, '2013-04-07 21:08:42', 'alamin', 'cse@gmail.com', 'other test comment', ''),
(19, 1, 0, '', 1, '2013-04-08 09:50:48', 'alamin', 'cseal.amin.09@gmail.com', 'test comment', ''),
(20, 10, 0, '', 1, '2013-04-08 09:52:35', 'alamin', 'cse@gmail.com', 'nice post', ''),
(21, 17, 0, '', 1, '2013-04-10 06:07:50', 'cse', 'cse@gmail.com', 'nice site', ''),
(22, 20, 0, '', 1, '2013-04-11 08:39:29', 'alamin', 'cse@gmail.com', 'nice post in this site', ''),
(23, 22, 0, 'test on....', 1, '2013-04-12 23:46:41', 'alamin', 'cse@gmail.com', 'nice post...........', '/myphpsite/cms/assets/img/alamin.jpg'),
(24, 23, 1, '', 1, '2013-04-14 11:48:19', 'alamin', 'cse09@gmail.com', 'nice post', ''),
(25, 22, 0, 'New test post in this site', 1, '2013-04-15 09:05:54', 'alamin', 'cse@gmail.com', 'test post', '/myphpsite/cms/assets/img/sabik.jpg'),
(26, 22, 0, 'New test post in this site', 1, '2013-04-15 09:09:24', 'alamin', 'cse@gmail.com', 'test post', '/myphpsite/cms/assets/img/alamin.jpg'),
(27, 21, 0, 'This is a test post in this site', 1, '2013-04-15 10:29:25', 'alamin', 'cse09@gmail.com', 'test post', ''),
(28, 21, 0, 'This is a test post in this site', 1, '2013-04-15 10:33:26', 'alamin', 'cse09@gmail.com', 'test post', ''),
(29, 21, 0, 'This is a test post in this site', 1, '2013-04-15 10:34:16', 'alamin', 'cse09@gmail.com', 'test post', ''),
(30, 21, 0, 'This is a test post in this site', 1, '2013-04-15 10:34:55', 'alamin', 'cse09@gmail.com', 'test post', ''),
(31, 22, 0, 'Array', 1, '2013-04-15 11:46:48', 'alamin', 'cse@gmail.com', 'another test post', '/myphpsite/cms/assets/img/alamin.jpg'),
(32, 22, 0, 'New test post in this site', 1, '2013-04-15 11:47:05', 'alamin', 'cse@gmail.com', 'another test post', '/myphpsite/cms/assets/img/alamin.jpg'),
(33, 10, 0, 'Test post', 1, '2013-04-23 19:54:07', 'alamin', 'cse@gmail.com', 'test comment', ''),
(34, 8, 0, 'Test post edit', 1, '2013-04-27 22:25:58', 'alamin', 'cse@gmail.com', 'test comment in this site', ''),
(35, 7, 0, 'Test post', 1, '2013-04-27 22:36:53', 'alamin', 'cse09@gmail.com', 'test comments', ''),
(36, 7, 0, 'Test post', 1, '2013-04-28 09:21:28', 'alamin', 'cse@gmail.com', 'another test comment in this post', ''),
(37, 23, 1, 'Test post', 1, '2013-04-30 17:10:38', 'alamin', 'cse@gmail.com', 'test comment......', ''),
(38, 17, 0, 'Other post', 1, '2013-05-02 17:29:15', 'almain', 'cseal.amin.09@gmail.com', 'test comment', ''),
(39, 24, 0, 'Anthor test post in this site', 1, '2013-05-02 17:33:42', 'alamin', 'cse@gmail.com', 'test comment', ''),
(40, 24, 0, 'Anthor test post in this site', 1, '2013-05-04 23:38:22', 'alamin', 'cse@gmail.com', 'another test comment', ''),
(41, 21, 0, 'This is a test post in this site', 1, '2013-05-22 21:46:09', 'alamin', 'cse@gmail.com', 'another test comment', ''),
(42, 0, 0, 'Array', 1, '2014-06-29 04:33:46', 'AL- AMIN', 'cse@gmail.com', 'test comment', ''),
(43, 0, 0, 'Array', 1, '2014-06-29 04:35:56', 'AL- AMIN', 'cse@gmail.com', 'test comment', ''),
(44, 10, 0, 'Lorem ipsum dolor sit amet.', 1, '2014-07-07 00:29:23', 'alamin', 'test@gmail.com', '', ''),
(45, 10, 0, 'Lorem ipsum dolor sit amet.', 1, '2014-07-07 00:29:55', 'alamin', 'test@gmail.com', '', ''),
(46, 10, 0, 'Lorem ipsum dolor sit amet.', 1, '2014-07-07 03:57:34', 'alamin', 'cse@gmail.com', '', ''),
(47, 10, 0, 'Lorem ipsum dolor sit amet.', 1, '2014-07-07 03:58:44', 'alamin', 'cse@gmail.com', '', ''),
(48, 10, 0, 'Lorem ipsum dolor sit amet.', 1, '2014-07-07 03:58:48', 'alamin', 'cse@gmail.com', '', ''),
(49, 10, 0, 'Lorem ipsum dolor sit amet.', 1, '2014-07-07 03:59:08', 'alamin', 'cse@gmail.com', '', ''),
(50, 10, 0, 'Lorem ipsum dolor sit amet.', 1, '2014-07-07 04:01:24', 'alamin', 'cse@gmail.com', '', ''),
(51, 10, 0, 'Lorem ipsum dolor sit amet.', 1, '2014-07-07 04:01:52', 'alamin', 'test@gmail.com', 'fff', ''),
(52, 10, 0, 'Lorem ipsum dolor sit amet.', 1, '2014-07-07 04:04:07', 'alamin', 'test@gmail.com', 'fff', ''),
(53, 10, 0, 'Lorem ipsum dolor sit amet.', 1, '2014-07-07 04:04:23', 'alamin', 'test@gmail.com', 'rr', ''),
(54, 10, 0, 'Lorem ipsum dolor sit amet.', 1, '2014-07-07 04:04:36', 'alamin', 'test@gmail.com', '', ''),
(55, 6, 0, 'Test post', 1, '2014-07-07 04:15:58', 'alamin', 'test@gmail.com', 'test comments.', ''),
(56, 6, 0, 'Test post', 1, '2014-07-07 04:21:32', 'alamin', 'test@gmail.com', 'test comments.', ''),
(57, 6, 0, 'Test post', 1, '2014-07-08 15:45:37', 'alamin', 'cseal.amin.09@gmail.com', 'this \r\nis \r\na \r\ntest\r\ncomment', ''),
(58, 6, 0, 'Test post', 1, '2014-07-08 23:58:10', 'alamin', 'cseal.amin.09@gmail.com', 'this \r\nis \r\na \r\ntest\r\ncomment', ''),
(59, 0, 4, '', 0, '2014-08-19 02:54:29', '', '', 'test', ''),
(60, 0, 4, '', 0, '2014-08-19 02:54:36', '', '', 'test', ''),
(61, 0, 4, '', 0, '2014-08-19 02:54:39', '', '', 'test', ''),
(62, 0, 0, '', 0, '2014-08-19 02:57:22', '', '', ':comment', ''),
(63, 0, 0, '', 0, '2014-08-19 02:57:30', '', '', ':comment', ''),
(64, 0, 0, '', 0, '2014-08-19 02:57:34', '', '', ':comment', ''),
(65, 0, 0, '', 0, '2014-08-19 02:59:01', '', '', ':comment', ''),
(66, 0, 4, '', 0, '2014-08-19 03:00:54', '', '', 'testst', ''),
(67, 0, 4, '', 0, '2014-08-19 03:10:53', 'Nayeem', '', 'test', 'assets/img/members/b215dd186083af2897a958a07367010d.jpg'),
(68, 0, 4, '', 1, '2014-08-19 03:11:48', 'Nayeem', '', 'test<br/>name of the comt', 'assets/img/members/b215dd186083af2897a958a07367010d.jpg'),
(69, 0, 4, '', 0, '2014-08-19 03:25:19', 'Nayeem', '', 'tests', 'assets/img/members/b215dd186083af2897a958a07367010d.jpg'),
(70, 0, 4, '', 0, '2014-08-19 03:25:41', 'Nayeem', '', 'test', 'assets/img/members/b215dd186083af2897a958a07367010d.jpg'),
(71, 0, 4, '', 0, '2014-08-19 03:27:35', 'Nayeem', '', 'test', 'assets/img/members/b215dd186083af2897a958a07367010d.jpg'),
(72, 0, 4, '', 0, '2014-08-24 23:34:53', 'Nayeem', '', 'test', 'assets/img/members/b215dd186083af2897a958a07367010d.jpg'),
(73, 0, 20, '', 0, '2014-08-27 06:49:11', 'AL-AMIN', '', 'test<br/>', 'alamin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `widget_area`
--

CREATE TABLE IF NOT EXISTS `widget_area` (
  `widget_id` int(5) NOT NULL AUTO_INCREMENT,
  `widget_name` varchar(255) NOT NULL,
  `widget_sub` text CHARACTER SET utf8 NOT NULL,
  `widget_content` text NOT NULL,
  `widget_media` blob NOT NULL,
  PRIMARY KEY (`widget_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `widget_area`
--

INSERT INTO `widget_area` (`widget_id`, `widget_name`, `widget_sub`, `widget_content`, `widget_media`) VALUES
(2, 'copyright-left', 'copyright', '<p>\r\n     This website are usingÂ <a href="http://php.net" target="_blank"class="ttip" data-toggle="tooltip" \r\ntitle="PHP">PHP</a>,Â PDO,Â CSS,Â JavaScript,Â  \r\n\r\n<a href="http://twitter.github.com/bootstrap/" target="_blank" class="ttip" data-toggle="tooltip" title="Twitter Bootstrap">Bootstrap</a>,Â \r\n\r\n<a href="http://lesscss.org" target="_blank" class="ttip" data-toggle="tooltip" title="The dynamic stylesheet language">Less</a>,Â \r\n\r\n<a href="http://fortawesome.github.io/Font-Awesome" target="_blank" class="ttip" data-toggle="tooltip" title="Fort Awesome">Font Awesome</a> andÂ \r\n\r\n<a href="http://smarty.net" target="_blank" class="ttip" data-toggle="tooltip" title="PHP Template Engine">Smarty.</a>\r\n</p>', ''),
(4, 'social-contact', 'Social Contact', '<ul>\r\n<li><a href="http://facebook.com/alaminbosscseru09" target="_blank">\r\n<i class="fa fa-facebook fb"></i> Â Facebook</a></li>\r\n\r\n<li><a href="http://twitter.com/alamin4595" target="_blank">\r\n<i class="fa fa-twitter tt"></i> Â Twitter</a></li>\r\n\r\n<li><a href="http://bd.linkedin.com/in/alamin09" target="_blank">\r\n<i class="fa fa-linkedin link"></i> Â LinkedIn</a></li>\r\n\r\n<li><a href="https://plus.google.com/u/0/109652374742876374602" target="_blank">\r\n<i class="fa fa-google-plus gog"></i> Â Google +</a></li>\r\n\r\n<li><a href="http://skype.com/al-amincse" target="_blank">\r\n<i class="fa fa-skype sk"></i> Â Skype</a></li>\r\n</ul><!--  .nav .nav-list -->', 0x42696e6f647075722c52616a73686168692c42616e676c61646573682e6a7067),
(5, 'news', 'Latest News', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam quas vel a alias at, facilis aspernatur dolores aperiam. At consequuntur voluptate necessitatibus rerum voluptatem inventore dolor quas. Esse, explicabo, sit.', ''),
(6, 'nice', 'nice', 'nice', 0x742e6a7067),
(7, 'e-book', '<a href="#" style="cursor:default;"><i class="fa fa-book"></i></a> mySQL Bangla e-Book', 'One mySQL Bangla e-Book...you can take it free by download...', 0x6d6d6d2e6a7067),
(8, 'about', 'About Me', 'Hi I am <a href="about.php">AL-AMIN</a>. I''m a student. Studies at \r\n<a href="http://ru.ac.bd/cse" target="_blank">Computer Science and Engineering</a>. \r\n<a href="http://ru.ac.bd" target="_blank">University of Rajshahi</a>, Rajshahi, Bangladesh. I''m also web application developer. I <i class="fa fa-heart-o"></i> to work on web based technology especially <a href="http://php.net" target="_blank">PHP</a> and javaScript. \r\n<br/><br/>\r\nI specialize on php frameworks such as <a href="https://ellislab.com/codeigniter" target="_blank">CodeIgniter</a>, <a href="" target="_blank">cake php</a>, <a href="http://symfony.com" target="_blank">Symphony2</a> and <a href="http://laravel.com" target="_blank" >Laravel</a>. I''m good with PHP and javaScript. I use <a href="http://php.net" target="_blank">PHP</a>, javaScript and database server mySQL, Oracle, MongoDB, PostgreSQL, noSQL in my day to day work. I <i class="fa fa-heart-o"></i> Ajax, jQuery, jQuery-mobile, <a href="http://nodejs.org" target="_blank">Node js</a>, <a href="http://backbonejs.org" target="_blank">Backbone js</a> and also <i class="fa fa-heart-o"></i> <a href="http://smarty.net" target="_blank">Smarty(PHP Template Engine)</a>. As a web application developer I''m good with HTML5 and CSS3. I like to use <a href="http://twitter.github.com/bootstrap" target="_blank">Bootstrap</a>, <a href="http://nodejs.org" target="_blank">Foundation</a>, <a href="http://lesscss.org" target="_blank">Less</a>, Font Awesome for responsive any website and also like to create cms by <i class="fa fa-wordpress"></i>wordpress.\r\n<br><br>\r\n<span class="pull-right"><a href="cms"><i class="fa fa-refresh"></i>AL-AMIN</a></span>\r\n<hr style="margin-top:20px;background:#ccc;">', 0x616c616d696e342e6a7067),
(9, 'php-project', 'PHP Project', 'URL: <a href="http://fairadbd.net" target="_blank">fairadbd.net</a>', 0x57656220456e67696e6565722e4a5047),
(12, 'test', 'test', 'test', 0x4b656f206b6920746f6b686f6e206a616e746f20656b68616e207468656b65692070726f6772616d6d61722c2031737420636c617373203173742c202620576562446576656c6f70657220686f62652e2028204353452029202031737420596561722031737420646179206f662052552e2e6a7067);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
