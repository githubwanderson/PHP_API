-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.11-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para db_api_mplace
CREATE DATABASE IF NOT EXISTS `db_api_mplace` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `db_api_mplace`;

-- Copiando estrutura para tabela db_api_mplace.tokens
CREATE TABLE IF NOT EXISTS `tokens` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TOKEN` varchar(100) NOT NULL,
  `ATIVO` int(11) NOT NULL DEFAULT 1 COMMENT '0=INATIVO 1=ATIVO',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `TOKEN` (`TOKEN`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela db_api_mplace.tokens: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tokens` DISABLE KEYS */;
INSERT INTO `tokens` (`ID`, `TOKEN`, `ATIVO`) VALUES
	(1, 'xpto-4125-f412-4444', 1),
	(2, 'tk02', 1);
/*!40000 ALTER TABLE `tokens` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
