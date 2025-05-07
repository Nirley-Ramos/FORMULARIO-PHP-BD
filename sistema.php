<?php
    session_start();
    print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>SISTEMA | NR</title>
    <style>
        body{
        
            background-image: linear-gradient(to right, rgb(229, 189, 238), rgb(96, 13, 85));
            text-align: center;

        }
    </style>
</head>


<body>
            <div class="d-flex">
                <a href="sair.php" clas="btn btn-danger me-5">Sair</a>

            </div>

    <?php
    echo "<h1>Bem vindo <u>$logado</u></h1>";

    ?>
</body>
</html>