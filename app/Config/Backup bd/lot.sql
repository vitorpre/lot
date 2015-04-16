-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Abr-2015 às 22:47
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lot`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos`
--

CREATE TABLE IF NOT EXISTS `artigos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data` datetime NOT NULL,
  `imagem_capa` varchar(150) CHARACTER SET utf8 NOT NULL,
  `usuario_id` int(10) unsigned NOT NULL,
  `categoria_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos_champions`
--

CREATE TABLE IF NOT EXISTS `artigos_champions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `artigo_id` int(10) unsigned NOT NULL,
  `champion_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos_items`
--

CREATE TABLE IF NOT EXISTS `artigos_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `artigo_id` int(10) unsigned NOT NULL,
  `item_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8 NOT NULL,
  `descricao` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `champions`
--

CREATE TABLE IF NOT EXISTS `champions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8 NOT NULL,
  `foto` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `champions`
--

INSERT INTO `champions` (`id`, `nome`, `foto`) VALUES
(1, 'Zed', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudos`
--

CREATE TABLE IF NOT EXISTS `conteudos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) CHARACTER SET utf8 NOT NULL,
  `conteudo` text CHARACTER SET utf8 NOT NULL,
  `artigo_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `infadicionals`
--

CREATE TABLE IF NOT EXISTS `infadicionals` (
  `id` int(10) unsigned NOT NULL,
  `dh_cadastro` datetime NOT NULL,
  `dt_nascimento` date NOT NULL,
  `nome` varchar(100) CHARACTER SET utf8 NOT NULL,
  `facebook` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `twitter` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(150) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8 NOT NULL,
  `foto` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(30) CHARACTER SET utf8 NOT NULL,
  `senha` varchar(30) CHARACTER SET utf8 NOT NULL,
  `usuario_lol` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `liga` int(2) unsigned zerofill DEFAULT NULL,
  `divisao` int(2) unsigned zerofill DEFAULT NULL,
  `foto` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `fl_permite_divulgar` tinyint(1) unsigned zerofill DEFAULT NULL,
  `infadicional_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`),
  UNIQUE KEY `usuario_lol` (`usuario_lol`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`, `usuario_lol`, `liga`, `divisao`, `foto`, `fl_permite_divulgar`, `infadicional_id`) VALUES
(1, 'vitorpre', 'tordo123', '', NULL, NULL, '', 0, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
