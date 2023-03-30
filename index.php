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

$movie1 = new Movie("The Family Man", "Brett Ratner", 2000, ["Commedia", "Drammatico"]);
$movie2 = new Movie("Le ali della libertá", "Frank Darabont", 1994, ["Drammatico"]);
$movie3 = new Movie("Thor: Love and Thunder", "Taika Waititi", 2022, ["Sci-fi", "Azione"]);

echo $movie1->info();
echo "\n";
echo $movie2->info();
echo "\n";
echo $movie3->info();
