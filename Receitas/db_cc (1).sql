-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Jul-2023 às 06:23
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_cc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cc_ingredientes`
--

CREATE TABLE `cc_ingredientes` (
  `id_ingrediente_cont` int(11) NOT NULL,
  `Nome_Ingrediente` varchar(250) NOT NULL,
  `Q_Ingrediente` int(11) NOT NULL,
  `Uni_Ingrediente` int(11) NOT NULL,
  `id_receita_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cc_ingredientes`
--

INSERT INTO `cc_ingredientes` (`id_ingrediente_cont`, `Nome_Ingrediente`, `Q_Ingrediente`, `Uni_Ingrediente`, `id_receita_fk`) VALUES
(1, 'teste', 1, 0, 1),
(2, 'flocos de milho', 2, 0, 3),
(3, 'água', 2, 0, 3),
(4, 'flocos de milho', 2, 0, 4),
(5, 'água', 2, 0, 4),
(6, 'flocos de milho', 2, 0, 5),
(7, 'água', 2, 0, 5),
(8, 'flocos de milho', 2, 0, 6),
(9, 'água', 2, 0, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cc_priv_usuario`
--

CREATE TABLE `cc_priv_usuario` (
  `id_usuario_usuario` int(11) NOT NULL,
  `Primeiro_Nome_Usuario` varchar(50) NOT NULL,
  `Ultimo_Nome_Usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cc_priv_usuario`
--

INSERT INTO `cc_priv_usuario` (`id_usuario_usuario`, `Primeiro_Nome_Usuario`, `Ultimo_Nome_Usuario`) VALUES
(1, 'Daniel', 'Pinheiro'),
(2, 'Pedro', 'Lucas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cc_receitas`
--

CREATE TABLE `cc_receitas` (
  `id_Receitas` int(11) NOT NULL,
  `Nome_Receita` mediumtext NOT NULL,
  `Coz_Receita` varchar(50) NOT NULL,
  `id_Coz_Receita` int(11) NOT NULL,
  `Ava_Receita` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cc_receitas`
--

INSERT INTO `cc_receitas` (`id_Receitas`, `Nome_Receita`, `Coz_Receita`, `id_Coz_Receita`, `Ava_Receita`) VALUES
(1, 'Cuzcuz', 'Pedro', 2, 0),
(2, 'Cuzcuz', 'Pedro Lucas', 2, 0),
(3, 'Cuzcuz', 'Pedro Lucas', 2, 0),
(4, 'Cuzcuz', 'Pedro Lucas', 2, 0),
(5, 'Cuzcuz', 'Pedro Lucas', 2, 0),
(6, 'Cuzcuz', 'Pedro Lucas', 2, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cc_usuario`
--

CREATE TABLE `cc_usuario` (
  `Id_Usuario` int(11) NOT NULL,
  `Primeiro_Nome_Usuario` varchar(60) NOT NULL,
  `Ultimo_Nome_Usuario` varchar(60) NOT NULL,
  `Senha_Usuario` varchar(60) NOT NULL,
  `Email_Usuario` varchar(60) NOT NULL,
  `Aniversario_Usuario` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cc_usuario`
--

INSERT INTO `cc_usuario` (`Id_Usuario`, `Primeiro_Nome_Usuario`, `Ultimo_Nome_Usuario`, `Senha_Usuario`, `Email_Usuario`, `Aniversario_Usuario`) VALUES
(1, '$2a$04$RoDLzY58qchHenQFQB47m.eWdSQZfYMmskehOP1l4Bve8mZ3RoRky', '$2a$04$cl2aqMtcC0LhdqNKyyNfXOBwIcjrEUs/0C3nozoEsCyAScpB45soK', '$2a$04$MI/H2Y.gUkMMoNHQM89WQ.O0r0p/IglbdW76EDD7./4ydl5ECX2l.', '$2a$04$9yhopNq6xldp/Sm.ifPS/epGqno8uZuK/HH6yeEyA9NacAb3AnOEC', '$2a$04$Apm7oAwXSs5PRB8iqXriDeC0ACACCHQfyp0pQ1jEXxbjjYNyM2hyS'),
(2, '$2y$10$XYocWbNSTj60nkKShuTwvOnOVBc4GxdnzMDTfos5Wyg2lOp9VDNdm', '$2y$10$Dm.qOOYIMkBQp1F7I5qDPuwN27O.DiPuuS710wm9jUFUrMRtpAgGu', '$2y$10$4JM8iafPTBTNXwUUYQaSg.l9Kfh4DzeBuqSHSaluRjUbRJuWd3HFy', '$2y$10$aWTjWw8.2xIy.BeqBIAMOO4TUcQzSUb9BjqUHuQmdeSSWwky02dAu', '$2y$10$HEB.dMq8vsyIoK1qgHxmQOXxASCGX5e1Uuu3y3rAb4sovwtNqkOJ6');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cc_ingredientes`
--
ALTER TABLE `cc_ingredientes`
  ADD PRIMARY KEY (`id_ingrediente_cont`);

--
-- Índices para tabela `cc_priv_usuario`
--
ALTER TABLE `cc_priv_usuario`
  ADD KEY `id_usuario_usuario` (`id_usuario_usuario`);

--
-- Índices para tabela `cc_receitas`
--
ALTER TABLE `cc_receitas`
  ADD PRIMARY KEY (`id_Receitas`);

--
-- Índices para tabela `cc_usuario`
--
ALTER TABLE `cc_usuario`
  ADD PRIMARY KEY (`Id_Usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cc_ingredientes`
--
ALTER TABLE `cc_ingredientes`
  MODIFY `id_ingrediente_cont` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `cc_receitas`
--
ALTER TABLE `cc_receitas`
  MODIFY `id_Receitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `cc_usuario`
--
ALTER TABLE `cc_usuario`
  MODIFY `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cc_priv_usuario`
--
ALTER TABLE `cc_priv_usuario`
  ADD CONSTRAINT `cc_priv_usuario_ibfk_1` FOREIGN KEY (`id_usuario_usuario`) REFERENCES `cc_usuario` (`Id_Usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
