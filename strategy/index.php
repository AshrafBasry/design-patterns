<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

spl_autoload_register(function ($class) {
    require(__DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php');
});

use Class\FlyBehavior\FlyNoWay;
use Class\MallardDuck;

$duck = new MallardDuck();
echo $duck->display() . '<br />';
echo $duck->performFly() . '<br />';
echo $duck->performQuack() . '<br />';
$duck->setFlyBehavior(new FlyNoWay());
echo $duck->performFly() . '<br />';
