<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Comunicados</title>
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
        <h1 class="h1-bea">Comunicados</h1>

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header">
                        Comunicado Importante
                    </div>
                    <div class="card-body">
                        <p class="card-text">Este é um comunicado importante que você recebeu.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header">
                        Recado
                    </div>
                    <div class="card-body">
                        <p class="card-text">Você recebeu um recado especial.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2 class="h2-bea">Novos Comunicados</h2>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Comunicado Importante</h5>
                            <small>2 days ago</small>
                        </div>
                        <p class="mb-1">Este é um novo comunicado importante para você.</p>
                        <small>Donec id elit non mi porta.</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Recado Especial</h5>
                            <small>3 days ago</small>
                        </div>
                        <p class="mb-1">Você recebeu um novo recado especial.</p>
                        <small>Donec id elit non mi porta.</small>
                    </a>
                </div>
            </div>
        </div>
        <br>
        <a href="area_aluno.php" style="font-size: 1.15rem; width: 165px;"
            class="btn btn-secondary botao-gradient">Voltar</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>