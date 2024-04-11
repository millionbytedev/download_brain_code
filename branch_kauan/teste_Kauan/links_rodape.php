<?php
/*// Inicia a sessão
session_start();

// Verifica se um link foi clicado e o armazena na sessão
if(isset($_GET['link'])) {
    $_SESSION['info'] = $_GET['link1'];
    $_SESSION['suporte'] = $_GET['link2'];
    $_SESSION['sobre'] = $_GET['link3'];
}

// Redireciona de volta para esta página
header("Location: {$_SERVER['links_rodape.php']}");
exit();*/
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós</title>
    <link rel="stylesheet" href="estilokauan.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        .footer2 h4::before {
            content: "•"; /* Ponto */
            margin-right: 5px; /* Espaçamento entre o ponto e o texto */
        }

        .footer2 {
            text-align: center;
            padding: 20px 0;
            background-color: #f8f9fa; /* Cor de fundo */
        }

        .footer2 nav {
            margin-bottom: 20px; /* Espaço entre o conteúdo e o rodapé */
        }

        .footer2 h4 {
            color: #333; /* Cor do título */
            font-size: 18px; /* Tamanho da fonte do título */
            margin-bottom: 10px; /* Espaço entre o título e o conteúdo */
        }

        .footer2 p {
            color: #666; /* Cor do texto */
            font-size: 16px; /* Tamanho da fonte do texto */
            line-height: 1.6; /* Altura da linha para melhor legibilidade */
            margin-bottom: 10px; /* Espaço entre os parágrafos */
        }

        .footer2 p:last-child {
            margin-bottom: 0; /* Remove a margem inferior do último parágrafo */
        }

        .footer2 p.equipes {
            font-style: italic; /* Estilo itálico */
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <div class="footer2">
            <nav>
                <h4>Informações:</h4>
                <p>
                    No BrainCode, você encontrará uma vasta gama de recursos e informações projetadas para elevar suas
                    habilidades de programação a novos patamares.
                    Quer esteja dando os primeiros passos no mundo da codificação ou buscando aprimorar suas habilidades
                    existentes, o BrainCode tem algo para todos.
                    Explore nossos tutoriais abrangentes, guias passo a passo e artigos informativos, todos
                    cuidadosamente elaborados para simplificar conceitos complexos e ajudá-lo a dominar diversas
                    linguagens de programação.
                </p>
                <h4>Sobre nós:</h4>
                <p>
                    Explore uma variedade de linguagens de programação e marcação, incluindo HTML,
                    CSS, JavaScript e PHP, enquanto navega por tutoriais detalhados e práticos. Desde os fundamentos
                    essenciais até técnicas avançadas, oferecemos recursos abrangentes para ajudar tanto os iniciantes
                    quanto os programadores experientes a aprimorar suas habilidades.
                    Seja você um entusiasta de design buscando aprimorar suas habilidades em CSS para criar interfaces
                    visuais incríveis, um desenvolvedor web interessado em dinamizar suas páginas com JavaScript, ou um
                    aspirante a back-end ansioso para explorar as potencialidades do PHP, o "BrainCode" é o seu aliado.
                </p>
                <p class="equipes">Equipe: Professor: Dieimes e Alunos Ana, Beatriz, Kauan, Lorena, Luciane, Maria e Fernando.</p>

                <a href="pagina_tal.php">Entre em Contato Conosco:</a>
            </nav>
        </div>
    </div>
    <p>&copy; BrainCode</p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDV
