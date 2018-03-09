-- phpMyAdmin SQL Dump
-- version 4.0.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2016 at 02:44 PM
-- Server version: 5.5.49
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agrotecgroup_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_config`
--

CREATE TABLE IF NOT EXISTS `app_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `fax` int(15) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `website` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `app_logo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `app_config`
--

INSERT INTO `app_config` (`id`, `name`, `email`, `address`, `postal_code`, `fax`, `phone`, `website`, `currency`, `logo`, `app_logo`) VALUES
(1, 'Agrotec Group', 'admin@agrotecgroup.com', '45 Gulshan Avenue, Gulshan-1 Circle, Dhaka', '1212', 562316, '01711428814', 'www.agrotecgroup.com', 'tk', 'imgs/logo', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(50) NOT NULL,
  `brand_address` varchar(100) NOT NULL,
  `brand_desc` varchar(100) NOT NULL,
  `brand_sts` int(11) NOT NULL,
  `delete_by` varchar(20) NOT NULL,
  `delete_time` datetime NOT NULL,
  PRIMARY KEY (`brand_id`),
  KEY `project_id` (`brand_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `brand_address`, `brand_desc`, `brand_sts`, `delete_by`, `delete_time`) VALUES
(2, 'TVS', 'srtsrt srtyrthrthrt xdfghg', 'setyryhe56u  aergert', 1, '', '0000-00-00 00:00:00'),
(3, 'TVS', 'srt5ysrty', 'srtysrty', 1, '', '0000-00-00 00:00:00'),
(4, 'TVS', 'rtysrt', 'wrtyryr', 1, '', '0000-00-00 00:00:00'),
(5, 'TVS', 'sery', 'aery', 1, '', '0000-00-00 00:00:00'),
(6, 'gfh', 'stgh', 'srth', 1, '', '0000-00-00 00:00:00'),
(7, 'srtuyh', 'srtuhsr', 'uh', 1, '', '0000-00-00 00:00:00'),
(8, 'aerg', 'aerg', 'aerg', 1, '', '0000-00-00 00:00:00'),
(9, 'srth', 'srths', 'rth', 1, '', '0000-00-00 00:00:00'),
(10, 'sdryj', 'sdryj', 'dryj', 1, '', '0000-00-00 00:00:00'),
(11, 'sdrtjh', 'srth', 'srth', 1, '', '0000-00-00 00:00:00'),
(12, 'saey', 'aseyae', 'ty', 1, '', '0000-00-00 00:00:00'),
(13, 'dryhj', 'ryuryu', 'jy', 1, '', '0000-00-00 00:00:00'),
(14, 'srty', 'srthsrth', 'sth', 1, '', '0000-00-00 00:00:00'),
(15, 'sey', '', 'wty', 1, 'admin', '2016-08-22 03:33:51'),
(16, 'TVS', 'Tongi', 'Tongi', 0, '', '0000-00-00 00:00:00'),
(17, 'Bajaj', 'Uttara', '', 0, '', '0000-00-00 00:00:00'),
(18, 'Hiro Honda', 'Tajgon', '', 0, '', '0000-00-00 00:00:00'),
(19, 'Karnaphuli', '', '', 0, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `clientId` int(11) NOT NULL AUTO_INCREMENT,
  `clientName` varchar(20) NOT NULL,
  `clients_address` varchar(150) NOT NULL,
  `clients_phone` varchar(15) NOT NULL,
  `clients_add_date` datetime NOT NULL,
  `delete_time` datetime NOT NULL,
  `delete_by` varchar(50) NOT NULL,
  `clients_sts` int(11) NOT NULL,
  PRIMARY KEY (`clientId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`clientId`, `clientName`, `clients_address`, `clients_phone`, `clients_add_date`, `delete_time`, `delete_by`, `clients_sts`) VALUES
(17, 'Sabbir Ahammed', 'B-14, D-10, Uttara Officers Quarter, Sector-8, Uttara Dhaka-1230', '01717561922', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0),
(18, 'Nasir Uddin', 'Old Town Dhaka', '01711428814', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0),
(19, 'Johurul', 'Housbuilding', '01916784511', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `department_info`
--

CREATE TABLE IF NOT EXISTS `department_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(50) NOT NULL,
  `sts` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `department_info`
--

INSERT INTO `department_info` (`id`, `dept_id`, `dept_name`, `sts`) VALUES
(1, 1008, 'Information Technology (IT)', 0),
(2, 1002, 'Accounts', 0),
(3, 1001, 'Marketing', 0),
(4, 1003, 'Admin/HR', 0),
(5, 1004, 'Business Development', 1),
(6, 1005, 'Customer Care', 1),
(7, 1006, 'Advertisement & Branding', 1),
(8, 1007, 'Store & Delivery', 1),
(9, 1009, 'Logistic', 1),
(10, 1010, 'Incharge', 0),
(11, 1011, 'Worker', 1);

-- --------------------------------------------------------

--
-- Table structure for table `emp_edu_info`
--

CREATE TABLE IF NOT EXISTS `emp_edu_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `e_id` varchar(20) NOT NULL,
  `edu_fild` varchar(100) NOT NULL,
  `edu_inst` varchar(100) NOT NULL,
  `edu_group` varchar(50) NOT NULL,
  `edu_result` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `e_id` (`e_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `emp_edu_info`
--

INSERT INTO `emp_edu_info` (`id`, `e_id`, `edu_fild`, `edu_inst`, `edu_group`, `edu_result`) VALUES
(1, '10002', 'SSC', 'Cantt. Shaheed Ramizuddin High School, Dhaka Cantonment', 'Science', 'First'),
(2, '10002', 'HSC', 'Notre Dam College, Dhaka', 'Science', 'First');

-- --------------------------------------------------------

--
-- Table structure for table `emp_info`
--

CREATE TABLE IF NOT EXISTS `emp_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `e_id` varchar(10) NOT NULL,
  `e_dept` varchar(50) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `e_name` varchar(100) NOT NULL,
  `e_f_name` varchar(100) NOT NULL,
  `e_m_name` varchar(100) NOT NULL,
  `e_gender` varchar(50) NOT NULL,
  `e_b_date` date NOT NULL,
  `e_des` varchar(50) NOT NULL,
  `e_pe_div` varchar(100) NOT NULL,
  `e_pe_dis` varchar(100) NOT NULL,
  `e_pe_tha` varchar(100) NOT NULL,
  `e_pr_div` varchar(100) NOT NULL,
  `e_pr_dis` varchar(100) NOT NULL,
  `e_pr_tha` varchar(100) NOT NULL,
  `e_j_date` date NOT NULL,
  `married_stu` varchar(50) NOT NULL,
  `e_mar_date` date NOT NULL,
  `e_s_name` varchar(50) NOT NULL,
  `e_s_date` date NOT NULL,
  `e_c1_name` varchar(50) NOT NULL,
  `e_c1_date` date NOT NULL,
  `e_c2_name` varchar(50) NOT NULL,
  `e_c2_date` date NOT NULL,
  `e_c3_name` varchar(100) NOT NULL,
  `e_c3_date` date NOT NULL,
  `exp1` varchar(30000) NOT NULL,
  `exp2` varchar(30000) NOT NULL,
  `exp3` varchar(3000) NOT NULL,
  `e_cont_per` varchar(50) NOT NULL,
  `e_cont_office` varchar(50) NOT NULL,
  `e_cont_family` varchar(50) NOT NULL,
  `ref_contact1` varchar(100) NOT NULL,
  `ref_contact2` varchar(100) NOT NULL,
  `ref_contact3` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `skype` varchar(50) NOT NULL,
  `e_image` varchar(500) NOT NULL,
  `e_area` varchar(50) NOT NULL,
  `emp_for` int(2) NOT NULL DEFAULT '0',
  `emp_sts` int(11) NOT NULL,
  PRIMARY KEY (`e_id`),
  KEY `id` (`id`),
  KEY `e_id` (`e_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `emp_info`
--

INSERT INTO `emp_info` (`id`, `e_id`, `e_dept`, `dept_id`, `e_name`, `e_f_name`, `e_m_name`, `e_gender`, `e_b_date`, `e_des`, `e_pe_div`, `e_pe_dis`, `e_pe_tha`, `e_pr_div`, `e_pr_dis`, `e_pr_tha`, `e_j_date`, `married_stu`, `e_mar_date`, `e_s_name`, `e_s_date`, `e_c1_name`, `e_c1_date`, `e_c2_name`, `e_c2_date`, `e_c3_name`, `e_c3_date`, `exp1`, `exp2`, `exp3`, `e_cont_per`, `e_cont_office`, `e_cont_family`, `ref_contact1`, `ref_contact2`, `ref_contact3`, `email`, `skype`, `e_image`, `e_area`, `emp_for`, `emp_sts`) VALUES
(1, '10002', '', 1003, 'Md. Mahfuz Ayub', 'Md. Ayub Ali Mridha', 'Mrs. Ayesha Ayub', 'Male', '0000-00-00', 'General Manager', 'Dhaka', 'DHAKA', '', 'Dhaka', 'DHAKA', '', '2000-02-01', 'Married', '0000-00-00', 'Sabina Yesmin', '0000-00-00', 'Tasneem Mahfuz', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '01730052800', '9862978-9', '8712638', 'Zakir Anam', '', '', 'palash@bestecgroup.com', 'mahfuz9', 'emp_images/10002_', '8001', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `e_id` varchar(20) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `pw` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_name` (`user_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_name`, `e_id`, `user_id`, `pw`, `password`, `email`, `user_type`, `image`) VALUES
(1, 'Administrator', '10012', 'admin', '', '75b375a9c192171bd97d6878f58889238215eabf', 'admin@egarg.com', 'superadmin', 'emp_images/1254_Sabbir ahammed.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `log_info`
--

CREATE TABLE IF NOT EXISTS `log_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` varchar(20) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `log_date` datetime NOT NULL,
  `u_ip` varchar(20) NOT NULL,
  `u_browser` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `u_id` (`u_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `log_info`
--

INSERT INTO `log_info` (`id`, `u_id`, `u_name`, `log_date`, `u_ip`, `u_browser`) VALUES
(1, 'admin', 'Mashiur Rahman', '2016-08-14 07:37:58', '220.158.205.162', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(2, 'admin', 'Mashiur Rahman', '2016-08-14 07:43:19', '220.158.205.162', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(3, 'agrotec', 'Agrotec Group', '2016-08-14 11:11:39', '150.242.104.210', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0'),
(4, 'admin', 'Mashiur Rahman', '2016-08-14 11:16:18', '150.242.104.210', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0'),
(5, 'admin', 'Mashiur Rahman', '2016-08-15 04:55:03', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0'),
(6, 'admin', 'Mashiur Rahman', '2016-08-21 12:33:09', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0'),
(7, 'admin', 'Mashiur Rahman', '2016-08-21 12:35:52', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0'),
(8, 'admin', 'Mashiur Rahman', '2016-08-21 12:42:44', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0'),
(9, 'admin', 'Administrator', '2016-08-21 03:47:38', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0'),
(10, 'admin', 'Administrator', '2016-08-21 07:43:11', '192.168.1.4', 'Mozilla/5.0 (iPhone; CPU iPhone OS 9_3_4 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Ver'),
(11, 'admin', 'Administrator', '2016-08-22 10:19:33', '150.242.104.210', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0'),
(12, 'admin', 'Administrator', '2016-08-22 10:23:56', '150.242.104.210', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0'),
(13, 'admin', 'Administrator', '2016-08-22 08:07:19', '220.158.205.162', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(14, 'admin', 'Administrator', '2016-08-28 12:49:30', '220.158.205.162', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(15, 'admin', 'Administrator', '2016-08-28 02:13:00', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(16, 'admin', 'Administrator', '2016-08-28 03:07:55', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(17, 'admin', 'Administrator', '2016-08-31 04:15:11', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(18, 'admin', 'Administrator', '2016-08-31 04:27:20', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(19, 'admin', 'Administrator', '2016-08-31 07:55:46', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(20, 'admin', 'Administrator', '2016-09-01 04:48:34', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(21, 'admin', 'Administrator', '2016-09-01 06:21:05', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(22, 'admin', 'Administrator', '2016-09-01 10:14:11', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(23, 'admin', 'Administrator', '2016-09-01 10:21:33', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(24, 'admin', 'Administrator', '2016-09-03 03:53:41', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(25, 'admin', 'Administrator', '2016-09-03 07:49:01', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(26, 'admin', 'Administrator', '2016-09-03 11:07:05', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(27, 'admin', 'Administrator', '2016-09-03 02:51:18', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(28, 'admin', 'Administrator', '2016-09-04 05:25:36', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(29, 'admin', 'Administrator', '2016-09-04 05:27:21', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(30, 'admin', 'Administrator', '2016-09-04 06:06:26', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(31, 'admin', 'Administrator', '2016-09-04 08:58:53', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(32, 'admin', 'Administrator', '2016-09-04 05:19:40', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(33, 'admin', 'Administrator', '2016-09-04 05:26:40', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(34, 'admin', 'Administrator', '2016-09-04 05:28:00', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(35, 'admin', 'Administrator', '2016-09-05 12:38:20', '220.158.205.162', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(36, 'admin', 'Administrator', '2016-09-05 12:53:12', '220.158.205.162', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(37, 'admin', 'Administrator', '2016-09-05 01:59:21', '150.242.104.210', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0'),
(38, 'admin', 'Administrator', '2016-09-05 10:12:58', '118.179.215.74', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(39, 'admin', 'Administrator', '2016-09-05 11:32:46', '150.242.104.210', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0'),
(40, 'admin', 'Administrator', '2016-09-05 12:31:10', '118.179.215.74', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(41, 'admin', 'Administrator', '2016-09-07 05:42:53', '118.179.215.74', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(42, 'admin', 'Administrator', '2016-09-08 07:31:12', '103.244.14.62', 'Mozilla/5.0 (iPhone; CPU iPhone OS 9_3_5 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Ver'),
(43, 'admin', 'Administrator', '2016-09-08 07:33:34', '103.244.14.62', 'Mozilla/5.0 (iPhone; CPU iPhone OS 9_3_5 like Mac OS X) AppleWebKit/601.1 (KHTML, like Gecko) CriOS/'),
(44, 'admin', 'Administrator', '2016-09-08 07:54:26', '150.242.104.210', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0'),
(45, 'admin', 'Administrator', '2016-09-07 07:07:33', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0'),
(46, 'admin', 'Administrator', '2016-09-08 01:16:02', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0'),
(47, 'admin', 'Administrator', '2016-09-08 02:29:05', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0'),
(48, 'admin', 'Administrator', '2016-09-22 11:04:09', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0'),
(49, 'admin', 'Administrator', '2016-09-23 12:21:12', '150.242.104.210', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0'),
(50, 'admin', 'Administrator', '2016-09-23 12:23:38', '150.242.104.210', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0'),
(51, 'admin', 'Administrator', '2016-09-24 04:24:57', '118.179.215.74', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0'),
(52, 'admin', 'Administrator', '2016-10-02 08:20:47', '119.30.32.209', 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_0_2 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) Fx'),
(53, 'admin', 'Administrator', '2016-10-02 08:21:21', '119.30.32.209', 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_0_2 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) Fx'),
(54, 'admin', 'Administrator', '2016-10-02 04:35:44', '150.242.104.210', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(55, 'admin', 'Administrator', '2016-10-05 04:28:59', '150.242.104.210', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(56, 'admin', 'Administrator', '2016-10-06 03:15:14', '150.242.104.210', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(57, 'admin', 'Administrator', '2016-10-06 03:15:21', '150.242.104.210', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(58, 'admin', 'Administrator', '2016-10-06 07:52:13', '119.30.35.151', 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_0_2 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) Fx'),
(59, 'admin', 'Administrator', '2016-10-06 08:42:06', '103.192.156.249', 'Mozilla/5.0 (Windows NT 5.1; rv:48.0) Gecko/20100101 Firefox/48.0');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE IF NOT EXISTS `model` (
  `model_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL,
  `model_name` varchar(50) NOT NULL,
  `model_desc` varchar(100) NOT NULL,
  `model_price` int(11) NOT NULL,
  `model_sts` int(11) NOT NULL,
  `delete_by` varchar(20) NOT NULL,
  `delete_time` datetime NOT NULL,
  PRIMARY KEY (`model_id`),
  KEY `block_id` (`model_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`model_id`, `brand_id`, `model_name`, `model_desc`, `model_price`, `model_sts`, `delete_by`, `delete_time`) VALUES
(1, 14, 'test', 'Description', 10002, 1, '', '0000-00-00 00:00:00'),
(2, 15, '20000', 'wst', 5555888, 1, '', '0000-00-00 00:00:00'),
(3, 14, 'Apache RTR 150', 'stysrt', 2000001, 1, '', '0000-00-00 00:00:00'),
(5, 16, 'Apache RTR 150', 'Apache RTR 150 Old', 20000, 1, '', '2016-08-22 03:29:49'),
(6, 16, 'Apache RTR 150', '', 0, 0, '', '0000-00-00 00:00:00'),
(7, 16, 'FZ 150', '', 0, 1, 'admin', '2016-10-06 03:20:22'),
(8, 17, 'Platina 100', '', 0, 0, '', '0000-00-00 00:00:00'),
(9, 17, 'Discover 125', '', 0, 0, '', '0000-00-00 00:00:00'),
(10, 17, 'Discover 150S', '', 0, 0, '', '0000-00-00 00:00:00'),
(11, 17, 'Pulsar 135 LS', '', 0, 0, '', '0000-00-00 00:00:00'),
(12, 17, 'Discover 150F', '', 0, 0, '', '0000-00-00 00:00:00'),
(13, 17, 'Pulsar 150 DTS-i', '', 0, 0, '', '0000-00-00 00:00:00'),
(14, 17, 'Pulsar 180 DTS-i', '', 0, 0, '', '0000-00-00 00:00:00'),
(15, 17, 'Avenger 150 Street', '', 0, 0, '', '0000-00-00 00:00:00'),
(16, 17, 'Pulsar AS150', '', 0, 0, '', '0000-00-00 00:00:00'),
(17, 17, 'Avenger 220 Street', '', 0, 0, '', '0000-00-00 00:00:00'),
(18, 19, 'Haojue 150cc', '', 170000, 0, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE IF NOT EXISTS `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` int(2) NOT NULL,
  `module_name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `superadmin` int(2) NOT NULL DEFAULT '1',
  `admin` int(2) NOT NULL DEFAULT '0',
  `manager` int(2) NOT NULL DEFAULT '0',
  `collection` int(2) NOT NULL DEFAULT '0',
  `hr` int(2) NOT NULL DEFAULT '0',
  `accounts` int(2) NOT NULL DEFAULT '0',
  `customer_care` int(2) NOT NULL DEFAULT '0',
  `production` int(2) NOT NULL DEFAULT '0',
  `reception` int(2) NOT NULL DEFAULT '0',
  `is_access` int(2) NOT NULL DEFAULT '0',
  `sts` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `position`, `module_name`, `description`, `icon`, `superadmin`, `admin`, `manager`, `collection`, `hr`, `accounts`, `customer_care`, `production`, `reception`, `is_access`, `sts`) VALUES
(1, 5, 'UserAccess', 'Manage Access', 'iconfa-cogs', 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
(2, 10, 'Dashboards', 'Dashboard', 'iconfa-dashboard', 1, 1, 1, 1, 1, 0, 1, 0, 0, 0, 0),
(3, 15, 'Reports', 'Reports', 'iconfa-signal', 1, 1, 1, 1, 1, 0, 1, 0, 0, 0, 0),
(4, 20, 'Department', 'Department', 'iconfa-th-large', 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0),
(5, 25, 'Employee', 'Employee', 'iconfa-user-md', 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0),
(6, 30, 'Users', 'Users', 'iconfa-group', 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0),
(7, 35, 'Brand', 'Brand', 'iconfa-tag', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 40, 'Model', 'Model', 'iconfa-tags', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 45, 'Parts', 'Parts', 'iconfa-cog', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 55, 'invoice/Sales', 'Sales', 'iconfa-shopping-cart', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 50, 'invoice/Stock', 'Stock', 'iconfa-signin', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 31, 'Clients', 'Clients', 'iconfa-user', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productCode` varchar(20) NOT NULL,
  `buyPrice` double(8,2) NOT NULL,
  `parts_desc` varchar(100) NOT NULL,
  `parts_sts` int(11) NOT NULL,
  `delete_by` varchar(20) NOT NULL,
  `delete_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `model_id`, `brand_id`, `productName`, `productCode`, `buyPrice`, `parts_desc`, `parts_sts`, `delete_by`, `delete_time`) VALUES
(1, 9, 17, 'Helmet Lock', 'KJ2153155', 350.00, '', 0, '', '0000-00-00 00:00:00'),
(2, 9, 17, 'Front Wheel Lock', 'KJ543156', 520.00, '', 0, '', '0000-00-00 00:00:00'),
(3, 9, 17, 'Bike Buzzer', 'KJ1124551', 100.00, '', 0, '', '0000-00-00 00:00:00'),
(4, 14, 17, 'Handle Grip', 'PS771922', 100.00, '', 0, '', '0000-00-00 00:00:00'),
(5, 14, 17, 'Side Box', 'SE661022', 800.00, '', 0, '', '0000-00-00 00:00:00'),
(6, 14, 17, 'Seat Cover ', 'SD7719225', 450.00, '', 0, '', '0000-00-00 00:00:00'),
(7, 8, 17, 'Seat Cover ', 'PL228194', 400.00, '', 0, '', '0000-00-00 00:00:00'),
(8, 8, 17, 'Engine Guard', 'PN9926347', 420.00, '', 0, '', '0000-00-00 00:00:00'),
(9, 11, 17, 'Handle Grip', 'PS8547204', 100.00, '', 0, '', '0000-00-00 00:00:00'),
(10, 11, 17, 'Ladies Handle With Hook', 'PS54125', 300.00, '', 0, '', '0000-00-00 00:00:00'),
(11, 18, 19, 'Brack Plate', 'KJ54132556', 450.00, '', 0, '', '0000-00-00 00:00:00'),
(12, 6, 16, 'head light', 'KJ54465466', 250.00, '', 0, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sales_details`
--

CREATE TABLE IF NOT EXISTS `sales_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceNo` int(11) NOT NULL,
  `productCode` int(11) NOT NULL,
  `unitPrice` double(8,2) NOT NULL,
  `quantity` double(8,2) NOT NULL,
  `total` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `sales_details`
--

INSERT INTO `sales_details` (`id`, `invoiceNo`, `productCode`, `unitPrice`, `quantity`, `total`) VALUES
(1, 1, 1, 350.00, 2.00, 700.00),
(2, 1, 6, 450.00, 3.00, 1350.00),
(3, 1, 8, 420.00, 2.00, 840.00),
(4, 2, 11, 450.00, 2.00, 900.00),
(5, 2, 9, 100.00, 5.00, 500.00),
(6, 3, 5, 800.00, 1.00, 800.00),
(7, 3, 6, 450.00, 1.00, 450.00);

-- --------------------------------------------------------

--
-- Table structure for table `sales_master`
--

CREATE TABLE IF NOT EXISTS `sales_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clientId` int(11) NOT NULL,
  `invoiceNo` int(11) NOT NULL,
  `invoiceDate` date NOT NULL,
  `invoiceNote` varchar(100) NOT NULL,
  `discount` double(8,2) NOT NULL,
  `paidAmount` double(8,2) NOT NULL,
  `EntBy` varchar(10) NOT NULL,
  `EntDate` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `invoiceNo` (`invoiceNo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sales_master`
--

INSERT INTO `sales_master` (`id`, `clientId`, `invoiceNo`, `invoiceDate`, `invoiceNote`, `discount`, `paidAmount`, `EntBy`, `EntDate`) VALUES
(1, 18, 1, '2016-10-06', '', 0.00, 2890.00, '10012', '2016-10-06'),
(2, 19, 2, '2016-10-06', 'rdsryjxrj', 0.00, 1400.00, '10012', '2016-10-06'),
(3, 17, 3, '2016-10-06', '', 0.00, 1250.00, '10012', '2016-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `sales_number`
--

CREATE TABLE IF NOT EXISTS `sales_number` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `useBy` varchar(20) NOT NULL,
  `sts` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sales_number`
--

INSERT INTO `sales_number` (`id`, `useBy`, `sts`) VALUES
(1, '', 1),
(2, '18', 1),
(3, '19', 1),
(4, '17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stock_details`
--

CREATE TABLE IF NOT EXISTS `stock_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceNo` int(11) NOT NULL,
  `productCode` int(11) NOT NULL,
  `unitPrice` double(8,2) NOT NULL,
  `quantity` double(8,2) NOT NULL,
  `total` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `stock_details`
--

INSERT INTO `stock_details` (`id`, `invoiceNo`, `productCode`, `unitPrice`, `quantity`, `total`) VALUES
(1, 1, 1, 350.00, 10.00, 3500.00),
(2, 1, 2, 520.00, 42.00, 21840.00),
(3, 1, 3, 100.00, 15.00, 1500.00),
(4, 1, 4, 100.00, 50.00, 5000.00),
(5, 1, 5, 800.00, 18.00, 14400.00),
(6, 1, 6, 450.00, 40.00, 18000.00),
(7, 1, 7, 400.00, 35.00, 14000.00),
(8, 1, 8, 420.00, 84.00, 35280.00),
(9, 1, 10, 300.00, 70.00, 21000.00),
(10, 29, 11, 450.00, 10.00, 4500.00),
(11, 30, 2, 520.00, 1.00, 520.00),
(12, 31, 3, 100.00, 5.00, 500.00),
(13, 32, 2, 520.00, 1.00, 520.00),
(14, 33, 2, 520.00, 5.00, 2600.00),
(15, 33, 5, 800.00, 2.00, 1600.00),
(16, 33, 8, 420.00, 10.00, 4200.00),
(17, 34, 3, 100.00, 2.00, 200.00),
(18, 34, 7, 400.00, 5.00, 2000.00),
(19, 34, 8, 420.00, 10.00, 4200.00);

-- --------------------------------------------------------

--
-- Table structure for table `stock_master`
--

CREATE TABLE IF NOT EXISTS `stock_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clientId` int(11) NOT NULL,
  `challanNo` int(15) NOT NULL,
  `invoiceNo` int(11) NOT NULL,
  `invoiceDate` date NOT NULL,
  `invoiceNote` varchar(100) NOT NULL,
  `discount` double(8,2) NOT NULL,
  `paidAmount` double(8,2) NOT NULL,
  `EntBy` varchar(10) NOT NULL,
  `EntDate` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `invoiceNo` (`invoiceNo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `stock_master`
--

INSERT INTO `stock_master` (`id`, `clientId`, `challanNo`, `invoiceNo`, `invoiceDate`, `invoiceNote`, `discount`, `paidAmount`, `EntBy`, `EntDate`) VALUES
(1, 0, 112451, 1, '2016-10-06', '', 0.00, 134520.00, '10012', '2016-10-06'),
(2, 0, 4152151, 29, '2016-10-06', 'ctjtjry', 0.00, 4500.00, '10012', '2016-10-06'),
(3, 0, 563876, 30, '2016-10-06', '', 0.00, 520.00, '10012', '2016-10-06'),
(4, 0, 77444, 31, '2016-10-06', '', 0.00, 500.00, '10012', '2016-10-06'),
(5, 0, 555, 32, '2016-10-06', '', 0.00, 520.00, '10012', '2016-10-06'),
(6, 0, 86363, 33, '2016-10-06', '', 0.00, 8400.00, '10012', '2016-10-06'),
(7, 0, 52543, 34, '2016-10-06', '', 0.00, 6400.00, '10012', '2016-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `stock_number`
--

CREATE TABLE IF NOT EXISTS `stock_number` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `useBy` varchar(20) NOT NULL,
  `sts` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `stock_number`
--

INSERT INTO `stock_number` (`id`, `useBy`, `sts`) VALUES
(1, '', 1),
(35, '', 0),
(34, '', 1),
(33, '', 1),
(32, '', 1),
(31, '', 1),
(30, '', 1),
(29, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_typ`
--

CREATE TABLE IF NOT EXISTS `user_typ` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` char(4) NOT NULL,
  `u_type` varchar(20) NOT NULL,
  `u_des` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user_typ`
--

INSERT INTO `user_typ` (`id`, `type_id`, `u_type`, `u_des`) VALUES
(1, '1001', 'admin', 'Admin'),
(2, '1002', 'manager', 'Manager'),
(3, '1003', 'accounts', 'Accounts'),
(4, '1004', 'collection', 'Collection'),
(5, '1005', 'hr', 'HR'),
(6, '1006', 'production', 'Production'),
(7, '1007', 'customer_care', 'Customer Care'),
(8, '1008', 'reception', 'Reception');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
