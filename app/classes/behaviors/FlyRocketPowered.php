<?php
declare(strict_types=1);

namespace App\Classes\Behaviors;

use \App\Interfaces\Behaviors\FlyBehavior;

class FlyRocketPowered implements FlyBehavior
{
    public function fly()
    {
        $this->flyRocketPowered();
    }

    public function flyRocketPowered()
    {
        print "I'm flying rocket powered!\n";
    }
}
