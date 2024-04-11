<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamada de Presença</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/beatriz.css">
</head>

<body class="light-theme">
    <?php include("../page_prontas_kauan/menu.php"); ?>
    <div class="container text-center">
        <img src="../img/logo_brain_code.png" alt="Logo Brain Code" class="logo-brain-code">
        <div id="quadro-chamada" class="container">
            <h1 class="h1-bea">Chamada de Presença</h1>
            <div class="data-highlight">Data: <input type="date" class="form-control" name="data_alunos"
                    value="2024-03-28"></div>
            <div class="table-responsive"> <!-- Adicionando a classe table-responsive -->
                <table>
                    <thead>
                        <tr>
                            <th>Nome do Aluno</th>
                            <th>Presença 1ª Aula</th>
                            <th>Presença 2ª Aula</th>
                            <th>Presença 3ª Aula</th>
                            <th>Presença 4ª Aula</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="font-size: 1.20rem;">Aluno 1</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" name="presenca_aluno1_aula1"
                                        id="switch_aluno1_aula1">
                                    <label class="form-check-label" for="switch_aluno1_aula1"
                                        style="font-size: 1.20rem;">Presente</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" name="presenca_aluno1_aula2"
                                        id="switch_aluno1_aula2">
                                    <label class="form-check-label" for="switch_aluno1_aula2"
                                        style="font-size: 1.20rem;">Presente</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" name="presenca_aluno1_aula3"
                                        id="switch_aluno1_aula3">
                                    <label class="form-check-label" for="switch_aluno1_aula3"
                                        style="font-size: 1.20rem;">Presente</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" name="presenca_aluno1_aula4"
                                        id="switch_aluno1_aula4">
                                    <label class="form-check-label" for="switch_aluno1_aula4"
                                        style="font-size: 1.20rem;">Presente</label>
                                </div>
                            </td>
                        </tr>
                        <!-- Adicione mais linhas conforme necessário -->
                    </tbody>
                </table>
            </div> <!-- Fechando a div table-responsive -->
            <br><br>
            <a href="area_aluno.php" style="font-size: 1.20rem;" class="botao-gradient">Voltar</a>
            <input class="botao-gradient" style="font-size: 1.20rem;" type="submit" value="Salvar Chamada">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</html>