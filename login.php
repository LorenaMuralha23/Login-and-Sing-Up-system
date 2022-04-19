<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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


        .login{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 500px;
            height: 400px;
            background-color: rgba(0,0,0,.6);
        }

        .options{
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

    </style>

    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    
    <main class="main">

        <div class="login">
            <h1 style="color: #fff">Login</h1>
            <br>

            <form method="POST" action="./testeLogin.php">

                <input type="text" name="nome" placeholder="User">
                <br><br>
                <input type="text" name="email" placeholder="Email">
                <br><br>
                <input type="password" name="senha" placeholder="Senha">
                <br><br>

                <div class="options">
                    <input class="btn btn-primary" type="submit" type="submit" name="submit" value="Login">
                    <a href="./cadastre.php"> Cadastre-se </a> 
                </div>
                

            </form>

            

        </div>

    </main>

    <!--BOOTSTRAP SCRIPT-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>