<?php
    include("adm/conexao.php");
    require("protecao_adm.php");
    

    // Consulta todos os registros
    $sql_consultar_aluno = "SELECT * FROM pi_2024_braincode_disciplina";
    $resultado = $mysqli->query($sql_consultar_aluno);
    
    if (!$resultado) {
        die("Erro na consulta: " . $mysqli->error);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar - Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>
    <?php include("menu.php");  ?>
    <div class="container text-center">
        <br>
        <br>
        <br>
        <br>

        <h1>Consultar - Alunos</h1>

        <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome da Disciplina</th>                    
                    <th scope="col" colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Exibindo os resultados
                    while ($linha = $resultado->fetch_assoc()) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $linha['id_disciplina']; ?></th>
                        <td><?php echo $linha['nome_disciplina']; ?></td>                      
                       
                        <td>
                            <a class="btn btn-warning" href="#">EDITAR</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="#">DELETAR</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        </div>
        
        <!-- <a class="btn btn-primary" href="cadastrar_aluno.php">Voltar</a> -->
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
