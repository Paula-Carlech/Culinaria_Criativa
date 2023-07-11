-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Jul-2023 às 03:22
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
  `Nome_Ingrediente` varchar(250) DEFAULT NULL,
  `Q_Ingrediente` int(11) DEFAULT NULL,
  `Uni_Ingrediente` varchar(50) DEFAULT NULL,
  `id_Receita` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cc_ingredientes`
--

INSERT INTO `cc_ingredientes` (`id_ingrediente_cont`, `Nome_Ingrediente`, `Q_Ingrediente`, `Uni_Ingrediente`, `id_Receita`) VALUES
(1, '[value-2]', 3, '[value-4]', 5),
(21, 'flocos de milho', 123, 'xícaras de chá', 13),
(22, 'de manteiga', 10, 'colheres de chá', 14),
(23, 'chocolate', 5, 'Litros', 14),
(30, 'as', 1, 'gema1', 17),
(31, 'sd', 2, 'gema2', 17),
(32, 'df', 3, 'gema3', 17),
(33, 'fg', 4, 'gema4', 17);

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
-- Estrutura da tabela `cc_receitas`
--

CREATE TABLE `cc_receitas` (
  `id_Receitas` int(11) NOT NULL,
  `Nome_Receita` varchar(255) NOT NULL,
  `Coz_Receita` varchar(255) NOT NULL,
  `id_Coz_Receita` int(11) NOT NULL,
  `Descricao_Receita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cc_receitas`
--

INSERT INTO `cc_receitas` (`id_Receitas`, `Nome_Receita`, `Coz_Receita`, `id_Coz_Receita`, `Descricao_Receita`) VALUES
(4, 'Cuzcuz', 'Pedro Lucas', 2, ''),
(5, 'Cuzcuz', 'Pedro Lucas', 2, ''),
(6, 'Cuzcuz', 'Pedro Lucas', 2, ''),
(7, 'Arroz', 'Pedro Lucas', 2, ''),
(8, 'Teste', 'Pedro Lucas', 2, ''),
(9, 'Teste', 'Pedro Lucas', 2, ''),
(10, 'Brigadeiro', 'Pedro Lucas', 2, ''),
(11, 'Teste', 'Daniel Malheiros', 9, ''),
(12, 'teste', ' ', 9, ''),
(13, 'Cuzcuz', 'Marlon', 10, ''),
(14, 'brigadeiro', 'Marlon', 10, ''),
(17, 'Torta de Morango 2', 'Marlon', 10, 'e condensado, a manteiga, a gema, o leite e a maizena. Leve ao fogo, mexendo sempre ate obter um ponto cremoso.\r\n3\r\nDeixe esfriar por 15 minutos, e após adicione uma caixa de creme de leite (sem soro)\r\n4\r\nSEGUNDA ETAPA\r\n5\r\nEm uma panela em banho maria, coloque as barras de chocolate em pedaços\r\n6\r\nE quando estiver totalmente derretido, acrescente as outras duas caixas de creme de leite (com soro), misture bem e retire do fogo.\r\n7\r\nMONTAGEM\r\n8\r\nLave os morangos, e corte-os ao meio, reservando alguns para decorar\r\n9\r\nEm um refratário médio, cubra o fundo com a metade dos morangos amassados com um garfo, em seguida, coloque o primeiro creme, o restante dos morangos, e depois, cubra com o segundo creme\r\n10\r\nDecore com seis morangos');

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
(2, '$2y$10$XYocWbNSTj60nkKShuTwvOnOVBc4GxdnzMDTfos5Wyg2lOp9VDNdm', '$2y$10$Dm.qOOYIMkBQp1F7I5qDPuwN27O.DiPuuS710wm9jUFUrMRtpAgGu', '$2y$10$4JM8iafPTBTNXwUUYQaSg.l9Kfh4DzeBuqSHSaluRjUbRJuWd3HFy', '$2y$10$aWTjWw8.2xIy.BeqBIAMOO4TUcQzSUb9BjqUHuQmdeSSWwky02dAu', '0000-00-00'),
(5, '$2y$10$jYH5OWDUfw2XQgog5sUnEeXPsXeGioJnzGjJAsK9ht7ghWOjOvBia', '$2y$10$uVjBLWvDGw0sMvhSkwUSgeD7GEXCA1fF.lcggTeo042wuHaFfkuoe', '$2y$10$KPWjpr6rmnmJEUZvhDN5VusK15OPxsnH0Z5dyXASyN0ucXiZYPfBm', '$2y$10$dX18UcJ9zLZTnFkdQr7TfecoaBkeT3mnwZ4jXRJCTbK2L3jDI1UUO', '0000-00-00'),
(6, '$2y$10$aUqhWyK6WUmgWwY6SW.0EO7Iks/jvDGQOnKZTNDzNFs5nDd476G3u', '$2y$10$.g2qksFQCzyDBlIj4iHS8eETULGy4EdJL6zFrMLzAl1jrLWUzPdgm', '$2y$10$2vfA7Bc2pUT5BMY2XGV9PO.THhq7iAATbHre68qAu3Wr/.flEKu7K', '$2y$10$qigVkMghCnn2.u7MUysw0ewzg9YA/3RJ4rYMgGdMA4G4ILtq4QKey', '0000-00-00'),
(7, '', '', '', '', '0000-00-00'),
(9, 'Daniel', 'Malheiros', '1234', 'daniel@gmail.com', '1970-01-01'),
(10, 'Marlon', 'Jardim', '12345', 'marlon@gmail.com', '1970-01-01');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cc_ingredientes`
--
ALTER TABLE `cc_ingredientes`
  ADD PRIMARY KEY (`id_ingrediente_cont`),
  ADD KEY `FK_id_Receita_cc_receitas` (`id_Receita`);

--
-- Índices para tabela `cc_palavra_chave`
--
ALTER TABLE `cc_palavra_chave`
  ADD KEY `FK_Palavra_Chave_cc_receitas` (`id_Receita`);

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
  MODIFY `id_ingrediente_cont` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `cc_receitas`
--
ALTER TABLE `cc_receitas`
  MODIFY `id_Receitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `cc_usuarios`
--
ALTER TABLE `cc_usuarios`
  MODIFY `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cc_ingredientes`
--
ALTER TABLE `cc_ingredientes`
  ADD CONSTRAINT `FK_id_Receita_cc_receitas` FOREIGN KEY (`id_Receita`) REFERENCES `cc_receitas` (`id_Receitas`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `cc_palavra_chave`
--
ALTER TABLE `cc_palavra_chave`
  ADD CONSTRAINT `FK_Palavra_Chave_cc_receitas` FOREIGN KEY (`id_Receita`) REFERENCES `cc_receitas` (`id_Receitas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
