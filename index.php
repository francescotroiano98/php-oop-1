<?php 

class Movie {

    public $title;
    public $originaltitle;
    public $description;
    public $type;
    
    function __construct($_title, $_originaltitle, $_description, $_type){
        $this->title = $_title;
        $this->originaltitle = $_originaltitle;
        $this->description = $_description;
        $this->type = $_type;
    }

    public function getInfo() {

        return [
            'title' => $this->title,
            'originaltitle' => $this->originaltitle,
            'description' => $this->description,
            'type' => $this->type
        ];
    }

    
}

$titanic = new Movie('Titanic', 'Titanic', '
Il film "Titanic" è un epica storia di amore ambientata sul celebre transatlantico. Quando una giovane donna di classe alta si innamora di un artista povero a bordo della nave, i loro destini si intrecciano in un tragico evento che definisce il loro amore e la loro sopravvivenza.', 'dramma romantico e storico');

var_dump($titanic);
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MOVIE</title>
    </head>
    <body>
    <header>
        <h1>I TUOI FILM</h1>
    </header>
    <main>
        <p>
            
            
            
        </p>
    </main>
    </body>
</html>