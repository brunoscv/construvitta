-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 03, 2020 at 06:13 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `const981_sistema`
--
CREATE DATABASE IF NOT EXISTS `const981_sistema` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `const981_sistema`;

-- --------------------------------------------------------

--
-- Table structure for table `audit`
--

DROP TABLE IF EXISTS `audit`;
CREATE TABLE IF NOT EXISTS `audit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `createdAt` datetime DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `query` text,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(45) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `timestamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `data` text,
  PRIMARY KEY (`id`),
  KEY `last_actvity_idx` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `user_agent`, `timestamp`, `data`) VALUES
('011fb5878eabde3bfac76658098037ca734da022', '179.211.229.144', '', 1599109787, '__ci_last_regenerate|i:1599109787;userdata|a:8:{s:2:\"id\";s:1:\"2\";s:4:\"nome\";s:11:\"Construvita\";s:7:\"usuario\";s:8:\"brunoscv\";s:7:\"tipo_id\";s:1:\"4\";s:10:\"usuario_id\";s:1:\"0\";s:6:\"perfis\";a:1:{i:0;s:1:\"2\";}s:9:\"principal\";s:1:\"1\";s:11:\"clientes_id\";N;}'),
('0b5e9e92ea4df345f0f6baba62bf0a330ce8fca8', '179.211.229.144', '', 1596735580, '__ci_last_regenerate|i:1596735580;userdata|a:8:{s:2:\"id\";s:1:\"2\";s:4:\"nome\";s:11:\"Construvita\";s:7:\"usuario\";s:8:\"brunoscv\";s:7:\"tipo_id\";s:1:\"4\";s:10:\"usuario_id\";s:1:\"0\";s:6:\"perfis\";a:1:{i:0;s:1:\"2\";}s:9:\"principal\";s:1:\"1\";s:11:\"clientes_id\";N;}'),
('0bee55e650d34639b694c4c35e5a49c517235433', '179.211.229.144', '', 1599132248, '__ci_last_regenerate|i:1599132248;userdata|a:8:{s:2:\"id\";s:1:\"2\";s:4:\"nome\";s:11:\"Construvita\";s:7:\"usuario\";s:8:\"brunoscv\";s:7:\"tipo_id\";s:1:\"4\";s:10:\"usuario_id\";s:1:\"0\";s:6:\"perfis\";a:1:{i:0;s:1:\"2\";}s:9:\"principal\";s:1:\"1\";s:11:\"clientes_id\";N;}'),
('0c91c7aa44caa97211ff499b51bd309bcf4c1dfe', '179.162.137.140', '', 1597417729, '__ci_last_regenerate|i:1597417698;userdata|a:8:{s:2:\"id\";s:2:\"13\";s:4:\"nome\";s:5:\"Paula\";s:7:\"usuario\";s:5:\"paula\";s:7:\"tipo_id\";s:1:\"2\";s:10:\"usuario_id\";s:1:\"1\";s:6:\"perfis\";a:1:{i:0;s:1:\"5\";}s:9:\"principal\";s:1:\"0\";s:11:\"clientes_id\";N;}'),
('0df7a44b0c0e12e5996ebb6a3506c13e3199efb1', '179.211.229.144', '', 1597897569, '__ci_last_regenerate|i:1597897569;'),
('0f41dd29fc989abe58ebafcaa4dd80940f1609b0', '5.22.190.69', '', 1596734009, '__ci_last_regenerate|i:1596734008;'),
('181db68f8e2634d38a7e90d373f0297b659357f9', '179.83.93.192', '', 1598291864, '__ci_last_regenerate|i:1598291864;userdata|a:8:{s:2:\"id\";s:2:\"12\";s:4:\"nome\";s:14:\"Lucas Cordeiro\";s:7:\"usuario\";s:13:\"lucascordeiro\";s:7:\"tipo_id\";s:1:\"1\";s:10:\"usuario_id\";s:1:\"5\";s:6:\"perfis\";a:1:{i:0;s:1:\"7\";}s:9:\"principal\";s:1:\"0\";s:11:\"clientes_id\";N;}'),
('191415b288d9a89d04a2739d75d3a2349af04d13', '179.211.229.144', '', 1597892444, '__ci_last_regenerate|i:1597892444;userdata|a:8:{s:2:\"id\";s:1:\"2\";s:4:\"nome\";s:11:\"Construvita\";s:7:\"usuario\";s:8:\"brunoscv\";s:7:\"tipo_id\";s:1:\"4\";s:10:\"usuario_id\";s:1:\"0\";s:6:\"perfis\";a:1:{i:0;s:1:\"2\";}s:9:\"principal\";s:1:\"1\";s:11:\"clientes_id\";N;}'),
('1e604b9854155f19f5b9f288b116df00a317bb21', '179.211.229.144', '', 1597891072, '__ci_last_regenerate|i:1597891072;userdata|a:8:{s:2:\"id\";s:1:\"2\";s:4:\"nome\";s:11:\"Construvita\";s:7:\"usuario\";s:8:\"brunoscv\";s:7:\"tipo_id\";s:1:\"4\";s:10:\"usuario_id\";s:1:\"0\";s:6:\"perfis\";a:1:{i:0;s:1:\"2\";}s:9:\"principal\";s:1:\"1\";s:11:\"clientes_id\";N;}'),
('2606b029abbf4e060e1303c9bad8ca58248e14c7', '179.83.93.192', '', 1598290714, '__ci_last_regenerate|i:1598290714;'),
('29257c0c82aca93951e008cd6e9aa7fd9e3aa28b', '179.211.229.144', '', 1596737302, '__ci_last_regenerate|i:1596737238;userdata|a:8:{s:2:\"id\";s:1:\"2\";s:4:\"nome\";s:11:\"Construvita\";s:7:\"usuario\";s:8:\"brunoscv\";s:7:\"tipo_id\";s:1:\"4\";s:10:\"usuario_id\";s:1:\"0\";s:6:\"perfis\";a:1:{i:0;s:1:\"2\";}s:9:\"principal\";s:1:\"1\";s:11:\"clientes_id\";N;}'),
('37d5c447e9866eab3e8948944eee5dc304ba420d', '179.211.229.144', '', 1596736014, '__ci_last_regenerate|i:1596736014;userdata|a:8:{s:2:\"id\";s:1:\"2\";s:4:\"nome\";s:11:\"Construvita\";s:7:\"usuario\";s:8:\"brunoscv\";s:7:\"tipo_id\";s:1:\"4\";s:10:\"usuario_id\";s:1:\"0\";s:6:\"perfis\";a:1:{i:0;s:1:\"2\";}s:9:\"principal\";s:1:\"1\";s:11:\"clientes_id\";N;}'),
('3db952a0f79a0197fea7b38a1ea63baa7ecbc16b', '179.83.90.92', '', 1596732804, '__ci_last_regenerate|i:1596732804;'),
('3ecc51676b46958682fd22f920167f93bb55d4cf', '179.211.229.144', '', 1597892745, '__ci_last_regenerate|i:1597892745;userdata|a:8:{s:2:\"id\";s:1:\"2\";s:4:\"nome\";s:11:\"Construvita\";s:7:\"usuario\";s:8:\"brunoscv\";s:7:\"tipo_id\";s:1:\"4\";s:10:\"usuario_id\";s:1:\"0\";s:6:\"perfis\";a:1:{i:0;s:1:\"2\";}s:9:\"principal\";s:1:\"1\";s:11:\"clientes_id\";N;}'),
('458fea1db0cc60ff4435d58114416b5e9a8efa3f', '179.211.229.144', '', 1597896856, '__ci_last_regenerate|i:1597896856;userdata|a:8:{s:2:\"id\";s:1:\"2\";s:4:\"nome\";s:11:\"Construvita\";s:7:\"usuario\";s:8:\"brunoscv\";s:7:\"tipo_id\";s:1:\"4\";s:10:\"usuario_id\";s:1:\"0\";s:6:\"perfis\";a:1:{i:0;s:1:\"2\";}s:9:\"principal\";s:1:\"1\";s:11:\"clientes_id\";N;}'),
('4b3f1975977915fbbf356f839ebcc8f9a1bab487', '179.83.90.92', '', 1596734727, '__ci_last_regenerate|i:1596734727;userdata|a:8:{s:2:\"id\";s:1:\"3\";s:4:\"nome\";s:11:\"Construvita\";s:7:\"usuario\";s:12:\"eduardocosta\";s:7:\"tipo_id\";s:1:\"4\";s:10:\"usuario_id\";s:1:\"0\";s:6:\"perfis\";a:1:{i:0;s:1:\"2\";}s:9:\"principal\";s:1:\"1\";s:11:\"clientes_id\";s:1:\"0\";}msg_success|s:32:\"Usuário adicionado com sucesso!\";__ci_vars|a:1:{s:11:\"msg_success\";s:3:\"old\";}'),
('4cba1c093a3d78bd103481c3c8438858036cfddc', '179.211.229.144', '', 1596737238, '__ci_last_regenerate|i:1596737238;userdata|a:8:{s:2:\"id\";s:1:\"2\";s:4:\"nome\";s:11:\"Construvita\";s:7:\"usuario\";s:8:\"brunoscv\";s:7:\"tipo_id\";s:1:\"4\";s:10:\"usuario_id\";s:1:\"0\";s:6:\"perfis\";a:1:{i:0;s:1:\"2\";}s:9:\"principal\";s:1:\"1\";s:11:\"clientes_id\";N;}'),
('52530e6682f8748629dbea7c0aaf47bb3108d04f', '179.83.93.192', '', 1598290775, '__ci_last_regenerate|i:1598290775;'),
('5a7f0065ea6a5acb720101dc742b3df29e5caf98', '179.83.93.192', '', 1598291864, '__ci_last_regenerate|i:1598291864;userdata|a:8:{s:2:\"id\";s:2:\"12\";s:4:\"nome\";s:14:\"Lucas Cordeiro\";s:7:\"usuario\";s:13:\"lucascordeiro\";s:7:\"tipo_id\";s:1:\"1\";s:10:\"usuario_id\";s:1:\"5\";s:6:\"perfis\";a:1:{i:0;s:1:\"7\";}s:9:\"principal\";s:1:\"0\";s:11:\"clientes_id\";N;}'),
('5de6e7e253095b26d8ddc69eebfa883e4593271e', '179.211.229.144', '', 1597890681, '__ci_last_regenerate|i:1597890681;userdata|a:8:{s:2:\"id\";s:1:\"2\";s:4:\"nome\";s:11:\"Construvita\";s:7:\"usuario\";s:8:\"brunoscv\";s:7:\"tipo_id\";s:1:\"4\";s:10:\"usuario_id\";s:1:\"0\";s:6:\"perfis\";a:1:{i:0;s:1:\"2\";}s:9:\"principal\";s:1:\"1\";s:11:\"clientes_id\";N;}'),
('6aa4c1f5bdbf9bdf0c35d4df2274975f02314517', '179.83.90.92', '', 1596735322, '__ci_last_regenerate|i:1596735322;userdata|a:8:{s:2:\"id\";s:2:\"13\";s:4:\"nome\";s:5:\"Paula\";s:7:\"usuario\";s:5:\"paula\";s:7:\"tipo_id\";s:1:\"2\";s:10:\"usuario_id\";s:1:\"1\";s:6:\"perfis\";a:1:{i:0;s:1:\"5\";}s:9:\"principal\";s:1:\"0\";s:11:\"clientes_id\";N;}'),
('701e028b2fc76d2b6963e9ee6946627d8a7c9398', '179.83.90.92', '', 1596734932, '__ci_last_regenerate|i:1596734727;userdata|a:8:{s:2:\"id\";s:1:\"3\";s:4:\"nome\";s:11:\"Construvita\";s:7:\"usuario\";s:12:\"eduardocosta\";s:7:\"tipo_id\";s:1:\"4\";s:10:\"usuario_id\";s:1:\"0\";s:6:\"perfis\";a:1:{i:0;s:1:\"2\";}s:9:\"principal\";s:1:\"1\";s:11:\"clientes_id\";s:1:\"0\";}'),
('77f2c7cad6d323bb8ecdb08054cd4f87b316c5db', '179.83.90.92', '', 1596734177, '__ci_last_regenerate|i:1596734177;'),
('7e6da73e5eb74b5a871c875ee8afde7ff8d3bdef', '179.211.229.144', '', 1597897569, '__ci_last_regenerate|i:1597897569;userdata|a:8:{s:2:\"id\";s:1:\"2\";s:4:\"nome\";s:11:\"Construvita\";s:7:\"usuario\";s:8:\"brunoscv\";s:7:\"tipo_id\";s:1:\"4\";s:10:\"usuario_id\";s:1:\"0\";s:6:\"perfis\";a:1:{i:0;s:1:\"2\";}s:9:\"principal\";s:1:\"1\";s:11:\"clientes_id\";N;}msg_success|s:32:\"Registro adicionado com sucesso!\";__ci_vars|a:1:{s:11:\"msg_success\";s:3:\"old\";}'),
('930ce25229bc9c8d4ca9e4ea20672c0c1ad3f1c6', '179.83.90.92', '', 1596735422, '__ci_last_regenerate|i:1596735322;userdata|a:8:{s:2:\"id\";s:2:\"13\";s:4:\"nome\";s:5:\"Paula\";s:7:\"usuario\";s:5:\"paula\";s:7:\"tipo_id\";s:1:\"2\";s:10:\"usuario_id\";s:1:\"1\";s:6:\"perfis\";a:1:{i:0;s:1:\"5\";}s:9:\"principal\";s:1:\"0\";s:11:\"clientes_id\";N;}'),
('9318aff4c12cfc4918af5b1edb84e3199317da23', '179.83.90.92', '', 1596732785, '__ci_last_regenerate|i:1596732785;userdata|a:8:{s:2:\"id\";s:1:\"3\";s:4:\"nome\";s:11:\"Construvita\";s:7:\"usuario\";s:12:\"eduardocosta\";s:7:\"tipo_id\";s:1:\"4\";s:10:\"usuario_id\";s:1:\"0\";s:6:\"perfis\";a:1:{i:0;s:1:\"2\";}s:9:\"principal\";s:1:\"1\";s:11:\"clientes_id\";s:1:\"0\";}msg_success|s:32:\"Usuário adicionado com sucesso!\";__ci_vars|a:1:{s:11:\"msg_success\";s:3:\"old\";}'),
('9442bfeee5722447e58569dda3c99ecc66dd0a29', '179.83.90.92', '', 1596734706, '__ci_last_regenerate|i:1596734423;userdata|a:8:{s:2:\"id\";s:2:\"12\";s:4:\"nome\";s:14:\"Lucas Cordeiro\";s:7:\"usuario\";s:13:\"lucascordeiro\";s:7:\"tipo_id\";s:1:\"1\";s:10:\"usuario_id\";s:1:\"5\";s:6:\"perfis\";a:1:{i:0;s:1:\"7\";}s:9:\"principal\";s:1:\"0\";s:11:\"clientes_id\";N;}'),
('a6d674c043bd0c06249126091ddce2566b746085', '179.83.90.92', '', 1596734423, '__ci_last_regenerate|i:1596734423;userdata|a:8:{s:2:\"id\";s:2:\"12\";s:4:\"nome\";s:14:\"Lucas Cordeiro\";s:7:\"usuario\";s:13:\"lucascordeiro\";s:7:\"tipo_id\";s:1:\"1\";s:10:\"usuario_id\";s:1:\"5\";s:6:\"perfis\";a:1:{i:0;s:1:\"7\";}s:9:\"principal\";s:1:\"0\";s:11:\"clientes_id\";N;}msg_success|s:32:\"Registro adicionado com sucesso!\";__ci_vars|a:1:{s:11:\"msg_success\";s:3:\"old\";}'),
('adfec3562dccfee69ae4f0830c1547e7394d4a74', '179.211.229.144', '', 1597897195, '__ci_last_regenerate|i:1597897195;userdata|a:8:{s:2:\"id\";s:1:\"2\";s:4:\"nome\";s:11:\"Construvita\";s:7:\"usuario\";s:8:\"brunoscv\";s:7:\"tipo_id\";s:1:\"4\";s:10:\"usuario_id\";s:1:\"0\";s:6:\"perfis\";a:1:{i:0;s:1:\"2\";}s:9:\"principal\";s:1:\"1\";s:11:\"clientes_id\";N;}'),
('aff0fad6706512d1237aea677aee04f3eb8ee439', '179.83.90.92', '', 1596732804, '__ci_last_regenerate|i:1596732804;'),
('b82cd27b3745811e258f162f82b0b3e3471bf4ba', '179.211.229.144', '', 1597893051, '__ci_last_regenerate|i:1597893051;userdata|a:8:{s:2:\"id\";s:1:\"2\";s:4:\"nome\";s:11:\"Construvita\";s:7:\"usuario\";s:8:\"brunoscv\";s:7:\"tipo_id\";s:1:\"4\";s:10:\"usuario_id\";s:1:\"0\";s:6:\"perfis\";a:1:{i:0;s:1:\"2\";}s:9:\"principal\";s:1:\"1\";s:11:\"clientes_id\";N;}'),
('cbcede4e2f063339328455c300ad3e5d846ac3de', '179.211.229.144', '', 1597889770, '__ci_last_regenerate|i:1597889770;userdata|a:8:{s:2:\"id\";s:1:\"2\";s:4:\"nome\";s:11:\"Construvita\";s:7:\"usuario\";s:8:\"brunoscv\";s:7:\"tipo_id\";s:1:\"4\";s:10:\"usuario_id\";s:1:\"0\";s:6:\"perfis\";a:1:{i:0;s:1:\"2\";}s:9:\"principal\";s:1:\"1\";s:11:\"clientes_id\";N;}'),
('d211c1f963f81c5c2a13bfe5dd96e63641e89524', '179.211.229.144', '', 1597895684, '__ci_last_regenerate|i:1597895684;userdata|a:8:{s:2:\"id\";s:1:\"2\";s:4:\"nome\";s:11:\"Construvita\";s:7:\"usuario\";s:8:\"brunoscv\";s:7:\"tipo_id\";s:1:\"4\";s:10:\"usuario_id\";s:1:\"0\";s:6:\"perfis\";a:1:{i:0;s:1:\"2\";}s:9:\"principal\";s:1:\"1\";s:11:\"clientes_id\";N;}'),
('d6a22e76509da189c2dba143087ffe24bdd8f4e5', '179.211.229.144', '', 1599132249, '__ci_last_regenerate|i:1599132249;'),
('dd8add01fbb8e08c0bb267def23376ac9f999f7a', '179.162.159.134', '', 1597150975, '__ci_last_regenerate|i:1597150975;userdata|a:8:{s:2:\"id\";s:2:\"12\";s:4:\"nome\";s:14:\"Lucas Cordeiro\";s:7:\"usuario\";s:13:\"lucascordeiro\";s:7:\"tipo_id\";s:1:\"1\";s:10:\"usuario_id\";s:1:\"5\";s:6:\"perfis\";a:1:{i:0;s:1:\"7\";}s:9:\"principal\";s:1:\"0\";s:11:\"clientes_id\";N;}'),
('e4a1e8369e68e663f59bcd37b5ca00d67f59a752', '179.211.229.144', '', 1597890151, '__ci_last_regenerate|i:1597890151;userdata|a:8:{s:2:\"id\";s:1:\"2\";s:4:\"nome\";s:11:\"Construvita\";s:7:\"usuario\";s:8:\"brunoscv\";s:7:\"tipo_id\";s:1:\"4\";s:10:\"usuario_id\";s:1:\"0\";s:6:\"perfis\";a:1:{i:0;s:1:\"2\";}s:9:\"principal\";s:1:\"1\";s:11:\"clientes_id\";N;}'),
('e8ad11f8f93fe1f3f9449984ca368346efb23845', '179.83.90.92', '', 1596734642, '__ci_last_regenerate|i:1596734642;userdata|a:8:{s:2:\"id\";s:2:\"13\";s:4:\"nome\";s:5:\"Paula\";s:7:\"usuario\";s:5:\"paula\";s:7:\"tipo_id\";s:1:\"2\";s:10:\"usuario_id\";s:1:\"1\";s:6:\"perfis\";a:1:{i:0;s:1:\"5\";}s:9:\"principal\";s:1:\"0\";s:11:\"clientes_id\";N;}'),
('e91fe1b5c51abf60b6dc13428d8c5f44f33ecc39', '179.211.229.144', '', 1597893373, '__ci_last_regenerate|i:1597893373;userdata|a:8:{s:2:\"id\";s:1:\"2\";s:4:\"nome\";s:11:\"Construvita\";s:7:\"usuario\";s:8:\"brunoscv\";s:7:\"tipo_id\";s:1:\"4\";s:10:\"usuario_id\";s:1:\"0\";s:6:\"perfis\";a:1:{i:0;s:1:\"2\";}s:9:\"principal\";s:1:\"1\";s:11:\"clientes_id\";N;}msg_success|s:32:\"Registro adicionado com sucesso!\";__ci_vars|a:1:{s:11:\"msg_success\";s:3:\"old\";}'),
('eecb29fa752489abe8873cf1881fd706b8c3cb30', '179.83.93.192', '', 1598290747, '__ci_last_regenerate|i:1598290747;'),
('f4c4a7369e508893bb997b28807b09ec40515364', '179.211.229.144', '', 1597891491, '__ci_last_regenerate|i:1597891491;userdata|a:8:{s:2:\"id\";s:1:\"2\";s:4:\"nome\";s:11:\"Construvita\";s:7:\"usuario\";s:8:\"brunoscv\";s:7:\"tipo_id\";s:1:\"4\";s:10:\"usuario_id\";s:1:\"0\";s:6:\"perfis\";a:1:{i:0;s:1:\"2\";}s:9:\"principal\";s:1:\"1\";s:11:\"clientes_id\";N;}');

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(100) NOT NULL,
  `cpf` varchar(30) NOT NULL,
  `data_nasc` datetime NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `renda_bruta` decimal(10,2) DEFAULT NULL,
  `compr_dependente` varchar(3) DEFAULT NULL,
  `fgts` varchar(3) DEFAULT NULL,
  `valor_fgts` decimal(10,2) DEFAULT NULL,
  `valor_sinal` decimal(10,2) DEFAULT NULL,
  `loteamento_zona` varchar(255) DEFAULT NULL,
  `c0` int(11) DEFAULT NULL,
  `c0_s` int(11) DEFAULT NULL,
  `c1` int(11) DEFAULT NULL,
  `c2` int(11) DEFAULT NULL,
  `c3` int(11) DEFAULT NULL,
  `c4` int(11) DEFAULT NULL,
  `c5` int(11) DEFAULT NULL,
  `com_muro` int(11) DEFAULT NULL,
  `outro_modelo` varchar(255) DEFAULT NULL,
  `valor_lote` decimal(10,2) DEFAULT NULL,
  `valor_casa` decimal(10,2) DEFAULT NULL,
  `extra` varchar(255) DEFAULT NULL,
  `muro` varchar(3) DEFAULT NULL,
  `cerca_eletrica` varchar(3) DEFAULT NULL,
  `portao_automatico` varchar(3) DEFAULT NULL,
  `observacoes` text DEFAULT NULL,
  `contrato` varchar(3) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `correspondente_id` int(11) DEFAULT NULL,
  `status_doc` int(11) DEFAULT 7,
  `status` int(11) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedAt` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `nome_cliente`, `cpf`, `data_nasc`, `telefone`, `email`, `renda_bruta`, `compr_dependente`, `fgts`, `valor_fgts`, `valor_sinal`, `loteamento_zona`, `c0`, `c0_s`, `c1`, `c2`, `c3`, `c4`, `c5`, `com_muro`, `outro_modelo`, `valor_lote`, `valor_casa`, `extra`, `muro`, `cerca_eletrica`, `portao_automatico`, `observacoes`, `contrato`, `user_id`, `correspondente_id`, `status`, `createdAt`, `updatedAt`) VALUES
(1, 'Teste com corretor logado', '111.111.111-11', '1999-10-21 00:00:00', '(88) 8 8888-8888', 'e@e.com', 2312321.00, NULL, NULL, 123.00, 123.00, 'Zona Norte', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 123123.00, 231232.00, '123123', NULL, 'on', NULL, '<p>sem obs</p>', 'on', 4, NULL, 1, '2020-07-29 23:07:31', '2020-07-29 23:33:28'),
(2, 'Eduardo', '111.111.111-11', '1988-10-29 00:00:00', '(99) 8 9898-9898', 'e@e.com', 123123.00, NULL, NULL, 1231233.00, 123123.00, 'Zona Norte', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 123123.00, 312123.00, '123123', 'on', 'on', NULL, '<p>sem obs</p>', 'on', 4, NULL, 1, '2020-07-29 23:15:19', '2020-07-29 23:27:29'),
(3, 'teste', '111.111.111-11', '1998-10-28 00:00:00', '(86) 2 3232-3232', 'e@e.com', 123.00, NULL, NULL, 123.00, 123.00, '13123', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 123.00, 123.00, '123', 'on', NULL, NULL, '<p>sem obs</p>', 'on', 4, NULL, 1, '2020-07-29 23:36:32', '2020-07-29 23:41:50'),
(4, 'Eduardo', '465.454.654-64', '1990-12-06 00:00:00', '(86) 9 8118-7890', 'eduardocostacarvalho@icloud.com', 5454.00, 'on', 'on', 2450.00, 3500.00, 'vipac', NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, 'c0 mudada', 0.00, 0.00, '', NULL, NULL, NULL, '<p>dasoidasoidasodasd</p>', 'on', 4, 2, 1, '2020-08-04 18:02:13', '2020-08-20 01:23:13'),
(5, 'Larissa Rocha', '132.108.257-69', '1994-08-16 00:00:00', '(86) 9 9999-9999', 'larissarocha1608@gmail.com', 2000.00, 'on', NULL, 0.00, 2500.00, 'vipac', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '', 0.00, 0.00, '', NULL, NULL, NULL, '<p>cliente teste</p>', 'on', 5, 2, 1, '2020-08-06 13:59:08', '2020-08-20 01:23:37'),
(6, 'cliente com correspondente', '123.123.123-12', '0000-00-00 00:00:00', '(72) 8 7387-2837', 'japasoares@gmail.com', 12200.00, NULL, NULL, 1200.00, 1200.00, 'Zona Norte', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0.00, 0.00, '', NULL, NULL, NULL, '<p>Sem obs</p>', 'on', 4, 2, 1, '2020-08-19 23:23:38', '2020-09-03 02:02:58'),
(7, 'c22', '123.123.123-12', '1988-10-28 00:00:00', '(12) 3 2312-3323', 'japasoares@gmail.com', 123123.00, NULL, NULL, 13132.00, 123123.00, 'Zona Norte', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '<p>sem obs</p>', '0', 3, 2, 1, '2020-08-19 23:25:50', '2020-09-03 02:13:15');

-- --------------------------------------------------------

--
-- Table structure for table `clientes_arquivos`
--

DROP TABLE IF EXISTS `clientes_arquivos`;
CREATE TABLE IF NOT EXISTS `clientes_arquivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  `nome_arquivo` varchar(255) DEFAULT NULL,
  `tamanho` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `caminho` varchar(255) NOT NULL,
  `data_envio` datetime NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientes_arquivos`
--

INSERT INTO `clientes_arquivos` (`id`, `descricao`, `nome_arquivo`, `tamanho`, `tipo`, `caminho`, `data_envio`, `cliente_id`, `status`, `createdAt`, `updatedAt`) VALUES
(1, '8e2ea0f1a2a7b498a5c955d897078a5d.png', 'Captura_de_Tela_2020-07-29_a?s_18_35_39.png', 33, 'image/png', 'public/uploads/arquivos/20200729/', '2020-07-29 23:07:31', 1, 1, '2020-07-29 23:07:31', '0000-00-00 00:00:00'),
(2, '661eb6c37608d6c1ec684f21e6c8025a.pdf', 'COCO_BAMBU_-_FRONT_RAUL_LOPES_(1).pdf', 141, 'application/pdf', 'public/uploads/arquivos/20200729/', '2020-07-29 23:09:29', 1, 1, '2020-07-29 23:09:29', '0000-00-00 00:00:00'),
(3, '2ad4d8191757bfd75f0fce01fe5827a3.pdf', 'DOCS_TRANSIC?A?O.pdf', 113, 'application/pdf', 'public/uploads/arquivos/20200729/', '2020-07-29 23:09:29', 1, 1, '2020-07-29 23:09:29', '0000-00-00 00:00:00'),
(4, '473a656559b1175993edccbd5d57e97d.pdf', 'PalavrasChave.pdf', 446, 'application/pdf', 'public/uploads/arquivos/20200729/', '2020-07-29 23:09:29', 1, 1, '2020-07-29 23:09:29', '0000-00-00 00:00:00'),
(5, 'f18ad5cc4fbd086f79a4e7af7a557d5b.jpg', 'photo4906865463141705875.jpg', 252, 'image/jpeg', 'public/uploads/arquivos/20200729/', '2020-07-29 23:09:29', 1, 1, '2020-07-29 23:09:29', '0000-00-00 00:00:00'),
(6, 'b1219314b8e8f0627cceb8f395e6ccc4.pdf', 'Proposta_1254_3.pdf', 105, 'application/pdf', 'public/uploads/arquivos/20200729/', '2020-07-29 23:09:29', 1, 1, '2020-07-29 23:09:29', '0000-00-00 00:00:00'),
(7, 'e93aa7b4d8331808d9ff976158835954.pdf', 'site_no_ar_monitoramento.pdf', 230, 'application/pdf', 'public/uploads/arquivos/20200729/', '2020-07-29 23:09:29', 1, 1, '2020-07-29 23:09:29', '0000-00-00 00:00:00'),
(8, '6c30dba36843850e00bcfe03fda3a4a6.pdf', 'CONTRATO_COCO_BAMBU.pdf', 112, 'application/pdf', 'public/uploads/arquivos/20200729/', '2020-07-29 23:15:19', 2, 1, '2020-07-29 23:15:19', '0000-00-00 00:00:00'),
(9, 'd20d8f624da044f889a5e04d2fcee319.pdf', 'DOCS_TRANSIC?A?O.pdf', 113, 'application/pdf', 'public/uploads/arquivos/20200729/', '2020-07-29 23:17:28', 2, 1, '2020-07-29 23:17:28', '0000-00-00 00:00:00'),
(10, '946d9431530ce6534c78d7de51b141a7.pdf', 'nomes_2.pdf', 442, 'application/pdf', 'public/uploads/arquivos/20200729/', '2020-07-29 23:17:28', 2, 1, '2020-07-29 23:17:28', '0000-00-00 00:00:00'),
(11, 'd1cad7103e536d8a171dee97502be4e8.pdf', 'PalavrasChave.pdf', 446, 'application/pdf', 'public/uploads/arquivos/20200729/', '2020-07-29 23:17:28', 2, 1, '2020-07-29 23:17:28', '0000-00-00 00:00:00'),
(12, '1e277f1de52638807fe589e8e2216cee.pdf', 'site_no_ar_monitoramento.pdf', 230, 'application/pdf', 'public/uploads/arquivos/20200729/', '2020-07-29 23:17:28', 2, 1, '2020-07-29 23:17:28', '0000-00-00 00:00:00'),
(13, '58dc2714fba45c7b6f844bf60d1ca906.jpeg', 'Whatssapp.jpeg', 158, 'image/jpeg', 'public/uploads/arquivos/20200729/', '2020-07-29 23:27:29', 2, 1, '2020-07-29 23:27:29', '0000-00-00 00:00:00'),
(14, 'f818a9477ed36c3d6731e9dcf57c76ca.pdf', 'CONTRATO_COCO_BAMBU.pdf', 112, 'application/pdf', 'public/uploads/arquivos/20200729/', '2020-07-29 23:33:28', 1, 1, '2020-07-29 23:33:28', '0000-00-00 00:00:00'),
(15, '8b7cd7a39e3e311bf4a3542204f78cd4.pdf', 'DOCS_TRANSIC?A?O.pdf', 113, 'application/pdf', 'public/uploads/arquivos/20200729/', '2020-07-29 23:33:28', 1, 1, '2020-07-29 23:33:28', '0000-00-00 00:00:00'),
(16, '22278bc25b857fc9c65174abf326bb58.pdf', 'COCO_BAMBU_-_FRONT_RAUL_LOPES_(1).pdf', 141, 'application/pdf', 'public/uploads/arquivos/20200729/', '2020-07-29 23:36:32', 3, 1, '2020-07-29 23:36:32', '0000-00-00 00:00:00'),
(17, 'caa82fb553f2685e62ca88e5a356d8c7.pdf', 'site_no_ar_monitoramento.pdf', 230, 'application/pdf', 'public/uploads/arquivos/20200729/', '2020-07-29 23:41:50', 3, 1, '2020-07-29 23:41:50', '0000-00-00 00:00:00'),
(21, '789a42f98e1b437f6054001789ba4c7f.pdf', '400kb.pdf', 484, 'application/pdf', 'public/uploads/arquivos/20200804/', '2020-08-04 18:06:24', 4, 1, '2020-08-04 18:06:24', '0000-00-00 00:00:00'),
(22, '0294d1388643806f719d7889cae5b4d8.pdf', '1050kb.pdf', 1055, 'application/pdf', 'public/uploads/arquivos/20200804/', '2020-08-04 18:06:24', 4, 1, '2020-08-04 18:06:24', '0000-00-00 00:00:00'),
(23, 'ef1139f53d62648c4732d5f082574c51.pdf', '967kb.pdf', 966, 'application/pdf', 'public/uploads/arquivos/20200804/', '2020-08-04 18:06:24', 4, 1, '2020-08-04 18:06:24', '0000-00-00 00:00:00'),
(24, '786897de9b89812d0882094cf890c4bb.pdf', '1650kb.pdf', 1633, 'application/pdf', 'public/uploads/arquivos/20200804/', '2020-08-04 18:06:24', 4, 1, '2020-08-04 18:06:24', '0000-00-00 00:00:00'),
(25, '9a12394f1df14c973709710cfa06fc7f.pdf', '1650kb.pdf', 1633, 'application/pdf', 'public/uploads/arquivos/20200804/', '2020-08-04 18:08:28', 4, 1, '2020-08-04 18:08:28', '0000-00-00 00:00:00'),
(26, '31d48ec6d9398c737ab4656c6b33635d.pdf', 'nada_consta.pdf', 245, 'application/pdf', 'public/uploads/arquivos/20200806/', '2020-08-06 14:21:30', 5, 1, '2020-08-06 14:21:30', '0000-00-00 00:00:00'),
(27, '736058dbcb1af0da3533a3e5a3060bf0.pdf', 'certidao0000037105EMPI.pdf', 141, 'application/pdf', 'public/uploads/arquivos/20200806/', '2020-08-06 14:27:18', 5, 1, '2020-08-06 14:27:18', '0000-00-00 00:00:00'),
(28, '49a09173be6b4f47fda939f4940bc562.pdf', 'certidao1916942946XXXX.pdf', 136, 'application/pdf', 'public/uploads/arquivos/20200806/', '2020-08-06 14:27:18', 5, 1, '2020-08-06 14:27:18', '0000-00-00 00:00:00'),
(29, 'f7786acec4b2f52a41d7a501c40e3588.jpeg', 'WhatsApp_Image_2020-08-06_at_13_39_33.jpeg', 78, 'image/jpeg', 'public/uploads/arquivos/20200806/', '2020-08-06 14:27:18', 5, 1, '2020-08-06 14:27:18', '0000-00-00 00:00:00'),
(30, 'ac37b755fc5f6444a1438a3535252e59.jpeg', 'WhatsApp_Image_2020-08-06_at_13_39_18.jpeg', 97, 'image/jpeg', 'public/uploads/arquivos/20200806/', '2020-08-06 14:27:18', 5, 1, '2020-08-06 14:27:18', '0000-00-00 00:00:00'),
(31, '180b4883f18502df52b8efad899a0ffa.jpg', 'CREA_Jomil_page-0002.jpg', 373, 'image/jpeg', 'public/uploads/arquivos/20200806/', '2020-08-06 14:27:18', 5, 1, '2020-08-06 14:27:18', '0000-00-00 00:00:00'),
(32, '2deffb8ff6465c7ea8aa8bcaadd4d909.jpg', 'CREA_Jomil_page-0001.jpg', 378, 'image/jpeg', 'public/uploads/arquivos/20200806/', '2020-08-06 14:27:18', 5, 1, '2020-08-06 14:27:18', '0000-00-00 00:00:00'),
(33, '0477998a9e0774b35e17ab29dfe32a44.jpeg', 'WhatsApp_Image_2020-08-06_at_13_37_40.jpeg', 142, 'image/jpeg', 'public/uploads/arquivos/20200806/', '2020-08-06 14:27:18', 5, 1, '2020-08-06 14:27:18', '0000-00-00 00:00:00'),
(34, '58e14a5ba93cda161e23eb10a2a76e81.pdf', 'Boleto_(85).pdf', 14, 'application/pdf', 'public/uploads/arquivos/20200806/', '2020-08-06 14:27:18', 5, 1, '2020-08-06 14:27:18', '0000-00-00 00:00:00'),
(35, 'e1a5cc7760f6df4c3da23d4a08337764.pdf', 'ComprovanteBB_-_2020-08-06-103156_(1).pdf', 2, 'application/pdf', 'public/uploads/arquivos/20200806/', '2020-08-06 14:27:18', 5, 1, '2020-08-06 14:27:18', '0000-00-00 00:00:00'),
(36, 'ff4a28e8cf17dcad74ee9cf086fec858.pdf', 'ComprovanteBB_-_2020-08-06-103156.pdf', 2, 'application/pdf', 'public/uploads/arquivos/20200806/', '2020-08-06 14:27:18', 5, 1, '2020-08-06 14:27:18', '0000-00-00 00:00:00'),
(37, 'bcdbf9e109019a8c92b2c665fafa8075.pdf', 'COCO_BAMBU_-_FRONT_RAUL_LOPES_(1).pdf', 141, 'application/pdf', 'public/uploads/arquivos/20200819/', '2020-08-19 23:23:38', 6, 1, '2020-08-19 23:23:38', '0000-00-00 00:00:00'),
(38, 'e460f2088501b9da665303f8b662ec3d.pdf', 'COCO_BAMBU_-_FRONT_RAUL_LOPES_(2).pdf', 141, 'application/pdf', 'public/uploads/arquivos/20200819/', '2020-08-19 23:23:38', 6, 1, '2020-08-19 23:23:38', '0000-00-00 00:00:00'),
(39, '494a7ed1d80776c9a0ce817250d4aaa0.pdf', 'COCO_BAMBU_-_FRONT_RAUL_LOPES_(1).pdf', 141, 'application/pdf', 'public/uploads/arquivos/20200819/', '2020-08-19 23:25:50', 7, 1, '2020-08-19 23:25:50', '0000-00-00 00:00:00'),
(40, '0ac256a2cc1fc255f0cc5265fccf96df.pdf', 'COCO_BAMBU_-_FRONT_RAUL_LOPES_(2).pdf', 141, 'application/pdf', 'public/uploads/arquivos/20200819/', '2020-08-19 23:25:50', 7, 1, '2020-08-19 23:25:50', '0000-00-00 00:00:00'),
(41, '4dab88a85097a261b5a599251b91673d.pdf', 'Mapa_Manoel_Evangelista.pdf', 5226, 'application/pdf', 'public/uploads/arquivos/20200903/', '2020-09-03 02:02:58', 6, 1, '2020-09-03 02:02:58', '0000-00-00 00:00:00'),
(42, 'bcca7e2a95ad24327b92c77088ab2c6d.pdf', 'img.pdf', 5099, 'application/pdf', 'public/uploads/arquivos/20200903/', '2020-09-03 02:13:15', 7, 1, '2020-09-03 02:13:15', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `clientes_contratos`
--

DROP TABLE IF EXISTS `clientes_contratos`;
CREATE TABLE IF NOT EXISTS `clientes_contratos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(100) NOT NULL,
  `cpf` varchar(30) NOT NULL,
  `data_nasc` datetime NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `renda_bruta` decimal(10,2) DEFAULT NULL,
  `compr_dependente` varchar(3) DEFAULT NULL,
  `fgts` varchar(3) DEFAULT NULL,
  `valor_fgts` decimal(10,2) DEFAULT NULL,
  `valor_sinal` decimal(10,2) DEFAULT NULL,
  `loteamento_zona` varchar(255) DEFAULT NULL,
  `c0` int(11) DEFAULT NULL,
  `c0_s` int(11) DEFAULT NULL,
  `c1` int(11) DEFAULT NULL,
  `c2` int(11) DEFAULT NULL,
  `c3` int(11) DEFAULT NULL,
  `c4` int(11) DEFAULT NULL,
  `c5` int(11) DEFAULT NULL,
  `com_muro` int(11) DEFAULT NULL,
  `outro_modelo` varchar(255) DEFAULT NULL,
  `observacoes` text,
  `contrato` varchar(3) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `clientes_contratos_arquivos`
--

DROP TABLE IF EXISTS `clientes_contratos_arquivos`;
CREATE TABLE IF NOT EXISTS `clientes_contratos_arquivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  `tamanho` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `caminho` varchar(255) NOT NULL,
  `data_envio` datetime NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

DROP TABLE IF EXISTS `clientes_status`;
CREATE TABLE IF NOT EXISTS `clientes_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `createdAt` datetime DEFAULT current_timestamp(),
  `updatedAt` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `clientes_status`
--

INSERT INTO `clientes_status` (`id`, `descricao`, `status`, `createdAt`, `updatedAt`) VALUES
(1, 'Documentação Recebida', 1, '2020-09-03 17:02:52', '2020-09-03 17:02:52'),
(2, 'Documentação Incompleta', 1, '2020-09-03 17:02:52', '2020-09-03 17:02:52'),
(3, 'Avaliação Ativa', 1, '2020-09-03 17:02:52', '2020-09-03 17:02:52'),
(4, 'Restrição', 1, '2020-09-03 17:02:52', '2020-09-03 17:02:52'),
(5, 'Precisando Autorização', 1, '2020-09-03 17:02:52', '2020-09-03 17:02:52'),
(6, 'Avaliado OK', 1, '2020-09-03 17:02:52', '2020-09-03 17:02:52'),
(7, 'Enviado OK', 1, '2020-09-03 17:19:15', '2020-09-03 17:19:15');

--
-- Table structure for table `correspondentes`
--

DROP TABLE IF EXISTS `correspondentes`;
CREATE TABLE IF NOT EXISTS `correspondentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_correspondente` varchar(225) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `observacoes` text,
  `status` int(11) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `correspondentes`
--

INSERT INTO `correspondentes` (`id`, `nome_correspondente`, `telefone`, `email`, `observacoes`, `status`, `createdAt`, `updatedAt`) VALUES
(1, 'Paula', '(86) 9 8881-0733', 'paula@construvitta.com.br', NULL, 1, '2020-08-06 14:16:55', '2020-08-06 14:16:55'),
(2, 'Bruno', '(78) 7 8899-7979', 'brunocarvalho.0@hotmail.com', NULL, 1, '2020-08-19 23:20:04', '2020-08-19 23:20:04');

-- --------------------------------------------------------

--
-- Table structure for table `corretores`
--

DROP TABLE IF EXISTS `corretores`;
CREATE TABLE IF NOT EXISTS `corretores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_corretor` varchar(225) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `data_nasc` date DEFAULT NULL,
  `cpf` varchar(25) DEFAULT NULL,
  `creci` varchar(120) DEFAULT NULL,
  `imobiliarias_id` int(11) DEFAULT NULL,
  `observacoes` text,
  `status` int(11) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `corretores`
--

INSERT INTO `corretores` (`id`, `nome_corretor`, `telefone`, `email`, `data_nasc`, `cpf`, `creci`, `imobiliarias_id`, `observacoes`, `status`, `createdAt`, `updatedAt`) VALUES
(3, 'Corretor 2', '(54) 8 4151-8948', 'brunocarvalho038@gmail.com', '1969-11-25', '156.151.981-81', '518848484', 4, NULL, 1, '2020-06-03 01:33:27', '2020-07-08 20:09:15'),
(4, 'Corretor 1', '(85) 5 4846-8465', 'brunocarvalho038@gmail.com', '2012-04-05', '548.945.645-64', '54894548', 3, NULL, 1, '2020-04-24 17:49:34', '2020-06-03 01:52:48'),
(5, 'Lucas Cordeiro', '(86) 9 9561-2579', 'lucord.8@gmail.com', NULL, '008.423.473-30', '', 5, NULL, 1, '2020-08-06 13:51:00', '2020-08-06 14:48:30');

-- --------------------------------------------------------

--
-- Table structure for table `imobiliarias`
--

DROP TABLE IF EXISTS `imobiliarias`;
CREATE TABLE IF NOT EXISTS `imobiliarias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_imobiliaria` varchar(225) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `cnpj` varchar(30) DEFAULT NULL,
  `creci` varchar(30) DEFAULT NULL,
  `observacoes` text,
  `status` int(11) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `imobiliarias`
--

INSERT INTO `imobiliarias` (`id`, `nome_imobiliaria`, `telefone`, `email`, `cnpj`, `creci`, `observacoes`, `status`, `createdAt`, `updatedAt`) VALUES
(2, 'Imobiliaria 1', '(85) 5 4846-4864', 'email@email.com2', '', '', NULL, 1, '2020-04-24 15:35:51', '2020-07-08 20:10:12'),
(3, 'Imobiliária 2', '(85) 4 8646-4468', 'japasoares@gmail.com', '45.647.484/5464-54', '54894894685', NULL, 1, '2020-04-24 15:36:20', '2020-07-08 20:10:26'),
(4, 'Imobiliaria 3', '(56) 8 6515-4846', 'e@e.com', '51.551.588/7848-54', '8454648454', NULL, 1, '2020-06-03 02:04:56', '2020-07-08 20:10:37'),
(5, 'Bem Viver Imoveis THE', '(86) 9 9561-2579', 'bemviverimoveisthe@gmail.com', '', '', NULL, 1, '2020-08-06 13:49:52', '2020-08-06 13:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menus_id` int(11) DEFAULT NULL,
  `descricao` varchar(45) NOT NULL,
  `url` varchar(45) NOT NULL,
  `icone` varchar(45) NOT NULL,
  `createdAt` varchar(45) NOT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_menus_menus1_idx` (`menus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menus_id`, `descricao`, `url`, `icone`, `createdAt`, `updatedAt`) VALUES
(1, NULL, ' Dashboard', '/dashboard', 'fas fa-tachometer-alt text-primary', '2017-04-19 21:09:19', '2020-06-22 21:59:26'),
(2, NULL, 'Configurações', '#', 'fa fa-cogs text-primary', '2016-07-14 12:19:59', '2020-06-22 21:59:51'),
(3, 2, 'Menus', '/menus', 'fa fa-list', '2016-07-14 12:20:21', NULL),
(4, 2, 'Usuarios', '/usuarios', 'fa fa-user', '2016-07-14 12:20:42', NULL),
(5, 2, 'Perfis de Acesso', '/perfis', 'fas fa-sliders-h', '2016-07-14 12:21:01', '2020-04-09 00:19:19'),
(6, 12, 'Listar Clientes c/ Contrato', '/clientes-contratos', 'fa fa-users', '2020-04-23 13:09:47', NULL),
(7, NULL, 'Cadastros', '', 'fa fa-book text-warning', '', '2020-06-22 22:00:11'),
(8, 7, 'Listar Clientes', '/clientes', 'fa fa-users', '', NULL),
(9, 7, 'Listar Corretores', '/corretores', 'fa fa-users', '', NULL),
(10, 7, 'Listar Correspondentes', '/correspondentes', 'fa fa-users', '', NULL),
(11, 7, 'Listar Imobiliárias', '/imobiliarias', 'fa fa-users', '', NULL),
(12, NULL, 'Clientes c/ Contrato', '', 'fa fa-book text-danger', '', NULL),
(13, NULL, 'Simulações', '/simulacoes', 'ni ni-archive-2 text-green', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `perfis`
--

DROP TABLE IF EXISTS `perfis`;
CREATE TABLE IF NOT EXISTS `perfis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `perfis`
--

INSERT INTO `perfis` (`id`, `descricao`, `createdAt`, `updatedAt`) VALUES
(2, 'Administrador', '2016-07-14 12:21:26', '2020-06-22 22:05:36'),
(3, 'Construtora', '2017-03-07 11:46:59', '2020-06-22 22:29:26'),
(4, 'Desenvolvedor', '2017-03-14 23:41:06', '2017-10-26 15:39:39'),
(5, 'Correspondente', '2020-06-22 22:29:50', '2020-06-23 22:51:20'),
(6, 'Imobiliária', '2020-06-22 22:30:57', '2020-06-23 22:46:51'),
(7, 'Corretores', '2020-06-22 22:31:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `perfis_menus`
--

DROP TABLE IF EXISTS `perfis_menus`;
CREATE TABLE IF NOT EXISTS `perfis_menus` (
  `perfis_id` int(11) NOT NULL,
  `menus_id` int(11) NOT NULL,
  PRIMARY KEY (`perfis_id`,`menus_id`),
  KEY `fk_perfis_has_menus_menus1_idx` (`menus_id`),
  KEY `fk_perfis_has_menus_perfis1_idx` (`perfis_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `perfis_menus`
--

INSERT INTO `perfis_menus` (`perfis_id`, `menus_id`) VALUES
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(2, 2),
(3, 2),
(4, 2),
(2, 3),
(4, 3),
(2, 4),
(3, 4),
(4, 4),
(2, 5),
(3, 5),
(4, 5),
(2, 6),
(3, 6),
(5, 6),
(2, 7),
(3, 7),
(5, 7),
(6, 7),
(7, 7),
(2, 8),
(3, 8),
(5, 8),
(6, 8),
(7, 8),
(2, 9),
(3, 9),
(6, 9),
(2, 10),
(3, 10),
(2, 11),
(3, 11),
(2, 12),
(3, 12),
(5, 12),
(2, 13),
(3, 13),
(5, 13);

-- --------------------------------------------------------

--
-- Table structure for table `simulacoes`
--

DROP TABLE IF EXISTS `simulacoes`;
CREATE TABLE IF NOT EXISTS `simulacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clientes_id` int(11) NOT NULL,
  `corretores_id` int(11) DEFAULT NULL,
  `data_nasc` datetime NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `imovel` varchar(3) DEFAULT NULL,
  `compr_dependente` varchar(3) DEFAULT NULL,
  `renda_bruta` decimal(10,2) DEFAULT NULL,
  `fgts` varchar(3) DEFAULT NULL,
  `valor_fgts` decimal(10,2) DEFAULT NULL,
  `loteamento_zona` varchar(255) DEFAULT NULL,
  `c0` int(11) DEFAULT NULL,
  `c0_s` int(11) DEFAULT NULL,
  `c1` int(11) DEFAULT NULL,
  `c2` int(11) DEFAULT NULL,
  `c3` int(11) DEFAULT NULL,
  `c4` int(11) DEFAULT NULL,
  `c5` int(11) DEFAULT NULL,
  `com_muro` int(11) DEFAULT NULL,
  `outro_modelo` varchar(255) DEFAULT NULL,
  `observacoes` text,
  `status` int(11) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `simulacoes`
--

INSERT INTO `simulacoes` (`id`, `clientes_id`, `corretores_id`, `data_nasc`, `telefone`, `email`, `imovel`, `compr_dependente`, `renda_bruta`, `fgts`, `valor_fgts`, `loteamento_zona`, `c0`, `c0_s`, `c1`, `c2`, `c3`, `c4`, `c5`, `com_muro`, `outro_modelo`, `observacoes`, `status`, `createdAt`, `updatedAt`) VALUES
(1, 5, 2, '1969-11-24 00:00:00', '(54) 8 5648-6465', 'e@2.com', 'on', 'on', 458.00, 'on', 5487.00, 'Zona ZUl', 1, NULL, 1, NULL, 1, NULL, NULL, NULL, 'Sem curo', '', 1, '2020-06-03 18:30:54', '2020-06-03 17:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `simulacoes_old`
--

DROP TABLE IF EXISTS `simulacoes_old`;
CREATE TABLE IF NOT EXISTS `simulacoes_old` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `corretor_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `data_nascimento` date NOT NULL,
  `tem_imovel` int(11) NOT NULL,
  `comprador_dependente` int(11) NOT NULL,
  `valor_renda_bruta` decimal(10,2) NOT NULL,
  `fgts_tres_anos` int(11) NOT NULL,
  `valor_fgts` decimal(10,2) NOT NULL,
  `zona_loteamento` text NOT NULL,
  `modelo_casa` int(11) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `observacoes` text,
  `status` int(11) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `tipo_id` int(11) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `senha` varchar(250) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `clientes_id` int(11) DEFAULT NULL,
  `principal` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_usuarios_clientes1_idx` (`clientes_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `nome`, `usuario_id`, `tipo_id`, `email`, `telefone`, `senha`, `createdAt`, `updatedAt`, `clientes_id`, `principal`) VALUES
(2, 'brunoscv', 'Construvita', 0, 4, 'japasoares@gmail.com', NULL, '879ff6b69ffde9cc8a5ca0029115f3684d724a946418ec74e4752eeea01f5297870517fbd3fa6d6adc54e31ae73c8b597f6ede3562894ca91fc65af4c629abb9EZGM1iw0wqLeTBhIzYFFQqYU/sNIBQ0AKh9EAYtG7yI=', '2017-01-09 18:29:54', '2020-07-09 20:03:05', NULL, 1),
(3, 'eduardocosta', 'Construvita', 0, 4, 'email@email.com', NULL, '10a514b39c2653fcce546723315af19fd548c384d938800fef1939b9e3099c4ece754c338a34b0e9f39e6c094733e06e056769db3b09d4c69636edf7800c90afNrdIk1dyvdn7obxVFr74kd2jkr/FTiNbewoQyBQrPNQ=', '2020-04-24 00:00:00', '2020-07-09 20:01:22', 0, 1),
(4, 'c1', 'Corretor 2', 3, 1, 'c@c.com', NULL, '084be64f4e28bc7a1fa72595ab45f285dab5b9fe0ce92fe5f281eda641f945f270ffb8484c43dd311a57575f62bacf7f423bb766c652b22bdb69c469fc048c0cukJFlMATLYy+Co3W/NT8JUCpJPGUSAPC4scQQu/GaqI=', '2020-06-23 21:14:48', '2020-07-08 20:11:00', NULL, 0),
(8, 'im1', 'Imobiliaria 1', 2, 3, 'i@i.com', NULL, 'dabbcd691939d3fbdd31da2d8b564317a35d8dd2f3cdfe509afca969ea55243a2b81ec4926aa73c4feb4c17ce24b414253a94eaffd6bfc1908b88cf1001708fbWUgrIXkjQ2dzLJTr90dbi8kuLJhAzmg1fj3CNfrK31s=', '2020-06-23 21:45:54', '2020-07-08 20:11:21', NULL, 0),
(9, 'cc12', 'Corretor 1', 4, 1, 'c@cc.com', NULL, 'b93ae6bc418a9a539bb2c9edc82d2656dc3efc487eddc07c346ad71a4e20930e66fb0c91ad687ed15542f19c6130395f8f35eec8274b05c2a5857c4e6d9f5a4dkGgiY2Po4xIZSJI6dBZqxqmOdaBB0f1sXsP2lbsKPDo=', '2020-06-23 21:46:37', '2020-06-23 22:00:16', NULL, 0),
(10, 'im2', 'Imobiliária 2', 3, 3, 'im@im.com', NULL, 'e4dfaaab48e8855bd233ae2bd755d77689043e53f725ed48676bc15a7505251d6e8ab0831bd2e9af5565009302c269dac2311b744a0db28447e436960fd3b704HFjsu2Dl+o7Qw91V1KgormnmdHUI8DqSBwrt5s9yfCE=', '2020-06-23 22:40:16', '2020-07-08 20:11:37', NULL, 0),
(11, 'cor', 'Correspondente1', 1, 2, 'cor@c.com', NULL, 'ca67a1a5834757ddf0b27c33f8dae2c1c0c3a6f6894f620215d2e88151a8c17f398da06c7f12045ac9432a0ae33f7ffc397e067b7207557c406d3a49ef4c4ef2apRlzhNSlmcDqG+GbX/XPwmo5W8hqA32kzVW3aSHxig=', '2020-06-23 22:49:55', NULL, NULL, 1),
(12, 'lucascordeiro', 'Lucas Cordeiro', 5, 1, 'lucord.8@gmail.com', NULL, 'dbe5f92e2381af76f1a4b3e7146e994548566cf65b06946eae3a28bdf4671b4e1c46a77ffe89b8fd3ab6d4bf4019c0ecfcbe2d3af36cc3d38c756b92d5f1cb27YQWxMbIrrufLgq99D389lmEJpsKOTE/0rF0Adr46hJ4=', '2020-08-06 13:52:20', NULL, NULL, 0),
(13, 'paula', 'Paula', 1, 2, 'paula@construvitta.com.br', NULL, '677d2605c68b5bf0315549a0f249a17190a0d0b06b161a85b501a938f8ad2b5966bbe68b7e2466b8c4979e1b933de9514d80b135df79429276d38a895849ec73JcNctfMZ6bHG1Dra64TiKf+44hm4WGKBxjZrpyxcoLPSi0ZrxJkcqibdy1Dy6a+M', '2020-08-06 14:17:41', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios_perfis`
--

DROP TABLE IF EXISTS `usuarios_perfis`;
CREATE TABLE IF NOT EXISTS `usuarios_perfis` (
  `usuarios_id` int(11) NOT NULL,
  `perfis_id` int(11) NOT NULL,
  PRIMARY KEY (`usuarios_id`,`perfis_id`),
  KEY `fk_usuarios_has_perfis_perfis1_idx` (`perfis_id`),
  KEY `fk_usuarios_has_perfis_usuarios1_idx` (`usuarios_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios_perfis`
--

INSERT INTO `usuarios_perfis` (`usuarios_id`, `perfis_id`) VALUES
(2, 2),
(3, 2),
(11, 5),
(13, 5),
(6, 6),
(8, 6),
(10, 6),
(4, 7),
(5, 7),
(7, 7),
(9, 7),
(12, 7);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios_tipos`
--

DROP TABLE IF EXISTS `usuarios_tipos`;
CREATE TABLE IF NOT EXISTS `usuarios_tipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(130) DEFAULT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios_tipos`
--

INSERT INTO `usuarios_tipos` (`id`, `descricao`, `createdAt`, `updatedAt`) VALUES
(1, 'Corretor', '2020-06-23 19:18:59', '2020-06-23 19:18:59'),
(2, 'Correspondente', '2020-06-23 19:18:59', '2020-06-23 19:18:59'),
(3, 'Imobiliária', '2020-06-23 19:18:59', '2020-06-23 19:18:59'),
(4, 'Construtora', '2020-06-23 19:18:59', '2020-06-23 19:18:59');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
