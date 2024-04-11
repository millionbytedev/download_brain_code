<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criar Tarefa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style1.css">

</head>

<body class="background2">
  <form action="" method="post">
    <div class="text-center">
      <h1>Criar Tarefas</h1>
    </div>
    <h2>Professor:Dieimes</h2>
    <br>
    <br>
    <div class="mb-3">
      <label for="descricao">Título da Tarefa</label>
      <input type="text" id="Título da Tarefa" name="Título da Tarefa" required>
    </div>
    <br>
    <br>
    <!---descrição--->
    <div class="mb-3">
      <label for="texto" class="label">Descrição:</label>
      <textarea id="texto" name="texto" class="textarea" cols="60" rows="5" placeholder="Digite aqui"></textarea>
    </div>
    <br>
    <br>
    <br>
    <!---selecionar--->
    <p>Selecionar Turma:
      <select id="opcoes" name="opcoes">
        <option value="opcao1">Turma A</option>
        <option value="opcao2">Turma B</option>
        <option value="opcao3">Turma C</option>
      </select>
    </p>
      <div class="mb-3">
        <label for="eventDate">Data de Entrega:</label>
        <input type="date" id="eventDate" required>
      </div>
    <br>
    <br>
    <button class="btn btn-primary" type="button">Postar Tarefa</button>
    <button class="btn btn-primary" type="button">Salvar Rascunho</button>
    <button class="btn btn-primary" type="button">Voltar</button>
  </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>