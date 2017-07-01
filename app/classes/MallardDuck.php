<?php

namespace App\Classes;

class MallardDuck extends Duck
{
    protected function setBreed()
    {
        $this->breed = "Mallard Duck";
    }

    public function display()
    {
        print "This is a {$this->breed}\n";
    }
}
