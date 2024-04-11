<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seja Bem-Vindo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Noto+Serif+Khojki:wght@400..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        /* Estilização do fundo */
        #plano {
            position: relative;
            text-align: left; 
        }

        /* Estilo da imagem */
        #plano img {
            width: 100%;
            height: auto;
            position: relative; 
        }

        /* Estilo do fundo 2 */
        #plano::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../img/planodefundo2.png");
            background-size: cover;
            z-index: -1;
        }

        /* Estilo do texto */
        #plano .text {
            position: absolute;
            top: 17%;
            left: 27%; 
            transform: translate(-50%, -50%);
            color: white;
            font-size: 4rem;
            font-weight: bold;
            text-align: left;
            font-family: "Archivo Black";
            z-index: 1;
        }

        /* Estilo input email */
        .input-group {
            position: absolute;
            top: 38%;
            left: 7.5%; 
            width: 80%;
            max-width: 700px;
            z-index: 1;
        }

        /* Estilo do comentário */
        .comment {
            position: absolute;
            top: 23%;
            left: 21.4%; 
            transform: translate(-50%, -50%);
            color: rgba(255, 255, 255, 0.801);
            font-size: 1.8rem;
            font-family: "Open Sans";
            z-index: 1;
        }

        /* Isso aqui foi o chat gpt que fez pra deixar responsivo */
        @media (max-width: 576px) {
            #plano .text {
                font-size: 1.5rem;
                top: 10%; 
                left: 50%; 
                transform: translateX(-50%); 
            }
            .input-group {
                top: 50%; 
                left: 50%; 
                transform: translate(-50%, -50%); 
                width: 80%;
            }
            .comment {
                font-size: 1rem;
                top: 25%; 
                left: 50%;
                transform: translateX(-50%);
            }

            #plano::before {
                background-size: auto; 
            }
        }
    </style>
</head>

<body class="light-theme">
    <nav class="navbar navbar-dark bg-dark border-0">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <!-- Logo -->
                <img src="../img/cerebrologo.png" alt="Logo" width="45" height="32"
                    class="d-inline-block align-text-top">
                BrainCode
            </a>
            <div class="d-flex">
                <a href="login.php" class="text-white me-3">Login</a>
                <a href="../consultar_adm.php" class="text-white">Cadastro</a>
            </div>
        </div>
    </nav>


    <div id="plano" class="mt-3">
        <img src="../img/planodefundo1.png" class="img-fluid" alt="...">
        <div class="text">Comece sua jornada!</div>
        <div class="comment">A resposta para as suas perguntas estão aqui.</div>
        <div class="input-group mt-3">
            <input type="text" class="form-control" placeholder="E-mail"
                aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-info" type="button" id="button-addon2">Login</button>
        </div>
    </div>

    <img src="../img/cerebroluzideia.png" class="img-fluid" alt="...">  
    <img src="../img/linha.png">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
