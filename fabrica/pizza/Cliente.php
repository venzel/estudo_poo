<?php

    require_once 'FabricaPizza.php';
    require_once 'PizzaQueijo.php';
    require_once 'PizzaCalabresa.php';

    class Cliente {

        public $fabrica;

        //

        public function __construct()
        {
            $this->fabrica = new FabricaPizza();
        }

        //

        public function pedirPizza($nomePizza)
        {

            $pizza = null;

            $pizza = $this->fabrica->criarPizza($nomePizza);

            return $pizza;

        }

    }