<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="text-center">
        <h1>Envio de Tarefas</h1>
    </div>
    <br>
    <div class="comment-box">
        <h2>Deixe sua mensagem</h2>

        <form>
            <textarea id="comentario" name="comentario" placeholder="Deixe sua mensagem aqui..."></textarea>
            <br>
        </form>
    </div>
    <br>
    <br>
    <form action="/processar_upload" method="post" enctype="multipart/form-data">
        <label for="arquivo">Escolha um arquivo:</label>
        <input type="file" id="arquivo" name="arquivo" accept=".jpg, .jpeg, .png">
        <br>
        <br>
        <label for="descricao">Descrição:</label>
        <input type="text" id="descricao" name="descricao" required>
        <button type="submit" class="custom-upload">Enviar</button>
    </form>
    <br>
    <br>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>