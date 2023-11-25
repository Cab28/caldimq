<?php
use DivisionByZeroException;
final class Mach_Number
{
    public static function Mach(int|float $object_speed, int|float $speed_sound): int|float
    {
        if (!$speed_sound) {
            throw new DivisionByZeroException();
        }
        return $object_speed / $speed_sound;
    }
    
    public static function ObjectSpeed(int|float $speed_sound, int|float $Mach): int|float
    {
        return $speed_sound * $Mach;
    }
    
    public static function SpeedSound(int|float $object_speed, int|float $Mach): int|float
    {
        if (!$Mach) {
            throw new DivisionByZeroException();
        }
        return $object_speed / $Mach;
    }
}
