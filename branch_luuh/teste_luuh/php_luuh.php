<!-- Código de php que o Fernando fez da página cadastrar_adm.php -->

<?php
    include("conexao.php");

  if(isset($_POST['bt_email'])){
    $user = $_POST['bt_user'];
    $email = $_POST['bt_email'];
    $senha = $_POST['bt_senha'];
    $confirmar = $_POST['bt_confirmar'];
    $numero= $_POST['bt_numero'];

    $mysqli->query("INSERT INTO tabela_usuario (user, email, senha, confirmar_senha, telefone) values('$user', '$email', '$senha', '$confirmar', '$numero')") or die($mysqlierrno);

  }

?>

<!-- Código de php que o Dieimes fez da página cadastrar_aluno.php -->

<?php
include("conexao.php");

$mensagem = ''; // Inicializa a variável de mensagem

if(isset($_POST['bt_email'])){
  $user = $_POST['bt_user'];
  $email = $_POST['bt_email'];
  $senha = $_POST['bt_senha'];    
  $confirmarSenha = $_POST['bt_confirmar'];
  $numero= $_POST['bt_numero'];

  // Verificar se as senhas são iguais
  if($senha === $confirmarSenha){
    // Se as senhas coincidem, insere os dados no banco
    if($mysqli->query("INSERT INTO tabela_aluno (nome_aluno, email, senha, nome_mae) values('$user', '$email', '$senha', '$numero')")){
      if($mysqli->affected_rows > 0){
        // Sucesso na inserção
        $mensagem = "<script>alert('Cadastro realizado com sucesso!'); window.location.href = 'login.php';</script>";
      } else {
        // Falha na inserção
        $mensagem = "<script>alert('Erro ao realizar o cadastro!'); window.location.href = 'cadastrar_aluno.php';</script>";
      }
    } else {
      // Erro na query
      $mensagem = "<script>alert('Erro ao realizar o cadastro: " . $mysqli->error . "'); window.location.href = 'cadastrar_aluno.php';</script>";
    }
  } else {
    // Se as senhas não coincidem, exibe uma mensagem de erro
    $mensagem = "<script>alert('As senhas não coincidem!'); window.location.href = 'cadastrar_aluno.php';</script>";
  }
  echo $mensagem; // Exibe a mensagem adequada
}
?>
