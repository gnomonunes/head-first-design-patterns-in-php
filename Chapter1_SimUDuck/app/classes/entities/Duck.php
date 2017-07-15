<?php
declare(strict_types=1);

namespace App\Classes\Entities;

use \App\Interfaces\Behaviors\FlyBehavior;
use \App\Interfaces\Behaviors\QuackBehavior;

abstract class Duck
{
    protected $flyBehavior;
    protected $quackBehavior;

    public function setFlyBehavior(FlyBehavior $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }

    public function display()
    {
        print "I'm a duck!\n";
    }

    public function swim()
    {
        print "I'm swimming!\n";
    }

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }
}
