<?php
use DivisionByZeroException;
final class Mach_Number
{
    /* Скорость потока */
    protected int|float $v;
    /* Скорость звука */
    protected int|float $c;
    /* Число Маха */
    protected int|float $M;

    public function __construct() 
    {
        
    }
    
    public function setV(int|float $v): Mach_Number
    {
        $this->v = $v;
        return $this;
    }
    
    public function getV()
    {
        return $this->v;
    }
    
    public function setC(int|float $c): Mach_Number
    {
        $this->c = $c;
        return $this;
    }
    
    public function getC()
    {
        return $this->c;
    }
    
    public function setM(int|float $M): Mach_Number
    {
        $this->M = $M;
        return $this;
    }
    
    public function getM()
    {
        return $this->M;
    }
    
    public function calc(): int|float
    {
        if (!$this->c) {
            throw new DivisionByZeroException();
        }
        return $this->v / $this->c;
    }
}
