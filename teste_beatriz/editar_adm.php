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
        <img src="../img/logo_brain_code.png" alt="Logo Brain Code" class="logo-brain-code mt-5 mb-4">

        <div id="quadro" class="container">
            <h1 class="h1-bea">Edite o seu cadastro administrador!</h1>

            <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label custom-label" for="">Nome completo do ADM:</label>
                    <input class="form-control" type="text" name="bt_adm" value="<?php if(isset($_GET["
                        id_nome_link"])){echo $nome_alterar["adm"];}else{echo "Sem nome para editar" ;} ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label custom-label" for="">Email:</label>
                    <input class="form-control" type="text" name="bt_email" value="<?php if(isset($_GET["
                        id_nome_link"])){echo $nome_alterar["email"];}else{echo "Sem email para editar" ;} ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label custom-label" for="">Senha:</label>
                    <input class="form-control" type="text" name="bt_senha" value="<?php if(isset($_GET["
                        id_nome_link"])){echo $nome_alterar["senha"];}else{echo "Sem senha para editar" ;} ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label custom-label" for="">Telefone:</label>
                    <input class="form-control" type="text" name="bt_telefone" value="<?php if(isset($_GET["
                        id_nome_link"])){echo $nome_alterar["telefone"];}else{echo "Sem telefone para editar" ;} ?>">
                </div>
                <div class="mb-3">
                    <input class="botao-gradient" style="font-size: 1.20rem;" type="submit" value="Alterar">
                    <a href="consultar_adm.php" style="font-size: 1.20rem;" class="botao-gradient">Consultar</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>