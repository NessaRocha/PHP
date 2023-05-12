<?php
session_start();


if (!isset($_SESSION['email']) && !isset($_SESSION['senha'])) {
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location: login-paciente.php');
}



?>
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
<section class="user">


  <br>
  <br>
  <h1>Perceba sua evolução no acompanhamento:</h1>
  <h4>Fique sempre atualizado com os pareceres que os especialistas cadastram em seu histórico</h4>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Data</th>
        <th scope="col">Nome</th>
        <th scope="col">Especialista</th>
        <th scope="col">Histórico</th>
        <th scope="col">...</th>
      </tr>
    </thead>
    <tbody>
      <?php
      require_once('metodos/conexao-db.php');
      $pacienteId = $_SESSION['id'];
      $queryResult = mysqli_query($conexao, "SELECT pareceres.data, especialistas.nome, especialistas.especialidade, pareceres.parecer, pareceres.id FROM pareceres INNER JOIN especialistas ON pareceres.especialista_id=especialistas.id WHERE pareceres.paciente_id=$pacienteId");
      $pareceres = mysqli_fetch_all($queryResult, MYSQLI_ASSOC);
      foreach ($pareceres as $parecer) {
      ?>
        <tr>
          <td scope="col">
            <?php
            $data = strtotime($parecer['data']);
            $dataFormatada = date('d/m/Y', $data);

            echo $dataFormatada;

            ?>
          </td>
          <td scope="col"><?php echo $parecer['nome'] ?></td>
          <td scope="col"><?php echo $parecer['especialidade'] ?></td>
          <td scope="col"><?php echo $parecer['parecer'] ?></td>
          <td scope="col">
            <a href="metodos/excluir-parecer.php?parecer-id=<?php echo $parecer['id'] ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
              </svg>
            </a>
          </td>
        </tr>
      <?php } ?>

    </tbody>
  </table>
  <div class="container mb-4">
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
  <br><br><br><br><br><br><br><br><br><br>
  <?php include 'includes/footer.php' ?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

</section>

</html>