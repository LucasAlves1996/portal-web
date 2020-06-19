-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Abr-2020 às 07:50
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myframework`
--
CREATE DATABASE IF NOT EXISTS `myframework` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `myframework`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `abrigo`
--

CREATE TABLE `abrigo` (
  `abrigo_id` int(11) NOT NULL,
  `abrigo_name` varchar(255) NOT NULL,
  `abrigo_email` varchar(255) NOT NULL,
  `abrigo_telefone` varchar(255) NOT NULL,
  `abrigo_endereco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `abrigo`
--

INSERT INTO `abrigo` (`abrigo_id`, `abrigo_name`, `abrigo_email`, `abrigo_telefone`, `abrigo_endereco`) VALUES
(1, 'Abrigo 1', '506costa@gmail.com', '33333333', 'Borges de Medeiros 1040, sala 204'),
(2, 'Abrigo 2', '506costa@gmail.com', '33333333', 'Azenha 960');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `empresa_id` int(11) NOT NULL,
  `empresa_name` varchar(255) NOT NULL,
  `empresa_email` varchar(255) NOT NULL,
  `empresa_telefone` varchar(255) NOT NULL,
  `empresa_cnpj` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`empresa_id`, `empresa_name`, `empresa_email`, `empresa_telefone`, `empresa_cnpj`) VALUES
(1, 'Nenhuma', '', '', ''),
(2, 'Lojas Americanas S.a.', '506costa@gmail.com', '33333333', '33.014.556/0001-96'),
(3, 'Casas Bahia Comercial Ltda', '506costa@gmail.com', '33333333', '59.291.534/0001'),
(4, 'Wal Mart Brasil Ltda', '506costa@gmail.com', '33333333', '00.063.960/0001-09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `module`
--

CREATE TABLE `module` (
  `module_id` int(11) NOT NULL,
  `module_name` varchar(255) NOT NULL,
  `module_view` varchar(255) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `module_icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `module`
--

INSERT INTO `module` (`module_id`, `module_name`, `module_view`, `permission_id`, `module_icon`) VALUES
(1, 'Usuários', 'usuarios', 2, 'fas fa-user-tie'),
(2, 'Empresas', 'empresas', 1, 'fas fa-building'),
(3, 'Abrigos', 'abrigos', 2, 'fas fa-home'),
(4, 'Pessoas', 'pessoas', 1, 'fas fa-user'),
(5, 'Notícias', 'noticias', 1, 'fas fa-newspaper'),
(6, 'E-mails', 'e-mails', 1, 'fas fa-envelope');

-- --------------------------------------------------------

--
-- Estrutura da tabela `module_permission_type`
--

CREATE TABLE `module_permission_type` (
  `permission_id` int(11) NOT NULL,
  `permission_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `module_permission_type`
--

INSERT INTO `module_permission_type` (`permission_id`, `permission_name`) VALUES
(1, 'Comum'),
(2, 'Administrador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `pessoa_id` int(11) NOT NULL,
  `pessoa_name` varchar(255) NOT NULL,
  `pessoa_data_nascimento` varchar(255) NOT NULL,
  `pessoa_email` varchar(255) NOT NULL,
  `pessoa_telefone` varchar(255) NOT NULL,
  `pessoa_endereco` varchar(255) NOT NULL,
  `pessoa_habilidades` varchar(255) NOT NULL,
  `abrigo_id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`pessoa_id`, `pessoa_name`, `pessoa_data_nascimento`, `pessoa_email`, `pessoa_telefone`, `pessoa_endereco`, `pessoa_habilidades`, `abrigo_id`, `empresa_id`) VALUES
(1, 'Lucas Costa Alves', '05/02/1996', '506costa@gmail.com', '993610808', 'Orfanotrófio 204, apto.10', 'HTML, CSS, JAVASCRIPT, PHP, SQL', 1, 2),
(2, 'Marco Antonio Alves', '17/06/1962', 'marcoalves62@yahoo.com.br', '984124715', 'Orfanotrófio 204, apto.10', 'Cozinhar, Lavar louça', 1, 3),
(3, 'João', '', '', '', '', '', 1, 3),
(4, 'Gabriel', '', '', '', '', '', 2, 4),
(5, 'Diogo', '', '', '', '', '', 1, 2),
(6, 'Maria', '', '', '', '', '', 1, 4),
(7, 'Gabriela', '', '', '', '', '', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_content` varchar(255) NOT NULL,
  `post_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` (`post_id`, `post_title`, `post_content`, `post_user_id`) VALUES
(1, 'teste', 'teste', 1),
(2, 'teste', 'teste', 1),
(3, 'teste', 'teste', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_login` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_login`, `user_password`, `permission_id`) VALUES
(1, 'Administrador', '506costa@gmail.com', 'admin', '123456', 2),
(2, 'Usuário Comum 1', '506costa@gmail.com', 'user1', '123456', 1),
(3, 'Usuário Comum 2', '506costa@gmail.com', 'user2', '123456', 1),
(4, 'teste1', 'teste1@teste.com', 'teste1', '123456', 1),
(5, 'teste2', 'teste2@teste.com', 'teste2', '123456', 2),
(6, 'teste3', 'teste3@teste.com', 'teste3', '123456', 1),
(7, 'teste4', 'teste4@teste', 'teste4', '123456', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abrigo`
--
ALTER TABLE `abrigo`
  ADD PRIMARY KEY (`abrigo_id`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`empresa_id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `module_permission_type`
--
ALTER TABLE `module_permission_type`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`pessoa_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abrigo`
--
ALTER TABLE `abrigo`
  MODIFY `abrigo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `empresa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `module_permission_type`
--
ALTER TABLE `module_permission_type`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `pessoa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
