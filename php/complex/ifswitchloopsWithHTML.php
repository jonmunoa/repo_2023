<!DOCTYPE html>

<h1 id="pepe" style="color:blue;">A Blue Heading</h1>
<?php
$t = date("H");
$favcolor = "red";
?>
<html lang="en">
<?php    
if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {?>
    <div class="author-name">        
<?php            
    switch ($favcolor) {
    case "red":
        $x = 1;
        while($x <= 5) {
            echo "The number is: $x <br>";
            $y = 1;
            do {
                echo "The number is: $y <br>";
                for ($z = 0; $z <= 100; $z+=10) {
                    if ($z == 4) {?>
                        <div class="author-name-prefix">Intern1</div>
                    <?php
                        break;
                    }
                    elseif ($z == 5) {
                        continue;
                    }
                    echo "The number is: $z <br>";
                    $colors = array("red", "green", "blue", "yellow");
                    foreach ($colors as $value) {    ?>
                        <div class="author-name-prefix">Intern2</div>
                    <?php                    
                        echo "$value <br>";
                    }
                }
                $y++;
            } while ($y <= 5);
            $x++;
        }
        break;
    case "blue":?>
    <div class="author-name-prefix">Author1</div>
<?php
        echo "Your favorite color is blue!";
        break;
    case "green":?>
        <div class="author-name-prefix">Author2</div>
    <?php
        echo "Your favorite color is green!";
        break;
    default:?>
    <div class="author-name-prefix">Author3</div>
<?php
        echo "Your favorite color is neither red, blue, nor green!";
    }?>        
<?php  }

?>