<?php
$txt = "W3Schools.com";
echo "I love $txt!";

$txt = "W3Schools.com";
echo "I love " . $txt . "!";

$x = 5; // global scope
$y = 4.365;
$z = 7;
$b = true;
echo $x + $y + $z;
var_dump($x);

function myTest() {
        static $x = 5; // local scope
        global $y, $z;
            // using x inside this function will generate an error
        echo "<p>Variable x inside function is: $x</p>";
}
myTest();

function myTest2() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
myTest2();

echo "<p>Variable x outside function is: $x</p>";

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>