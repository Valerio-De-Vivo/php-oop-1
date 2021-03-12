<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        body {
            display: flex;
            height:100vh;
            justify-content: space-around;
            align-items:center;
        }
    </style>
</head>
<body>
    

    <?php 

    class  Movie
    {
        public $titolo;
        public $genere;
        public $durata;
        public $serietv;
        public $numero_episodi;
        public $fonte;
        public $prezzo;

        function __construct($fonte) {
            $this->fonte = $fonte;
        }

        public function setprezzo($fonte) {
            if ($fonte == 'netflix') {
                $this->prezzo = 12;
            } else {
                $this->prezzo = 5;
            }
        }

        public function getprezzo(){
            return $this->prezzo;
        }

        public function setserie($serietv){
            if ($serietv) {
                $this->serietv  = 'si';
            } else {
                $this->serietv = 'no';
            }
        }

        public function getserie(){
            return $this->serietv;
        }




    }

    //. 1 FILM 

    $film1 = new Movie('netflix');
    $film1->titolo = 'The 100';
    $film1->genere = 'fantasy';
    $film1->durata = 130;
    $film1->serietv = true;
    $film1->numero_episodi = 45;

    $film1->setprezzo('netflix');
    $prezzo_film = $film1->getprezzo();

    $film1->setserie(true);
    $serie_tv = $film1->getserie();

    ?>

    <div>
        <?php 
            echo 'Titolo: '.$film1->titolo.'<br>';
            echo 'Genere: '.$film1->genere.'<br>';
            echo 'Durata puntata: '.$film1->durata.'minuti <br>';
            echo 'SerieTv: '.$film1->serietv.'<br>';
            echo 'numero episodi: '.$film1->numero_episodi.'<br>';
            echo 'fonte: '.$film1->fonte.'<br>';
            echo 'Prezzo: '.$film1->prezzo.'€ <br>';
        ?>

    </div>

        <?php 

    //. 2 FILM 

        $film2 = new Movie('netflix');
        $film2->titolo = 'La casa di Carta';
        $film2->genere = 'azione';
        $film2->durata = 100;
        $film2->serietv = true;
        $film2->numero_episodi = 15;

        $film2->setprezzo('sky');
        $prezzo_film = $film2->getprezzo();

        $film2->setserie(true);
        $serie_tv = $film2->getserie();

        ?>


        <div>
            <?php 
                echo 'Titolo: '.$film2->titolo.'<br>';
                echo 'Genere: '.$film2->genere.'<br>';
                echo 'Durata puntata: '.$film2->durata.'minuti <br>';
                echo 'SerieTv: '.$film2->serietv.'<br>';
                echo 'numero episodi: '.$film2->numero_episodi.'<br>';
                echo 'fonte: '.$film2->fonte.'<br>';
                echo 'Prezzo: '.$film2->prezzo.'€ <br>';
            ?>
    </div>

    <?php 

//. 3 FILM 

    $film3 = new Movie('sky');
    $film3->titolo = 'Gomorra';
    $film3->genere = 'mafia';
    $film3->durata = 120;
    $film3->serietv = false;
    $film3->numero_episodi = 1;

    $film3->setprezzo('sky');
    $prezzo_film = $film3->getprezzo();

    $film3->setserie(false);
    $serie_tv = $film3->getserie();

    ?>


    <div>
        <?php 
            echo 'Titolo: '.$film3->titolo.'<br>';
            echo 'Genere: '.$film3->genere.'<br>';
            echo 'Durata puntata: '.$film3->durata.'minuti <br>';
            echo 'SerieTv: '.$film3->serietv.'<br>';
            echo 'numero film: '.$film3->numero_episodi.'<br>';
            echo 'fonte: '.$film3->fonte.'<br>';
            echo 'Prezzo: '.$film3->prezzo.'€ <br>';
        ?>
</div>


</body>
</html>