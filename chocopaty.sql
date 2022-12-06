-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Dez-2022 às 05:00
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
-- Banco de dados: `chocopaty`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpedidos`
--

CREATE TABLE `tbpedidos` (
  `IdPedidos` int(11) NOT NULL,
  `IdProd` int(11) NOT NULL,
  `Id_user` int(11) NOT NULL,
  `data_compra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `IdProd` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `valor` double NOT NULL,
  `imagem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbproduto`
--

INSERT INTO `tbproduto` (`IdProd`, `nome`, `descricao`, `valor`, `imagem`) VALUES
(1, 'Café', 'Café forte 50ml', 5.99, 'cafe.jpg'),
(2, 'Café com leite', 'Café com leite 100ml', 8.99, 'cafecomleite.jpg'),
(3, 'Chocolate quente', 'Leite com chocolate 70% cacau 150ml.', 13.99, 'chocolate.jpeg'),
(4, 'Bolo de festa', 'Bolo recheado de festa fatia 250g.', 15.99, 'bolodefesta.jpg'),
(5, 'Pão na chapa', '1 Pão frances fresquinho com manteiga.', 5.99, 'paonachapa.jpg'),
(6, 'Pão com ovo', 'um pão frances com ovos de galinha feliz.', 18.99, 'paocomovo.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbuser`
--

CREATE TABLE `tbuser` (
  `Id_user` int(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(130) NOT NULL,
  `cpf` int(11) NOT NULL,
  `cep` int(11) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `telefone` int(11) NOT NULL,
  `senha` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbuser`
--

INSERT INTO `tbuser` (`Id_user`, `nome`, `email`, `cpf`, `cep`, `endereco`, `telefone`, `senha`) VALUES
(1, 'sergio', 'sergioST@chocopaty.com.br', 1234567890, 24000888, 'Rua das águas vivas nº1001 casa 1\r\n', 219998888, '0123'),
(2, 'Ana Oliveira', 'anaOli@chocopaty.com.br', 1234567890, 23999000, 'Rua das flores casa 2 ', 219990000, '$2y$10'),
(3, 'Ana Oliveira', 'anaOli@chocopaty.com.br', 1234567890, 23999000, 'Rua das flores casa 2 ', 219990000, '$2y$10');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbpedidos`
--
ALTER TABLE `tbpedidos`
  ADD PRIMARY KEY (`IdPedidos`);

--
-- Índices para tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`IdProd`);

--
-- Índices para tabela `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`Id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbpedidos`
--
ALTER TABLE `tbpedidos`
  MODIFY `IdPedidos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `IdProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `Id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
