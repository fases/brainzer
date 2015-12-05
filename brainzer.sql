-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 04-Dez-2015 às 18:45
-- Versão do servidor: 5.5.46-0ubuntu0.14.04.2
-- versão do PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo`
--

CREATE TABLE IF NOT EXISTS `jogo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `nivel` int(11) NOT NULL,
  `complemento` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `jogo`
--

INSERT INTO `jogo` (`id`, `nome`, `nivel`, `complemento`) VALUES
(1, 'questionario_mentalizando', 1, 'video/ANIMAIS_VIDEO_curto.mp4'),
(2, 'questionario_quantos', 2, ''),
(3, 'questionario_mentalizando', 2, 'video/FRUTAS_VIDEO_curto.mp4');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quesito`
--

CREATE TABLE IF NOT EXISTS `quesito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pergunta` varchar(500) DEFAULT NULL,
  `pontuacao_padrao` int(11) NOT NULL,
  `jogo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categoria3` (`jogo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `quesito`
--

INSERT INTO `quesito` (`id`, `pergunta`, `pontuacao_padrao`, `jogo_id`) VALUES
(1, 'Quantas frutas têm no vídeo?', 20, 3),
(2, 'Quais frutas possuem a cor VERMELHA?', 20, 3),
(3, 'Quais frutas começam com a letra “M”?', 20, 3),
(4, 'Quais frutas começam com a letra “L”?', 20, 3),
(5, 'Qual fruta tem a casca amarela? ', 20, 3),
(6, 'Quais frutas tem folhas??', 20, 3),
(7, 'Quantos animais têm no vídeo?', 20, 1),
(8, 'Quais animais têm pelo?', 20, 1),
(9, 'Qual animal tem pena?', 20, 1),
(10, 'Qual animal possui apenas uma cor?', 20, 1),
(11, 'Quantas horas tem um dia?', 20, 2),
(12, 'Quantos dias tem uma semana?', 20, 2),
(13, 'Quantas estações tem um ano?', 20, 2),
(14, 'Quantos meses tem um ano?', 20, 2),
(15, 'Quantos minutos tem uma hora?', 20, 2),
(16, 'Quantos segundos tem um minuto?', 20, 2);

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
  `correta` varchar(100) NOT NULL,
  `quesito_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categoria4` (`quesito_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `respostas`
--

INSERT INTO `respostas` (`id`, `alternativa1`, `alternativa2`, `alternativa3`, `alternativa4`, `correta`, `quesito_id`) VALUES
(1, '1', '5', '9', '4', '5', 1),
(2, 'Laranja e Banana', 'Melancia e Uva', 'Maçã e Melancia', 'Banana e Maçã', '0', 2),
(3, 'Maçã', 'Laranja', 'Uva', 'Melancia', '0', 3),
(4, 'Uva e Maçã', 'Laranja e Melancia', 'Banana e Uva', 'Melancia e Maçã', '0', 4),
(5, 'Maçã e Goiaba', 'Laranja e Uva', 'Uva e Melancia', 'Banana e Laranja', '0', 5),
(6, 'Uva, Maçã e Laranja', 'Laranja', 'Uva e Melancia', 'Maçã e Melancia', '0', 6),
(7, '3', '7', '5', '2', '5', 7),
(8, 'Galo, Porco, Vaca e Gato', 'Vaca, Gato, Porco e Tigre', 'Tigre, Gato, Cachorro e Joaninha', 'Vaca, Tigre, Vaca e Galo', '0', 8),
(9, 'Vaca', 'Porco', 'Tigre', 'Galo', '0', 9),
(10, 'Galo', 'Gato', 'Porco', 'Tigre', '0', 10),
(11, '8 horas', '16 horas', '24 horas', '12 horas', '24', 11),
(12, '2 dias', '7 dias', '4 dias', '10 dias', '7', 12),
(13, '5 estações', '3 estações', '7 estações', '4 estações', '4', 13),
(14, '12 meses', '24 meses', '6 meses', '10 meses', '12', 14),
(15, '72 minutos', '60 minutos', '24 minutos', '10 minutos', '60', 15),
(16, '80 segundos', '24 segundos', '12 segundos', '60 segundos', '60', 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_jogo`
--

CREATE TABLE IF NOT EXISTS `tipo_jogo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `jogo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categoria2` (`jogo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tipo_jogo`
--

INSERT INTO `tipo_jogo` (`id`, `nome`, `jogo_id`) VALUES
(1, 'frutas', 3),
(2, 'animais', 1);

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
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `quesito`
--
ALTER TABLE `quesito`
  ADD CONSTRAINT `fk_categoria3` FOREIGN KEY (`jogo_id`) REFERENCES `jogo` (`id`);

--
-- Limitadores para a tabela `ranking`
--
ALTER TABLE `ranking`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `fk_categoria1` FOREIGN KEY (`jogo_id`) REFERENCES `jogo` (`id`);

--
-- Limitadores para a tabela `respostas`
--
ALTER TABLE `respostas`
  ADD CONSTRAINT `fk_categoria4` FOREIGN KEY (`quesito_id`) REFERENCES `quesito` (`id`);

--
-- Limitadores para a tabela `tipo_jogo`
--
ALTER TABLE `tipo_jogo`
  ADD CONSTRAINT `fk_categoria2` FOREIGN KEY (`jogo_id`) REFERENCES `jogo` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
