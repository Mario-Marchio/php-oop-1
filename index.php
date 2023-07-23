<?php

class Movie {
    public $titolo;
    public $genere;
    public $annoDiUscita;

    public function __construct($titolo, $genere, $annoDiUscita) {
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->annoDiUscita = $annoDiUscita;
    }

    public function getInfoFilm() {
        return "Titolo: {$this->titolo}, Genere: {$this->genere}, Anno di Uscita: {$this->annoDiUscita}";
    }
}

$film1 = new Movie("film 1", "genere 1", 2000);
$film2 = new Movie("film 2", "genere 2", 2022);


var_dump($film1);
var_dump($film2);

