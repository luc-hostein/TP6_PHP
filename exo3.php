<?php

echo "<form action='exo3.php' method='post'>
Nom : <input type='text' name='nom'><br>Prenom : <input type='text' name='prenom'>
<br>Mail : <input type='email' name='mail'><br>Age : <select name='age'><option value='1-18'>1-18</option>
<option value='19-30'>19-30</option><option value='31-50'>31-50</option>
<option value='51-80'>51-80</option></select><br>Monsieur : <input type='radio' name='sex' value='monsieur'> 
Madame : <input type='radio' name='sex' value='madame'> Autre : 
<input type='radio' name='sex' value='autre'><br><input type='submit' value='envoyer'>
</form><br><br><br>";


class exo3Recup{


    public $nom;
    public $prenom;
    public $mail;
    public $age;
    public $sex;

    function __construct()
    {
        $this->getNom();
        $this->getPrenom();
        $this->getMail();
        $this->getAge();
        $this->getSex();
    }


    function getNom(){
        $this->nom = $_POST['nom'];
    }
    function getPrenom(){
       $this->prenom = $_POST['prenom'];
    }
    function getMail(){
        $this->mail = $_POST['email'];
    }
    function getAge(){
        $this->age = $_POST['age'];
    }
    function getSex(){
        $this->sex = $_POST['sex'];
    }

}

$exo = new exo3Recup();
echo $exo->nom."<br>";
echo $exo->prenom."<br>";
echo $exo->mail."<br>";
echo $exo->age."<br>";
echo $exo->sex."<br>";

?>
