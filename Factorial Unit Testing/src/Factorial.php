<?php

class Factorial
{
    public function calculate($number)
    {
        if (!is_int($number) || $number < 0) {
            return null;
        }
        if ($number == 0) {
            return 1;
        }
        return $number * $this->calculate($number - 1);
    }
}