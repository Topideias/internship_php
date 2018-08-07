<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="meu_css.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light bg-primary" id="menu_principal">
    <a class="navbar-brand" href="./">Resultado</a>
</nav>
<div class="container">
    <div class="row col-md-12">
        <h1>Resultado<i class="fab fa-earlybirds"></i></h1>
    </div>
<?php
$var_entrada = $_POST["entrada"];
$lista = array ();
    for ($j = 0; $j < $var_entrada; $j++) {
    array_push($lista, $_POST[$j]);
    }
$valores_lista = array_count_values($lista);
    foreach($valores_lista AS $key => $val) {    
        if($val > 1) {
        echo "<h2>$key ocorre $val vezes <br></h2>";
        }else {
        echo "<h2>$key ocorre $val vez <br></h2>";
        }   
    }
?>  
<a type="button" href="./" class="btn btn-warning">Voltar</a>
</div>

</body>
</html>
