<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Atividade para Agenda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/beatriz.css">
</head>
<body class="light-theme">
<?php include("../page_prontas_kauan/menu.php"); ?>
    <div class="container text-center">
    <img src="../img/logo_brain_code.png" alt="Logo Brain Code" class="logo-brain-code">
        <h1 class="h1-bea">Enviar Atividade para Agenda</h1>
        <form action="/caminho/para/processar/formulario" method="POST">
            <div class="mb-3">
                <label for="titulo" class="form-label" style="font-size: 1.50rem;">Título da Atividade:</label>
                <input type="text" id="titulo" name="titulo" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="data" class="form-label" style="font-size: 1.50rem;">Data da Atividade:</label>
                <input type="date" id="data" name="data" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="descricao" class="form-label" style="font-size: 1.50rem;">Descrição:</label>
                <textarea id="descricao" name="descricao" class="form-control" rows="4" required></textarea>
            </div>

            <button type="submit" style="font-size: 1.20rem;" class="botao-gradient">Enviar</button>
            <button type="reset" style="font-size: 1.20rem;" class="botao-gradient">Limpar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
