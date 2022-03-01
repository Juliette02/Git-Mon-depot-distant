DROP DATABASE if EXISTS Clicom;

CREATE DATABASE Clicom;

USE Clicom;

CREATE TABLE clients (
cli_num INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
cli_nom VARCHAR(50),
cli_adresse VARCHAR(50),
cli_tel VARCHAR(30)
);

CREATE TABLE commande (
com_num INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
cli_num INT,
com_date DATETIME,
com_obs VARCHAR(50),
FOREIGN KEY (cli_num) REFERENCES clients (cli_num)
);

CREATE TABLE produits (
pro_num INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
pro_libelle VARCHAR(50),
pro_description VARCHAR (50)
);

CREATE TABLE clicom (
com_num INT,
pro_num INT,
est_qte INT,
FOREIGN KEY (com_num) REFERENCES commande (com_num),
FOREIGN KEY (pro_num) REFERENCES produits (pro_num)
);

CREATE UNIQUE INDEX cli_nom
ON clients (cli_nom);