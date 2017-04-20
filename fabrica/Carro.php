<?php
/**
 * Created by PhpStorm.
 * User: pablicio
 * Date: 14/04/2017
 * Time: 11:01
 */

namespace App\DesignPattners\SimpleFactory;


class Carro implements InterfaceVeiculo
{
    public function driveTo($destino){
        echo "O carro vai pra: ".$destino;
    }
}