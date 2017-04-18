<?php

require_once('Animais.php');

class Cachorro extends Animais
{

    private static $raca = 'Labrador';

    public static function raca() {
        return self::$raca;
    }

    public function cor() {
        return $this->getIdade();
    }

    public function somEmitido()
    {
        echo 'au au!';
    }

}