use exercice27;
DELETE FROM joueur;
ALTER TABLE joueur AUTO_INCREMENT = 1;
    INSERT INTO joueur(nom, prenom, DateNaissance, idEquipe)
    VALUES ('Velez', 'Anthony', '2004/05/19', '2'),
 ('Colin', 'Pierre', '1984/07/22','1'),
 ('Jacques', 'Gabriel', '2014/08/22', '1'),
 ('Dupont', 'Philip', '1991/12/13', '1');
SELECT DISTINCT joueur.nom, joueur.prenom, equipe.NomClub AS Club
FROM joueur
INNER JOIN equipe ON joueur.idEquipe = equipe.idEquipe;