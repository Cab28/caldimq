<?php

class Mach_Number
{
    /* Скорость потока */
    protected int|float $v;
    /* Скорость звука */
    protected int|float $c;

    public function __construct(int|float $v, int|float $c) 
    {
        $this->v = $v;
        $this->c = $c;
    }
    
    public function calc(): int|float
    {
        return $this->v / $this->v;
    }
}
