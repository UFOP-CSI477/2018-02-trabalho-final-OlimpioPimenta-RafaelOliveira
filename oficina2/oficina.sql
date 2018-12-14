-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 14, 2018 at 11:02 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oficina`
--

-- --------------------------------------------------------

--
-- Table structure for table `agendamentos`
--

CREATE TABLE `agendamentos` (
  `id` int(10) UNSIGNED NOT NULL,
  `cliente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dd` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `horario` time NOT NULL,
  `data_prometida` date NOT NULL,
  `horario_prometido` time NOT NULL,
  `retorno` tinyint(1) NOT NULL,
  `chegada` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `consultor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agendamentos`
--

INSERT INTO `agendamentos` (`id`, `cliente`, `placa`, `dd`, `telefone`, `data`, `horario`, `data_prometida`, `horario_prometido`, `retorno`, `chegada`, `created_at`, `updated_at`, `consultor`, `tipo`, `modelo`, `status`) VALUES
(1, 'Rafael Oliveira', 'FKD-2541', '32', '8452-5241', '2018-12-05', '11:15:00', '2019-01-16', '11:45:00', 0, 'Pouco Urgente', '2018-12-14 06:40:22', '2018-12-14 23:21:06', 'Andre', 'Entregas', 'Q3', 'Lavagem'),
(3, 'Olimpio Zueira', 'KKK-4514', '32', '8547-8787', '2018-12-24', '12:00:00', '2018-12-30', '08:00:00', 1, 'Não Urgente', '2018-12-14 13:38:06', '2018-12-14 13:38:06', '', '', '', ''),
(4, 'Frances Lopes', 'POP-8888', '31', '8484-7474', '2018-12-23', '15:00:00', '2018-12-26', '15:00:00', 0, 'Prioridade', '2018-12-14 13:39:08', '2018-12-14 13:39:08', '', '', '', ''),
(7, 'Roberval', 'HGH-8478', '32', '8547-8787', '2018-12-26', '08:15:00', '2018-12-26', '10:45:00', 0, 'Pouco Urgente', '2018-12-14 21:35:08', '2018-12-14 21:35:08', 'Andre', 'Agendados', 'Q3', 'Reprogramar');

-- --------------------------------------------------------

--
-- Table structure for table `concessionarias`
--

CREATE TABLE `concessionarias` (
  `id` int(10) UNSIGNED NOT NULL,
  `num_dealer` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_fantasia` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `razao_social` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dvisoes_agenda` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora_inicio_agenda` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora_fim_agenda` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisoes_programacao` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora_inicio_prog` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora_final_prog` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuso_horario` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cor_de_intervalos` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cor_inicio_apontamento` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cor_apontamento_1` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `porcentagem_apontamento_1` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cor_apontamento_2` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `porcentagem_apontamento_2` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `porcentagem_apontamento_3` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cor_apontamento_terminado` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cor_apontamento_orfao` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_logo` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_logo_1` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_interface` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `versao_layout` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estilo_angeda` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `concessionarias`
--

INSERT INTO `concessionarias` (`id`, `num_dealer`, `nome_fantasia`, `razao_social`, `dvisoes_agenda`, `hora_inicio_agenda`, `hora_fim_agenda`, `divisoes_programacao`, `hora_inicio_prog`, `hora_final_prog`, `fuso_horario`, `cor_de_intervalos`, `cor_inicio_apontamento`, `cor_apontamento_1`, `porcentagem_apontamento_1`, `cor_apontamento_2`, `porcentagem_apontamento_2`, `porcentagem_apontamento_3`, `cor_apontamento_terminado`, `cor_apontamento_orfao`, `url_logo`, `url_logo_1`, `email_interface`, `versao_layout`, `estilo_angeda`, `created_at`, `updated_at`) VALUES
(2, '4528', 'Veloster Center Belo Horizonte', 'Veloster Center Belo Horizonte', '6', '07:30:00', '18:20:00', '4', '08:00:00', '18:00:00', '0', '#000000', '#FFAB34', '#00FF00', '50', '#FFA900', '90', '#FF0000', '#0889FB', '#010001', 'http://minha.pagina.lin.meu/imagem/url/logo.jpg', 'http://minha.pagina.lin.meu/imagem/url/logo1.jpg', 'meuEmailDeContato@veloster.com.br', '1.3.0', 'Celular', '2018-12-09 19:46:07', '2018-12-09 19:46:07');

-- --------------------------------------------------------

--
-- Table structure for table `concesusuario`
--

CREATE TABLE `concesusuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `equipes`
--

CREATE TABLE `equipes` (
  `id` int(10) UNSIGNED NOT NULL,
  `cod_equipe` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_letra_prog` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `negrito_letra_prog` tinyint(1) NOT NULL,
  `tam_letra_prog` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altura_linha_prog` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caracters_por_divisao` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altura_linha_apont` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_letra_produt` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `negrito_produt` tinyint(1) NOT NULL,
  `tam_letra_produt` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tam_letra_hora` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altura_linha_hora` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempo_de_atualizacao` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipes`
--

INSERT INTO `equipes` (`id`, `cod_equipe`, `descricao`, `tipe_letra_prog`, `negrito_letra_prog`, `tam_letra_prog`, `altura_linha_prog`, `caracters_por_divisao`, `altura_linha_apont`, `tipo_letra_produt`, `negrito_produt`, `tam_letra_produt`, `tam_letra_hora`, `altura_linha_hora`, `tempo_de_atualizacao`, `created_at`, `updated_at`) VALUES
(4, '1', 'Cinzaesc', 'Arial', 1, '12', '44', '5', '16', 'Tahoma', 1, '18', '14', '12', '60', '2018-12-09 19:46:08', '2018-12-09 19:46:08'),
(5, '2', 'Cinzacla', 'Arial', 1, '12', '48', '5', '16', 'Tahoma', 1, '22', '14', '16', '60', '2018-12-09 19:46:08', '2018-12-09 19:46:08'),
(6, '2', 'Express', 'Arial', 1, '12', '48', '5', '16', 'Tahoma', 1, '22', '14', '16', '60', '2018-12-09 19:46:08', '2018-12-09 19:46:08');

-- --------------------------------------------------------

--
-- Table structure for table `especialidades`
--

CREATE TABLE `especialidades` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `especialidades`
--

INSERT INTO `especialidades` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(8, 'Alinhamento', '2018-12-09 19:46:08', '2018-12-09 19:46:08'),
(9, 'Chefe.de.oficina', '2018-12-09 19:46:08', '2018-12-09 19:46:08'),
(10, 'Lavação', '2018-12-09 19:46:08', '2018-12-09 19:46:08'),
(11, 'Mecânica', '2018-12-09 19:46:08', '2018-12-09 19:46:08'),
(12, 'Pintura', '2018-12-09 19:46:08', '2018-12-09 19:46:08'),
(13, 'Polimento', '2018-12-09 19:46:08', '2018-12-09 19:46:08'),
(14, 'Tec.diag', '2018-12-09 19:46:08', '2018-12-09 19:46:08');

-- --------------------------------------------------------

--
-- Table structure for table `excecaocargas`
--

CREATE TABLE `excecaocargas` (
  `id` int(10) UNSIGNED NOT NULL,
  `chapa` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produtivo` tinyint(1) NOT NULL,
  `consultor` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `excecaocargas`
--

INSERT INTO `excecaocargas` (`id`, `chapa`, `produtivo`, `consultor`, `created_at`, `updated_at`) VALUES
(1, '4003671', 0, 1, '2018-12-14 22:27:23', '2018-12-14 22:27:23'),
(2, 'cjq', 0, 1, '2018-12-14 22:27:23', '2018-12-14 22:27:23'),
(3, 'JDM', 0, 1, '2018-12-14 22:27:23', '2018-12-14 22:27:23'),
(4, 'LMC', 0, 1, '2018-12-14 22:27:23', '2018-12-14 22:27:23'),
(5, 'REG', 0, 1, '2018-12-14 22:27:23', '2018-12-14 22:27:23'),
(6, 'VFM', 0, 1, '2018-12-14 22:27:23', '2018-12-14 22:27:23');

-- --------------------------------------------------------

--
-- Table structure for table `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nome` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apelido` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chapa` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cor_apresentacao` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cor_da_letra` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `equipe` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produtivo` tinyint(1) NOT NULL,
  `compartilhado` tinyint(1) NOT NULL,
  `especialidade` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consultor` tinyint(1) NOT NULL,
  `painel_agenda` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cafe_da_manha_inicio` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cafe_da_manha_fim` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `almoco_inicio` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `almoco_fim` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cafe_da_tarde_inicio` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cafe_da_tarde_fim` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `created_at`, `updated_at`, `nome`, `apelido`, `usuario`, `chapa`, `cor_apresentacao`, `cor_da_letra`, `equipe`, `produtivo`, `compartilhado`, `especialidade`, `consultor`, `painel_agenda`, `cafe_da_manha_inicio`, `cafe_da_manha_fim`, `almoco_inicio`, `almoco_fim`, `cafe_da_tarde_inicio`, `cafe_da_tarde_fim`) VALUES
(1, '2018-12-14 20:17:07', '2018-12-14 20:17:07', 'Mestre Kame', 'safadaum', '', 'a13', '#FF6161', '#FBF5F5', 'Cinzaesc', 1, 0, 'mecânica', 0, '', '', '', '12:00:00', '13:15:00', '', ''),
(2, '2018-12-14 20:17:07', '2018-12-14 20:17:07', 'Mestre Saitama', 'Bocais', '', 'EJC', '#FF6161', '#FFFFFF', 'Cinzaesc', 1, 0, 'alinhamento', 0, '', '', '', '12:30:00', '13:45:00', '', ''),
(3, '2018-12-14 20:17:07', '2018-12-14 20:17:07', 'Ryu', 'DaHadouken', '', 'UN1', '#FF6161', '#FFFFFF', 'Cinzaesc', 1, 0, 'alinhamento', 0, '', '', '', '12:30:00', '13:45:00', '', ''),
(4, '2018-12-14 20:17:08', '2018-12-14 20:17:08', 'Jiraya', 'EroSenin', '', '28', '#FF6161', '#FFFFFF', 'Cinzaesc', 0, 0, 'Chefe.de.oficina', 1, 'agenda2', '', '', '', '', '', ''),
(5, '2018-12-14 20:17:08', '2018-12-14 20:17:08', 'Godofrido', 'cotoco', '', 'LND', '#FBFBFB', '#286A00', 'Cinzaesc', 0, 0, '', 1, 'agenda2', '', '', '11:30:00', '13:30:00', '', ''),
(6, '2018-12-14 20:17:08', '2018-12-14 20:17:08', 'Cebesta', 'noia', '', 'RMJ', '#FBFBFB', '#286A00', 'Cinzaesc', 0, 0, 'tec.diag', 1, 'agenda2', '', '', '11:30:00', '13:30:00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `intervaloagendas`
--

CREATE TABLE `intervaloagendas` (
  `id` int(10) UNSIGNED NOT NULL,
  `consultor` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chapa` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora_inicial` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora_final` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `intervaloagendas`
--

INSERT INTO `intervaloagendas` (`id`, `consultor`, `chapa`, `hora_inicial`, `hora_final`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 'Mestre kame', '1', '11:00', '12:00', '2-Agendado', '2018-12-14 22:27:23', '2018-12-14 22:27:23');

-- --------------------------------------------------------

--
-- Table structure for table `logcargas`
--

CREATE TABLE `logcargas` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo_concessionaria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_registro` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acao` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chapa` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_os` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prisma` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cor_veiculo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_abertura` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_prometida` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora_prometida` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_cliente` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_cliente` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ddd_residencial` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone_residencial` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ddd_celular` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone_celular` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ddd_comercial` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone_comerical` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ramal_comerica` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_carga` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arquivo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `processado` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `erro_carga` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logcargas`
--

INSERT INTO `logcargas` (`id`, `codigo_concessionaria`, `tipo_registro`, `acao`, `chapa`, `numero_os`, `prisma`, `placa`, `modelo`, `cor_veiculo`, `data_abertura`, `data_prometida`, `hora_prometida`, `codigo_cliente`, `nome_cliente`, `ddd_residencial`, `fone_residencial`, `ddd_celular`, `fone_celular`, `ddd_comercial`, `fone_comerical`, `ramal_comerica`, `status`, `data_carga`, `arquivo`, `processado`, `erro_carga`, `created_at`, `updated_at`) VALUES
(1, '4528 Veloster Center BH', 'OS', '1', 'Q12', '94361', '', 'QNT1010', 'AUDI A SD LM', 'Preto ORCA METALICO', '14/12/18', '14/12/18', '17:00', '2', 'tamagotchi', '31', '3691-4412', '80', '998740218', '34', '998740218', '', '5', '2018-12-27 15:22:01', 'meuarquivocodigo.txt', '3', 'Consuktor (Q12) não encontrado', '2018-12-14 22:27:23', '2018-12-14 22:27:23'),
(2, '4528 Veloster Center BH', 'Apontamento', '1', 'AAM', '94341', '', '', '', '', '14/12/18', '14/12/18', '17:00', '5', 'tamagotchi', '', '', '', '', '', '', '', '1', '2018-12-27 15:20:01', 'meuarquivocodigo2.txt', '1', '', '2018-12-14 22:27:23', '2018-12-14 22:27:23'),
(3, '4528 Veloster Center BH', 'Agenda', '1', 'w25', '', '', 'OKX87200', '', '', '14/12/18', '', '14:30', '4', 'tamagotchi', '31', '998741029', '', '', '', '', '', '1', '2018-12-27 11:20:01', 'meuarquivocodigo4.txt', '1', '', '2018-12-14 22:27:23', '2018-12-14 22:27:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_08_165827_create_tipos_table', 1),
(4, '2018_12_08_172936_create_agendamentos_table', 1),
(5, '2018_12_08_213331_create_statusoss_table', 1),
(6, '2018_12_09_024830_create_modelos_table', 1),
(7, '2018_12_09_032452_create_ordensdeservicos_table', 1),
(8, '2018_12_09_035032_create_funcionarios_table', 1),
(9, '2018_12_09_040506_create_especialidades_table', 1),
(10, '2018_12_09_041709_create_equipes_table', 1),
(11, '2018_12_09_044731_create_concesusuario_table', 1),
(12, '2018_12_09_045049_create_concessionarias_table', 1),
(13, '2018_12_09_132825_create_statusagendamentos_table', 1),
(14, '2018_12_09_170537_create_usuarios_table', 2),
(15, '2018_12_14_124914_add_cols_table_agendamentos', 3),
(16, '2018_12_14_180635_add_cols_table_funcionarios', 4),
(17, '2018_12_11_030321_create_excecaocargas_table', 5),
(18, '2018_12_11_031059_create_intervaloagendas_table', 5),
(19, '2018_12_11_031508_create_logcargas_table', 5),
(20, '2018_12_11_032850_create_primas_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `modelos`
--

CREATE TABLE `modelos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modelos`
--

INSERT INTO `modelos` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(21, 'A1', '2018-12-09 19:46:08', '2018-12-09 19:46:08'),
(22, 'A1-Diagnóstico', '2018-12-09 19:46:08', '2018-12-09 19:46:08'),
(23, 'A1-Peço', '2018-12-09 19:46:09', '2018-12-09 19:46:09'),
(24, 'A1-Revisão', '2018-12-09 19:46:09', '2018-12-09 19:46:09'),
(25, 'A1-Rv/Dg', '2018-12-09 19:46:09', '2018-12-09 19:46:09'),
(26, 'A3', '2018-12-09 19:46:09', '2018-12-09 19:46:09'),
(27, 'A3-Peça', '2018-12-09 19:46:09', '2018-12-09 19:46:09'),
(28, 'A4', '2018-12-09 19:46:09', '2018-12-09 19:46:09'),
(29, 'A4-Peça', '2018-12-09 19:46:09', '2018-12-09 19:46:09'),
(30, 'A4-Revisão', '2018-12-09 19:46:09', '2018-12-09 19:46:09'),
(31, 'A5', '2018-12-09 19:46:09', '2018-12-09 19:46:09'),
(32, 'A5-Peça', '2018-12-09 19:46:09', '2018-12-09 19:46:09'),
(33, 'A6', '2018-12-09 19:46:09', '2018-12-09 19:46:09'),
(34, 'A7', '2018-12-09 19:46:09', '2018-12-09 19:46:09'),
(35, 'Q3', '2018-12-09 19:46:09', '2018-12-09 19:46:09'),
(36, 'Q3-Peça', '2018-12-09 19:46:09', '2018-12-09 19:46:09'),
(37, 'Q5', '2018-12-09 19:46:09', '2018-12-09 19:46:09'),
(38, 'Q5-Peça', '2018-12-09 19:46:09', '2018-12-09 19:46:09'),
(39, 'Q7', '2018-12-09 19:46:09', '2018-12-09 19:46:09'),
(40, 'Q7-Peça', '2018-12-09 19:46:09', '2018-12-09 19:46:09');

-- --------------------------------------------------------

--
-- Table structure for table `ordensdeservicos`
--

CREATE TABLE `ordensdeservicos` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_de_abertura` date NOT NULL,
  `data_prometida` date NOT NULL,
  `hora_prometida` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cor_do_veiculo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_cliente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_cliente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dd_residencial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone_residencial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dd_comercial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ramal_comercial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `primas`
--

CREATE TABLE `primas` (
  `id` int(10) UNSIGNED NOT NULL,
  `prisma` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `primas`
--

INSERT INTO `primas` (`id`, `prisma`, `created_at`, `updated_at`) VALUES
(1, '04AM', '2018-12-14 22:27:24', '2018-12-14 22:27:24'),
(2, '1', '2018-12-14 22:27:24', '2018-12-14 22:27:24'),
(3, '10', '2018-12-14 22:27:24', '2018-12-14 22:27:24'),
(4, '10AMZ', '2018-12-14 22:27:24', '2018-12-14 22:27:24'),
(5, '11AMZ', '2018-12-14 22:27:24', '2018-12-14 22:27:24'),
(6, '11AZ', '2018-12-14 22:27:24', '2018-12-14 22:27:24'),
(7, '13', '2018-12-14 22:27:24', '2018-12-14 22:27:24'),
(8, '13AM', '2018-12-14 22:27:24', '2018-12-14 22:27:24'),
(9, '13AZ', '2018-12-14 22:27:24', '2018-12-14 22:27:24'),
(10, '14AZ', '2018-12-14 22:27:24', '2018-12-14 22:27:24'),
(11, '1630', '2018-12-14 22:27:24', '2018-12-14 22:27:24'),
(12, '17AM', '2018-12-14 22:27:24', '2018-12-14 22:27:24'),
(13, '19AZ', '2018-12-14 22:27:24', '2018-12-14 22:27:24'),
(14, '19VE', '2018-12-14 22:27:24', '2018-12-14 22:27:24'),
(15, '1amarelo', '2018-12-14 22:27:24', '2018-12-14 22:27:24'),
(16, '20VE', '2018-12-14 22:27:25', '2018-12-14 22:27:25'),
(17, '22AZ', '2018-12-14 22:27:25', '2018-12-14 22:27:25'),
(18, '23VE', '2018-12-14 22:27:25', '2018-12-14 22:27:25'),
(19, '25VD', '2018-12-14 22:27:25', '2018-12-14 22:27:25'),
(20, '28AZ', '2018-12-14 22:27:25', '2018-12-14 22:27:25'),
(21, '29AZ', '2018-12-14 22:27:25', '2018-12-14 22:27:25'),
(22, '2AM', '2018-12-14 22:27:25', '2018-12-14 22:27:25'),
(23, '30AZ', '2018-12-14 22:27:25', '2018-12-14 22:27:25'),
(24, '31AZ', '2018-12-14 22:27:25', '2018-12-14 22:27:25'),
(25, '3AM', '2018-12-14 22:27:25', '2018-12-14 22:27:25'),
(26, '30VE', '2018-12-14 22:27:25', '2018-12-14 22:27:25'),
(27, '44AS', '2018-12-14 22:27:25', '2018-12-14 22:27:25'),
(28, '4AM', '2018-12-14 22:27:25', '2018-12-14 22:27:25'),
(29, '5AZ', '2018-12-14 22:27:25', '2018-12-14 22:27:25'),
(30, '6AM', '2018-12-14 22:27:25', '2018-12-14 22:27:25'),
(31, '6AZ', '2018-12-14 22:27:25', '2018-12-14 22:27:25'),
(32, '8AZ', '2018-12-14 22:27:25', '2018-12-14 22:27:25'),
(33, 'DD', '2018-12-14 22:27:25', '2018-12-14 22:27:25'),
(34, 'DE', '2018-12-14 22:27:25', '2018-12-14 22:27:25'),
(35, 'HKJ7', '2018-12-14 22:27:26', '2018-12-14 22:27:26'),
(36, 'HMQ1', '2018-12-14 22:27:26', '2018-12-14 22:27:26'),
(37, 'NT', '2018-12-14 22:27:26', '2018-12-14 22:27:26'),
(38, 'NTEM', '2018-12-14 22:27:26', '2018-12-14 22:27:26'),
(39, 'OPF', '2018-12-14 22:27:26', '2018-12-14 22:27:26'),
(40, 'OQG8', '2018-12-14 22:27:26', '2018-12-14 22:27:26'),
(41, 'PW', '2018-12-14 22:27:26', '2018-12-14 22:27:26'),
(42, 'PWH9', '2018-12-14 22:27:26', '2018-12-14 22:27:26'),
(43, 'PWK', '2018-12-14 22:27:26', '2018-12-14 22:27:26'),
(44, 'PWK7', '2018-12-14 22:27:26', '2018-12-14 22:27:26'),
(45, 'PWR2', '2018-12-14 22:27:26', '2018-12-14 22:27:26'),
(46, 'PWX2', '2018-12-14 22:27:26', '2018-12-14 22:27:26'),
(47, 'PXP2', '2018-12-14 22:27:26', '2018-12-14 22:27:26'),
(48, 'PYC6', '2018-12-14 22:27:26', '2018-12-14 22:27:26'),
(49, 'PYI', '2018-12-14 22:27:26', '2018-12-14 22:27:26'),
(50, 'PYM8', '2018-12-14 22:27:26', '2018-12-14 22:27:26');

-- --------------------------------------------------------

--
-- Table structure for table `statusagendamentos`
--

CREATE TABLE `statusagendamentos` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statusagendamentos`
--

INSERT INTO `statusagendamentos` (`id`, `codigo`, `descricao`, `created_at`, `updated_at`) VALUES
(6, '0', 'agendamento', '2018-12-09 19:46:10', '2018-12-09 19:46:10'),
(7, '1', 'Compareceu', '2018-12-09 19:46:10', '2018-12-09 19:46:10'),
(8, '2', 'Atemdimento', '2018-12-09 19:46:10', '2018-12-09 19:46:10'),
(9, '3', 'Pronto', '2018-12-09 19:46:10', '2018-12-09 19:46:10'),
(10, '4', 'Cliente Aguardando', '2018-12-09 19:46:10', '2018-12-09 19:46:10');

-- --------------------------------------------------------

--
-- Table structure for table `statusos`
--

CREATE TABLE `statusos` (
  `id` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libera_prisma` tinyint(1) NOT NULL,
  `consulta_web` tinyint(1) NOT NULL,
  `envia_sms` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statusos`
--

INSERT INTO `statusos` (`id`, `descricao`, `libera_prisma`, `consulta_web`, `envia_sms`, `created_at`, `updated_at`) VALUES
(12, 'Pendente (a Programar)', 1, 0, 0, '2018-12-09 19:46:10', '2018-12-09 19:46:10'),
(13, 'Programada', 1, 0, 0, '2018-12-09 19:46:10', '2018-12-09 19:46:10'),
(14, 'Em Execução', 1, 0, 0, '2018-12-09 19:46:10', '2018-12-09 19:46:10'),
(15, 'Pronta', 1, 0, 0, '2018-12-09 19:46:10', '2018-12-09 19:46:10'),
(16, 'Entrege', 1, 0, 0, '2018-12-09 19:46:10', '2018-12-09 19:46:10'),
(17, 'Lavagem', 1, 0, 0, '2018-12-09 19:46:10', '2018-12-09 19:46:10'),
(18, 'Aguardando Peça', 1, 0, 0, '2018-12-09 19:46:10', '2018-12-09 19:46:10'),
(19, 'Aguardando Aprovação', 1, 0, 0, '2018-12-09 19:46:10', '2018-12-09 19:46:10'),
(20, 'Cancelada', 1, 0, 0, '2018-12-09 19:46:10', '2018-12-09 19:46:10'),
(21, 'Reprogramar', 1, 0, 0, '2018-12-09 19:46:11', '2018-12-09 19:46:11'),
(22, 'Demonstração', 1, 0, 0, '2018-12-09 19:46:11', '2018-12-09 19:46:11');

-- --------------------------------------------------------

--
-- Table structure for table `tipos`
--

CREATE TABLE `tipos` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cor` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apresenta_codigo` tinyint(1) NOT NULL,
  `apresenta_legenda` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tipos`
--

INSERT INTO `tipos` (`id`, `codigo`, `descricao`, `cor`, `apresenta_codigo`, `apresenta_legenda`, `created_at`, `updated_at`) VALUES
(9, 'A', 'Almoço', '#F3F915', 1, 1, '2018-12-14 22:27:23', '2018-12-14 22:27:23'),
(10, 'E', 'Entregas', '#3FF20B', 1, 1, '2018-12-14 22:27:23', '2018-12-14 22:27:23'),
(11, 'G', 'Agendados', '#FFFFFF', 1, 1, '2018-12-14 22:27:23', '2018-12-14 22:27:23'),
(12, 'P', 'Passantes', '#3FF1800', 1, 1, '2018-12-14 22:27:23', '2018-12-14 22:27:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rafael oliveira', 'rafaelollywer@hotmail.com', NULL, '$2y$10$kiFBHNFrEIvzRY4Xc.qMPeFFOUKCJZajwa8AFC5jwiS5rs7NC8voO', 'JBeB9r5obtvigkuGPCfsuliuO42KPiq1U8OV28MVBRpy2p7VgPKdrC5S7Lcd', '2018-12-14 22:36:05', '2018-12-14 22:36:05');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chapa` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirma` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  `administrador` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `chapa`, `senha`, `confirma`, `ativo`, `administrador`, `created_at`, `updated_at`) VALUES
(6, 'chunlin', '6', '123', '123', 1, '0', '2018-12-09 19:46:12', '2018-12-13 13:43:55'),
(12, 'rafael', '23', '12345', '12345', 1, '0', '2018-12-14 01:33:44', '2018-12-14 03:23:58'),
(13, 'Olimpio O cara', '32', '1245', '1245', 0, '1', '2018-12-14 03:36:48', '2018-12-14 03:36:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `concessionarias`
--
ALTER TABLE `concessionarias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `concesusuario`
--
ALTER TABLE `concesusuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipes`
--
ALTER TABLE `equipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excecaocargas`
--
ALTER TABLE `excecaocargas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intervaloagendas`
--
ALTER TABLE `intervaloagendas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logcargas`
--
ALTER TABLE `logcargas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modelos`
--
ALTER TABLE `modelos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordensdeservicos`
--
ALTER TABLE `ordensdeservicos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `primas`
--
ALTER TABLE `primas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statusagendamentos`
--
ALTER TABLE `statusagendamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statusos`
--
ALTER TABLE `statusos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendamentos`
--
ALTER TABLE `agendamentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `concessionarias`
--
ALTER TABLE `concessionarias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `concesusuario`
--
ALTER TABLE `concesusuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `equipes`
--
ALTER TABLE `equipes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `excecaocargas`
--
ALTER TABLE `excecaocargas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `intervaloagendas`
--
ALTER TABLE `intervaloagendas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logcargas`
--
ALTER TABLE `logcargas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `modelos`
--
ALTER TABLE `modelos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `ordensdeservicos`
--
ALTER TABLE `ordensdeservicos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `primas`
--
ALTER TABLE `primas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `statusagendamentos`
--
ALTER TABLE `statusagendamentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `statusos`
--
ALTER TABLE `statusos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
