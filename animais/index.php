<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudos de POO</title>
</head>
<body>
<pre>
<?php

    require_once('Cachorro.php');
    require_once('Tartaruga.php');

    $c = new Cachorro();
    $c->setNome('Estrela');
    //$c->somEmitido();

    $t = array();

    $t[0] = new Tartaruga();

    print_r($t);

    //echo $t[0]->somEmitido();


?>
</pre>
</body>
</html>