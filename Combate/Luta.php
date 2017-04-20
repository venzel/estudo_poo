<?php

    require_once 'Atleta.php';

    class Luta
    {

        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        //

        public function getDesafiado()
        {
            return $this->desafiado;
        }

        public function setDesafiado($desafiado)
        {
            $this->desafiado = $desafiado;
        }

        public function getDesafiante()
        {
            return $this->desafiante;
        }

        public function setDesafiante($desafiante)
        {
            $this->desafiante = $desafiante;
        }

        public function getRounds()
        {
            return $this->rounds;
        }

        public function setRounds($rounds)
        {
            $this->rounds = $rounds;
        }

        public function getAprovada()
        {
            return $this->aprovada;
        }

        public function setAprovada($aprovada)
        {
            $this->aprovada = $aprovada;
        }

        //

        public function marcarLuta($l1, $l2) {

            if (($l1->getCategoria() === $l2->getCategoria()) && ($l1 != $l2)) {
                $this->aprovada = true;
                $this->desafiado = $l1;
                $this->desafiante = $l2;
            } else {
                $this->aprovada = false;
                $this->desafiado = null;
                $this->desafiante = null;
            }

        }

        public function lutar() {

            if ($this->getAprovada()) {

                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = rand(0,2);

                echo $vencedor;

                switch ($vencedor) {

                    case 0 :
                        echo "<h1 style='color:red;'>O juiz decretou empate!</h1>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        break;
                    case 1 :
                        echo "<h1 style='color:red;'>{$this->desafiado->getNome()} {$this->desafiado->getApelido()} vence a luta!!!</h1>";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;
                    case 2 :
                        echo "<h1 style='color:red;'>{$this->desafiante->getNome()} {$this->desafiante->getApelido()} vence a luta!!!</h1>";
                        $this->desafiante->ganharLuta();
                        $this->desafiado->perderLuta();
                        break;
                }

            } else {

                echo "<br>-------------------------";
                echo "A luta não pode acontecer!!!";

            }

        }

    }