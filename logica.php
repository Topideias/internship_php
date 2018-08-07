<?php
    $var_entrada = $_POST["entrada"];
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lógica</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="meu_css.css">
</head>
<body>
<nav class="navbar navbar-light bg-primary" id="menu_principal">
    <a class="navbar-brand" href="./">Lógica</a>
</nav>
<section>
    <div class="container">
    <h1><?php echo "Valor de Entrada: " . $var_entrada ?></h1>
        <form action="resultado.php" method="post">
            <?php 
                for ($i = 0; $i < $var_entrada; $i++) {
            ?>
                    <label>Digite <?= $i+1 ?>° valor: </label>
                    <input type="number" name="<?=$i?>" required></br>             
            <?php
            }
            ?>
            <input type="number" name="entrada" required value="<?=$var_entrada?>" style="display: none;">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <a type="button" href="./" class="btn btn-warning">Voltar</a>
        </form>     
    </div>
</section>
</body>
</html>