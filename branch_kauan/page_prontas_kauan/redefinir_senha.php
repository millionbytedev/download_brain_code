<?php








?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir Senha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php include("menu.php"); ?>
    <br>
    <br>
    <br>
    <br>

    <div class="container">        
        <div class="mb-3">
            <h1>Redefinir Senha</h1>
            <div class="container text-center">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">
                            <h4>Senha Antiga:</h4>
                        </label>
                        <input type="email" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">
                            <h4>Nova Senha:</h4>
                        </label>
                        <input type="email" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">
                            <h4>Confirmar Senha:</h4>
                        </label>
                        <input type="email" class="form-control" id="exampleInputPassword1">
                    </div>
                    <a class="btn btn-primary" href="cadastrar.php" role="button">Redefinir_Senha</a>
                </form> 
            </div>
        </div> 
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</html>