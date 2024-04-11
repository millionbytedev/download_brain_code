<?php
    include("../test/conexao.php");
 
    // Consulta todos os registros
    $sql_consultar_aluno = "SELECT * FROM tabela_aluno";
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
    <title>Consultar - Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css\.css">
</head>
<body>
    <div class="container text-center">
        <h1>Consultar - Aluno</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Nome da Mãe</th>
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
                        <td><?php echo $linha['nome_aluno']; ?></td>
                        <td><?php echo $linha['email']; ?></td>
                        <td><?php echo $linha['senha']; ?></td>
                        <td><?php echo $linha['nome_mae']; ?></td>
                        <td>
                            <a class="btn btn-warning" href="editar_aluno.php?id_nome_link=<?php echo $linha["id"]; ?>">EDITAR</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="deletar_aluno.php?id_nome_link=<?php echo $linha["id"]; ?>">DELETAR</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <a class="btn btn-primary" href="cadastrar_aluno.php">Voltar</a>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
 