-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 28-Fev-2024 às 19:47
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
-- Banco de dados: `portal_aluno`
--
CREATE DATABASE IF NOT EXISTS `portal_aluno` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `portal_aluno`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_usuario`
--

DROP TABLE IF EXISTS `tabela_usuario`;
CREATE TABLE IF NOT EXISTS `tabela_usuario` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `aluno` varchar(150) NOT NULL,
  `professor` varchar(150) NOT NULL,
  `email` varchar(300) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `confirmar_senha` varchar(300) NOT NULL,
  `telefone` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
