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
        $this->actorsList = array();
    }


       
        public function getTitle() {

            return $this->title;
                
        }
        public function getOriginalTitle() {

            return $this->originaltitle;
                
        }
        public function getDescription() {

            return $this->description;
                
        }
        public function getType() {

            return $this->type;
                
        }
        public function addActor($actor) {
            $this->actorsList[] = $actor;
        }
    
}

class Actors {

    public $name;
    public $surname;
    public $role;

    function __construct($_name, $_surname, $_role){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->role = $_role;
    }

    public function getName() {

        return $this->name;
            
    }
    public function getSurname() {

        return $this->surname;
            
    }
    public function getRole() {

        return $this->role;
            
    }

}

$mainActor = new Actors ('Leonardo  ', 'Di Caprio', ' Main character');

$secondaryActor = new Actors('Kate', 'Winslet', 'Secondary character');

$titanic = new Movie('Titanic', 'Titanic', '
Il film "Titanic" è un epica storia di amore ambientata sul celebre transatlantico. Quando una giovane donna di classe alta si innamora di un artista povero a bordo della nave, i loro destini si intrecciano in un tragico evento che definisce il loro amore e la loro sopravvivenza.', 'dramma romantico e storico');

$titanic->addActor($mainActor);

$titanic->addActor($secondaryActor);




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
        <section style="width: 20%;">

       
            <h2> Title:
                <?php
                    echo $titanic->getTitle();
                ?>
            </h2>

            <h3>Original Title:
            <?php
                echo $titanic->getOriginalTitle();
            ?>
            </h3>
            
            <p>Description:
                <?php

                    echo $titanic->getDescription();
                    
                ?>
            </p>

            <p>Type:
                <?php

                    echo $titanic->getType();
                    
                ?>
            </p>
            
        </section>    
    </main>
    </body>
</html>