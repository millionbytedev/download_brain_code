<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Conteúdo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/beatriz.css">
</head>

<body class="light-theme">
    <?php include("../page_prontas_kauan/menu.php"); ?>

    <form action="" method="post" class="container text-center">
        <img src="../img/logo_brain_code.png" alt="Logo Brain Code" class="logo-brain-code">
        <h1 class="h1-bea">Cadastrar Conteúdo</h1>

        <div class="mb-3">
            <label for="titulo" class="custom-label">Título</label>
            <input type="text" id="titulo" name="titulo" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="texto" class="custom-label">Texto:</label>
            <textarea id="texto" name="texto" class="form-control" cols="80" rows="8"
                placeholder="Digite aqui"></textarea>
        </div>

        <p style="font-size: 1.50rem;">Adicione Link de vídeos:</p>

        <div class="mb-3">
            <label for="link1" class="custom-label">Link 1</label>
            <input type="text" id="link1" name="link1" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="link2" class="custom-label">Link 2</label>
            <input type="text" id="link2" name="link2" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="link3" class="custom-label">Link 3</label>
            <input type="text" id="link3" name="link3" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="link4" class="custom-label">Link 4</label>
            <input type="text" id="link4" name="link4" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="arquivo1" class="custom-label">Escolha uma imagem:</label>
            <label for="arquivo1" style="font-size: 1.10rem;" class="custom-file-upload">Upload</label>
            <input type="file" id="arquivo1" name="arquivo1" class="form-control-file" accept=".jpg, .jpeg, .png">
        </div>

        <div class="mb-3">
            <label for="arquivo2" class="custom-label">Escolha uma imagem:</label>
            <label for="arquivo2" style="font-size: 1.10rem;" class="custom-file-upload">Upload</label>
            <input type="file" id="arquivo2" name="arquivo2" class="form-control-file" accept=".jpg, .jpeg, .png">
        </div>

        <div class="mb-3">
            <label for="arquivo3" class="custom-label">Escolha uma imagem:</label>
            <label for="arquivo3" style="font-size: 1.10rem;" class="custom-file-upload">Upload</label>
            <input type="file" id="arquivo3" name="arquivo3" class="form-control-file" accept=".jpg, .jpeg, .png">
        </div>


        <div class="mb-3">
            <button type="submit" style="font-size: 1.20rem;" class="botao-gradient">ENVIAR</button>
            <button type="button" style="font-size: 1.20rem;" class="botao-gradient">SALVAR RASCUNHO</button>
            <a href="voltar.php" style="font-size: 1.20rem;" class="botao-gradient">VOLTAR</a>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>