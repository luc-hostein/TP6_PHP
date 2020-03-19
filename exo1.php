<?php
echo "<h3>Exo 1</h3><br><br><br>";

class equipeFoot{
    private $nom;
    private $nbTitre;
    const message = "Nombre d'équipe : ";
    static protected $nbEquipe=0;
    public function display(){
        echo "L'équipe ".$this->nom." à ".$this->nbTitre." titre(s)";
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function setNbTitre($nbTitre){
        $this->nbTitre = $nbTitre;
    }

    static function displayNbEquipe(){
        echo self::message;
        echo self::$nbEquipe;
    }

    function __construct($nom,$nbTitre){
        $this->setNom($nom);
        $this->setNbTitre($nbTitre);
        self::$nbEquipe++;
    }

    function __destruct()
    {
        echo"<br>destruct";
    }
}

$equipe1 = new equipeFoot("OM",2);
$equipe2 = new equipeFoot("PSG",6);
$equipe3 = new equipeFoot("FC nantes",4);

$equipe1->display();
echo"<br>";
$equipe2->display();
echo"<br>";
$equipe3->display();
echo"<br>";
equipeFoot::displayNbEquipe();


?>