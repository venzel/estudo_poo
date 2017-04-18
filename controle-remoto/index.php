<?php

    require_once('Controle.php');

    $c = new Controle();

    $c->ligar();
    $c->play();
    $c->setVolume(10);
    $c->setVolumeMinimo(1);
    $c->setVolumeMaximo(30);

    $c->maisVolume(20);
    $c->menosVolume(5);
    $c->ligarMudo();
    $c->desligarMudo();
    $c->pause();

    echo "<pre>";

    $c->mostrarMenu();

    echo "</pre>";


