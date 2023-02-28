<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();

$x = "Hello world!";
$x = null;
var_dump($x);

echo strlen("Hello world!"); // outputs 12

$x = 1.9e411;
var_dump($x);

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;

?>