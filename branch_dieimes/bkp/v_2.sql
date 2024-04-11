-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 03/04/2024 às 15:46
-- Versão do servidor: 5.7.23-23
-- Versão do PHP: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `meucod21_aluno_postar`
--
CREATE DATABASE IF NOT EXISTS `meucod21_aluno_postar` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `meucod21_aluno_postar`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pi_2024_braincode_adm`
--

DROP TABLE IF EXISTS `pi_2024_braincode_adm`;
CREATE TABLE `pi_2024_braincode_adm` (
  `id` int(11) NOT NULL,
  `nome_adm` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `pi_2024_braincode_adm`
--

INSERT INTO `pi_2024_braincode_adm` (`id`, `nome_adm`, `email`, `senha`, `telefone`) VALUES
(1, 'Dieimes Nunes', 'dieimes.adm@dieimes.adm', '1234', '1234'),
(2, 'Maria', 'maria.adm@maria.adm', '1234', '1234'),
(3, 'Luciane', 'luciane.adm@luciane.adm', '1234', '1234'),
(4, 'Beatriz', 'beatriz.adm@beatriz.adm', '1234', '1234'),
(5, 'Kauan', 'kauan.adm@kauan.adm', '1234', '1234'),
(6, 'Ana', 'ana.adm@ana.adm', '1234', '1234'),
(7, 'Lorena', 'lorena.adm@lorena.adm', '1234', '1234'),
(8, 'Fernando', 'fernanado.adm@fernando.adm', '1234', '1234');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pi_2024_braincode_aluno`
--

DROP TABLE IF EXISTS `pi_2024_braincode_aluno`;
CREATE TABLE `pi_2024_braincode_aluno` (
  `id` int(11) NOT NULL,
  `nome_aluno` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `nome_mae` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `pi_2024_braincode_aluno`
--

INSERT INTO `pi_2024_braincode_aluno` (`id`, `nome_aluno`, `email`, `senha`, `nome_mae`) VALUES
(1, 'Luciane Rocha', 'luciane.64909@aluno.pr.senac.br', '12345678', 'Natália Rocha'),
(2, 'Maria Eduarda de Souza', 'maria.21895@aluno.pr.senac.br', '123ddd123', 'Maria Socorro de Souza'),
(3, 'Beatriz Sthefanie de Souza', 'beatriz.2810@aluno.pr.senac.br', '1234', 'Maria Socorro de Souza'),
(5, 'Samuka dos santos cruz', 'tunder098@gmail.com', '090909', '(43) 981720760'),
(9, 'Kauan Felipe Lima Martins', 'kauan.6930@aluno.pr.senac.br', '12345', '40028922'),
(10, 'Lorena Ceron', 'lorena@lorena', '121212', '4456744323'),
(11, 'Ana Claudia', 'conceicao.8918@aluno.pr.senac.br', 'pudim89', '654858'),
(13, 'Luciane Rocha', 'luuh123@gmail.com', '12345678', '11111111111'),
(14, 'Leticia Souza', 'souzasthefanie5@gmail.com', '1234', '11982979999'),
(15, 'Luciane Rocha', '11@11', '123', '1'),
(17, 'Madalena Gomes', 'madalenagom@gmail.com', 'chocolate123', '43988652312'),
(18, 'Maria Josefina Cruzes de Almeida', 'mariajose@hotmail.com', '123123123', '43974653381'),
(19, 'Lucia Rocha Reis', 'lucia.7205@gmail.com', 'lucia123', '43966842578'),
(21, 'Lídia Garcia Tsvetkov Cardoso', 'lilig.2405@aluno.pr.senac.br', '12345678', '11953214468'),
(22, 'Diego Oliveira', 'diegooli34@gmail.com', '1234', '12345'),
(23, 'Ana Beatriz', 'anabe23@gmail.com', '1234', '12345'),
(24, 'Laura da Silva', 'laurasilva@gmail.com', '1234', '12345'),
(25, 'José Vitor', 'josevi89@gmail.com', '1234', '12345'),
(26, 'Victor Gomes', 'victorgo67@gmail.com', '1234', '12345'),
(27, 'Sofia Oliveira', 'sofiaoliveiraSil@gmail.com', '1234', '43988567421'),
(28, 'Matheus Ribeiro', 'matheusrib45@gmail.com', '1234', '12345'),
(29, 'Cauê Silva', 'cauesil34@gmail.com', '1234', '12345'),
(30, 'Lucas Pereira', 'lucasPereira@gmail.com', '1234', '43999685432'),
(31, 'Gabrieli de Souza', 'gabrielisouza@gmail.com', '1234', '12345'),
(32, 'Pedro Almeida', 'PedroAlmeida@gmail.com', '1234', '4199987654'),
(33, 'Luan Claudio de Oliveira', 'luancla@gmail.com', '1234', '12345'),
(34, 'Isabella Ferreira', 'IsabellaFerreira@gmail.com', '1234', '4399654532'),
(35, 'Juliana Barbosa', 'julianabarbosa@gmail.com', '1234', '4399831245'),
(36, 'Larissa Miranda', 'larissamiranda@gmail.com', '1234', '4398565462'),
(37, 'Isadora Camargo', 'isadoracamargo@gmail.com', '1234', '12345'),
(38, 'Marina Oliveira', 'marinaoliveira@gmail.com', '1234', '4398576513'),
(39, 'Marcela Oliveira', 'marcelaoliveira@gmail.com', '1234', '12345'),
(40, 'Stella Souza', 'stellasouza@gmail.com', '1234', '12345'),
(41, 'Mateus Moura', 'mateusmoura@gmail.com', '1234', '12345'),
(42, 'Thiago Fernandes', 'thiagofernandes@gmail.com', '1234', '4398754521'),
(43, 'Arthur Lourenço', 'arthurlou@gmail.com', '1234', '12345'),
(44, 'Isaías Felipe da Silva', 'isaiasfelipe@gmail.com', '1234', '12345'),
(45, 'Giovanna Silva', 'GiovannaSilva@gmail.com', '987654', '4396653645'),
(46, 'Amanda Rocha', 'amandarocha@gmail.com', '1234', '12345'),
(47, 'Ana Clara Rocha', 'AnaClaraRocha@gmail.com', '987654', '41999635425'),
(48, 'Gustavo Oliveira', 'GustavoOliveira@gmail.com', '987654', '4399866547'),
(49, 'Julia Gomes', 'juliagomes@gmail.com', '1234', '12345'),
(50, 'Camila Pereira', 'CamilaPereira@gmail.com', '986754', '4498655784'),
(51, 'Bruna Rodrigues', 'BrunaRodrigues@gmail.com', '983265', '4498657432'),
(52, 'Maria Fernanda Mendes', 'MariaFernandaMendes@gmail.com', '875421', '4198478512'),
(53, 'Valentina Martins', 'ValentinaMartins@gmail.com', '451278', '4396857432'),
(54, 'Laura de Oliveira ', 'laura@laura', '1234', '12345');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pi_2024_braincode_disciplina`
--

DROP TABLE IF EXISTS `pi_2024_braincode_disciplina`;
CREATE TABLE `pi_2024_braincode_disciplina` (
  `id_disciplina` int(11) NOT NULL,
  `nome_disciplina` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `pi_2024_braincode_disciplina`
--

INSERT INTO `pi_2024_braincode_disciplina` (`id_disciplina`, `nome_disciplina`) VALUES
(1, 'Html'),
(2, 'CSS'),
(3, 'PHP'),
(4, 'Banco de Dados');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pi_2024_braincode_professor`
--

DROP TABLE IF EXISTS `pi_2024_braincode_professor`;
CREATE TABLE `pi_2024_braincode_professor` (
  `id` int(11) NOT NULL,
  `nome_prof` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `disciplina` int(11) NOT NULL,
  `email` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `pi_2024_braincode_professor`
--

INSERT INTO `pi_2024_braincode_professor` (`id`, `nome_prof`, `disciplina`, `email`, `endereco`, `telefone`, `senha`) VALUES
(11, 'Dieimes', 1, 'dieimes.prof@dieimes.prof', '123', '123', '123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pi_2024_braincode_turma`
--

DROP TABLE IF EXISTS `pi_2024_braincode_turma`;
CREATE TABLE `pi_2024_braincode_turma` (
  `id_turma` int(11) NOT NULL,
  `nome_turma` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `disciplina` int(11) NOT NULL,
  `professor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pi_2024_braincode_adm`
--
ALTER TABLE `pi_2024_braincode_adm`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pi_2024_braincode_aluno`
--
ALTER TABLE `pi_2024_braincode_aluno`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pi_2024_braincode_disciplina`
--
ALTER TABLE `pi_2024_braincode_disciplina`
  ADD PRIMARY KEY (`id_disciplina`);

--
-- Índices de tabela `pi_2024_braincode_professor`
--
ALTER TABLE `pi_2024_braincode_professor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_disciplina_professor` (`disciplina`);

--
-- Índices de tabela `pi_2024_braincode_turma`
--
ALTER TABLE `pi_2024_braincode_turma`
  ADD PRIMARY KEY (`id_turma`),
  ADD KEY `fk_disciplina` (`disciplina`),
  ADD KEY `fk_professor` (`professor`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pi_2024_braincode_adm`
--
ALTER TABLE `pi_2024_braincode_adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `pi_2024_braincode_aluno`
--
ALTER TABLE `pi_2024_braincode_aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de tabela `pi_2024_braincode_disciplina`
--
ALTER TABLE `pi_2024_braincode_disciplina`
  MODIFY `id_disciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pi_2024_braincode_professor`
--
ALTER TABLE `pi_2024_braincode_professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `pi_2024_braincode_turma`
--
ALTER TABLE `pi_2024_braincode_turma`
  MODIFY `id_turma` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `pi_2024_braincode_professor`
--
ALTER TABLE `pi_2024_braincode_professor`
  ADD CONSTRAINT `fk_disciplina_professor` FOREIGN KEY (`disciplina`) REFERENCES `pi_2024_braincode_disciplina` (`id_disciplina`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `pi_2024_braincode_turma`
--
ALTER TABLE `pi_2024_braincode_turma`
  ADD CONSTRAINT `fk_disciplina` FOREIGN KEY (`disciplina`) REFERENCES `pi_2024_braincode_disciplina` (`id_disciplina`),
  ADD CONSTRAINT `fk_professor` FOREIGN KEY (`professor`) REFERENCES `pi_2024_braincode_professor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
