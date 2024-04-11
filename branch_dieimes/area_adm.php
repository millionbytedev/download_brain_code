<?php
    require("protecao_adm.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area do ADM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo_maria.css">

</head>

<body id="corpo">
    <?php include("menu.php"); ?>
    <div id="topo">

        <style>

            #atencao{
                color:red;
            }

            #atencao:hover{
                color: black;                
            }
            /* Estilos CSS para as imagens que pulsarão */
            .pulsating-image {
                transition: transform 0.3s ease-in-out, box-shadow 0.5s ease-in-out;
            }

            .pulsating-image:hover {
                transform: scale(1.1);
                box-shadow: 0px 20px 50px rgba(0, 0, 0, 0.9);
            }
        </style>
        <div class="container text-center ">
            <div id="topinho">
                <img src="img/logo.png" class="logo-brain-code">
                <br>
                <h1 id="textinho1">Seja Bem-Vindo(a) Administrador</h1>
                <h2 id="textinho2">ADM: <?php echo $_SESSION['nome_adm']; ?></h2>
                <br>
                <h4 id="textinho3">Cadastrar:</h4>
                <br>

                <div class="row justify-content-center">
                    <div class="col-sm-6 col-md-3 mb-3"
                        style="display: flex; align-items: center; justify-content: center;">
                        <a href="cadastrar_adm.php"
                            style="height: 100%; display: block; overflow: hidden; border-radius: 10px; box-shadow: 0px 20px 50px rgba(0, 0, 0, 0.9);">
                            <img src="img/cadastraradm.png" alt="" class="pulsating-image img-fluid"
                                style="max-width: 100%; max-height: 100%; object-fit: cover;">
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-3 mb-3"
                        style="display: flex; align-items: center; justify-content: center;">
                        <a href="cadastrar_aluno.php"
                            style="border-radius: 10px; overflow: hidden; display: inline-block; box-shadow: 0px 20px 50px rgba(0, 0, 0, 0.9);">
                            <img src="img/cadastraraluno.png" alt="" class="pulsating-image img-fluid"
                                style="max-width: 100%; height: auto;">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-3"
                        style="display: flex; align-items: center; justify-content: center;">
                        <a href="cadastrar_prof.php"
                            style="border-radius: 10px; overflow: hidden; display: inline-block; box-shadow: 0px 20px 50px rgba(0, 0, 0, 0.9);">
                            <img src="img/cadastrarprof.png" alt="" class="pulsating-image img-fluid"
                                style="max-width: 100%; height: auto;">
                        </a>
                    </div>
                    <br>
                    <br>
                    <br>
                    <h4 id="textinho3">Cadastrar:</h4>
                    <a href="cadastrar_disciplina.php">Cadastrar Disciplina</a>
                    <a href="cadastrar_turma.php">Cadastrar Turma</a>
                    <br>
                    <br>
                    <h4 id="textinho3">Consultar:</h4>
                    <br>

                    <a href="consultar_alunos.php">Consultar Alunos</a>
                    <a href="consultar_professores.php">Consultar Professores</a>
                    <a href="consultar_adm.php">Consultar Administradores</a>
                    <a href="consultar_disciplina.php">Consultar Disciplina</a>

                    <br>
                    <br>
                    <hr>

                    <h4 id="atencao">Falta fazer:</h4>

                
                    <a href="#">Editar Professor</a>
                    <a href="#">Editar Adm</a> 
                    <a href="#">Deletar Professor</a>
                    <a href="#">Deletar Adm</a>
                    <hr>
                        <a href="#">Atribuir Disciplina para o Aluno</a>
                        <a href="#">Atribuir Disciplina para o Professor</a>                                            
                    <hr>


                    <script>
                        // Selecionando todas as imagens com a classe 'pulsating-image'
                        const pulsatingImages = document.querySelectorAll('.pulsating-image');

                        // Adicionando o evento de mouseover a cada imagem
                        pulsatingImages.forEach(image => {
                            image.addEventListener('mouseover', function () {
                                this.style.transform = 'scale(1.1)';
                            });

                            image.addEventListener('mouseout', function () {
                                this.style.transform = 'scale(1)';
                            });
                        });
                    </script>
                    <?php include("footer2.php"); ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>


</html>