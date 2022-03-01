/***************************************************Evaluation SQL**************************************************************/

/*          1. Liste des fournisseurs français.                 */

    SELECT CompanyName AS 'Société', ContactName AS 'contact', ContactTitle AS 'Fonction', Phone AS 'Téléphone'
    FROM customers
    WHERE Country = 'France';

/*          2. Liste des produits vendus par fournisseur "Exotic Liquids".              */

    SELECT DISTINCT ProductName AS 'Produit', UnitPrice AS 'Prix'
    FROM products
    JOIN suppliers ON products.SupplierID = products.SupplierID
    WHERE products.SupplierID = 1;

/*          3. Nombre de produits mis à disposition par les fournisseurs français (ordre décrissant).               */

    SELECT CompanyName AS 'Fournisseur', count(ProductName) AS 'Nbre Produits'
    FROM products 
    JOIN suppliers ON products.SupplierID = suppliers.SupplierID
    WHERE suppliers.Country = 'France'
    GROUP BY CompanyName
    ORDER BY count(ProductName) DESC, CompanyName ASC;

/*          4. Liste des clients français ayant passé plus de 10 commandes.             */

    SELECT CompanyName AS 'Client', count(OrderID) AS 'Nbrs commandes'
    FROM customers
    JOIN orders ON customers.CustomerID = orders.CustomerID
    WHERE customers.Country = 'France' 
    GROUP BY CompanyName
    HAVING COUNT(OrderID) > 10;

/*          5. Liste des clients dont le montant cumulé de toutes les commandes passées est supérieur à 10000€.                 */

    SELECT ShipName AS 'Client', SUM(UnitPrice * Quantity) AS 'CA', ShipCountry AS 'Pays'
    from orders
    JOIN ordetails ON orders.OrderID = ordetails.OrderID
    GROUP BY ShipName
    HAVING SUM(UnitPrice * Quantity) > 10000
    ORDER BY SUM(UnitPrice * Quantity) DESC;

/***                                     Si je veux avoir exactement la même chose que dans l'exemple de l'exercice : 

                SELECT ShipName AS 'Client', SUM(UnitPrice * Quantity) AS 'CA', ShipCountry AS 'Pays'
                from orders
                JOIN ordetails ON orders.OrderID = ordetails.OrderID
                GROUP BY ShipName
                HAVING SUM(UnitPrice * Quantity) > 30000
                ORDER BY SUM(UnitPrice * Quantity) DESC;
            
                                        il faudrait que je note "SUM(UnitPrice*Quantity) > 30000" pour avoir que les 10 premiers résultats.                                          ****/

/*          6. Liste des pays dans lesquels des produits fournis par "Exotic Liquids" ont été livrés.               */

    SELECT distinct ShipCountry
    FROM orders
    JOIN customers ON orders.CustomerID = customers.CustomerID
    JOIN ordetails ON orders.OrderID = ordetails.OrderID
    JOIN products ON ordetails.ProductID = products.ProductID
    JOIN suppliers ON products.SupplierID = suppliers.SupplierID 
    WHERE suppliers.SupplierID = 1
    GROUP BY customers.Country;

/*          7. Chiffre d'affaires global sur les ventes de 1997.                */

    SELECT SUM(UnitPrice*Quantity) AS 'Montant Ventes 97'
    FROM ordetails
    JOIN orders ON ordetails.OrderID = orders.OrderID
    WHERE YEAR(OrderDate) = 1997;

/*          8. Chiffre d'affaires détaillé par mois, sur les ventes de 1997.                */

    SELECT MONTH(OrderDate) AS 'Mois 97', SUM(UnitPrice*Quantity) AS 'Montant Vente'
    FROM orders
    JOIN ordetails ON ordetails.OrderID = orders.OrderID
    WHERE YEAR(OrderDate) = 1997
    GROUP BY MONTH(OrderDate);

/*          9. A quand remonte la dernière commande du client nommé "Du monde entier" ?             */

    SELECT Max(OrderDate) 
    FROM orders
    JOIN customers ON orders.CustomerID = customers.CustomerID
    WHERE CompanyName = 'Du monde entier';

/*          10. Quel est le délai moyen de livraison en jours ?                 */

    SELECT ROUND(AVG(DATEDIFF( ShippedDate, OrderDate))) AS 'Délai moyen de livraison en jours'
    FROM orders;

/***************************************************************************************************************************/