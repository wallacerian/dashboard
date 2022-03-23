-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 23-Mar-2022 às 22:39
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `usuario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `usuario`, `senha`, `data_cadastro`) VALUES
(1, 'admin@mahout.com.br', '49d048bbfb0afae4d16d015d6c0292d8', '2022-03-23 15:22:02'),
(2, 'admin@mahout.com.br', '49d048bbfb0afae4d16d015d6c0292d8', '2022-03-23 15:22:20'),
(3, 'admin@mahout.com.br', '#M4h0ut2017#', NULL),
(4, 'admin@mahout.com.br', '#M4h0ut2017#', NULL),
(5, 'elciometransportes184@outlook.com', '123456', NULL),
(6, 'admin@mahout.com.br', '#M4h0ut2017#', NULL),
(7, 'admin@mahout.com.br', '#M4h0ut2017#', NULL),
(8, 'admin@mahout.com.br', '#M4h0ut2017#', NULL),
(9, 'admin@mahout.com.br', '#M4h0ut2017#', NULL),
(10, 'admin@mahout.com.br', '#M4h0ut2017#', NULL),
(11, 'admin@mahout.com.br', '#M4h0ut2017#', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
