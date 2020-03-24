<?php

class formulaire{

    function __construct()
    {
        echo "<form action='testformulaire.php' method='post'>";
    }

    function ajouterzonetexte($text,$name){
        echo $text;
        echo "<input type='text' name='$name'>";
    }

    function ajouterbouton($value){
        echo "<input type='submit' value='$value'>";
    }

    function getform(){
        echo "</form>";
    }
}

?>
