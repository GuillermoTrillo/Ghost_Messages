-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 03-Abr-2023 às 13:01
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ghost_messengers`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `title` varchar(100) DEFAULT NULL,
  `message` varchar(500) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_message`),
  KEY `id_usuario` (`id_usuario`),
  KEY `Username` (`Username`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `messages`
--

INSERT INTO `messages` (`title`, `message`, `id_usuario`, `Username`, `id_message`) VALUES
('Ricardo explodiu', 'De prazer de realizar esse trabalho magnifico meu deus do ceu gozei ja\r\nlol', 7, 'root', 19),
('asdasdasdasd', 'asdasd', 17, 'daniel', 24),
('Nunca compraré esos chocolates sabor mierd que tienen en la panaderia', 'Nope, no, nunca', 16, 'Harry potter', 20),
('asd', 'asd', 7, 'root', 21),
('ads', 'as', 7, 'root', 22),
('asd', 'asd', 7, 'root', 23);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `gmail` varchar(80) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `gmail` (`gmail`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `username`, `gmail`, `password`) VALUES
(7, 'root', 'guille', 'root'),
(17, 'daniel', 'daniel', '1234'),
(16, 'Harry potter', 'rick', 'momo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
