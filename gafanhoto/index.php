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

        $v = array();

        $v[0] = new Video('Aula gafanhoto 1');
        $v[1] = new Video('Aula gafanhoto 2');
        $v[0] = new Video('Aula gafanhoto 3');

        require_once 'Gafanhoto.php';

        $p = array();

        $p[0] = new Gafanhoto('Marcos', 21, 'm', 'marciano');
        $p[1] = new Gafanhoto('Marcela', 22, 'f', 'marcelinha');
        $p[2] = new Gafanhoto('Arnalda', 25, 'f', 'naldinha');

        print_r($p);

    ?>
    </pre>
</body>
</html>