<?php
declare(strict_types=1);

namespace App\Classes\Entities;

use \App\Classes\Behaviors\QuackQuack;
use \App\Classes\Behaviors\FlyNoWay;

class ModelDuck extends Duck
{
    public function __construct()
    {
        parent::__construct();
        $this->quackBehavior = new QuackQuack();
        $this->flyBehavior = new FlyNoWay();
    }

    protected function setBreed()
    {
        $this->breed = "Model Duck";
    }

    public function display()
    {
        print "This is a {$this->breed}\n";
    }
}
