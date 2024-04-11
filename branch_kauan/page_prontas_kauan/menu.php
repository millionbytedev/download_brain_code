<?php
    
    if (!isset($_SESSION)) {
        session_start();

        /*
       $aluno_logado= $_SESSION['id_aluno'] Depois
       $prof_logado= $_SESSION['id_nome_prof']
       $ADM_logado= $_SESSION['id_ADM']
       
       */
    }
    
    /* $id = $_SESSION['id_login_adm']; */


    
        /*Para sair da sessão utilizar esse código:
    <?php
           if(!isset($_SESSION)) {
            session_start();
        }
     
        session_destroy();
     
        header("Location: ../page/index1.php");
    ?>

*/
?>

<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-code-slash"
                viewBox="0 0 16 16">
                <path
                    d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0m6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0" />
            </svg>
            BrainCode
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
            aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h2 class="offcanvas-title" id="offcanvasDarkNavbarLabel">BrainCode</h2>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <!-- ########## ########## Começa aluno ########## ##########-->
                <?php
                        if(isset($aluno_logado)){
                    ?>
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">
                            <h5>Aluno</h5>
                        </a>
                        <a class="nav-link" href="Home.php">
                            <h5>Home</h5>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <h5>Conteúdos</h5>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="html.php">HTML</a></li>
                            <li><a class="dropdown-item" href="css.php">CSS</a></li>
                            <li><a class="dropdown-item" href="php.php">PHP</a></li>
                            <li><a class="dropdown-item" href="java.php">JAVA</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Outra coisa aqui</a></li>
                        </ul>
                    <li class="nav-item">
                        <a class="nav-link" href="perfil_aluno.php">
                            <h5>Perfil</h5>
                        </a>
                    </li>
                    <li class="nav-item">
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <a class="nav-link" href="perfil_aluno.php">
                        <h5>Consultar Atividades</h5>
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Notificações.php">
                            <h5>Notificações</h5>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sair_conta.php">
                            <h5>Sair da Conta</h5>
                        </a>
                    </li>
                </ul>
                <?php
                        }
                    ?>
                <!-- ########## ########## Fim do aluno ########## ##########-->

                <!-- ########## ########## Começa Professor ########## ##########-->
                <?php
                        if(isset($prof_logado)){
                    ?>
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">
                            <h5>Professor</h5>
                        </a>
                        <a class="nav-link" href="perfil_aluno.php">
                            <h5>Home</h5>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="perfil_prof.php">
                            <h5>Perfil</h5>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="perfil_aluno.php">
                            <h5>Turmas</h5>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sair_conta.php">
                            <h5>Sair da Conta</h5>
                        </a>
                    </li>
                </ul>
                <?php
                        }
                    ?>
                <!-- ########## ########## Fim do Professor ########## ##########-->

                <!-- ########## ########## Começa ADM ########## ##########-->
                <?php
                        if(isset($ADM_logado)){
                    ?>
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">
                            <h5>ADM</h5>
                        </a>
                        <a class="nav-link" href="perfil_aluno.php">
                            <h5>Home</h5>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="perfil_prof.php">
                            <h5>Consultar</h5>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="perfil_prof.php">
                            <h5>Cadastrar Matéria</h5>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="perfil_aluno.php">
                            <h5>Turmas</h5>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sair_conta.php">
                            <h5>Sair da Conta</h5>
                        </a>
                    </li>
                    <!-- ########## ########## Fim do Professor ########## ##########-->
                </ul>
                <?php
                        }
                    ?>
                <!-- ########## ########## Fim do ADM ########## ##########-->

                <!-- ########## ########## Começa Página Inicial ########## ##########-->

                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item dropdown">
                        <a class="nav-link active" aria-current="page" href="">
                            <h4>Página Inicial</h4>
                        </a>
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <h5>Sou Aluno</h5>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="../page_prontas_lorena/login.php">Login</a></li>
                            <li><a class="dropdown-item" href="../test/cadastrar_aluno.php">Cadastrar-se</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <h5>Sou Professor</h5>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="../page_prontas_lorena/login.php">Login</a></li>
                            <li><a class="dropdown-item" href="../teste_Kauan/cadastro_professor.php">Cadastrar-se</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</nav>