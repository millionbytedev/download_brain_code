<?php
include("adm/conexao.php");
if (!isset($_SESSION)) {
    session_start();
}

// Mapeamento de sessões para suas respectivas páginas
$redirecionamentos = [
    'nome_aluno' => 'area_aluno.php',
    'nome_adm' => 'area_adm.php',
    'nome_prof' => 'area_prof.php',
];

foreach ($redirecionamentos as $nomeSessao => $pagina) {
    if (isset($_SESSION[$nomeSessao])) {
        header("Location: $pagina");
        exit; // Importante para evitar que o script continue executando após o redirecionamento
    }
}

function verificaUsuario($mysqli, $email, $senha, $tabela, $redirectPage, $nomeSessao, $colunaNome) {
    // Ajuste para garantir que o nome da coluna é seguro
    $colunasValidas = ['nome_aluno' => true, 'nome_prof' => true, 'nome_adm' => true];
    if (!isset($colunasValidas[$colunaNome])) {
        throw new Exception("Nome de coluna inválido");
    }

    $sql = "SELECT * FROM $tabela WHERE email=? AND senha=?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $resultado = $result->fetch_assoc();
        $_SESSION[$nomeSessao] = $resultado[$colunaNome]; // Use o nome da coluna dinamicamente
        header("Location: $redirectPage");
        exit();
    }
}

// Uso da função modificada para cada tipo de usuário
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    verificaUsuario($mysqli, $email, $senha, "pi_2024_braincode_aluno", "area_aluno.php", "nome_aluno", "nome_aluno");
    verificaUsuario($mysqli, $email, $senha, "pi_2024_braincode_professor", "area_professor.php", "nome_prof", "nome_prof");
    verificaUsuario($mysqli, $email, $senha, "pi_2024_braincode_adm", "area_adm.php", "nome_adm", "nome_adm");

    // Se chegou aqui, nenhum usuário foi encontrado
    $texto = '<p style="color: red; text-align: center;">O email ou senha fornecidos não foram encontrados no banco de dados. Por favor, tente novamente ou realize o cadastro. </p>';
    // Exibir mensagem de erro e opções de cadastro aqui
}

$mysqli->close();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo_maria.css">
</head>

<body class="background2">
    <?php include("menu.php");  ?> 
    
   <br>
   <br>
   <br>   
    
    <div class="container container2">
        <form method="POST" action="">
            <div class="mb-3">
                <h1> Bem-vindo de volta!</h1>
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria -describedby="emailHelp" value="<?php if(isset($_SESSION['para_login'])){echo $_SESSION['para_login'];}?>">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="password" class="form-control" name="senha" id="exampleInputPassword1">
            </div>
            <?php
                if(isset($texto)){
                    echo $texto;
                }
            ?>
            <button type="submit" class="btn btn-primary">Logar</button>
            <a class="btn btn-dark" href="cadastrar_aluno.php">Criar uma conta</a>
            <!-- Links adicionais do segundo bloco -->
            <a class="btn btn-secondary" href="index.php">Voltar</a>
        </form>
    </div>

    <?php include("footer2.php"); ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>