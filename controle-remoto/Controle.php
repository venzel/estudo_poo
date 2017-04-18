<?php

    require_once('Controlador.php');

    class Controle implements Controlador {

        private $ligado;
        private $volume;
        private $volumeMinimo;
        private $volumeMaximo;
        private $tocando;

        public function __construct()
        {
            $this->ligado = false;
            $this->volume = 10;
            $this->volumeMinimo = 1;
            $this->volumeMaximo = 20;
            $this->tocando = false;
        }

        public function getLigado()
        {
            return $this->ligado;
        }

        public function setLigado($ligado)
        {
            $this->ligado = $ligado;
        }

        public function getVolume()
        {
            return $this->volume;
        }

        public function setVolume($volume)
        {
            $this->volume = $volume;
        }

        public function getVolumeMinimo()
        {
            return $this->volumeMinimo;
        }

        public function setVolumeMinimo($volumeMinimo)
        {
            $this->volumeMinimo = $volumeMinimo;
        }

        public function getVolumeMaximo()
        {
            return $this->volumeMaximo;
        }

        public function setVolumeMaximo($volumeMaximo)
        {
            $this->volumeMaximo = $volumeMaximo;
        }

        public function getTocando()
        {
            return $this->tocando;
        }

        public function setTocando($tocando)
        {
            $this->tocando = $tocando;
        }

        //

        public function mostrarMenu()
        {

            echo "*********** Painel Controle Remoto **********</br></br>";

            $l = $this->getLigado() ? "Sim" : "Não";
            $t = $this->getTocando() ? "Sim" : "Não";

            echo "Ligado: ".$l."</br>";
            echo "Tocando: ".$t."</br>";

            if ($this->getLigado() && $this->getTocando()) {

                echo "Volume: ";

                if ($this->getVolume() <= 0) {

                    echo $this->getVolume()." (mudo)";

                } else {

                    for ($i = 1; $i <= $this->getVolume(); $i++) {
                        echo "| ";
                    }

                    echo "(" . $this->getVolume() . ")</br>";

                }

            }

        }

        public function ligar()
        {
            $this->setLigado(true);
        }

        public function desligar()
        {
            $this->setLigado(false);
        }

        public function maisVolume($valor = 1)
        {

            $volume = $this->getVolume();

            $volumeMaximo = $this->getVolumeMaximo();

            if ($this->getTocando()) {

                $valor = ($volume+$valor) >= $volumeMaximo ? $volumeMaximo : $volume+$valor;

                $this->setVolume($valor);

            }

        }

        public function menosVolume($valor = 1)
        {

            $volume = $this->getVolume();

            $volumeMinimo = $this->getVolumeMinimo();

            if ($this->getTocando()) {

                $valor = ($volume + $valor) <= $volumeMinimo ? $volumeMinimo : $volume - $valor;

                $this->setVolume($valor);

            }

        }

        public function ligarMudo()
        {
            if ($this->getLigado() && $this->getVolume() > 0)
                $this->setVolume(0);
        }

        public function desligarMudo()
        {
            if ($this->getLigado() && $this->getVolume() == 0)
                $this->setVolume(10);
        }

        public function play()
        {
            if ($this->getLigado() && !($this->getTocando()))
                $this->setTocando(true);
        }

        public function pause()
        {
            if ($this->getLigado() && $this->getTocando())
                $this->setTocando(false);
        }

    }