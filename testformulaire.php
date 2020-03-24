<?php
include 'formulaire.php';

$formulaire = new formulaire();

$formulaire->ajouterzonetexte("<br>Votre nom :","nom");
$formulaire->ajouterzonetexte("<br>Votre code :","code");
echo "<br>";
$formulaire->ajouterbouton("envoyer");
$formulaire->getform();

echo $_POST["nom"]." a pour code ".$_POST["code"];


?>