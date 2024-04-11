<?php
    // Verifica se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Conecta ao banco de dados (substitua os valores de conexão conforme necessário)
        $mysqli = new mysqli("localhost", "tarefa", "arquivo", "criar_tarefa");
    
        // Verifica a conexão
        if ($mysqli->connect_error) {
            die("Conexão falhou: " . $mysqli->connect_error);
        }
    
        // Obtém os dados do formulário
        $comentario = $_POST["comentario"];
        $descricao = $_POST["descricao"];
    
        // Verifica se um arquivo foi enviado
        if(isset($_FILES["arquivo"]) && $_FILES["arquivo"]["error"] == 0) {
            $arquivo_nome = $_FILES["arquivo"]["name"];
            $arquivo_tmp = $_FILES["arquivo"]["tmp_name"];
    
            // Lê o conteúdo do arquivo
            $arquivo_conteudo = file_get_contents($arquivo_tmp);
    
            // Prepara a consulta SQL para inserir a tarefa no banco de dados
            $sql = "INSERT INTO tarefa (comentario, descricao, arquivo_nome, arquivo_conteudo) VALUES (?, ?, ?, ?)";
    
            // Prepara a declaração
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("ssss", $comentario, $descricao, $arquivo_nome, $arquivo_conteudo);
    
            // Executa a consulta
            if ($stmt->execute()) {
                echo "Tarefa enviada com sucesso.";
            } else {
                echo "Erro ao enviar tarefa: " . $mysqli->error;
            }
    
            // Fecha a declaração e a conexão
            $stmt->close();
            $mysqli->close();
        } else {
            echo "Erro ao enviar arquivo.";
        }
    }
?>

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
<?php include("../page_prontas_kauan/menu.php"); ?>
<br>
<body class="background2">
  <div class="caixa2">
  <br>
  <br>
    <h1 class="text-center">Criar Tarefa</h1>
    <form>
      <div class="mb-3">
        <label for="titulo" class="form-label">Título da Tarefa</label>
        <input type="text" class="form-control form-control-lg" id="titulo" required>
      </div>
      <div class="mb-3">
        <label for="descricao" class="form-label">Descrição da Tarefa</label>
        <textarea class="form-control form-control-lg" id="descricao" rows="5"></textarea>
      </div>
      <div class="mb-3">
        <label for="turma" class="form-label">Turma</label>
        <select class="form-select form-select-lg" id="turma">
          <option value="turma1">Turma A</option>
          <option value="turma2">Turma B</option>
          <option value="turma3">Turma C</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="data-entrega" class="form-label">Data de Entrega</label>
        <input type="date" class="form-control form-control-lg" id="data-entrega" required>
      </div>
      <div class="d-grid gap-2">
        <button class="btn btn-primary" type="submit">Criar Tarefa</button>
        <button class="btn btn-primary" type="submit">Salvar Rascunho</button>
        <button class="btn btn-primary" type="submit">Voltar</button>
      </div>
     
    </form>
  </div>
  <br>
  <br>
  <?php include "footer2.php" ; ?>
 
 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</html>