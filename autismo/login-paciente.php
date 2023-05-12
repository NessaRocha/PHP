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

<section class="login">
    <ul class="nav nav-tabs" id="myTab" role="tablist">

        <div class="container col-11 col-md-9" id="form-container">
            <div class="row align-items-center ">
                <div class="col-md-6">
                    <h2 class="login">LOGIN PACIENTE: </h2>


                    <form action="metodos/login-paciente.php" method="POST">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu melhor e-mail">
                            <label for="email" class="form-label">Digite seu e-mail</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
                            <label for="senha" class="form-label">Digite sua senha</label>
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Acessar">
                    </form>

                </div>
                <div class="col-md-6 order-md-1">
                    <div class="col-12">
                        <img src="assets/img/loginpaciente.svg" height="350px" width="400px" alt="Entrar na plataforma" class="img-fluid">
                    </div>
                    <div class="col-12" id="link-container">
                        <a class="btn btn-secondary" href="./login-especialista.php" role="button">SOU ESPECIALISTA</a>
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