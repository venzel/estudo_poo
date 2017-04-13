<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modelo gafanhoto</title>
</head>
<body>
    <pre>
    <?php

        require_once 'Video.php';
        require_once 'Gafanhoto.php';
        require_once 'Visualizacao.php';

        $y = array();

        $y[0] = new Video('Aula gafanhoto 1');
        $y[1] = new Video('Aula gafanhoto 2');
        $y[2] = new Video('Aula gafanhoto 3');

        $p = array();

        $p[0] = new Gafanhoto('Marcos', 21, 'm', 'marciano');
        $p[1] = new Gafanhoto('Marcela', 22, 'f', 'marcelinha');
        $p[2] = new Gafanhoto('Arnalda', 25, 'f', 'naldinha');

        $v = array();

        $v[0] = new Visualizacao($p[0], $y[0]);
        $v[1] = new Visualizacao($p[1], $y[1]);
        $v[2] = new Visualizacao($p[2], $y[2]);

        print_r($v);

    ?>
    </pre>
</body>
</html>