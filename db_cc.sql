-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Jul-2023 às 20:08
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
  `Uni_Ingrediente` varchar(50) NOT NULL,
  `id_Receita` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cc_ingredientes`
--

INSERT INTO `cc_ingredientes` (`id_ingrediente_cont`, `Nome_Ingrediente`, `Q_Ingrediente`, `Uni_Ingrediente`, `id_Receita`) VALUES
(1, '[value-2]', 3, '[value-4]', 5),
(21, 'flocos de milho', 123, 'xícaras de chá', 13);

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
(4, 'Cuzcuz', 'Pedro Lucas', 2),
(5, 'Cuzcuz', 'Pedro Lucas', 2),
(6, 'Cuzcuz', 'Pedro Lucas', 2),
(7, 'Arroz', 'Pedro Lucas', 2),
(8, 'Teste', 'Pedro Lucas', 2),
(9, 'Teste', 'Pedro Lucas', 2),
(10, 'Brigadeiro', 'Pedro Lucas', 2),
(11, 'Teste', 'Daniel Malheiros', 9),
(12, 'teste', ' ', 9),
(13, 'Cuzcuz', 'Marlon', 10);

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
-- Índices para tabela `cc_receitas`
--
ALTER TABLE `cc_receitas`
  ADD PRIMARY KEY (`id_Receitas`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cc_ingredientes`
--
ALTER TABLE `cc_ingredientes`
  MODIFY `id_ingrediente_cont` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `cc_receitas`
--
ALTER TABLE `cc_receitas`
  MODIFY `id_Receitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cc_ingredientes`
--
ALTER TABLE `cc_ingredientes`
  ADD CONSTRAINT `FK_id_Receita_cc_receitas` FOREIGN KEY (`id_Receita`) REFERENCES `cc_receitas` (`id_Receitas`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
