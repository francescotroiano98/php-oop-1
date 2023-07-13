<?php 

class Movie {

    public $title;
    public $originaltitle;
    public $description;
    public $type;
    public $actors;
    
    function __construct($_title, $_originaltitle, $_description, $_type, $_actors){
        $this->title = $_title;
        $this->originaltitle = $_originaltitle;
        $this->description = $_description;
        $this->type = $_type;
        $this->actors = $_actors;
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

$titanic = new Movie('Titanic', 'Titanic', '
Il film "Titanic" è un epica storia di amore ambientata sul celebre transatlantico. Quando una giovane donna di classe alta si innamora di un artista povero a bordo della nave, i loro destini si intrecciano in un tragico evento che definisce il loro amore e la loro sopravvivenza.', 'dramma romantico e storico', $mainActor);




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
            <ul>Role:<?php

                    echo $mainActor->getRole();

                ?>
                <li style="margin-left: 20%;">
                    <?php

                        echo $mainActor->getName();
                        echo $mainActor->getSurname();

                    ?>
                </li>
            </ul>
        </section>    
    </main>
    </body>
</html>