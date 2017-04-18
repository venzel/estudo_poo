<?php

    interface Controlador {

        public function mostrarMenu();
        public function ligar();
        public function desligar();
        public function maisVolume();
        public function menosVolume();
        public function ligarMudo();
        public function desligarMudo();
        public function play();
        public function pause();

    }