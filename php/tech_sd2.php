<?php

class FooLack {
    var $var1;
    var $var2 = "constant string";

    public function doSomething() {
        $this->var1 = "test";
        $this->var2 = "another"

        print("Hello world!" . PHP_EOL);
    }
}