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
-- Banco de dados: `clientes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `contatos` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `name`, `email`, `endereco`, `contatos`) VALUES
(1, 'Wallace Rian ferreira de souza', 'elciometransportes184@outlook.com', NULL, NULL),
(2, 'Diva', 'wallacerian156@hotmail.com', NULL, NULL),
(3, 'elcio ferreira', 'elciometransportes184@outlook.com', NULL, NULL),
(4, 'Wallace Rian ferreira de souza', 'elciometransportes184@outlook.com', 'teste', NULL),
(5, 'Wallace ', 'elciometransportes184@outlook.com', 'elciometransportes184@outlook.com', '16997946320'),
(8, 'Wallace Rian ferreira de souza', 'elciometransportes184@outlook.com', 'elciometransportes184@outlook.com', '16997946320'),
(10, 'admin@mahout.com.br', 'lucio@gmail.com', 'lucio@gmail.com', '11993278223');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
