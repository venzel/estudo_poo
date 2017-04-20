<?php
/**
 * Created by PhpStorm.
 * User: pablicio
 * Date: 14/04/2017
 * Time: 11:02
 */

namespace App\DesignPattners\SimpleFactory;


class FabricaConcreta
{
    protected $listaDeTipos;

    public function __construct()
    {
        $this->listaDeTipos = [
            'bicicleta'         => Bicicleta::class,
            'carro'             =>Carro::class
        ];
    }

    public function createVeiculos($tipo)
    {
        if (!array_key_exists($tipo, $this->listaDeTipos)) {
            throw new \InvalidArgumentException("$tipo Não é um veículo válido");
        }

        $className = $this->listaDeTipos[$tipo];

        return new $className();
    }
}