-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29-Ago-2018 às 14:36
-- Versão do servidor: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oficinas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `convenio`
--

CREATE TABLE IF NOT EXISTS `convenio` (
`id_convenio` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `convenio_hospital`
--

CREATE TABLE IF NOT EXISTS `convenio_hospital` (
  `id_hospital` int(11) NOT NULL,
  `id_convenio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
`id_hospital` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `telefone` int(11) NOT NULL,
  `fila` int(11) DEFAULT NULL,
  `login` varchar(500) NOT NULL,
  `senha` varchar(500) NOT NULL,
  `administrador` varchar(500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `hospital`
--

INSERT INTO `hospital` (`id_hospital`, `nome`, `endereco`, `telefone`, `fila`, `login`, `senha`, `administrador`) VALUES
(1, '1', '1', 1, NULL, '1', 'K08iHGiovPJQQVa+RzTygpQqUgUDeLIYJeVBgn5eFXpg3ff+5IZy+4kBm4hAKrpb+i/mgf6dxiwgxh3e89qSUA==', '1'),
(2, '2', '2', 2, NULL, '2', 'ZJOy7Ij2Rcw2cvDOvyM66+pH2h2PYIhPu7M/gzjh6g9KMOubgjLAGjKsbacrR78aXTGOSh9gWgEZ13gUKPSqKA==', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `convenio`
--
ALTER TABLE `convenio`
 ADD PRIMARY KEY (`id_convenio`), ADD KEY `id_convenio` (`id_convenio`);

--
-- Indexes for table `convenio_hospital`
--
ALTER TABLE `convenio_hospital`
 ADD KEY `id_hospital` (`id_hospital`,`id_convenio`), ADD KEY `id_convenio` (`id_convenio`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
 ADD PRIMARY KEY (`id_hospital`), ADD KEY `id_hospital` (`id_hospital`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `convenio`
--
ALTER TABLE `convenio`
MODIFY `id_convenio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
MODIFY `id_hospital` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `convenio_hospital`
--
ALTER TABLE `convenio_hospital`
ADD CONSTRAINT `convenio_hospital_ibfk_1` FOREIGN KEY (`id_hospital`) REFERENCES `hospital` (`id_hospital`),
ADD CONSTRAINT `convenio_hospital_ibfk_2` FOREIGN KEY (`id_convenio`) REFERENCES `convenio` (`id_convenio`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
