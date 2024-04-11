<?php
include("adm/conexao.php");
 if (!isset($_SESSION)) {
    session_start();
}


if(isset($_POST['bt_login'])){
    $email = $_POST['bt_login'];

    $sql = "SELECT * FROM pi_2024_braincode_aluno WHERE email=?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Redirecionar para a página do aluno
        $_SESSION['para_login'] = $email;
        $mensagem = "<script>window.location.href = 'login.php';</script>";
    }else{
        $mensagem = "<script>window.location.href = 'cadastrar_aluno.php';</script>";
    }

    echo $mensagem;    
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seja Bem-Vindo</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Noto+Serif+Khojki:wght@400..700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
    <link rel="stylesheet" href="css/estilo.css">

</head>

<body class="background1">
    <?php include("menu.php");  ?>

    
    <div class="container text-center">
        <br>
        <br>
        <br>
        <img class="img-fluid" src="img/cerebroluzideia.png" alt="Imagem 1" class="imagem-sobreposta">
        <h1 class="title1">Comece sua jornada!</h1>
        <p>Encontre as respostas para todas as suas dúvidas aqui.</p>

        <br>
        <br>

        
            <form action="" method="post">
                <div class="input-group mt-3">
                    <input type="text" class="form-control rounded" placeholder="E-mail" aria-label="Recipient's username"
                        aria-describedby="button-addon2" name="bt_login">
                    <input class="btn btn-outline-info rounded" type="submit" id="" value="Login">
                </div>
            </form>

        <!--
        -->
    </div>

    
    <br>
    <br>
    
    <?php include("footer.php"); ?>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>