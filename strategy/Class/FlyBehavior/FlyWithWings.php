<?php

namespace Class\FlyBehavior;

use Interface\FlyBehavior;

class FlyWithWings implements FlyBehavior
{
    /**
     * 
     */
    public function fly(): string
    {
        return 'I can fly with my wings.';
    }
}
