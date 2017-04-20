<?php
/**
 * Created by PhpStorm.
 * User: pablicio
 * Date: 14/04/2017
 * Time: 11:01
 */

namespace App\DesignPattners\SimpleFactory;


class Bicicleta implements InterfaceVeiculo
{
    public function driveTo($destino){
        echo "A bicicleta vai pra: ".$destino;
    }
}