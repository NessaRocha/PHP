<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon (3).ico" type="image/x-icon" />
    <script src="https://kit.fontawesome.com/06ff3df78e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">



    <title>Integra Autista</title>
</head>
<?php include 'includes/header.php' ?>

<section class="cadastro">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <div class="container col-11 col-md-9" id="form-container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>CADASTRO PACIENTE</h2>

                    <form action="metodos/cadastrar-paciente.php" method="POST">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nome" id="name" placeholder="Digite o seu nome">
                            <label for="name" class="form-label">Digite o seu nome</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="sobrenome" id="lastname" placeholder="Digite o seu sobrenome">
                            <label for="lastname" class="form-label">Digite o seu sobrenome</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Digite o seu e-mail">
                            <label for="email" class="form-label">Digite o seu e-mail</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="senha" id="password" placeholder="Cadastre sua senha">
                            <label for="password" class="form-label">Cadastre sua senha</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="confirmar-senha" id="confirmpassword" placeholder="Confirme sua senha">
                            <label for="password" class="form-label">Confirme sua senha </label>
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
                </div>
                <div class="col-md-6">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <img src="assets/img/paciente.svg" height="350px" width="400px" alt="Cadastro da plataforma" class="img-fluid">
                        </div>
                        <div class="col-12" id="link-container">
                            <a class="btn btn-secondary" href="./cadastro-especialista.php" role="button">SOU ESPECIALISTA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <?php include 'includes/footer.php' ?>

    </ul>
</section>

</html>