<?php

namespace App\Classes\Behaviors;

use \App\Interfaces\Behaviors\QuackBehavior;

class QuackQuack implements QuackBehavior
{
    public function quack()
    {
        $this->quackQuack();
    }

    public function quackQuack()
    {
        print "Quack!\n";
    }
}
