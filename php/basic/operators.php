<!DOCTYPE html>
<html>
<body>

<?php
$x = 10;  
$y = 6;

echo $x + $y;
echo $x - $y;
echo $x * $y;
echo $x / $y;
echo $x % $y;
echo $x ** $y;
echo $x * $y;
echo $x;
$x += 100;
$x -= 30;
$x *= 6;
$x /= 5;
$x %= 5;
echo $x;

var_dump($x == $y); // returns true because values are equal
var_dump($x === $y); // returns false because types are not equal
var_dump($x != $y); // returns false because values are equal
var_dump($x <> $y); // returns false because values are equal
var_dump($x !== $y); // returns true because types are not equal
var_dump($x > $y); // returns true because $x is greater than $y
var_dump($x < $y); // returns true because $x is less than $y
var_dump($x >= $y); // returns true because $x is greater than or equal to $y
var_dump($x <= $y); // returns true because $x is less than or equal to $y
echo ($x <=> $y); // returns -1 because $x is less than $y

echo ++$x;
echo $x++;
echo --$x;
echo $x--;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
if ($x == 100 or $y == 80) {
    echo "Hello world!";
}
if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}
if ($x == 100 && $y == 50) {
    echo "Hello world!";
}
if ($x == 100 || $y == 80) {
    echo "Hello world!";
}
if ($x !== 90) {
    echo "Hello world!";
}

$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;

$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1;

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
print_r($x + $y); // union of $x and $y
var_dump($x == $y);
var_dump($x === $y);
var_dump($x != $y);
var_dump($x <> $y);
var_dump($x !== $y);

// if empty($user) = TRUE, set $status = "anonymous"
echo $status = (empty($user)) ? "anonymous" : "logged in";
echo("<br>");

$user = "John Doe";
// if empty($user) = FALSE, set $status = "logged in"
echo $status = (empty($user)) ? "anonymous" : "logged in";

// variable $user is the value of $_GET['user']
// and 'anonymous' if it does not exist
echo $user = $_GET["user"] ?? "anonymous";
echo("<br>");

// variable $color is "red" if $color does not exist or is null
echo $color = $color ?? "red";

?>  

</body>
</html>