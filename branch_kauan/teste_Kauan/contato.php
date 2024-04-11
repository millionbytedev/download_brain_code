<?php
include("../test/conexao.php");
 
if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    $telefone = $_POST['telefone'];
 
    $mysqli->query("INSERT INTO mensagem_contato (nome_usuario, email, mensagem, telefone) values('$nome', '$email', '$mensagem' , '$telefone')");
 
}
 
 
?>
 
<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entre em Contato Conosco</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
 
<body>
<div class="container text-center">
    <h1>Entre em Contato Conosco</h1>
    <form action="" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>
 
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
   
        <label for="nome">Telefone:</label><br>
        <input type="text" id="telefone" name="telefone" required><br><br>  
 
        <label for="mensagem">Mensagem:</label><br>
        <textarea id="mensagem" name="mensagem" rows="4" required></textarea><br><br>
 
        <button type="submit" class="btn btn-success">Enviar Mensagem</button>
        <a class="btn btn-primary" href="" role="button">Voltar</a>
 
 
    </form>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
 
</html>
 