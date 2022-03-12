<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sprint 3 nivell 2</title>
        <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
        <h1 class="text-center text-xl m-4 p-4"> Adapter</h1>
        <h2 class="text-center text-lg "> Nivell 2</h2>
<section class=" bg-rose-400 p-10">
<?php

echo '<h3 class="text-center p-1 text-xl mb-9"> Exercici 2 : Adapter  </h3>
        <p>Suposeu que té les segü ents dues classes de PHP: ... </p>';
echo "<p> Voleu que els seus galls d'indi es comportin com ànecs, de manera que ha d'aplicar el adapter pattern. En el mateix arxiu, escriviu una classe anomenada TurkeyAdapter i assegureu-vos que tingui en compte el següent:</p>";
echo "<p> La traducció de l'quack entre classes és fàcil: simplement cridi al mètode Gobble quan sigui apropiat. </p>";
echo "<p> Encara que ambdues classes tenen un mètode fly, els galls dindis només poden volar a ratxes curtes, no poden volar llargues distàncies com els ànecs. Per mapejar entre el mètode fly d'un ànec i el mètode del gall dindi, ha de trucar a l'mètode fly del gall dindi cinc vegades per compensar-ho.</p>";
echo "<p> Prova la teva classe amb el següent codi:</p>";
echo '<p> function duck_interaction($duck){<br/>
       $duck->quack();<br/>
       $duck->fly()};<br/></p>';
echo "<br/>";
echo '<p class="mb-9"><strong>Resultado:</strong></p>';



echo "<p> Primer método: EXTENDS </p><br/><br/>";


class Duck {
    public function quack() {
           echo "Quack <br/>";
    }
    public function fly() {
           echo "I'm flying <br/>";
    }
}

class Turkey  {

    public function gobble() {
           echo "Gobble gobble <br/>";
    }

    public function fly() {
    echo "I'm flying a short distance <br/>";
    }
}



class TurkeyAdapter extends Duck {
       private $turkey;

       public function __construct(Turkey $turkey) {
              $this->turkey = $turkey;
       }
       public function quack(){
              return  $this->turkey->gobble();
       }


       public function fly() {
              for($i = 0; $i < 5; $i++){
                     $this->turkey->fly();
              }
       }
}

function duck_interaction($animalo) {
       $animalo->quack();
       $animalo->fly();
}

$duck = new Duck;
$turkey = new Turkey;
$turkeyAdapter = new TurkeyAdapter($turkey);

echo "The Turkey says ... <br/>";
$turkey->gobble();
$turkey->fly();

echo "The Duck says ... <br/>";
echo " /* duck_interaction($ duck)*/ <br/>" ;
duck_interaction($duck);

echo "The TurkeyAdapter says .. <br/>";
echo " /* duck_interaction($ turkeyAdapter) */ <br/>" ;
duck_interaction($turkeyAdapter);

?>
</section>



<section class="bg-rose-400 p-10">
<?php

echo "<p> Segundo método: INTERFACE e IMPLEMENTS </p><br/><br/>";
interface DuckInterface {
        public function quack();
        public function fly();
}

class Duck2 implements DuckInterface{
       public function quack() {
              echo "Quack <br/>";
       }
       public function fly() {
              echo "I'm flying <br/>";
       }
   }
   

interface TurkeyInterface {
        public function gobble();
        public function fly();
}

class Turkey2 implements TurkeyInterface{
       public function gobble() {
              echo "Gobble gobble <br/>";
       }
   
       public function fly() {
       echo "I'm flying a short distance <br/>";
       }
   }

class TurkeyAdapter2 implements DuckInterface{
       private $turkey2;

       public function __construct(TurkeyInterface $turkey2) {
                $this->turkey2 = $turkey2;
       }
       public function quack(){
              $this->turkey2->gobble();
       }

       public function fly() {
              for($i = 0; $i < 5; $i++){
                     $this->turkey2->fly();
              }
       }
}

function duck_interaction2($animal) {
       $animal->quack();
       $animal->fly();
}

$duck2 = new Duck2;
$turkey2 = new Turkey2();
$turkeyAdapter2 = new TurkeyAdapter2($turkey2);

echo "The Turkey says ... <br/>";
$turkey2->gobble();
$turkey2->fly();

echo "The Duck says ... <br/>";
echo " /* duck_interaction($ duck)*/<br/>" ;
duck_interaction2($duck2);

echo "The TurkeyAdapter says .. <br/>";
echo " /* duck_interaction($ turkeyAdapter)*/<br/>" ;
duck_interaction2($turkeyAdapter2);

?>
</section>
        
</body>
</html>