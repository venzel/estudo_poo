<?php

    require_once 'Ingredientes.php';
    require_once 'Pizza.php';

    class PizzaCalabresa extends Ingredientes implements Pizza
    {

        public function ingredientes()
        {
            return parent::getIngredientes();
        }

    }