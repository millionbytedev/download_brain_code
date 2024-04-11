<?php
include("../test/conexao.php");
 
// Verifica se o ID foi passado via GET e consulta os dados do registro
if(isset($_GET["id_nome_link"])){
    $id_nome = $_GET["id_nome_link"];
    $sql_consultar = "SELECT * FROM tabela_adm WHERE id = '$id_nome'";
    $retorno = $mysqli->query($sql_consultar);
    $nome_alterar = $retorno->fetch_assoc();
 
 
 
 
   // var_dump ($nome_alterar)
}
 
// Verifica se o formulário foi enviado
if(isset($_POST['bt_adm'])){
    $adm = $_POST['bt_adm'];
    $email = $_POST['bt_email'];
    $senha = $_POST['bt_senha'];
    $telefone = $_POST['bt_telefone'];
 
    // Executa a atualização no banco de dados
    $sql_alterar = "UPDATE tabela_adm
        SET adm = '$adm',
            email = '$email',
            senha = '$senha',
            telefone = '$telefone'
         
         WHERE id = '$id_nome'";
 
    $mysqli_alterar = $mysqli->query($sql_alterar) or die($mysqli->error);
 
    // Verifica se a atualização foi bem-sucedida e exibe uma mensagem de confirmação
    if($mysqli_alterar) {
        echo '<div class="alert alert-success" role="alert">Cadastro editado com sucesso!</div>';
    }  else {
        echo '<div class="alert alert-danger" role="alert">Erro ao editar o cadastro.</div>';
    }
}
?>
 
<br>
<br>
<br>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar - ADM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css\stylle.css">
</head>
<body>
 
<div id="quadro" class="container text-center">
    <h1>Edite o seu cadastro administrador!</h1>
 
    <form action="" method="post">
        <div class="mb-3">
            <label class="form-label" for="">Nome completo do ADM:</label>
            <input class="form-control" type="text" name="bt_adm" value="<?php if(isset($_GET["id_nome_link"])){echo $nome_alterar["adm"];}else{echo "Sem nome para editar";} ?>">
        </div>
        <br>
        <br>
        <div class="mb-3">
            <label class="form-label" for="">Email:</label>
            <input class="form-control" type="text" name="bt_email" value="<?php if(isset($_GET["id_nome_link"])){echo $nome_alterar["email"];}else{echo "Sem email para editar";} ?>">
        </div>
        <br>
        <br>
        <div class="mb-3">
            <label class="form-label" for="">Senha:</label>
            <input class="form-control" type="text" name="bt_senha" value="<?php if(isset($_GET["id_nome_link"])){echo $nome_alterar["senha"];}else{echo "Sem senha para editar";} ?>">
        </div>
        <br>
        <br>
       <div class="mb-3">
            <label class="form-label" for="">Telefone:</label>
            <input class="form-control" type="text" name="bt_telefone" value="<?php if(isset($_GET["id_nome_link"])){echo $nome_alterar["telefone"];}else{echo "Sem telefone para editar";} ?>">
        </div>
        <div class="mb-3">
            <input class="btn btn-success" type="submit" value="Alterar">
            <a class="btn btn-primary" href="consultar_adm.php">Consultar</a>
        </div>
     </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>