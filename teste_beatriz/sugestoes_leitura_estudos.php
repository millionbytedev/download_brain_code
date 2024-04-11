<?php
    include("conexao.php");
 
    // Consulta todos os registros
    $sql_consultar_sugestoes = "SELECT * FROM tabela_sugestoes";
    $resultado = $mysqli->query($sql_consultar_sugestoes);
   
    if (!$resultado) {
        die("Erro na consulta: " . $mysqli->error);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sugestões de Leitura e Estudo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/beatriz.css">
</head>

<body class="light-theme">
    <?php include("../page_prontas_kauan/menu.php"); ?>
    <div class="container">
        <img src="../img/logo_brain_code.png" alt="Logo Brain Code" class="logo-brain-code">
        <h1 class="h1-bea">Sugestões de Leitura e Estudo</h1>
        <p style="font-size: 1.50rem;">Aqui estão algumas sugestões de leitura e estudo para aprimorar seus
            conhecimentos:</p>
        <h2 class="h2-bea">Livros</h2>
        <ul class="bolinhas-sugestoes">
            <li class="lista-sugestoes"><a style="font-size: 1.25rem;"
                    href="https://ler.amazon.com.br/kp/embed?linkCode=kpd&asin=B00MT5B6UC&tag=lp-ler-20&reshareId=YS42570BE8GB4S4PPQ56&reshareChannel=system">HTML
                    a partir do zero - Alfredo Limongi, Edson da Silva Bezerra</a></li>
            <li class="lista-sugestoes"><a style="font-size: 1.25rem;"
                    href="https://ler.amazon.com.br/kp/embed?linkCode=kpd&asin=B08DXJ66SL&tag=lp-ler-20&reshareId=RFVQAJYAJ2CC5AD42SZS&reshareChannel=system">CSS3:
                    O guia completo do Flexbox (Quebrando as Regras do CSS) - Dorian Torres</a></li>
            <li class="lista-sugestoes"><a style="font-size: 1.25rem;"
                    href="https://ler.amazon.com.br/kp/embed?linkCode=kpd&asin=B00HP3EAP6&tag=lp-ler-20&reshareId=8E92ZQRW8J5GKAZ8CYRV&reshareChannel=system">PHP
                    a partir do zero - Alfredo Limongi, Edson da Silva Bezerra</a></li>
            <li class="lista-sugestoes"><a style="font-size: 1.25rem;"
                    href="https://ler.amazon.com.br/kp/embed?linkCode=kpd&asin=B07XKDYFDH&tag=lp-ler-20&reshareId=5QMTCY174Z04HRANXRXN&reshareChannel=system">Banco
                    de Dados - William Pereira Alves</a></li>
        </ul>
        <h2 class="h2-bea">Artigos</h2>
        
        <ul class="bolinhas-sugestoes">
            <li class="lista-sugestoes"><a style="font-size: 1.25rem;"
                    href="https://developer.mozilla.org/pt-BR/docs/Web/HTML/Element/article">Artigo 1 - HTML</a></li>
            <li class="lista-sugestoes"><a style="font-size: 1.25rem;" href="https://developer.mozilla.org/pt-BR/docs/Web/CSS">Artigo 2 -
                    CSS</a></li>
            <li class="lista-sugestoes"><a style="font-size: 1.25rem;" href="https://developer.mozilla.org/pt-BR/docs/Glossary/PHP">Artigo 3 -
                    PHP</a></li>
            <li class="lista-sugestoes"><a style="font-size: 1.25rem;"
                    href="https://developer.mozilla.org/pt-BR/docs/Learn/Server-side/Express_Nodejs/mongoose">Artigo 4 -
                    Banco de Dados</a></li>
        </ul>
        <h2 class="h2-bea">Vídeos</h2>
        <ul class="bolinhas-sugestoes">
            <li class="lista-sugestoes"><a style="font-size: 1.25rem;"
                    href="https://www.youtube.com/playlist?list=PLHz_AreHm4dlAnJ_jJtV29RFxnPHDuk9o">Curso de HTML5
                    Completo e GRÁTIS - Curso em Vídeo</a></li>
            <li class="lista-sugestoes"><a style="font-size: 1.25rem;"
                    href="https://www.youtube.com/playlist?list=PL2Fdisxwzt_f5C7Mv0kg1EAHhy2VJLf1c">Curso CSS completo -
                    Programação Web</a></li>
            <li class="lista-sugestoes"><a style="font-size: 1.25rem;"
                    href="https://www.youtube.com/playlist?list=PLHz_AreHm4dm4beCCCmW4xwpmLf6EHY9k">Curso de PHP para
                    iniciantes - Curso em Vídeo</a></li>
            <li class="lista-sugestoes"><a style="font-size: 1.25rem;"
                    href="https://www.youtube.com/playlist?list=PLHz_AreHm4dkBs-795Dsgvau_ekxg8g1r">Curso de Banco de
                    Dados (MySql) - Curso em Vídeo</a></li>
        </ul>
       
        <p style="font-size: 1.50rem;">Esperamos que esses recursos sejam úteis para o seu aprendizado!</p>
        <br><br>
        <a href="area_aluno.php" style="font-size: 1.15rem; width: 165px;"
            class="btn btn-secondary botao-gradient">Voltar</a>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</html>
<?php
// Itera sobre os resultados e exibe as sugestões
if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        echo "<p>Título: " . $row["titulo"] . "<br>Categoria: " . $row["categoria"] . "<br>Link: <a href='" . $row["link"] . "'>" . $row["link"] . "</a></p>";
    }
} else {
    echo "<p>Nenhuma sugestão encontrada.</p>";
}

$mysqli->close();
?>