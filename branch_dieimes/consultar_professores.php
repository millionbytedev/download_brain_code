<?php
    include("adm/conexao.php");
    require("protecao_adm.php");

    // Consulta todos os registros
    $sql_consultar_aluno = "SELECT * FROM pi_2024_braincode_professor";
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
    <title>Consultar - Adm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>
    <?php include("menu.php");  ?>
    <div class="container text-center">
        <br>
        <br>
        <br>
        <br>
        <h1>Consultar - Professores</h1>

        <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Disciplina</th>
                    <th scope="col">Email</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Senha</th>
                    <th scope="col" colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Exibindo os resultados
                    while ($linha = $resultado->fetch_assoc()) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $linha['id']; ?></th>
                        <td><?php echo $linha['nome_prof']; ?></td>
                        <td><?php echo $linha['disciplina']; ?></td>
                        <td><?php echo $linha['email']; ?></td>
                        <td><?php echo $linha['endereco']; ?></td>
                        <td><?php echo $linha['telefone']; ?></td>
                        <td><?php echo $linha['senha']; ?></td>
                        <td>
                            <a class="btn btn-warning" href="editar_prof.php?id_prof=<?php echo $linha['id'];?>">EDITAR</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="deletar_prof.php?id_prof=<?php echo $linha['id'];?>">DELETAR</a>
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
