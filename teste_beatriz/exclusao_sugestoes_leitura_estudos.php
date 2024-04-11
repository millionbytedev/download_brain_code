<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagar Sugestões de Leitura e Estudo</title>
</head>

<body>
    <h1>Apagar Sugestões de Leitura e Estudo</h1>
    <form action="processar_exclusao.php" method="post">
        <label for="tipo_exclusao">Selecione o que deseja apagar:</label>
        <select id="tipo_exclusao" name="tipo_exclusao" required>
            <option value="livros">Livros</option>
            <option value="artigos">Artigos</option>
            <option value="videos">Vídeos</option>
        </select><br><br>
        <input type="submit" value="Apagar">
    </form>
</body>

</html>
