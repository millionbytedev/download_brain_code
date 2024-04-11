<?php
    include("conexao.php");

  if(isset($_POST['bt_email'])){
    $user = $_POST['bt_user'];
    $email = $_POST['bt_email'];
    $senha = $_POST['bt_senha'];
    $confirmar = $_POST['bt_confirmar'];
    $numero= $_POST['bt_numero'];

    $mysqli->query("INSERT INTO tabela_usuario (user, email, senha, confirmar_senha, telefone) values('$user', '$email', '$senha', '$confirmar', '$numero')") or die($mysqlierrno);

  }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h2 class="text-center">Faça o seu cadastro Aluno:</h2>
    
    <form action="" method="post">
      <div class="mb-3">
          <label class="form-label">Nome Completo:</label>
          <input type="text" class="form-control" name="bt_user">
      </div>
      <div class="mb-3">
        <label class="form-label">Email:</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="bt_email">        
      </div> 
      <div class="mb-3">
        <label class="form-label">Número de telefone (Para recuperação de conta)</label>
        <input type="text" class="form-control" name="bt_numero">
      </div>     
      <div class="mb-3">
        <label class="form-label">Senha:</label>
        <input type="password" class="form-control" name="bt_senha">
      </div>
      <div class="mb-3">
        <label class="form-label">Confirmar senha:</label>
        <input type="password" class="form-control" name="bt_confirmar">
      </div>      
      <input type="submit" class="btn btn-success">
      <input class="btn btn-warning" type="reset" value="Limpar">
      <a class="btn btn-primary" href="login.php">Ir para login</a>
    </form>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>