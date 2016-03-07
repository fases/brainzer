-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07-Mar-2016 às 23:26
-- Versão do servidor: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `brainzer`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo`
--

CREATE TABLE IF NOT EXISTS `jogo` (
`id` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL
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
`id` int(11) NOT NULL,
  `pergunta` varchar(500) DEFAULT NULL,
  `pontuacao_padrao` int(11) NOT NULL,
  `jogo_id` int(11) NOT NULL,
  `respostaCorreta` varchar(300) NOT NULL,
  `tipojogo_id` int(11) NOT NULL
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
(49, 'Quantos naipes tem em um jogo de baralho? ', 12, 2, '4 naipes', 8),
(50, 'Quantas refeicoes, no minimo, deve-se fazer durante o dia?', 12, 2, '3 refeicoes', 8),
(51, 'Quantas vezes o sol nasce durante o dia?', 13, 2, '1 vez', 8),
(52, 'Quanto e o quintuplo de 1?', 10, 2, '5', 8),
(53, 'Quantos meses dura uma gestacao humana saudavel?', 10, 2, '9 meses', 8),
(54, 'Quantos minutos tem em 1 hora e 10 minutos?', 10, 2, '70 minutos', 8),
(55, 'Um trio de pessoas tem quantas pessoas?', 10, 2, '3 pessoas', 8),
(56, 'Quantas letras tem no alfabeto?', 10, 2, '26 letras', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ranking`
--

CREATE TABLE IF NOT EXISTS `ranking` (
`id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `jogo_id` int(11) NOT NULL,
  `pontuacao` int(11) NOT NULL,
  `dh` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

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
`id` int(11) NOT NULL,
  `alternativa1` varchar(500) NOT NULL,
  `alternativa2` varchar(500) NOT NULL,
  `alternativa3` varchar(500) NOT NULL,
  `alternativa4` varchar(500) NOT NULL,
  `quesito_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

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
(24, 'Bicicleta e Bola', 'Casa e Carro', 'Chapeu e copo', 'Tomada e Livro', 48),
(25, '1 naipe', '4 naipes', '3 naipes', '6 naipes', 49),
(26, '3 refeicoes ', '8 refeicoes ', '4 refeicoes ', '1 refeicao', 50),
(27, '8 vezes ', '2 vezes ', '1 vez ', '5 vezes ', 51),
(28, '50', '2', '5', '3', 52),
(29, '6 meses', '2 meses', '1 mes', '9 meses', 53),
(30, '80 minutos', '60 minutos', '70 minutos', '95 minutos', 54),
(31, '30 pessoas', '13 pessoas', '3 pessoas', '2 pessoas', 55),
(32, '26 letras', '22 letras ', '15 letras', '30 letras', 56);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_jogo`
--

CREATE TABLE IF NOT EXISTS `tipo_jogo` (
`id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `jogo_id` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  `complemento` varchar(300) DEFAULT NULL
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
`id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `idade` int(11) NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `idade`, `user`) VALUES
(2, 'Alana Ribeiro', 'alana_fatima@hotmail.com', '202cb962ac59075b964b', 18, 'alanaribeiro'),
(3, 'Pedro Tomaz', 'pedrootomaz23@gmail.com', '202cb962ac59075b964b', 18, 'pedrootomaz'),
(4, 'pedro', 'pedro@gmail.com', '202cb962ac59075b964b', 18, 'pedrotomaz'),
(5, 'Pedro', 'pedrot@gmail.com', '202cb962ac59075b964b', 18, 'pedrot'),
(6, 'MinhÃ£o', 'minhao@gmail.com', '81dc9bdb52d04dc20036', 18, 'minhaozinho');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jogo`
--
ALTER TABLE `jogo`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quesito`
--
ALTER TABLE `quesito`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_categoria3` (`jogo_id`), ADD KEY `fk7_tipojogo` (`tipojogo_id`);

--
-- Indexes for table `ranking`
--
ALTER TABLE `ranking`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_categoria` (`usuario_id`), ADD KEY `fk_categoria1` (`jogo_id`);

--
-- Indexes for table `respostas`
--
ALTER TABLE `respostas`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_categoria4` (`quesito_id`);

--
-- Indexes for table `tipo_jogo`
--
ALTER TABLE `tipo_jogo`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_categoria2` (`jogo_id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jogo`
--
ALTER TABLE `jogo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `quesito`
--
ALTER TABLE `quesito`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `ranking`
--
ALTER TABLE `ranking`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `respostas`
--
ALTER TABLE `respostas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tipo_jogo`
--
ALTER TABLE `tipo_jogo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `quesito`
--
ALTER TABLE `quesito`
ADD CONSTRAINT `fk7_tipojogo` FOREIGN KEY (`tipojogo_id`) REFERENCES `tipo_jogo` (`id`),
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
--
-- Database: `cdcol`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cds`
--

CREATE TABLE IF NOT EXISTS `cds` (
  `titel` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `interpret` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `jahr` int(11) DEFAULT NULL,
`id` bigint(20) unsigned NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `cds`
--

INSERT INTO `cds` (`titel`, `interpret`, `jahr`, `id`) VALUES
('Beauty', 'Ryuichi Sakamoto', 1990, 1),
('Goodbye Country (Hello Nightclub)', 'Groove Armada', 2001, 4),
('Glee', 'Bran Van 3000', 1997, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cds`
--
ALTER TABLE `cds`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cds`
--
ALTER TABLE `cds`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;--
-- Database: `componizer`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
`id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(500) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `descricao`) VALUES
(1, 'Resistor', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `componentes`
--

CREATE TABLE IF NOT EXISTS `componentes` (
`id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `subcategoria_id` int(11) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `linha` int(11) NOT NULL,
  `coluna` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `datasheet` varchar(500) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `componentes`
--

INSERT INTO `componentes` (`id`, `nome`, `categoria_id`, `subcategoria_id`, `descricao`, `linha`, `coluna`, `quantidade`, `datasheet`) VALUES
(1, 'Termistor2W', 1, 1, '', 8, 7, 487, ''),
(2, 'termistor 60', 1, 1, '', 9, 7, 800, NULL),
(3, 'Resistor2K2', 1, 1, '', 9, 8, 887, NULL),
(4, 'Ci 7400', 1, 1, '', 9, 8, 8, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimos`
--

CREATE TABLE IF NOT EXISTS `emprestimos` (
`id` int(11) NOT NULL,
  `horario` int(11) NOT NULL,
  `turno` varchar(255) NOT NULL,
  `data_aula` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `laboratorio_id` int(11) NOT NULL,
  `observacoes` varchar(500) DEFAULT NULL,
  `estado` int(11) NOT NULL,
  `notificar` int(11) NOT NULL,
  `data_emprestimo` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `emprestimos`
--

INSERT INTO `emprestimos` (`id`, `horario`, `turno`, `data_aula`, `user_id`, `laboratorio_id`, `observacoes`, `estado`, `notificar`, `data_emprestimo`) VALUES
(1, 3, 'Vespertino', '2016-02-15', 1, 1, '', 0, 3, '0000-00-00'),
(2, 3, 'Vespertino', '2016-02-15', 1, 1, '', 0, 0, '0000-00-00'),
(3, 5, 'Matutino', '2016-10-26', 1, 3, '', 0, 0, '2016-02-15'),
(4, 4, 'Matutino', '2016-02-20', 1, 1, '', 0, 0, '2016-02-15'),
(5, 1, 'Matutino', '2016-02-07', 1, 3, '', 0, 0, '2016-02-15'),
(6, 3, 'Matutino', '2016-02-15', 4, 1, '', 0, 0, '2016-02-15'),
(7, 1, 'Matutino', '2016-02-08', 1, 1, '', 0, 0, '2016-02-15'),
(8, 6, 'Matutino', '2016-02-15', 1, 3, 'A tarde', 0, 0, '2016-02-15'),
(9, 1, 'Matutino', '2016-02-15', 11, 1, '', 0, 0, '2016-02-15'),
(10, 5, 'Matutino', '2016-02-15', 7, 1, '', 0, 0, '2016-02-15'),
(11, 5, 'Matutino', '2016-02-15', 1, 1, '', 0, 0, '2016-02-15'),
(12, 1, 'Matutino', '2016-02-16', 1, 1, '', 0, 0, '2016-02-16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `laboratorios`
--

CREATE TABLE IF NOT EXISTS `laboratorios` (
`id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sala` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `laboratorios`
--

INSERT INTO `laboratorios` (`id`, `nome`, `sala`) VALUES
(1, 'LaboratÃ³rio de EletrÃ´nica de PotÃªncia', 56),
(2, 'LaboratÃ³rio de EletrÃ´nica AnalÃ³gica e Digital', 59),
(3, 'LaboratÃ³rio de ManutenÃ§Ã£o de Computadores', 48);

-- --------------------------------------------------------

--
-- Estrutura da tabela `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
`id` int(11) NOT NULL,
  `emprestimo_id` int(11) NOT NULL,
  `componente_id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `notifications`
--

INSERT INTO `notifications` (`id`, `emprestimo_id`, `componente_id`, `quantidade`) VALUES
(1, 2, 2, 80),
(2, 2, 1, 8),
(3, 2, 3, 80),
(4, 2, 3, 8),
(5, 3, 1, 5),
(6, 8, 3, 8),
(7, 8, 1, 8),
(8, 10, 3, 7),
(9, 10, 1, 7),
(10, 11, 1, 6),
(11, 11, 2, 6),
(12, 12, 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `subcategorias`
--

CREATE TABLE IF NOT EXISTS `subcategorias` (
`id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(500) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `subcategorias`
--

INSERT INTO `subcategorias` (`id`, `categoria_id`, `nome`, `descricao`) VALUES
(1, 1, 'Termistor', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `matricula` varchar(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `matricula`, `username`, `password`, `email`, `telefone`, `role`) VALUES
(1, 'Arthur Pinheiro', '20121044010042', 'arthurpdb', '55b49d144f69ea290d0ed8e915b337d8e9384fc4', 'arthur.barros@academico.ifrn.edu.br', '987765676', 0),
(2, 'Pedro Ivo', '198765167', 'pedroivo', '55b49d144f69ea290d0ed8e915b337d8e9384fc4', 'pedro.ivo@ifrn.edu.br', '987657654', 1),
(3, 'Liviane Melo', '897116765', 'liviane', '55b49d144f69ea290d0ed8e915b337d8e9384fc4', 'liviane.melo@ifrn.edu.br', '987654167', 2),
(4, 'AÃ©cio Dantas', '189765655', 'admin1', '55b49d144f69ea290d0ed8e915b337d8e9384fc4', 'aecio.dantas@ifrn.edu.br', '987655676', 3),
(5, 'Alana Ribeiro', '201419287166', 'alanar', '55b49d144f69ea290d0ed8e915b337d8e9384fc4', 'alana.ribeiro@academico.ifrn.edu.br', '988171716', 1),
(6, 'Arthur Salgado', '20121044010042', 'arthursg', '55b49d144f69ea290d0ed8e915b337d8e9384fc4', 'arthur.salgado@ifrn.edu.br', '988765676', 1),
(7, 'Diego Nascimento', '897655676', 'diegocn', '55b49d144f69ea290d0ed8e915b337d8e9384fc4', 'diego.costa@ifrn.edu.br', '98877167', 1),
(8, 'SÃ©rgio', '78767876', 'sergio4', '55b49d144f69ea290d0ed8e915b337d8e9384fc4', 'sergio@ifrn.edu.br', '988716787', 3),
(9, 'Ailton Torres', '198766546', 'ailtontorres', '55b49d144f69ea290d0ed8e915b337d8e9384fc4', 'ailton.torres@ifrn.edu.br', '981717166', 1),
(10, 'Marcos ', '289876516', 'marcao', '55b49d144f69ea290d0ed8e915b337d8e9384fc4', 'marcos@ifrn.edu.br', '982817178', 2),
(11, 'Murilo', '104598718', 'murilo', '55b49d144f69ea290d0ed8e915b337d8e9384fc4', 'murilo@academico.ifrn.edu.br', '988171716', 2),
(12, 'Alexandre', '209182817', 'alexandreifrn', '55b49d144f69ea290d0ed8e915b337d8e9384fc4', 'alexandre@ifrn.edu.br', '988177161', 2),
(13, 'Claudio JÃºnior', '20131091827878', 'claudiocs', '55b49d144f69ea290d0ed8e915b337d8e9384fc4', 'claudio.junior@ifrn.edu.br', '987126271', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `componentes`
--
ALTER TABLE `componentes`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_c_categoria` (`categoria_id`), ADD KEY `fk_c_subcategoria` (`subcategoria_id`);

--
-- Indexes for table `emprestimos`
--
ALTER TABLE `emprestimos`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_e_user` (`user_id`), ADD KEY `fk_e_laboratorio` (`laboratorio_id`);

--
-- Indexes for table `laboratorios`
--
ALTER TABLE `laboratorios`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_n_emprestimo` (`emprestimo_id`), ADD KEY `fk_n_componente` (`componente_id`);

--
-- Indexes for table `subcategorias`
--
ALTER TABLE `subcategorias`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_s_categoria` (`categoria_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `componentes`
--
ALTER TABLE `componentes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `emprestimos`
--
ALTER TABLE `emprestimos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `laboratorios`
--
ALTER TABLE `laboratorios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `subcategorias`
--
ALTER TABLE `subcategorias`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `componentes`
--
ALTER TABLE `componentes`
ADD CONSTRAINT `fk_c_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
ADD CONSTRAINT `fk_c_subcategoria` FOREIGN KEY (`subcategoria_id`) REFERENCES `subcategorias` (`id`);

--
-- Limitadores para a tabela `emprestimos`
--
ALTER TABLE `emprestimos`
ADD CONSTRAINT `fk_e_laboratorio` FOREIGN KEY (`laboratorio_id`) REFERENCES `laboratorios` (`id`),
ADD CONSTRAINT `fk_e_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `notifications`
--
ALTER TABLE `notifications`
ADD CONSTRAINT `fk_n_componente` FOREIGN KEY (`componente_id`) REFERENCES `componentes` (`id`),
ADD CONSTRAINT `fk_n_emprestimo` FOREIGN KEY (`emprestimo_id`) REFERENCES `emprestimos` (`id`);

--
-- Limitadores para a tabela `subcategorias`
--
ALTER TABLE `subcategorias`
ADD CONSTRAINT `fk_s_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);
--
-- Database: `comunica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
`id` int(11) NOT NULL,
  `id_contato` int(11) NOT NULL,
  `mensagem` text NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `id_contato`, `mensagem`, `id_usuario`, `data_cadastro`) VALUES
(1, 5, 'Olá!', 21, '2016-03-03 19:48:30'),
(2, 5, 'olá cinthian', 21, '2016-03-03 19:50:43'),
(3, 5, 'olá!', 21, '2016-03-03 19:53:47'),
(4, 5, 'olá!', 21, '2016-03-03 19:54:09'),
(5, 5, 'olá!', 21, '2016-03-03 19:54:25'),
(6, 5, 'testando comentários', 21, '2016-03-03 23:50:02'),
(7, 5, 'está pegando sim', 21, '2016-03-03 23:50:14'),
(8, 5, ':OOOOOOOOOOOOOOOOOOOOOOOOOOO', 21, '2016-03-03 23:50:22'),
(9, 5, 'morta meu deus', 21, '2016-03-03 23:54:46'),
(10, 5, 'felizzzzzzzzzzzzzzzzzzzzzzzz', 21, '2016-03-03 23:57:24'),
(11, 7, 'kluuiiioioiuo', 1, '2016-03-04 17:04:17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE IF NOT EXISTS `contatos` (
`id` int(11) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `mensagem` varchar(255) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id`, `assunto`, `mensagem`, `id_usuario`, `data_cadastro`, `status`) VALUES
(4, 'assunto', 'mensagem', 21, '2016-03-02 22:31:23', 3),
(5, 'Duis aute irure dolor in reprehenderit', 'Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 21, '2016-03-03 01:34:52', 1),
(6, 'olá', 'olá', 3, '2016-03-04 00:26:22', 1),
(7, 'Olá, planeta!', 'Olá, mundo!', 3, '2016-03-04 17:01:23', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE IF NOT EXISTS `emprestimo` (
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `id_material` int(11) NOT NULL,
  `justificativa` varchar(255) NOT NULL,
  `obs` varchar(255) NOT NULL,
`id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_devolucao` date NOT NULL,
  `hora_devolucao` time NOT NULL,
  `id_local` int(11) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `termos` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Extraindo dados da tabela `emprestimo`
--

INSERT INTO `emprestimo` (`data`, `hora`, `id_material`, `justificativa`, `obs`, `id`, `status`, `id_usuario`, `data_devolucao`, `hora_devolucao`, `id_local`, `data_cadastro`, `termos`) VALUES
('2016-03-02', '14:00:00', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. ', 'Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 20, 3, 2, '2016-03-05', '15:00:00', 4, '2016-03-02 02:51:44', 1),
('2016-03-17', '14:00:00', 1, 'HDSAJDKHSAKDJSHDSKJDHASJ', 'fkajskldjsadskldjsdklsadjs', 21, 2, 21, '2016-03-31', '15:00:00', 5, '2016-03-02 22:43:35', 1),
('2016-03-03', '14:00:00', 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. ', 'Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 22, 3, 21, '2016-03-04', '15:00:00', 1, '2016-03-03 01:32:31', 1),
('2016-03-05', '12:00:00', 2, 'porque sim', 'porque sim', 23, 3, 3, '2016-03-06', '15:00:00', 6, '2016-03-04 17:00:10', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `responsavel` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `id_local` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `descricao` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `obs` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
`id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`data`, `hora`, `responsavel`, `id_local`, `descricao`, `obs`, `id`, `status`, `id_usuario`, `data_cadastro`) VALUES
('2016-02-29', '14:00:00', 'Lucas', '1', 'sdhasljdhudiadasisdhasljdhudiadasisdhasljdhudiadasisdhasljdhudiadasi', 'sdhasljdhudiadasi', 1, 3, 1, '2016-02-29 20:54:37'),
('2016-02-29', '14:00:00', 'Amanda', '6', 'id_local', 'id_local_id', 2, 1, 1, '2016-02-29 20:56:23'),
('2016-02-29', '12:00:00', 'Amanda', '1', 'id_localid_local', 'id_localid_localid_localid_localid_localid_local', 3, 1, 1, '2016-02-29 20:57:54'),
('2016-03-01', '14:00:00', 'Geovane', '1', 'hdjdhssjdhsdjhdjdhssjdhsdjhdjdhssjdhsdjhdjdhssjdhsdjhdjdhssjdhsdjhdjdhssjdhsdjhdjdhssjdhsdjhdjdhssjdhsdjhdjdhssjdhsdjhdjdhssjdhsdj', 'hdjdhssjdhsdjhdjdhssjdhsdjhdjdhssjdhsdjhdjdhssjdhsdj', 4, 1, 1, '2016-03-01 02:44:16'),
('2016-03-01', '14:00:00', 'Geovane', '6', 'testando', 'testando', 5, 1, 1, '2016-03-01 14:10:12'),
('2016-03-01', '12:00:00', 'Cinthia', '5', 'testando', 'testando', 6, 1, 1, '2016-03-01 17:43:56'),
('2016-03-02', '15:00:00', 'Geovane', '4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. ', 'Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 7, 1, 2, '2016-03-02 03:39:42'),
('2016-03-02', '15:00:00', 'Jadson', '1', 'Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit i', 'Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 8, 1, 2, '2016-03-02 03:43:12'),
('2016-03-03', '15:00:00', 'Geovane', '1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. ', 'Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 9, 1, 21, '2016-03-03 01:19:55'),
('2016-03-01', '14:00:00', 'Geraldo', '5', 'descrição', 'local', 10, 1, 3, '2016-03-04 00:22:59'),
('2016-12-09', '09:00:00', 'Jadson', '5', 'Meu aniversário', 'OBS!!!', 11, 1, 3, '2016-03-04 00:23:36');

-- --------------------------------------------------------

--
-- Estrutura da tabela `impressao`
--

CREATE TABLE IF NOT EXISTS `impressao` (
  `tipo_material` varchar(255) NOT NULL,
  `tipo_papel` varchar(255) NOT NULL,
  `justificativa` varchar(255) NOT NULL,
`id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `url_1` varchar(255) DEFAULT NULL,
  `url_2` varchar(255) DEFAULT NULL,
  `url_3` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL,
  `arquivo_1` varchar(255) DEFAULT NULL,
  `arquivo_3` varchar(255) DEFAULT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `arquivo_2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `impressao`
--

INSERT INTO `impressao` (`tipo_material`, `tipo_papel`, `justificativa`, `id`, `id_usuario`, `url_1`, `url_2`, `url_3`, `status`, `arquivo_1`, `arquivo_3`, `data_cadastro`, `arquivo_2`) VALUES
('banner', 'A4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dol', 1, 1, '', '', '', 3, 'C:/xampp/htdocs/comunica/arquivos/producao/10367591_10152065983281080_8515879487756079752_n.png', NULL, '2016-03-02 03:45:04', NULL),
('certificado', 'Colchê', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', 2, 1, '', '', '', 1, 'C:/xampp/htdocs/comunica/arquivos/producao/10367591_10152065983281080_8515879487756079752_n1.png', NULL, '2016-03-02 20:57:02', NULL),
('certificado', 'Fotográfico', 'teste', 3, 21, '', '', '', 1, 'C:/xampp/htdocs/comunica/arquivos/producao/004.jpg', NULL, '2016-03-02 21:00:00', NULL),
('certificado', 'Fotográfico', 'porque sim', 4, 3, 'www.google.com', '', '', 1, 'C:/xampp/htdocs/comunica/arquivos/producao/Penguins.jpg', NULL, '2016-03-04 17:01:02', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `local`
--

CREATE TABLE IF NOT EXISTS `local` (
`id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `predio` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `local`
--

INSERT INTO `local` (`id`, `nome`, `predio`) VALUES
(1, 'Sala B1', 'Prédio B'),
(4, 'Audiovisual', 'Prédio B'),
(5, 'Auditório', 'Prédio A'),
(6, 'Quadra', 'Prédio A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `especificacao` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `nome` varchar(255) COLLATE latin1_general_ci NOT NULL,
`id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `situacao` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `patrimonio` int(11) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `material`
--

INSERT INTO `material` (`especificacao`, `nome`, `id`, `status`, `situacao`, `patrimonio`, `data_cadastro`) VALUES
('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. ', 'Câmera Digital Sony', 1, 0, '1', 12546874, '2016-02-27 00:35:21'),
('Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. ', 'Refletor', 2, 0, '1', 987456123, '2016-02-27 00:35:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
`id` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `descricao` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `arquivo_1` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `arquivo_2` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `arquivo_3` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `status` int(1) NOT NULL,
  `url_1` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `url_2` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `url_3` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_publicacao` date NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descricao`, `arquivo_1`, `arquivo_2`, `arquivo_3`, `status`, `url_1`, `url_2`, `url_3`, `id_usuario`, `data_publicacao`, `data_cadastro`) VALUES
(12, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporLorem ipsum dolor ', 'C:/xampp/htdocs/comunica/arquivos/noticias/10367591_10152065983281080_8515879487756079752_n.png', NULL, NULL, 1, '', '', '', 21, '2016-03-02', '2016-03-02 21:34:27'),
(13, 'titulo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor', 'C:/xampp/htdocs/comunica/arquivos/noticias/10367591_10152065983281080_8515879487756079752_n1.png', NULL, NULL, 1, '', '', '', 21, '2016-03-02', '2016-03-02 21:36:47'),
(14, 'testando', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor', NULL, NULL, NULL, 2, 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 21, '2016-03-02', '2016-03-02 21:38:23'),
(15, 'titulo teste 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor', 'C:/xampp/htdocs/comunica/arquivos/noticias/Mother.jpg', NULL, NULL, 1, '', '', '', 21, '2016-03-02', '2016-03-02 21:38:53'),
(16, 'testando cadastro', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor', NULL, NULL, NULL, 1, '', '', '', 21, '2016-03-02', '2016-03-02 22:19:30'),
(17, 'testando novamente', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dol', NULL, NULL, NULL, 1, '', '', '', 21, '2016-03-02', '2016-03-02 22:24:55'),
(18, 'fim do mes', 'fim do mes', 'C:/xampp/htdocs/comunica/arquivos/noticias/direito-ufrn.PNG', NULL, NULL, 1, '', '', '', 3, '2016-03-31', '2016-03-04 00:24:56');

-- --------------------------------------------------------

--
-- Estrutura da tabela `producao`
--

CREATE TABLE IF NOT EXISTS `producao` (
  `data_publicacao` date NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `justificativa` varchar(255) NOT NULL,
`id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `url_1` varchar(255) DEFAULT NULL,
  `url_2` varchar(255) DEFAULT NULL,
  `url_3` varchar(255) DEFAULT NULL,
  `arquivo_1` varchar(255) DEFAULT NULL,
  `arquivo_2` varchar(255) DEFAULT NULL,
  `arquivo_3` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `producao`
--

INSERT INTO `producao` (`data_publicacao`, `id_usuario`, `justificativa`, `id`, `status`, `url_1`, `url_2`, `url_3`, `arquivo_1`, `arquivo_2`, `arquivo_3`, `tipo`, `data_cadastro`) VALUES
('2016-03-01', 1, 'var_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dumpvar_dump', 11, 3, 'www.w3schools.com', 'www.w3schools.com', 'www.w3schools.com', 'C:/xampp/htdocs/comunica/arquivos/producao/Mother1.jpg', NULL, NULL, 'Banner (A3)', '2016-03-02 02:43:36'),
('2016-03-03', 21, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dol', 12, 1, '', '', '', 'C:/xampp/htdocs/comunica/arquivos/producao/Mother.jpg', NULL, NULL, 'Banner (120mmx80mm)', '2016-03-03 01:15:43'),
('0000-00-00', 3, 'porque sim', 13, 1, 'www.google.com', '', '', 'C:/xampp/htdocs/comunica/arquivos/producao/Desert1.jpg', NULL, NULL, 'Banner (A3)', '2016-03-04 17:00:44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `senha` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `matricula` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `telefone` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `tipo_acesso` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `endereco` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `informacao` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=22 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `senha`, `matricula`, `email`, `telefone`, `tipo_acesso`, `status`, `endereco`, `informacao`, `data_cadastro`) VALUES
(1, 'Damião', 'c4ca4238a0b923820dcc509a6f75849b', '202020202', 'ed', '(77) 77777-7777', 1, 1, 'Lorem ipsum dolor sit amet, XX', NULL, '2016-03-02 19:06:14'),
(2, 'Admin', 'c4ca4238a0b923820dcc509a6f75849b', '123456789', 'admin@comunica', '(99) 99999-9999', 2, 1, 'Lorem ipsum dolor sit amet, XX', NULL, '2016-03-02 04:09:29'),
(3, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', '123456', 'admin', NULL, 2, 1, NULL, NULL, '2016-03-04 00:18:09'),
(21, 'Jadson', 'c4ca4238a0b923820dcc509a6f75849b', '20121044010174', 'jadson', '(77) 77777-7777', 1, 2, 'Lorem ipsum dolor sit amet, XX', NULL, '2016-03-04 00:12:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contatos`
--
ALTER TABLE `contatos`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_usuario_contatos` (`id_usuario`);

--
-- Indexes for table `emprestimo`
--
ALTER TABLE `emprestimo`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_usuario_emprestimo` (`id_usuario`), ADD KEY `fk_material_emprestimo` (`id_material`), ADD KEY `fk_local_emprestimo` (`id_local`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_usuario_eventos` (`id_usuario`);

--
-- Indexes for table `impressao`
--
ALTER TABLE `impressao`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_usuario_impressao` (`id_usuario`);

--
-- Indexes for table `local`
--
ALTER TABLE `local`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
 ADD PRIMARY KEY (`id`), ADD KEY `status` (`status`), ADD KEY `status_2` (`status`), ADD KEY `fk_usuario_noticias` (`id_usuario`);

--
-- Indexes for table `producao`
--
ALTER TABLE `producao`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_usuario_producao` (`id_usuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `contatos`
--
ALTER TABLE `contatos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `emprestimo`
--
ALTER TABLE `emprestimo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `impressao`
--
ALTER TABLE `impressao`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `local`
--
ALTER TABLE `local`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `producao`
--
ALTER TABLE `producao`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `contatos`
--
ALTER TABLE `contatos`
ADD CONSTRAINT `fk_usuario_contatos` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `emprestimo`
--
ALTER TABLE `emprestimo`
ADD CONSTRAINT `fk_local_emprestimo` FOREIGN KEY (`id_local`) REFERENCES `local` (`id`),
ADD CONSTRAINT `fk_material_emprestimo` FOREIGN KEY (`id_material`) REFERENCES `material` (`id`),
ADD CONSTRAINT `fk_usuario_emprestimo` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `eventos`
--
ALTER TABLE `eventos`
ADD CONSTRAINT `fk_usuario_eventos` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `impressao`
--
ALTER TABLE `impressao`
ADD CONSTRAINT `fk_usuario_impressao` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `noticias`
--
ALTER TABLE `noticias`
ADD CONSTRAINT `fk_usuario_noticias` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `producao`
--
ALTER TABLE `producao`
ADD CONSTRAINT `fk_usuario_producao` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);
--
-- Database: `epuppy`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `consultations`
--

CREATE TABLE IF NOT EXISTS `consultations` (
`id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `weigth` float DEFAULT NULL,
  `height` float DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `diagnostic` varchar(1000) DEFAULT NULL,
  `medication` varchar(1000) DEFAULT NULL,
  `veterinary_id` int(11) DEFAULT NULL,
  `puppy_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `hospitals`
--

CREATE TABLE IF NOT EXISTS `hospitals` (
`id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `site` varchar(50) DEFAULT NULL,
  `cnpj` char(14) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `owners`
--

CREATE TABLE IF NOT EXISTS `owners` (
`id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `owners`
--

INSERT INTO `owners` (`id`, `name`, `address`, `phone`, `user_id`) VALUES
(1, 'Claudio', '123', '123', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `puppies`
--

CREATE TABLE IF NOT EXISTS `puppies` (
`id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `breed` varchar(50) DEFAULT NULL,
  `specie` varchar(50) DEFAULT NULL,
  `owner_id` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `puppies`
--

INSERT INTO `puppies` (`id`, `name`, `breed`, `specie`, `owner_id`) VALUES
(1, 'Arthur', 'asd', 'asd', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`) VALUES
(1, 'claudio@a', '5007e21f2b272291a3ffbba500db84fadff54edf', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `veterinaries`
--

CREATE TABLE IF NOT EXISTS `veterinaries` (
`id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultations`
--
ALTER TABLE `consultations`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_consultations_veterinaries` (`veterinary_id`), ADD KEY `fk_consultations_puppies` (`puppy_id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_hospitals_users` (`user_id`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_owners_users` (`user_id`);

--
-- Indexes for table `puppies`
--
ALTER TABLE `puppies`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_puppies_owners` (`owner_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `veterinaries`
--
ALTER TABLE `veterinaries`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_veterinaries_users` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consultations`
--
ALTER TABLE `consultations`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `puppies`
--
ALTER TABLE `puppies`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `veterinaries`
--
ALTER TABLE `veterinaries`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `consultations`
--
ALTER TABLE `consultations`
ADD CONSTRAINT `fk_consultations_puppies` FOREIGN KEY (`puppy_id`) REFERENCES `puppies` (`id`),
ADD CONSTRAINT `fk_consultations_veterinaries` FOREIGN KEY (`veterinary_id`) REFERENCES `veterinaries` (`id`);

--
-- Limitadores para a tabela `hospitals`
--
ALTER TABLE `hospitals`
ADD CONSTRAINT `fk_hospitals_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `owners`
--
ALTER TABLE `owners`
ADD CONSTRAINT `fk_owners_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `puppies`
--
ALTER TABLE `puppies`
ADD CONSTRAINT `fk_puppies_owners` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`id`);

--
-- Limitadores para a tabela `veterinaries`
--
ALTER TABLE `veterinaries`
ADD CONSTRAINT `fk_veterinaries_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
--
-- Database: `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_bookmark`
--

CREATE TABLE IF NOT EXISTS `pma_bookmark` (
`id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_column_info`
--

CREATE TABLE IF NOT EXISTS `pma_column_info` (
`id` int(5) unsigned NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin' AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_designer_coords`
--

CREATE TABLE IF NOT EXISTS `pma_designer_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `v` tinyint(4) DEFAULT NULL,
  `h` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for Designer';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_history`
--

CREATE TABLE IF NOT EXISTS `pma_history` (
`id` bigint(20) unsigned NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_navigationhiding`
--

CREATE TABLE IF NOT EXISTS `pma_navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_pdf_pages`
--

CREATE TABLE IF NOT EXISTS `pma_pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
`page_nr` int(10) unsigned NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_recent`
--

CREATE TABLE IF NOT EXISTS `pma_recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Extraindo dados da tabela `pma_recent`
--

INSERT INTO `pma_recent` (`username`, `tables`) VALUES
('root', '[{"db":"brainzer","table":"quesito"},{"db":"brainzer","table":"respostas"},{"db":"brainzer","table":"tipo_jogo"},{"db":"brainzer","table":"ranking"},{"db":"brainzer","table":"jogo"},{"db":"comunica","table":"emprestimo"},{"db":"comunica","table":"eventos"},{"db":"comunica","table":"impressao"},{"db":"comunica","table":"usuario"},{"db":"comunica","table":"comentarios"}]');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_relation`
--

CREATE TABLE IF NOT EXISTS `pma_relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_savedsearches`
--

CREATE TABLE IF NOT EXISTS `pma_savedsearches` (
`id` int(5) unsigned NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_table_coords`
--

CREATE TABLE IF NOT EXISTS `pma_table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float unsigned NOT NULL DEFAULT '0',
  `y` float unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_table_info`
--

CREATE TABLE IF NOT EXISTS `pma_table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_table_uiprefs`
--

CREATE TABLE IF NOT EXISTS `pma_table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Extraindo dados da tabela `pma_table_uiprefs`
--

INSERT INTO `pma_table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'comunica', 'producao', '{"CREATE_TIME":"2016-02-25 15:52:43","col_order":["0","1","2","4","5","6","7","3","8","9","10","11","12"],"col_visib":["1","1","1","1","1","1","1","1","1","1","1","1","1"]}', '2016-02-25 20:03:08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_tracking`
--

CREATE TABLE IF NOT EXISTS `pma_tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) unsigned NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_userconfig`
--

CREATE TABLE IF NOT EXISTS `pma_userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Extraindo dados da tabela `pma_userconfig`
--

INSERT INTO `pma_userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2015-12-22 16:38:59', '{"lang":"pt","collation_connection":"utf8mb4_unicode_ci"}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_usergroups`
--

CREATE TABLE IF NOT EXISTS `pma_usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma_users`
--

CREATE TABLE IF NOT EXISTS `pma_users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma_bookmark`
--
ALTER TABLE `pma_bookmark`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma_column_info`
--
ALTER TABLE `pma_column_info`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma_designer_coords`
--
ALTER TABLE `pma_designer_coords`
 ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma_history`
--
ALTER TABLE `pma_history`
 ADD PRIMARY KEY (`id`), ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma_navigationhiding`
--
ALTER TABLE `pma_navigationhiding`
 ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma_pdf_pages`
--
ALTER TABLE `pma_pdf_pages`
 ADD PRIMARY KEY (`page_nr`), ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma_recent`
--
ALTER TABLE `pma_recent`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma_relation`
--
ALTER TABLE `pma_relation`
 ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`), ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma_savedsearches`
--
ALTER TABLE `pma_savedsearches`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma_table_coords`
--
ALTER TABLE `pma_table_coords`
 ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma_table_info`
--
ALTER TABLE `pma_table_info`
 ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma_table_uiprefs`
--
ALTER TABLE `pma_table_uiprefs`
 ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma_tracking`
--
ALTER TABLE `pma_tracking`
 ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma_userconfig`
--
ALTER TABLE `pma_userconfig`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma_usergroups`
--
ALTER TABLE `pma_usergroups`
 ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma_users`
--
ALTER TABLE `pma_users`
 ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma_bookmark`
--
ALTER TABLE `pma_bookmark`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma_column_info`
--
ALTER TABLE `pma_column_info`
MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pma_history`
--
ALTER TABLE `pma_history`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma_pdf_pages`
--
ALTER TABLE `pma_pdf_pages`
MODIFY `page_nr` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma_savedsearches`
--
ALTER TABLE `pma_savedsearches`
MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT;--
-- Database: `test`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `test_multi_sets`()
    DETERMINISTIC
begin
        select user() as first_col;
        select user() as first_col, now() as second_col;
        select user() as first_col, now() as second_col, now() as third_col;
        end$$

DELIMITER ;
--
-- Database: `webauth`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_pwd`
--

CREATE TABLE IF NOT EXISTS `user_pwd` (
  `name` char(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pass` char(32) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `user_pwd`
--

INSERT INTO `user_pwd` (`name`, `pass`) VALUES
('xampp', 'wampp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_pwd`
--
ALTER TABLE `user_pwd`
 ADD PRIMARY KEY (`name`);
--
-- Database: `worldshare`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
