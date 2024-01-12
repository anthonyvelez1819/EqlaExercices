<?php
echo "donne moi un continent et je te donerais les pays qui y sont. ";
$continent=fgets(STDIN);
$continent=trim($continent);
switch ($continent) {
    case "Europe":
        echo "Allemagne, Autriche, Belgique, Bulgarie, Chypre, Croatie, Danemark, Espagne, Estonie, Finlande, France, Grèce, Hongrie, Irlande, Italie, Lettonie, Lituanie, Luxembourg, Malte, Pays-Bas, Pologne, Portugal, République tchèque, Roumanie, Slovaquie, Slovénie et Suède.";
        break;
    case "amerique du sud":
        echo "Argentine, la Bolivie,\n le Brésil, le Chili,\n la Colombie, le Cuba\n l`Equateur, le Guiana.";
        break;
    case "amerique du nord":
        echo "Antigua-et-Barbuda, Bahamas.\n Barbade, Belize.\n Canada, Costa Rica\n Cuba, Dominique.";
        break;
    case "asie":
        echo "Afghanistan, Kazakhstan.\n Kirghizistan, Ouzbékistan.\n Russie, Tadjikistan.\n Turkménistan.";
        break;
    case "afrique":
        echo "Algérie, Angola\n Bénin, Botswana\n Burkina Faso, Burundi\n Cabo Verde, Cameroun\n République centrafricaine, Tchad\n Comores, République démocratique du Congo\n Djibouti, Égypte\n Guinée équatoriale, Érythrée\n Éthiopie, Gabon\n Gambie, Ghana\n Guinée, Guinée-Bissau\n Côte d'Ivoire, Kenya\n 
Lesotho
Libéria
Libye
Madagascar
Malawi
Mali
Mauritanie
Maurice
Maroc
Mozambique
Namibie
Niger
Nigeria
Rwanda
Sao Tomé-et-Principe
Sénégal
Seychelles
Sierra Leone
Somalie
Afrique du Sud
Soudan du Sud
Soudan
Swaziland (maintenant connu sous le nom d'Eswatini)
Tanzanie
Togo
Tunisie
Ouganda
Zambie
Zimbabwe"
    default:
        echo "erreur  / existe pas ";
}