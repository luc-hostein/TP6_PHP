<?php
include 'formulaire.php';

$formulaire = new formulaire();

$formulaire->ajouterzonetexte("<br>Votre nom :","nom");
$formulaire->ajouterzonetexte("<br>Votre code :","code");
echo "<br>";
$formulaire->ajouterbouton("envoyer");
$formulaire->getform();

echo $_GET["nom"]." a pour code ".$_GET["code"];


?>