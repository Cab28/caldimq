<?php
use DivisionByZeroException;
final class Mach_Number
{
    public static function calculateMach(int|float $velocity, int|float $c): int|float
    {
        if (!$c) {
            throw new DivisionByZeroException();
        }
        return $velocity / $c;
    }
    
    public static function calculateVelocity(int|float $c, int|float $M): int|float
    {
        return $c * $M;
    }
    
    public static function calculateCurrentAir(int|float $velocity, int|float $M): int|float
    {
        if (!$M) {
            throw new DivisionByZeroException();
        }
        return $velocity / $M;
    }
}
