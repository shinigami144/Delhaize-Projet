<?php

session_start();

$langue = $_POST['langue'];

$_SESSION['lan']= $langue;

header("Location: senario.php")
?>