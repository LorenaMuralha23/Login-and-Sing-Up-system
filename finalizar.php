<?php
    session_start();


    include('./config.php');
    include('./verifica.php');

    $logado = $_SESSION['nome']; //puxa o nome do usuario

    $id_produto = $_SESSION['id_produto'];

    $comando_produto = "SELECT * FROM produtos WHERE id='$id_produto';";
    $resultado_produto = mysqli_query($conexao, $comando_produto);
    $row_produto = mysqli_fetch_assoc($resultado_produto);

   
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar Compra</title>

    <style>
        .main{
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: gray;
            color: #fff;
        }

        .compra{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 650px;
            height: 700px;
            background-color: rgba(0,0,0,.6);
        }

        #valor{
            font-size: 2rem;
            font-weight: bold;
        }

    </style>

    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    
    <main class="main">

        <h1>
            <?php
                echo('Olá, '.$logado.'!')
            ?>
        </h1>
        <h2>Vamos Finalizar sua compra!</h2>

        <div class="compra">
            <h3>Detalhes:</h3>

            <h4>
                <?php

                    echo "Produto: ".$row_produto['nome'];
                
                ?>
            </h4>

            <p>
                <img src=<?php echo "./img/".$row_produto['imagem']; ?> class="rounded mx-auto d-block" alt="...">
            </p>

            

            <p id="valor">
                <?php

                    echo "Valor: R$".$row_produto['valor'];
                
                ?>
            </p>

            <a href="comprafeita.php" class="btn btn-primary">
                CONFIRMAR COMPRA
            </a>

        </div>


    </main>


    <!--BOOTSTRAP SCRIPT-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>