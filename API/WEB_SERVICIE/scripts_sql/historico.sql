
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 07/06/2017 às 21:19:37
-- Versão do Servidor: 10.1.22-MariaDB
-- Versão do PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `u547935645_api`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE IF NOT EXISTS `historico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_registro` datetime NOT NULL,
  `str_dia_semana` varchar(50) NOT NULL,
  `str_estado` varchar(100) NOT NULL,
  `str_cidade` varchar(100) NOT NULL,
  `str_praia` varchar(100) NOT NULL,
  `hora_dia` varchar(50) NOT NULL,
  `hora` int(11) NOT NULL,
  `periodo_s` float NOT NULL,
  `tamanho_m` float NOT NULL,
  `direcao` varchar(20) NOT NULL,
  `vento_km_h` float NOT NULL,
  `direcao_2` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=137 ;

--
-- Extraindo dados da tabela `historico`
--



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
