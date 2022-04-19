<?php

    //Caso a pessoa esteja logada
    if(!empty($_SESSION['nome']) and !empty($_SESSION['email']) and !empty($_SESSION['senha'])){
        header('Location: finalizar.php');
    }


?>