<?php
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$mail1 = $_POST["mail1"];
$mail2 = $_POST["mail2"];
$pass1 = $_POST["pass1"];
$pass2 = $_POST["pass2"];
$adresse = $_POST["adresse"];
$cp = $_POST["cp"];

if(isset($nom) && isset($prenom) && isset($mail1) && isset($mail2) && isset($pass1) && isset($pass2) && isset($adresse) && isset($cp)){
    if(($mail1==$mail2)&&($pass1==$pass2)){
        echo 'ok';
    }
    else{
        echo 'pas bon';
    }
}
?>