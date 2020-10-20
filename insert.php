<?php
require_once('db.php'); 

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
        //inserer dans la db
        try{
            $sql = "insert into users(nom,prenom,email,pw,adresse,cp) values (:nom,:prenom,:email,:pw,:adresse,:cp)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":nom",$nom);
            $stmt->bindParam(":prenom",$prenom);
            $stmt->bindParam(":email",$mail1);
            $stmt->bindParam(":pw",$pass1);
            $stmt->bindParam(":adresse",$adresse);
            $stmt->bindParam(":cp",$cp);
            $stmt->execute();
        } catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        $pdo = null;
        header("Location:index.php");
    }
    else {
        header("Location:index.php");
    }    
}
?>