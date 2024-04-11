<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conteúdo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/beatriz.css">
    <link rel="stylesheet" href="../css/estilos.css"> <!-- Adicione esta linha para incluir o arquivo CSS externo -->
</head>

<body class="light-theme">
    <?php include("../page_prontas_kauan/menu.php"); ?>
    <div class="container text-center">
        <figure class="logo-container">
            <img src="../img/logo_brain_code.png" alt="Logo Brain Code" class="logo-brain-code">
        </figure>
        <h1 class="h1-bea">Como funciona o HTML</h1>
        <br>
        <p style="font-size: 1.50rem;">
            Elementos e Tags: Um documento HTML é composto por elementos HTML, que são delimitados por tags. As tags são
            estruturas entre colchetes < e>, e a maioria delas vem em pares, uma tag de abertura e uma tag de
                fechamento.
                Por exemplo, < p> é a tag de abertura para um parágrafo, enquanto < /p> é a tag de fechamento.
                        <br><br>
                        Atributos: As tags podem conter atributos que fornecem informações adicionais sobre um elemento.
                        Por exemplo, o elemento < img> tem o atributo src que especifica o local da imagem a ser
                            exibida.
                            <br><br>
                            Aninhamento: Os elementos HTML podem ser aninhados dentro de outros elementos. Isso
                            significa que você pode colocar um elemento dentro de outro, criando uma estrutura
                            hierárquica. Por
                            exemplo, um parágrafo < p> pode conter texto e também links < a>.
                                    <br><br>
                                    Estrutura do Documento: Um documento HTML típico possui uma estrutura básica que
                                    inclui
                                    um elemento < html> que contém um elemento < head> e um elemento < body>. O < head>
                                                    geralmente contém metadados
                                                    sobre o documento, como o título da página e links para folhas de
                                                    estilo CSS ou scripts JavaScript. O < body>
                                                        contém o conteúdo visível da página, como texto, imagens e
                                                        outros elementos HTML.
        </p>
        <br>
        <div class="row row-cols-1 row-cols-md-2 g-4 video-card">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <iframe width="100%" height="315"
                            src="https://www.youtube.com/embed/XimmximMPnE?si=kVu3E7ZT5dtYFdHV"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <iframe width="100%" height="315"
                            src="https://www.youtube.com/embed/7bi1SLpZO5w?si=EOfjeNbYuDJyGdmv"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <iframe width="100%" height="315"
                            src="https://www.youtube.com/embed/9ByTCcGSIcw?si=FQSXtPHXjNCfvII2"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <iframe width="100%" height="315"
                            src="https://www.youtube.com/embed/9RMMH3Y4rcY?si=eV02BETBuiPWz9Xd"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <p style="font-size: 1.50rem;">
            Renderização: Após o servidor web enviar um documento HTML para um navegador, o navegador interpreta o HTML
            e renderiza o conteúdo de acordo com as instruções fornecidas pelas tags HTML e quaisquer estilos CSS
            associados.
            <br><br>
            Semântica: HTML fornece uma série de elementos semânticos que descrevem o conteúdo da página de forma
            significativa. Por exemplo, < header>, < footer>, < nav>, < article>, < section>, entre outros, ajudam a
                                estruturar o conteúdo de maneira compreensível tanto para os desenvolvedores quanto para
                                os mecanismos de busca.
                                <br><br>
                                Integração Multimídia: HTML suporta a integração de vários tipos de mídia, como imagens,
                                áudio e vídeo, através
                                de elementos específicos, como < img>, < audio> e < video>. Isso permite a criação de
                                            experiências de usuário
                                            ricas e envolventes.
                                            <br><br>
                                            Formulários: HTML fornece elementos para criar formulários interativos na
                                            web, como < input>, < textarea>, < select>,
                                                        entre outros. Esses elementos permitem que os usuários enviem
                                                        informações para os servidores web, facilitando a
                                                        interação e a coleta de dados.
        </p>
        <br><br>
        <a href="area_aluno.php" style="font-size: 1.20rem;" class="botao-gradient">Voltar</a>
</body>

</html>