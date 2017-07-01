<?php

namespace App\Classes\Behaviors;

use \App\Interfaces\Behaviors\QuackBehavior;

class QuackSqueak implements QuackBehavior
{
    public function quack()
    {
        $this->quackSqueak();
    }

    public function quackSqueak()
    {
        print "Squeak!\n";
    }
}
