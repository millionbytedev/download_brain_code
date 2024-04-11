<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilo_ana.css">
</head>
<body>
    <div class="container">
        <h1 class="titulo-centralizado">Minhas Tarefas</h1>
        <!-- Seletor de Disciplinas -->
        <div class="mb-3">
            <label for="selectDisciplina" class="form-label">Selecione a Disciplina:</label>
            <select class="form-select" id="selectDisciplina">
                <option value="todas">Todas</option>
                <option value="matematica">HTML</option>
                <option value="portugues">CSS</option>
                <option value="historia">PHP</option>
                <option value="historia">BANCO DE DADOS</option>
            </select>
        </div>
        <!-- Lista de Tarefas -->
        <div class="row">
            <div class="col">
                <h3 class="fs-3">Novas Tarefas</h3>
                <ul class="list-group" id="novasTarefas">
                    <li class="list-group-item">08/04/2024</li>
                    <li class="list-group-item">15/04/2024</li>
                    <li class="list-group-item">17/04/2024</li>
                </ul>
            </div>
            <div class="col">
                <h3 class="fs-3">Concluídas</h3>
                <ul class="list-group" id="concluidas">
                    <li class="list-group-item">18/03/2024</li>
                    <li class="list-group-item">21/03/2024</li>
                </ul>
            </div>
            <div class="col">
                <h3 class="fs-3">Em Atraso</h3>
                <ul class="list-group" id="emAtraso">
                    <li class="list-group-item">11/04/2024</li>
                </ul>
            </div>
        </div>
        <!-- Detalhes da Tarefa -->
        <div class="row mt-5">
            <div class="col">
                <h4 id="tituloTarefa" class="titulo-centralizado fs-2">Detalhes da Tarefa</h4>
                <div id="conteudoTarefa" class="card">
                    <div class="card-body">
                        Nenhum detalhe selecionado.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const novasTarefas = document.getElementById("novasTarefas");
            const concluidas = document.getElementById("concluidas");
            const emAtraso = document.getElementById("emAtraso");
            const conteudoTarefa = document.getElementById("conteudoTarefa");
            const tituloTarefa = document.getElementById("tituloTarefa");
            // Adiciona evento de mudança para filtrar as tarefas com base na disciplina selecionada
            selectDisciplina.addEventListener("change", function () {
                const disciplinaSelecionada = selectDisciplina.value;
                const todasTarefas = document.querySelectorAll("#tarefasPendentes .list-group-item");
                todasTarefas.forEach(tarefa => {
                    if (disciplinaSelecionada === "todas" || tarefa.classList.contains(disciplinaSelecionada)) {
                        tarefa.style.display = "block";
                    } else {
                        tarefa.style.display = "none";
                    }
                });
            });
            // Adiciona evento de clique para mostrar detalhes da tarefa
            [novasTarefas, concluidas, emAtraso].forEach(ul => {
                ul.addEventListener("click", function (e) {
                    if (e.target && e.target.nodeName == "LI") {
                        const tarefaSelecionada = e.target.textContent;
                        tituloTarefa.textContent = "Detalhes da Tarefa: " + tarefaSelecionada;
                        conteudoTarefa.style.display = "block";
                    }
                });
            });
        });
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</html>