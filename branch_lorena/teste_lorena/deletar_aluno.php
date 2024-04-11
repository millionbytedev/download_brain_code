<?php
include("../test/conexao.php");

// Verifica se foi passado um ID pela URL
if(isset($_GET["id_nome_link"])){
    $id_nome = $_GET["id_nome_link"];
    // Consulta o banco de dados para obter os dados do ADM com o ID fornecido
    $sql_select = "SELECT * FROM tabela_aluno WHERE id = '$id_nome'";
    $resultado = $mysqli->query($sql_select);
    // Verifica se encontrou o registro
    if($resultado->num_rows > 0) {
        $nome_alterar = $resultado->fetch_assoc(); // Obtém os dados do Aluno
    } else {
        echo "ID não encontrado.";
        exit; // Se o ID não foi encontrado, interrompe a execução do script
    }
}

// Processo de exclusão do Aluno
if(isset($_POST['confirmar'])){
    // Verifica se o formulário foi enviado e o botão de confirmação foi pressionado
    if ($_POST['confirmar'] == "Confirmar") {
        // Exclui o registro do banco de dados
        $sql_delete = "DELETE FROM tabela_aluno WHERE id = '$id_nome'";
        $retorno = $mysqli->query($sql_delete);
        // Exibe mensagem de acordo com o resultado da exclusão
        if(isset($retorno) && $retorno) {
            $mensagem = "O cadastro foi deletado permanentemente.";
            echo "<script type='text/javascript'>alert('$mensagem'); window.location.href = 'cadastrar_aluno.php';</script>";
        } elseif(isset($retorno) && !$retorno) {
            $mensagem = "Ocorreu um erro ao deletar o cadastro.";
            echo "<script type='text/javascript'>alert('$mensagem');</script>";
        }
    }
}
?>

<br>
<br>
<br>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar - Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/lorena.css">
</head>

<body class="light-theme">
    <?php
    include("../public/menu.php");
    ?>

    <div class="container text-center">
        <img src="../img/logo.png" alt="logo_brain" class="imagem-redonda">
    <div id="quadro">
            <h1> Deletar - Aluno</h1>

            <!-- Mensagem de confirmação -->
            <p>Deseja realmente excluir permanentemente este cadastro?</p>

            <!-- Informações -->
            <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label" for="">Nome completo do Aluno:</label>
                    <input class="form-control" type="text" value="<?php if(isset($nome_alterar)) echo $nome_alterar["nome_aluno"];else{echo "Sem nome para deletar";} ?>">
                </div>
                <br>
                <br>
                <div class="mb-3">
                    <label class="form-label" for="">Email:</label>
                    <input class="form-control" type="text" value="<?php if(isset($nome_alterar)) echo $nome_alterar["email"];else{echo "Sem email para deletar";} ?>">
                </div>
                <br>
                <br>
                <div class="mb-3">
                    <label class="form-label" for="">Senha:</label>
                    <input class="form-control" type="text" value="<?php if(isset($nome_alterar)) echo $nome_alterar["senha"];else{echo "Sem senha para deletar";} ?>">
                </div>
                <br>
                <br>
                <div class="mb-3">
                    <label class="form-label" for="">Nome da Mãe:</label>
                    <input class="form-control" type="text" value="<?php if(isset($nome_alterar)) echo $nome_alterar["nome_mae"];else{echo "Sem nome da mãe para deletar";} ?>">
                </div>
                <!-- Botão de confirmação -->
                <input type="submit" class="botao-gradient" name="confirmar" value="Confirmar">
                <a class="botao-gradient" href="consultar_aluno.php">Voltar</a>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
