-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20-Mar-2017 às 15:59
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `protocolo_teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `documento`
--

CREATE TABLE IF NOT EXISTS `documento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numeroprotocolo` varchar(255) NOT NULL,
  `datahora` datetime NOT NULL,
  `id_setor` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `fase` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `municipio` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `folhas` int(11) NOT NULL,
  `numeroDocumento` int(20) NOT NULL,
  `data` date NOT NULL,
  `volumes` int(11) NOT NULL,
  `interessados` text NOT NULL,
  `formaremessa` varchar(255) NOT NULL,
  `Origem` varchar(255) NOT NULL,
  `id_tramitacao` int(11) NOT NULL,
  `recebido` tinyint(1) NOT NULL DEFAULT '0',
  `anexo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=129 ;

--
-- Extraindo dados da tabela `documento`
--

INSERT INTO `documento` (`id`, `numeroprotocolo`, `datahora`, `id_setor`, `usuario`, `assunto`, `fase`, `id_tipo`, `descricao`, `municipio`, `estado`, `folhas`, `numeroDocumento`, `data`, `volumes`, `interessados`, `formaremessa`, `Origem`, `id_tramitacao`, `recebido`, `anexo`) VALUES
(1, '0000/2015', '2015-06-09 09:59:52', 1, 'admin', 'Arquivado', 3, 1, 'UYTR', 's', 'SQ', 1, 0, '2015-06-30', 1, 'FG', 'KK', 'sa', 3, 1, ''),
(2, '0001/2015', '2015-06-09 10:15:32', 1, 'teste', 'Arquivado', 3, 1, 'tetgfdr', 'dd', 'dd', 1, 12, '2015-06-24', 1, 'dd', 'dd', 'dd', 3, 1, ''),
(3, '0002/2015', '2015-06-09 11:37:02', 1, 'teste', 'Arquivado', 3, 2, 'fff', 'jghj', 'jhg', 1, 1, '2015-06-23', 1, 'dd', 'ee', 'kjhj', 3, 1, ''),
(4, '0003/2015', '2015-06-15 09:31:41', 1, 'Teste', 'Arquivado', 3, 2, 'dfd', 'ww', 'ww', 1, 123, '2015-06-01', 1, 'ww', 'ww', 'ddd', 3, 1, ''),
(5, '0004/2015', '2015-09-09 13:32:50', 1, 'Teste', 'Arquivado', 3, 1, 'resolvido com sucesso', 'gf', 'gfgf', 1, 187, '2015-06-23', 1, 'w', 'w', 'fgf', 3, 1, ''),
(6, '0005/2015', '2017-02-14 11:06:34', 1, 'admin', 'Arquivado', 3, 1, '', 'dd', 'dd', 1, 33, '2015-08-26', 1, 'dd', 'dd', 'dd', 3, 1, ''),
(7, '0006/2015', '2017-03-06 09:49:57', 1, 'Teste', 'Arquivado', 3, 1, 'err', 'w', 'w', 1, 1111111111, '2015-09-02', 1, 'ww', 'ww', 'w', 3, 1, ''),
(8, '0007/2015', '2016-10-06 09:18:56', 2, 'Lidiane', 'Arquivado', 3, 2, '', 'iuiu', 'iuyiuy', 7, 12446, '2016-10-25', 9, 'dddd', 'der', 'hudhuiyh', 3, 0, ''),
(9, '0008/2015', '2017-02-02 12:14:31', 2, 'Lidiane', 'Arquivado', 3, 2, 'çlekporirpo', 'lklk', 'lkkl', 7, 12334, '2017-02-22', 2, 'eçorio', 'ddd', 'çleip', 3, 0, ''),
(10, '0009/2015', '2017-03-06 09:49:57', 1, 'Teste', 'Arquivado', 3, 2, '1efrg', 'lkjlk', 'lkkjlkj', 1, 1233, '2017-02-22', 1, 'erer', 'em maos', 'lklkj', 3, 0, ''),
(11, '00010/2015', '2017-02-13 09:48:34', 2, 'Lidiane', 'Arquivado', 3, 1, '', 'rrrtttt', 'rrr', 1, 0, '2017-02-09', 1, 'rtt', 'ttt', 'ygtuyt', 3, 0, ''),
(12, '000/2016', '2017-03-06 09:49:57', 1, 'Teste', 'Arquivado', 3, 1, 'rrr', 'ee', 'ee', 1, 1233, '2017-02-07', 1, 'ee', 'ee', 'ee', 3, 0, ''),
(13, '0001/2016', '2017-03-08 10:12:49', 2, 'Lidiane', 'Arquivado', 3, 1, 'iureiuyr', '', '', 0, 0, '0000-00-00', 0, '', '', '', 3, 1, ''),
(14, '0002/2016', '2017-03-13 09:49:42', 2, 'Lidiane', 'Arquivado', 3, 1, '', 'çfoiueoiur', 'rttyuy', 1, 134567, '2017-03-22', 1, 'ui', 'i8i8o', 'ytsrdytde', 3, 1, ''),
(15, '0003/2016', '2017-03-13 09:35:25', 1, 'Administrador', 'fgtg', 2, 1, 'thh', '', '', 0, 0, '0000-00-00', 0, '', '', '', 2, 0, ''),
(16, '0004/2016', '2017-03-13 09:49:42', 2, 'Lidiane', 'Arquivado', 3, 1, '', 'deerr', 'oieuoiur', 1, 2222, '2017-03-29', 1, 'oiieyyruhff.l', 'euiri', 'kjjdhjdyhiu', 3, 1, ''),
(17, '0005/2016', '2017-03-13 09:49:42', 2, 'Lidiane', 'Arquivado', 3, 1, '', '', '', 0, 0, '0000-00-00', 0, '', '', '', 3, 1, ''),
(18, '0006/2016', '2017-03-13 09:43:16', 1, 'Administrador', 'ewkryteiy', 2, 1, 'oiuoiuoiu', 'rrr', 'rrr', 1, 1233, '2017-03-29', 1, 'ruoit', 'tt', 'rrr', 2, 0, ''),
(19, '0007/2016', '2017-03-13 09:49:42', 2, 'Lidiane', 'Arquivado', 3, 1, '', '', '', 0, 0, '0000-00-00', 0, '', '', '', 3, 1, ''),
(20, '000/2017', '2017-03-13 09:49:42', 2, 'Lidiane', 'Arquivado', 3, 1, '', 'vvv', 'vvv', 1, 124455, '2017-03-15', 1, '', 'vvv', 'hhh', 3, 1, ''),
(21, '0001/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'Arquivado', 3, 1, '', 'eeeeeeeeeeeee', 'eeeeeeeeeee', 1, 0, '2017-03-16', 1, 'eeeeeeeeeeeee', 'eeeeeeeeeeee', 'eeeeeeeeeeeeee', 3, 1, ''),
(22, '0002/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'Arquivado', 3, 1, '', 'eeeeeeeeeeeeeeeeeee', 'eeeeeeeeeeeeeeee', 1, 0, '2017-03-16', 1, 'eeeeeeeeeee', 'eeeeeeeeeeeeeee', 'eeeeeeeeeeeeee', 3, 1, ''),
(23, '0003/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'Arquivado', 3, 1, '', 'eeeeeeeeeeee', 'eeeeeeeeeeeee', 1, 0, '2017-03-15', 1, 'eeeeeeeee', 'eeeeeeeeeeeee', 'eeeeeeeeee', 3, 1, ''),
(24, '0004/2017', '2017-03-15 11:26:26', 2, 'Lidiane', 'Arquivado', 3, 1, '', 'LKJLK', 'LJLKJ', 1, 0, '2017-03-16', 1, 'uu9yiuhkuhihjk', 'uyftyruy', 'rrrKJ', 3, 1, ''),
(25, '0005/2017', '2017-02-02 13:03:42', 1, 'admin', 'Arquivado', 3, 1, 'kyut', 'nhu', 'kjiui', 1, 0, '2017-02-22', 1, 'iuyiuyiu\r\nhtrfyty', 'juyu', 'juyu', 3, 1, ''),
(26, '0006/2017', '2017-03-15 11:32:37', 1, 'Administrador', '0', 1, 1, '0', 'DDDDDDDDDDDDDDDDD', 'DDDDDDDDDDD', 1, 0, '2017-03-22', 1, 'DDDDDDDDDDDD', 'dddDDDDDDD', 'DDDDDDDDDDDDD', 5, 0, ''),
(27, '0007/2017', '2017-03-15 11:32:37', 1, 'Administrador', '0', 1, 1, '0', '', '', 0, 0, '0000-00-00', 0, '', '', '', 5, 0, ''),
(28, '0008/2017', '2017-03-06 09:49:57', 1, 'Teste', 'Arquivado', 3, 1, 'frtt', 'rrr', 'rrr', 1, 3333, '2017-02-22', 1, 'póto', 'em maos', 'rrrr', 3, 0, ''),
(29, '0009/2017', '2017-03-15 12:26:31', 1, 'Administrador', '0', 1, 1, '0', 'wwwwwwwww', 'wwwwwwwwwww', 1, 0, '2017-03-14', 1, 'wwwwwwwww', 'wwwwww', 'wwwwwww', 5, 0, ''),
(30, '00010/2017', '2017-03-15 12:26:31', 1, 'Administrador', '0', 1, 1, '0', 'wwwwwwwwwww', 'wwwwwwwwwww', 1, 0, '2017-03-23', 1, 'wwwwwwwww', 'wwwwwwwwww', 'wwwwwwwwwwww', 5, 0, ''),
(31, '00011/2017', '2017-03-16 08:19:11', 1, 'Administrador', '0', 1, 1, '0', 'ffffffffffffff', 'ffffffffffffff', 1, 0, '2017-03-16', 1, 'fffffffffffff', 'fffffffff', 'fffffffffffffff', 5, 0, ''),
(32, '00012/2017', '2017-03-16 08:19:11', 1, 'Administrador', '0', 1, 1, '0', 'ssssssssssssssss', 'ssssssssssss', 1, 0, '2017-03-16', 1, 'ssssssssssss', 'ssssssssssss', 'ssssssssssssssss', 5, 0, ''),
(33, '00013/2017', '2017-03-13 09:52:45', 2, 'Lidiane', 'Arquivado', 3, 1, '', 'trt', 'rtrt', 5, 3333, '2017-02-13', 1, 'cpd, gabinete', 'em maos', 'ttt', 3, 1, ''),
(34, '00014/2017', '2017-03-16 08:31:25', 1, 'Administrador', '0', 1, 1, '0', 'DDDDDDDDDDDDDDDDD', 'DDDDDDDDDDD', 1, 0, '2017-03-29', 1, 'ddddddddddd', 'ddddddddd', 'DDDDDDDDDDDDD', 5, 0, ''),
(35, '00015/2017', '2017-03-16 08:31:25', 1, 'Administrador', '0', 1, 1, '0', 'gggggggggggg', 'ggggggggggg', 0, 0, '2017-03-14', 1, 'ggggggggg', 'gggggggg', 'gggggggg', 5, 0, ''),
(36, '00016/2017', '2017-03-16 08:31:25', 1, 'Administrador', '0', 1, 1, '0', 'wwwwwwwwwww', 'wwwwwwwwwwww', 1, 0, '0000-00-00', 1, 'wwwwwwwwwwww', 'wwwwwwwwww', 'wwwwwwwwww', 5, 0, ''),
(37, '00017/2017', '2017-03-16 08:31:25', 1, 'Administrador', '0', 1, 1, '0', 'fffffffffffff', 'fffffffffffffff', 1, 0, '2017-03-15', 1, 'ffffffffffffff', 'fffffffffffff', 'fffffffffffffff', 5, 0, ''),
(38, '00018/2017', '2017-03-16 08:31:25', 1, 'Administrador', '0', 1, 1, '0', 'aaaaaaaa', 'aaaaaaaaaa', 1, 222222, '2017-03-15', 1, 'aaaaaaa', 'aaaaaaaaaaa', '2222', 5, 0, ''),
(39, '00019/2017', '2017-03-16 08:31:25', 1, 'Administrador', '0', 1, 1, '0', 'yyyyyyyyyyyy', 'yyyyyyyyy', 1, 0, '2017-03-08', 1, 'yyyyyyyyy', 'yyyyyy', 'yyyyyyyyyyyyy', 5, 0, ''),
(40, '00020/2017', '2017-03-16 08:31:25', 1, 'Administrador', '0', 1, 1, '0', 'tttttttttttt', 'tttttttttttt', 1, 0, '2017-03-14', 1, 'ttttttttttt', 'ttttttttt', 'tttttttttt', 5, 0, ''),
(41, '00021/2017', '2017-03-16 08:31:25', 1, 'Administrador', '0', 1, 1, '0', 'DDDDDDDDDDDDDDDDD', 'DDDDDDDDDDD', 1, 0, '2017-03-15', 1, 'dddddddddd', 'ddddddd', 'DDDDDDDDDDDDD', 5, 0, ''),
(42, '00022/2017', '2017-03-16 08:31:25', 1, 'Administrador', '0', 1, 1, '0', 'wwwwwwwwwww', 'wwwwwwwwwww', 1, 0, '2017-03-29', 1, 'wwwwwww', 'wwwwwwwwww', 'wwwwwwwwwwww', 5, 0, ''),
(43, '00023/2017', '2017-03-16 08:31:25', 1, 'Administrador', '0', 1, 1, '0', 'eeeeeeeeeeee', 'eeeeeee', 1, 0, '2017-03-29', 1, 'eeeeeeeee', 'eeeeeeeeee', 'eeeeeeeeeeeeee', 5, 0, '/imagens/'),
(44, '00024/2017', '2017-03-16 08:31:25', 1, 'Administrador', '0', 1, 1, '0', 'wwwwwwwwwww', 'wwwwwwwwwww', 1, 0, '2017-03-22', 1, 'wwwwwwwwww', 'wwwwwwwwww', 'wwwwwwwwwwww', 5, 0, '/imagens/'),
(45, '00025/2017', '2017-03-16 08:31:25', 1, 'Administrador', '0', 1, 1, '0', 'dffffffffffff', 'dddddddddddddddddd', 1, 1233, '2017-03-07', 1, 'ddddddddddd', 'dddddddddd', 'dccccccccccccc', 5, 0, 'imagens/'),
(46, '00026/2017', '2017-03-16 08:31:25', 1, 'Administrador', '0', 1, 1, '0', 'DDDDDDDDDDDDDDDDD', 'DDDDDDDDDDD', 1, 0, '2017-03-15', 1, 'ddddddddddd', 'dddDDDDDDD', 'DDDDDDDDDDDDD', 5, 0, 'imagens/anteprojeto-design-responsivo.doc'),
(47, '00027/2017', '2017-03-16 10:44:55', 2, 'Administrador', 'tethdgsvyt', 2, 1, 'sdfdyetfye', 'eeeeeeeeeeee', '222222222222', 1, 0, '2017-03-28', 1, 'ddddddddddddddd', 'dddDDDDDDD', 'eeeeeeeeeeeeee', 2, 1, 'imagens/cabedelo-01-2010-edital.pdf'),
(48, '00028/2017', '2017-03-20 08:54:40', 1, 'Administrador', '0', 1, 1, '0', 'cccccc', 'ccccccc', 1, 222222, '2017-03-21', 1, 'ccccccccc', 'cccccccccc', 'ddd', 5, 0, 'imagens/anteprojeto-design-responsivo.doc'),
(49, '00029/2017', '2017-03-20 08:54:40', 1, 'Administrador', '0', 1, 1, '0', 'eeeeeeeee', 'eeeeeeeeeee', 1, 0, '2017-03-16', 1, 'eeeeeeeee', 'ddddddddddd', 'eeeeeeeeeeeeee', 5, 0, 'C:\\wamp\\www\\protocoloCompletoII\\protocolo_teste/imagens/3_Lei_nº_617_1991.pdf'),
(50, '00030/2017', '2017-03-20 08:54:40', 1, 'Administrador', '0', 1, 1, '0', 'wwwwwwwwwww', 'wwwwwww', 1, 0, '2017-03-09', 1, 'w', 'wwwwwwwwww', 'wwwwwwwwww', 5, 0, 'C:\\wamp\\www\\protocoloCompletoII\\protocolo_teste/imagens/2_Lei_nº_616_1991.pdf'),
(51, '00031/2017', '2017-02-23 14:13:06', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(52, '00032/2017', '2017-02-23 14:13:06', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(53, '00033/2017', '2017-02-23 14:13:06', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(54, '00034/2017', '2017-02-23 14:13:06', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(55, '00035/2017', '2017-02-23 14:13:06', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(56, '00036/2017', '2017-02-23 14:38:10', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(57, '00037/2017', '2017-02-23 14:38:10', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(58, '00038/2017', '2017-02-23 14:41:15', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(59, '00039/2017', '2017-02-23 14:41:15', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(60, '00040/2017', '2017-02-23 14:41:15', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(61, '00041/2017', '2017-02-23 14:41:15', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(62, '00042/2017', '2017-02-23 15:50:09', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(63, '00043/2017', '2017-02-23 16:12:16', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(64, '00044/2017', '2017-03-06 09:08:08', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(65, '00045/2017', '2017-03-06 09:47:48', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(66, '00046/2017', '2017-03-13 11:04:00', 2, 'Lidiane', 'Arquivado', 3, 1, '', '', '', 0, 0, '0000-00-00', 0, '', '', '', 3, 1, ''),
(67, '00047/2017', '2017-03-06 20:07:12', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(68, '00048/2017', '2017-03-08 09:56:06', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(69, '00049/2017', '2017-03-08 12:39:25', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(70, '50/2017', '2017-03-09 09:02:21', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(71, '51/2017', '2017-03-09 09:02:21', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(72, '52/2017', '2017-03-09 09:02:21', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(73, '53/2017', '2017-03-09 09:02:21', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(74, '54/2017', '2017-03-09 09:02:21', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(75, '55/2017', '2017-03-09 09:02:21', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(76, '0056/2017', '2017-03-13 09:49:42', 2, 'Lidiane', 'Arquivado', 3, 1, '', 'iuyi', 'uyiuy', 1, 44548, '2017-01-31', 1, 'jdftuyt', 'ew3e3', 'iuyiuyi', 3, 1, ''),
(77, '0057/2017', '2017-03-09 10:38:05', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(78, '0058/2017', '2017-03-14 10:05:31', 2, 'Lidiane', 'Arquivado', 3, 1, '', 'iu', 'iuiu', 1, 65356325, '2017-03-20', 1, 'sfr', 'gtgg', 'iuiui', 3, 1, ''),
(79, '0059/2017', '2017-03-10 09:18:14', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(80, '0060/2017', '2017-03-13 09:14:55', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(81, '0061/2017', '2017-03-13 09:35:25', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(82, '0062/2017', '2017-03-13 09:43:16', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(83, '0063/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'Arquivado', 3, 1, '', 'jjjj', 'jjj', 1, 0, '2017-03-14', 1, '76u', 'u7', 'tyuuu', 3, 1, ''),
(84, '0064/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'Arquivado', 3, 1, '', '', '', 0, 0, '0000-00-00', 0, '', '', '', 3, 1, ''),
(85, '0065/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'Arquivado', 3, 1, '', 'fgggg', 'yyy', 1, 1233, '2017-03-07', 1, 'yyy', 'yy', 'ewrre', 3, 1, ''),
(86, '0066/2017', '2017-03-13 12:48:44', 1, 'Administrador', 'ttttt', 2, 1, 'ttttttttttttttttttt', 'iiii', 'iii', 1, 0, '2017-03-21', 1, 'iiii', 'iii', 'uui', 2, 0, ''),
(87, '0067/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'Arquivado', 3, 1, '', 'm', 'm', 2, 2147483647, '2017-03-09', 1, 'mm', 'mm', 'kk', 3, 1, ''),
(88, '0068/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'Arquivado', 3, 1, '', '', '', 0, 0, '0000-00-00', 0, '', '', '', 3, 1, ''),
(89, '0069/2017', '2017-03-13 11:08:08', 1, 'Lidiane', 'rtr', 2, 1, 'ttt', 'fff', 'ff', 1, 65354, '2017-03-23', 1, 'ff', 'ff', 'rrr', 2, 1, ''),
(90, '0070/2017', '2017-03-13 11:30:35', 1, 'Lidiane', 'bgh', 2, 1, 'hhh', 'ggg', 'ggg', 1, 435454678, '2017-03-29', 1, 'ggg', 'gg', 'ggg', 2, 0, ''),
(91, '0071/2017', '2017-03-13 11:43:50', 2, 'Lidiane', 'Arquivado', 3, 1, 'Arquivado na pasta 512 do armário 13', 'iuyu', 'iuyiuy', 1, 27, '2017-03-29', 1, '', 'vrf', 'jyiu', 3, 1, ''),
(92, '0072/2017', '2017-03-13 12:44:55', 2, 'Lidiane', 'Arquivado', 3, 1, 'arquivado no kdshfiuey', '', '', 0, 0, '0000-00-00', 0, '', '', '', 3, 1, ''),
(93, '0073/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'Arquivado', 3, 1, '', 'ffffffffffffff', 'fffffffffffffff', 1, 0, '2017-03-16', 1, 'fffffffffffff', 'sss', 'fffffffffffffff', 3, 1, ''),
(94, '0074/2017', '2017-03-15 11:26:46', 2, 'Lidiane', 'Arquivado', 3, 1, '', 'fff', 'ff', 1, 33, '2017-03-09', 1, 'ffffffffffff', 'ffff', '3333dff', 3, 1, ''),
(95, '0075/2017', '2017-03-13 13:11:11', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(96, '0076/2017', '2017-03-14 09:03:10', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(97, '0077/2017', '2017-03-14 09:53:04', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(98, '0078/2017', '2017-03-14 09:53:04', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(99, '0079/2017', '2017-03-14 10:05:31', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(100, '0080/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(101, '0081/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(102, '0082/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(103, '0083/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(104, '0084/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(105, '0085/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(106, '0086/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(107, '0087/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(108, '0088/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(109, '0089/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(110, '0090/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(111, '0091/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(112, '0092/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(113, '0093/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(114, '0094/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(115, '0095/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(116, '0096/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(117, '0097/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(118, '0098/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(119, '0099/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(120, '0100/2017', '2017-03-14 11:47:43', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(121, '0101/2017', '2017-03-14 11:49:27', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(122, '0102/2017', '2017-03-14 11:49:27', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(123, '0103/2017', '2017-03-14 11:49:27', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(124, '0104/2017', '2017-03-14 11:49:27', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(125, '0105/2017', '2017-03-14 11:49:27', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(126, '0106/2017', '2017-03-14 11:49:27', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(127, '0107/2017', '2017-03-14 13:49:37', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, ''),
(128, '0108/2017', '2017-03-15 08:23:55', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', '', '', 0, 0, '0000-00-00', 0, '', '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fases`
--

CREATE TABLE IF NOT EXISTS `fases` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fases`
--

INSERT INTO `fases` (`id`, `nome`, `descricao`) VALUES
(0, 'Protocolado', 'O documento teve seu protocolo gerado'),
(1, 'Registrado', 'O documento foi registrado pelo protocolista'),
(2, 'Envidado', 'O documento foi enviado para o setor de destino'),
(3, 'Encerrada', 'tramitaçao encerrada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcao`
--

CREATE TABLE IF NOT EXISTS `funcao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `funcao`
--

INSERT INTO `funcao` (`id`, `nome`, `descricao`) VALUES
(1, 'Protocolista', 'teste2'),
(2, 'digitador', 'digita coisas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE IF NOT EXISTS `historico` (
  `numeroprotocolo` varchar(255) NOT NULL,
  `datahora` datetime NOT NULL,
  `id_setor` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `fase` int(11) NOT NULL,
  `id_tramitacao` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `recebido` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `historico`
--

INSERT INTO `historico` (`numeroprotocolo`, `datahora`, `id_setor`, `usuario`, `assunto`, `fase`, `id_tramitacao`, `descricao`, `recebido`) VALUES
('0001/2015', '2015-06-09 09:05:15', 1, 'admin', 'Protocolo Gerado', 0, 0, '', 0),
('0001/2015', '2015-06-09 09:10:39', 0, 'admin', '0', 1, 5, '', 0),
('0001/2015', '2015-06-09 09:15:52', 1, 'admin', 'tets', 2, 2, 'www', 0),
('0000/2015', '2015-06-09 09:59:52', 0, 'admin', '0', 1, 5, '', 0),
('0000/2015', '2015-06-09 09:59:52', 1, 'admin', 'TESTE', 2, 2, 'HJ', 0),
('0000/2015', '2015-06-09 09:59:52', 1, 'admin', 'arquivado', 3, 3, '', 0),
('0002/2015', '2015-06-09 10:01:33', 1, 'admin', 'Protocolo Gerado', 0, 0, '', 0),
('0001/2015', '2015-06-09 10:15:32', 1, 'teste', 'Recebido', 3, 3, '', 1),
('0001/2015', '2015-06-09 10:15:32', 1, 'teste', 'arquivado', 3, 3, '', 0),
('0003/2015', '2015-06-09 10:29:18', 1, 'admin', 'Protocolo Gerado', 0, 0, '', 0),
('0002/2015', '2015-06-09 11:35:15', 0, 'admin', '0', 1, 5, '', 0),
('0002/2015', '2015-06-09 11:35:15', 1, 'admin', 'erer', 2, 2, 'ee', 0),
('0002/2015', '2015-06-09 11:37:02', 1, 'teste', 'Recebido', 3, 3, '', 1),
('0002/2015', '2015-06-09 11:37:02', 1, 'teste', 'arquivado', 3, 3, '', 0),
('0004/2015', '2015-06-15 08:53:21', 1, 'admin', 'Protocolo Gerado', 0, 0, '', 0),
('0003/2015', '2015-06-15 08:53:21', 0, 'admin', '0', 1, 5, '', 0),
('0003/2015', '2015-06-15 08:56:40', 1, 'admin', 'eee', 2, 2, 'eeeee', 0),
('0003/2015', '2015-06-15 09:31:41', 1, 'Teste', 'Recebido', 3, 3, '', 1),
('0003/2015', '2015-06-15 09:31:41', 1, 'Teste', 'arquivado', 3, 3, '', 0),
('0004/2015', '2015-06-19 11:31:29', 0, 'admin', '0', 1, 5, '', 0),
('0004/2015', '2015-06-19 11:31:29', 1, 'admin', 'ww', 2, 2, 'ww', 0),
('0005/2015', '2015-06-19 11:35:31', 1, 'admin', 'Protocolo Gerado', 0, 0, '', 0),
('0004/2015', '2015-06-19 11:44:57', 1, 'Teste', 'Recebido', 3, 3, '', 1),
('0006/2015', '2015-07-12 15:09:38', 1, 'admin', 'Protocolo Gerado', 0, 0, '', 0),
('0005/2015', '2015-08-15 15:57:17', 0, 'admin', '0', 1, 5, '', 0),
('0005/2015', '2015-08-15 15:57:17', 1, 'admin', 'ee', 2, 2, 'ee', 0),
('0005/2015', '2015-08-15 15:57:57', 1, 'Teste', 'Recebido', 3, 3, '', 1),
('0007/2015', '2015-08-15 15:59:36', 1, 'admin', 'Protocolo Gerado', 0, 0, '', 0),
('0004/2015', '2015-09-09 13:32:50', 1, 'Teste', 'arquivado', 3, 3, '', 0),
('0008/2015', '2015-09-09 13:33:15', 1, 'admin', 'Protocolo Gerado', 0, 0, '', 0),
('0006/2015', '2015-09-09 15:10:12', 0, 'admin', '0', 1, 5, '', 0),
('0006/2015', '2015-09-09 15:10:12', 1, 'admin', 'ww', 2, 2, 'ww', 0),
('0006/2015', '2015-09-09 15:11:03', 1, 'Teste', 'Recebido', 3, 3, '', 1),
('0009/2015', '2015-11-20 21:12:44', 1, 'admin', 'Protocolo Gerado', 0, 0, '', 0),
('00010/2015', '2015-11-27 08:48:43', 1, 'admin', 'Protocolo Gerado', 0, 0, '', 0),
('000/2016', '2016-02-11 10:37:31', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0001/2016', '2016-10-06 09:12:45', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0002/2016', '2016-10-06 09:12:45', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0003/2016', '2016-10-06 09:12:45', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0007/2015', '2016-10-06 09:12:45', 0, 'admin', '0', 1, 5, '0', 0),
('0007/2015', '2016-10-06 09:12:45', 2, 'admin', 'conhecimento', 2, 2, 'cdf', 0),
('0007/2015', '2016-10-06 09:18:56', 2, 'Lidiane', 'arquivado', 3, 3, '', 0),
('0004/2016', '2016-10-06 09:21:28', 1, 'admin', 'Protocolo Gerado', 0, 0, '', 0),
('0005/2016', '2016-10-06 09:52:27', 1, 'admin', 'Protocolo Gerado', 0, 0, '', 0),
('0006/2016', '2016-10-07 11:10:28', 1, 'admin', 'Protocolo Gerado', 0, 0, '', 0),
('0007/2016', '2016-12-07 08:53:45', 1, 'admin', 'Protocolo Gerado', 0, 0, '', 0),
('000/2017', '2017-01-27 12:59:58', 1, 'admin', 'Protocolo Gerado', 0, 0, '', 0),
('0001/2017', '2017-01-27 19:51:28', 1, 'admin', 'Protocolo Gerado', 0, 0, '', 0),
('0002/2017', '2017-01-27 19:51:28', 1, 'admin', 'Protocolo Gerado', 0, 0, '', 0),
('0003/2017', '2017-01-27 19:51:28', 1, 'admin', 'Protocolo Gerado', 0, 0, '', 0),
('0004/2017', '2017-02-02 09:36:32', 1, 'admin', 'Protocolo Gerado', 0, 0, '', 0),
('0008/2015', '2017-02-02 12:10:38', 0, 'admin', '0', 1, 5, '0', 0),
('0008/2015', '2017-02-02 12:10:38', 2, 'admin', 'treghb', 2, 2, 'dfrf', 0),
('0009/2015', '2017-02-02 12:10:38', 0, 'admin', '0', 1, 5, '0', 0),
('0009/2015', '2017-02-02 12:10:38', 1, 'admin', 'eee', 2, 2, 'eeee', 0),
('0008/2015', '2017-02-02 12:14:31', 2, 'Lidiane', 'arquivado', 3, 3, 'çlekporirpo', 0),
('0005/2017', '2017-02-02 13:03:42', 1, 'admin', 'Protocolo Gerado', 0, 0, '', 0),
('0005/2017', '2017-02-02 13:03:42', 0, 'admin', '0', 1, 5, '', 0),
('0005/2017', '2017-02-02 13:03:42', 1, 'admin', 'kuyiu', 2, 2, 'loi', 0),
('0005/2017', '2017-02-02 13:03:42', 1, 'admin', 'arquivado', 3, 3, '', 0),
('0006/2017', '2017-02-02 13:20:02', 1, 'admin', 'Protocolo Gerado', 0, 0, '', 0),
('0007/2017', '2017-02-02 16:21:26', 1, 'admin', 'Protocolo Gerado', 0, 0, '', 0),
('0008/2017', '2017-02-06 10:10:01', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0008/2017', '2017-02-06 10:10:01', 0, 'admin', '0', 1, 5, '0', 0),
('0008/2017', '2017-02-06 10:10:01', 2, 'admin', 'teste', 2, 2, 'gfghhhh', 0),
('0008/2017', '2017-02-06 10:12:15', 1, 'Lidiane', 'rrr', 2, 2, 'rrr', 0),
('0009/2017', '2017-02-09 10:41:58', 1, 'admin', 'Protocolo Gerado', 0, 0, '', 0),
('00010/2015', '2017-02-09 10:41:58', 0, 'admin', '0', 1, 5, '', 0),
('00010/2015', '2017-02-09 10:41:58', 2, 'admin', 'oiuryiu', 2, 2, 'ttt', 0),
('00010/2017', '2017-02-13 09:47:50', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00010/2015', '2017-02-13 09:48:34', 2, 'Lidiane', 'arquivado', 3, 3, '', 0),
('00011/2017', '2017-02-14 10:58:23', 1, 'admin', 'Protocolo Gerado', 0, 0, '', 0),
('000/2016', '2017-02-14 10:58:23', 0, 'admin', '0', 1, 5, '', 0),
('000/2016', '2017-02-14 10:58:23', 2, 'admin', 'efrf', 2, 2, 'rfrf', 0),
('00012/2017', '2017-02-14 11:06:34', 1, 'admin', 'Protocolo Gerado', 0, 0, '', 0),
('0001/2016', '2017-02-14 11:06:34', 0, 'admin', '0', 1, 5, '', 0),
('0005/2015', '2017-02-14 11:06:34', 1, 'admin', 'arquivado', 3, 3, '', 0),
('00013/2017', '2017-02-14 13:03:00', 1, 'admin', 'Protocolo Gerado', 0, 0, '', 0),
('00013/2017', '2017-02-14 13:03:00', 0, 'admin', '0', 1, 5, '', 0),
('000/2016', '2017-02-14 13:12:29', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('000/2016', '2017-02-14 13:12:29', 1, 'Lidiane', 'yyy', 2, 2, 'kik', 0),
('00014/2017', '2017-02-21 11:32:02', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00015/2017', '2017-02-22 08:36:50', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00016/2017', '2017-02-22 08:36:50', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00017/2017', '2017-02-22 09:43:24', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00018/2017', '2017-02-23 12:32:30', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00019/2017', '2017-02-23 14:01:19', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00020/2017', '2017-02-23 14:01:19', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00021/2017', '2017-02-23 14:01:19', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00022/2017', '2017-02-23 14:01:19', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00023/2017', '2017-02-23 14:01:19', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00024/2017', '2017-02-23 14:01:19', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00025/2017', '2017-02-23 14:01:19', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00026/2017', '2017-02-23 14:13:06', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00027/2017', '2017-02-23 14:13:06', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00028/2017', '2017-02-23 14:13:06', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00029/2017', '2017-02-23 14:13:06', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00030/2017', '2017-02-23 14:13:06', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00031/2017', '2017-02-23 14:13:06', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00032/2017', '2017-02-23 14:13:06', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00033/2017', '2017-02-23 14:13:06', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00034/2017', '2017-02-23 14:13:06', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00035/2017', '2017-02-23 14:13:06', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00036/2017', '2017-02-23 14:38:10', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00037/2017', '2017-02-23 14:38:10', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00038/2017', '2017-02-23 14:41:15', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00039/2017', '2017-02-23 14:41:15', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00040/2017', '2017-02-23 14:41:15', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00041/2017', '2017-02-23 14:41:15', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00042/2017', '2017-02-23 15:50:09', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00043/2017', '2017-02-23 16:12:16', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00044/2017', '2017-03-06 09:08:08', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00045/2017', '2017-03-06 09:47:48', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0002/2016', '2017-03-06 09:47:48', 0, 'admin', '0', 1, 5, '0', 0),
('0001/2016', '2017-03-06 09:47:48', 2, 'admin', 'uroitiuyi', 2, 2, 'wejytewiutr', 0),
('0006/2015', '2017-03-06 09:49:57', 1, 'Teste', 'arquivado', 3, 3, 'err', 0),
('000/2016', '2017-03-06 09:49:57', 1, 'Teste', 'arquivado', 3, 3, 'rrr', 0),
('0009/2015', '2017-03-06 09:49:57', 1, 'Teste', 'arquivado', 3, 3, '1efrg', 0),
('0008/2017', '2017-03-06 09:49:57', 1, 'Teste', 'arquivado', 3, 3, 'frtt', 0),
('00046/2017', '2017-03-06 09:51:25', 1, 'admin', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0003/2016', '2017-03-06 09:58:21', 0, 'admin', '0', 1, 5, '0', 0),
('00046/2017', '2017-03-06 09:58:21', 0, 'admin', '0', 1, 5, '0', 0),
('00047/2017', '2017-03-06 20:07:12', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('00048/2017', '2017-03-08 09:56:06', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0001/2016', '2017-03-08 10:07:30', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('0001/2016', '2017-03-08 10:12:49', 2, 'Lidiane', 'arquivado', 3, 3, '', 0),
('0004/2016', '2017-03-08 10:13:37', 0, 'Administrador', '0', 1, 5, '0', 0),
('0004/2016', '2017-03-08 10:13:37', 2, 'Administrador', 'oufioyeoi', 2, 2, 'dfviu', 0),
('0005/2016', '2017-03-08 10:29:20', 0, 'Administrador', '0', 1, 5, '0', 0),
('0005/2016', '2017-03-08 10:29:20', 0, 'Administrador', '0', 1, 5, '0', 0),
('0005/2016', '2017-03-08 10:29:20', 0, 'Administrador', '0', 1, 5, '0', 0),
('0006/2016', '2017-03-08 10:29:20', 0, 'Administrador', '0', 1, 5, '0', 0),
('0002/2016', '2017-03-08 10:29:20', 2, 'Administrador', 'hhh', 2, 2, 'hhh', 0),
('00049/2017', '2017-03-08 12:39:25', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('50/2017', '2017-03-09 09:02:21', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('51/2017', '2017-03-09 09:02:21', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('52/2017', '2017-03-09 09:02:21', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('53/2017', '2017-03-09 09:02:21', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('54/2017', '2017-03-09 09:02:21', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('55/2017', '2017-03-09 09:02:21', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0056/2017', '2017-03-09 09:02:21', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0056/2017', '2017-03-09 09:02:21', 0, 'Administrador', '0', 1, 5, '0', 0),
('0056/2017', '2017-03-09 09:02:21', 2, 'Administrador', 'r3r', 2, 2, 'r45', 0),
('0007/2016', '2017-03-09 10:38:05', 0, 'Administrador', '0', 1, 5, '0', 0),
('0057/2017', '2017-03-09 10:38:05', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0058/2017', '2017-03-09 13:14:38', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0059/2017', '2017-03-10 09:18:14', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0060/2017', '2017-03-13 09:14:55', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0002/2016', '2017-03-13 09:22:39', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('0004/2016', '2017-03-13 09:28:26', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('0056/2017', '2017-03-13 09:28:26', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('0061/2017', '2017-03-13 09:35:25', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('000/2017', '2017-03-13 09:35:25', 0, 'Administrador', '0', 1, 5, '0', 0),
('0003/2016', '2017-03-13 09:35:25', 1, 'Administrador', 'fgtg', 2, 2, 'thh', 0),
('0005/2016', '2017-03-13 09:36:35', 2, 'Administrador', 'sws', 2, 2, 'sss', 0),
('0005/2016', '2017-03-13 09:40:14', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('0062/2017', '2017-03-13 09:43:16', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0006/2016', '2017-03-13 09:43:16', 1, 'Administrador', 'ewkryteiy', 2, 2, 'oiuoiuoiu', 0),
('0007/2016', '2017-03-13 09:43:16', 2, 'Administrador', 'retty6', 2, 2, '5y677uhy', 0),
('0007/2016', '2017-03-13 09:45:42', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('000/2017', '2017-03-13 09:49:29', 2, 'Administrador', 'rt5', 2, 2, 'y67', 0),
('000/2017', '2017-03-13 09:49:42', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('0002/2016', '2017-03-13 09:49:42', 2, 'Lidiane', 'arquivado', 3, 3, '', 0),
('0004/2016', '2017-03-13 09:49:42', 2, 'Lidiane', 'arquivado', 3, 3, '', 0),
('0005/2016', '2017-03-13 09:49:42', 2, 'Lidiane', 'arquivado', 3, 3, '', 0),
('0007/2016', '2017-03-13 09:49:42', 2, 'Lidiane', 'arquivado', 3, 3, '', 0),
('000/2017', '2017-03-13 09:49:42', 2, 'Lidiane', 'arquivado', 3, 3, '', 0),
('0056/2017', '2017-03-13 09:49:42', 2, 'Lidiane', 'arquivado', 3, 3, '', 0),
('0063/2017', '2017-03-13 09:52:45', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0063/2017', '2017-03-13 09:52:45', 0, 'Lidiane', '0', 1, 5, '0', 0),
('00013/2017', '2017-03-13 09:52:45', 2, 'Lidiane', '76u', 2, 2, 'u67', 0),
('00013/2017', '2017-03-13 09:52:45', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('00013/2017', '2017-03-13 09:52:45', 2, 'Lidiane', 'arquivado', 3, 3, '', 0),
('0064/2017', '2017-03-13 09:57:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0065/2017', '2017-03-13 10:18:28', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0058/2017', '2017-03-13 10:48:30', 0, 'Lidiane', '0', 1, 5, '0', 0),
('0064/2017', '2017-03-13 10:49:52', 0, 'Lidiane', '0', 1, 5, '0', 0),
('0065/2017', '2017-03-13 10:49:52', 0, 'Lidiane', '0', 1, 5, '0', 0),
('00046/2017', '2017-03-13 10:59:12', 2, 'Administrador', 'dff', 2, 2, 'ff', 0),
('00046/2017', '2017-03-13 11:04:00', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('00046/2017', '2017-03-13 11:04:00', 2, 'Lidiane', 'arquivado', 3, 3, '', 0),
('0066/2017', '2017-03-13 11:08:08', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0066/2017', '2017-03-13 11:08:08', 0, 'Lidiane', '0', 1, 5, '0', 0),
('0067/2017', '2017-03-13 11:08:08', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0067/2017', '2017-03-13 11:08:08', 0, 'Lidiane', '0', 1, 5, '0', 0),
('0068/2017', '2017-03-13 11:08:08', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0068/2017', '2017-03-13 11:08:08', 0, 'Lidiane', '0', 1, 5, '0', 0),
('0069/2017', '2017-03-13 11:08:08', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0069/2017', '2017-03-13 11:08:08', 0, 'Lidiane', '0', 1, 5, '0', 0),
('0069/2017', '2017-03-13 11:08:08', 2, 'Lidiane', 'ff', 2, 2, 'ff', 0),
('0069/2017', '2017-03-13 11:08:08', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('0069/2017', '2017-03-13 11:08:08', 1, 'Lidiane', 'rtr', 2, 2, 'ttt', 0),
('0070/2017', '2017-03-13 11:30:35', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0070/2017', '2017-03-13 11:30:35', 0, 'Lidiane', '0', 1, 5, '0', 0),
('0070/2017', '2017-03-13 11:30:35', 1, 'Lidiane', 'bgh', 2, 2, 'hhh', 0),
('0071/2017', '2017-03-13 11:43:50', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0071/2017', '2017-03-13 11:43:50', 0, 'Lidiane', '0', 1, 5, '0', 0),
('0071/2017', '2017-03-13 11:43:50', 2, 'Lidiane', 'frtt', 2, 2, 'gthh', 0),
('0071/2017', '2017-03-13 11:43:50', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('0071/2017', '2017-03-13 11:43:50', 2, 'Lidiane', 'arquivado', 3, 3, 'Arquivado na pasta 512 do armário 13', 0),
('0072/2017', '2017-03-13 12:44:55', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0072/2017', '2017-03-13 12:44:55', 0, 'Lidiane', '0', 1, 5, '0', 0),
('0072/2017', '2017-03-13 12:44:55', 2, 'Lidiane', 'htrt', 2, 2, 'oo8798', 0),
('0072/2017', '2017-03-13 12:44:55', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('0072/2017', '2017-03-13 12:44:55', 2, 'Lidiane', 'arquivado', 3, 3, 'arquivado no kdshfiuey', 0),
('0058/2017', '2017-03-13 12:48:44', 2, 'Administrador', 'eiyr', 2, 2, 'trt', 0),
('0063/2017', '2017-03-13 12:48:44', 2, 'Administrador', 'ttt', 2, 2, 'ttt', 0),
('0064/2017', '2017-03-13 12:48:44', 2, 'Administrador', 'ttttt', 2, 2, 'tttt', 0),
('0065/2017', '2017-03-13 12:48:44', 2, 'Administrador', 'tttt', 2, 2, 'ttt', 0),
('0066/2017', '2017-03-13 12:48:44', 1, 'Administrador', 'ttttt', 2, 2, 'ttttttttttttttttttt', 0),
('0067/2017', '2017-03-13 12:48:44', 2, 'Administrador', 'tttt', 2, 2, 'tttt', 0),
('0068/2017', '2017-03-13 12:48:44', 2, 'Administrador', 'ttet5t5', 2, 2, 'te5ttggt5y', 0),
('0073/2017', '2017-03-13 13:08:46', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0074/2017', '2017-03-13 13:08:46', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0075/2017', '2017-03-13 13:11:11', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0076/2017', '2017-03-14 09:03:10', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0058/2017', '2017-03-14 09:03:10', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('0001/2017', '2017-03-14 09:46:38', 0, 'Administrador', '0', 1, 5, '0', 0),
('0002/2017', '2017-03-14 09:46:38', 0, 'Administrador', '0', 1, 5, '0', 0),
('0003/2017', '2017-03-14 09:46:38', 0, 'Administrador', '0', 1, 5, '0', 0),
('0001/2017', '2017-03-14 09:46:38', 2, 'Administrador', 'eeeeeeeeee', 2, 2, 'eeeeeeeeeee', 0),
('0002/2017', '2017-03-14 09:46:38', 2, 'Administrador', 'eeeeeeeeeee', 2, 2, 'eeeeeeeeeeeee', 0),
('0003/2017', '2017-03-14 09:46:38', 2, 'Administrador', 'eeeeeeeeeeee', 2, 2, 'eeeeeeeeeeee', 0),
('0077/2017', '2017-03-14 09:53:04', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0078/2017', '2017-03-14 09:53:04', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0079/2017', '2017-03-14 10:05:31', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0073/2017', '2017-03-14 10:05:31', 0, 'Lidiane', '0', 1, 5, '0', 0),
('0073/2017', '2017-03-14 10:05:31', 2, 'Lidiane', 'ffffffffffff', 2, 2, 'ffffffffffffff', 0),
('0073/2017', '2017-03-14 10:05:31', 2, 'Lidiane', 'ffffffffffff', 2, 2, 'ffffffffffffff', 0),
('0073/2017', '2017-03-14 10:05:31', 2, 'Lidiane', 'ffffffffffff', 2, 2, 'ffffffffffffff', 0),
('0073/2017', '2017-03-14 10:05:31', 2, 'Lidiane', 'ffffffffffff', 2, 2, 'ffffffffffffff', 0),
('0073/2017', '2017-03-14 10:05:31', 2, 'Lidiane', 'ffffffffffff', 2, 2, 'ffffffffffffff', 0),
('0058/2017', '2017-03-14 10:05:31', 2, 'Lidiane', 'arquivado', 3, 3, '', 0),
('0001/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'arquivado', 3, 3, '', 0),
('0002/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('0002/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'arquivado', 3, 3, '', 0),
('0003/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('0003/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'arquivado', 3, 3, '', 0),
('0063/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('0063/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'arquivado', 3, 3, '', 0),
('0064/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('0064/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'arquivado', 3, 3, '', 0),
('0065/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('0065/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'arquivado', 3, 3, '', 0),
('0067/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('0067/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'arquivado', 3, 3, '', 0),
('0068/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('0068/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'arquivado', 3, 3, '', 0),
('0073/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('0073/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'arquivado', 3, 3, '', 0),
('0073/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'arquivado', 3, 3, '', 0),
('0073/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'arquivado', 3, 3, '', 0),
('0073/2017', '2017-03-14 10:57:39', 2, 'Lidiane', 'arquivado', 3, 3, '', 0),
('0074/2017', '2017-03-14 11:05:46', 0, 'Lidiane', '0', 1, 5, '0', 0),
('0074/2017', '2017-03-14 11:05:46', 2, 'Lidiane', 'ffffffff', 2, 2, 'ffffffff', 0),
('0074/2017', '2017-03-14 11:05:46', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('0074/2017', '2017-03-14 11:05:46', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('0074/2017', '2017-03-14 11:05:46', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('0074/2017', '2017-03-14 11:05:46', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('0074/2017', '2017-03-14 11:05:46', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('0074/2017', '2017-03-14 11:05:46', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('0074/2017', '2017-03-14 11:05:46', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('0080/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0081/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0082/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0083/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0084/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0085/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0086/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0087/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0088/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0089/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0090/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0091/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0092/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0093/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0094/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0095/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0096/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0097/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0098/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0099/2017', '2017-03-14 11:31:30', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0100/2017', '2017-03-14 11:47:43', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0101/2017', '2017-03-14 11:49:27', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0102/2017', '2017-03-14 11:49:27', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0103/2017', '2017-03-14 11:49:27', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0104/2017', '2017-03-14 11:49:27', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0105/2017', '2017-03-14 11:49:27', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0106/2017', '2017-03-14 11:49:27', 2, 'Lidiane', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0107/2017', '2017-03-14 13:49:37', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0004/2017', '2017-03-15 08:23:55', 0, 'Administrador', '0', 1, 5, '0', 0),
('0004/2017', '2017-03-15 08:23:55', 2, 'Administrador', 'gtrhyth', 2, 2, 'yjuuk', 0),
('0108/2017', '2017-03-15 08:23:55', 1, 'Administrador', 'Protocolo Gerado', 0, 0, 'O documento deu entrada no protocolo', 0),
('0004/2017', '2017-03-15 08:39:47', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('0004/2017', '2017-03-15 11:26:26', 2, 'Lidiane', 'arquivado', 3, 3, '', 0),
('0074/2017', '2017-03-15 11:26:26', 2, 'Lidiane', 'eerw', 2, 2, 'ertet', 0),
('0074/2017', '2017-03-15 11:26:46', 2, 'Lidiane', 'ttttttttttt', 2, 2, 'tttttttttttt', 0),
('0074/2017', '2017-03-15 11:26:46', 2, 'Lidiane', 'arquivado', 3, 3, '', 0),
('0006/2017', '2017-03-15 11:32:37', 0, 'Administrador', '0', 1, 5, '0', 0),
('0007/2017', '2017-03-15 11:32:37', 0, 'Administrador', '0', 1, 5, '0', 0),
('0009/2017', '2017-03-15 12:26:31', 0, 'Administrador', '0', 1, 5, '0', 0),
('00010/2017', '2017-03-15 12:26:31', 0, 'Administrador', '0', 1, 5, '0', 0),
('00011/2017', '2017-03-16 08:19:11', 0, 'Administrador', '0', 1, 5, '0', 0),
('00012/2017', '2017-03-16 08:19:11', 0, 'Administrador', '0', 1, 5, '0', 0),
('00014/2017', '2017-03-16 08:31:25', 0, 'Administrador', '0', 1, 5, '0', 0),
('00014/2017', '2017-03-16 08:31:25', 0, 'Administrador', '0', 1, 5, '0', 0),
('00015/2017', '2017-03-16 08:31:25', 0, 'Administrador', '0', 1, 5, '0', 0),
('00015/2017', '2017-03-16 08:31:25', 0, 'Administrador', '0', 1, 5, '0', 0),
('00016/2017', '2017-03-16 08:31:25', 0, 'Administrador', '0', 1, 5, '0', 0),
('00017/2017', '2017-03-16 08:31:25', 0, 'Administrador', '0', 1, 5, '0', 0),
('00018/2017', '2017-03-16 08:31:25', 0, 'Administrador', '0', 1, 5, '0', 0),
('00019/2017', '2017-03-16 08:31:25', 0, 'Administrador', '0', 1, 5, '0', 0),
('0', '2017-03-16 08:31:25', 0, 'Administrador', '0', 1, 5, '0', 0),
('00020/2017', '2017-03-16 08:31:25', 0, 'Administrador', '0', 1, 5, '0', 0),
('00020/2017', '2017-03-16 08:31:25', 0, 'Administrador', '0', 1, 5, '0', 0),
('00021/2017', '2017-03-16 08:31:25', 0, 'Administrador', '0', 1, 5, '0', 0),
('00022/2017', '2017-03-16 08:31:25', 0, 'Administrador', '0', 1, 5, '0', 0),
('00023/2017', '2017-03-16 08:31:25', 0, 'Administrador', '0', 1, 5, '0', 0),
('00023/2017', '2017-03-16 08:31:25', 0, 'Administrador', '0', 1, 5, '0', 0),
('00024/2017', '2017-03-16 08:31:25', 0, 'Administrador', '0', 1, 5, '0', 0),
('00025/2017', '2017-03-16 08:31:25', 0, 'Administrador', '0', 1, 5, '0', 0),
('00026/2017', '2017-03-16 08:31:25', 0, 'Administrador', '0', 1, 5, '0', 0),
('00027/2017', '2017-03-16 08:31:25', 0, 'Administrador', '0', 1, 5, '0', 0),
('00027/2017', '2017-03-16 10:44:55', 2, 'Administrador', 'tethdgsvyt', 2, 2, 'sdfdyetfye', 0),
('00027/2017', '2017-03-16 10:45:20', 2, 'Lidiane', 'Recebido', 3, 3, '', 1),
('00028/2017', '2017-03-20 08:54:40', 0, 'Administrador', '0', 1, 5, '0', 0),
('00029/2017', '2017-03-20 08:54:40', 0, 'Administrador', '0', 1, 5, '0', 0),
('00030/2017', '2017-03-20 08:54:40', 0, 'Administrador', '0', 1, 5, '0', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `numeroprotocolo`
--

CREATE TABLE IF NOT EXISTS `numeroprotocolo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(4) unsigned zerofill NOT NULL,
  `ano` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=130 ;

--
-- Extraindo dados da tabela `numeroprotocolo`
--

INSERT INTO `numeroprotocolo` (`id`, `numero`, `ano`) VALUES
(1, 0000, 2015),
(2, 0001, 2015),
(3, 0002, 2015),
(4, 0003, 2015),
(5, 0004, 2015),
(6, 0005, 2015),
(7, 0006, 2015),
(8, 0007, 2015),
(9, 0008, 2015),
(10, 0009, 2015),
(11, 0010, 2015),
(12, 0011, 2015),
(13, 0001, 2016),
(14, 0002, 2016),
(15, 0003, 2016),
(16, 0004, 2016),
(17, 0005, 2016),
(18, 0006, 2016),
(19, 0007, 2016),
(20, 0008, 2016),
(21, 0001, 2017),
(22, 0002, 2017),
(23, 0003, 2017),
(24, 0004, 2017),
(25, 0005, 2017),
(26, 0006, 2017),
(27, 0007, 2017),
(28, 0008, 2017),
(29, 0009, 2017),
(30, 0010, 2017),
(31, 0011, 2017),
(32, 0012, 2017),
(33, 0013, 2017),
(34, 0014, 2017),
(35, 0015, 2017),
(36, 0016, 2017),
(37, 0017, 2017),
(38, 0018, 2017),
(39, 0019, 2017),
(40, 0020, 2017),
(41, 0021, 2017),
(42, 0022, 2017),
(43, 0023, 2017),
(44, 0024, 2017),
(45, 0025, 2017),
(46, 0026, 2017),
(47, 0027, 2017),
(48, 0028, 2017),
(49, 0029, 2017),
(50, 0030, 2017),
(51, 0031, 2017),
(52, 0032, 2017),
(53, 0033, 2017),
(54, 0034, 2017),
(55, 0035, 2017),
(56, 0036, 2017),
(57, 0037, 2017),
(58, 0038, 2017),
(59, 0039, 2017),
(60, 0040, 2017),
(61, 0041, 2017),
(62, 0042, 2017),
(63, 0043, 2017),
(64, 0044, 2017),
(65, 0045, 2017),
(66, 0046, 2017),
(67, 0047, 2017),
(68, 0048, 2017),
(69, 0049, 2017),
(70, 0050, 2017),
(71, 0051, 2017),
(72, 0052, 2017),
(73, 0053, 2017),
(74, 0054, 2017),
(75, 0055, 2017),
(76, 0056, 2017),
(77, 0057, 2017),
(78, 0058, 2017),
(79, 0059, 2017),
(80, 0060, 2017),
(81, 0061, 2017),
(82, 0062, 2017),
(83, 0063, 2017),
(84, 0064, 2017),
(85, 0065, 2017),
(86, 0066, 2017),
(87, 0067, 2017),
(88, 0068, 2017),
(89, 0069, 2017),
(90, 0070, 2017),
(91, 0071, 2017),
(92, 0072, 2017),
(93, 0073, 2017),
(94, 0074, 2017),
(95, 0075, 2017),
(96, 0076, 2017),
(97, 0077, 2017),
(98, 0078, 2017),
(99, 0079, 2017),
(100, 0080, 2017),
(101, 0081, 2017),
(102, 0082, 2017),
(103, 0083, 2017),
(104, 0084, 2017),
(105, 0085, 2017),
(106, 0086, 2017),
(107, 0087, 2017),
(108, 0088, 2017),
(109, 0089, 2017),
(110, 0090, 2017),
(111, 0091, 2017),
(112, 0092, 2017),
(113, 0093, 2017),
(114, 0094, 2017),
(115, 0095, 2017),
(116, 0096, 2017),
(117, 0097, 2017),
(118, 0098, 2017),
(119, 0099, 2017),
(120, 0100, 2017),
(121, 0101, 2017),
(122, 0102, 2017),
(123, 0103, 2017),
(124, 0104, 2017),
(125, 0105, 2017),
(126, 0106, 2017),
(127, 0107, 2017),
(128, 0108, 2017),
(129, 0109, 2017);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`id`, `nome`, `descricao`) VALUES
(1, 'Administrador', 'Controla todas as funcoes do sistema'),
(2, 'Usuário', 'Somente Pesquisa no sistema');

-- --------------------------------------------------------

--
-- Estrutura da tabela `secretaria`
--

CREATE TABLE IF NOT EXISTS `secretaria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `Telefone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `setor`
--

CREATE TABLE IF NOT EXISTS `setor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `setor`
--

INSERT INTO `setor` (`id`, `nome`, `descricao`) VALUES
(1, 'Protocolo', 'controle de documentos'),
(2, 'CPD', 'Central de processamento de dados');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipodocumento`
--

CREATE TABLE IF NOT EXISTS `tipodocumento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tipodocumento`
--

INSERT INTO `tipodocumento` (`id`, `nome`, `descricao`) VALUES
(1, 'Ofício', 'teste'),
(2, 'Memorando', 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tramitacao`
--

CREATE TABLE IF NOT EXISTS `tramitacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `tramitacao`
--

INSERT INTO `tramitacao` (`id`, `nome`, `descricao`) VALUES
(1, 'Recebido', 'O documento foi recebido no setor'),
(2, 'Enviar', 'O documento foi enviado para outro setor'),
(3, 'Guardar em Arquivo local', 'O documento está no arquivo local'),
(4, 'Remetido para arquivo Geral', 'O documento foi enviado para o setor de Arquivo'),
(5, 'Registrado no protocolo', 'O documento foi registrado no protocolo'),
(6, 'Remeter documento para eliminacao', 'O documento eliminado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(255) DEFAULT NULL,
  `matricula` varchar(255) NOT NULL DEFAULT '0000-0',
  `senha` varchar(255) NOT NULL,
  `id_secretaria` int(11) NOT NULL,
  `id_setor` int(11) NOT NULL,
  `id_perfil` int(11) NOT NULL,
  `id_funcao` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `Nome`, `matricula`, `senha`, `id_secretaria`, `id_setor`, `id_perfil`, `id_funcao`) VALUES
(9, 'Teste', 'teste', '202cb962ac59075b964b07152d234b70', 0, 1, 2, 1),
(10, 'Lidiane', '222', 'caf1a3dfb505ffed0d024130f58c5cfa', 0, 2, 2, 1),
(11, 'teste2', '12344', '827ccb0eea8a706c4c34a16891f84e7b', 0, 2, 2, 2),
(12, 'Administrador', 'admin', '202cb962ac59075b964b07152d234b70', 0, 1, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
