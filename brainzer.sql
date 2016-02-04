-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04-Fev-2016 às 01:12
-- Versão do servidor: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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
  `id` int(11) NOT NULL,
  `pergunta` varchar(500) DEFAULT NULL,
  `pontuacao_padrao` int(11) NOT NULL,
  `jogo_id` int(11) NOT NULL,
  `respostaCorreta` varchar(300) NOT NULL,
  `tipojogo_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

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
(16, 'Quantos segundos tem um minuto?', 17, 2, '60 segundos', 3);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

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
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `jogo_id` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  `complemento` varchar(300) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_jogo`
--

INSERT INTO `tipo_jogo` (`id`, `nome`, `jogo_id`, `nivel`, `complemento`) VALUES
(1, 'frutas', 1, 1, 'video/FRUTAS_VIDEO_curto.mp4'),
(2, 'animais', 1, 2, 'video/ANIMAIS_VIDEO_curto.mp4'),
(3, 'quantidade', 2, 2, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `idade` int(11) NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `idade`, `user`) VALUES
(4, 'Daiane Carla', 'dadacrc@gmail.com', '202cb962ac59075b964b07152d234b70', 19, 'daianeecarla');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_categoria3` (`jogo_id`),
  ADD KEY `fk7_tipojogo` (`tipojogo_id`);

--
-- Indexes for table `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_categoria` (`usuario_id`),
  ADD KEY `fk_categoria1` (`jogo_id`);

--
-- Indexes for table `respostas`
--
ALTER TABLE `respostas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_categoria4` (`quesito_id`);

--
-- Indexes for table `tipo_jogo`
--
ALTER TABLE `tipo_jogo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_categoria2` (`jogo_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `quesito`
--
ALTER TABLE `quesito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `ranking`
--
ALTER TABLE `ranking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `respostas`
--
ALTER TABLE `respostas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tipo_jogo`
--
ALTER TABLE `tipo_jogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
