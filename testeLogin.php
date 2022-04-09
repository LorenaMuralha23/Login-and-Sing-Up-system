<?php

    session_start();

    
   //VERIFICA SE OS CAMPOS "EMAIL", "SENHA" E "USER" foram enviados e se estão vazios 
   if(isset($_POST['submit']) and !empty($_POST['email']) and !empty($_POST['senha']) and !empty($_POST['nome'])){
        
        include_once('./config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $nome = $_POST['nome'];

        //Comando de verificação
        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha' and nome = '$nome' ";

        //faz a consulta atraves do comenaod acima
        $result = $conexao->query($sql);

        //Verifico se há uma conta
        if(mysqli_num_rows($result) < 1){
            
            //Não há uma conta:
            unset($_SESSION['nome']);
            unset($_SESSION['email']);
            unset($_SESSION['senha']);

            header('Location: ./login.php');
            

        }else{

            //Há uma conta correspondente:
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['nome'] = $nome;

            header('Location: ./finalizar.php');

        }
        
   } 
   else{
       header('Location: login.php');
   }

?>




        