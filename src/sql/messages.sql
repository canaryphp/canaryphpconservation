-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 09:21 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `{TABLE_NAME}` (
  `id` int(20) NOT NULL,
  `conservation` varchar(255) NOT NULL COMMENT 'Conservation id',
  `creator` varchar(255) NOT NULL COMMENT 'Creator id',
  `role` varchar(255) NOT NULL COMMENT '1=text,2=picture,3=video,4=audio,5=attachment',
  `content` text NOT NULL,
  `message_changeslog` longtext NOT NULL DEFAULT '[]',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `{TABLE_NAME}`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `{TABLE_NAME}`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;
