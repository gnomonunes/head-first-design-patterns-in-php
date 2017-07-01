<?php
declare(strict_types=1);

require_once 'autoloader.php';

$ducks = array(
    'MallardDuck',
    'RedheadDuck',
    'RubberDuck'
);

foreach ($ducks as $duckBreed) {
    $className = "App\Classes\Entities\\{$duckBreed}";

    $duck = new $className();
    $duck->display();
    $duck->performQuack();
    $duck->performFly();
    $duck->swim();

    print "--------\n";
}
