<?php


//Se o usuario não estiver logado
if(!$_SESSION['nome'] and !$_SESSION['email'] and !$_SESSION['senha']){
    header('Location: login.php');
    exit();
}




?>