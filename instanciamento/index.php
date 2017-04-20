<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instanciamento</title>
</head>
<body>
<pre>
<?php

    require_once 'Atleta.php';
    require_once 'Esporte.php';

    //

    $p = array();

    $p[0] = [
        'nome' => 'André',
        'sexo' => 'm',
        'idade' => 21
    ];

    $p[1] = [
        'nome' => 'Cíntia',
        'sexo' => 'f',
        'idade' => 28
    ];

    //

    $e = array();
    $e[0] = 'Tênis';
    $e[1] = 'Futebol';

    //

    $a = array();
    $a[0] = new Atleta($p[0], $e);
    $a[1] = new Atleta($p[1], $e);

    //

    print_r($a);


?>
</pre>
</body>
</html>