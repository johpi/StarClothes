-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Out-2018 às 08:06
-- Versão do servidor: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roupas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cod_cliente` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cpf` varchar(16) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nasc` date NOT NULL,
  `tell` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cod_cliente`, `nome`, `email`, `cpf`, `senha`, `nasc`, `tell`) VALUES
(1, 'john', 'john@hotmail.com', '1234123', 'john', '1998-11-16', 11999999999),


-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `id_endereco` int(11) NOT NULL,
  `nome_destinatario` varchar(45) DEFAULT NULL,
  `rua` varchar(45) DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `cod_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`id_endereco`, `nome_destinatario`, `rua`, `cep`, `numero`, `complemento`, `bairro`, `estado`, `cidade`, `cod_cliente`) VALUES
(1, 'john', '0', 0, 0, '0', '0', '0', '0', 1),


-- --------------------------------------------------------

--
-- Estrutura da tabela `medidas`
--

CREATE TABLE `medidas` (
  `id_medida` int(11) NOT NULL,
  `altura_seio` int(11) NOT NULL,
  `comp_braco` int(11) NOT NULL,
  `circun_busto` int(11) NOT NULL,
  `comp_costas` int(11) NOT NULL,
  `comp_seio_cintura` int(11) NOT NULL,
  `circun_cintura` int(11) NOT NULL,
  `dist_cintura_quadril` int(11) NOT NULL,
  `dist_quadril_joelho` int(11) NOT NULL,
  `altura_busto` int(11) NOT NULL,
  `altura_joelho` int(11) NOT NULL,
  `altura_quadril` int(11) NOT NULL,
  `abertura_boca_calca` int(11) NOT NULL,
  `busto` int(11) NOT NULL,
  `comp_corpo` int(11) NOT NULL,
  `cintura` int(11) NOT NULL,
  `comp_pernas` int(11) NOT NULL,
  `costas` int(11) NOT NULL,
  `circun_joelho` int(11) NOT NULL,
  `ombro` int(11) NOT NULL,
  `pescoco` int(11) NOT NULL,
  `comp_manga_longa` int(11) NOT NULL,
  `cod_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `medidas`
--

INSERT INTO `medidas` (`id_medida`, `altura_seio`, `comp_braco`, `circun_busto`, `comp_costas`, `comp_seio_cintura`, `circun_cintura`, `dist_cintura_quadril`, `dist_quadril_joelho`, `altura_busto`, `altura_joelho`, `altura_quadril`, `abertura_boca_calca`, `busto`, `comp_corpo`, `cintura`, `comp_pernas`, `costas`, `circun_joelho`, `ombro`, `pescoco`, `comp_manga_longa`, `cod_cliente`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),


--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cod_cliente`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id_endereco`),
  ADD UNIQUE KEY `cod_cliente_fk` (`cod_cliente`);

--
-- Indexes for table `medidas`
--
ALTER TABLE `medidas`
  ADD PRIMARY KEY (`id_medida`),
  ADD UNIQUE KEY `cod_cliente_fk` (`cod_cliente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cod_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medidas`
--
ALTER TABLE `medidas`
  MODIFY `id_medida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`cod_cliente`) REFERENCES `cliente` (`cod_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `medidas`
--
ALTER TABLE `medidas`
  ADD CONSTRAINT `medidas_ibfk_1` FOREIGN KEY (`cod_cliente`) REFERENCES `cliente` (`cod_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
