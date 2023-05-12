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

        <form method="POST" action="/store-received-comment">
            <div class=" col-6 ">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control">
            </div>
            <div class="mb-5 col-6 ">
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" class="form-control">
            </div>
            <textarea placeholder="Deixe seu comentario:" name="comentario" rows="6" cols="60"></textarea>
            <br><br>
            <div class="d-grid gap-2 col-6">
                <button class="btn btn-primary" type="submit">ENVIAR</button>
            </div>
        </form>
    </div>
</div>
<table class="table caption-top">
    <caption>Lista de COMENTÁRIO</caption>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Cidade</th>
            <th scope="col">Comentario</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($arrComments as $objComment) : ?>
            <tr>
                <td><?= $objComment['id'] ?></td>
                <td><?= $objComment['name'] ?></td>
                <td><?= $objComment['cidade'] ?></td>
                <td><?= $objComment['text'] ?></td>
                <td class="editar">
                    <a class=" btn btn-sm btn-secondary" href="/edit-comment?id=<?= $objComment['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg> </a>
                </td>
                <td class="excluir">
                    <a class=" btn btn-sm btn-danger" href=""><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                        </svg></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>



<?php include 'footer.php'; ?>

</html>