-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Jan-2019 às 13:14
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estacionamento`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidadetres`
--

CREATE TABLE `unidadetres` (
  `vagast` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `unidadetres`
--

INSERT INTO `unidadetres` (`vagast`) VALUES
(0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidadeum`
--

CREATE TABLE `unidadeum` (
  `vagas` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `unidadeum`
--

INSERT INTO `unidadeum` (`vagas`) VALUES
(0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuariotres`
--

CREATE TABLE `usuariotres` (
  `nome` varchar(60) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuariotres`
--

INSERT INTO `usuariotres` (`nome`, `senha`) VALUES
('admin2', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarioum`
--

CREATE TABLE `usuarioum` (
  `nome` varchar(30) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarioum`
--

INSERT INTO `usuarioum` (`nome`, `senha`) VALUES
('admin', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `unidadetres`
--
ALTER TABLE `unidadetres`
  ADD PRIMARY KEY (`vagast`);

--
-- Indexes for table `unidadeum`
--
ALTER TABLE `unidadeum`
  ADD PRIMARY KEY (`vagas`);

--
-- Indexes for table `usuariotres`
--
ALTER TABLE `usuariotres`
  ADD PRIMARY KEY (`nome`);

--
-- Indexes for table `usuarioum`
--
ALTER TABLE `usuarioum`
  ADD PRIMARY KEY (`nome`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
