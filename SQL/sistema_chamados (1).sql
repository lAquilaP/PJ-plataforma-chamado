-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/05/2025 às 21:59
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_chamados`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `chamados`
--

CREATE TABLE `chamados` (
  `idChamado` int(11) NOT NULL,
  `idOps` varchar(10) DEFAULT NULL,
  `nome` varchar(100) NOT NULL,
  `status` varchar(50) DEFAULT 'em-aberto',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `chamados`
--

INSERT INTO `chamados` (`idChamado`, `idOps`, `nome`, `status`, `created_at`, `descricao`) VALUES
(4029, 'Ops73385', 'lucas', 'cancelado', '2025-05-09 00:49:12', 'mlçmo'),
(9533, 'Ops73385', 'lucas', 'cancelado', '2025-05-08 23:59:58', 'bjkl'),
(9668, 'Ops73385', 'lucas', 'ativo', '2025-05-08 23:27:49', 'mlç'),
(9669, 'Ops56650', 'Cillum sin', 'cliente', '2025-05-08 17:06:27', 'Ut ea id mollitia e'),
(9670, 'Ops73385', 'lucas', 'cliente', '2025-05-08 17:15:43', 'cliente'),
(9671, 'Ops98762', 'lucas', 'cliente', '2025-05-08 15:27:34', 'cliente'),
(9672, 'Ops56650', 'Placeat veritatis c', '321', '2025-05-08 15:33:04', 'adm'),
(9673, 'Ops73385', 'cliente', 'cliente', '2025-05-08 17:06:27', 'tyninymec@mailinator.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idOps` varchar(10) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `classe` enum('adm','cliente') NOT NULL,
  `senha` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`idOps`, `nome`, `classe`, `senha`, `email`, `created_at`) VALUES
('Cillum sin', 'Ut ea id mollitia e', 'cliente', 'Pa$$w0rd!', 'tyninymec@mailinator.com', '2025-05-08 17:06:27'),
('Ops10000', 'Admin', 'adm', 'adm123', 'admin@example.com', '2025-05-08 17:06:27'),
('Ops56650', 'Placeat veritatis c', 'adm', '321', 'Professor@gmAIL.como', '2025-05-08 15:33:04'),
('Ops73385', 'lucas', 'cliente', '123', 'usuario@gmail.com', '2025-05-08 17:15:43'),
('Ops98762', 'lucas', 'cliente', '321', 'Professor@gmAIL.com', '2025-05-08 15:27:34');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `chamados`
--
ALTER TABLE `chamados`
  ADD PRIMARY KEY (`idChamado`),
  ADD KEY `idOps` (`idOps`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idOps`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `chamados`
--
ALTER TABLE `chamados`
  MODIFY `idChamado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9674;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `chamados`
--
ALTER TABLE `chamados`
  ADD CONSTRAINT `chamados_ibfk_1` FOREIGN KEY (`idOps`) REFERENCES `usuarios` (`idOps`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
