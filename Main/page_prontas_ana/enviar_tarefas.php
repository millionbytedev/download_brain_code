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
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <h3>BrainCode</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h2 class="offcanvas-title" id="offcanvasDarkNavbarLabel">BrainCode</h2>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Home.php">
                                <h5>Home</h5>
                            </a>
                            <a class="nav-link" href="perfil_aluno.php">
                                <h5>Home</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="perfil_aluno.php">
                                <h5>Perfil</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sair_conta.php">
                                <h5>Sair da Conta</h5>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <div class="espacamento">
        <!-- Seu conteúdo aqui -->
    </div>
    <br>
    <br>
    <form action=".">
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
        <br>
        <br>
        <br>
        <div class="container">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Início</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Informações</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Suporte</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Sobre Nós</a></li>
                </ul>
                <p class="text-center text-body-secondary">&copy; Brain Code</p>
            </footer>
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"crossorigin="anonymous"></script>
</html>