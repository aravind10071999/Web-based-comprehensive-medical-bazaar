-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2020 at 07:04 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `health-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(5) NOT NULL AUTO_INCREMENT,
  `aname` varchar(20) NOT NULL,
  `apass` varchar(20) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `apass`) VALUES
(1, 'admin', 'sakthi');

-- --------------------------------------------------------

--
-- Table structure for table `bmi`
--

CREATE TABLE IF NOT EXISTS `bmi` (
  `bid` int(5) NOT NULL AUTO_INCREMENT,
  `weight` text NOT NULL,
  `height` text NOT NULL,
  `pressure` text NOT NULL,
  `sugar` text NOT NULL,
  `bmi` text NOT NULL,
  `bdate` date NOT NULL,
  `user` text NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `bmi`
--

INSERT INTO `bmi` (`bid`, `weight`, `height`, `pressure`, `sugar`, `bmi`, `bdate`, `user`) VALUES
(1, '80', '1.85', '120', '90', '23.374726077429', '2019-10-10', 'sakthi'),
(2, '75', '1.85', '110', '100', '21.913805697589', '2019-10-09', 'ram'),
(3, '40', '1.4', '30', '80', '20.408163265306', '2019-11-26', 'mani'),
(4, '40', '1.4', '30', '80', '20.408163265306', '2019-11-26', 'mani'),
(5, '30', '1.6', '150', '150', '11.71875', '2019-12-05', 'rajeshwari');

-- --------------------------------------------------------

--
-- Table structure for table `dietplanner`
--

CREATE TABLE IF NOT EXISTS `dietplanner` (
  `did` int(5) NOT NULL AUTO_INCREMENT,
  `dietfor` text NOT NULL,
  `sug1` text NOT NULL,
  `sug2` text NOT NULL,
  `sug3` text NOT NULL,
  `pimage` text NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `dietplanner`
--

INSERT INTO `dietplanner` (`did`, `dietfor`, `sug1`, `sug2`, `sug3`, `pimage`) VALUES
(1, 'obesity', 'weight loss', 'Donâ€™t skip meals\r\nEat more frequently to lose more fat\r\nGo for home-made foods\r\nStock healthy foods in your kitchen and refrigerator\r\nInclude all food groups in your diet plan\r\nChoose smaller plates and bowls, this helps in eating less\r\nReduce usage of sugar and salt\r\nInclude fruits and vegitables to your dishes', '', 'obesity.jpg'),
(2, 'sugar', 'sugar control for aged persons', 'take rice in morning\r\ntake idy during afternoon\r\ntake dosa during dinner ', '', 'sugar.jpg'),
(3, 'Weight gain', '<li>3 to 4 slices of whole wheat bread toast with peanut butter + 3 egg whites + 1 full egg omelette or </li>\r\n<li>1 cup of low fat milk + 1 scoop of whey protein+ 150 gms of oatmeal + 1 banana+ a few almonds+ walnuts. </li>\r\n<li>1 orange or apple or 1 cup of green tea + 2 to 3 multigrain biscuits </li>', '', '', 'weight-gain.jpg'),
(4, 'diet', 'try eating breakfast everyday and exercise often', '', '', 'crossinthegrass.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` int(5) NOT NULL AUTO_INCREMENT,
  `feedback` text NOT NULL,
  `uname` text NOT NULL,
  `reply` text NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `feedback`, `uname`, `reply`) VALUES
(1, 'need tablets for cold', 'jeevi', 'coldrin'),
(2, ' i want to orange', 'mani', 'ok ,oranged your needed fruit');

-- --------------------------------------------------------

--
-- Table structure for table `homeremedies`
--

CREATE TABLE IF NOT EXISTS `homeremedies` (
  `hid` int(5) NOT NULL AUTO_INCREMENT,
  `hremfor` text NOT NULL,
  `sug2` text NOT NULL,
  `sug1` text NOT NULL,
  `sug3` text NOT NULL,
  `pimage` text NOT NULL,
  PRIMARY KEY (`hid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `homeremedies`
--

INSERT INTO `homeremedies` (`hid`, `hremfor`, `sug2`, `sug1`, `sug3`, `pimage`) VALUES
(1, 'cold', 'Chicken soup', 'Chicken soup may not be a cure-all, but itâ€™s a great choice when youâ€™re sick. Research suggests that enjoying a bowl of chicken soup with vegetables, prepared from scratch or warmed from a can, can slow the movement of neutrophils in your body. Neutrophils are a common type of white blood cell. They help protect your body from infection. When theyâ€™re moving slowly, they stay more concentrated in the areas of your body that require the most healing.  The study found that chicken soup was effective for reducing the symptoms of upper respiratory infections in particular. Low-sodium soup also carries great nutritional value and helps keep you hydrated. Itâ€™s a good choice, no matter how youâ€™re feeling.', 'test', 'cold.jpg'),
(2, 'diabetes', 'Drink Water and Stay Hydrated', 'Control Your Carb Intake', 'Increase Your Fiber Intake', 'diabetes.jpg'),
(3, 'blood pressure', 'Eat more potassium-rich foods', 'Reduce your sodium intake', 'Eat dark chocolate or cocoa', 'bp.jpg'),
(4, 'fever', '', '<li>Drink plenty of fluids. Fever can cause fluid loss and dehydration, so drink water, juices</li>\n<li>You need rest to recover, and activity can raise your body temperature</li>\n<li>Stay cool. Dress in light clothing, keep the room temperature cool and sleep with only a sheet or light blanket.</li>', '', 'fever.jpg'),
(5, 'cold', '', 'take pepper and it''s related organic foods', '', '10035.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `oid` int(5) NOT NULL AUTO_INCREMENT,
  `pid` int(5) NOT NULL,
  `qty` int(5) NOT NULL,
  `uid` text NOT NULL,
  `odate` datetime NOT NULL,
  `status` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `pid`, `qty`, `uid`, `odate`, `status`) VALUES
(1, 2, 10, 'jeevi', '2018-03-06 08:41:33', 1),
(2, 2, 5, 'jeevi', '2018-03-06 08:42:25', 1),
(3, 2, 15, 'jeevi', '2018-03-06 08:51:31', 1),
(4, 2, 2, 'jeevi', '2018-03-06 08:51:46', 1),
(5, 3, 5, 'jeevi', '2018-11-30 08:04:11', 0),
(6, 1, 10, 'rajeshwari', '2019-01-26 09:35:28', 1),
(7, 3, 5, 'mani', '2019-11-26 08:12:26', 1),
(8, 1, 10, 'rajeshwari', '2020-01-06 11:32:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` longtext NOT NULL,
  `pdescp` longtext NOT NULL,
  `cat` text NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `pimage` varchar(200) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `pdescp`, `cat`, `price`, `qty`, `pimage`) VALUES
(1, 'Herb', 'Herb', 'Herb', 300, 170, 'herb.jpg'),
(2, 'Apple', 'Apple', 'Fruits', 120, 3, 'apple.jpg'),
(3, 'carrot', 'carrot', 'vegetable', 60, 37, 'carrot.jpg'),
(4, 'banana', 'banana is a good for health', 'Fruits', 50, 1, 'images (2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `usid` int(5) NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `usname` text NOT NULL,
  `uspass` text NOT NULL,
  `uphone` varchar(20) NOT NULL,
  `uemail` text NOT NULL,
  PRIMARY KEY (`usid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`usid`, `fname`, `usname`, `uspass`, `uphone`, `uemail`) VALUES
(1, 'jeevi', 'sakthi', '12345', '9894461620', 'jeevi@gmail.com'),
(2, 'rajeshwari', 'rajeshwari', 'rajeshwari', '96745645645', 'rajeshwari@gmail.com'),
(8, 'ramkumar', 'ram', 'Ram@12345', '9994915435', 'ram@gmail.com'),
(9, 'chellamani', 'mani', 'ASD#mani', '6234897654', 'mani@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
