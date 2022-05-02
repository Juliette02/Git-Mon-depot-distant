        ---util1 : ---

CREATE USER 'util1'@'localhost' IDENTIFIED BY 'util1';

GRANT ALL PRIVILEGES on *.* to 'util1'@'localhost' WITH GRANT OPTION;

FLUSH PRIVILEGES;

        ---util2 : ---

CREATE USER 'util2'@'localhost' IDENTIFIED BY 'util2';

GRANT SELECT ON *.* to 'util2'@'localhost';

FLUSH PRIVILEGES;

        ---util3 : ---

CREATE USER 'util3'@'localhost' IDENTIFIED BY 'util3';

GRANT SELECT ON papyrus.fournis TO 'util3'@'localhost';

FLUSH PRIVILEGES;