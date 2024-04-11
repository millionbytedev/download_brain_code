



<!DOCTYPE html>
<html lang="pt-br">
 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro Aluno</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style1.css">
</head>
 
<body class="background">
<img src="../img/logo.png" id="cerebro1" alt="Logo do Cérebro">
<br>
<br>
  <div class="container">
  <h2 class="text-center">Faça o seu cadastro Aluno:</h2>
 
    <form action="" method="post">
      <div class="mb-3">
          <label class="form-label">Nome Completo:</label>
          <input type="text" class="form-control" name="bt_user">
      </div>
      <div class="mb-3">
        <label class="form-label">Email:</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="bt_email" required>        
      </div> 
      <div class="mb-3">
        <label class="form-label">Número da sua mãe (Para recuperação de conta)</label>
        <input type="text" class="form-control" name="bt_numero" required>
      </div>     
      <div class="mb-3">
        <label class="form-label">Senha:</label>
        <input type="password" class="form-control" name="bt_senha" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Confirmar senha:</label>
        <input type="password" class="form-control" name="bt_confirmar" required>
      </div>
      <input type="submit" class="btn btn-primary">
      
      <a class="btn btn-dark" href="login.php">Ir para login</a>
      <a class="btn btn-secondary" href="index.php">Voltar</a>
    </form>
  </div>
  <br>
  <br>
  <br>
  <br>
  <div class="footer">
    <footer>
        <nav>
            <ul>
                <a href="#">Início</a></li>
                <a href="#">Informações</a></li>
                <a href="#">Suporte</a></li>
                <a href="#">Sobre nós</a></li>
                <p>&copy; BrainCode</p>
            </ul>
        </nav>
    </footer>
</div>

 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
</html>