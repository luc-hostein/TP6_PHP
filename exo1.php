<?php
echo "<h3>Exo 1</h3><br><br><br>";

class equipeFoot{
    private $nom;
    private $nbTitre;
    public function display(){
        echo "L'équipe ".$this->nom." à ".$this->nbTitre." titre(s)";
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function setNbTitre($nbTitre){
        $this->nbTitre = $nbTitre;
    }

    function __construct($nom,$nbTitre){
        $this->setNom($nom);
        $this->setNbTitre($nbTitre);
    }
}

$equipe1 = new equipeFoot("OM",2);
$equipe1->display();

?>