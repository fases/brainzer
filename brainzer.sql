-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.27
-- Versão do PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `brainzer`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo`
--

CREATE TABLE IF NOT EXISTS `jogo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `jogo`
--

INSERT INTO `jogo` (`id`, `nome`) VALUES
(1, 'questionario_mentalizando'),
(2, 'questionario_quantos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quesito`
--

CREATE TABLE IF NOT EXISTS `quesito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pergunta` varchar(500) DEFAULT NULL,
  `pontuacao_padrao` int(11) NOT NULL,
  `jogo_id` int(11) NOT NULL,
  `respostaCorreta` varchar(300) NOT NULL,
  `tipojogo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categoria3` (`jogo_id`),
  KEY `fk7_tipojogo` (`tipojogo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `quesito`
--

INSERT INTO `quesito` (`id`, `pergunta`, `pontuacao_padrao`, `jogo_id`, `respostaCorreta`, `tipojogo_id`) VALUES
(1, 'Quantas frutas tem no video?', 20, 1, '5', 1),
(2, 'Quais frutas possuem a cor VERMELHA?', 20, 1, 'Melancia e Maca', 1),
(3, 'Quais frutas comecam com a letra M?', 20, 1, 'Melancia e Maca', 1),
(4, 'Quais frutas comecam com a letra L?', 20, 1, 'Laranja', 1),
(5, 'Qual fruta tem a casca amarela? ', 20, 1, 'Banana e Laranja', 1),
(6, 'Quais frutas tem folhas??', 20, 1, 'Uva, Maca e Laranja', 1),
(7, 'Quantos animais tem no video?', 20, 1, '5', 2),
(8, 'Quais animais tem pelo?', 20, 1, 'Vaca, Gato, Porco e Tigre', 2),
(9, 'Qual animal tem pena?', 20, 1, 'Galo', 2),
(10, 'Qual animal possui apenas uma cor?', 20, 1, 'Porco', 2),
(11, 'Quantas horas tem um dia?', 20, 2, '24 horas', 3),
(12, 'Quantos dias tem uma semana?', 20, 2, '7 dias', 3),
(13, 'Quantas estacoes tem um ano?', 20, 2, '4 estacoes', 3),
(14, 'Quantos meses tem um ano?', 20, 2, '12 meses', 3),
(15, 'Quantos minutos tem uma hora?', 20, 2, '60 minutos', 3),
(16, 'Quantos segundos tem um minuto?', 20, 2, '60 segundos', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ranking`
--

CREATE TABLE IF NOT EXISTS `ranking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `jogo_id` int(11) NOT NULL,
  `pontuacao` int(11) NOT NULL,
  `dh` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categoria` (`usuario_id`),
  KEY `fk_categoria1` (`jogo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

CREATE TABLE IF NOT EXISTS `respostas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alternativa1` varchar(500) NOT NULL,
  `alternativa2` varchar(500) NOT NULL,
  `alternativa3` varchar(500) NOT NULL,
  `alternativa4` varchar(500) NOT NULL,
  `quesito_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categoria4` (`quesito_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `respostas`
--

INSERT INTO `respostas` (`id`, `alternativa1`, `alternativa2`, `alternativa3`, `alternativa4`, `quesito_id`) VALUES
(1, '1', '5', '9', '4', 1),
(2, 'Laranja e Banana', 'Melancia e Uva', 'Melancia e Maca', 'Banana e Maca', 2),
(3, 'Maca', 'Laranja', 'Uva', 'Melancia', 4),
(4, 'Uva e Maca', 'Laranja e Melancia', 'Banana e Uva', 'Melancia e Maca', 3),
(5, 'Maca e Goiaba', 'Laranja e Uva', 'Uva e Melancia', 'Banana e Laranja', 5),
(6, 'Uva, Maca e Laranja', 'Laranja', 'Uva e Melancia', 'Maca e Melancia', 6),
(7, '3', '7', '5', '2', 7),
(8, 'Galo, Porco, Vaca e Gato', 'Vaca, Gato, Porco e Tigre', 'Tigre, Gato, Cachorro e Joaninha', 'Vaca, Tigre, Vaca e Galo', 8),
(9, 'Vaca', 'Porco', 'Tigre', 'Galo', 9),
(10, 'Galo', 'Gato', 'Porco', 'Tigre', 10),
(11, '8 horas', '16 horas', '24 horas', '12 horas', 11),
(12, '2 dias', '7 dias', '4 dias', '10 dias', 12),
(13, '5 estações', '3 estações', '7 estações', '4 estações', 13),
(14, '12 meses', '24 meses', '6 meses', '10 meses', 14),
(15, '72 minutos', '60 minutos', '24 minutos', '10 minutos', 15),
(16, '80 segundos', '24 segundos', '12 segundos', '60 segundos', 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_jogo`
--

CREATE TABLE IF NOT EXISTS `tipo_jogo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `jogo_id` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  `complemento` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categoria2` (`jogo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tipo_jogo`
--

INSERT INTO `tipo_jogo` (`id`, `nome`, `jogo_id`, `nivel`, `complemento`) VALUES
(1, 'frutas', 1, 2, 'video/FRUTAS_VIDEO_curto.mp4'),
(2, 'animais', 1, 1, 'video/ANIMAIS_VIDEO_curto.mp4'),
(3, 'quantidade', 2, 2, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `idade` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `idade`, `user`) VALUES
(2, 'Alana Ribeiro', 'alana_fatima@hotmail.com', '202cb962ac59075b964b', 18, 'alanaribeiro');

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `quesito`
--
ALTER TABLE `quesito`
  ADD CONSTRAINT `fk7_tipojogo` FOREIGN KEY (`tipojogo_id`) REFERENCES `tipo_jogo` (`id`),
  ADD CONSTRAINT `fk_categoria3` FOREIGN KEY (`jogo_id`) REFERENCES `jogo` (`id`);

--
-- Restrições para a tabela `ranking`
--
ALTER TABLE `ranking`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `fk_categoria1` FOREIGN KEY (`jogo_id`) REFERENCES `jogo` (`id`);

--
-- Restrições para a tabela `respostas`
--
ALTER TABLE `respostas`
  ADD CONSTRAINT `fk_categoria4` FOREIGN KEY (`quesito_id`) REFERENCES `quesito` (`id`);

--
-- Restrições para a tabela `tipo_jogo`
--
ALTER TABLE `tipo_jogo`
  ADD CONSTRAINT `fk_categoria2` FOREIGN KEY (`jogo_id`) REFERENCES `jogo` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
