<?php
    
    session_start();
    include ('config.php');

    //Codigo de verificação de segurança
    include('verificaLogin.php');
    

    $id_produto = $_GET['id_produto'];

    $_SESSION['id_produto'] = $id_produto;
    

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
    <title>Comprar</title>

    <style>
        .main{
            display:  flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 100px;
            font-family: 'Oswald', sans-serif;
        }

        .details{
            display:  flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }    

        .details h2{
            font-size: 18pt;
            margin-top: 10px;
        }

        .size-form{
            margin-bottom: 15px;
        }


    </style>

    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">


    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    
    <!-- DETALHES DO PRODUTO PUXADO ATRAVES DO ID PUXADO NA URL -->
    <main class="main">

        <div class="details">
            <h1>
                <?php
                    echo $row_produto['nome'];
                ?>
            </h1>
        
            <img src=<?php echo "./img/".$row_produto['imagem']; ?> class="rounded mx-auto d-block" alt="...">

            <h2>Detalhes do produto: </h2>

            <p>
                <?php
                    echo $row_produto['descricao'];
                ?>
            </p>

            <p>
                <?php
                    echo "PREÇO: R$".$row_produto['valor'];
                ?>
            </p>

            <form class="size-form" action="testeLogin.php" method="POST">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tamanho" id="inlineRadio1" value="Infantil" required>
                    <label class="form-check-label" for="inlineRadio1">Infantil</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tamanho" id="inlineRadio2" value="Adolescente" required>
                    <label class="form-check-label" for="inlineRadio2">Adolescente</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tamanho" id="inlineRadio3" value="Adulto" required>
                    <label class="form-check-label" for="inlineRadio3">Adulto</label>
                </div>
                <input type="submit" name="comprar" id="submit">
            </form>  
            
        </div>

    </main>

    <!--BOOTSTRAP SCRIPT-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   

   
</body>
</html>