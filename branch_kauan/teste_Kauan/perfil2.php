<?php

?>      

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="estilokauan.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
            Selecione uma imagem para enviar:
            <input type="file" name="imagem" id="imagem">
            <input type="submit" value="Enviar Imagem" name="submit">
        </form>
    <div class="container text-center">
        <h1>Perfil do Usuário</h1>
            <a href="" type="file" name="imagem" id="imagem">
                <img src="../img/perfil.png" alt="">
            </a>
        <?php
            // Inclua o arquivo de conexão com o banco de dados
            include "../test/conexao.php";

            // Supondo que você tenha uma sessão de usuário ativa, você pode usar as informações dessa sessão para recuperar os dados do usuário
            // Neste exemplo, estou apenas simulando as informações do usuário
            $usuario_id = 1; // ID do usuário logado
            $sql = "SELECT * FROM tabela_aluno WHERE id = $usuario_id";
            $resultado = $mysqli->query($sql);

            if ($resultado && $resultado->num_rows > 0) {
                $row = $resultado->fetch_assoc();
        ?>
        <div class="perfil">
            <div class="avatar">
                <?php if (!empty($row['avatar'])): ?>
                    <img src="<?php echo $row['avatar']; ?>" alt="Foto de Perfil">
                <?php else: ?>
                    <img src="../img/perfil.png" alt="Foto de Perfil">
                <?php endif; ?>
            </div>
            <div class="info">
                <p><strong>Nome:</strong> <?php echo $row['nome']; ?></p>
                <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
                <p><strong>Telefone:</strong> <?php echo $row['telefone']; ?></p>
                <p><strong>Turma:</strong> <?php echo $row['turma']; ?></p>
                <br>
                <br>
                <p><strong>Bio:</strong> <?php echo $row['biografia']; ?></p>

                <!-- Adicione mais campos conforme necessário -->
            </div>
        </div>
        <div class="usuario">
            <?php
                } else {
                    echo "Usuário não encontrado.";
                }
                // Feche a conexão com o banco de dados
                $mysqli->close();
            ?>
        </div>
        <div class="botao">
            <a class="btn btn-primary" href="">Voltar</a>
            <a class="btn btn-secondary" href="editar_perfil.php">Editar Perfil</a>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>