<?php

    session_start();

    include 'config.php';
    

    $comando_produtos = "SELECT * FROM produtos;";
    $resultado_produtos = mysqli_query($conexao, $comando_produtos);

    //Ao retornar, é apagado o historico do ultimo pedido, para já iniciar outro
    unset($_SESSION['id_produto']);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strike - Live Life</title>
    
    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <!--BOOTSRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
    <header class="header">

    <div class="logo">
        <h1>STRIKE</h1>
    </div>

    <div class="menu">
        <ul>
            <li>
                <a>Home</a>
            </li>
            <li>
                <a>Products</a>
            </li>
            <li>
                <a>Promotions</a>
            </li>
        </ul>
    </div>


    </header>

    <main class="main">

        <h2>Produtos</h2>
        

        <div class="produtos">

            <!-- (INICIO) VITRINE DOS PRODUTOS INCLUIDOS NO BANCO DE DADOS-->
            <!-- LOOP PASSADO ENQUANTO HÁ PRODUTOS (=linhas) REGISTRADOS NO DB-->
            <?php while($row_produtos = mysqli_fetch_assoc($resultado_produtos)){ ?>
                <div class="card" style="width: 18rem;">
                    <img src=<?php echo "./img/".$row_produtos['imagem']; ?> class="card-img-top" alt="...">
                    <div class="card-body">
                        
                        <h5 class="card-title">
                            <?php echo $row_produtos['nome'];?>;
                        </h5>

                        <p class="card-text">
                            <?php echo $row_produtos['descricao']; ?>
                        </p>

                        <p class="card-text">
                            <?php echo "R$".$row_produtos['valor'];?>
                        </p>

                        <!-- ID ENVIADO ATRAVÉS DA URL -->
                        <a href="./compra.php?id_produto=<?php echo $row_produtos['id']; ?>" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            <?php } ?>
            <!-- (FIM) VITRINE -->

        </div>

    </main>


        <!--BOOTSTRAP SCRIPT-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

