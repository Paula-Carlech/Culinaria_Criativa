-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Jul-2023 às 07:57
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
  `Id_Receita` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cc_palavra_chave`
--

CREATE TABLE `cc_palavra_chave` (
  `Palavra_Chave` varchar(50) DEFAULT NULL,
  `id_Receita` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cc_priv_usuario`
--

CREATE TABLE `cc_priv_usuario` (
  `id_usuario_usuario` int(11) NOT NULL,
  `Primeiro_Nome_Usuario` varchar(50) NOT NULL,
  `Ultimo_Nome_Usuario` varchar(50) NOT NULL,
  `Id_Usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cc_priv_usuario`
--

INSERT INTO `cc_priv_usuario` (`id_usuario_usuario`, `Primeiro_Nome_Usuario`, `Ultimo_Nome_Usuario`, `Id_Usuario`) VALUES
(1, 'Daniel', 'Pinheiro', NULL),
(2, 'Pedro', 'Lucas', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cc_receitas`
--

CREATE TABLE `cc_receitas` (
  `id_Receitas` int(11) NOT NULL,
  `Nome_Receita` varchar(255) NOT NULL,
  `Coz_Receita` varchar(255) NOT NULL,
  `id_Coz_Receita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cc_receitas`
--

INSERT INTO `cc_receitas` (`id_Receitas`, `Nome_Receita`, `Coz_Receita`, `id_Coz_Receita`) VALUES
(1, 'Cuzcuz', 'Pedro', 2),
(2, 'Cuzcuz', 'Pedro Lucas', 2),
(3, 'Cuzcuz', 'Pedro Lucas', 2),
(4, 'Cuzcuz', 'Pedro Lucas', 2),
(5, 'Cuzcuz', 'Pedro Lucas', 2),
(6, 'Cuzcuz', 'Pedro Lucas', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cc_usuarios`
--

CREATE TABLE `cc_usuarios` (
  `Id_Usuario` int(11) NOT NULL,
  `Primeiro_Nome_Usuario` varchar(60) NOT NULL,
  `Ultimo_Nome_Usuario` varchar(60) NOT NULL,
  `Senha_Usuario` varchar(60) NOT NULL,
  `Email_Usuario` varchar(60) NOT NULL,
  `Aniversario_Usuario` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cc_usuarios`
--

INSERT INTO `cc_usuarios` (`Id_Usuario`, `Primeiro_Nome_Usuario`, `Ultimo_Nome_Usuario`, `Senha_Usuario`, `Email_Usuario`, `Aniversario_Usuario`) VALUES
(1, '$2a$04$RoDLzY58qchHenQFQB47m.eWdSQZfYMmskehOP1l4Bve8mZ3RoRky', '$2a$04$cl2aqMtcC0LhdqNKyyNfXOBwIcjrEUs/0C3nozoEsCyAScpB45soK', '$2a$04$MI/H2Y.gUkMMoNHQM89WQ.O0r0p/IglbdW76EDD7./4ydl5ECX2l.', '$2a$04$9yhopNq6xldp/Sm.ifPS/epGqno8uZuK/HH6yeEyA9NacAb3AnOEC', '0000-00-00'),
(2, '$2y$10$XYocWbNSTj60nkKShuTwvOnOVBc4GxdnzMDTfos5Wyg2lOp9VDNdm', '$2y$10$Dm.qOOYIMkBQp1F7I5qDPuwN27O.DiPuuS710wm9jUFUrMRtpAgGu', '$2y$10$4JM8iafPTBTNXwUUYQaSg.l9Kfh4DzeBuqSHSaluRjUbRJuWd3HFy', '$2y$10$aWTjWw8.2xIy.BeqBIAMOO4TUcQzSUb9BjqUHuQmdeSSWwky02dAu', '0000-00-00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cc_ingredientes`
--
ALTER TABLE `cc_ingredientes`
  ADD PRIMARY KEY (`id_ingrediente_cont`),
  ADD KEY `FK_Id_Receita_cc_receitas` (`Id_Receita`);

--
-- Índices para tabela `cc_palavra_chave`
--
ALTER TABLE `cc_palavra_chave`
  ADD KEY `FK_Palavra_Chave_cc_receitas` (`id_Receita`);

--
-- Índices para tabela `cc_priv_usuario`
--
ALTER TABLE `cc_priv_usuario`
  ADD KEY `FK_Id_Usuario_cc_usuarios` (`Id_Usuario`) USING BTREE;

--
-- Índices para tabela `cc_receitas`
--
ALTER TABLE `cc_receitas`
  ADD PRIMARY KEY (`id_Receitas`);

--
-- Índices para tabela `cc_usuarios`
--
ALTER TABLE `cc_usuarios`
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
-- AUTO_INCREMENT de tabela `cc_usuarios`
--
ALTER TABLE `cc_usuarios`
  MODIFY `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cc_ingredientes`
--
ALTER TABLE `cc_ingredientes`
  ADD CONSTRAINT `FK_Id_Receita_cc_receitas` FOREIGN KEY (`Id_Receita`) REFERENCES `cc_receitas` (`id_Receitas`);

--
-- Limitadores para a tabela `cc_palavra_chave`
--
ALTER TABLE `cc_palavra_chave`
  ADD CONSTRAINT `FK_Palavra_Chave_cc_receitas` FOREIGN KEY (`id_Receita`) REFERENCES `cc_receitas` (`id_Receitas`);

--
-- Limitadores para a tabela `cc_priv_usuario`
--
ALTER TABLE `cc_priv_usuario`
  ADD CONSTRAINT `FK_Id_Usuario_cc_usuarios` FOREIGN KEY (`Id_Usuario`) REFERENCES `cc_usuarios` (`Id_Usuario`),
  ADD CONSTRAINT `cc_priv_usuario_ibfk_1` FOREIGN KEY (`id_usuario_usuario`) REFERENCES `cc_usuarios` (`Id_Usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
