<?php
declare(strict_types=1);

namespace App\Classes\Behaviors;

use \App\Interfaces\Behaviors\QuackBehavior;

class QuackMute implements QuackBehavior
{
    public function quack()
    {
        $this->quackMute();
    }

    public function quackMute()
    {
        print "...\n";
    }
}
