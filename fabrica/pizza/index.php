<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fábrica de pizza</title>
</head>
<body>
<pre>
<?php

    require_once 'Cliente.php';

    $c = new Cliente();

    $i = $c->pedirPizza('calabresa');

    $i->setIngredientes('Calabresa + Borda de catupiri');

    $pizza = $i->ingredientes();

    echo $pizza;



?>
</pre>
</body>
</html>