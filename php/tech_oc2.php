<?php

class Foo {
    public function example() {
        if ($a == $b) {
            if ($a1 == $b1) {
                fiddle();
            } elseif ($a2 == $b2) {
                fiddle();
            } else {
                fiddle();
            }
        } elseif ($c == $d) {
            fiddle();
        } elseif ($e == $f) {
            fiddle();
        } else {
            switch ($z) {
                case 1:
                    fiddle();
                    break;
                case 2:
                    fiddle();
                    break;
                case 3:
                    fiddle();
                    break;
                default:
                    fiddle();
                    break;
            }
        }
    }
}