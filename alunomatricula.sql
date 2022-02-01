-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 12-Nov-2021 às 12:19
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `formulariocrud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunomatricula`
--

DROP TABLE IF EXISTS `alunomatricula`;
CREATE TABLE IF NOT EXISTS `alunomatricula` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `datanascimento` varchar(10) NOT NULL,
  `nomepai` varchar(100) NOT NULL,
  `nomemae` varchar(100) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexo` varchar(9) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `alunomatricula`
--

INSERT INTO `alunomatricula` (`id`, `nome`, `datanascimento`, `nomepai`, `nomemae`, `telefone`, `email`, `sexo`, `bairro`) VALUES
(1, 'Rafael', '30102001', 'jose', 'sandra', '995447114', 'rafaelm-rodrigues@hotmail.com', 'Masculino', 'Cajuru'),
(2, 'Pedro', '25022002', 'Diego', 'Maria', '31231221', 'pedro@pedro', 'Masculino', 'Hauer'),
(4, 'Maria', '01102001', 'marcelo', 'ilenice', '31231412', 'maria@maria', 'Feminino', 'Jardim das Américas');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
