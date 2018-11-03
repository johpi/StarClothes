-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Nov-2018 às 02:06
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
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id_carrinho` int(11) NOT NULL,
  `cod_produto` int(11) NOT NULL,
  `cod_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(2, 'dsaa', 'dsaa@hotmal.com', '123', 'dsa', '0000-00-00', 0),
(3, 'asd', 'asd@gmail.com', '213123', 'asd', '0000-00-00', 0);

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
(2, 'asdasd', '', 0, 0, '', '', '', '', 2),
(3, 'asd', '', 0, 0, '', '', '', '', 3);

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
(1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2),
(3, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `id_carrinho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `cod_produto` int(11) NOT NULL,
  `preco` float DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`cod_produto`, `preco`, `nome`, `img`) VALUES
(1, 249, 'Blusa Alça Decote Pregas', 'https://mariafilo.vteximg.com.br/arquivos/ids/211083-500-650/04013166_064_1-BLUSA-ALCA-DECOTE-PREGAS.jpgv=636693195065330000'),
(2, 299, 'Short Floral Pluma Estampado', 'https://mariafilo.vteximg.com.br/arquivos/ids/213129-500-650/04040815_019_1-SHORT-FLORAL-PLUMA.jpg?v=636734733157470000'),
(3, 499, 'Vestido Midi Jatobá Estampado', 'https://mariafilo.vteximg.com.br/arquivos/ids/211879-500-650/04061822_019_2-VESTIDO-MIDI-JATOBA.jpg?v=636715629161170000'),
(4, 299, 'Blusa Manga Trigueiro - Estampado', 'https://mariafilo.vteximg.com.br/arquivos/ids/212209-500-650/04013048_019_2-BLUSA-MANGA-TRIGUEIRO.jpg?v=636718539106730000'),
(5, 599, 'Vestido Renda Fivela Crochê', 'https://mariafilo.vteximg.com.br/arquivos/ids/209897-500-650/01030898_038_2-VESTIDO-RENDA-FIVELA-CROCHE.jpg?v=636683067046200000'),
(6, 379, 'Blusa Bordado Floral Neblina', 'https://mariafilo.vteximg.com.br/arquivos/ids/212139-500-650/04013071_010_2-BLUSA-BORDADO-FLORAL-NEBLINA.jpg?v=636716760110930000'),
(7, 279, 'Vestido Curto Decote Festonê', 'https://mariafilo.vteximg.com.br/arquivos/ids/210409-500-650/02060891_038_1-VESTIDO-CURTO-DECOTE-FESTONE.jpg?v=636691500041030000'),
(8, 140, 'Short Bocas Estampado', 'https://mariafilo.vteximg.com.br/arquivos/ids/193634-500-650/04040798_019_2-SHORT-BOCAS.jpg?v=636548123643500000'),
(9, 279, 'Short Faixa Amarração', 'https://mariafilo.vteximg.com.br/arquivos/ids/209476-500-650/04040833_064_1-SHORT-FAIXA-AMARRACAO.jpg?v=636682126231330000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id_carrinho`),
  ADD KEY `cod_produto_fk` (`cod_produto`),
  ADD KEY `cod_cliente_fk` (`cod_cliente`);

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
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_carrinho_fk` (`id_carrinho`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`cod_produto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id_carrinho` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cod_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medidas`
--
ALTER TABLE `medidas`
  MODIFY `id_medida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `cod_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`cod_produto`) REFERENCES `produtos` (`cod_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `carrinho_ibfk_2` FOREIGN KEY (`cod_cliente`) REFERENCES `cliente` (`cod_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_carrinho`) REFERENCES `carrinho` (`id_carrinho`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
