<?php

namespace Class\QuackBehavior;

use Interface\QuackBehavior;

class Quack implements QuackBehavior
{
    public function quack(): string
    {
        return 'Quack, Quack, Quack.';
    }
}
