<?php
declare(strict_types=1);

namespace App\Classes\Behaviors;

use \App\Interfaces\Behaviors\FlyBehavior;

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        $this->flyNoWay();
    }

    public function flyNoWay()
    {
        print "I can't fly :-(\n";
    }
}
