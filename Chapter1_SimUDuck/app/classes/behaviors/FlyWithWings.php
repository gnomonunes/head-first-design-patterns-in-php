<?php
declare(strict_types=1);

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
        print "I'm flying with wings!\n";
    }
}
