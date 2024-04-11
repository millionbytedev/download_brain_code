<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area do Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/beatriz.css">
    <style>
        /* Estilos CSS para as imagens que pulsarão */
        .pulsating-image {
            transition: transform 0.3s ease-in-out, box-shadow 0.5s ease-in-out;
        }

        .pulsating-image:hover {
            transform: scale(1.1);
            box-shadow: 0px 20px 50px rgba(0, 0, 0, 0.9);
        }
    </style>
</head>

<body class="light-theme">
    <?php include("../page_prontas_kauan/menu.php"); ?>
    <div class="container text-center ">
        <img src="../img/logo_brain_code.png" alt="Logo Brain Code" class="logo-brain-code">
        <h1 class="h1-bea">Seja Bem-Vindo(a) BrainStudant</h1>
        <h2 class="h2-bea">Por aqui você irá encontrar...</h2>
        <h4 class="h4-bea">Material de Estudos:</h4>
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-3 mb-3" style="display: flex; align-items: center; justify-content: center;">
                <a href="htmlana.php"
                    style="height: 100%; display: block; overflow: hidden; border-radius: 10px; box-shadow: 0px 20px 50px rgba(0, 0, 0, 0.9);">
                    <img src="../img/htmlcard.png" alt="" class="pulsating-image img-fluid"
                        style="max-width: 100%; max-height: 100%; object-fit: cover;">
                </a>
            </div>

            <div class="col-sm-6 col-md-3 mb-3" style="display: flex; align-items: center; justify-content: center;">
                <a href="css.php"
                    style="border-radius: 10px; overflow: hidden; display: inline-block; 10px; box-shadow: 0px 20px 50px rgba(0, 0, 0, 0.9);">
                    <img src="../img/csscard.png" alt="" class="pulsating-image img-fluid"
                        style="max-width: 100%; height: auto;">
                </a>
            </div>
            <div class="col-sm-6 col-md-3 mb-3" style="display: flex; align-items: center; justify-content: center;">
                <a href="conteu_php.php"
                    style="border-radius: 10px; overflow: hidden; display: inline-block; 10px; box-shadow: 0px 20px 50px rgba(0, 0, 0, 0.9);">
                    <img src="../img/phpcard.png" alt="" class="pulsating-image img-fluid"
                        style="max-width: 100%; height: auto;">
                </a>
            </div>
            <div class="col-sm-6 col-md-3 mb-3" style="display: flex; align-items: center; justify-content: center;">
                <a href="bancod.php"
                    style="border-radius: 10px; overflow: hidden; display: inline-block; 10px; box-shadow: 0px 20px 50px rgba(0, 0, 0, 0.9);">
                    <img src="../img/bdcard.png" alt="" class="pulsating-image img-fluid"
                        style="max-width: 100%; height: auto;">
                </a>
            </div>
        </div>

        <h4 class="h4-bea">Ferramentas:</h4>
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-3 mb-3" style="display: flex; align-items: center; justify-content: center;">
                <a href="mbgfgh.php"
                    style="border-radius: 10px; overflow: hidden; display: inline-block; box-shadow: 0px 20px 50px rgba(0, 0, 0, 0.9);">
                    <img src="../img/consultar_tarefas.png" alt="" class="pulsating-image img-fluid"
                        style="max-width: 100%; height: auto;"><!-- Tarefas finalizadas-->
                </a>
            </div>
            <div class="col-sm-6 col-md-3 mb-3" style="display: flex; align-items: center; justify-content: center;">
                <a href="mbgfgh.php"
                    style="border-radius: 10px; overflow: hidden; display: inline-block; box-shadow: 0px 20px 50px rgba(0, 0, 0, 0.9);">
                    <img src="../img/consultar_notas.png" alt="" class="pulsating-image img-fluid"
                        style="max-width: 100%; height: auto;"><!-- Consultar Notas-->
                </a>
            </div>
            <div class="col-sm-6 col-md-3 mb-3" style="display: flex; align-items: center; justify-content: center;">
                <a href="consultar_frequencia.php"
                    style="border-radius: 10px; overflow: hidden; display: inline-block; 10px; box-shadow: 0px 20px 50px rgba(0, 0, 0, 0.9);">
                    <img src="../img/consultar_frequencia.png" alt="" class="pulsating-image img-fluid"
                        style="max-width: 100%; height: auto;"><!--Consulta de frequência-->
                </a>
            </div>
            <div class="col-sm-6 col-md-3 mb-3" style="display: flex; align-items: center; justify-content: center;">
                <a href="agenda_atividades.php"
                    style="border-radius: 10px; overflow: hidden; display: inline-block; 10px; box-shadow: 0px 20px 50px rgba(0, 0, 0, 0.9);">
                    <img src="../img/agenda_atividades.png" alt="" class="pulsating-image img-fluid"
                        style="max-width: 100%; height: auto;"><!--Agenda de atividades-->
                </a>
            </div>
        </div>
        <div class="row justify-content-center">


            <div class="col-sm-6 col-md-3 mb-3" style="display: flex; align-items: center; justify-content: center;">
                <a href="sugestoes_leitura_estudos.php"
                    style="border-radius: 10px; overflow: hidden; display: inline-block; 10px; box-shadow: 0px 20px 50px rgba(0, 0, 0, 0.9);">
                    <img src="../img/sugestoes_estudo.png" alt="" class="pulsating-image img-fluid"
                        style="max-width: 100%; height: auto;"><!--Sugestões de Estudos-->
                </a>
            </div>
            <div class="col-sm-6 col-md-3 mb-3" style="display: flex; align-items: center; justify-content: center;">
                <a href="receber_recados_comunicados.php"
                    style="border-radius: 10px; overflow: hidden; display: inline-block; 10px; box-shadow: 0px 20px 50px rgba(0, 0, 0, 0.9);">
                    <img src="../img/recados_comunicados.png" alt="" class="pulsating-image img-fluid"
                        style="max-width: 100%; height: auto;"><!--Recados e Comunicados-->
                </a>
            </div>
        </div>
    </div>


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
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</html>