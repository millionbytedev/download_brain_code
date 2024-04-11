<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consulta de Frequência</title>
  <!-- Adicionando o Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/beatriz.css">
</head>
<body class="light-theme">
<?php include("../page_prontas_kauan/menu.php"); ?>
  <div class="container text-center">
  <img src="../img/logo_brain_code.png" alt="Logo Brain Code" class="logo-brain-code">
    <h1 class="h1-bea">Consulta de Frequência</h1>

    <!-- Formulário de consulta -->
    <form>
      <div class="form-group">
        <label style="font-size: 1.50rem;" for="inputMatricula">Matrícula</label>
        <input type="text" class="form-control" id="inputMatricula" placeholder="Digite sua matrícula">
      </div>
      <div class="form-group">
        <label style="font-size: 1.50rem;" for="inputNome">Nome</label>
        <input type="text" class="form-control" id="inputNome" placeholder="Digite seu nome">
      </div>
      <button style="font-size: 1.50rem;" type="submit" class="btn btn-primary">Consultar</button>
    </form>

    <!-- Resultado da consulta (exemplo estático) -->
    <div class="mt-4">
      <h4 class="h4-bea">Resultado da Consulta:</h4>
      <p style="font-size: 1.20rem;">Matrícula: <span id="resultadoMatricula">123456</span></p>
      <p style="font-size: 1.20rem;">Nome: <span id="resultadoNome">Fulano de Tal</span></p>
      <p style="font-size: 1.20rem;">Frequência: <span id="resultadoFrequencia">75%</span></p>
    </div>
    <a href="area_aluno.php" style="font-size: 1.20rem;" class="botao-gradient">Voltar</a>
  </div>

  <!-- Adicionando o jQuery e o Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
