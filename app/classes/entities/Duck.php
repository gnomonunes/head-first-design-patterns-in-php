<?php

namespace App\Classes\Entities;

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
