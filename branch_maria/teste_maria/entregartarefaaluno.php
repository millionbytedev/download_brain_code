<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
</head>

<body id="fundin">
    <?php  include("../public/menu.php");  ?>
    <div id="oioi">
        <div class="custom-container">
            <div class="text-center">
                <h1>Envio de Tarefas</h1>
            </div>
            <div class="comment-box">
                <h2>Descrição</h2>
                <form>
                    <textarea id="comentario" name="comentario" class="form-control" rows="5"
                        placeholder="Deixe sua mensagem aqui..."></textarea>
                </form>
            </div>
            <form action="/processar_upload" method="post" enctype="multipart/form-data" class="mt-4">
                <label for="arquivo" class="form-label">Escolha um arquivo:</label>
                <input type="file" id="arquivo" name="arquivo" class="file-upload">
                <input type="text" id="descricao" name="descricao" class="form-control" required>
                <br>
                <label for="arquivo" type="button" class="btn btn-secondary botao-gradient"> Selecionar
                    Arquivo</label></a>
                <a class="btn btn-secondary botao-gradient" href="..//"> Voltar </a>

            </form>
        </div>


        <script>
            const fileInput = document.getElementById('arquivo');
            const fileInputLabel = document.querySelector('.file-upload-label');

            fileInputLabel.addEventListener('click', () => {
                fileInput.click();
            });

            fileInput.addEventListener('change', () => {
                if (fileInput.files.length > 0) {
                    fileInputLabel.textContent = `Arquivo Selecionado: ${fileInput.files[0].name}`;
                } else {
                    fileInputLabel.textContent = 'Selecionar Arquivo';
                }
            });
        </script>
        <?php  include("../test/footer2.php");  ?>
</body>

</html>