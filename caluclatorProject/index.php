<?php

require_once './init.php';


$c = new Calculator();

$c->setOperation(new Adder());
$c->calculate(10, 20);
echo $result = $c->getResult();//30

echo "<br>";

$c->setOperation(new Subtractor());
$c->calculate(10);
echo $result = $c->getResult();//20

echo "<br>";

$c->setOperation(new Multiplier());
$c->calculate(2);
echo $result = $c->getResult();//40

echo "<br>";

$c->setOperation(new Divider());
$c->calculate(5);
echo $result = $c->getResult();//8
