<?php

require_once('funcao.php');

$valor=isset($_GET['valor'])?$_GET['valor']:null;
$moedaOrigem=isset($_GET['moeda-origem'])?$_GET['moeda-origem']:null;
$moedaConvertida=isset($_GET['moeda-convertida'])?$_GET['moeda-convertida']:null;


/*
if( $moedaOrigem=='real' && $moedaConvertida=='dolar' ) $valorConvertido=valorEmDolar($valor*.19);
if( $moedaOrigem=='peso' && $moedaConvertida=='dolar' ) $valorConvertido=valorEmDolar($valor*.0057);
if( $moedaOrigem=='dolar' && $moedaConvertida=='real') $valorConvertido=valorEmReais($valor*5.22);
if( $moedaOrigem=='peso' && $moedaConvertida=='real') $valorConvertido=valorEmReais($valor*0.030);
if( $moedaOrigem=='real' && $moedaConvertida=='peso') $valorConvertido=valorEmPeso($valor*33.78);
if( $moedaOrigem=='dolar' && $moedaConvertida=='peso') $valorConvertido=valorEmPeso($valor*174.15);
*/
if($moedaOrigem!=null&& $moedaConvertida!=null){
$apiResposta=file_get_contents('https://economia.awesomeapi.com.br/json/last/'.$moedaOrigem.'-'.$moedaConvertida);
$valorConvertido=numeroParaDinheiro($valor*json_decode($apiResposta,true)[strtoupper($moedaOrigem.$moedaConvertida)]['ask'],$moedaConvertida);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
<title>Conversor de Moeda</title>
</head>
<body>
    <h5 id="margin-top">Preencha o valor a ser convertido</h5>
    <form >
        <div class="row justify-content-center g-2 ">
           
            <div class=" col-2">
                <div class="form-floating">
                    <label for="valor"></label>
                    <input type="number" class="form-control" name="valor" required>
                </div>
            </div>
            <div class=" col-2">
                <div class="form-floating">
                    <label for="floatingSelectGrid"></label>
                    <select class="form-select" name="moeda-origem" required >
                    
                    <option selected value="">Escolha a moeda</option>
                    <option value="usd">Dolar</option>
                    <option value="ars">Peso</option>
                    <option value="brl">Real</option>
                    <option value="eur">Euro</option>
                    </select>
                </div>
            </div>        
            <br>
            <h5>Converter para:</h5>
            
            <div class=" col-2">
                <div class="form-floating">
                <label for="floatingSelectGrid"></label>
                    <select class="form-select" name="moeda-convertida" required>
                      
                      <option selected value="">Escolha a moeda</option>
                      <option value="usd">Dolar</option>
                      <option value="ars">Peso</option>
                      <option value="brl">Real</option>
                      <option value="eur">Euro</option>
                    </select>
                </div>
            </div>
        </div>  
        <div class="d-grid gap-2 col-2 mx-auto mt-4">
          <button type="submit" class="btn btn-primary" id="button-primary">
          Converter
          </button>
      </div>  
    </form>
      <?php
if(isset($valorConvertido)) echo '<p>'.$valorConvertido.'</p>';
      ?>
        
  
  </div>
</body>
</html>