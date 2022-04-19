<?php

    session_start();
    
    if(isset($_POST['submit'])){

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $inserir = "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome', '$email', '$senha')";

        $result = mysqli_query($conexao, $inserir);

        header('Location: login.php');
    }

    


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
         .main{
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: gray;
        }

        .formulario-container{
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            width: 500px;
            height: 400px;
            background-color: rgba(0,0,0,.6);
        }

        .formulario-container h1, label{
            color: #fff;
        }



    </style>

    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    
    <mani class='main'>


        <div class="formulario-container">
            
            <h1>Criando uma Conta</h1>
            
            <form action="cadastre.php" method="POST">
                
                <label for='nome'>Insira um UserName</label>
                <br>
                <input type="text" name="nome" placeholder="User" id="nome">
                <br><br>

                <label for='nome'>Insira um Email válido</label>
                <br>
                <input type="text" name="email" placeholder="Email" id="email">
                <br><br>

                <label for='nome'>Insira uma Senha</label>
                <br>
                <input type="password" name="senha" placeholder="Senha" id="senha">
                <br><br>

                <input type="submit" name="submit" class="btn btn-primary">

            </form>


        </div>


    </mani>



    <!--BOOTSTRAP SCRIPT-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>