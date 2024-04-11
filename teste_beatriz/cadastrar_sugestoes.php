<?php
include("conexao.php");
 
$mensagem = ''; // Inicializa a variável de mensagem
 
if(isset($_POST['bt_titulo'])){
  $titulo = $_POST['bt_titulo'];
  $categoria = $_POST['bt_categoria'];
  $link = $_POST['bt_link'];    
 

    if($mysqli->query("INSERT INTO tabela_sugestoes (titulo, categoria, link) values('$titulo', '$categoria', '$link')")){
      if($mysqli->affected_rows > 0){
        // Sucesso na inserção
        $mensagem = "<script>alert('Cadastro realizado com sucesso!'); window.location.href='cadastrar_sugestoes.php';</script>";
      } else {
        // Falha na inserção
        $mensagem = "<script>alert('Erro ao realizar o cadastro!'); window.location.href='cadastrar_sugestoes.php';</script>";
      }
    } else {
      // Erro na query
      $mensagem = "<script>alert('Erro ao realizar o cadastro: " . $mysqli->error . "'); window.location.href='cadastrar_sugestoes.php';</script>";
    }
    $mysqli->close();
  } else {
    // Se as senhas não coincidem, exibe uma mensagem de erro
    $mensagem = "<script>alert('As senhas não coincidem!'); window.location.href='cadastrar_sugestoes.php';</script>";
  }
  echo $mensagem; // Exibe a mensagem adequada
?>
 
 <!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Sugestões de Leitura e Estudos</title>
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
        <div id="quadro" class="conteiner">
            <h1 class="h1-bea">Cadastro de Sugestões de Leitura e Estudos</h1>

            <form action="sugestoes_leitura_estudos" method="post">

                <label style="font-size: 1.20rem;" for="titulo">Título:</label>
                <input class="form-control" type="text" id="titulo" name="bt_titulo" required><br><br>

                <label style="font-size: 1.20rem;" for="categoria">Categoria:</label>
                <input class="form-control" type="text" id="categoria" name="bt_categoria" required><br><br>

                <label style="font-size: 1.20rem;" for="link">Link da Sugestão:</label>
                <input class="form-control" type="url" id="link" name="bt_link" required><br><br>

                <input class="botao-gradient" style="font-size: 1.20rem;" type="submit" value="Enviar">
            </form>
        </div>
        
        <a href="voltar.php" style="font-size: 1.20rem;" class="botao-gradient" onclick="window.history.back()">Voltar</a>
        
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</html>