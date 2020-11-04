<?php

session_start();

$langue = $_POST['langue'];
if(is_null($langue)){
    $_SESSION['lan']='en';
}
else{
    $_SESSION['lan']= $langue;
}

header("Location: senario.php")
?>