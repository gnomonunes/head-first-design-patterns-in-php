<?php

namespace App\Classes;

class RedheadDuck extends Duck
{
    protected function setBreed()
    {
        $this->breed = "RedHead Duck";
    }

    public function display()
    {
        print "This is a {$this->breed}\n";
    }
}
