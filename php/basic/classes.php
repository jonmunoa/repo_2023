<?php
class Fruit {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";

  // Properties
  public $name;
  protected   $color;
  private $weight;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
  function __destruct() {
    echo "The fruit is {$this->name}.";
  }
}
$apple = new Fruit();
var_dump($apple instanceof Fruit);

echo Fruit::LEAVING_MESSAGE;

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
    public function message() {
      echo "Am I a fruit or a berry? ";
    }
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();

// Strawberry1 is inherited from Fruit
class Strawberry1 extends Fruit {
  public function message1() {
    echo "Am I a fruit or a berry? ";
  }
}
$strawberry = new Strawberry1("Strawberry", "red");
$strawberry->message1();


?>