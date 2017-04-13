<?php

require_once 'AcoesVideo.php';

class Video implements AcoesVideo
{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function __construct($titulo)
    {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    //

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    public function getViews()
    {
        return $this->views;
    }

    public function getCurtidas()
    {
        return $this->curtidas;
    }

    public function getReproduzindo()
    {
        return $this->reproduzindo;
    }

    //

    public function play()
    {
        $this->reproduzindo = true;
    }

    public function pause()
    {
        $this->reproduzindo = false;
    }

    public function like()
    {
        $this->curtidas ++;
    }

}