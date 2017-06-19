-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 �?06 �?13 �?07:46
-- 服务器版本: 5.5.53
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `lunlun`
--

-- --------------------------------------------------------

--
-- 表的结构 `ll_comment`
--

CREATE TABLE IF NOT EXISTS `ll_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `paper_id` int(11) NOT NULL,
  `paper_time` datetime NOT NULL,
  `paper_comment` text NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `ll_issue`
--

CREATE TABLE IF NOT EXISTS `ll_issue` (
  `issue_id` int(11) NOT NULL AUTO_INCREMENT,
  `issue_name` varchar(50) NOT NULL,
  `issue_total` smallint(3) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `issue_jianjie` text NOT NULL,
  PRIMARY KEY (`issue_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- 表的结构 `ll_paper`
--

CREATE TABLE IF NOT EXISTS `ll_paper` (
  `paper_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `paper_name` varchar(100) NOT NULL,
  `paper_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `paper_content` varchar(255) NOT NULL,
  `paper_comment` text NOT NULL,
  PRIMARY KEY (`paper_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- 表的结构 `ll_snews`
--

CREATE TABLE IF NOT EXISTS `ll_snews` (
  `snews_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `snews_name` varchar(100) NOT NULL,
  `snews_content` text NOT NULL,
  `snews_time` datetime NOT NULL,
  `snews_status` smallint(4) NOT NULL,
  PRIMARY KEY (`snews_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

-- --------------------------------------------------------

--
-- 表的结构 `ll_student`
--

CREATE TABLE IF NOT EXISTS `ll_student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(50) NOT NULL,
  `student_pwd` varchar(255) NOT NULL,
  `student_img` varchar(100) NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `student_college` varchar(50) NOT NULL,
  `student_status` smallint(4) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `ll_student`
--

INSERT INTO `ll_student` (`student_id`, `student_name`, `student_pwd`, `student_img`, `student_email`, `student_college`, `student_status`) VALUES
(3, 'lixiaoying', 'eyJpdiI6Inh3c0RORmVWeHBcL2dOSkU1OHF6bjlBPT0iLCJ2YWx1ZSI6IjNDRmlLdnFHREF5MnJGUWNBXC93a0FRPT0iLCJtYWMiOiIyZmMxNjIwNTM1NzE3MzBhZmIwNzkyYjg1MjMxMDAxZWViNGYyMmVlZDkyMDlmZDUxNGE3NjA4MGIxZTZlZGZhIn0=', '113.jpg', '1205132169@qq.com', '软件', 0);

-- --------------------------------------------------------

--
-- 表的结构 `ll_student-issue`
--

CREATE TABLE IF NOT EXISTS `ll_student-issue` (
  `si_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `issue_id` int(11) NOT NULL,
  PRIMARY KEY (`si_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

-- --------------------------------------------------------

--
-- 表的结构 `ll_teacher`
--

CREATE TABLE IF NOT EXISTS `ll_teacher` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_name` varchar(50) NOT NULL,
  `teacher_pwd` varchar(50) NOT NULL,
  `teacher_img` varchar(100) NOT NULL,
  `teacher_email` varchar(50) NOT NULL,
  `teacher_college` varchar(50) NOT NULL,
  `teacher_jianjie` text NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- 表的结构 `ll_teacher-student`
--

CREATE TABLE IF NOT EXISTS `ll_teacher-student` (
  `ts_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `issue_id` int(11) NOT NULL,
  PRIMARY KEY (`ts_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- 表的结构 `ll_tnews`
--

CREATE TABLE IF NOT EXISTS `ll_tnews` (
  `tnews_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `tnews_name` varchar(100) NOT NULL,
  `tnews_content` text NOT NULL,
  `tnews_time` datetime NOT NULL,
  `tnews_status` smallint(4) NOT NULL,
  PRIMARY KEY (`tnews_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

-- --------------------------------------------------------

--
-- 表的结构 `ll_tpaper`
--

CREATE TABLE IF NOT EXISTS `ll_tpaper` (
  `tpaper_id` int(6) NOT NULL AUTO_INCREMENT,
  `paper_id` int(6) NOT NULL,
  `teacher_id` int(6) NOT NULL,
  `tpaper_name` varchar(255) NOT NULL,
  `tpaper_time` datetime NOT NULL,
  PRIMARY KEY (`tpaper_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
