DROP DATABASE IF EXISTS eval;

CREATE DATABASE eval;

USE eval;

CREATE TABLE `Client` (
    `cli_num`         INT NOT NULL,
    `cli_nom`         VARCHAR(50) NOT NULL,
    `cli_address`     VARCHAR(50) NOT NULL,
    `cli_tel`         VARCHAR(30),
    PRIMARY KEY (cli_num)
);

ALTER TABLE `Client` ADD INDEX `index_cli_nom` (`cli_nom`);

CREATE TABLE `Commande` (
    `com_num`         INT NOT NULL,
    `cli_num`         INT NOT NULL,
    `com_date`        DATETIME NOT NULL,
    `com_obs`         VARCHAR(50),
    PRIMARY KEY (com_num),
    KEY `Clients` (`cli_num`),
    CONSTRAINT `Commande_ibfk_1` FOREIGN KEY (`cli_num`) REFERENCES `Clients` (`cli_num`)
);

CREATE TABLE `Produit` (
    `pro_num`         INT NOT NULL,
    `pro_libelle`     VARCHAR(50) NOT NULL,
    `pro_description` VARCHAR(50) NOT NULL,
    PRIMARY KEY (pro_num)
);

CREATE TABLE `est_compose` (
    `com_num`           INT NOT NULL,
    `pro_num`           INT NOT NULL,
    `est_qte`           INT NOT NULL,
    PRIMARY KEY (com_num, pro_num)
);
