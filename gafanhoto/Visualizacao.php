<?php

require_once 'Video.php';
require_once 'Gafanhoto.php';

class Visualizacao
{

    private $espectador;
    private $filme;

    //

    public function __construct($espectador, $filme)
    {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() +  1);
    }

    //

    public function getEspectador()
    {
        return $this->espectador;
    }

    public function setEspectador($espectador)
    {
        $this->espectador = $espectador;
    }

    public function getFilme()
    {
        return $this->filme;
    }

    public function setFilme($filme)
    {
        $this->filme = $filme;
    }

    //

    public function avaliar() {
        $this->filme->setAvaliacao(5);
    }

    public function avaliarNota($n) {
        $this->filme->setAvaliacao($n);
    }

    public function avaliarPorcentagem($p) {

        /*
        if ($p <= 20)
            $nova = 3;
        elseif ($p <= 50)
            $nova = 5;
        elseif ($p <= 90)
            $nova = 5;
        else
            $nova = 10;
        */

        switch ($p) {
            case $p <= 20 : $nova = 3; break;
            case $p <= 50 : $nova = 5; break;
            case $p <= 90 : $nova = 8; break;
            default : $nova = 10;
        }

        $this->filme->setAvaliacao($nova);

    }

}