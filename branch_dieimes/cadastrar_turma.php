<?php
include("adm/conexao.php");
require("protecao_adm.php");

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os valores dos campos do formulário
    $nomeTurma = $mysqli->real_escape_string($_POST['nome_turma']);
    $disciplinaId = $mysqli->real_escape_string($_POST['disciplina_id']);
    $professorId = $mysqli->real_escape_string($_POST['professor_id']);

    // Monta a query SQL para inserção
    $sql = "INSERT INTO pi_2024_braincode_turma (nome_turma, disciplina, professor) VALUES ('$nomeTurma', '$disciplinaId', '$professorId')";

    // Executa a query
    if ($mysqli->query($sql) === TRUE) {
        echo "<script>alert('Turma cadastrada com sucesso!');</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar turma: " . $mysqli->error . "');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro Turma</title>
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
    <h2 class="text-center">Cadastrar Turma:</h2>
    <form action="" method="post">
        <div class="mb-3">
            <label class="form-label">Nome da turma:</label>
            <input type="text" class="form-control" name="nome_turma">
        </div> 
        <div class="mb-3">
        <label class="form-label">Selecione a disciplina ou Unidade Curricular:</label>
        <select class="form-select" name="disciplina_id" aria-label="Default select example">
            <option selected>Escolha uma disciplina ou UC:</option>
            <?php
            
            $sql_consultar_disciplina = "SELECT * FROM pi_2024_braincode_disciplina";
            $resultado_disciplina = $mysqli->query($sql_consultar_disciplina);
            if ($resultado_disciplina) {
                while($disciplina = $resultado_disciplina->fetch_assoc()) {
                    echo '<option value="'. $disciplina['id_disciplina'] .'">'. $disciplina['nome_disciplina'] .'</option>';
                }
            } else {
                echo '<option>Erro na consulta: ' . $mysqli->error . '</option>';
            }
            ?>
        </select>
        </div>
        <div class="mb-3">        
            <label class="form-label">Selecione o professor:</label>
            <select class="form-select" name="professor_id" aria-label="Default select example">
                <option selected>Escolha um professor:</option>
                <?php
            
                $sql_consultar_professor = "SELECT * FROM pi_2024_braincode_professor";
                $resultado = $mysqli->query($sql_consultar_professor);
                if ($resultado) {
                    while($professor = $resultado->fetch_assoc()) {
                        echo '<option value="'. $professor['id'] .'">'. $professor['nome_prof'] .'</option>';
                    }
                } else {
                    echo '<option>Erro na consulta: ' . $mysqli->error . '</option>';
                }
                ?>
            </select>
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
