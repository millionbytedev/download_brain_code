<?php
include("adm/conexao.php");
require("protecao_adm.php");

$resultado = array('nome_aluno' => '', 'email' => '', 'nome_mae' => '', 'senha' => '');

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

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['id_aluno'])) {
    $nome = $_POST['bt_user'];
    $email = $_POST['bt_email'];
    $nome_mae = $_POST['bt_numero']; // Verifique se este campo deve ser realmente 'bt_numero'
    $senha = $_POST['bt_senha'];

    // Preparando a consulta de atualização
    $sql = "UPDATE pi_2024_braincode_aluno SET nome_aluno=?, email=?, nome_mae=?, senha=? WHERE id=?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sssss", $nome, $email, $nome_mae, $senha, $id_aluno);
    
    if ($stmt->execute()) {
        // Se a atualização for bem-sucedida, exibir um alert e redirecionar
        echo "<script>alert('Atualização bem-sucedida.'); window.location.href='consultar_alunos.php';</script>";
    } else {
        echo "Erro ao atualizar.";
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
    <h2 class="text-center">Tela de Editar Aluno:</h2>

    <form action="" method="post">
      <div class="mb-3">
        <label class="form-label">Nome Completo:</label>
        <input type="text" class="form-control" name="bt_user" value="<?php echo $resultado['nome_aluno']; ?>" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Email:</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="bt_email" value="<?php echo $resultado['email']; ?>" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Número da sua mãe (Para recuperação de conta)</label>
        <input type="number" class="form-control" name="bt_numero" value="<?php echo $resultado['nome_mae']; ?>"required>
      </div>
      <div class="mb-3">
        <label class="form-label">Senha:</label>
        <input type="text" class="form-control" name="bt_senha" value="<?php echo $resultado['senha']; ?>" required>
      </div>      
      
      <div class="d-grid gap-2">
      <button class="btn btn-primary" type="submit">Editar</button>
      <a class="btn btn-primary" href="consultar_alunos.php">Consultar Alunos</a>      
    </div>
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
