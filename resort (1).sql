-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 08:56 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resort`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation_list`
--

CREATE TABLE `reservation_list` (
  `id` int(50) NOT NULL,
  `code` varchar(255) NOT NULL,
  `room_id` int(50) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(50) NOT NULL,
  `datecreated` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation_list`
--

INSERT INTO `reservation_list` (`id`, `code`, `room_id`, `check_in`, `check_out`, `fullname`, `contact`, `email`, `status`, `datecreated`) VALUES
(6, 'sad', 0, '2023-04-25', '2023-04-18', 'sad', 'dsadsadsa', 'dsadsad@dsad', 0, '2023-04-22 02:47:16.522347'),
(7, 'adsa', 0, '2023-04-19', '2023-04-04', 'das', 'asdsa', 'dsad@sfdsafasfas', 0, '2023-04-25 07:50:05.740048'),
(8, 'dsadas', 0, '2023-04-05', '2023-04-10', 'dasdsa', 'sadasdas', 'd@daasd', 0, '2023-04-25 07:50:22.098550');

-- --------------------------------------------------------

--
-- Table structure for table `room_list`
--

CREATE TABLE `room_list` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(50) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` blob NOT NULL,
  `datecreated` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_list`
--

INSERT INTO `room_list` (`id`, `name`, `type`, `description`, `status`, `price`, `image`, `datecreated`) VALUES
(25, 'Classic Bed Room', 'Classic ', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, voluptates cupiditate iste aspernatur odio cumque earum aut voluptas cum magni vero non incidunt, quaerat, animi nisi officia dicta aperiam sunt.', 0, '$150.00', 0x3430336163376235383837646361366466323338613434393531393664373236313638323430393334352e706e67, '2023-04-25 07:55:45.945876'),
(26, 'Premium Room', 'Premium', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, voluptates cupiditate iste aspernatur odio cumque earum aut voluptas cum magni vero non incidunt, quaerat, animi nisi officia dicta aperiam sunt.', 0, '$170.00', 0x3238663063663564643331653137343430386665636636333764343137663666313638323430393338372e706e67, '2023-04-25 07:56:27.330659'),
(27, 'Family Room', 'Family', '\r\n\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, voluptates cupiditate iste aspernatur odio cumque earum aut voluptas cum magni vero non incidunt, quaerat, animi nisi officia dicta aperiam sunt.', 0, '$190.00', 0x3339613235646632623339643038393130353539393735363932616633333131313638323430393431372e706e67, '2023-04-25 07:56:57.465534'),
(28, 'Single Bed Room', 'Single ', '\r\n\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, voluptates cupiditate iste aspernatur odio cumque earum aut voluptas cum magni vero non incidunt, quaerat, animi nisi officia dicta aperiam sunt.', 0, '$120.00', 0x6538396264613065353234643635346631396132316233376564393938343862313638323430393435332e706e67, '2023-04-25 07:57:33.790032'),
(29, 'Classic Bed Room', 'Classic ', '\r\n\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, voluptates cupiditate iste aspernatur odio cumque earum aut voluptas cum magni vero non incidunt, quaerat, animi nisi officia dicta aperiam sunt.', 0, '$130.00', 0x6136323530336333616463333332333230653033303032623261656363616337313638323430393437372e706e67, '2023-04-25 07:57:57.328732'),
(30, 'Family Room', 'Family ', '\r\n\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, voluptates cupiditate iste aspernatur odio cumque earum aut voluptas cum magni vero non incidunt, quaerat, animi nisi officia dicta aperiam sunt.', 0, '$150.00', 0x3630323365663762313061326366373965633537623536643833363339643364313638323430393530362e706e67, '2023-04-25 07:58:26.417809');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `middlename`, `lastname`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admn', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservation_list`
--
ALTER TABLE `reservation_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_list`
--
ALTER TABLE `room_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation_list`
--
ALTER TABLE `reservation_list`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `room_list`
--
ALTER TABLE `room_list`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
