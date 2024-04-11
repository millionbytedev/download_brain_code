<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Recados e Comunicados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/beatriz.css">
</head>

<body class="light-theme">
    <?php include("../page_prontas_kauan/menu.php"); ?>
    <div class="container text-center">
        <img src="../img/logo_brain_code.png" alt="Logo Brain Code" class="logo-brain-code">
        <h1 class="h1-bea">Recados e Comunicados</h1>

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header">
                        Recado Importante
                    </div>
                    <div class="card-body">
                        <p class="card-text">Este é um recado importante para todos os usuários.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header">
                        Comunicado
                    </div>
                    <div class="card-body">
                        <p class="card-text">Aviso: evento especial agendado para a próxima semana.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="mb-3">
                        <label for="titulo" style="font-size: 1.50rem;" class="form-label">Título do Recado:</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>
                    <div class="mb-3">
                        <label for="mensagem" style="font-size: 1.50rem;" class="form-label">Mensagem:</label>
                        <textarea class="form-control" id="mensagem" name="mensagem" rows="4" required></textarea>
                    </div>
                    <button type="submit" style="font-size: 1.20rem;" class="botao-gradient">Enviar Recado</button>
                    <br><br>
                    <a href="" style="font-size: 1.15rem; width: 165px;"
                        class="btn btn-secondary botao-gradient">Voltar</a>

                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>