<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon (3).ico" type="image/x-icon" />
    <script src="https://kit.fontawesome.com/06ff3df78e.js" crossorigin="anonymous"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">


    <title>Integra Autista</title>
</head>
<?php include 'includes/header.php' ?>

<section class="cadastro">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <div class="container col-11 col-md-9" id="form-container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-2">
                    <h2>CADASTRO ESPECIALISTA</h2>
                    <?php
                    session_start();
                    if (isset($_SESSION['cadastro_erro'])) {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            <?php
                            echo $_SESSION['cadastro_erro'];
                            unset($_SESSION['cadastro_erro']);
                            ?>
                        </div>
                    <?php } ?>

                    <form action="metodos/cadastrar-especialista.php" method="POST">
                        <div class="form-floating mb-3">
                            <?php if (isset($_SESSION['dados'])) { ?>
                                <input type="text" class="form-control" name="nome" required value="<?php echo $_SESSION['dados']['nome'] ?>" id="nome" placeholder="Digite o seu nome">
                            <?php } else { ?>
                                <input type="text" class="form-control" name="nome" required id="nome" placeholder="Digite o seu nome">
                            <?php } ?>
                            <label for="nome" class="form-label">Digite o seu nome</label>
                        </div>
                        <div class="form-floating mb-3">
                            <?php if (isset($_SESSION['dados'])) { ?>
                                <input type="text" class="form-control" name="sobrenome" required value="<?php echo $_SESSION['dados']['sobrenome'] ?>" id="sobrenome" placeholder="Digite o seu sobrenome">
                            <?php } else { ?>
                                <input type="text" class="form-control" name="sobrenome" required id="sobrenome" placeholder="Digite o seu sobrenome">
                            <?php } ?>
                            <label for="sobrenome" class="form-label">Digite o seu sobrenome</label>
                        </div>
                        <div class="form-floating mb-3">
                            <?php if (isset($_SESSION['dados'])) { ?>
                                <input list="especialidades" type="text" class="form-control" name="especialidade" required value="<?php echo $_SESSION['dados']['especialidade'] ?>" id="especialidade" placeholder="Digite sua especialidade">
                            <?php } else { ?>
                                <input list="especialidades" type="text" class="form-control" name="especialidade" required id="especialidade" placeholder="Digite sua especialidade">
                            <?php } ?>
                            <label for="especialidade" class="form-label">Digite sua especialidade</label>
                            <datalist id="especialidades">
                                <option> Educação Especial </option>
                                <option> Fisioterapeuta </option>
                                <option> Fonoaudiologo </option>
                                <option> Neuropediatra </option>
                                <option> Psicologo </option>
                                <option> Psicopedagogo </option>
                                <option> Psiquiatra </option>
                                <option> Terapeuta Ocupacional </option>
                            </datalist>
                        </div>
                        <div class="form-floating mb-3">
                            <?php if (isset($_SESSION['dados'])) { ?>
                                <input type="email" class="form-control" name="email" required value="<?php echo $_SESSION['dados']['email'] ?>" id="email" placeholder="Digite o seu e-mail">
                            <?php } else { ?>
                                <input type="email" class="form-control" name="email" required id="email" placeholder="Digite o seu e-mail">
                            <?php } ?>
                            <label for="email" class="form-label">Digite o seu e-mail</label>
                        </div>
                        <div class="form-floating mb-3">
                            <?php if (isset($_SESSION['dados'])) { ?>
                                <input type="password" class="form-control" name="senha" required value="<?php echo $_SESSION['dados']['senha'] ?>" id="senha" placeholder="Cadastre sua senha">
                            <?php } else { ?>
                                <input type="password" class="form-control" name="senha" required id="senha" placeholder="Cadastre sua senha">
                            <?php } ?>
                            <label for="senha" class="form-label">Cadastre sua senha</label>
                        </div>
                        <div class="form-floating mb-3">
                            <?php if (isset($_SESSION['dados'])) { ?>
                                <input type="password" class="form-control" name="confirmar-senha" required value="<?php echo $_SESSION['dados']['confirmar-senha'] ?>" id="confirmar-senha" placeholder="Confirme sua senha">
                            <?php } else { ?>
                                <input type="password" class="form-control" name="confirmar-senha" required id="confirmar-senha" placeholder="Confirme sua senha">
                            <?php } ?>
                            <label for="confirmar-senha" class="form-label">Confirme sua senha </label>
                        </div>
                        <div class="mb-3">
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" value="" id="agree-form" name="agree-form">
                                <label for="agree-form" class="form-check-label">Você aceita os <a href="#">termos de
                                        serviço</a></label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" checked id="newsletter" name="newsletter">
                                <label for="newsletter" class="form-check-label">Aceita receber as nossas
                                    newsletter</label>
                            </div>
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Cadastrar">
                    </form>
                    <?php unset($_SESSION['dados']); ?>
                </div>
                <div class="col-md-6">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <img src="assets/img/especialista.svg" height="350px" width="400px" alt="Cadastro da plataforma" class="img-fluid">
                        </div>
                        <div class="col-12" id="link-container">
                            <a class="btn btn-secondary" href="./cadastro-paciente.php" role="button">SOU PACIENTE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </ul>
</section>
<?php include 'includes/footer.php' ?>

</html>