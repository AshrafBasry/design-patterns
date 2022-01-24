<?php

namespace Class\FlyBehavior;

use Interface\FlyBehavior;

class FlyNoWay implements FlyBehavior
{
    /**
     * 
     */
    public function fly(): string
    {
        return 'Sorry, I can\'t fly.';
    }
}
