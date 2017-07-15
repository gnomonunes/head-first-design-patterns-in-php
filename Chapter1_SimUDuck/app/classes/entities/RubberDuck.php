<?php
declare(strict_types=1);

namespace App\Classes\Entities;

use \App\Classes\Behaviors\QuackSqueak;
use \App\Classes\Behaviors\FlyNoWay;

class RubberDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new QuackSqueak();
        $this->flyBehavior = new FlyNoWay();
    }

    /**
     * Rubber ducks doesn't quack like regular ducks, so it overrides quack().
     */
    public function quack()
    {
        print "{$this->breed}: Squeak!\n";
    }
}
