-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 22, 2020 at 10:31 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oneclik_copywriters`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `copywriter_id` int(11) NOT NULL,
  `author` varchar(256) NOT NULL,
  `body` text NOT NULL,
  `aprooved` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `copywriter_id`, `author`, `body`, `aprooved`) VALUES
(1, 1, 'Nebojsa', 'Komentar radi', 1),
(2, 2, 'MILOS', 'Provera komentara', NULL),
(3, 3, 'Boca', 'Komentar za Milana', 1),
(4, 17, 'Ksenija', 'Komentar za Aleksandru', NULL),
(5, 1, 'Aleksandra', 'Novi komentar', 1),
(6, 18, 'Milan', 'Komentar za Ladu', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `copywriters`
--

DROP TABLE IF EXISTS `copywriters`;
CREATE TABLE IF NOT EXISTS `copywriters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `copywriters`
--

INSERT INTO `copywriters` (`id`, `name`, `description`, `price`, `image`) VALUES
(1, 'Uros', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt mollitia veniam harum, nisi sunt debitis iure corrupti corporis omnis. Praesentium voluptatem eveniet ad in soluta voluptas quam obcaecati? Optio magni quibusdam fugiat non illum! Consequatur eaque officiis, rerum et ut architecto porro amet inventore nisi sequi dicta, optio, magni pariatur! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt mollitia veniam harum, nisi sunt debitis iure corrupti corporis omnis. Praesentium voluptatem eveniet ad in soluta voluptas quam obcaecati? Optio magni quibusdam fugiat non illum! Consequatur eaque officiis, rerum et ut architecto porro amet inventore nisi sequi dicta, optio, magni pariatur!', 10, 'uros.jpeg'),
(2, 'Milica', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt mollitia veniam harum, nisi sunt debitis iure corrupti corporis omnis. Praesentium voluptatem eveniet ad in soluta voluptas quam obcaecati? Optio magni quibusdam fugiat non illum! Consequatur eaque officiis, rerum et ut architecto porro amet inventore nisi sequi dicta, optio, magni pariatur! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt mollitia veniam harum, nisi sunt debitis iure corrupti corporis omnis. Praesentium voluptatem eveniet ad in soluta voluptas quam obcaecati? Optio magni quibusdam fugiat non illum! Consequatur eaque officiis, rerum et ut architecto porro amet inventore nisi sequi dicta, optio, magni pariatur!', 60, 'milica.jpeg'),
(3, 'Milan', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt mollitia veniam harum, nisi sunt debitis iure corrupti corporis omnis. Praesentium voluptatem eveniet ad in soluta voluptas quam obcaecati? Optio magni quibusdam fugiat non illum! Consequatur eaque officiis, rerum et ut architecto porro amet inventore nisi sequi dicta, optio, magni pariatur! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt mollitia veniam harum, nisi sunt debitis iure corrupti corporis omnis. Praesentium voluptatem eveniet ad in soluta voluptas quam obcaecati? Optio magni quibusdam fugiat non illum! Consequatur eaque officiis, rerum et ut architecto porro amet inventore nisi sequi dicta, optio, magni pariatur!', 70, 'milan.jpeg'),
(17, 'Aleksandra', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt mollitia veniam harum, nisi sunt debitis iure corrupti corporis omnis. Praesentium voluptatem eveniet ad in soluta voluptas quam obcaecati? Optio magni quibusdam fugiat non illum! Consequatur eaque officiis, rerum et ut architecto porro amet inventore nisi sequi dicta, optio, magni pariatur! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt mollitia veniam harum, nisi sunt debitis iure corrupti corporis omnis. Praesentium voluptatem eveniet ad in soluta voluptas quam obcaecati? Optio magni quibusdam fugiat non illum! Consequatur eaque officiis, rerum et ut architecto porro amet inventore nisi sequi dicta, optio, magni pariatur!', 40, 'aleksandra.jpeg'),
(18, 'Lada', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt mollitia veniam harum, nisi sunt debitis iure corrupti corporis omnis. Praesentium voluptatem eveniet ad in soluta voluptas quam obcaecati? Optio magni quibusdam fugiat non illum! Consequatur eaque officiis, rerum et ut architecto porro amet inventore nisi sequi dicta, optio, magni pariatur! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt mollitia veniam harum, nisi sunt debitis iure corrupti corporis omnis. Praesentium voluptatem eveniet ad in soluta voluptas quam obcaecati? Optio magni quibusdam fugiat non illum! Consequatur eaque officiis, rerum et ut architecto porro amet inventore nisi sequi dicta, optio, magni pariatur!', 60, 'lada.jpeg'),
(19, 'Tanja', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt mollitia veniam harum, nisi sunt debitis iure corrupti corporis omnis. Praesentium voluptatem eveniet ad in soluta voluptas quam obcaecati? Optio magni quibusdam fugiat non illum! Consequatur eaque officiis, rerum et ut architecto porro amet inventore nisi sequi dicta, optio, magni pariatur! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt mollitia veniam harum, nisi sunt debitis iure corrupti corporis omnis. Praesentium voluptatem eveniet ad in soluta voluptas quam obcaecati? Optio magni quibusdam fugiat non illum! Consequatur eaque officiis, rerum et ut architecto porro amet inventore nisi sequi dicta, optio, magni pariatur!', 40, 'tanja.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `filename` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`) VALUES
(1, 'admin', 'admin', 'Uros', 'Todorovic');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
