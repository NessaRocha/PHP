<!-- listagem de registros-->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="/views/css/index.css" />
    <title>Comentarios</title>
</head>
<?php include 'header.php'; ?>
<div class="comment">
    <div class=" form-floating mb-3 mt-5 col-6 mx-auto">
        <h2>Sua opinião é muito importante.</h2>
        <p>Queremos saber mais sobre o que acham de nossos serviços e produtos.</p>

        <form method="POST" action="/">
            <div class=" col-6 ">
                <label for="nome">Nome</label>
                <input value="<?= $objComment['name'] ?>" type="text" name="nome" class="form-control">
            </div>
            <div class="mb-5 col-6 ">
                <label for="cidade">Cidade</label>
                <input value="<?= $objComment['cidade'] ?>" type=" text" name="cidade" class="form-control">
            </div>
            <textarea placeholder="Deixe seu comentario:" name="comentario" rows="6" cols="60" <?= $objComment['comentario'] ?>></textarea>
            <br><br>
            <div class="d-grid gap-2 col-6">
                <button class="btn btn-primary" type="submit">ENVIAR</button>
            </div>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>

</html>