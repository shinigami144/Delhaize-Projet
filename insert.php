<?php
require_once('db.php'); 
session_start();

$mail1 = $_POST["mail1"];
$mail2 = $_POST["mail2"];
$code = $_POST["code"];

if(isset($mail1)&&isset($mail2)&&isset($code)){
    if(($mail1==$mail2)){
        //inserer dans la db
        try{
            $sql = "insert into users(code,email) values (:code,:email)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":email",$mail1);
            $stmt->bindParam(":code",$code);
            $stmt->execute();
        } catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        $pdo = null;
        header("Location:index.php");
    }
    else {
        $_SESSION['erreur']="Mauvais e-Mail!";
        header("Location:index.php");
    }    
}
?>