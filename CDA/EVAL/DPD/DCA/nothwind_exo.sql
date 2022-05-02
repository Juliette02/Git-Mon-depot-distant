/************************************Requêtes d'intérrogation sur la base NorthWind****************************************/

-- 1 - Liste des contacts français :

SELECT CompanyNAme, ContactName, ContactTitle, Phone
FROM customers
WHERE Country = 'France';

-- 2 - Produits vendus par le fournisseur « Exotic Liquids » :

SELECT ProductName AS 'Produit', UnitPrice AS 'Prix'
FROM products
JOIN suppliers ON products.SupplierID = suppliers.SupplierID
WHERE suppliers.CompanyName = 'Exotic Liquids';

-- 3 - Nombre de produits vendus par les fournisseurs Français dans l’ordre décroissant :

SELECT CompanyName AS 'Fournisseur', COUNT(DISTINCT products.ProductID) AS 'Nbre produits'
FROM suppliers
JOIN products ON suppliers.SupplierID = products.SupplierID
JOIN orderdetails ON products.ProductID = orderdetails.ProductID
WHERE suppliers.Country = 'France'
GROUP BY COmpanyName
ORDER BY COUNT(DISTINCT products.ProductID) DESC;
/* 
COUNT(DISTINCT products.ProductID) permet de compter le nombre d'enregistrement dans la table ProductID
ORDER BY COUNT(DISTINCT products.ProductID) DESC permet de les rangers dans l'ordre décroissant 
*/

-- 4 - Liste des clients Français ayant plus de 10 commandes :

SELECT DISTINCT CompanyName AS 'Client', count(OrderID) AS 'Nbre Commande'
FROM customers
JOIN orders ON customers.CustomerID = orders.CustomerID
WHERE Country = 'France'
GROUP BY CompanyName
HAVING COUNT(OrderID) > 10;

/*
COUNT(OrderID) permet de compter le nombre de commande 
*/

-- 5 - Liste des clients ayant un chiffre d’affaires > 30.000 :

SELECT CompanyName AS 'Client', SUM(UnitPrice * Quantity) AS 'CA', Country AS 'Pays'
FROM customers
JOIN orders ON customers.CustomerID = orders.CustomerID
JOIN orderdetails ON orders.OrderID = orderdetails.OrderID
GROUP BY CompanyName
HAVING SUM(UnitPrice * Quantity) > 30000
ORDER BY SUM(UnitPrice * Quantity) DESC;

/*
SUM(UnitPrice * Quantity) permet de faire a somme des calcule 
GROUP BY CompanyName permet de tout regrouper par CompanyName
HAVING SUM(UnitPrice * Quantity) > 30000 permet de selectionner toutes les sommes supérieure à 30000
ORDER BY SUM(UnitPrice * Quantity) DESC permet de ranger le CA dans l'ordre décroissant
*/

-- 6 – Liste des pays dont les clients ont passé commande de produits fournis par « Exotic Liquids » :

SELECT DISTINCT customers.Country
FROM customers 
JOIN orders ON customers.CustomerID = orders.CustomerID
JOIN orderdetails ON orders.OrderID = orderdetails.OrderID
JOIN products ON orderdetails.ProductID = products.ProductID
JOIN suppliers ON products.SupplierID = suppliers.SupplierID
WHERE suppliers.CompanyName = 'Exotic Liquids'
ORDER BY customers.Country ASC;

/*
ORDER BY customers.Country ASC permet de ranger les pays dans l'ordre alphabétique 
*/

-- 7 – Montant des ventes de 1997 :

SELECT DISTINCT SUM(UnitPrice * Quantity) AS 'Montant des ventes de 1997'
FROM orderdetails
JOIN orders ON orderdetails.OrderID = orders.OrderID
WHERE YEAR(OrderDate) = 1997;

/*
WHERE YEAR(OrderDate) = 1997 permet de selectionner toutes les dates de l'année 1997
*/

-- 8 – Montant des ventes de 1997 mois par mois :

SELECT DISTINCT MONTH(orders.OrderDate) AS 'Mois 97', SUM(UnitPrice * Quantity) AS 'Montant des ventes de 1997'
FROM orderdetails
JOIN orders ON orderdetails.OrderID = orders.OrderID
WHERE YEAR(OrderDate) = 1997
GROUP BY MONTH(OrderDate);

/*
MONTH(orders.OrderDate) permet de selectionner que les mois des dates
GROUP BY MONTH(OrderDate) permet d'avoir le montant des ventes pour chaque mois
*/

-- 9 – Depuis quelle date le client « Du monde entier » n’a plus commandé ?

SELECT MAX(OrderDate) AS 'Date de dernière commande'
FROM orders
JOIN customers ON orders.CustomerID = customers.CustomerID
WHERE customers.CompanyName = 'Du monde entier';

/*
MAX(OrderDate) permet d'avoir la date la plus grand (la date maximal)
*/

-- 10 – Quel est le délai moyen de livraison en jours ?

SELECT ROUND(AVG(DATEDIFF(ShippedDate, OrderDate))) AS 'Délai moyen de livraison en jours'
FROM orders;

/*
ROUND(AVG(DATEDIFF(ShippedDate, OrderDate)))
ROUND() permet d'arrondir un résultat numérique
AVG() permet de calculer la moyenne
DATEDIFF() permet de calculer l'intervalle entre deux dates scpécifique
*/

/*********************************************************************************Procédures stockées**********************************************************************************************************************/

-- PROCEDURE -> Depuis quelle date le client « Du monde entier » n’a plus commandé ?

DELIMITER |

CREATE PROCEDURE DerDaCliCom(IN clients VARCHAR(40))
	BEGIN 
		SELECT MAX(OrderDate) AS 'Date de dernière commande'
		FROM orders
		JOIN customers ON orders.CustomerID = customers.CustomerID
		WHERE customers.CompanyName = clients;
	END |

DELIMITER ;

CALL DerDaCliCom('...');

/*
CREATE PROCEDURE créer la procédure DerDaCliCom avec 1 paramètre,
BEGIN permet de bébute les instruction,
END fin des instruction,
CALL permet d'appelé la procédure !

Donne depuis quelle date n'importe quelle client n'a plus commandé !
*/

-- PROCEDURE -> Quel est le délai moyen de livraison en jours ?

DELIMITER |

CREATE OR REPLACE PROCEDURE DelaiLivJours()
	BEGIN 
		SELECT ROUND(AVG(DATEDIFF(ShippedDate, OrderDate))) AS 'Délai moyen de livraison en jours'
		FROM orders;
	END |

DELIMITER ;

CALL DelaiLivJours();

/************************************************************************************3) Mise en place d'une règle de gestion*************************************************************************************************/

DELIMITER $$

	CREATE OR REPLACE TRIGGER clipays_est_foupays AFTER INSERT ON orderdetails
		FOR EACH ROW
				BEGIN	
					DECLARE pays VARCHAR(15);
					SET pays = (SELECT suppliers.SupplierID
									FROM orders
									JOIN customers ON orders.CustomerID = customers.CustomerID
									JOIN orderdetails ON orders.OrderID = orderdetails.OrderID
									JOIN products ON orderdetails.ProductID = products.ProductID
									JOIN suppliers ON products.SupplierID = suppliers.SupplierID
									WHERE suppliers.Country = customers.Country
									AND orderdetails.ProductID = NEW.ProductID AND orderdetails.OrderID = NEW.OrderID);
						if pays IS NULL then
				 			SIGNAL SQLSTATE '40000' SET MESSAGE_TEXT = 'Insertion impossible, Le client et le fournisseur ne réside pas dans le mêmme pays !';
						END if ;
				END $$
				
DELIMITER ;

/*
DECLARE on déclare la variable 'pays',
SET pays = on lui affecte la valeur d'un SELECT qui cherche les pays qui correspondent,
if pays IS NULL then on vérifie que les pays corresponde si ils ne correspondent pas alors la valeur est null, on affiche le message d'erreur ! 
*/