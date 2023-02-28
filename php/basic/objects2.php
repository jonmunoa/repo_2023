<?php

include "objects.php";

$ours = new Car("red","circle");
$a = ($ours->message());
$ours2 = new Car("red","circle");
$a = ($ours2->message());
$ours3 = new Car("red","circle");
$a = ($ours3->message());
$ours4 = new Car("red","circle");
$a = ($ours4->message());
$ours5 = new Car("red","circle");
$a = ($ours5->message());
$ours6 = new Car("red","circle");
$a = ($ours6->message());
$ours7 = new Car("red","circle");
$a = ($ours7->message());
$ours8 = new Car("red","circle");
$a = ($ours8->message());
$ours9 = new Car("red","circle");
$a = ($ours9->message());

// Strawberry is inherited from Fruit
class Car1 extends Car {
    public function message1() {
      echo "Am I a fruit or a berry? ";
    }
}
$c1 = new Strawberry1("Strawberry", "red");
$c1->message1();



?>
<html>
<head>
<title>Using a class from another file</title>
</head>
<body>
<h1>Application Shell</h1>
This script loads in a class from another file and creates and uses a simple
obeject from it, coming up with the answer <?= $a ?>.<br /><br />
Significantly for this demonstration, the class file includes a test harness
which (if it is run alone) produces a whole page of results.
</body></html>