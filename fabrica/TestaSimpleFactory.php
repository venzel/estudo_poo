<?php

namespace App\DesignPattners\SimpleFactory;

class TestaSimpleFactory
{
    public static function main()
    {
        $fabrica = new FabricaConcreta();

        $bicicleta = $fabrica->createVeiculos("bicicleta");

        $bicicleta->driveTo("ceara<br>");

        $carro = $fabrica->createVeiculos("carro");

        $carro->driveTo("Paraiba");
    }
}