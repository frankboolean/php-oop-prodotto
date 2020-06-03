<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>OOP magazzino</title>
  </head>
  <body>
    <?php

    class Prodotto {

      public $nome;
      public $price;

      public function __construct($nome, $price) {

        $this->nome =  $nome;
        $this->price = $price;
      }

      public function printMe(){
        echo "i tuoi prodotti in magazzino sono" ."<br>" . $this -> nome ."<br>" . $this -> price;
      }

    }
    // class extend



    $sq1= new Prodotto('patate', '10euro');

    echo $sq1 -> printMe();



     ?>

  </body>
</html>
