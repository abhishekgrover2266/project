-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 01, 2020 at 04:14 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: estore
--

-- --------------------------------------------------------

--
-- Table structure for table items
--

CREATE TABLE items (
  id int(11) NOT NULL,
  name varchar(255) NOT NULL,
  price int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table items
--

INSERT INTO items VALUES(1, 'iphoneXs', 69900);
INSERT INTO items VALUES(2, 'iphone 11Pro', 117000);
INSERT INTO items VALUES(3, 'iphone 11', 68300);
INSERT INTO items VALUES(4, 'galaxyM30s', 14999);
INSERT INTO items VALUES(5, 'Note9 pro', 16999);
INSERT INTO items VALUES(6, 'galaxyA51', 25250);

-- --------------------------------------------------------

--
-- Table structure for table users
--

CREATE TABLE users (
  id int(11) NOT NULL,
  name varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  contact varchar(255) NOT NULL,
  city varchar(255) NOT NULL,
  address varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table users_items
--

CREATE TABLE users_items (
  id int(11) NOT NULL,
  user_id int(11) NOT NULL,
  item_id int(11) NOT NULL,
  status enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table items
--
ALTER TABLE items
  ADD PRIMARY KEY (id);

--
-- Indexes for table users
--
ALTER TABLE users
  ADD PRIMARY KEY (id);

--
-- Indexes for table users_items
--
ALTER TABLE users_items
  ADD PRIMARY KEY (id),
  ADD KEY user_id (user_id),
  ADD KEY item_id (item_id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table items
--
ALTER TABLE items
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table users
--
ALTER TABLE users
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table users_items
--
ALTER TABLE users_items
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
