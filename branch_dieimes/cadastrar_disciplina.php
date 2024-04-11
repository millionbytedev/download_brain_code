<?php
include("adm/conexao.php");


$mensagem = ''; // Inicializa a variável de mensagem

if(isset($_POST['bt_disciplina'])){
  $disciplina = $_POST['bt_disciplina'];
  

  // Verificar se as senhas são iguais
 
    
    $sql = "SELECT * FROM pi_2024_braincode_disciplina WHERE nome_disciplina=?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      // Redirecionar para a página do aluno
      $mensagem = "<script>alert('Disciplina já cadastrada'); window.location.href = 'area_adm.php';</script>";
    }else{
      $mysqli->query("INSERT INTO pi_2024_braincode_disciplina (nome_disciplina) values('$disciplina')");
      if($mysqli->affected_rows > 0){
        // Sucesso na inserção
        $mensagem = "<script>alert('Cadastro realizado com sucesso!'); window.location.href = 'cadastrar_disciplina.php';</script>";
      } else {
        // Falha na inserção
        $mensagem = "<script>alert('Erro ao realizar o cadastro!'); window.location.href = 'cadastrar_aluno.php';</script>";
      }
    }    
  
  echo $mensagem; // Exibe a mensagem adequada
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
    <h2 class="text-center">Cadastrar disciplina:</h2>

    <form action="" method="post">
      <div class="mb-3">
        <label class="form-label">Nome da disciplina:</label>
        <input type="text" class="form-control" name="bt_disciplina">
      </div>      
      
      <div class="d-grid gap-2">
      <input class="btn btn-primary" type="submit" value="Cadastrar">      
      <a class="btn btn-primary" href="area_adm.php">Voltar</a>
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