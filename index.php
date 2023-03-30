<?php

class Movie
{
    public $titolo;
    public $regista;
    public $anno;
    public $genere;

    public function __construct($titolo, $regista, $anno, $genere)
    {
        $this->titolo = $titolo;
        $this->regista = $regista;
        $this->anno = $anno;
        $this->genere = $genere;
    }

    public function info()
    {
        return "Titolo: " . $this->titolo . ", Regista: " . $this->regista . ", Anno: " . $this->anno .
            ", Genere: " . $this->genere;
    }
}

$movie1 = new Movie("The Family Man", "Brett Ratner", 2000, "Commedia");
$movie2 = new Movie("Le ali della libertá", "Frank Darabont", 1994, "Drammatico");
$movie3 = new Movie("Thor: Love and Thunder", "Taika Waititi", 2022, "Sci-fi");

echo $movie1->info();
echo "\n";
echo $movie2->info();
echo "\n";
echo $movie3->info();
