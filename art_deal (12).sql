-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 06, 2018 at 05:41 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `art_deal`
--
CREATE DATABASE IF NOT EXISTS `art_deal` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `art_deal`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `contact` bigint(12) NOT NULL,
  `address` varchar(80) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `contact`, `address`, `emailid`, `password`) VALUES
(1, 'Nitin', 9448598482, 'Gulbarga', 'adnitinchoudharyn14@gmail.com', 'Nc12345678'),
(2, 'Lamani', 9988776622, 'Goa', 'pandunaik18@gmail.com', 'Lp12345678');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE IF NOT EXISTS `artist` (
  `artist_id` bigint(255) NOT NULL AUTO_INCREMENT,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `dob` date NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `contact` bigint(12) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` text NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `sample_paint1` varchar(300) NOT NULL,
  `sample_paint2` varchar(300) NOT NULL,
  `profile_img` varchar(300) NOT NULL,
  `experience` int(10) NOT NULL,
  `website_link` varchar(200) NOT NULL,
  `acc_status` varchar(100) NOT NULL,
  `rank_review` float NOT NULL,
  `is_portrait` varchar(200) NOT NULL,
  `is_teacher` varchar(200) NOT NULL,
  `is_wallpainter` varchar(200) NOT NULL,
  `notification` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`artist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artist_id`, `first_name`, `last_name`, `dob`, `emailid`, `contact`, `address`, `city`, `qualification`, `sample_paint1`, `sample_paint2`, `profile_img`, `experience`, `website_link`, `acc_status`, `rank_review`, `is_portrait`, `is_teacher`, `is_wallpainter`, `notification`, `description`, `password`) VALUES
(1, 'pandu', 'lamani', '1995-08-11', 'pandunaik.18.pn@gmail.com', 9049355848, 'two coss st jose de areal goa', 'margao', 'bca', '1133437.jpg', '18508596.jpg', '1133437.jpg', 3, 'null', 'Approved', 3.5, '1', '1', '', '1', '', 'Lp12345678'),
(3, 'Rahul', 'naik', '1996-06-17', 'rnaik.@gmail.com', 9448598482, 'karkala', 'Mangalore', 'Bva', '27678124.jpg', '-31999829.jpg', '', 3, 'null', 'Approved', 5, '1', '1', '1', '1', '', 'Rn12345678'),
(5, 'Nitin', 'choudhary', '1997-10-14', 'nitinchoudharyn14@gmail.com', 9049355848, 'Marnamekatte', 'Mangalore', 'Bva', '330747960.jpg', '-335864266.jpg', '', 4, 'http://www.nnc.com', 'Approved', 4, '1', '1', '1', '1', '', 'Nc12345678'),
(6, 'Abhishek', 'tc', '1996-01-29', 'abhitc.@gmail.com', 9049355848, 'Marnamekatte', 'Mangalore', 'bca', '338270743.jpg', '339769417.jpg', '', 4, 'http://www.nnc.com', 'Approved', 5, '1', '1', '1', '1', '', 'Ab12345678'),
(7, 'Lionel', 'Messi', '1987-02-07', 'lion@gmail.com', 9049355848, 'karkala', 'Mangalore', 'Bva', '338270743.jpg', '344796949.jpg', '', 5, 'http://www.lionc.com', 'Approved', 0, '1', '1', '1', '1', '', 'Lm12345678'),
(8, 'Cristiano ', 'Ronaldo', '1978-06-06', 'cr7@yahoo.com', 9049355848, 'surthakal', 'manipal', 'bca', '-349688397.jpg', '-350179255.jpg', '', 3, 'http://www.cr.com', 'Approved', 0, '1', '1', '1', '1', '', 'Cr12345678'),
(9, 'Michael', 'Jordan', '1985-09-09', 'jordarn23@gmail.com', 9049355848, 'vidyagiri', 'moodbidri', 'DSF', '-351807628.jpg', '-353052217.jpg', '', 4, 'http://www.mj.com', 'Approved', 0, '1', '1', '1', '1', '', 'Mj12345678'),
(10, 'John', 'Cena', '1983-11-14', 'jone@gmail.com', 9049355848, 'karkala', 'Udupi', 'Bva', '-359980819.jpg', '364298823.jpg', '1779252654.jpg', 3, 'http://www.jc.com', 'Approved', 0, '1', '1', '1', '1', '', 'Jc12345678'),
(11, 'will', 'smith', '1992-07-14', 'smith@gmail.com', 9049355848, 'karkala', 'Mangalore', 'Bva', '-365923942.jpg', '370853009.jpg', '-1572383047.jpg', 2, 'http://www.ws.com', 'Approved', 0, '1', '1', '1', '1', '', 'Ws12345678');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(100) NOT NULL,
  `paintings_id` bigint(100) NOT NULL,
  `cdate` date NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(100) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(100) NOT NULL,
  `artist_id` bigint(100) NOT NULL,
  `pwtid` bigint(200) NOT NULL,
  `paintings_id` bigint(100) NOT NULL,
  `ordered_date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `rating` float NOT NULL,
  `comment` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `artist_id`, `pwtid`, `paintings_id`, `ordered_date`, `status`, `rating`, `comment`) VALUES
(1, 2, 3, 1, 0, '2018-02-28', 'Delivered', 5, 'Nice work'),
(2, 2, 3, 0, 3, '2018-02-28', 'Delivered', 5, 'Good one'),
(3, 2, 1, 0, 1, '2018-03-05', 'Delivered', 3.5, 'nice one'),
(5, 5, 5, 0, 6, '2018-03-05', 'Delivered', 3, 'average'),
(6, 5, 6, 0, 7, '2018-03-05', 'Delivered', 5, 'very good'),
(7, 5, 5, 5, 0, '2018-03-05', 'Delivered', 5, 'Great job'),
(10, 2, 10, 0, 11, '2018-03-05', 'Artist rejected', 0, ''),
(11, 2, 1, 0, 5, '2018-03-05', 'Artist rejected', 0, ''),
(12, 6, 5, 0, 18, '2018-03-05', 'Getting ready', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `paintings`
--

CREATE TABLE IF NOT EXISTS `paintings` (
  `paintings_id` bigint(100) NOT NULL AUTO_INCREMENT,
  `artist_id` bigint(20) NOT NULL,
  `paint_name` varchar(300) NOT NULL,
  `paint_image1` varchar(300) NOT NULL,
  `paint_image2` varchar(300) NOT NULL,
  `paint_image3` varchar(300) NOT NULL,
  `paint_type` varchar(200) NOT NULL,
  `paint_date` date NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` int(30) NOT NULL,
  `count_view` int(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`paintings_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `paintings`
--

INSERT INTO `paintings` (`paintings_id`, `artist_id`, `paint_name`, `paint_image1`, `paint_image2`, `paint_image3`, `paint_type`, `paint_date`, `description`, `price`, `count_view`, `status`) VALUES
(1, 1, 'qqq', '42649644.jpg', '-58098769.jpg', '59137981.jpg', 'sketch', '2018-02-27', 'its big painting', 2000, 17, 'Sold'),
(3, 3, 'z', '77307523.jpg', '78164137.jpg', '79815107.jpg', 'Oil', '2018-02-13', 'football is life', 3000, 12, 'Sold'),
(5, 1, 'Wish', '-25917835.jpg', '27678124.jpg', '-31999829.jpg', 'Water', '2018-03-01', 'Spent much time on this', 5000, 7, 'Approved'),
(6, 5, 'Snset', '-371822948.jpg', '-379751533.jpg', '-384930946.jpg', 'oil', '2018-03-04', 'nice one', 5000, 5, 'Sold'),
(7, 6, 'good day', '-387482796.jpg', '387956101.jpg', '-389952879.jpg', 'Dots', '2018-02-13', 'have a nice day', 3000, 8, 'Sold'),
(8, 7, 'Waterfall', '392004437.jpg', '-392440087.jpg', '396318305.jpg', 'Water', '2017-11-14', 'cricket is our life', 700, 1, 'Approved'),
(9, 8, 'Beauty', '-427213635.jpg', '438865555.jpg', '439368440.jpg', 'sketch', '2018-02-18', 'wonders', 4000, 0, 'Approved'),
(10, 9, 'Adventure', '-442134098.jpg', '450482346.jpg', '445878648.jpg', 'Sketch', '2017-10-30', 'world', 3500, 0, 'Approved'),
(11, 10, 'addidas', '-451028361.jpg', '-456515900.jpg', '-462474101.jpg', 'Dots', '2018-01-08', 'neo', 5000, 5, 'Approved'),
(12, 11, 'galaxy', '464877441.jpg', '-466728490.jpg', '-468408455.jpg', 'Water', '2017-12-14', 'wow', 5000, 3, 'Approved'),
(13, 11, 'boat', '-469389719.jpg', '472596143.jpg', '476040770.jpg', 'Dots', '2017-06-07', 'smile', 6000, 0, 'Approved'),
(14, 11, 'forest', '-479914105.jpg', '-482375903.jpg', '-483092535.jpg', 'Oil', '2017-01-12', 'happy', 8000, 2, 'Approved'),
(15, 11, 'nike', '-490219761.jpg', '491000978.jpg', '493559743.jpg', 'sketch', '2016-06-08', 'amazing', 4000, 0, 'Approved'),
(16, 11, 'spider web', '496651889.jpg', '-500781971.jpg', '-456515900.jpg', 'Sketch', '2017-07-12', 'good', 7000, 1, 'Approved'),
(17, 11, 'wonders of world', '-504216930.jpg', '-508310317.jpg', '511299511.jpg', 'Oil', '2017-09-06', 'places are beautiful', 4000, 0, 'Approved'),
(18, 5, 'Spark', '2139766790.jpg', '-2134702957.jpg', '-2125100273.jpg', 'sketch', '2018-03-05', 'Sparking light work', 2000, 2, 'Sold');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE IF NOT EXISTS `prices` (
  `id` bigint(50) NOT NULL AUTO_INCREMENT,
  `artist_id` bigint(255) NOT NULL,
  `portrait_price` int(50) NOT NULL,
  `wallpaint_price` int(50) NOT NULL,
  `teaching_price` int(50) NOT NULL,
  PRIMARY KEY (`id`,`artist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `artist_id`, `portrait_price`, `wallpaint_price`, `teaching_price`) VALUES
(1, 1, 1200, 0, 500),
(3, 3, 200, 800, 450),
(5, 5, 3000, 600, 1000),
(6, 6, 400, 700, 450),
(7, 7, 600, 700, 800),
(8, 8, 700, 650, 400),
(9, 9, 500, 900, 300),
(10, 10, 800, 700, 500),
(11, 11, 900, 800, 600);

-- --------------------------------------------------------

--
-- Table structure for table `pwt`
--

CREATE TABLE IF NOT EXISTS `pwt` (
  `id` bigint(100) NOT NULL AUTO_INCREMENT,
  `artist_id` bigint(255) NOT NULL,
  `user_id` bigint(100) NOT NULL,
  `portrait` varchar(50) NOT NULL,
  `wallpaint` varchar(50) NOT NULL,
  `teach` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  `user_img` varchar(500) NOT NULL,
  `price` bigint(100) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pwt`
--

INSERT INTO `pwt` (`id`, `artist_id`, `user_id`, `portrait`, `wallpaint`, `teach`, `type`, `user_img`, `price`, `status`) VALUES
(1, 3, 2, '1', '', '', 'Sketch Portrait', '1133437.jpg', 200, 'finalaccept'),
(2, 3, 2, '', '1', '', 'Picture Design', '18508596.jpg', 450, 'finalaccept'),
(3, 3, 2, '', '', '1', 'Portrait Drawing', '', 450, 'ATreject'),
(4, 5, 5, '', '1', '', 'Picture Design', '711683454.jpg', 1000, 'finalaccept'),
(5, 5, 5, '1', '', '', 'Sketch Portrait', '604299491.jpg', 3000, 'finalaccept'),
(6, 1, 2, '1', '', '', 'Sketch Portrait', '1133437.jpg', 1200, 'adAccept');

-- --------------------------------------------------------

--
-- Table structure for table `sitefeedback`
--

CREATE TABLE IF NOT EXISTS `sitefeedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `emailid` varchar(80) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` bigint(100) NOT NULL AUTO_INCREMENT,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `dob` date NOT NULL,
  `contact` bigint(12) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile_img` varchar(500) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `dob`, `contact`, `emailid`, `address`, `city`, `password`, `profile_img`) VALUES
(2, 'Nitin', 'choudhary', '1997-10-14', 9049355848, 'Nitinchoudharyn14@gmail.com', 'Marnamekatte', 'Mangalore', 'Nc12345678', ''),
(4, 'Abhishek', 'tc', '1997-06-09', 9049355848, 'abhishekgowda4258@gmail.com', 'Marnamekatte', 'Mangalore', 'Ab12345678', ''),
(5, 'Harish', 'v', '1997-03-11', 9049355848, 'Harish@gmail.com', 'Marnamekatte', 'Mangalore', 'Ha12345678', ''),
(6, 'Roy', 'choudhary', '1997-10-14', 9049355848, 'Roychoudharyn14@gmail.com', 'Marnamekatte', 'Mangalore', 'Rc12345678', '');

-- --------------------------------------------------------

--
-- Table structure for table `verify`
--

CREATE TABLE IF NOT EXISTS `verify` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `acc_id` bigint(50) NOT NULL,
  `otp` varchar(10) NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
