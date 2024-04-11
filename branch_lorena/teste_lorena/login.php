<?php
include("../test/conexao.php");

$wamp = "localhost";
$usuario = "root";
$senha = "";
$banco_nome = "portal_aluno";

// Verificar se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Criar conexão
    $conn = new mysqli($wamp, $usuario, $senha, $banco_nome);

    // Verificar conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Verificar se o email e senha foram enviados via POST
    if (isset($_POST['email']) && isset($_POST['senha'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        // Verificar se o email pertence a um aluno
        $sql = "SELECT * FROM tabela_aluno WHERE email=? AND senha=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Redirecionar para a página do aluno
            header("Location: area_aluno.php");
            exit();
        }
        
        // Verificar se o email pertence a um professor
        $sql = "SELECT * FROM cadastro_professor WHERE email=? AND senha=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Redirecionar para a página do professor
            header("Location: area_professor.php");
            exit();
        }
        
        // Verificar se o email pertence a um administrador
        $sql = "SELECT * FROM tabela_adm WHERE email=? AND senha=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Redirecionar para a página do administrador
            header("Location: area_adm.php");
            exit();
        }

        // Se nenhum usuário foi encontrado, exibir mensagem de erro e opção de cadastro
        echo "O email fornecido não foi encontrado no banco de dados. Por favor, realize o cadastro.<br>";
        echo '<a href="cadastrar_aluno.php">Cadastrar como aluno</a><br>';
        echo '<a href="cadastro_professor.php">Cadastrar como professor</a><br>';
        echo '<a href="cadastrar_adm.php">Cadastrar como administrador</a>';
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <img src="../img/cerebrologo.png" id="cerebro" alt="Logo do Cérebro">
    <div class="container">
        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="password" class="form-control" name="senha" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Logar</button>
            <a class="btn btn-dark" href="pagina_cadastro.php">Criar uma conta</a>
        </form>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</html>
