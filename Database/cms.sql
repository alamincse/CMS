-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2014 at 10:39 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

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
  `image_name` varchar(255) NOT NULL,
  `post_view_count` int(50) NOT NULL,
  `post_cat` varchar(50) CHARACTER SET latin1 NOT NULL,
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `total_rating` int(50) NOT NULL,
  `rating_count` int(50) NOT NULL,
  `rating` double NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=77 ;

--
-- Dumping data for table `admin_post`
--

INSERT INTO `admin_post` (`post_id`, `admin_id`, `admin_username`, `post_title`, `post_content`, `image_name`, `post_view_count`, `post_cat`, `post_date`, `total_rating`, `rating_count`, `rating`) VALUES
(23, 1, 'alamin', 'Test post', '&lt;p&gt;This is a test post in my cms site.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!&lt;/p&gt;', '', 104, 'php', '2014-08-23 08:00:16', 197, 50, 3.94),
(24, 10, 'admin', 'Post', 'This is a test post in my cms site.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!', '', 315, 'css', '2014-08-23 07:59:48', 65, 24, 2.708333333),
(26, 10, 'admin', 'Test post publish on my blog', 'This is a test post in my cms site.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias of', '', 239, 'html', '2014-11-23 07:59:37', 29, 6, 4.833333333),
(37, 10, 'admin', 'Nice post in this site', '&lt;a href=&quot;#&quot;&gt;Nice post &lt;/a&gt;This is a test post in my cms site.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias officia error adipisci cupiditate fugit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, placeat, dolorem sed praesentium aliquid suscipit tenetur iure perspiciatis sint nesciunt non quasi porro molestiae molestias of', '', 1316, 'php', '2014-08-23 07:59:13', 273, 94, 2.904255319),
(74, 10, 'admin', 'Tests', 'à¦†à¦œ à¦ªà¦¿à¦à¦‡à¦¸à¦ªà¦¿ à¦¸à¦®à§à¦ªà¦°à§à¦• à¦•à¦¿à¦›à§ à¦¶à¦¿à¦–à¦²à¦¾à¦® à¦¤à¦¾à¦‡ à¦†à¦ªà¦¨à¦¾à¦¦à§‡à¦° à¦¸à¦¾à¦¥à§‡ à¦¶à§‡à§Ÿà¦¾à¦° à¦•à¦°à¦›à¦¿ à¥¤ PHP à¦•à§‡ à¦†à¦—à§‡ à¦¬à¦²à¦¾ à¦¹à¦¤ à¦ªà¦¾à¦°à¦¸à¦¨à¦¾à¦² à¦¹à¦® à¦ªà§‡à¦‡à¦œ à¥¤ à¦•à¦¿à¦¨à§à¦¤à§ à¦à¦–à¦¨ à¦¬à¦²à¦¾ à¦¹à¦¾à¦‡à¦ªà¦¾à¦°à¦Ÿà§‡à¦•à§à¦¸à¦Ÿ Preprocessor . PHP à¦¤à§‡ à¦†à¦Ÿ à¦¦à¦°à¦¨à§‡à¦° à¦¡à¦¾à¦Ÿà¦¾ à¦Ÿà¦¾à¦‡à¦ª à¦¥à¦¾à¦•à§‡ à¥¤ à¦¯à¦¥à¦¾à¦ƒ à¦šà¦¾à¦°à¦Ÿà¦¿ à¦¸à§à¦•à§‡à¦²à¦¾à¦° à¦Ÿà¦¾à¦‡à¦ª: à§§à¥¤ Boolean: à¦¸à¦¤à§à¦¯ à¦¬à¦¾ à¦®à¦¿à¦¥à§à¦¯à¦¾ à¦®à¦¾à¦¨à§‡à¦° à¦œà¦¨à§à¦¯à¥¤ à§¨à¥¤ Integer: à¦ªà§‚à¦°à§à¦£ à¦¸à¦‚à¦–à§à¦¯à¦¾à¦° à¦œà¦¨à§à¦¯à¥¤ à§©à¥¤ Float: à¦¬à¦¾à¦¸à§à¦¤à¦¬ à¦¸à¦‚à¦–à§à¦¯à¦¾à¦° à¦œà¦¨à§à¦¯à¥¤ à§ªà¥¤ String: à¦…à¦•à§à¦·à¦°à§‡à¦° à¦œà¦¨à§à¦¯à¥¤ à¦¦à§à¦Ÿà¦¿ à¦•à¦®à§à¦ªà¦¾à¦‰à¦¨à§à¦¡ à¦Ÿà¦¾à¦‡à¦ª: à§§à¥¤ Array: à¦à¦•à¦¾à¦§à¦¿à¦• à¦¡à§‡à¦Ÿà¦¾ à¦°à¦¾à¦–à¦¾à¦° à¦œà¦¨à§à¦¯à¥¤ à§¨à¥¤ Object: à¦•à§à¦²à¦¾à¦¸à§‡à¦° à¦‡à¦¨à¦¸à§à¦Ÿà§à¦¯à¦¾à¦¨à§à¦¸ à¦§à¦¾à¦°à¦£à§‡à¦° à¦œà¦¨à§à¦¯à¥¤ à¦¦à§à¦Ÿà¦¿ à¦¬à¦¿à¦¶à§‡à¦· à¦Ÿà¦¾à¦‡à¦ª: à§§à¥¤ Resource: à¦¬à¦¾à¦‡à¦°à§‡à¦° à¦°à¦¿à¦¸à§‹à¦°à§à¦¸à§‡ à¦°à§‡à¦«à¦¾à¦°à§‡à¦¨à§à¦¸ à¦§à¦¾à¦°à¦£à§‡à¦° à¦œà¦¨à§à¦¯à¥¤ à§¨à¥¤ Null: à¦­à§‡à¦°à¦¿à¦¯à¦¼à§‡à¦¬à¦²à§‡à¦° à¦•à§‹à¦¨à§‹ à¦­à§à¦¯à¦¾à¦²à§ à¦¨à§‡à¦‡ à¦¸à§‡à¦Ÿà¦¿ à¦ªà§à¦°à¦¦à¦°à§à¦¶à¦¨à§‡à¦° à¦œà¦¨à§à¦¯à¥¤ PHP à¦¤à§‡ à¦¸à¦¾à¦§à¦¾à¦°à¦¨à¦¤ à¦•à¦¨à§à¦¡à¦¿à¦¶à¦¨à¦¾à¦² à¦¸à§à¦Ÿà§‡à¦Ÿà¦®à§‡à¦¨à§à¦Ÿ à¦¹à¦²à¦ƒ à§§à¥¤ if à¦¸à§à¦Ÿà§‡à¦Ÿà¦®à§‡à¦¨à§à¦Ÿ: à¦¨à¦¿à¦°à§à¦¦à¦¿à¦·à§à¦Ÿ à¦•à¦¨à§à¦¡à¦¿à¦¶à¦¨à¦Ÿà¦¿ à¦¸à¦¤à§à¦¯à¦¿ à¦¹à¦²à§‡ à¦•à§‡à¦¬à¦² à¦¤à¦–à¦¨à¦‡ à¦•à¦¿à¦›à§ à¦•à§‹à¦¡à¦•à§‡ à¦•à¦¾à¦°à§à¦¯à¦•à¦° à¦•à¦°à¦¾à¦° à¦œà¦¨à§à¦¯ à¦à¦‡ à¦¸à§à¦Ÿà§‡à¦Ÿà¦®à§‡à¦¨à§à¦Ÿ à¦¬à§à¦¯à¦¬à¦¹à¦¾à¦° à¦¹à¦¯à¦¼à§‡ à¦¥à¦¾à¦•à§‡à¥¤ à§¨à¥¤ ifelse à¦¸à§à¦Ÿà§‡à¦Ÿà¦®à§‡à¦¨à§à¦Ÿ: à¦•à§‹à¦¨à§‹ à¦•à¦¨à§à¦¡à¦¿à¦¶à¦¨ à¦¸à¦¤à§à¦¯à¦¿ à¦¹à¦²à§‡ à¦•à¦¿à¦›à§ à¦•à§‹à¦¡à¦•à§‡ à¦•à¦¾à¦°à§à¦¯à¦•à¦° à¦•à¦°à¦¾à¦° à¦œà¦¨à§à¦¯ à¦à¦¬à¦‚ à¦•à¦¨à§à¦¡à¦¿à¦¶à¦¨ à¦®à¦¿à¦¥à§à¦¯à¦¾ à¦¹à¦²à§‡ à¦…à¦¨à§à¦¯ à¦•à§‹à¦¡à¦•à§‡ à¦•à¦¾à¦°à§à¦¯à¦•à¦° à¦•à¦°à¦¾à¦° à¦œà¦¨à§à¦¯ à¦à¦‡ à¦¸à§à¦Ÿà§‡à¦Ÿà¦®à§‡à¦¨à§à¦Ÿ à¦¬à§à¦¯à¦¬à¦¹à¦¾à¦° à¦¹à¦¯à¦¼à§‡ à¦¥à¦¾à¦•à§‡à¥¤ à§©à¥¤ if..elseif..else à¦¸à§à¦Ÿà§‡à¦Ÿà¦®à§‡à¦¨à§à¦Ÿ: à¦…à¦¸à¦‚à¦–à§à¦¯ à¦•à§‹à¦¡ à¦¬à§à¦²à¦• à¦¥à§‡à¦•à§‡ à¦à¦•à¦Ÿà¦¿ à¦¬à¦¾ à¦à¦•à¦¾à¦§à¦¿à¦• à¦•à¦¾à¦°à§à¦¯à¦•à¦° à¦•à¦°à¦¾à¦° à¦œà¦¨à§à¦¯ à¦à¦‡ à¦¸à§à¦Ÿà§‡à¦Ÿà¦®à§‡à¦¨à§à¦Ÿ à¦¬à§à¦¯à¦¬à¦¹à¦¾à¦° à¦¹à¦¯à¦¼à§‡ à¦¥à¦¾à¦•à§‡à¥¤ à§ªà¥¤ switch à¦¸à§à¦Ÿà§‡à¦Ÿà¦®à§‡à¦¨à§à¦Ÿ: à¦…à¦¸à¦‚à¦–à§à¦¯ à¦•à§‹à¦¡ à¦¬à§à¦²à¦• à¦¥à§‡à¦•à§‡ à¦à¦•à¦Ÿà¦¿à¦•à§‡ à¦•à¦¾à¦°à§à¦¯à¦•à¦° à¦•à¦°à¦¾à¦° à¦œà¦¨à§à¦¯ à¦à¦‡ à¦¸à§à¦Ÿà§‡à¦Ÿà¦®à§‡à¦¨à§à¦Ÿ à¦¬à§à¦¯à¦¬à¦¹à¦¾à¦° à¦¹à¦¯à¦¼à§‡ à¦¥à¦¾à¦•à§‡à¥¤ à¦ªà¦¿à¦à¦‡à¦šà¦ªà¦¿à¦¤à§‡ à¦¤à¦¿à¦¨ à¦§à¦°à¦¨à§‡à¦° Array à¦°à¦¯à¦¼à§‡à¦›à§‡: à§§à¥¤ Numeric Array: à¦¨à¦¿à¦‰à¦®à§‡à¦°à¦¿à¦• à¦‡à¦¨à¦¡à§‡à¦•à§à¦¸à¦¸à¦¹ à¦à¦•à¦Ÿà¦¿ array à§¨à¥¤ Associative Array: à¦à¦®à¦¨ à¦§à¦°à¦¨à§‡à¦° array à¦¯à§‡à¦–à¦¾à¦¨à§‡ à¦ªà§à¦°à¦¤à¦¿à¦Ÿà¦¿ à¦†à¦‡à¦¡à¦¿ à¦•à¦¿-à¦à¦° à¦¸à¦¾à¦¥à§‡ à¦à¦•à¦Ÿà¦¿ à¦­à§à¦¯à¦¾à¦²à§ à¦†à¦›à§‡à¥¤ à§©à¥¤ Mu', 'overear-studio-wireless-titanium-standard-thrqrtleft-O.png', 0, 'php', '2014-12-08 02:04:36', 0, 0, 0),
(76, 10, 'admin', 'PHP: Personal Home Page', 'à¦†à¦œ à¦ªà¦¿à¦à¦‡à¦¸à¦ªà¦¿ à¦¸à¦®à§à¦ªà¦°à§à¦• à¦•à¦¿à¦›à§ à¦¶à¦¿à¦–à¦²à¦¾à¦® à¦¤à¦¾à¦‡ à¦†à¦ªà¦¨à¦¾à¦¦à§‡à¦° à¦¸à¦¾à¦¥à§‡ à¦¶à§‡à§Ÿà¦¾à¦° à¦•à¦°à¦›à¦¿ à¥¤ PHP à¦•à§‡ à¦†à¦—à§‡ à¦¬à¦²à¦¾ à¦¹à¦¤ à¦ªà¦¾à¦°à¦¸à¦¨à¦¾à¦² à¦¹à¦® à¦ªà§‡à¦‡à¦œ à¥¤ à¦•à¦¿à¦¨à§à¦¤à§ à¦à¦–à¦¨ à¦¬à¦²à¦¾ à¦¹à¦¾à¦‡à¦ªà¦¾à¦°à¦Ÿà§‡à¦•à§à¦¸à¦Ÿ Preprocessor . PHP à¦¤à§‡ à¦†à¦Ÿ à¦¦à¦°à¦¨à§‡à¦° à¦¡à¦¾à¦Ÿà¦¾ à¦Ÿà¦¾à¦‡à¦ª à¦¥à¦¾à¦•à§‡ à¥¤ à¦¯à¦¥à¦¾à¦ƒ à¦šà¦¾à¦°à¦Ÿà¦¿ à¦¸à§à¦•à§‡à¦²à¦¾à¦° à¦Ÿà¦¾à¦‡à¦ª: à§§à¥¤ Boolean: à¦¸à¦¤à§à¦¯ à¦¬à¦¾ à¦®à¦¿à¦¥à§à¦¯à¦¾ à¦®à¦¾à¦¨à§‡à¦° à¦œà¦¨à§à¦¯à¥¤ à§¨à¥¤ Integer: à¦ªà§‚à¦°à§à¦£ à¦¸à¦‚à¦–à§à¦¯à¦¾à¦° à¦œà¦¨à§à¦¯à¥¤ à§©à¥¤ Float: à¦¬à¦¾à¦¸à§à¦¤à¦¬ à¦¸à¦‚à¦–à§à¦¯à¦¾à¦° à¦œà¦¨à§à¦¯à¥¤ à§ªà¥¤ String: à¦…à¦•à§à¦·à¦°à§‡à¦° à¦œà¦¨à§à¦¯à¥¤ à¦¦à§à¦Ÿà¦¿ à¦•à¦®à§à¦ªà¦¾à¦‰à¦¨à§à¦¡ à¦Ÿà¦¾à¦‡à¦ª: à§§à¥¤ Array: à¦à¦•à¦¾à¦§à¦¿à¦• à¦¡à§‡à¦Ÿà¦¾ à¦°à¦¾à¦–à¦¾à¦° à¦œà¦¨à§à¦¯à¥¤ à§¨à¥¤ Object: à¦•à§à¦²à¦¾à¦¸à§‡à¦° à¦‡à¦¨à¦¸à§à¦Ÿà§à¦¯à¦¾à¦¨à§à¦¸ à¦§à¦¾à¦°à¦£à§‡à¦° à¦œà¦¨à§à¦¯à¥¤ à¦¦à§à¦Ÿà¦¿ à¦¬à¦¿à¦¶à§‡à¦· à¦Ÿà¦¾à¦‡à¦ª: à§§à¥¤ Resource: à¦¬à¦¾à¦‡à¦°à§‡à¦° à¦°à¦¿à¦¸à§‹à¦°à§à¦¸à§‡ à¦°à§‡à¦«à¦¾à¦°à§‡à¦¨à§à¦¸ à¦§à¦¾à¦°à¦£à§‡à¦° à¦œà¦¨à§à¦¯à¥¤ à§¨à¥¤ Null: à¦­à§‡à¦°à¦¿à¦¯à¦¼à§‡à¦¬à¦²à§‡à¦° à¦•à§‹à¦¨à§‹ à¦­à§à¦¯à¦¾à¦²à§ à¦¨à§‡à¦‡ à¦¸à§‡à¦Ÿà¦¿ à¦ªà§à¦°à¦¦à¦°à§à¦¶à¦¨à§‡à¦° à¦œà¦¨à§à¦¯à¥¤ PHP à¦¤à§‡ à¦¸à¦¾à¦§à¦¾à¦°à¦¨à¦¤ à¦•à¦¨à§à¦¡à¦¿à¦¶à¦¨à¦¾à¦² à¦¸à§à¦Ÿà§‡à¦Ÿà¦®à§‡à¦¨à§à¦Ÿ à¦¹à¦²à¦ƒ à§§à¥¤ if à¦¸à§à¦Ÿà§‡à¦Ÿà¦®à§‡à¦¨à§à¦Ÿ: à¦¨à¦¿à¦°à§à¦¦à¦¿à¦·à§à¦Ÿ à¦•à¦¨à§à¦¡à¦¿à¦¶à¦¨à¦Ÿà¦¿ à¦¸à¦¤à§à¦¯à¦¿ à¦¹à¦²à§‡ à¦•à§‡à¦¬à¦² à¦¤à¦–à¦¨à¦‡ à¦•à¦¿à¦›à§ à¦•à§‹à¦¡à¦•à§‡ à¦•à¦¾à¦°à§à¦¯à¦•à¦° à¦•à¦°à¦¾à¦° à¦œà¦¨à§à¦¯ à¦à¦‡ à¦¸à§à¦Ÿà§‡à¦Ÿà¦®à§‡à¦¨à§à¦Ÿ à¦¬à§à¦¯à¦¬à¦¹à¦¾', '71joq-txpaL._SL1500_.jpg', 0, 'css', '2014-12-08 02:09:04', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(3) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `time`) VALUES
(1, 'php', '0000-00-00 00:00:00'),
(9, 'html', '2014-10-25 17:50:52'),
(10, 'css', '2014-10-25 17:50:56'),
(11, 'jquery', '2014-10-25 17:51:02');

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
(2, 'alhadi', 'alhadicse', 'alhadicse@gmail.com', 'cse09', '2014-10-04 12:38:23'),
(3, 'alamin cse ru', 'csealamin', 'cseal.amin.09@gmail.com', 'cse09', '2014-10-08 07:29:11'),
(5, 'johnDoe', 'john', 'jondoe@gmail.com', 'cseru', '2014-10-11 19:48:35'),
(6, 'Gopal cse', 'Gopal', 'gopal@gmail.com', 'cseru09', '2014-10-21 07:46:18'),
(8, 'alamin cse', 'alamin', 'cseal.amin.09@gmail.com', 'cse', '2014-10-30 17:15:20'),
(9, 'alhadi cse', 'cse09', 'cseal.amin.09@gmail.com', 'cse', '2014-10-10 06:49:12'),
(12, 'test', 'alamin', 'cseal.amin.09@gmail.com', 'cse', '2014-10-27 23:10:27');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comments_id` int(50) NOT NULL AUTO_INCREMENT,
  `comments_sub_id` int(50) NOT NULL,
  `comments_sub_new_id` int(50) NOT NULL,
  `comments_sub_last_id` int(50) NOT NULL,
  `post_id` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `comments_count` int(11) NOT NULL,
  `comments_date` datetime NOT NULL,
  `comments_name` varchar(255) NOT NULL,
  `comments_content` text NOT NULL,
  PRIMARY KEY (`comments_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=220 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comments_id`, `comments_sub_id`, `comments_sub_new_id`, `comments_sub_last_id`, `post_id`, `userId`, `comments_count`, `comments_date`, `comments_name`, `comments_content`) VALUES
(1, 0, 0, 0, 24, 21, 1, '2014-10-24 22:43:26', 'alhadi', 'test'),
(2, 0, 0, 0, 24, 21, 1, '2014-10-24 22:48:14', 'alhadi', 'other test comment.'),
(3, 0, 0, 0, 24, 21, 1, '2014-10-24 23:10:22', 'alhadi', 'other test comment.'),
(4, 0, 0, 0, 22, 21, 1, '2014-10-24 23:12:28', 'alhadi', 'Nice'),
(5, 0, 0, 0, 22, 21, 1, '2014-10-24 23:25:46', 'alhadi', 'Nice'),
(6, 0, 0, 0, 24, 22, 1, '2014-10-24 23:46:37', 'sabik', 'nice'),
(7, 0, 0, 0, 24, 22, 1, '2014-10-24 23:49:37', 'sabik', 'realy nice'),
(8, 0, 0, 0, 24, 22, 1, '2014-10-24 23:50:46', 'sabik', 'realy nice'),
(9, 0, 0, 0, 24, 22, 1, '2014-10-24 23:55:13', 'sabik', 'realy nice'),
(10, 0, 0, 0, 24, 22, 1, '2014-10-24 23:56:30', 'sabik', 'realy nice'),
(29, 0, 0, 0, 26, 22, 1, '2014-10-25 01:46:14', 'sabik', 'nice'),
(30, 0, 0, 0, 26, 22, 1, '2014-10-25 01:47:18', 'sabik', 'nice'),
(31, 0, 0, 0, 19, 22, 1, '2014-10-25 01:52:53', 'sabik', 'yes'),
(32, 0, 0, 0, 19, 22, 1, '2014-10-25 01:54:31', 'sabik', 'yes'),
(33, 0, 0, 0, 19, 22, 1, '2014-10-25 01:57:19', 'sabik', 'yes'),
(34, 0, 0, 0, 19, 22, 1, '2014-10-25 01:58:45', 'sabik', 'yes'),
(35, 9, 0, 0, 24, 22, 1, '2014-10-25 02:08:36', 'sabik', 'vvvv'),
(36, 0, 0, 0, 19, 22, 1, '2014-10-25 02:09:11', 'sabik', 'niii'),
(37, 0, 0, 0, 19, 22, 1, '2014-10-25 02:10:09', 'sabik', 'niii'),
(38, 0, 0, 0, 22, 22, 1, '2014-10-25 02:10:29', 'sabik', 'bbb'),
(39, 5, 0, 0, 22, 22, 1, '2014-10-25 02:10:45', 'sabik', 'bbvvvv'),
(40, 5, 0, 0, 22, 22, 1, '2014-10-25 02:11:05', 'sabik', 'terdtr'),
(42, 9, 0, 0, 24, 22, 1, '2014-10-25 02:12:33', 'sabik', 'vvvvvvvvvvvvv'),
(46, 0, 0, 0, 21, 21, 1, '2014-10-27 18:38:35', 'alhadi', 'test comment.'),
(47, 46, 0, 0, 21, 21, 1, '2014-10-27 18:39:05', 'alhadi', 'nice'),
(48, 46, 0, 0, 21, 21, 1, '2014-10-27 18:53:15', 'alhadi', 'nice'),
(49, 46, 0, 0, 21, 21, 1, '2014-10-27 19:01:47', 'alhadi', 'nice'),
(50, 46, 0, 0, 21, 21, 1, '2014-10-27 19:04:26', 'alhadi', 'nice'),
(51, 46, 0, 0, 21, 22, 1, '2014-10-27 23:05:52', 'sabik', 'Nice comment in this post.'),
(52, 0, 0, 0, 21, 22, 1, '2014-10-27 23:09:01', 'sabik', 'test'),
(53, 0, 0, 0, 21, 21, 1, '2014-10-27 23:15:58', 'alhadi', 'dddd'),
(54, 0, 0, 0, 24, 23, 1, '2014-11-05 21:52:55', 'alamin', 'test'),
(55, 0, 0, 0, 24, 23, 1, '2014-11-10 02:30:22', 'alamin', 'nice post in this site'),
(163, 0, 0, 0, 37, 21, 1, '2014-11-12 02:19:19', 'alhadi', 'testing...'),
(165, 163, 0, 0, 37, 23, 1, '2014-11-12 02:20:24', 'alamin', 'nice one.'),
(166, 1, 165, 0, 37, 20, 1, '2014-11-12 02:21:27', 'AL-AMIN', 'once again...'),
(167, 1, 165, 0, 37, 23, 1, '2014-11-12 02:22:34', 'alamin', 'what is this ?'),
(168, 1, 1, 167, 37, 21, 1, '2014-11-12 02:23:42', 'alhadi', 'test comment.'),
(169, 1, 1, 166, 37, 23, 1, '2014-11-12 02:24:25', 'alamin', 'yes please.'),
(170, 1, 1, 167, 37, 21, 1, '2014-11-12 02:24:55', 'alhadi', 'yes.'),
(171, 0, 0, 0, 37, 21, 1, '2014-11-12 02:25:33', 'alhadi', 'yes.'),
(172, 0, 0, 0, 37, 23, 1, '2014-11-12 03:44:57', 'alamin', 'à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶...'),
(173, 172, 0, 0, 37, 23, 1, '2014-11-12 03:45:17', 'alamin', 'à¦†à¦®à¦¿ à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶à§‡ à¦¬à¦¾à¦¸ à¦•à¦°à¦¿ à¥¤'),
(174, 1, 173, 0, 37, 20, 1, '2014-11-12 03:46:45', 'AL-AMIN', 'à¦à¦¸à§‹ à¦†à¦®à¦°à¦¾ à¦«à§à¦Ÿà¦¬à¦² à¦–à§‡à¦²à¦¤à§‡ à¦¯à¦¾à¦‡... à¥¤'),
(175, 172, 0, 0, 37, 22, 1, '2014-11-12 03:47:53', 'sabik', 'à¦†à¦œ à¦à¦—à¦¾à¦° à¦¤à¦¾à¦°à¦¿à¦– à¥¤'),
(176, 1, 1, 174, 37, 22, 1, '2014-11-12 03:49:57', 'sabik', 'à¦¬à¦² à¦–à§‡à¦²à§‡ à¦•à¦¿ à¦¹à¦¬à§‡ ?'),
(177, 1, 1, 174, 37, 23, 1, '2014-11-12 03:52:38', 'alamin', 'à¦šà¦² à¦¬à¦¾à§œà¦¿ à¦¯à¦¾à¦‡... à¥¤'),
(178, 0, 0, 0, 37, 25, 1, '2014-11-12 04:18:46', 'à¦†à¦²-à¦†à¦®à¦¿à¦¨', 'à¦†à¦œ à¦•à¦¿  à¦¬à¦¾à¦° ?'),
(179, 178, 0, 0, 37, 23, 1, '2014-11-12 04:20:15', 'alamin', 'à¦†à¦œ à¦°à¦¬à¦¿à¦¬à¦¾à¦° à¥¤'),
(180, 1, 179, 0, 37, 20, 1, '2014-11-12 04:21:17', 'AL-AMIN', 'à¦¤à§à¦®à¦¿ à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦œà¦¾à¦¨à¦²à§‡ à¦†à¦œ à¦°à¦¬à¦¿à¦¬à¦¾à¦° ?'),
(183, 1, 1, 166, 37, 25, 1, '2014-11-13 03:45:06', 'à¦†à¦²-à¦†à¦®à¦¿à¦¨', 'yes.'),
(184, 0, 0, 0, 8, 25, 1, '2014-11-15 11:17:55', 'à¦†à¦²-à¦†à¦®à¦¿à¦¨', 'That''s good.'),
(186, 55, 0, 0, 24, 21, 1, '2014-11-24 22:28:02', 'alhadi', 'test'),
(187, 0, 0, 0, 24, 21, 1, '2014-11-24 22:30:01', 'alhadi', 'test'),
(189, 37, 0, 0, 19, 21, 1, '2014-11-24 23:57:21', 'alhadi', 'test'),
(192, 53, 0, 0, 21, 22, 1, '2014-11-25 03:43:51', 'sabik', 'ok'),
(195, 0, 0, 0, 38, 22, 1, '2014-11-25 04:52:20', 'sabik', 'à¦­à¦¾à¦² à¦¹à§Ÿà§‡à¦›à§‡ à¥¤ à¦šà¦¾à¦²à¦¿à§Ÿà§‡ à¦¯à¦¾à¦¨...'),
(198, 0, 0, 0, 20, 22, 1, '2014-11-25 05:08:43', 'sabik', 'à¦†à¦œ à¦•à¦¿ à¦¬à¦¾à¦° ? '),
(202, 0, 0, 0, 18, 25, 1, '2014-11-25 11:45:52', 'à¦†à¦²-à¦†à¦®à¦¿à¦¨', 'à¦¤à§‡à¦¸à§à¦¤'),
(204, 0, 0, 0, 38, 25, 1, '2014-11-25 16:59:01', 'à¦†à¦²-à¦†à¦®à¦¿à¦¨', 'test comment...'),
(205, 0, 0, 0, 24, 25, 1, '2014-11-25 17:01:52', 'à¦†à¦²-à¦†à¦®à¦¿à¦¨', 'TEST'),
(206, 0, 0, 0, 37, 25, 1, '2014-11-25 21:07:11', 'à¦†à¦²-à¦†à¦®à¦¿à¦¨', 'à¦Ÿà§‡à¦¸à§à¦Ÿ...'),
(207, 0, 0, 0, 18, 25, 1, '2014-11-25 21:31:16', 'à¦†à¦²-à¦†à¦®à¦¿à¦¨', 'test comments...'),
(208, 195, 0, 0, 38, 25, 1, '2014-11-25 21:32:18', 'à¦†à¦²-à¦†à¦®à¦¿à¦¨', 'à¦†à¦ªà¦¨à¦¾à¦•à§‡ à¦§à¦¨à§à¦¯à¦¬à¦¾à¦¦ à¥¤'),
(210, 0, 0, 0, 8, 22, 1, '2014-11-25 21:37:06', 'sabik', 'test'),
(211, 0, 0, 0, 22, 22, 1, '2014-11-25 21:39:06', 'sabik', 'test'),
(212, 0, 0, 0, 40, 21, 1, '2014-11-27 20:50:23', 'alhadi', 'test'),
(214, 0, 0, 0, 41, 21, 1, '2014-11-27 21:06:16', 'alhadi', 'test'),
(219, 0, 0, 0, 43, 21, 1, '2014-12-02 21:26:53', 'alhadi', 'test');

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
(0, 'mySQL SERVER.rar', 21);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

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
(52, 1, 'Test', 'test@gmail.com', 'Dhaka', 'Test message', 'Test message', '2014-11-13 17:46:03', '6cEfFqQ7XTXpPcneqquwJH7XmU6mia6V5Ao5LJUJUbqZyA6hmZ'),
(53, 1, 'à¦†à¦²-à¦†à¦®à¦¿à¦¨', 'cseal.amin.09@gmail.com', 'Fulbaria', 'Test message', 'Test message', '2014-11-13 17:44:29', 'GMZ89Tp5jPyaI2zGWfLCdA2yMsThudfyzn6rrCgzCBwQEbplhn');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

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
(33, 20, 'à¦ªà¦¿à¦à¦‡à¦šà¦ªà¦¿ à¦¶à¦¿à¦–à¦¤à§‡ à¦¹à¦²à§‡  à¦•à¦¿ à¦•à¦°à¦¤à§‡ à¦¹à¦¬à§‡ ?', '2014-09-18 19:27:14'),
(35, 23, 'what do you mean by php ?', '2014-11-05 07:31:56'),
(36, 21, 'testing....', '2014-12-07 20:28:53');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`userId`, `Full_name`, `userName`, `password`, `email`, `location`, `profile_img`, `date`) VALUES
(19, 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', 'test@g.com', 'mymensingh/bangladesh', 'Binodpur,Rajshahi,Bangladesh.jpg', 1409006262),
(20, 'AL-AMIN', 'AL-AMIN', '68ff84bacb01cad5dfce26afa5bdf519', 'cseal.amin.09@gmail.com', 'rajshahi/bangladesh', 'alamin.jpg', 1409007912),
(21, 'AL-HADI', 'alhadi', 'dd22018d0fb5799e6623143a7a674577', 'alhadicse@gmail.com', 'sylhet/bangladesh', 'Image1964.jpg', 1409035418),
(22, 'Sabik', 'sabik', 'dd22018d0fb5799e6623143a7a674577', 'sabik@gmail.com', 'antarctica/others', 'Image1939.jpg', 1409194903),
(23, 'alo', 'alamin', '0432497307e3ac8922b6377001aa32ad', 'luciendub@gmail.com', 'argentina/others', 'alamin3.jpg', 1415172530),
(25, 'à¦†à¦²-à¦†à¦®à¦¿à¦¨', 'à¦†à¦²-à¦†à¦®à¦¿à¦¨', '21232f297a57a5a743894a0e4a801fc3', 'tests@gmail.com', 'rajshahi/bangladesh', 'alamin4.jpg', 1415744261),
(26, 'test123', 'test123', '21232f297a57a5a743894a0e4a801fc3', 'test123@gmail.com', 'albania/others', '10371451_779197425470658_6240040098015949301_n.jpg', 1417540785),
(27, '102102', '102102', '802a53ee4185f931bb2669bdd179b175', '102102@gmail.com', 'albania/others', '3-sms-with-php-http-to-phone.png', 1417540878),
(28, '1021020', '1021020', 'baf0aa7a8eb4542df6c095ea19923226', '1021020@gmail.com', 'bagerhat/bangladesh', '1460042_10152810132469054_3467643188657206477_n.jpg', 1417541484);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

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
(28, 25, 21, 'why ?', '2014-08-29 08:11:23'),
(30, 24, 22, 'this is a problem name.', '2014-08-29 08:12:25'),
(31, 25, 22, 'what a question ?', '2014-08-29 10:50:34'),
(33, 12, 20, 'this is a question.', '2014-08-30 02:10:30'),
(34, 7, 20, 'test', '2014-08-30 02:10:55'),
(35, 30, 20, 'Yes. I know how to do.', '2014-08-30 15:07:09'),
(36, 31, 20, 'this is..', '2014-08-31 13:01:30'),
(37, 32, 21, 'à¦¤à¦¾à¦‡ à¦¨à¦¾à¦•à¦¿ ?', '2014-09-18 19:25:35'),
(38, 33, 21, 'http://w3schools.com à¦ à¦—à¦¿à§Ÿà§‡ à¦ªà¦¿à¦à¦‡à¦šà¦ªà¦¿ à¦à¦° à¦Ÿà¦¿à¦‰à¦Ÿà§‹à¦°à¦¿à§Ÿà¦¾à¦² à¦—à§à¦²à§‹ à¦¦à§‡à¦–à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¦¨ à¥¤', '2014-09-18 19:29:16'),
(39, 36, 25, 'ok.', '2014-12-07 20:29:28');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=75 ;

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
(73, 0, 20, '', 0, '2014-08-27 06:49:11', 'AL-AMIN', '', 'test<br/>', 'alamin.jpg'),
(74, 0, 21, '', 0, '2014-10-19 13:06:11', 'alhadi', '', 'nice<br/>', 'Image1964.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `widget_area`
--

INSERT INTO `widget_area` (`widget_id`, `widget_name`, `widget_sub`, `widget_content`, `widget_media`) VALUES
(2, 'copyright-left', 'copyright', '<p>This website are usingÂ <a class="ttip" title="PHP" href="http://php.net" target="_blank" data-toggle="tooltip">PHP</a>,Â PDO,Â CSS,Â JavaScript,Â  <a class="ttip" title="Twitter Bootstrap" href="http://twitter.github.com/bootstrap/" target="_blank" data-toggle="tooltip">Bootstrap</a>,Â  <a class="ttip" title="The dynamic stylesheet language" href="http://lesscss.org" target="_blank" data-toggle="tooltip">Less</a>,Â  <a class="ttip" title="Font Awesome" href="http://fortawesome.github.io/Font-Awesome" target="_blank" data-toggle="tooltip">Font Awesome</a> andÂ  <a class="ttip" title="PHP Template Engine" href="http://smarty.net" target="_blank" data-toggle="tooltip">Smarty.</a></p>', 0x332d736d732d776974682d7068702d687474702d746f2d70686f6e652e706e67),
(4, 'social-contact', 'Social Contact', '<ul>\r\n<li><a href="http://facebook.com/groupmember" target="_blank">\r\n<i class="fa fa-facebook fb"></i> Â Facebook</a></li>\r\n\r\n<li><a href="http://twitter.com/groupmember" target="_blank">\r\n<i class="fa fa-twitter tt"></i> Â Twitter</a></li>\r\n\r\n<li><a href="http://bd.linkedin.com/in/groupmember" target="_blank">\r\n<i class="fa fa-linkedin link"></i> Â LinkedIn</a></li>\r\n\r\n<li><a href="https://plus.google.com/u/0/groupmember" target="_blank">\r\n<i class="fa fa-google-plus gog"></i> Â Google +</a></li>\r\n\r\n<li><a href="http://skype.com/groupmember" target="_blank">\r\n<i class="fa fa-skype sk"></i> Â Skype</a></li>\r\n</ul><!--  .nav .nav-list -->', 0x676f6f676c65627573322e6a7067),
(6, 'nice', 'nice', 'nice', 0x742e6a7067),
(7, 'e-book', 'mySQL Bangla e-Book', 'One mySQL Bangla e-Book...you can take it free by download...', 0x4e756d65726963616c5f7065726d697373696f6e2e706e67),
(8, 'about', 'About Us', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, optio quaerat quae nobis ducimus tenetur commodi dolor fugiat voluptatum! Explicabo iure quis tempora sequi rem, amet, voluptatibus porro nobis hic.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, optio quaerat quae nobis ducimus tenetur commodi dolor fugiat voluptatum! Explicabo iure quis tempora sequi rem, amet, voluptatibus porro nobis hic. \r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, optio quaerat quae nobis ducimus tenetur commodi dolor fugiat voluptatum! Explicabo iure quis tempora sequi rem, amet, voluptatibus porro nobis hic. \r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, optio quaerat quae nobis ducimus tenetur commodi dolor fugiat voluptatum! Explicabo iure quis tempora sequi rem, amet, voluptatibus porro nobis hic. ', 0x37316a6f712d747870614c2e5f534c313530305f2e6a7067),
(9, 'php-project', 'PHP Project', 'URL: <a href="http://fairadbd.net" target="_blank">fairadbd.net</a>', 0x6f7665726561722d73747564696f2d776972656c6573732d746974616e69756d2d7374616e646172642d7468727172746c6566742d4f2e706e67),
(14, 'news', 'News', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi harum perspiciatis obcaecati tempora natus soluta iure, in ducimus nisi nobis vero, nam quasi esse neque quidem debitis eligendi quod quam.', 0x612e706e67);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
