<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sprint 3</title>
        <style>
                h1 , h2 {
                        text-align : center;
                }
                .ex {
                        padding: 20px;
                        background-color: #be9fbf;
                }
        </style>
</head>
<body>
        <h1>Patterns</h1>
        <h2>Nivell 1</h2>
<section class="ej01 ex">
<?php

echo "<h3> Exercici 1 : Singleton  </h3>
        <p>Tens la següent definició de classe que pretén modelar a el famós personatge de Tigger dels llibres 'Winnie The Pooh' d'A A. Milne:</p>";
echo "<p> 
        class TiggerOriginal {<br/>
                private function __construct() {<br/>
                        echo 'Building character...' . PHP_EOL;<br/>
                }<br/>
                public function roar() {<br/>
                        echo 'Grrr! . PHP_EOL;<br/>
                }<br/>
        }
</p>";
echo "<p> Sembla raonable esperar que només hi hagi un objecte Tigger (després de tot, ell és l'únic!), Però la implementació actual permet tenir múltiples objectes Tigger diferents:</p>";
echo "<p> Refactorizar la classe Tigger en un Singleton considerant els següents punts:</p>";
echo "<p> Definiu el mètode getInstance () que no tingui arguments. Aquesta funció és responsable de crear una instància de la classe Tigger només una vegada i tornar aquesta única instància cada vegada que es crida.</p>";
echo "<p> Imprimeix en pantalla múltiples vegades el rugit de Tigger.</p>";
echo "<p> Afegeix un mètode getCounter () que retorni el nombre de vegades que Tigger ha realitzat rugits.</p>";
echo "<p><strong>Resultado:</strong></p>";



class Tigger {
                
        private static $instance;
        private $counter;
        protected function __clone(){}
        private function __construct() 
        {
                echo "Building character..." . PHP_EOL;
                echo "<br>" ;
        }

        public static function getInstance() {
                // otro método - no diferencia
                // if( self::$instance === null){
                //         self::$instance = new self();
                // }
                if(!self::$instance instanceof self) {
                        self::$instance = new self();
                }
                return self::$instance;
        }

        public function roar() {
                echo "Grrr!" . PHP_EOL ;
                ++$this->counter;
                echo "<br>" ;
        }

        public function getCounter(){
                return $this->counter;
        }
}

Tigger::getInstance()->roar();
Tigger::getInstance()->roar();
Tigger::getInstance()->roar();
Tigger::getInstance()->roar();
Tigger::getInstance()->roar();


echo 'Rugidos = ' . Tigger::getInstance()->getCounter() . PHP_EOL;





?>


</section>
        
</body>
</html>
