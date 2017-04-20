<?php

    class FabricaPizza
    {

        public function criarPizza($nomePizza)
        {

            $pizza = null;

            switch ($nomePizza) {

                case 'queijo' :
                    $pizza = new PizzaQueijo();
                    break;

                case 'calabresa' :
                    $pizza = new PizzaCalabresa();
                    break;

                case 'atum' :
                    $pizza = new PizzaAtum();
                    break;

                default :
                    $pizza = new PizzaQueijo();

            }

            return $pizza;

        }

    }