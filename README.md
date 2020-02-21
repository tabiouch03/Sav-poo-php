## REQUETES DE BASE DU SQL

##### -----------------------------------
##### CREATION BASE DE DONNEES
##### -----------------------------------
##### CREATE DATABASE exoCorrection CHARACTER SET utf8 COLLATE utf8_general_ci;



##### -----------------------------------
##### CREATION TABLE
##### -----------------------------------
##### CREATE TABLE client (
#####     clientId INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
#####     nomClient VARCHAR(255) NOT NULL,
#####     numClient INT NOT NULL,
#####     adresse VARCHAR(255) NOT NULL,
#####     numTel INT NOT NULL,
#####     mail  VARCHAR(255)
#####     )ENGINE = innoDB;


##### CREATE TABLE commande (
#####     commandeId INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
#####     nomCommande VARCHAR(255) NOT NULL,
#####     dateCommande DATE NOT NULL,
#####     isDelivred TINYINT(1),
#####     fk_clientId INT, 
#####     FOREIGN KEY (`fk_clientId`) REFERENCES `client`(`clientId`)
#####     )ENGINE = innoDB;


##### CREATE TABLE produit (
#####     produitId INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
#####     nomProduit VARCHAR(255) NOT NULL,
#####     descriptProduit VARCHAR(255), 
#####     qttProduit INT NOT NULL,
#####     isAvailable TINYINT(1),
#####     prixProduit FLOAT NULL
#####     )ENGINE = innoDB;


##### ------------------------------------
##### AJOUTER DES LIGNES DANS UNE TABLE
##### ------------------------------------
##### INSERT INTO `client`(`nomClient`, `numClient`, `adresse`, `numTel`, `mail`) 
##### VALUES ('oxie',123,'12av',06060606,'sldjf@mlkdjf')

##### INSERT INTO `commande`(`nomCommande`, `dateCommande`, `isDelivred`) 
##### VALUES ('commande1',20061223,1)

##### INSERT INTO `produit`(`nomProduit`, `descriptProduit`, `qttProduit`, `isAvailable`, `prixProduit`) 
##### VALUES ('croquette','lmsqdjfsdjflsdjfd',12,1,12.2)




##### -------------------------------------
##### MODIFIER UNE LIGNE
##### -------------------------------------
``php UPDATE `client` SET `nomClient`='chipie' WHERE `idClient` = 1

UPDATE `commande` SET `nomCommande`='commande1' WHERE `idCommande` = 1

UPDATE `produit` SET `nomProduit`='croquette' WHERE `idProduit` = 1
``


##### -------------------------------------
##### SHOW 
##### -------------------------------------
##### SELECT * FROM `client`
##### SELECT nomClient FROM `client`

##### SELECT * FROM `commande`
##### SELECT nomCommande FROM `commande`

##### SELECT * FROM `produit`
##### SELECT qttProduit FROM `produit`



##### -------------------------------------
##### DELETE
##### -------------------------------------
##### DELETE FROM `client` WHERE clientId = 1
##### DELETE FROM `commande` WHERE nomCommande = 'commande1'
##### DELETE FROM `produit` WHERE nomProduit = 'croquette'



##### ------------------------------------------------
##### CREATION TABLE COMMANDEPRODUIT
##### ------------------------------------------------
##### CREATE TABLE commandeProduit (
#####     commandeProduitId INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
#####     fk_commandeId INT,
#####     FOREIGN KEY (`fk_commandeId`) REFERENCES `commande`(`commandeId`),
#####     fk_produitId INT,
#####     FOREIGN KEY (`fk_produitId`) REFERENCES `produit`(`produitId`)
#####     )ENGINE = innoDB;



##### ---------------------------
##### JOINTURES
##### ---------------------------
##### INSERT INTO commande (`nomCommande`,`dateCommande`,`isDelivred`,`fk_clientId`) 
##### SELECT 'nomCommande' , 20200221, 1, 2 
##### FROM commande 
##### RIGHT JOIN client ON `fk_clientId` = clientId

##### INSERT INTO commandeproduit (`fk_commandeId`,`fk_produitId`) 
##### SELECT 1,1 
##### FROM commandeproduit 
##### INNER JOIN produit 
##### ON produit.produitId = commandeproduit.fk_produitId 
##### INNER JOIN commande 
##### ON commande.commandeId = commandeproduit.fk_commandeId

