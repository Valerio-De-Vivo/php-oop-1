<?php 



class  Movie
{
    public $titolo;
    public $genere;
    public $durata;
    public $serietv;
    public $numero_episodi;


}


$film1 = new Movie();
$film1->titolo = 'The 100';
$film1->genere = 'fantasy';
$film1->durata = 130;
$film1->serietv = true;
$film1->numero_episodi = 45;

echo 'Titolo: '.$film1->titolo.'<br>';
echo 'Genere: '.$film1->genere.'<br>';
echo 'Durata: '.$film1->durata.'<br>';
echo 'SerieTv: '.$film1->titolo.'<br>';
echo 'numero episodi: '.$film1->numero_episodi.'<br>';
