<?php
    include("../test/conexao.php");

    // Consulta todos os registros
    $sql_consultar_adm = "SELECT * FROM cadastro_professor";
    $resultado = $mysqli->query($sql_consultar_adm);
   
    if (!$resultado) {
        die("Erro na consulta: " . $mysqli->error);
    }
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Professor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style1.css">
</head>

<body class="background2">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 mx-auto">
                <div class="caixa2">
                    <h1 class="text-center">Consultar - Professor</h1>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nome Completo</th>
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
                                    <td><?php echo $linha['id']; ?></td>
                                    <td><?php echo $linha['nome_professor']; ?></td>
                                    <td><?php echo $linha['diciplina']; ?></td>
                                    <td><?php echo $linha['email']; ?></td>
                                    <td><?php echo $linha['endereco']; ?></td>
                                    <td><?php echo $linha['telefone']; ?></td>
                                    <td><?php echo $linha['senha']; ?></td>
                                    <td>
                                        <a class="btn btn-warning" href="editar_prof.php?id_nome_link=<?php echo $linha["id"]; ?>">EDITAR</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger" href="deletar_prof.php?id_nome_link=<?php echo $linha["id"]; ?>">DELETAR</a>
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                        <br>
                        <br>
                    </div>
                    <a class="btn btn-primary" href="cadastro_professor.php">Voltar</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    
    <?php include("footer2.php"); ?>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</html>