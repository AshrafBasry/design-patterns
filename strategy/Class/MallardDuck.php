<?php

namespace Class;

use Interface\Duck;
use Class\FlyBehavior\FlyWithWings;
use Class\QuackBehavior\Quack;

class MallardDuck extends Duck
{
    /**
     * 
     */
    public function __construct()
    {
        $this->quakBehavior = new Quack();
        $this->flyBehavior = new FlyWithWings();
    }

    /**
     * 
     */
    public function display(): string
    {
        return 'I look like a mallardduck.';
    }
}
