-- phpMyAdmin SQL Dump
-- version 3.3.2deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 06, 2010 at 10:30 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.2-1ubuntu4.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `fufl`
--

-- --------------------------------------------------------

--
-- Table structure for table `polls`
--

CREATE TABLE IF NOT EXISTS `polls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `name` varchar(32) NOT NULL,
  `owner_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `owner_id` (`owner_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `poll_options`
--

CREATE TABLE IF NOT EXISTS `poll_options` (
  `poll_id` int(11) NOT NULL,
  `choice` varchar(32) NOT NULL,
  `value` bigint(20) NOT NULL,
  KEY `poll_id` (`poll_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `poll_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `choice` bigint(20) NOT NULL,
  KEY `poll_id` (`poll_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(320) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;
