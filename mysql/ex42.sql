DROP DATABASE IF EXISTS exercice42;
CREATE DATABASE exercice42 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
       USE exercice42;
CREATE TABLE employe (
                         id INT AUTO_INCREMENT PRIMARY KEY,
                         prenon VARCHAR(50) NOT NULL,
                         nom VARCHAR(50) NOT NULL,
                         datenaissance DATE NOT NULL,
                         date_embauche DATE NULL

                         );

INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Alexandre', 'Dupont', '1985-04-12', '2010-06-01');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Marie', 'Durand', '1990-07-23', '2015-09-15');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Lucas', 'Martin', '1978-02-17', '2005-01-20');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Émilie', 'Petit', '1982-11-30', '2008-03-05');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Thomas', 'Leroy', '1974-06-04', '2000-12-01');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Julie', 'Roux', '1989-09-19', '2014-05-12');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Nicolas', 'David', '1983-01-24', '2011-07-23');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Sophie', 'Moreau', '1979-03-15', '2007-08-30');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Clément', 'Simon', '1986-08-05', '2012-11-09');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Laura', 'Michel', '1992-12-21', '2018-02-19');
ALTER TABLE employe
ADD tel VARCHAR(20) NOT NULL,
ADD email VARCHAR(50) NOT NULL,
CHANGE COLUMN prenon prenom VARCHAR(50) NOT NULL,
    CHANGE COLUMN datenaissance date_naissance DATE NOT NULL,
    MODIFY COLUMN nom VARCHAR(100),
DROP COLUMN date_embauche;