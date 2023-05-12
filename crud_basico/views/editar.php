<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="index.css" />
    <title>Cadastro</title>
</head>
<?php include 'header.php'; ?>

<body>
    <form method="POST" action="/edit-data">
        <input type="hidden" name="id" value="<?= $client['id'] ?>">
        <div class=" form-floating mb-3 mt-5 col-6 mx-auto">
            <input type="text" name="nome" value="<?= $client['name'] ?>" class="form-control">
            <label for="nome">Name</label>
        </div>
        <div class="form-floating mb-3 col-6 mx-auto">
            <input type="email" name="email" value="<?= $client['email'] ?>" class="form-control">
            <label for="email">Email</label>
        </div>
        <div class="form-floating mb-3 col-6 mx-auto">
            <input type="text" name="telefone" value="<?= $client['phone'] ?>" class="form-control">
            <label for="telefone">Phone</label>
        </div>
        <div class="d-grid gap-2 col-4 mx-auto">
            <button class="btn btn-primary" type="submit">Register</button>
        </div>
    </form>




</body>

</html>