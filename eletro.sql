-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Jan-2023 às 16:35
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `eletro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `eletros`
--

CREATE TABLE `eletros` (
  `Id` int(10) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Descricao` varchar(255) NOT NULL,
  `Tensao` int(10) NOT NULL,
  `Marca` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `eletros`
--

INSERT INTO `eletros` (`Id`, `Nome`, `Descricao`, `Tensao`, `Marca`) VALUES
(1, 'Notebook i5', 'Este produto é totalmente versátil. Tudo para ser personalizado para comportar o que você preferir', 1, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `marca`
--

CREATE TABLE `marca` (
  `marca_Id` int(10) NOT NULL,
  `Marca` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `marca`
--

INSERT INTO `marca` (`marca_Id`, `Marca`) VALUES
(1, 'Electrolux'),
(2, 'Brastemp'),
(3, 'Dell'),
(4, 'Philco');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tensao`
--

CREATE TABLE `tensao` (
  `tensao_Id` int(10) NOT NULL,
  `Tensao` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tensao`
--

INSERT INTO `tensao` (`tensao_Id`, `Tensao`) VALUES
(1, '220v'),
(2, '110v'),
(8, 'Bi-Volt');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `eletros`
--
ALTER TABLE `eletros`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Tensao` (`Tensao`),
  ADD KEY `Marca` (`Marca`);

--
-- Índices para tabela `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`marca_Id`);

--
-- Índices para tabela `tensao`
--
ALTER TABLE `tensao`
  ADD PRIMARY KEY (`tensao_Id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `eletros`
--
ALTER TABLE `eletros`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `marca`
--
ALTER TABLE `marca`
  MODIFY `marca_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tensao`
--
ALTER TABLE `tensao`
  MODIFY `tensao_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `eletros`
--
ALTER TABLE `eletros`
  ADD CONSTRAINT `eletros_ibfk_1` FOREIGN KEY (`Tensao`) REFERENCES `tensao` (`tensao_Id`),
  ADD CONSTRAINT `eletros_ibfk_2` FOREIGN KEY (`Marca`) REFERENCES `marca` (`marca_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
