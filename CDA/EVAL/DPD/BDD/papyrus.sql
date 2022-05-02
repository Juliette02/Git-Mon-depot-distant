DROP DATABASE IF EXISTS papyrus;

CREATE DATABASE papyrus;

USE papyrus;

CREATE TABLE `fournis` (
    numfou INT NOT NULL,
    nomfou VARCHAR(25) NOT NULL,
    ruefou VARCHAR(35) NOT NULL,
    posfou CHAR(5) NOT NULL,
    vilfou VARCHAR(30) NOT NULL,
    confou VARCHAR(15) NOT NULL,
    satisf TINYINT(3) DEFAULT NULL,
    CHECK (`satisf` >=0 AND `satisf` <=10),
    PRIMARY KEY (numfou)
);

CREATE TABLE `produit` (
    codart CHAR(4) NOT NULL,
    libart VARCHAR(30) NOT NULL,
    unimes CHAR(5) NOT NULL,
    stkale INT(10) NOT NULL,
    stkphy INT(10) NOT NULL,
    qteann INT(10) NOT NULL ,
    PRIMARY KEY (codart)
);

CREATE TABLE `entcom` (
    numcom INT(10) NOT NULL AUTO_INCREMENT,
    obscom VARCHAR(50),
    datcom DATE NOT NULL,
    numfou INT NOT NULL,
    PRIMARY KEY (numcom),
    KEY `numfou` (`numfou`),
    CONSTRAINT `entcom_ibfk_1` FOREIGN KEY(`numfou`) REFERENCES `fournis` (`numfou`)
);

CREATE TABLE `ligcom` (
    numcom INT(10) NOT NULL,
    numlig TINYINT(3) NOT NULL,
    codart CHAR(4) NOT NULL,
    qtecde INT(10) NOT NULL,
    priuni VARCHAR(50) NOT NULL,
    qteliv INT(10),
    derliv DATE(6) NOT NULL,
    PRIMARY KEY (numlig, numcom),
    KEY `codart` (`codart`),
    CONSTRAINT `ligcom_ibfk_1` FOREIGN KEY (`numcom`) REFERENCES `entcom` (`numcom`),
    CONSTRAINT `ligcom_ibfk_2` FOREIGN KEY (`codart`) REFERENCES `produit` (`codart`)
);

CREATE TABLE `vente` (
    numfou INT(11) NOT NULL,
    codart CHAR(4) NOT NULL,
    delliv SMALLINT(5) NOT NULL,
    qte1   INT(10) NOT NULL,
    prix1  VARCHAR(50) NOT NULL,
    qte2   INT(10),
    prix2  VARCHAR(50),
    qte3   INT(10),
    prix3  VARCHAR(50),
    PRIMARY KEY (numfou, codart),
    KEY `codart` (`codart`),
    KEY `numfou` (`numfou`),
    CONSTRAINT `vente_ibfk_1` FOREIGN KEY (`numfou`) REFERENCES `fournis` (`numfou`),
    CONSTRAINT `vente_ibfk_2` FOREIGN KEY (`codart`) REFERENCES `produit` (`codart`)
);