DROP DATABASE IF EXECUTE exercice26;
     CREATE DATABASE exercice26 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

            use exercice26;
                CREATE TABLE Equipe
                (
                    idEquipe INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    NomClub CHAR(30) NOT NULL,
                    Localité CHAR(30) NOT NULL,
                    Division TINYINT UNSIGNED NOT NULL

                )