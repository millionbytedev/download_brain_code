<?php
include("../test/conexao.php");

$mensagem = ''; // Inicializa a variável de mensagem

if(isset($_POST['confirmar'])){
    $recados = $_POST['recados'];
    $professor = $_POST['professor'];
    $titulo = $_POST['titulo'];
    $mensagem = $_POST['mensagem'];

    // Verificar se todos os campos estão preenchidos
    if(!empty($recados) && !empty($professor) && !empty($titulo) && !empty($mensagem)){
        // Insere os dados no banco
        $sql = "INSERT INTO tabela_recado (recados, professor, titulo, mensagem) VALUES (?, ?, ?, ?)";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ssss", $recados, $professor, $titulo, $mensagem);
        
        if($stmt->execute()){
            // Sucesso na inserção
            $mensagem = "<script>alert('Recado enviado com sucesso!'); window.location.href='enviar_recado.php';</script>";
        } else {
            // Falha na inserção
            $mensagem = "<script>alert('Erro ao enviar o recado: " . $mysqli->error . "');</script>";
        }
        $stmt->close();
    } else {
        // Se algum campo estiver vazio, exibe uma mensagem de erro
        $mensagem = "<script>alert('Por favor, preencha todos os campos!');</script>";
    }
    echo $mensagem; // Exibe a mensagem adequada
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Recados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/lorena.css">
</head>

<body class="light-theme">
    <?php include("../public/menu.php"); ?>

    <div class="container text-center">
        <img src="../img/logo.png" alt="logo_brain" class="imagem-redonda">
        <div id="quadro">
            <h1> Envie seu Recado!</h1>

            <!-- Formulário de envio de recados -->
            <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label" for="recados">Recado:</label>
                    <input class="form-control" type="text" name="recados" id="recados">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="professor">Professor:</label>
                    <input class="form-control" type="text" name="professor" id="professor">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="titulo">Título:</label>
                    <input class="form-control" type="text" name="titulo" id="titulo">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="mensagem">Mensagem:</label>
                    <textarea class="form-control" id="mensagem" name="mensagem" rows="4" cols="50"></textarea>
                </div>
                <!-- Botão de confirmação -->
                <input type="submit" class="botao-gradient" name="confirmar" value="Recado Enviado">
                <a class="botao-gradient" href="enviar_recado.php">Voltar</a>
            </form>
        </div>
    </div>

    <br>
    <br>
    <?php include("footer.php"); ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
