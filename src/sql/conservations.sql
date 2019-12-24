-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 09:24 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `TABLE_NAME` (
  `id` int(20) NOT NULL,
  `conservation_id` varchar(255) NOT NULL COMMENT 'Conservation id',
  `conservation_title` varchar(255) DEFAULT NULL COMMENT 'Conservation Title',
  `conservation_subject` varchar(255) DEFAULT NULL,
  `conservation_users` text NOT NULL COMMENT 'Conservation Users',
  `conservation_status` varchar(2) NOT NULL DEFAULT '1' COMMENT '0=Hidden,1=Running',
  `conservation_key` varchar(255) NOT NULL,
  `conservation_changeslog` longtext NOT NULL DEFAULT '[]'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `TABLE_NAME`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `TABLE_NAME`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;
