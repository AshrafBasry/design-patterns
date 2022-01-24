<?php

namespace Interface;

abstract class Duck
{
    public FlyBehavior $flyBehavior;
    public QuackBehavior $quakBehavior;

    public abstract function display();

    /**
     * 
     */
    public function swim(): string
    {
        return 'I\'m Swimming';
    }

    public function performQuack(): string
    {
        return $this->quakBehavior->quack();
    }

    /**
     * 
     */
    public function performFly(): string
    {
        return $this->flyBehavior->fly();
    }

    /**
     * 
     */
    public function setQuakBehavior(QuackBehavior $behavior): void
    {
        $this->quakBehavior = $behavior;
    }

    /**
     * 
     */
    public function setFlyBehavior(FlyBehavior $behavior): void
    {
        $this->flyBehavior = $behavior;
    }
}
