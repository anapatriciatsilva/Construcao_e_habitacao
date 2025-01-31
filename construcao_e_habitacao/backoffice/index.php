<?php

require_once("../requisicoes.php");

$form = isset($_POST["login"]) && isset($_POST["senha"]);
if($form){
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $logado = efetuarLogin($login, $senha);
    if($logado){header("Location: home.php");}
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style_backoffice.css">
    
</head>

<body>
    <main class="container-fluid my-5">
        <div class="row">
            <form class="col-12 text-center my-5" method="POST">

                <h3>Efetue o seu login</h3>

                <br>

                <?php if($form): ?>

                    <h5">O login é inválido!</h5>

                <?php endif; ?>

                <br><br>

                <input type="text" name="login" placeholder="Username" required class="text-center my-2" autofocus>
                <br><br>
                <input type="password" name="senha" placeholder="Password" required class="text-center">
                <br><br>
                <input type="submit" value="Login">

            </form>
        </div>
    </main>



</body>
</html>