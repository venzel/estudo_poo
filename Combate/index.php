<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Combate</title>
</head>
<body>
<pre>
<?php

    require_once 'Lutador.php';
    require_once 'Luta.php';

    $l = array();

    $l[0] = new Lutador(
                'Brejeira',
                'Pablício',
                'Brasil',
                '24',
                '1,72',
                75, // peso
                3,  // vitorias
                1,  // derrotas
                0   // empates
            );

    $l[1] = new Lutador(
        'Recruta',
        'Rauni',
        'Japão',
        '22',
        '1,75',
        75, // peso
        3,  // vitorias
        1,  // derrotas
        0   // empates
    );

    $l[0]->campeonato();

    $CCB = new Luta();

    $CCB->marcarLuta($l[0], $l[1]);

    $CCB->lutar();

    $l[0]->status();

    $l[1]->status();

?>
</pre>
</body>
</html>