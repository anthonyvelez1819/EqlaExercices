<?php

class Bubble
{
private int $size;


    public function __construct(int $_size)
    {
        $this->size = $_size;
    if ($_size > 5){
        $this->size = 5;
    }elseif ($_size < 0){
        $this->size = 0;
    }
    // remplacer par (pour prendre moins de place et ne pas dupliquer le code :
        $this->setSize($_size);
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): void
    {
        $this->size = $size;
    if ($this->size > 5){
        echo "je m'éclate !";
    }
    elseif ($size<0)
    {
        $this->size=0;
    }
    }

}






/*les 4 grands principe de l'oop :
- l'encapsulation c'est définie par les propiéte et les methodes
-l'apstraction : c'est le fait de toujours garder le même point d'entrer et de sortie
- héritage :
polymorphise : permet a des objets de calss différent qui peuvent etre traiter de maniére uniforme

les différents types de visibilité sont private et public. private signifie que ce n'est possible d'y acceder depuis l'extérieur
alors qu'avec public on peut accéder depuis l'extérieur.

comment appelle t'on les fontions et les variables propre a une class?


quel sont les 5 parties distinct qui définise une class?
- les setters
- les getters
- les fonction / function
- les données
- le constructeur

comment créer un nouvel objet ?
en donnant un nom a votre objet et avec new .
exemple : $johnyPhone = new mobilePhone; "aprés new faut mettre le nom de la class"

quelle est la différence entre class et objet ?
l'objet c'est l'objet construis avec tous les paramétres
et la class c'est les paramétres de l'objet

*/