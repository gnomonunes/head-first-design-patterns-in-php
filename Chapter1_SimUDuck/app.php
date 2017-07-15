<?php
declare(strict_types=1);

require_once 'autoloader.php';

use \App\Classes\Behaviors\FlyRocketPowered;

$ducks = array(
    'MallardDuck',
    'RedheadDuck',
    'RubberDuck',
    'ModelDuck'
);

foreach ($ducks as $duckBreed) {
    $className = "App\Classes\Entities\\{$duckBreed}";

    $duck = new $className();

    if ($duckBreed == 'ModelDuck') {
        $duck->setFlyBehavior(new FlyRocketPowered());
    }

    print "$duckBreed:\n";

    $duck->display();
    $duck->performQuack();
    $duck->performFly();
    $duck->swim();

    print "--------\n";
}
