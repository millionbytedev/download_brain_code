<?php
include("../test/conexao.php");
 
    // Consulta todos os registros
    $sql_consultar_contato = "SELECT * FROM mensagem_contato";
    $resultado = $mysqli->query($sql_consultar_contato);
   
    if (!$resultado) {
        die("Erro na consulta: " . $mysqli->error);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Mensagens de Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilok.css">
    <?php include("../page_prontas_kauan/menu.php"); ?>
<br>
</head>
 
<body class="background2">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 mx-auto">
                <div class="caixa3"> <!-- Adicionando a classe "caixa3" aqui -->
                    <h1 class="text-center">Consultar Mensagens de Contato</h1>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-striped w-100">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Data envio</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">Mensagem</th>
                                    <th scope="col" colspan="2">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    // Exibindo os resultados
                                    while ($linha = $resultado->fetch_assoc()) {
                                ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $linha['id']; ?>
                                    </th>
                                    <td>
                                        <?php echo $linha['data_envio']; ?>
                                    </td>
                                    <td>
                                        <?php echo $linha['nome_usuario']; ?>
                                    </td>
                                    <td>
                                        <?php echo $linha['email']; ?>
                                    </td>
                                    <td>
                                        <?php echo $linha['telefone']; ?>
                                    </td>
                                    <td>
                                        <?php echo $linha['mensagem']; ?>
                                    </td>
                                    <td>
                                        <a class="btn-secondary botao-gradient"
                                            href="deletar_contato.php?id_nome_link=<?php echo $linha["id"]; ?>">DELETAR</a>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer2.php"); ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
 
</html>