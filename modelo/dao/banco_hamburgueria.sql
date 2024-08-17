-- ----------------------------------------------------------------------------
-- MySQL Workbench Migration
-- Migrated Schemata: hamburgueria
-- Source Schemata: hamburgueria
-- Created: Tue Aug  6 16:49:47 2024
-- Workbench Version: 8.0.27
-- ----------------------------------------------------------------------------

SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------------------------------------------------------
-- Schema hamburgueria
-- ----------------------------------------------------------------------------
DROP SCHEMA IF EXISTS `hamburgueria` ;
CREATE SCHEMA IF NOT EXISTS `hamburgueria` ;

-- ----------------------------------------------------------------------------
-- Table hamburgueria.produto
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `hamburgueria`.`produto` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NULL DEFAULT NULL,
  `descricao` VARCHAR(255) NULL DEFAULT NULL,
  `precoFornecedor` FLOAT NULL DEFAULT NULL,
  `quantidadeEstoque` INT NULL DEFAULT NULL,
  `precoVenda` FLOAT NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;

-- ----------------------------------------------------------------------------
-- Table hamburgueria.usuario
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `hamburgueria`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `foto` VARCHAR(45) NULL DEFAULT NULL,
  `email` VARCHAR(255) NOT NULL,
  `login` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;
SET FOREIGN_KEY_CHECKS = 1;
