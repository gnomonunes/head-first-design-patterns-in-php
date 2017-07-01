<?php

namespace App\Classes;

class RubberDuck extends Duck
{
    protected function setBreed()
    {
        $this->breed = "Rubber Duck";
    }

    public function display()
    {
        print "This is a {$this->breed}\n";
    }

    /**
     * Rubber duck doesn't quack like regular ducks, so it overrides quack().
     */
    public function quack()
    {
        print "{$this->breed}: Squeak!\n";
    }
}