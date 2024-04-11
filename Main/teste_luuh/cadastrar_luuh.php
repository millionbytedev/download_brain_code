<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style1.css">
</head>
<body class="tema">
<div class="container"> 
<form action="" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="bt_email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label class="form-label">Nome de Usuário</label>
    <input type="email" class="form-control" name="bt_user">
  </div>
  <div class="mb-3">
    <label class="form-label">Senha</label>
    <input type="password" class="form-control" name="bt_senha">
  </div>
  <div class="mb-3">
    <label class="form-label">Confirmar senha</label>
    <input type="password" class="form-control" name="bt_confirmar">
  </div>
  <div class="mb-3">
    <label class="form-label">Número de telefone (Para recuperação de conta)</label>
    <input type="text" class="form-control" name="bt_numero">
  </div>
  <input type="submit" class="btn btn-primary"> 
  <input class="btn btn-warning" type="reset" value="Limpar">
  <a class="btn btn-info" href="login.php">Ir para login</a>
</form>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>