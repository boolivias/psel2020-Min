-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 18-Dez-2020 às 13:13
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_mind`
--
CREATE DATABASE IF NOT EXISTS `db_mind` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_mind`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_access`
--

DROP TABLE IF EXISTS `tb_access`;
CREATE TABLE `tb_access` (
  `acs_id` int(10) UNSIGNED NOT NULL,
  `acs_name` varchar(255) NOT NULL,
  `acs_dashboard` tinyint(1) DEFAULT 0,
  `acs_edit` tinyint(1) DEFAULT 0,
  `acs_changeAccess` tinyint(1) DEFAULT 0,
  `acs_changeStatus` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_access`
--

INSERT INTO `tb_access` (`acs_id`, `acs_name`, `acs_dashboard`, `acs_edit`, `acs_changeAccess`, `acs_changeStatus`) VALUES
(1, 'usuario', 0, 0, 0, 0),
(2, 'admin', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_cpf` varchar(11) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_urlPhoto` varchar(255) NOT NULL,
  `user_acs_id` int(10) UNSIGNED NOT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_name`, `user_email`, `user_cpf`, `user_password`, `user_urlPhoto`, `user_acs_id`, `user_status`) VALUES
(2, 'admin user', 'admin@admin.com', '12345678900', '$2y$12$qnZoKu9f8p8cdGnJMIEozuXfi14oxnDs66yqelbk4chY5jHEHILuK', '/admin', 2, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_access`
--
ALTER TABLE `tb_access`
  ADD PRIMARY KEY (`acs_id`);

--
-- Índices para tabela `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_cpf` (`user_cpf`),
  ADD KEY `user_acs_id` (`user_acs_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_access`
--
ALTER TABLE `tb_access`
  MODIFY `acs_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`user_acs_id`) REFERENCES `tb_access` (`acs_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
