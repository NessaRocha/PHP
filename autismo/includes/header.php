<header>
    <style>
        #header {
            position: fixed;
            background-color: rgb(11, 5, 31);
            color: beige;

            width: 100%;
            text-align: center;
        }
    </style>

    <nav class="navbar navbar-expand-lg nav-color" id="header">
        <div class="container-fluid">
            <a href="/index.php" class="navbar-brand">
                <img src="/assets/img/logoo.webp" height="60px" width="80px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active mx-lg-3 nav-color" aria-current="page" href="/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active mx-lg-3 nav-color" aria-current="page" href="/quem-somos.php">Quem somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active mx-lg-3 nav-color" aria-current="page" href="/lei.php">Lei do Autista</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active mx-lg-3 nav-color" aria-current="page" href="/comunidade.php">Comunidade</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-color" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Especialistas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/especialidades/educacao-especial.php"> Educação Especial</a></li>
                            <li><a class="dropdown-item" href="/especialidades/fisioterapeuta.php">Fisioterapeuta</strong></a></li>
                            <li><a class="dropdown-item" href="/especialidades/fonoaudiologo.php">Fonoaudiologo</a></li>
                            <li><a class="dropdown-item" href="/especialidades/neuropediatra.php">Neuropediatra</a></li>
                            <li><a class="dropdown-item" href="/especialidades/psicologo.php">Psicologo</a></li>
                            <li><a class="dropdown-item" href="/especialidades/psicopedagogo.php">Psicopedagogo</a></li>
                            <li><a class="dropdown-item" href="/especialidades/psiquiatra.php"> Psiquiatra</a></li>
                            <li><a class="dropdown-item" href="/especialidades/to.php">Terapeuta Ocupacional</a></li>
                        </ul>

                    </li>
                </ul>


                <?php
                if (isset($_SESSION['id'])) { ?>
                    <li class="nav-item">
                        <a class="btn btn-outline-primary mx-lg-3 nav-color" aria-current="page" href="/metodos/sair.php">Sair</a>
                    </li>
                <?php } else { ?>

                    <li class="nav-item">
                        <a class="btn btn-outline-primary mx-lg-3 nav-color" aria-current="page" href="/login-paciente.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-primary nav-color" aria-current="page" href="/cadastro-paciente.php">Cadastre-se</a>
                    </li>
                <?php } ?>
                </ul>




            </div>

    </nav>

</header>