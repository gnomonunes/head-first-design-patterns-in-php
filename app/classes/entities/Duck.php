<?php
declare(strict_types=1);

namespace App\Classes\Entities;

use \App\Interfaces\Behaviors\FlyBehavior;
use \App\Interfaces\Behaviors\QuackBehavior;

abstract class Duck
{
    protected $breed;
    protected $flyBehavior;
    protected $quackBehavior;
    abstract protected function setBreed();
    abstract protected function display();

    public function __construct()
    {
        $this->setBreed();
    }

    public function setFlyBehavior(FlyBehavior $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }

    public function swim()
    {
        print "{$this->breed}: I'm swimming!\n";
    }

    public function performFly()
    {
        print "{$this->breed}: ";
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        print "{$this->breed}: ";
        $this->quackBehavior->quack();
    }
}
