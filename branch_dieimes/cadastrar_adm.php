<?php
include("adm/conexao.php");
require("protecao_adm.php");


$mensagem = ''; // Inicializa a variável de mensagem

if(isset($_POST['bt_email'])){
  $user = $_POST['bt_nome_adm'];
  $email = $_POST['bt_email'];
  $senha = $_POST['bt_senha'];    
  $confirmarSenha = $_POST['bt_senha_confirmar'];
  $numero= $_POST['bt_telefone'];

  // Verificar se as senhas são iguais
  if($senha === $confirmarSenha){
    
    $sql = "SELECT * FROM pi_2024_braincode_adm WHERE email=?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      // Redirecionar para a página do adm
      $mensagem = "<script>alert('adm já cadastrado'); window.location.href = 'login.php';</script>";
    }else{
      $mysqli->query("INSERT INTO pi_2024_braincode_adm (nome_adm, email, senha, telefone) values('$user', '$email', '$senha', '$numero')");
      if($mysqli->affected_rows > 0){
        // Sucesso na inserção
        $mensagem = "<script>alert('Cadastro realizado com sucesso!'); window.location.href = 'login.php';</script>";
      } else {
        // Falha na inserção
        $mensagem = "<script>alert('Erro ao realizar o cadastro!'); window.location.href = 'cadastrar_adm.php';</script>";
      }
    }    
  } else {
    // Se as senhas não coincidem, exibe uma mensagem de erro
    $mensagem = "<script>alert('As senhas não coincidem!'); window.location.href = 'cadastrar_adm.php';</script>";
  }
  echo $mensagem; // Exibe a mensagem adequada
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro ADM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body class="background">
    <?php include("menu.php"); ?>
    <br>
    
    
    <br>
    <!-- <img src="img/logo.png" id="cerebro1" alt="Logo do Cérebro"> -->
    <br>
    <br>
    <div class="container">
        <h2 class="text-center">Faça o seu cadastro Administrador:</h2>

        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label">Nome Completo:</label>
                <input type="text" class="form-control" name="bt_nome_adm">
            </div>
            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="bt_email" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Senha:</label>
                <input type="password" class="form-control" name="bt_senha" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Confirmar senha:</label>
                <input type="password" class="form-control" name="bt_senha_confirmar" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Telefone:</label>
                <input type="number" class="form-control" name="bt_telefone" required>
            </div>
            <button type="submit" class="btn btn-success">Cadastrar</button>
            <input class="btn btn-warning" type="reset" value="Limpar">           
            
        </form>
    </div>
    <br>
    <br>
    <div class="container text-center">
        <?php include("footer2.php"); ?>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</html>