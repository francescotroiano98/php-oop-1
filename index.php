<?php 

class Movie {

    public $title;
    public $originaltitle;
    public $description;
    public $type;
    public $actorsList;
    
    
    function __construct($_title, $_originaltitle, $_description, $_type, $_actorsList = array()){
        $this->title = $_title;
        $this->originaltitle = $_originaltitle;
        $this->description = $_description;
        $this->type = $_type;
        $this->actorsList = $_actorsList;
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

$anotherActor = new Actors('Brad', 'Pitt', 'Main character');
$anotherMovie = new Movie('Fight Club', 'Fight Club', 'Il film "Fight Club" segue le vicende di un uomo insoddisfatto che, insieme a un misterioso personaggio, fonda un club segreto in cui le persone si sfidano in incontri violenti per sfogare le loro frustrazioni.', 'drammatico', array($anotherActor));



var_dump($titanic, $anotherMovie);

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
            <ul>Characters:
                <?php foreach ($titanic->actorsList as $actor) { ?>
                    <li style="margin-left: 20%;">
                        <?php echo $actor->getName(); ?>
                        <?php echo $actor->getSurname(); ?>
                        <?php echo $actor->getRole(); ?>
                    </li>
                <?php } ?>
            </ul>
        </section>
        <section style="width: 20%;">
        <h2> Title:
            <?php echo $anotherMovie->getTitle(); ?>
        </h2>

        <h3>Original Title:
            <?php echo $anotherMovie->getOriginalTitle(); ?>
        </h3>

        <p>Description:
            <?php echo $anotherMovie->getDescription(); ?>
        </p>

        <p>Type:
            <?php echo $anotherMovie->getType(); ?>
        </p>

        <ul>Characters:
            <?php foreach ($anotherMovie->actorsList as $actor) { ?>
                <li style="margin-left: 20%;">
                    <?php echo $actor->getName(); ?>
                    <?php echo $actor->getSurname(); ?>
                    <?php echo $actor->getRole(); ?>
                </li>
            <?php } ?>
        </ul>
    </section>    
    </main>
    </body>
</html>