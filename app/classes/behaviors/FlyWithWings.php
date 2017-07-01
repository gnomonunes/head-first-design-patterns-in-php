<?php

namespace App\Classes\Behaviors;

use \App\Interfaces\Behaviors\FlyBehavior;

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        $this->flyWithWings();
    }

    public function flyWithWings()
    {
        print "I'm flying!\n";
    }
}
