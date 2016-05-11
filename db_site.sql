-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2016 at 12:41 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(2) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `admin_email_address` varchar(256) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_time` time NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email_address`, `admin_password`, `status`, `date_time`) VALUES
(1, 'sajan poddar', 'sajanpoddar@ymail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE IF NOT EXISTS `tbl_blog` (
  `blog_id` int(6) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) NOT NULL,
  `category_id` int(3) NOT NULL,
  `blog_title` varchar(256) NOT NULL,
  `blog_description` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_date_time` date NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `user_id`, `category_id`, `blog_title`, `blog_description`, `status`, `created_date_time`) VALUES
(1, 1, 1, 'nstu', '<p>\r\n <em><span>......&nbsp; i really miss i<strong>t....</strong></span></em></p>\r\n', '0', '2015-08-06'),
(2, 1, 2, 'cricket', '<p>\r\n a commercial game....</p>\r\n', '0', '2015-08-09'),
(3, 1, 3, 'neymar', '<p>\r\n one of the best player..........</p>\r\n', '0', '2015-08-09'),
(4, 1, 2, 'IPL', '<p>\r\n IPL, is a game of cricket.....</p>\r\n', '0', '2015-08-09'),
(6, 1, 2, 'asia cup', '<h1>\r\n <u><em><strong><span >bd will win&nbsp; asia cup.....</span></strong></em></u></h1>\r\n', '0', '2016-03-06'),
(7, 2, 1, 'aiub', '<p>\r\n <strong><em><span><span >one of the best private university....</span></span></em></strong></p>\r\n', '0', '2016-03-28'),
(8, 2, 2, 'icc', '<h1>\r\n <span >indian cricket council...</span></h1>\r\n', '0', '2016-03-28'),
(10, 1, 1, 'test for wwswwg', '<h1><strong>nstu</strong></h1>\r\n\r\n<p><img alt="logo" src="punji/images/logo/1"  height:80px; width:50px" /></p>\r\n\r\n<table align="center" border="1" cellpadding="1" cellspacing="1"  width:100%" summary="blog_s">\r\n <caption>blog</caption>\r\n <tbody>\r\n  <tr>\r\n   <td>\r\n   <hr />\r\n   <hr />\r\n   <hr />\r\n   <hr />\r\n   <p>R</p>\r\n   </td>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td>&nbsp;</td>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n  <tr>\r\n   <td>&nbsp;</td>\r\n   <td>&nbsp;</td>\r\n  </tr>\r\n </tbody>\r\n</table>\r\n\r\n<p><a id="blog" name="blog"></a></p>\r\n', '0', '2016-04-24'),
(13, 1, 1, 'What are you going to get', '<h1>&nbsp;</h1>\r\n\r\n<p><strong>Walletka MINI</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>- capacity for <strong>5</strong> cards + cash</p>\r\n\r\n<p>- hand-waxed thread</p>\r\n\r\n<p>- laser cut (perfect cut accuracy)</p>\r\n\r\n<p>- hand-stitched</p>\r\n\r\n<p>- high-quality Italian leather</p>\r\n\r\n<p>- engraved initials, nickname or name on the front side (up to <strong>15 characters</strong>)</p>\r\n\r\n<p>- your personal choice of the thread color</p>\r\n\r\n<p>- 3 color options of the leather (space gray,&nbsp;cognac brown and midnight blue)</p>\r\n\r\n<p>Do you need more space for credit cards? Then your perfect choice is Walletka classic.</p>\r\n\r\n<p><strong>Walletka CLASSIC&nbsp;</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>- capacity for <strong>10 cards</strong> + cash</p>\r\n\r\n<p>- hand-waxed thread</p>\r\n\r\n<p>- laser cut (perfect cut accuracy)</p>\r\n\r\n<p>- hand-stitched</p>\r\n\r\n<p>- high-quality Italian leather</p>\r\n\r\n<p>- engraved initials, nickname or name on the front side (up to <strong>25 characters</strong>)</p>\r\n\r\n<p>- your personal choice of the thread color</p>\r\n\r\n<p>- 3 color options of the leather (cognac brown, midnight blue and space gray)</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', '2016-05-11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `category_id` int(3) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `category_description` text NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`) VALUES
(1, 'university', 'nstu'),
(2, 'game', ''),
(3, 'player', 'a public figure'),
(4, 'raihan', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE IF NOT EXISTS `tbl_comments` (
  `comments_id` int(5) NOT NULL AUTO_INCREMENT,
  `blog_id` int(3) NOT NULL,
  `user_id` int(5) NOT NULL,
  `comments_description` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`comments_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`comments_id`, `blog_id`, `user_id`, `comments_description`, `status`) VALUES
(1, 6, 0, ' i hope so', 0),
(2, 6, 1, ' i think so', 0),
(3, 0, 0, ' ', 0),
(4, 4, 1, ' ', 0),
(5, 4, 1, ' have nothing to say...', 0),
(6, 4, 1, ' tw', 0),
(7, 6, 1, ' df', 0),
(8, 6, 1, ' jhj', 0),
(9, 4, 1, ' sf', 0),
(10, 3, 1, ' one of the bset', 0),
(11, 3, 1, ' nice one', 0),
(12, 3, 1, ' perfect', 0),
(13, 3, 1, ' good one', 0),
(14, 3, 2, ' superb player', 0),
(15, 7, 2, ' i also say..', 0),
(16, 8, 2, ' every body think so...', 0),
(17, 7, 2, 'have nothing to say', 0),
(18, 8, 2, ' cccc', 0),
(19, 6, 2, ' bt we lose ..', 0),
(20, 1, 2, ' best one ', 0),
(21, 7, 1, ' why?', 0),
(22, 8, 1, ' fuck icc', 0),
(23, 7, 5, ' a private ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `address` text NOT NULL,
  `mobile_no` varchar(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zip_code` varchar(4) NOT NULL,
  `activation_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'if activation_status == o user inactive activation status==1 user active',
  `admin_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'if admin_status == o user inactive admin_status==1 user active',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `first_name`, `last_name`, `email_address`, `password`, `address`, `mobile_no`, `city`, `gender`, `country`, `zip_code`, `activation_status`, `admin_status`) VALUES
(1, 'sajan', 'poddar', 'sajanpoddar98@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '                hospital road, lakshmipur                                ', '01723264311', 'luxmipur', 'male', 'BD', '1205', 1, 1),
(2, 'pritam', 'poddar', 'pritampoddar@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', 'male', 'BD', '', 1, 1),
(3, 'FOKA', 'SUJON', 'FOKASUJON@GMAIL.COM', '827ccb0eea8a706c4c34a16891f84e7b', 'ASD', '', '', 'male', 'BD', '', 1, 0),
(4, 'SHUVRO', 'SAHA', 'shuvrosaha@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'bd', '', 'bd', 'male', 'BD', '1234', 1, 0),
(5, 'shuvro', 'roy', 'shuvroroy@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', 'male', 'BD', '', 1, 0),
(6, 'fds', 'dfs', 'sajanpoddar09@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'sfsaf', 'af', '017', 'male', 'AT', 'fas', 0, 0),
(7, 'sajan', 'poddar', 'sajanpoddar8@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '', 'sf', 'male', 'BD', 'asf', 0, 1),
(8, 'sajan', 'poddar', 'sajanpoddar9@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', 'male', 'BD', '', 0, 0),
(9, 'sojib', 'saha', 'sojibs@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', 'male', 'AR', '', 1, 1),
(10, 'sojib', 'sujons', 's@gmail.com', '202cb962ac59075b964b07152d234b70', 'adf', '', 'adf', 'male', 'AZ', '3700', 1, 0),
(11, 'puja', 'poddar', 'pujapoddar@gmail.com', '202cb962ac59075b964b07152d234b70', 'akjdkj', '234', '', 'male', 'BD', '3700', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
