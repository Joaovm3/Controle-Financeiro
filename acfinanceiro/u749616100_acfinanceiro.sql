-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16/05/2020 às 18:25
-- Versão do servidor: 10.4.13-MariaDB
-- Versão do PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u749616100_acfinanceiro`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `ativos`
--

CREATE TABLE `ativos` (
  `id` int(10) NOT NULL,
  `caracteristica` varchar(15) NOT NULL,
  `id_email` varchar(50) NOT NULL,
  `datas` varchar(10) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `categoria` varchar(60) NOT NULL,
  `valor` varchar(20) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `ativos`
--

INSERT INTO `ativos` (`id`, `caracteristica`, `id_email`, `datas`, `nome`, `categoria`, `valor`, `reg_date`) VALUES
(66, 'Ativo', 'dev.rsanttos@gmail.com', '2020-01-01', 'JW Fotografias', 'Salário', '600.00', '2020-02-29 03:23:21'),
(67, 'Ativo', 'dev.rsanttos@gmail.com', '2020-02-01', 'JW Fotografias', 'Salário', '600.00', '2020-02-29 03:23:50'),
(68, 'Ativo', 'dev.rsanttos@gmail.com', '2020-03-01', 'JW Fotografias', 'Salário', '600.00', '2020-02-29 03:24:12'),
(69, 'Ativo', 'dev.rsanttos@gmail.com', '2020-04-01', 'JW Fotografias', 'Salário', '350.00', '2020-04-02 14:03:09');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria_ativos`
--

CREATE TABLE `categoria_ativos` (
  `id_categoria` varchar(60) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `categoria_ativos`
--

INSERT INTO `categoria_ativos` (`id_categoria`, `reg_date`) VALUES
('Aluguéis', '2020-02-03 19:46:49'),
('Carta de Crédito', '2020-02-03 19:46:49'),
('Herança', '2020-02-03 19:46:49'),
('Prêmio ou Bonificação', '2020-02-03 19:46:49'),
('Salário', '2020-02-03 19:46:49'),
('Vendas', '2020-02-03 19:46:49');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria_passivos`
--

CREATE TABLE `categoria_passivos` (
  `id_categoria` varchar(60) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `categoria_passivos`
--

INSERT INTO `categoria_passivos` (`id_categoria`, `reg_date`) VALUES
('Alimentação', '2020-02-03 19:56:36'),
('Aluguéis', '2020-02-03 19:56:36'),
('Automóveis', '2020-02-03 19:56:36'),
('Cartão de Crédito', '2020-02-03 19:56:36'),
('Despensa Casa', '2020-02-03 19:56:36'),
('Educação', '2020-02-03 19:56:36'),
('Imposto', '2020-02-03 19:56:36'),
('Investimento', '2020-02-15 15:01:13'),
('Lazer', '2020-02-03 19:56:36'),
('Pensão', '2020-02-03 19:56:36'),
('Prestação', '2020-02-03 19:56:36'),
('Saúde', '2020-02-03 19:56:36');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria_patrimonio`
--

CREATE TABLE `categoria_patrimonio` (
  `id_categoria` varchar(60) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `categoria_patrimonio`
--

INSERT INTO `categoria_patrimonio` (`id_categoria`, `reg_date`) VALUES
('Ações', '2020-02-03 20:00:58'),
('Automóvel', '2020-02-03 20:00:58'),
('Imóveis', '2020-02-03 20:00:58'),
('Joias', '2020-02-03 20:00:58'),
('Poupança', '2020-02-03 20:00:58');

-- --------------------------------------------------------

--
-- Estrutura para tabela `passivos`
--

CREATE TABLE `passivos` (
  `id` int(10) NOT NULL,
  `caracteristica` varchar(15) NOT NULL,
  `id_email` varchar(50) NOT NULL,
  `datas` varchar(10) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `categoria` varchar(60) NOT NULL,
  `valor` varchar(20) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `passivos`
--

INSERT INTO `passivos` (`id`, `caracteristica`, `id_email`, `datas`, `nome`, `categoria`, `valor`, `reg_date`) VALUES
(82, 'Passivos', 'dev.rsanttos@gmail.com', '2020-01-10', 'Boleto', 'Cartão de Crédito', '600.00', '2020-02-29 03:25:23'),
(84, 'Passivos', 'dev.rsanttos@gmail.com', '2020-03-10', 'Boleto', 'Cartão de Crédito', '550.00', '2020-02-29 03:26:15'),
(88, 'Passivos', 'dev.rsanttos@gmail.com', '2020-02-10', 'Boleto', 'Cartão de Crédito', '600.00', '2020-02-29 03:35:32'),
(91, 'Passivos', 'dev.rsanttos@gmail.com', '2020-03-03', 'Motel', 'Lazer', '25.00', '2020-03-03 03:03:20'),
(92, 'Passivos', 'dev.rsanttos@gmail.com', '2020-03-01', 'Lanche', 'Alimentação', '10.00', '2020-03-06 04:28:05'),
(93, 'Passivos', 'dev.rsanttos@gmail.com', '2020-03-03', 'Rosana', 'outros', '5.00', '2020-03-06 04:28:40'),
(94, 'Passivos', 'dev.rsanttos@gmail.com', '2020-03-10', 'Rosana', 'outros', '10.00', '2020-03-10 00:46:32'),
(95, 'Passivos', 'dev.rsanttos@gmail.com', '2020-04-01', 'Noeme', 'Cartão de Crédito', '350.00', '2020-04-02 14:03:59');

-- --------------------------------------------------------

--
-- Estrutura para tabela `patrimonio`
--

CREATE TABLE `patrimonio` (
  `id` int(10) NOT NULL,
  `caracteristica` varchar(15) NOT NULL,
  `id_email` varchar(50) NOT NULL,
  `datas` varchar(10) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `categoria` varchar(60) NOT NULL,
  `valor` varchar(20) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `patrimonio`
--

INSERT INTO `patrimonio` (`id`, `caracteristica`, `id_email`, `datas`, `nome`, `categoria`, `valor`, `reg_date`) VALUES
(20, 'Patrimônio', 'dev.rsanttos@gmail.com', '2020-02-29', 'NuBank', 'Poupança', '0.60', '2020-02-29 03:34:04');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tokens`
--

CREATE TABLE `tokens` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `nome` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `email`, `senha`, `reg_date`) VALUES
('Rosanna', 'dasilvarosannaregina@gmail.com', 'bb7eefce250de4a06adb524568b50a8f', '2020-02-06 17:39:07'),
('Ricardo', 'dev.rsanttos@gmail.com', '7a9dd2de87562d765fe1a6f7a9d72cf6', '2020-02-21 06:40:52'),
('Noeme', 'snoemesousa@yahoo.com.br', '6d6354ece40846bf7fca65dfabd5d9d4', '2020-02-16 16:21:49'),
('Henrique', 'zhenri1959@gmail.com', 'f8e17ef4929aea5ca25b54af76e6896b', '2020-02-15 18:16:19');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `ativos`
--
ALTER TABLE `ativos`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Índices de tabela `categoria_ativos`
--
ALTER TABLE `categoria_ativos`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices de tabela `categoria_passivos`
--
ALTER TABLE `categoria_passivos`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices de tabela `categoria_patrimonio`
--
ALTER TABLE `categoria_patrimonio`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices de tabela `passivos`
--
ALTER TABLE `passivos`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Índices de tabela `patrimonio`
--
ALTER TABLE `patrimonio`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Índices de tabela `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `ativos`
--
ALTER TABLE `ativos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de tabela `passivos`
--
ALTER TABLE `passivos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT de tabela `patrimonio`
--
ALTER TABLE `patrimonio`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
