<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon (3).ico" type="image/x-icon" />
    <script src="https://kit.fontawesome.com/06ff3df78e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/login.css">


    <title>Integra Autista</title>
</head>
<?php include 'includes/header.php' ?>
<section class="cadastro">


    <div class="container col-11 col-md-9" id="form-container">
        <div class="row align-items-center ">
            <div class="col-md-12">
                <h1>Conecte-se com seu Paciente</h1>
                <h2>Mantenha o histórico junto ao seu paciente para observar a evolução do acompanhamento</h2>

                <?php if (isset($_SESSION['adicionar_parecer_com_sucesso'])) { ?>

                    <div class="alert alert-success" role="alert">
                        <?php echo $_SESSION['adicionar_parecer_com_sucesso'];
                        unset($_SESSION['adicionar_parecer_com_sucesso']); ?>
                    </div>
                <?php } ?>
                <?php if (isset($_SESSION['adicionar_parecer_com_erro'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_SESSION['adicionar_parecer_com_erro'];
                        unset($_SESSION['adicionar_parecer_com_erro']); ?>
                    </div>
                <?php } ?>

                <form action="metodos/adicionar-parecer.php" method="POST">

                    <div class="col-md">
                        <div>
                            <label for="floatingTextarea1">Paciente</label>

                            <?php
                            require_once('metodos/conexao-db.php');
                            $queryResult = mysqli_query($conexao, "SELECT id,nome FROM pacientes ORDER BY nome ASC");
                            $listaDePacientes = mysqli_fetch_all($queryResult, MYSQLI_ASSOC);
                            ?>
                            <select name="paciente-id" id="floatingTextarea1" class="form-select" aria-label="Default select example">
                                <?php foreach ($listaDePacientes as $paciente) { ?>
                                    <option value="<?php echo $paciente['id']; ?>"><?php echo $paciente['nome']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div>
                            <label for="floatingTextarea2">Parecer</label>
                            <textarea name="parecer" class="form-control" placeholder="Descreva para seu paciente um parecer e mantenha um acompanhamento mais eficiente mantendo todos os históricos." id="floatingTextarea2" style="height: 100px"></textarea>

                        </div>
                    </div>
                    <br>

                    <input type="submit" name="submit" class="btn btn-primary" value="Enviar ao PACIENTE">

                </form>

            </div>
        </div>
    </div>
</section>
<?php include 'includes/footer.php' ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>