<?php

class Movie
{
    public $titolo;
    public $regista;
    public $anno;
    public $generi;

    public function __construct($titolo, $regista, $anno, $generi)
    {
        $this->titolo = $titolo;
        $this->regista = $regista;
        $this->anno = $anno;
        $this->generi = $generi;
    }

    public function info()
    {
        return "Titolo: " . $this->titolo . ", Regista: " . $this->regista . ", Anno: " . $this->anno . ", Generi: " . implode(", ", $this->generi);
    }
}
