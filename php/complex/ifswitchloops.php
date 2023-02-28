<?php
$t = date("H");
$favcolor = "red";

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    switch ($favcolor) {
    case "red":
        $x = 1;
        while($x <= 5) {
            echo "The number is: $x <br>";
            $y = 1;
            do {
                echo "The number is: $y <br>";
                for ($z = 0; $z <= 100; $z+=10) {
                    if ($z == 4) {
                        break;
                    }
                    elseif ($z == 5) {
                        continue;
                    }
                    echo "The number is: $z <br>";
                    $colors = array("red", "green", "blue", "yellow");
                    foreach ($colors as $value) {                        
                        echo "$value <br>";
                    }
                }
                $y++;
            } while ($y <= 5);
            $x++;
        }
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
    }
}

?>