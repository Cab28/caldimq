<?php
use DivisionByZeroException;
final class Mach_Number
{
    /**
	 * Вычисление числа Маха.
	 * @param int|float $object_speed
	 * @param int|float $speed_sound
	 * @return int|float
	 * @throws DivisionByZeroExceptio При делении на ноль.
	 */
    public static function Mach(int|float $object_speed, int|float $speed_sound): int|float
    {
        if (!$speed_sound) {
            throw new DivisionByZeroException();
        }
        return $object_speed / $speed_sound;
    }

    /**
	 * Вычисление скорости объекта.
	 * @param int|float $speed_sound
	 * @param int|float $Mach
	 * @return int|float
	 */
    public static function ObjectSpeed(int|float $speed_sound, int|float $Mach): int|float
    {
        return $speed_sound * $Mach;
    }

    /**
	 * Вычисление скорости звука в данной среде.
	 * @param int|float $object_speed
	 * @param int|float $Mach
	 * @return int|float
	 * @throws DivisionByZeroExceptio При делении на ноль.
	 */
    public static function SpeedSound(int|float $object_speed, int|float $Mach): int|float
    {
        if (!$Mach) {
            throw new DivisionByZeroException();
        }
        return $object_speed / $Mach;
    }
}
