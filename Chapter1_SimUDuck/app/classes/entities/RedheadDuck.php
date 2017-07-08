<?php
declare(strict_types=1);

namespace App\Classes\Entities;

use \App\Classes\Behaviors\QuackQuack;
use \App\Classes\Behaviors\FlyWithWings;

class RedheadDuck extends Duck
{
    public function __construct()
    {
        parent::__construct();
        $this->quackBehavior = new QuackQuack();
        $this->flyBehavior = new FlyWithWings();
    }

    protected function setBreed()
    {
        $this->breed = "RedHead Duck";
    }
}
