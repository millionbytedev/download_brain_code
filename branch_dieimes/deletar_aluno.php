<?php
include("adm/conexao.php");
require("protecao_adm.php");

if (isset($_GET['id_aluno'])) {
    $id_aluno = $_GET['id_aluno'];

    $sql = "SELECT * FROM pi_2024_braincode_aluno WHERE id=?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $id_aluno);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $resultado = $result->fetch_assoc();
    }
}

if (isset($_POST['btn_deletar'])) {
    $sql = "DELETE FROM pi_2024_braincode_aluno WHERE id=?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $id_aluno);

    if ($stmt->execute()) {
        // Se a exclusão for bem-sucedida, redirecione para a página de consulta de alunos
        echo "<script>alert('Aluno deletado com sucesso.'); window.location.href='consultar_alunos.php';</script>";
    } else {
        echo "<script>alert('Erro ao deletar o aluno.');</script>";
    }
}
?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro Aluno</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo.css">
</head>

<body class="background">
<?php include("menu.php");  ?>
  <br>
  <br>
  <br>
  <br>
 
  <div class="container container2">
    <h2 class="text-center">Tela de deletar Aluno:</h2>
    <br>
    <br>
    <h3>Tem certeza que deseja apagar o cadastro definitivamente ?</h3>
    <p style="color:black;">Nome: <?php echo $resultado['nome_aluno']; ?></p>
    <p style="color:black;">Email: <?php echo $resultado['email']; ?></p>
    <p style="color:black;">Senha: <?php echo $resultado['senha']; ?></p>
    <p style="color:black;">Nome da Mãe: <?php echo $resultado['nome_mae']; ?></p>

    <form action="" method="post">
        <input class="btn btn-danger" type="submit" value="Deletar" name="btn_deletar">
        <a class="btn btn-primary" href="consultar_alunos.php">Voltar - Consultar alunos</a>
    </form>

   
  </div>
  <br>
  <br>

  <div class="container text-center">
    <?php include("footer2.php"); ?>
  </div>
  



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
