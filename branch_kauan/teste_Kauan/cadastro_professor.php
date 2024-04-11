<?php 
    include("../test/conexao.php"); 

    $mensagem = ''; // Inicializa a variável de mensagem

    var_dump($_POST);
    if(isset($_POST['bt_nome_prof'])){
      var_dump($_POST['bt_nome_prof']);
      $professor = $_POST['bt_nome_prof'];
      $diciplina = $_POST['bt_diciplina'];
      $email = $_POST['bt_email'];
      $endereco = $_POST['bt_endereco'];
      $telefone = $_POST['bt_telefone'];
      $senha = $_POST['bt_senha'];
      $confirmar = $_POST['bt_confirmar'];


       // Verificar se as senhas são iguais
  if($senha === $confirmar){
    // Se as senhas coincidem, insere os dados no banco
    if($mysqli->query("INSERT INTO cadastro_professor (professor, diciplina, email, endereco, telefone, senha, confirmar) values('$professor', '$diciplina', '$email', '$endereco', '$telefone', '$senha', '$confirmar')")){
      if($mysqli->affected_rows > 0){
        // Sucesso na inserção
        $mensagem = "<script>alert('Cadastro realizado com sucesso!'); window.location.href = 'login.php';</script>";
      } else {
        // Falha na inserção
        $mensagem = "<script>alert('Erro ao realizar o cadastro!'); window.location.href = 'cadastro_professor.php';</script>";
      }
    } else {
      // Erro na query
      $mensagem = "<script>alert('Erro ao realizar o cadastro: " . $mysqli->error . "'); window.location.href = 'cadastro_professor.php';</script>";
    }
  } else {
    // Se as senhas não coincidem, exibe uma mensagem de erro
    $mensagem = "<script>alert('As senhas não coincidem!'); window.location.href = 'cadastro_professor.php';</script>";
  }
  echo $mensagem; // Exibe a mensagem adequada
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro Professor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body class="background">
  <?php include("../page_prontas_kauan/menu.php"); ?>

  <div class="container">
    <form action="" method="post">

      <h1>Bem-Vindo Professor(a)!</h1>
      <br>
      <div class="mb-3">
        <label class="form-label">Nome Completo:</label>
        <input type="text" class="form-control" name="bt_nome_prof" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Disciplina:</label>
        <input type="text" class="form-control" name="bt_diciplina" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email:</label>
        <input type="email"  class="form-control" name="bt_email" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Endereço:</label>
        <input type="text" class="form-control" name="bt_endereco" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Telefone:</label>
        <input type="text" class="form-control" name="bt_telefone" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Senha:</label>
        <input type="password" class="form-control" name="bt_senha" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Confirmar Senha:</label>
        <input type="password" class="form-control" name="bt_confirmar" required>
      </div>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
      <a class="btn btn-secondary" href="index.php">Voltar</a>
    </form>
  </div>
  <br>
  <br>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>