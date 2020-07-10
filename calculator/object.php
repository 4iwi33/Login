<?php

require 'Calc.php';

use \Calculator\Calc;

$class = new Calc($_POST['a'], $_POST['b']);

echo $class->{$_POST['op']}();
