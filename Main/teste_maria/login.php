<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body {
            background-color: #25292c;
        }

        .container {
            background-color: #8b8e91;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            margin-top: 100px;
            max-width: 400px;
        }

        #cerebro {
            
            width: 125px;
            height: 100px;
            display: block;
            margin: 0 auto 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-dark {
            background-color: #343a40;
            border-color: #343a40;
        }

        .btn-dark:hover {
            background-color: #1d2124;
            border-color: #1d2124;
        }
    </style>
</head>
<img src="../img/cerebrologo.png" id="cerebro" alt="Logo do Cérebro">
<body>
    <div class="container">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Logar</button>
            <a class="btn btn-dark" href="link">Esqueceu a senha?</a>
        </form>
    </div>

    <style>

.footer{
    text-align: center;
    padding: 10px 0;
    position: fixed;
    left: 1px;
    bottom: 0;
    width: 100%;
    word-spacing: 2px;
    letter-spacing: normal;
 
}

    </style>

    <div class="footer">
        <footer>
            <nav>
                <ul>
                    <a href="#">Início</a></li>
                    <a href="#">Informações</a></li>
                    <a href="#">Suporte</a></li>
                    <a href="#">Sobre nós</a></li>
                    <p>&copy; BrainCode</p>
                </ul>
            </nav>
        </footer>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</html>
