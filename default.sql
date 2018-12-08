-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Dez-2018 às 00:45
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `default`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `email`, `user`, `level`, `password`) VALUES
(3, 'admin@literaturafavoravel.com', 'admin', 1, '9044d1926a8376e3d7201fbff013d3e3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivo`
--

CREATE TABLE `arquivo` (
  `cod` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `event` varchar(40) NOT NULL,
  `file` varchar(40) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `arquivo`
--

INSERT INTO `arquivo` (`cod`, `name`, `event`, `file`, `date`) VALUES
(2, 'b2', 'entrevista_brigido', 'b2.jpg', '2018-11-30 00:00:00'),
(63, 'b3', 'entrevista_brigido', 'b3.jpg', '2018-11-30 00:00:00'),
(64, 'b4', 'entrevista_brigido', 'b4.jpg', '2018-11-30 00:00:00'),
(66, 'd1', 'doacao', 'd1.jpg', '2018-11-30 00:00:00'),
(67, 'd2', 'doacao', 'd2.jpg', '2018-11-30 00:00:00'),
(68, 'd3', 'doacao', 'd3.jpg', '2018-11-30 00:00:00'),
(70, 'd4', 'doacao', 'd4.jpg', '2018-11-30 00:00:00'),
(71, 'd5', 'doacao', 'd5.jpg', '2018-11-30 00:00:00'),
(72, 'd6', 'doacao', 'd6.jpg', '2018-11-30 00:00:00'),
(87, 'e1', 'emmanuel', 'e1.jpg', '2018-11-30 00:00:00'),
(88, 'e2', 'emmanuel', 'e2.jpg', '2018-11-30 00:00:00'),
(89, 'e3', 'emmanuel', 'e3.jpg', '2018-11-30 00:00:00'),
(90, 'e4', 'emmanuel', 'e4.jpg', '2018-11-30 00:00:00'),
(91, 'e5', 'emmanuel', 'e5.jpg', '2018-11-30 00:00:00'),
(92, 'e6', 'emmanuel', 'e6.jpg', '2018-11-30 00:00:00'),
(93, 'e7', 'emmanuel', 'e7.jpg', '2018-11-30 00:00:00'),
(94, 'e8', 'emmanuel', 'e8.jpg', '2018-11-30 00:00:00'),
(95, 'e9', 'emmanuel', 'e9.jpg', '2018-11-30 00:00:00'),
(96, 'e10', 'emmanuel', 'e10.jpg', '2018-11-30 00:00:00'),
(97, 'e11', 'emmanuel', 'e11.jpg', '2018-11-30 00:00:00'),
(98, 'e13', 'emmanuel', 'e13.jpg', '2018-11-30 00:00:00'),
(99, 'e14', 'emmanuel', 'e14.jpg', '2018-11-30 00:00:00'),
(100, 'e15', 'emmanuel', 'e15.jpg', '2018-11-30 00:00:00'),
(101, 'e16', 'emmanuel', 'e16.jpg', '2018-11-30 00:00:00'),
(102, 'e17', 'emmanuel', 'e17.jpg', '2018-11-30 00:00:00'),
(103, 'e18', 'emmanuel', 'e18.jpg', '2018-11-30 00:00:00'),
(104, 'e19', 'emmanuel', 'e19.jpg', '2018-11-30 00:00:00'),
(105, 'e20', 'emmanuel', 'e20.jpg', '2018-11-30 00:00:00'),
(106, 'e21', 'emmanuel', 'e21.jpg', '2018-11-30 00:00:00'),
(107, 'i1', 'ilson', 'i1.jpg', '2018-11-30 00:00:00'),
(112, 'm1', 'marcia', 'm1.jpg', '2018-11-30 00:00:00'),
(113, 'm2', 'marcia', 'm2.jpg', '2018-11-30 00:00:00'),
(114, 'm3', 'marcia', 'm3.jpg', '2018-11-30 00:00:00'),
(115, 'm4', 'marcia', 'm4.jpg', '2018-11-30 00:00:00'),
(116, 'n1', 'literatura', 'n1.jpg', '2018-11-30 00:00:00'),
(117, 'n2', 'literatura', 'n2.jpg', '2018-11-30 00:00:00'),
(118, 'n3', 'literatura', 'n3.jpg', '2018-11-30 00:00:00'),
(121, 'n6', 'literatura', 'n6.png', '2018-11-30 00:00:00'),
(122, 'n7', 'literatura', 'n7.jpg', '2018-11-30 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arquivo`
--
ALTER TABLE `arquivo`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `arquivo`
--
ALTER TABLE `arquivo`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
