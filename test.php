<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="#">Saída</a>
</nav>
<body>
<div class="container-fluid">
    <br/>
    <h2 class="text-center">Resultado</h2>
    <?php
        if(isset($_POST['valor'])) {

            $numeros = array();
            $teste = array();
            $qtd = array();

            foreach ($_POST['valor'] as $key => $valor) {
                $teste[] = $valor;
            }

            echo "<b> N </b> = " . count($teste) . "<br/> <br/>";
            foreach ($teste as $t) {
                echo $t;
                echo "         ";
            }
            echo "<br/> <br/>";

            foreach ($teste as $t) {
                $encontrado = false;

                foreach ($numeros as $numero) {
                    if ($t == $numero) {
                        $encontrado = true;
                        break;
                    }
                }
                if (!$encontrado) {
                    $numeros[] = $t;
                    $qtd[] = 1;
                } else {
                    $qtd[array_search($t, $numeros)] += 1;
                }

            }

            for ($x = 0; $x <= count($numeros) - 1; $x++) {
                echo "<b>" . $numeros[$x] . "</b>  ocorre  " . $qtd[$x];
                echo $qtd[$x] == 1 ? " vez " : " vezes";
                echo "<br/>";

            }
    }
    else{
            echo "nenhum dado foi digitado !";
    }
    ?>

    <br/>
    <br/>
    <a href="index.php" class="btn btn-primary">Nova Verificação</a>

</div>

</body>
</html>



