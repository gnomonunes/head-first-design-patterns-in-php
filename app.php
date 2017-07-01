<?php
require_once 'autoloader.php';

$ducks = array(
    'MallardDuck',
    'RedheadDuck',
    'RubberDuck'
);

foreach ($ducks as $duckBreed) {
    $className = "App\Classes\\{$duckBreed}";
    $duck = new $className;
    $duck->display();
    $duck->swim();
    $duck->quack();
}
