<?php

namespace App\Classes;

abstract class Duck
{
    protected $breed;
    abstract protected function setBreed();
    abstract protected function display();

    public function __construct()
    {
        $this->setBreed();
    }

    public function quack()
    {
        print "{$this->breed}: Quack!\n";
    }

    public function swim()
    {
        print "{$this->breed}: Swimming...\n";
    }
}
