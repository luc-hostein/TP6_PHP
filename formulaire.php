<?php

class formulaire{

    function __construct($url)
    {
        echo "<form action='$url' method='post'>";
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
