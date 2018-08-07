<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" src="jquery-3.3.1.min.js"></script>


</head>


<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="#">Entrada</a>
</nav>
<body>
<div class="col-md-12 row ">
    <div class="col-md-6 container">
        <br/>
        <h2>Adicionar número</h2>
        <input id="numero" class="form-control col-md-6" type="number" min="0" required data-togle="popover" title="números da lista" data-content="digite um número do vez e adicione" placeholder="digite o número">
        <br/>
        <button id="buttom" class="btn btn-primary" >Adicionar</button>
    </div>
    <div class="col-md-6">
        <br/>
        <form action="test.php" method="post">
            <h2>Valores</h2>
            <button id="verificar" class="btn btn-primary" type="submit" disabled>verificar</button>

            <div class="container">
                <ul>
                    <div class="inner">

                    </div>
                </ul>
            </div>

        </form>

        <script type="text/javascript" src="script.js"></script>
    </div>

</div>
</body>
</html>