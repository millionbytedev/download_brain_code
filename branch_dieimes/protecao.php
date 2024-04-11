<?php
// Iniciar a sessão se ela ainda não foi iniciada
if (!session_id()) {
    session_start();
}

// Verificar se o usuário está logado como algum tipo de usuário permitido
if (!isset($_SESSION['nome_prof']) && !isset($_SESSION['nome_aluno']) && !isset($_SESSION['nome_adm'])) {
    // Configuração de um alerta personalizado para acesso negado
    echo '<div style="background-color: #f8d7da; color: #721c24; padding: 10px; text-align: center; font-weight: bold;">
        Acesso negado: Você não pode acessar esta página porque não está logado como aluno, professor ou administrador. <a href="login.php" style="color: #721c24; font-weight: bold; text-decoration: underline;">Clique aqui para entrar</a>.
    </div>';

    // Adicionar um redirecionamento automático após alguns segundos
    echo '<script>
        setTimeout(function() {
            window.location.href = "login.php";
        }, 5000); // Redirecionar após 5 segundos
    </script>';

    // Encerrar a execução do script
    exit();
}
?>
