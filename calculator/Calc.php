<?php

namespace Calculator;

class Calc
{
    public $a;
    public $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function sum()
    {
        return $this->a + $this->b;
    }

    public function dif()
    {
        return $this->a - $this->b;
    }

    public function mul()
    {
        return $this->a * $this->b;
    }

    public function div()
    {
        return $this->a / $this->b;
    }
}


// $class = new Calc($_POST['a'], $_POST['b']);

// echo $class->{$_POST['op']}();
