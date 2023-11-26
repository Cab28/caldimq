<?php
use DivisionByZeroException;

/**
 * Класс для вычисления числа Атвуда
 */
final class Atwood_number
{
    /**
     * Вычисление числа Атвуда.
     * @param int|float $density1 Плотность первой жидкости
     * @param int|float $density2 Плотность второй жидкости
     * @return int|float
     */
     public static function Atwood(int|float $density1, int|float $density2): int|float
     {
         return ($density1 - $density2) / ($density1 + $density2);
     }

    /**
     * Вычисление плотности первой жидкости
     * @param int|float $Atwood число Атвуда
     * @param int|float $density2 Плотность второй жидкости
     * @return int|float
     */
    public static function density1(int|float $Atwood, int|float $density2): int|float
    {
        return -($density2 * ($Atwood+1)) / ($Atwood - 1);
    }

    /**
     * Вычисление плотности второй жидкости
     * @param int|float $Atwood число Атвуда
     * @param int|float $density2 Плотность первой жидкости
     * @return int|float
     */
    public static function density2(int|float $Atwood, int|float $density1): int|float
    {
        return -($density1 * ($Atwood-1)) / ($Atwood + 1);
    }
}
