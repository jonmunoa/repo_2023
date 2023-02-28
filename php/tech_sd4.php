<?php

class Foo
{
    public function printItem($string)
    {
        echo 'Foo: ' . $string . PHP_EOL;
    }
    
    public function printPHP()
    {
        echo 'PHP is great.' . PHP_EOL;
    }
}

class Bar1 extends Foo
{
    public function printItem1($string)
    {
        echo 'Bar1: ' . $string . PHP_EOL;
    }
}

class Bar2 extends bar1
{
    public function printItem2($string)
    {
        echo 'Bar2: ' . $string . PHP_EOL;
    }
}

class Bar3 extends bar2
{
    public function printItem3($string)
    {
        echo 'Bar3: ' . $string . PHP_EOL;
    }
}

$foo = new Foo();
$bar = new Bar3();
$foo->printItem('baz'); // Salida: 'Foo: baz'
$foo->printPHP();       // Salida: 'PHP is great' 
$bar->printItem2('baz'); // Salida: 'Bar2: baz'
$bar->printPHP();       // Salida: 'PHP is great'