<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correção de Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilo_ana.css">
</head>
<body>
    <h1 class="titulo-centralizado">Correção de Tarefas</h1>
    <br>
    <div class="table-wrapper">
        <table class="table  table-bordered">
            <thead>
                <tr>
                    <th>Aluno(a)</th>
                    <th>Tarefa</th>
                    <th>Arquivo</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Alice Souza Santos</td>
                    <td>Apresentação sobre História e Evolução do HTML.</td>
                    <td><a href="caminho/para/arquivo_do_aluno1.pdf" target="_blank">Ver Arquivo</a></td>
                    <td><input class="botao-gradient" style="font-size: 1.20rem;" type="submit" value="Corrigir"
                            onclick="corrigirTarefa(this)"></input></td>
                </tr>
                <tr>
                    <td>Davi Silva</td>
                    <td>Comparação de Linguagens de Programação</td>
                    <td><a href="caminho/para/arquivo_do_aluno2.pdf" target="_blank">Ver Arquivo</a></td>
                    <td><input class="botao-gradient" style="font-size: 1.20rem;" type="submit" value="Corrigir"
                            onclick="corrigirTarefa(this)"></input></td>>
                </tr>
                <tr>
                    <td>Kamille Oliveira</td>
                    <td>Apresentação de Ferramentas de Desenvolvimento</td>
                    <td><a href="caminho/para/arquivo_do_aluno2.pdf" target="_blank">Ver Arquivo</a></td>
                    <td><input class="botao-gradient" style="font-size: 1.20rem;" type="submit" value="Corrigir"
                            onclick="corrigirTarefa(this)"></input></td>
                </tr>
                <tr>
                    <td>Maria Madalena Gomes</td>
                    <td>Diagrama de Fluxo para um Algoritmo Simples.</td>
                    <td><a href="caminho/para/arquivo_do_aluno2.pdf" target="_blank">Ver Arquivo</a></td>
                    <td><input class="botao-gradient" style="font-size: 1.20rem;" type="submit" value="Corrigir"
                            onclick="corrigirTarefa(this)"></input></td>
                </tr>
                <!-- Adicione mais linhas conforme necessário -->
            </tbody>
        </table>
    </div>
    <br>
    <br>
    <div id="form-correcao" style="display: none;">
        <form>
            <label for="nome-aluno">Aluno(a):</label>
            <input type="text" id="nome-aluno" readonly>
            <label for="tarefa">Tarefa:</label>
            <textarea id="tarefa" readonly></textarea>
            <label for="correcao">Correção:</label>
            <textarea id="correcao" required></textarea>
            <br>
            <input class="botao-gradient" style="font-size: 1.20rem;" type="submit" value="Salvar">
            <input class="botao-gradient" style="font-size: 1.20rem;" type="submit" value="Cancelar"
                onclick="cancelarCorreção(this)"></input>
        </form>
    </div>
    <script>
        function corrigirTarefa(btn) {
            var row = btn.parentNode.parentNode;
            var aluno = row.cells[0].innerText;
            var tarefa = row.cells[1].innerText;
            document.getElementById('nome-aluno').value = aluno;
            document.getElementById('tarefa').value = tarefa;
            document.getElementById('form-correcao').style.display = 'block';
        }
        function cancelarCorrecao() {
            document.getElementById('form-correcao').style.display = 'none';
        }
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</html>