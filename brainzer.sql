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
(2, 'questionario_quantos'),
(3, 'jogo_memoria');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Extraindo dados da tabela `quesito`
--

INSERT INTO `quesito` (`id`, `pergunta`, `pontuacao_padrao`, `jogo_id`, `respostaCorreta`, `tipojogo_id`) VALUES
(1, 'Quantas frutas tem no video?', 17, 1, '5', 1),
(2, 'Quais frutas possuem a cor VERMELHA?', 16, 1, 'Melancia e Maca', 1),
(3, 'Quais frutas comecam com a letra M?', 16, 1, 'Melancia e Maca', 1),
(4, 'Quais frutas comecam com a letra L?', 17, 1, 'Laranja', 1),
(5, 'Qual fruta tem a casca amarela? ', 17, 1, 'Banana e Laranja', 1),
(6, 'Quais frutas tem folhas??', 17, 1, 'Uva, Maca e Laranja', 1),
(7, 'Quantos animais tem no video?', 25, 1, '5', 2),
(8, 'Quais animais tem pelo?', 25, 1, 'Vaca, Gato, Porco e Tigre', 2),
(9, 'Qual animal tem pena?', 25, 1, 'Galo', 2),
(10, 'Qual animal possui apenas uma cor?', 25, 1, 'Porco', 2),
(11, 'Quantas horas tem um dia?', 17, 2, '24 horas', 3),
(12, 'Quantos dias tem uma semana?', 16, 2, '7 dias', 3),
(13, 'Quantas estacoes tem um ano?', 17, 2, '4 estacoes', 3),
(14, 'Quantos meses tem um ano?', 17, 2, '12 meses', 3),
(15, 'Quantos minutos tem uma hora?', 16, 2, '60 minutos', 3),
(16, 'Quantos segundos tem um minuto?', 17, 2, '60 segundos', 3),
(17, 'imagens/banana.png', 17, 3, 'imagens/banana.png', 4),
(18, 'imagens/melancia.png', 16, 3, 'imagens/melancia.png', 4),
(19, 'imagens/maca.png', 16, 3, 'imagens/maca.png', 4),
(20, 'imagens/laranja.png', 17, 3, 'imagens/laranja.png', 4),
(21, 'imagens/morango.png', 16, 3, 'imagens/morango.png', 4),
(22, 'imagens/uva.png', 16, 3, 'imagens/uva.png', 4),
(23, 'imagens/borboleta.png', 16, 3, 'imagens/borboleta.png', 5),
(24, 'imagens/cachorro.png', 16, 3, 'imagens/cachorro.png', 5),
(25, 'imagens/cavalo.png', 16, 3, 'imagens/cavalo.png', 5),
(26, 'imagens/coelho.png', 16, 3, 'imagens/coelho.png', 5),
(27, 'imagens/gatinho.png', 16, 3, 'imagens/gatinho.png', 5),
(28, 'imagens/porco.png', 16, 3, 'imagens/porco.png', 5),
(29, 'imagens/tigre.png', 16, 3, 'imagens/tigre.png', 5),
(30, 'imagens/vaca.png', 16, 3, 'imagens/vaca.png', 5),
(31, 'imagens/bicicleta.png', 16, 3, 'imagens/bicicleta.png', 6),
(32, 'imagens/bola.png', 16, 3, 'imagens/bola.png', 6),
(33, 'imagens/carro.png', 16, 3, 'imagens/carro.png', 6),
(34, 'imagens/casa.png', 16, 3, 'imagens/casa.png', 6),
(35, 'imagens/chapeu.png', 16, 3, 'imagens/chapeu.png', 6),
(36, 'imagens/livro.png', 16, 3, 'imagens/livro.png', 6),
(37, 'imagens/onibus.png', 16, 3, 'imagens/onibus.png', 6),
(38, 'imagens/outraBicicleta.png', 16, 3, 'imagens/outraBicicleta.png', 6),
(39, 'imagens/relogio.png', 16, 3, 'imagens/relogio.png', 6),
(40, 'imagens/sorvete.png', 16, 3, 'imagens/sorvete.png', 6),
(41, 'Quantos objetos tem no video?', 12, 1, '6 objetos', 7),
(42, 'Qual o objeto e azul?', 12, 1, 'Carro', 7),
(43, 'Qual objeto possui mais de tres cores?', 12, 1, 'Bola', 7),
(44, 'Qual o objeto se usa como acessorio para cabeça?', 12, 1, 'Chapeu', 7),
(45, 'Quais objetos possuem rodas?', 13, 1, 'Bicicleta e Carro', 7),
(46, 'Qual objeto possui paginas?', 13, 1, 'Livro', 7),
(47, 'Quais objetos tem a cor vermelha?', 13, 1, 'Livro e Bicicleta', 7),
(48, 'Qual objeto as criancas usam para brincar?', 13, 1, 'Bicicleta e Bola', 7),
(49, 'Quantos dias tem em um mes no geral?', 12, 2, '30 dias', 8),
(50, 'Quantos naipes tem em um jogo de baralho? ', 12, 2, '4 naipes', 8),
(51, 'Quantas semanas tem em um mes?', 12, 2, '4 semanas', 8),
(52, 'Quantas refeicoes minimas uma pessoa deve fazer durante o dia?', 12, 2, '3 refeicoes', 8),
(53, 'No minimo quantas vezes se deve escovar os dentes durante o dia?', 13, 2, '3 vezes', 8),
(54, 'Quantas vezes o sol nasce durante o dia?', 13, 2, '1 vez', 8),
(55, 'Quanto e 1+1?', 13, 2, '2', 8),
(56, 'Quantos dias tem um ano normal?', 13, 2, '365 dias', 8),
(57, 'Quanto e o quintuplo de 1?', 10, 2, '5', 9),
(58, 'Sabendo que um ano bissexto tem 1 dia a mais que o normal, quantos dias tem um ano bissexto? ', 10, 2, '366 dias', 9),
(59, 'Com quantos anos uma pessoa se torna adulta no Brasil?', 10, 2, '18 anos', 9),
(60, 'Quantos pulmoes tem um ser humano normal?', 10, 2, '2 pulmoes', 9),
(61, 'Quantos meses dura uma gestacao humana saudavel?', 10, 2, '9 meses', 9),
(62, 'Quantas vezes a lua aparece durante uma semana?', 10, 2, '7 vezes', 9),
(63, 'Quantos minutos tem em 1 hora e 10 minutos?', 10, 2, '70 minutos', 9),
(64, 'Um trio de pessoas tem quantas pessoas?', 10, 2, '3 pessoas', 9),
(65, 'Duas horas tem quantos minutos?', 10, 2, '120 minutos', 9),
(66, 'Quantas letras tem no alfabeto?', 10, 2, '26 letras', 9);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `ranking`
--

INSERT INTO `ranking` (`id`, `usuario_id`, `jogo_id`, `pontuacao`, `dh`) VALUES
(1, 2, 2, 83, '0000-00-00 00:00:00'),
(2, 2, 2, 83, '0000-00-00 00:00:00'),
(3, 2, 2, 83, '2016-02-03 07:47:40'),
(4, 3, 1, 75, '2016-02-03 07:55:03'),
(5, 2, 1, 100, '2016-02-03 10:54:29');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

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
(16, '80 segundos', '24 segundos', '12 segundos', '60 segundos', 16),
(17, '5', '7', '6', '4', 41),
(18, 'Chapeu', 'Casa', 'Bola', 'Carro', 42),
(19, 'Bola', 'Livro', 'Bicicleta', 'Carro', 43),
(20, 'Televisao', 'Chapeu', 'Relogio', 'Casa', 44),
(21, 'Bicicleta e Carro', 'Chapeu e Livro', 'Bicicleta e Bola', 'Casa e Carro', 45),
(22, 'Bola', 'Livro', 'Casa', 'Bicicleta', 46),
(23, 'Bola e Carro', 'Livro e Bicicleta', 'Chapeu e Bola', 'Livro e Carro', 47),
(24, 'Bicicleta e Bola', 'Casa e Carro', 'Chapeu e copo', 'Tomada e Livro', 48);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `tipo_jogo`
--

INSERT INTO `tipo_jogo` (`id`, `nome`, `jogo_id`, `nivel`, `complemento`) VALUES
(1, 'frutas', 1, 1, 'video/FRUTAS_VIDEO_curto.mp4'),
(2, 'animais', 1, 2, 'video/ANIMAIS_VIDEO_curto.mp4'),
(3, 'quantidade', 2, 2, NULL),
(4, 'memoria_frutas', 3, 1, 'imagens/verso.png'),
(5, 'memoria_animais', 3, 2, 'imagens/verso.png'),
(6, 'memoria_objetos', 3, 3, 'imagens/verso.png'),
(7, 'objetos', 1, 3, 'video/OBJETOS_VIDEO_curto.mp4'),
(8, 'quantidade_2', 2, 2, NULL),
(9, 'quantidade_3', 2, 3, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `idade`, `user`) VALUES
(2, 'Alana Ribeiro', 'alana_fatima@hotmail.com', '202cb962ac59075b964b', 18, 'alanaribeiro'),
(3, 'Pedro Tomaz', 'pedrootomaz23@gmail.com', '202cb962ac59075b964b', 18, 'pedrootomaz'),
(4, 'pedro', 'pedro@gmail.com', '202cb962ac59075b964b', 18, 'pedrotomaz'),
(5, 'Pedro', 'pedrot@gmail.com', '202cb962ac59075b964b', 18, 'pedrot');

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
