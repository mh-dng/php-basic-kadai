<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    class Food {
      private $name;
      private $price;

      public function __construct($name,$price){
       $this->name = $name;
       $this->price = $price;
      }

      public function show_price() {
        echo $this->price;
      }
    }
    class Animal{
      private $name;
      private $height;
      private $weight;

      public function __construct($name,$height,$weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      public function show_height() {
        echo $this->height;
      }
    }

    $food = new Food('ラーメン',800);
    $animal = new Animal('猿',1000,500);

    print_r($food);
    print_r($animal);

    echo '<br>';
    echo $food->show_price() . '<br>';
    echo $animal->show_height() . '<br>';
    ?>
  </p>
</body>
</html>