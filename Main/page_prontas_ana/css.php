<?php

?>

<!DOCTYPE html>
<html lang="Pt-Br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Css</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <h3>BrainCode</h3>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
        aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
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
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card">
          <img src="css1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Aula 1</h5>
            <p class="card-text">Aprenda o que é CSS.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><iframe width="560" height="315"
                src="https://www.youtube.com/embed/MyPTheKgh6M?si=cBb0F29W7APwSrDm" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe></li>
          </ul>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="css1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Aula 2</h5>
            <p class="card-text">Aprenda mudar as cores de fundo e de texto em HTML e CSS.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><iframe width="560" height="315"
                src="https://www.youtube.com/embed/LkKjKoXMiNs?si=bbjOvtKBYsch_jO6" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe></li>
          </ul>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <img src="css1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Aula 3</h5>
            <p class="card-text">Aprenda como usar efeito degradê.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><iframe width="560" height="315"
                src="https://www.youtube.com/embed/l_MKNuzVAh4?si=aPpqC1RUzNKT9TD0" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe></li>
          </ul>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <img src="css1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Aula 4</h5>
            <p class="card-text">Aprenda como inserir o CSS dentro do HTML. </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><iframe width="560" height="315"
                src="https://www.youtube.com/embed/0y2A0YRth70?si=K9O91BxkuP_LJbR2" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe></li>

          </ul>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="css1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Aula 5</h5>
            <p class="card-text">Aprenda como criar Animações usando CSS. </p>
          </div>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><iframe width="560" height="315"
              src="https://www.youtube.com/embed/_WplTiEGMPI?si=SuvggNtzG99KfotR" title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen></iframe> </iframe></li>
        </ul>
      </div>
      <div class="col">
        <div class="card">
          <img src="css1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Aula 6</h5>
            <p class="card-text">Aprenda como criar o efeito borda dinâmicas no menu.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><iframe width="560" height="315"
                src="https://www.youtube.com/embed/AEM3ssmyFMo?si=HucCTxOMD3jR-Znn" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe></li>
          </ul>
        </div>
      </div>
    </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>